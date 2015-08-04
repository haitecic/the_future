<?php
require_once "config/db_connect.php";
if(isset($_POST['command']) && !empty($_POST['command'])){
	$command=$_POST['command'];
	if($command=='start'){
		$dataResult=getlistdata();
		echo json_encode($dataResult);
	}
}

function getlistdata(){
	$query="select user.thebest, candidate.name, count(user.thebest) as number from user left join candidate on candidate.id=user.thebest group by user.thebest order by number desc";
	$theBestResult=mysql_query($query);
	$theBestString="";
	$countBallot=array();
	if(mysql_num_rows($theBestResult)){
		for($i=0; $i<mysql_num_rows($theBestResult); $i++){
			$rowthebestresult=mysql_fetch_row($theBestResult);
			$number=$rowthebestresult[2];
			$can_name=$rowthebestresult[1];
			$can_id=$rowthebestresult[0];
			if($can_name!=null){
				$countBallot['name'][$i]=$can_name;
				$countBallot['number'][$i]=(int)$number;
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
				array_push($countBallot['name'], $can_name);
				array_push($countBallot['number'], 0);
			}
		}
	}
	$countBallot['height']=count($countBallot['name']) * 30 + 130;
	return $countBallot;
}
?>