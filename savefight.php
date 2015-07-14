<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future

if(isset($_SESSION['userid'])){
	//將對戰資訊存入fight_process, fight_result資料表
	if(isset($_POST['winner_array']) && !empty($_POST['winner_array'])){
		$winner=$_POST['winner_array'];
		$loser=$_POST['loser_array'];
		$winner=json_decode($winner);
		$loser=json_decode($loser);
		$user_id=$_SESSION['userid'];
		$thebest=$winner[count($winner)-1];
		$query="insert into fight_result (`user_id`, `candidate_id`) value($user_id, $thebest)";
		mysql_query($query);
		$roundId=mysql_insert_id();
		
		for($i=1; $i<count($winner); $i++){
			$query="insert into fight_process (`user_id`, `round_id`, `winner_id`, `loser_id`) value($user_id, $roundId, $winner[$i], $loser[$i])";
			mysql_query($query);
		}	
		
	}
	echo 'login';
}
else{
	echo 'logout';
}	
?>