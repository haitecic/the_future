<?php
//連接資料庫
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
    $config['username'],
    $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");


if(isset($_POST['id']) && !empty($_POST['id'])){
	$dbh->beginTransaction();
	$sql = "select name, imgtype, originurl, origintitleo, brief, wiki_name from candidate where id= :id";
	$stmt = $dbh -> prepare($sql);
	$stmt->bindParam(':id', $_POST['id']);
	$exeres = $stmt->execute();
	$dbh->commit();
	$rowresults=array();
	if ($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
		if(!empty($rowresults)){
			foreach($rowresults as $rowresult){
				$showresult['name']=$rowresult['name'];
				$showresult['imgtype']=$rowresult['imgtype'];
				$showresult['brief']=$rowresult['brief'];
				$showresult['wikiname']=$rowresult['wiki_name'];
				$showresult['originurl']=$rowresult['originurl'];
				$showresult['origintitle']=$rowresult['origintitleo'];
				$showresult['status']="successful";
				$dbh = null;
				echo json_encode($showresult);
			}
		}
		else{
			$showresult['status']="failed";
			$dbh = null;
			echo json_encode($showresult);
		}
	}
	else{
		$showresult['status']="failed";
		$dbh = null;
		echo json_encode($showresult);
	}
}
else{
	$showresult['status']="failed";
	$dbh = null;
	echo json_encode($showresult);
}
/*
require_once "config/db_connect.php";//連結到資料庫taiwan_future
if(isset($_POST['id']) && !empty($_POST['id'])){
	$id=$_POST['id'];
	$query="select name, imgtype, brief, wiki_name from candidate where id=$id";
	$result=mysql_query($query);
	if(mysql_num_rows($result)==1){
		$rowresult=mysql_fetch_row($result);
		

	}
	else{
		$showresult['status']="failed";
		echo json_encode($showresult);
	}
}
else{
	$showresult['status']="failed";
	echo json_encode($showresult);
}*/
?>