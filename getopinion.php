<?php
require_once "config/db_connect.php";
$quantity=12;
$random_num=3;
$returnresult=array();
$query="SELECT personality.id, personality.content, COUNT( personality.content ) AS number 
		FROM fight_personality 
		LEFT JOIN personality ON fight_personality.personality_id = personality.id 
		GROUP BY personality.content 
		ORDER BY number DESC";
$result=mysql_query($query);
if(mysql_num_rows($result)>=$quantity){
	for($i=0; $i<$quantity; $i++){
		$rowresult=mysql_fetch_row($result);
		$content=$rowresult[1];
		if(mb_strlen($content,'utf-8')>6){
			$content=mb_substr($content,0,4,"utf-8") .'<br>' . mb_substr($content,4,7,"utf-8");
		}
		$returnresult[$i]=$content;
		
		if($i==0) $opinionstring="id='" . $rowresult[0] . "'";
		else $opinionstring="id='" . $rowresult[0] . "' OR " . $opinionstring;
	}
}
$query="select id, content from personality where not ($opinionstring)";
$otherResult=mysql_query($query);
$other_num=mysql_num_rows($otherResult);
$personality_id=array();
for($i=1; $i<=$random_num; $i++){
	$random_number=rand(0,$other_num-1);
	mysql_data_seek($otherResult, $random_number);
	$rowresult=mysql_fetch_assoc($otherResult);
	
	if(in_array($rowresult['id'], $personality_id)){
		$i=$i-1;
	}
	else{
		array_push($personality_id, $rowresult['id']);
		$content=$rowresult['content'];
		if(mb_strlen($content,'utf-8')>6){
			$content=mb_substr($content,0,4,"utf-8") .'<br>' . mb_substr($content,4,7,"utf-8");
		}
		array_push($returnresult,$content);
	}
}

echo json_encode($returnresult);
?>