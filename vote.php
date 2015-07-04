<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫

if(isset($_SESSION['userid'])){
		$userid=$_SESSION['userid'];
		$name=$_POST['bestname'];
		$query="select id from candidate where `name`='" . $name . "'";
		$result=mysql_query($query);
		if(mysql_num_rows($result)) $bestid=mysql_result($result, 0, 'id');
		$query="update user set `thebest`='" . $bestid . "' where id=$userid";
		mysql_query($query);
}
?>