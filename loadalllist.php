<?php
require_once "config/db_connect.php";
$query="select user.thebest, candidate.name, count(user.thebest) as number from user left join candidate on candidate.id=user.thebest group by user.thebest order by number asc";
$result=mysql_query($query);
for($i=0; $i<mysql_num_rows($result); $i++){
	$number=mysql_result($result, $i, 'number');
	$can_name=mysql_result($result, $i, 'candidate.name');
	$countBallot['name'][$i]=$can_name;
	$countBallot['number'][$i]=$number;
}
echo json_encode($countBallot);
?>