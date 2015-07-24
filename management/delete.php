<?php
require_once "../config/db_connect.php";
$id=$_GET['id'];
$query="delete from candidate where id=$id";
mysql_query($query);
$query="delete from fight_result where candidate_id=$id";
mysql_query($query);
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
echo "finished";
?>