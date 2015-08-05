<?php
session_start();
//連接資料庫
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");
if(isset($_COOKIE['winner']) && !empty($_COOKIE['winner'])){
	
	$user_data=$_POST['userdata'];
	$user_data=json_decode($user_data);
	$fb_id=$user_data->id;
	

	if(!checkifexist($fb_id)){
		insertuserdata($fb_id, $user_data);
	}
	
	
	$_SESSION['fb_id']=$fb_id;
	$listResult=array();
	
	
	//候選人名單
	$winnerid=$_COOKIE['winner'];
	
	//$winnername='郭台銘';
	$candidateNameList=array();
	$candidateWikiList=array();
	$candidateIdList=array();
	
	//將優勝者塞入名單
	$dbh->beginTransaction();
	$sql="select name, brief from candidate where id=:winnerid";
	$stmt=$dbh->prepare($sql);
	$stmt->bindParam(':winnerid', $winnerid);
	$exeres = $stmt->execute();
	$dbh->commit();
	$rowresults=array();
	if ($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
		//$ff=$rowresults;
		if(!empty($rowresults)){
			
			foreach($rowresults as $rowresult){
				$winnername=$rowresult['name'];
				$wiki=$rowresult['brief'];
				array_push($candidateNameList, $winnername);
				array_push($candidateWikiList, $wiki);
				array_push($candidateIdList, $winnerid);
			}
		}
		$rowresults=null;
	}
	
	//
	//讀取朋友們的意見
	$fbstring="";
	$friendsbest=array();
	$friendsString="";
	$friendArea=false;//判斷是否有朋友區塊
	$numFriendArea=0;
	$in=false;//判斷是否friendsbest包含winnerid
	$friendsarray=$user_data->friends->data;
	
	if(is_object($user_data->friends)){
		
		$friendnum=count($friendsarray);
		for($i=0; $i<$friendnum; $i++){
			$friendId=$friendsarray[$i]->id;
			if($i==0) $fbstring="user.fb_id='" . $friendId . "'";
			else $fbstring="user.fb_id='" . $friendId . "' OR " . $fbstring;
		}
	
		//如果有朋友
		if($fbstring!=""){
		
			$dbh->beginTransaction();
			$sql="SELECT user.thebest, candidate.name, candidate.brief, candidate.id FROM user LEFT JOIN candidate ON candidate.id=user.thebest WHERE ($fbstring) AND (user.thebest IS NOT NULL) GROUP BY user.thebest";
			$stmt = $dbh->prepare($sql);
			$exeres = $stmt->execute();
			$dbh->commit();
			$rowresults1st=array();
			if ($exeres){
				for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
					$rowresults1st[$i]=$row;
				}
				if(!empty($rowresults1st)){
					
					foreach($rowresults1st as $rowresult){
						$friendArea=true;
						$best=$rowresult['thebest'];
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
						$dbh->beginTransaction();
						$sql="SELECT user.thebest, candidate.name, candidate.brief, candidate.id FROM user LEFT JOIN candidate ON candidate.id=user.thebest WHERE ( $fbstring ) AND (NOT (user.thebest=:winnerid)) AND (user.thebest IS NOT NULL)  GROUP BY user.thebest";
						$stmt=$dbh->prepare($sql);
						$stmt->bindParam(':winnerid', $winnerid);
						$exeres = $stmt->execute();
						$dbh->commit();
						$rowresults2nd=array();
						if ($exeres){
							for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
								$rowresults2nd[$i]=$row;
							}
							if(!empty($rowresults2nd)){
								foreach($rowresults2nd as $rowresult){
									$best=$rowresult['thebest'];
									$name=$rowresult['name'];
									$wiki=$rowresult['brief'];
									$id=$rowresult['id'];
									array_push($candidateNameList, $name);
									array_push($candidateWikiList, $wiki);
									array_push($candidateIdList, $id);
									$friendsString="OR fight_result.candidate_id='" . $best . "' " . $friendsString;
								}
							}
							$rowresults2nd=null;
						}
					}
					else{
						foreach($rowresults1st as $rowresult){
							$best=$rowresult['thebest'];
							$name=$rowresult['name'];
							$wiki=$rowresult['brief'];
							$id=$rowresult['id'];
							array_push($candidateNameList, $name);
							array_push($candidateWikiList, $wiki);
							array_push($candidateIdList, $id);
						}
					}
				}
				$rowresults1st=null;
			}
		}
	}
	
	////////
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
	$dbh->beginTransaction();
	$sql="select thebest from user where fb_id=:user_fbid";
	$stmt = $dbh -> prepare($sql);
	$stmt->bindParam(':user_fbid', $user_fbid);
	$exeres = $stmt->execute();
	$dbh->commit();
	$rowresults=array();
	if ($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
		
		//如果我有選
		if(!empty($rowresults)){
			$mybestid=$rowresults[0]['thebest'];
			if($mybestid!=null){
				if(!in_array($mybestid, $candidateIdList)){
					$mybeststring="OR fight_result.candidate_id='" . $mybestid . "'";
					$dbh->beginTransaction();
					$sql="select name, brief from candidate where id=:mybestid";
					$stmt = $dbh -> prepare($sql);
					$stmt->bindParam(':mybestid', $mybestid);
					$exeres = $stmt->execute();
					$dbh->commit();
					$rowresults2nd=array();
					if ($exeres){
						for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
							$rowresults2nd[$i]=$row;
						}
						if(!empty($rowresults2nd)){
							foreach($rowresults2nd as $rowresult){
								$mybestname=$rowresult['name'];
								$mybestwiki=$rowresult['brief'];
								array_push($candidateNameList, $mybestname);
								array_push($candidateWikiList, $mybestwiki);
								array_push($candidateIdList, $mybestid);
							}
						}
						$rowresults2nd=null;
					}
				}
				$myBestExist=true;
			}
		}
		$rowresults=null;
	}
	
	
	//讀取其他候選人
	$dbh->beginTransaction();
	$sql = "SELECT candidate.name, candidate.id, candidate.brief FROM fight_result LEFT JOIN candidate ON fight_result.candidate_id = candidate.id WHERE NOT (fight_result.candidate_id=:winnerid $friendsString $mybeststring) GROUP BY fight_result.candidate_id";;
	$stmt = $dbh -> prepare($sql);
	$stmt->bindParam(':winnerid', $winnerid);
	$exeres = $stmt->execute();
	$dbh->commit();
	$rowresults=array();
	if ($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
		if(!empty($rowresults)){
			foreach($rowresults as $rowresult){
				$name=$rowresult['name'];
				$id=$rowresult['id'];
				$wiki=$rowresult['brief'];
				if($name!=null){
					array_push($candidateNameList, $name);
					array_push($candidateWikiList, $wiki);
					array_push($candidateIdList, $id);
				}
			}
		}
	}
	
	$listResult['name']=$candidateNameList;
	$listResult['wiki']=$candidateWikiList;
	$listResult['id']=$candidateIdList;
	$listResult['friendArea']=$friendArea;//boolean
	$listResult['include']=$in;//boolean
	$listResult['numberFriendsBest']=$numFriendArea;
	$listResult['myBest']=$mybestid;//沒有的話就是null，有則回傳值(id)
	//$listResult['ff']=$ff;
	$listResult['status']="login";
	$listResult['fbname']=$user_data->name;

	//清除cookie
	setcookie("winner", "", time()-3600);
	
	echo json_encode($listResult);
}
else{
	$result['status']="logout";
	echo json_encode($result);
}


