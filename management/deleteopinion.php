<?php
require_once "../config/db_connect.php";
$id=$_POST['id'];
//$id=99;/
/*
$query="delete from personality where id=$id";
mysql_query($query);*/
$query="delete from fight_personality where personality_id=$id";
mysql_query($query);
echo $query;
?>