<?php
session_start();
require_once "config/db_connect.php";
//fb
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/Facebook/');
require __DIR__ . '/autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
if(isset($_SESSION['userid'])){
	$winnerid=$_SESSION['winner'];
	//$winnername='郭台銘';
	$candidateNameList=[];
	$candidateWikiList=[];
	$candidateIdList=[];
	
	//將優勝者塞入名單
	$query="select name, brief from candidate where `id`='" . $winnerid . "'";
	$result=mysql_query($query);
	if($result){
		$wiki=mysql_result($result, 0, 'brief');
		$winnername=mysql_result($result, 0, 'name');
		array_push($candidateNameList, $winnername);
		array_push($candidateWikiList, $wiki);
		array_push($candidateIdList, $winnerid);
	}
	
	
	//讀取朋友們的意見
	$fbstring="";
	$friendsbest=[];
	$friendsString="";
	$friendArea=false;//判斷是否有朋友區塊
	$numFriendArea=0;
	$in=false;//判斷是否friendsbest包含winnerid
	$token=$_SESSION['token'];
	//echo $token;
	//$token="CAAPxYFPUJrQBAHV6O4Hz2ktCDOqpCR7ZCZArK220BQZBFo2Pxwkc0JewkBE6hRCs1kyxzb2MZA71x6nsS9P1L8JnuxGlTO99WVHBvMrF0wpFSImQlFca7djxIzUxhrGKeLBDCmwZArVOLCyhqQsQZA2A0SeRGjYQq0UBblLcyKqi8jPWHDItXTAoBgxebvDF65b8NuD34Ju5HCUgEYmV3m";
	FacebookSession::setDefaultApplication('1109820955698868', '1994561e96d042b790f3f1f6401b7182');
	$session = new FacebookSession($token);
	$request = new FacebookRequest($session, 'GET', '/me/friends');
	$response = $request->execute();
	$graphObject = $response->getGraphObject();
	
	if(is_object($graphObject->getProperty('data'))){
		$friendnum=count($graphObject->getProperty('data')->asArray());
		for($i=0; $i<$friendnum; $i++){
			//$graphObject->getProperty('data')->getProperty($i)->getProperty('name');
			$friendId=$graphObject->getProperty('data')->getProperty($i)->getProperty('id');
			if($i==0) $fbstring="user.fb_id='" . $friendId . "'";
			else $fbstring="user.fb_id='" . $friendId . "' OR " . $fbstring;
		}
		//echo $fbstring;
		
		
		//如果有朋友
		if($fbstring!=""){
			$query="SELECT user.thebest, candidate.name, candidate.brief, candidate.id FROM user LEFT JOIN candidate ON candidate.id=user.thebest WHERE $fbstring GROUP BY user.thebest";
			$result=mysql_query($query);
			//若朋友有thebest
			if($result){			
				for($s=0; $s<mysql_num_rows($result); $s++){
					$best=mysql_result($result, $s, 'thebest');
					if($best!=null){
						$friendArea=true;
						array_push($friendsbest, $best);
						$friendsString="OR fight_result.candidate_id='" . $best . "' " . $friendsString;
					}
				}
				//如果朋友選項與使用者重複就從矩陣中刪除，
				if(in_array($winnerid, $friendsbest)){
					unset($friendsbest);
					unset($friendsString);
					$in=true;//如果有friendArea，是否friendsbest包含winnerid
					$friendsbest=[];
					$friendsString="";
					$query="SELECT user.thebest, candidate.name, candidate.brief, candidate.id FROM user LEFT JOIN candidate ON candidate.id=user.thebest WHERE $fbstring AND (NOT (user.thebest='" . $winnerid . "')) GROUP BY user.thebest";
					$result=mysql_query($query);
					if($result){
						for($s=0; $s<mysql_num_rows($result); $s++){
							$best=mysql_result($result, $s, 'thebest');
							if($best!=null){
								$name=mysql_result($result, $s, 'candidate.name');
								$wiki=mysql_result($result, $s, 'candidate.brief');
								$id=mysql_result($result, $s, 'candidate.id');
								array_push($candidateNameList, $name);
								array_push($candidateWikiList, $wiki);
								array_push($candidateIdList, $id);
								$friendsString="OR fight_result.candidate_id='" . $best . "' " . $friendsString;
							}
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
	$user_id=$_SESSION['userid'];
	$result=mysql_query("select thebest from user where id=$user_id");
	//如果我有選
	
	if($result){
		$mybestid=mysql_result($result, 0, 'thebest');
		if(!in_array($mybestid, $candidateIdList)){
			$mybeststring="OR fight_result.candidate_id='" . $mybestid . "'";
			$result=mysql_query("select name, brief from candidate where id=$mybestid");
			if($result){
				$mybestname=mysql_result($result, 0, 'name');
				$mybestwiki=mysql_result($result, 0, 'brief');
				array_push($candidateNameList, $mybestname);
				array_push($candidateWikiList, $mybestwiki);
				array_push($candidateIdList, $mybestid);
			}
		}
		$myBestExist=true;
	} 
	
	
	
	//讀取其他候選人
	$query="SELECT candidate.name, candidate.id, candidate.brief FROM fight_result LEFT JOIN candidate ON fight_result.candidate_id = candidate.id WHERE NOT (fight_result.candidate_id='" . $winnerid . "' $friendsString $mybeststring) GROUP BY fight_result.candidate_id";
	$result=mysql_query($query);
	if($result){
		for($i=0; $i<mysql_num_rows($result); $i++){
			$name=mysql_result($result, $i, 'candidate.name');
			$wiki=mysql_result($result, $i, 'candidate.brief');
			$id=mysql_result($result, $i, 'candidate.id');
			if($name!=null){
				array_push($candidateNameList, $name);
				array_push($candidateWikiList, $wiki);
				array_push($candidateIdList, $id);
			}
		}
	}
	/*
	foreach($candidateNameList as $element){
		echo $element;
		echo "<br>";
	}
	echo count($candidateNameList);
	*/
	$listResult['name']=$candidateNameList;
	$listResult['wiki']=$candidateWikiList;
	$listResult['id']=$candidateIdList;
	$listResult['friendArea']=$friendArea;//boolean
	$listResult['include']=$in;//boolean
	$listResult['numberFriendsBest']=$numFriendArea;
	$listResult['myBest']=$mybestid;//沒有的話就是null，有則回傳值(id)
	echo json_encode($listResult);
	//var_dump($listResult);
}
?>