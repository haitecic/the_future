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
		$returnresult['value'][$i]=$content;
		if(mb_strlen($content,'utf-8')>6){
			$content=mb_substr($content,0,4,"utf-8") .'b' . mb_substr($content,4,7,"utf-8");
		}
		$returnresult['content'][$i]=$content;
		$returnresult['number'][$i]=(int)$rowresult[2];
		if($i==0) $opinionstring="personality.content='" . $rowresult[1] . "'";
		else $opinionstring="personality.content='" . $rowresult[1] . "' OR " . $opinionstring;
	}
}

$query="SELECT personality.id, personality.content, COUNT( personality.content ) AS number 
		FROM fight_personality 
		LEFT JOIN personality ON fight_personality.personality_id = personality.id 
		WHERE NOT ($opinionstring) 
		GROUP BY personality.content";
//echo $query;
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
		array_push($returnresult['value'],$content);
		if(mb_strlen($content,'utf-8')>6){
			$content=mb_substr($content,0,4,"utf-8") .'b' . mb_substr($content,4,7,"utf-8");
		}
		array_push($returnresult['content'],$content);
		array_push($returnresult['number'],(int)$rowresult['number']);
	}
}
//var_dump($returnresult['content']);
//var_dump($returnresult['number']);
echo json_encode($returnresult);
?>