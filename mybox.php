<?php
require_once "config/db_connect.php";//連結到本機端資料庫project_resource
$action=$_POST['action'];
if($action=='load'){
	$user_id=$_POST['user'];
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
	$user_id=$_POST['user'];
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
	$winner=$_POST['fwinner'];
	$position=$_POST['personposition'];
	$user_id=$_POST['user'];
	switch($position)
	{
	case 1:
		$positionname='right_one';
		break;
	case 2:
		$positionname='right_two';
		break;
	case 3:
		$positionname='right_three';
		break;
	}
	$query="update user set `$positionname`=$winner where id=$user_id";
	mysql_query($query);
	}

?>