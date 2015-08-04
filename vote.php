<?php
session_start();
require_once "loadalllist.php";
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
    $config['username'],
    $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");

if(isset($_SESSION['fb_id'])){
	$userfbid=$_SESSION['fb_id'];
	$name=$_POST['bestname'];
	if(!empty($name)){
		$dbh->beginTransaction();
		$sql="select id from candidate where `name`=?";
		$stmt=$dbh->prepare($sql);
		$exeres=$stmt->execute(array($name));
		$dbh->commit();
		$rowresults=null;
		$rowresults=array();
		if($exeres){
			for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
				$rowresults[$i]=$row;
			}
			if(!empty($rowresults)){
				$bestid=$rowresults[0]['id'];
				$sql="update user set `thebest`='" . $bestid . "' where fb_id=$userfbid";
			}
			else $sql="update user set `thebest`=Null where fb_id=$userfbid";
			$rowresults=null;
			
			$dbh->beginTransaction();
			$stmt=$dbh->prepare($sql);
			$exeres=$stmt->execute();
			$dbh->commit();
			
			
			$dbh->beginTransaction();
			$sql="select imgtype from candidate where id=?";
			$stmt=$dbh->prepare($sql);
			$exeres=$stmt->execute(array($bestid));
			$dbh->commit();
			$rowresults=null;
			$rowresults=array();
			if($exeres){
				for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
					$rowresults[$i]=$row;
				}
				if(!empty($rowresults)){
					$imgtype=$rowresults[0]['imgtype'];
				}
			}			
		}
	}
		
		
	$listdata=getlistdata();
	$countBallot['status']="login";
	$countBallot['imgtype']=$imgtype;
	$countBallot['id']=$bestid;
	$countBallot['listdata']=$listdata;
	
	//清除session
	unset($_SESSION['fb_id']);
	session_destroy();
	echo json_encode($countBallot);	
}
else{
	$result['status']="logout";
	echo json_encode($result);	
}
?>