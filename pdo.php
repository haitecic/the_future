<html>
<head>
<meta charset="utf-8">
</head>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=votehomecomtw","votehomecomtw","ej4pos4p");
$pdo->query('SET NAMES UTF8');
$rs = $pdo -> query("select * from candidate");
$rs->setFetchMode(PDO::FETCH_ASSOC); //關聯數組形式
//$rs->setFetchMode(PDO::FETCH_NUM); //數字索引數組形式
while($row = $rs -> fetch()){
print_r($row);
}
?>