<html>
<head>
<meta charset="utf-8">
</head>
<?php

require_once "config/connect.php";
$roundid = 512;
$sql="select * from fight_process where round_id = :round_id ";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':round_id', $roundid,PDO::PARAM_INT);
//$sth->bindParam(':secret_code', $secret_code,PDO::PARAM_STR);
$exeres = $stmt->execute();
if ($exeres){
	$i=0;
	while ($rowresult = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo $i=$i+1;
		var_dump($rowresult);
		echo "<br><br><br>";
	}
}
$dbh = null;
?>