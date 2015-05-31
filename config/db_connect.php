<?php
$database_host="localhost";
$username="root";
$password="";
$database_name="taiwan_future";
$db_connect=mysql_connect($database_host, $username, $password);
$db_select=mysql_select_db($database_name);
mysql_query("SET NAMES utf8");//與資料庫傳遞時中文編碼確認
?>