<?php
//ini_set('display_errors', 'On');
require_once "../config/db_connect.php";
$id=$_POST['id'];
//$id=99;
$query="delete from candidate where id=$id";
mysql_query($query);

$query="select round_id from fight_process where (winner_id=$id) or (loser_id=$id)";
$result=mysql_query($query);
if(mysql_num_rows($result)){
	for($i=0; $i<mysql_num_rows($result); $i++){
	$resultrow=mysql_fetch_row($result);
	$roundid=$resultrow[0];
	$query="delete from fight_result where id=$roundid";
	mysql_query($query);
	$query="delete from fight_process where round_id=$roundid";
	mysql_query($query);
	$query="delete from fight_personality where round_id=$roundid";
	mysql_query($query);
	}
}


$query="select id from user where thebest=$id";
$result=mysql_query($query);
if(mysql_num_rows($result)){
	for($i=0; $i<mysql_num_rows($result); $i++){
		$resultrow=mysql_fetch_row($result);
		$userid=$resultrow[0];
		$query="update user set `thebest`=Null where id=$userid";
		mysql_query($query);
	}
}
	$showresult['status']="finish";
	echo json_encode($showresult);
?>