<?php
require_once "config/db_connect.php";//連結到本機端資料庫project_resource
$fbid=$_POST['fb_id'];
$query="select id from user where fb_id=$fbid";
$result=mysql_query($query);
if(mysql_num_rows($result)) $user_id=mysql_result($result, 0, 'id');
else $user_id=null;
echo $user_id;
?>