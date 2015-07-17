<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫

if(isset($_SESSION['fb_id'])){
		$userfbid=$_SESSION['fb_id'];
		$name=$_POST['bestname'];
		if($name!=""){
			$query="select id from candidate where `name`='" . $name . "'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)){
				$rowresult=mysql_fetch_row($result);
				$bestid=$rowresult[0];
				$query="update user set `thebest`='" . $bestid . "' where fb_id=$userfbid";
			}
		}
		else $query="update user set `thebest`=Null where fb_id=$userfbid";
		mysql_query($query);

		
	$query="select user.thebest, candidate.name, count(user.thebest) as number from user left join candidate on candidate.id=user.thebest group by user.thebest order by number desc";
	$theBestResult=mysql_query($query);
	$theBestString="";
	$countBallot=[];
	if(mysql_num_rows($theBestResult)){
		for($i=0; $i<mysql_num_rows($theBestResult); $i++){
			$rowthebestresult=mysql_fetch_row($theBestResult);
			$ballotnumber=$rowthebestresult[2];
			$can_name=$rowthebestresult[1];
			$can_id=$rowthebestresult[0];
			if($can_name!=null){
				$countBallot['canname'][$i]=$can_name;
				$countBallot['ballotnumber'][$i]=(int)$ballotnumber;
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
				array_push($countBallot['canname'], $can_name);
				array_push($countBallot['ballotnumber'], 0);
			}
		}
	}
	$countBallot['height']=count($countBallot['canname']) * 30;
	$countBallot['status']="login";
	
	//清除session
	unset($_SESSION['fb_id']);
	session_destroy();
	echo json_encode($countBallot);	
}
else{
	$result['status']="logout";
	echo json_encode($result);	
}
?>