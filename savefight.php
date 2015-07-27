<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future

	if(isset($_POST['winner_array']) && !empty($_POST['winner_array'])){
		if(!empty($_POST['opinion'])){
			$newopinion=$_POST['opinion'];
			$query="insert into personality (`content`) value('" . $newopinion . "')";
			mysql_query($query);
		}		
		$selected=$_POST['selected'];
		$winner=$_POST['winner_array'];
		$loser=$_POST['loser_array'];
		$selected=json_decode($selected);
		$winner=json_decode($winner);
		$loser=json_decode($loser);
		$thewinner=$winner[count($winner)-1];
		$query="insert into fight_result (`candidate_id`) value($thewinner)";
		mysql_query($query);
		$roundId=mysql_insert_id();
		
		//讀取selected 的id
		$opinionstring="";
		for($s=0; $s<count($selected); $s++){
			if($s==0) $opinionstring="`content`='" . $selected[$s] . "'";
			else $opinionstring="`content`='" . $selected[$s] . "' OR " . $opinionstring;
		}
		$result=mysql_query("select id from personality where ($opinionstring)");
		$selectedId=array();
		if(mysql_num_rows($result)){
			for($m=0; $m<mysql_num_rows($result); $m++){
				$rowresult=mysql_fetch_row($result);
				array_push($selectedId ,$rowresult[0]);
			}
		}
		//存入fight_personality
		for($i=0; $i<count($selectedId); $i++){
			$query="insert into fight_personality (`round_id`, `personality_id`) value($roundId, $selectedId[$i])";
			mysql_query($query);
		}	
		//存入fight_process
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