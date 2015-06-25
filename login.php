<?php
$user_data=$_POST['data'];
$user_data=json_decode($user_data);
$id=$user_data->id;
if(checkifexist($id))
	{
	$user_id=$id;
	echo "yse";
	//讀取使用者的最愛人選
	$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_one WHERE user.id=$user_id");
	if(mysql_num_rows($result)) echo $rightone_img=mysql_result($result, 0, 'img');
	else $rightone_img=null;
	$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_two WHERE user.id=$user_id");
	if(mysql_num_rows($result)) $righttwo_img=mysql_result($result, 0, 'img');
	else $righttwo_img=null;
	$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_three WHERE user.id=$user_id");
	if(mysql_num_rows($result)) $rightthree_img=mysql_result($result, 0, 'img');
	else $rightthree_img=null;
	}
else
	{
	insertuserdata($id, $user_data);
	$user_id=$id;
	}




function checkifexist($fb_id){
$chechresult=false;
$query="select fb_id from user";
$result=mysql_query($query);
$num=mysql_num_rows($result);
for($k=0; $k<$num; $k++)
	{
	if($fb_id==mysql_result($result, $k, 'fb_id')) $chechresult=true;
	}
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