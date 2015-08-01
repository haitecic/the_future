<html>
<head>
<meta charset="utf-8">
</head>
<?php
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
    $config['username'],
    $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");


$id = 3;
$dbh->beginTransaction();
$sql="select * from candidate where id=:id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id);
//$sth->bindParam(':secret_code', $secret_code,PDO::PARAM_STR);
$rowresults=array();
$exeres = $stmt->execute();
$dbh->commit();
$dbh = null;
if ($exeres){
	for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
		$rowresults[$i]=$row;
	}
}
if(!empty($rowresults)){
	var_dump($rowresults);
}
else{
	echo "無值";
}



?>