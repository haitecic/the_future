<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫
$fbid=$_POST['fb_id'];
$token=$_POST['token'];
	$query="select id from user where `fb_id`=$fbid";
	$result=mysql_query($query);
	$_SESSION['userid']=mysql_result($result, 0, 'id');
	$_SESSION['token']=$token;
	echo $token;
?>