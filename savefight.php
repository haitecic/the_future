<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future


	if(isset($_POST['winner_array']) && !empty($_POST['winner_array'])){
		$winner=$_POST['winner_array'];
		$loser=$_POST['loser_array'];
		$winner=json_decode($winner);
		$loser=json_decode($loser);
		$thewinner=$winner[count($winner)-1];
		$query="insert into fight_result (`candidate_id`) value($thewinner)";
		mysql_query($query);
		$roundId=mysql_insert_id();
		
		for($i=1; $i<count($winner); $i++){
			$query="insert into fight_process (`round_id`, `winner_id`, `loser_id`) value($roundId, $winner[$i], $loser[$i])";
			mysql_query($query);
		}	
		setcookie('winner', $thewinner, time()+3600);
		
		$result=mysql_query("select imgtype from candidate where id=$thewinner");
		if(mysql_num_rows($result)==1){
			$rowresult=mysql_fetch_row($result);
			echo $imgtype= $rowresult[0];
		}
	}
?>