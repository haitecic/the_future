<?php
require_once "config/db_connect.php";
$query="select user.thebest, candidate.name, count(user.thebest) as number from user left join candidate on candidate.id=user.thebest group by user.thebest order by number desc";
$theBestResult=mysql_query($query);
$theBestString="";
$countBallot=[];
if($theBestResult){
	for($i=0; $i<mysql_num_rows($theBestResult); $i++){
		$number=mysql_result($theBestResult, $i, 'number');
		$can_name=mysql_result($theBestResult, $i, 'candidate.name');
		$can_id=mysql_result($theBestResult, $i, 'user.thebest');
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
if($zeroResult){
	for($s=0; $s<mysql_num_rows($zeroResult); $s++){
		$can_name=mysql_result($zeroResult, $s, 'candidate.name');
		if($can_name!=null){
			array_push($countBallot['name'], $can_name);
			array_push($countBallot['number'], 0);
		}
	}
}
echo json_encode($countBallot);
?>