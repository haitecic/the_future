<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫
if(isset($_SESSION['fb_id']) && !empty($_SESSION['fb_id'])){//確認有登入
	$fbData=$_POST['fb_data'];
	$fbDataObj=json_decode($fbData);
	$fb_id=$fbDataObj->id;
	if($fb_id!=$_SESSION['fb_id']){
		$result['status']="1out";
		echo json_encode($result);
		exit();
	}
	else{
	
	
	}
}
else{
	$result['status']="out";
	echo json_encode($result);
	exit();
}
//$friendarray=$fbDataObj->friends->data;
//echo $friendarray[0]->name;

//最後一輪的勝利者與名單會重複

//$fbDataObj->name;



	//$query="select id from user where `fb_id`=$fbid";
	//$result=mysql_query($query);
	//$rowresult=mysql_fetch_row($result);
	//$_SESSION['userid']=$rowresult[0];
	//$_SESSION['token']=$token;
?>