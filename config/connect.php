<?php
$dbh = new PDO("mysql:host=localhost; dbname=votehomecomtw", "votehomecomtw", "ej4pos4p");
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");
?>