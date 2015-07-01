<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫

if(isset($_SESSION['userid'])){
	$action=$_POST['action'];
	$user_id=$_SESSION['userid'];
	if($action=='load'){
		$mybox=array();
		$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_one WHERE user.id=$user_id");
		if(mysql_num_rows($result)) $mybox[1]=mysql_result($result, 0, 'img');
		else $mybox[1]=null;
		$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_two WHERE user.id=$user_id");
		if(mysql_num_rows($result)) $mybox[2]=mysql_result($result, 0, 'img');
		else $mybox[2]=null;
		$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_three WHERE user.id=$user_id");
		if(mysql_num_rows($result)) $mybox[3]=mysql_result($result, 0, 'img');
		else $mybox[3]=null;
		echo json_encode($mybox);
	}
	else if($action=='check'){
		$thebest=$_POST['fwinner'];
		$query="select right_one, right_two, right_three from user where id='" . $user_id . "'";
		$result=mysql_query($query);
		$right_one=mysql_result($result, 0, 'right_one');
		$right_two=mysql_result($result, 0, 'right_two');
		$right_three=mysql_result($result, 0, 'right_three');
		if($thebest==$right_one || $thebest==$right_two || $thebest==$right_three) echo "overlap";
		else echo "qualified";
	}
	
	else if($action=='update'){
		$favorite=$_POST['myfavoriteid'];
		if(isset($favorite[0])) $one=$favorite[0];
		else $one="";
		if(isset($favorite[1])) $two=$favorite[1];
		else $two="";
		if(isset($favorite[2])) $three=$favorite[2];
		else $three="";
		$query="update user set `right_one`=$one, `right_two`=$two, `right_three`=$three where id=$user_id";
		mysql_query($query);
	}
}
?>