function checkifexist($fbid){
	global $dbh;
	$chechresult=false;
	$dbh->beginTransaction();
	$sql="select * from user where fb_id=:fbid";
	$stmt=$dbh->prepare($sql);
	$stmt->bindParam(':fbid', $fbid);
	$exeres=$stmt->execute();
	$dbh->commit();
	$rowresults=array();
	if($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
		if(!empty($rowresults)) $chechresult=true;
		$rowresults=null;
		return $chechresult;
	}
}


function insertuserdata($fbid, $data_obj){
	global $dbh;
	$email=$data_obj->email;
	$first_name=$data_obj->first_name;
	$last_name=$data_obj->last_name;
	$gender=$data_obj->gender;
	$link=$data_obj->link;	
	$name=$data_obj->name;
	$timezone=$data_obj->timezone;
	$updated_time=$data_obj->updated_time;
	$verified=$data_obj->verified;
	$dbh->beginTransaction();
	$sql="insert into user (`fb_id`, `fb_email`, `fb_first_name`, `fb_last_name`, `fb_gender`, `fb_name`, `fb_timezone`, `fb_update_time`, `fb_link`, `fb_verified`) value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt=$dbh->prepare($sql);
	$stmt->execute(array($fbid, $email, $first_name, $last_name, $gender, $name, $timezone, $updated_time, $link, $verified));
	$dbh->commit();
}
?>