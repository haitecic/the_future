<?php
session_start();
require_once "config/db_connect.php";//連結到本機端資料庫
$user_data=$_POST['userdata'];
$user_token=$_POST['token'];
$user_data=json_decode($user_data);
$id=$user_data->id;
if(checkifexist($id)){
	$result=mysql_query("select id from user where `fb_id`=$id");
	if(!isset($_SESSION['userid'])){
		$_SESSION['userid']=mysql_result($result, 0, 'id');
		$_SESSION['token']=$user_token;
	}
}
else{
	insertuserdata($id, $user_data);
	$result=mysql_query("select id from user where `fb_id`=$id");
	$_SESSION['userid']=mysql_result($result, 0, 'id');
	$_SESSION['token']=$user_token;
}




function checkifexist($fb_id){
$chechresult=false;
$query="select * from user where `fb_id`=$fb_id";
$result=mysql_query($query);
if($result) $chechresult=true;
	return $chechresult;
}


function insertuserdata($fb_id, $data_obj){
$email=$data_obj->email;
$first_name=$data_obj->first_name;
$last_name=$data_obj->last_name;
$gender=$data_obj->gender;
$link=$data_obj->link;
$locale=$data_obj->locale;
$name=$data_obj->name;
$timezone=$data_obj->timezone;
$updated_time=$data_obj->updated_time;
$verified=$data_obj->verified;
$query="insert into user (`fb_id`, `fb_email`, `fb_first_name`, `fb_last_name`, `fb_gender`, `fb_locale`, `fb_name`, `fb_timezone`, `fb_update_time`, `fb_link`, `fb_verified`) value('" . $fb_id . "', '" . $email . "', '" . $first_name . "', '" . $last_name . "', '" . $gender . "', '" . $locale . "', '" . $name . "', '" . $timezone . "', '" . $updated_time . "', '" . $link . "', '" . $verified . "')";
mysql_query($query);
}


?>