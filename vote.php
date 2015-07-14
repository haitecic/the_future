<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫

if(isset($_SESSION['userid'])){
		$userid=$_SESSION['userid'];
		$name=$_POST['bestname'];
		if($name!=""){
			$query="select id from candidate where `name`='" . $name . "'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)){
				$rowresult=mysql_fetch_row($result);
				$bestid=$rowresult[0];
				$query="update user set `thebest`='" . $bestid . "' where id=$userid";
			}
		}
		else $query="update user set `thebest`=Null where id=$userid";
		mysql_query($query);
}
?>