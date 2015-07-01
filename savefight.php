<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future

if(isset($_SESSION['userid'])){
	//將對戰資訊存入fight_process, fight_result資料表
	if(isset($_POST['winner_array']) && !empty($_POST['winner_array'])){
		$winner=$_POST['winner_array'];
		$loser=$_POST['loser_array'];
		$user_id=$_SESSION['userid'];
		$winner=json_decode($winner);
		$loser=json_decode($loser);
		for($i=1; $i<count($winner); $i++){
			$query="insert into fight_process (`user_id`, `winner_id`, `loser_id`) value($user_id, $winner[$i], $loser[$i])";
			mysql_query($query);
		}	
		$thebest=$winner[count($winner)-1];
		$query="insert into fight_result (`user_id`, `candidate_id`) value($user_id, $thebest)";
		mysql_query($query);
	}
	echo 'login';
}
else{
	echo 'logout';
}	
?>