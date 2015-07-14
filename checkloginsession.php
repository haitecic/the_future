<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫
$fbid=$_POST['fb_id'];
$token=$_POST['token'];
	$query="select id from user where `fb_id`=$fbid";
	$result=mysql_query($query);
	$rowresult=mysql_fetch_row($result);
	$_SESSION['userid']=$rowresult[0];
	$_SESSION['token']=$token;
?>