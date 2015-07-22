<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫
if(isset($_COOKIE['winner']) && !empty($_COOKIE['winner'])){
	$user_data=$_POST['userdata'];
	//$user_token=$_POST['token'];
	$user_data=json_decode($user_data);
	$id=$user_data->id;
	
	if(!checkifexist($id)){
		insertuserdata($id, $user_data);
	}
	
	//$result=mysql_query("select id from user where `fb_id`=$id");
	//$rowresult=mysql_fetch_row($result);
	
	
	$_SESSION['fb_id']=$id;
	//echo $_SESSION['fb_id'];
	//載入全部名單
	$query="select user.thebest, candidate.name, count(user.thebest) as number from user left join candidate on candidate.id=user.thebest group by user.thebest order by number desc";
	$theBestResult=mysql_query($query);
	$theBestString="";
	$listResult=array();
	if(mysql_num_rows($theBestResult)){
		for($i=0; $i<mysql_num_rows($theBestResult); $i++){
			$rowthebestresult=mysql_fetch_row($theBestResult);
			$ballotnumber=$rowthebestresult[2];
			$can_name=$rowthebestresult[1];
			$can_id=$rowthebestresult[0];
			if($can_name!=null){
				$listResult['canname'][$i]=$can_name;
				$listResult['ballotnumber'][$i]=(int)$ballotnumber;
				if($theBestString=="") $theBestString = "(fight_result.candidate_id='" . $can_id . "')"; 
				else $theBestString = $theBestString . " OR (fight_result.candidate_id='" . $can_id . "')";
			}
		}
	}
	$query="SELECT candidate.name FROM fight_result LEFT JOIN candidate ON fight_result.candidate_id = candidate.id WHERE NOT ($theBestString) GROUP BY fight_result.candidate_id";
	$zeroResult=mysql_query($query);
	if(mysql_num_rows($zeroResult)){
		for($s=0; $s<mysql_num_rows($zeroResult); $s++){
			$rowzeroresult=mysql_fetch_row($zeroResult);
			$can_name=$rowzeroresult[0];
			if($can_name!=null){
				array_push($listResult['canname'], $can_name);
				array_push($listResult['ballotnumber'], 0);
			}
		}
	}
	$listResult['height']=count($listResult['canname']) * 30;



	//候選人名單
	$winnerid=$_COOKIE['winner'];
	//$winnername='郭台銘';
	$candidateNameList=array();
	$candidateWikiList=array();
	$candidateIdList=array();
	
	//將優勝者塞入名單
	$query="select name, brief from candidate where `id`='" . $winnerid . "'";
	$result=mysql_query($query);
	if(mysql_num_rows($result)){
		$rowresult=mysql_fetch_row($result);
		$winnername=$rowresult[0];
		$wiki=$rowresult[1];
		array_push($candidateNameList, $winnername);
		array_push($candidateWikiList, $wiki);
		array_push($candidateIdList, $winnerid);
	}
	
	
	//讀取朋友們的意見
	$fbstring="";
	$friendsbest=array();
	$friendsString="";
	$friendArea=false;//判斷是否有朋友區塊
	$numFriendArea=0;
	$in=false;//判斷是否friendsbest包含winnerid
	$friendsarray=$user_data->friends->data;
	//$friendarray=$fbDataObj->friends->data;
	//echo $friendarray[0]->name;
	
	if(is_object($user_data->friends)){
		$friendnum=count($friendsarray);
		for($i=0; $i<$friendnum; $i++){
		//	$friendsarray=$fbDataObj->friends->data;
			$friendId=$friendsarray[$i]->id;
			if($i==0) $fbstring="user.fb_id='" . $friendId . "'";
			else $fbstring="user.fb_id='" . $friendId . "' OR " . $fbstring;
		}
		//echo $fbstring;
	
		//如果有朋友
		if($fbstring!=""){
			$query="SELECT user.thebest, candidate.name, candidate.brief, candidate.id FROM user LEFT JOIN candidate ON candidate.id=user.thebest WHERE ($fbstring) AND (user.thebest IS NOT NULL) GROUP BY user.thebest";
			$result=mysql_query($query);
			if(mysql_num_rows($result)){			
				for($s=0; $s<mysql_num_rows($result); $s++){
					$rowresult=mysql_fetch_row($result);
					$best=$rowresult[0];
					$friendArea=true;
					array_push($friendsbest, $best);
					$friendsString="OR fight_result.candidate_id='" . $best . "' " . $friendsString;
				}
				//如果朋友選項與使用者重複就從矩陣中刪除，
				if(in_array($winnerid, $friendsbest)){
					unset($friendsbest);
					unset($friendsString);
					$in=true;//如果有friendArea，是否friendsbest包含winnerid
					$friendsbest=array();
					$friendsString="";
					$query="SELECT user.thebest, candidate.name, candidate.brief, candidate.id FROM user LEFT JOIN candidate ON candidate.id=user.thebest WHERE ( $fbstring ) AND (NOT (user.thebest='" . $winnerid . "')) AND (user.thebest IS NOT NULL)  GROUP BY user.thebest";
					$qq=$query;
					$result=mysql_query($query);
					if(mysql_num_rows($result)){
						for($s=0; $s<mysql_num_rows($result); $s++){
							$rowresult=mysql_fetch_row($result);
							$best=$rowresult[0];
							$name=$rowresult[1];
							$wiki=$rowresult[2];
							$id=$rowresult[3];
							array_push($candidateNameList, $name);
							array_push($candidateWikiList, $wiki);
							array_push($candidateIdList, $id);
							$friendsString="OR fight_result.candidate_id='" . $best . "' " . $friendsString;
						}
					}			
				}
				else{
					for($s=0; $s<mysql_num_rows($result); $s++){
						$best=mysql_result($result, $s, 'thebest');
						if($best!=null){
							$name=mysql_result($result, $s, 'candidate.name');
							$wiki=mysql_result($result, $s, 'candidate.brief');
							$id=mysql_result($result, $s, 'candidate.id');
							array_push($candidateNameList, $name);
							array_push($candidateWikiList, $wiki);
							array_push($candidateIdList, $id);
						}
					}
				}			
			}
		}
	}
	
	if($friendArea){
		if($in){
			$numFriendArea=count($candidateNameList);
			//echo "有重疊<br>";
		} 
		else{
			$numFriendArea=count($candidateNameList) -1;
			//echo "沒重疊<br>";
		} 
		//echo "朋友區域名單數量：" . $numFriendArea;
	}
	else{
		$friendsString="";
		//echo "沒朋友區塊";
	}
	
	
	//判斷使用者是否已經投過票，投票結果
	$myBestExist=false;
	$mybestid=null;
	$mybeststring="";
	//使用者的選擇
	$user_fbid=$user_data->id;
	$result=mysql_query("select thebest from user where `fb_id`=$user_fbid");
	//如果我有選
	
	if(mysql_num_rows($result)){
		$rowresult=mysql_fetch_row($result);
		$mybestid=$rowresult[0];
		if($mybestid!=null){
			if(!in_array($mybestid, $candidateIdList)){
				$mybeststring="OR fight_result.candidate_id='" . $mybestid . "'";
				$result=mysql_query("select name, brief from candidate where id=$mybestid");
				if(mysql_num_rows($result)){
					$rowresult=mysql_fetch_row($result);
					$mybestname=$rowresult[0];
					$mybestwiki=$rowresult[1];
					array_push($candidateNameList, $mybestname);
					array_push($candidateWikiList, $mybestwiki);
					array_push($candidateIdList, $mybestid);
				}
			}
			$myBestExist=true;
		}
	}
	
	
	//讀取其他候選人
	$query="SELECT candidate.name, candidate.id, candidate.brief FROM fight_result LEFT JOIN candidate ON fight_result.candidate_id = candidate.id WHERE NOT (fight_result.candidate_id='" . $winnerid . "' $friendsString $mybeststring) GROUP BY fight_result.candidate_id";
	$result=mysql_query($query);
	if(mysql_num_rows($result)){
		for($i=0; $i<mysql_num_rows($result); $i++){
			$rowresult=mysql_fetch_row($result);
			$name=$rowresult[0];
			$id=$rowresult[1];
			$wiki=$rowresult[2];
			if($name!=null){
				array_push($candidateNameList, $name);
				array_push($candidateWikiList, $wiki);
				array_push($candidateIdList, $id);
			}
		}
	}
	/**/
	$listResult['name']=$candidateNameList;
	$listResult['wiki']=$candidateWikiList;
	$listResult['id']=$candidateIdList;
	$listResult['friendArea']=$friendArea;//boolean
	$listResult['include']=$in;//boolean
	$listResult['numberFriendsBest']=$numFriendArea;
	$listResult['myBest']=$mybestid;//沒有的話就是null，有則回傳值(id)
	$listResult['status']="login";
	$listResult['qq']=$qq;
	//清除cookie
	setcookie("winner", "", time()-3600);
	
	echo json_encode($listResult);
}
else{
	$result['status']="logout";
	echo json_encode($result);
}




function checkifexist($fb_id){
$chechresult=false;
$query="select * from user where `fb_id`=$fb_id";
$result=mysql_query($query);
if(mysql_num_rows($result)) $chechresult=true;
	return $chechresult;
}


function insertuserdata($fb_id, $data_obj){
	$email=$data_obj->email;
	$first_name=$data_obj->first_name;
	$last_name=$data_obj->last_name;
	$gender=$data_obj->gender;
	$link=$data_obj->link;
	$locale=$data_obj->locale;
	$name=$data_obj->name;
	$timezone=$data_obj->timezone;
	$updated_time=$data_obj->updated_time;
	$verified=$data_obj->verified;
	$query="insert into user (`fb_id`, `fb_email`, `fb_first_name`, `fb_last_name`, `fb_gender`, `fb_name`, `fb_timezone`, `fb_update_time`, `fb_link`, `fb_verified`) value('" . $fb_id . "', '" . $email . "', '" . $first_name . "', '" . $last_name . "', '" . $gender . "', '" . $name . "', '" . $timezone . "', '" . $updated_time . "', '" . $link . "', '" . $verified . "')";
	mysql_query($query);
}
?>