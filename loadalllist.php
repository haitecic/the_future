<?php
require_once "config/db_connect.php";
$query="select * from candidate";
$candidate_result=mysql_query($query);
for($i=0; $i<mysql_num_rows($candidate_result); $i++){
	$can_id=mysql_result($candidate_result, $i, 'id');
	$can_name=mysql_result($candidate_result, $i, 'name');
	$result=mysql_query("select count(*) as number from user where right_one=$can_id OR right_two=$can_id OR right_three=$can_id");
	if(mysql_num_rows($result)){
		$number=mysql_result($result, 0, 'number');
	}
	else $number=0;
	$countBallot['name'][$i]=$can_name;
	$countBallot['number'][$i]=$number;
}
echo json_encode($countBallot);
?>