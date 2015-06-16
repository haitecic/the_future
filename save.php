<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future

//將三大王牌的選擇結果存入資料表
if(isset($_GET['winnerone']) && !empty($_GET['winnerone']))
	{
	$winner=$_GET['winnerone'];
	$position=$_GET['position'];
	$user_id=$_GET['user'];
	$query="update user set `$position`=$winner where id=$user_id";
	mysql_query($query);
	header("Location: vote_index.php");
	}
//將對戰資訊存入fight_process資料表
if(isset($_POST['winner_array']) && !empty($_POST['winner_array']))
	{
	$winner=$_POST['winner_array'];
	$loser=$_POST['loser_array'];
	$user_id=$_POST['user'];
	$winner=json_decode($winner);
	$loser=json_decode($loser);
	for($i=1; $i<count($winner); $i++)
		{
		$query="insert into fight_process (`user_id`, `winner_id`, `loser_id`) value($user_id, $winner[$i], $loser[$i])";
		mysql_query($query);
		}
		
	$thebest=$winner[count($winner)-1];
	$query="insert into fight_result (`user_id`, `candidate_id`) value($user_id, $thebest)";
	mysql_query($query);
	
	//若最後勝利者已經是三大王牌則直接轉跳
	$query="select right_one, right_two, right_three from user where id='" . $user_id . "'";
	$result=mysql_query($query);
	$right_one=mysql_result($result, 0, 'right_one');
	$right_two=mysql_result($result, 0, 'right_two');
	$right_three=mysql_result($result, 0, 'right_three');
	if($thebest==$right_one || $thebest==$right_two || $thebest==$right_three) echo "overlap";
	else echo "no";
	}	
?>