<?php
session_start();
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
    $config['username'],
    $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");

	if(isset($_POST['winner_array']) && !empty($_POST['winner_array'])){
		if(!empty($_POST['opinion'])){
			$newopinion=$_POST['opinion'];
			$dbh->beginTransaction();
			$sql="insert into personality (`content`) value(?)";
			$stmt=$dbh->prepare($sql);
			$stmt->execute(array($newopinion));
			$dbh->commit();
		}		
		$selected=$_POST['selected'];
		$winner=$_POST['winner_array'];
		$loser=$_POST['loser_array'];
		$selected=json_decode($selected);
		$winner=json_decode($winner);
		$loser=json_decode($loser);
		$thewinner=$winner[count($winner)-1];
		
		$dbh->beginTransaction();
		$sql="insert into fight_result (`candidate_id`) value(?)";
		$stmt=$dbh->prepare($sql);
		$stmt->execute(array($thewinner));
		$roundId=$dbh->lastInsertId();
		$dbh->commit();
		
		//讀取selected 的id
		$opinionstring="";
		for($s=0; $s<count($selected); $s++){
			if($s==0) $opinionstring="`content`='" . $selected[$s] . "'";
			else $opinionstring="`content`='" . $selected[$s] . "' OR " . $opinionstring;
		}
		$dbh->beginTransaction();
		$sql="select id from personality where ($opinionstring)";
		$stmt=$dbh->prepare($sql);
		$exeres = $stmt->execute();
		$dbh->commit();
		$rowresults=null;
		$rowresults=array();
		$selectedId=array();
		if($exeres){
			for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
				$rowresults[$i]=$row;
			}
			if(!empty($rowresults)){
				foreach($rowresults as $rowresult){
					array_push($selectedId ,$rowresult['id']);
				}
			}
			$rowresults=null;
		}
		
		//存入fight_personality
		for($i=0; $i<count($selectedId); $i++){
			$dbh->beginTransaction();
			$sql="insert into fight_personality (`round_id`, `personality_id`) value(?, ?)";
			$stmt=$dbh->prepare($sql);
			$stmt->execute(array($roundId, $selectedId[$i]));
			$dbh->commit();
		}	
		//存入fight_process
		for($i=1; $i<count($winner); $i++){
			$dbh->beginTransaction();
			$sql="insert into fight_process (`round_id`, `winner_id`, `loser_id`) value(?, ?, ?)";
			$stmt=$dbh->prepare($sql);
			$stmt->execute(array($roundId, $winner[$i], $loser[$i]));
			$dbh->commit();
		}	
		setcookie('winner', $thewinner, time()+3600);
		
		
		$dbh->beginTransaction();
		$sql="select imgtype from candidate where id=?";
		$stmt=$dbh->prepare($sql);
		$exeres = $stmt->execute(array($thewinner));
		$dbh->commit();
		$rowresults=null;
		$rowresults=array();
		if($exeres){
			for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
				$rowresults[$i]=$row;
			}
			if(!empty($rowresults)){
				echo $imgtype= $rowresults[0]['imgtype'];
			}
			$rowresults=null;
		}
	}
?>