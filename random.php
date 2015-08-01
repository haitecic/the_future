<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future
//sleep(5); 
if(isset($_POST['command']) && !empty($_POST['command'])){
	$command=$_POST['command'];
	if($command=='start'){
		$startResult=random();
		echo json_encode($startResult);
	}
}
function random($man_id=null){
	$round_num=10;
	$query="select * from candidate";
	if($man_id!=null){
		$query="select * from candidate where not `id`='" . $man_id . "'";
	}
	$results=mysql_query($query);
	$num_candidate=mysql_num_rows($results);
	$round_list_id=array();
	$round_list=array();
	for($i=1; $i<=$round_num; $i++){
		$random_number=rand(0,$num_candidate-1);
		mysql_data_seek($results, $random_number);
		$rowresult=mysql_fetch_assoc($results);
		if(in_array($rowresult['id'], $round_list_id)){
			$i=$i-1;
		}
		else{
			$round_list_id[$i]=$rowresult['id'];
			$round_list[$i]=$rowresult['name'];
			$round_brief[$i]=$rowresult['brief'];
			$round_imgtype[$i]=$rowresult['imgtype'];
			$round_img[$i]=$rowresult['img'];
			$round_news_title_1[$i]=$rowresult['news_title_1'];
			$round_news_link_1[$i]=$rowresult['news_link_1'];
			$round_news_abs_1[$i]=$rowresult['news_abs_1'];
			$round_news_press_1[$i]=$rowresult['news_press_1'];
			$round_news_title_2[$i]=$rowresult['news_title_2'];
			$round_news_link_2[$i]=$rowresult['news_link_2'];
			$round_news_abs_2[$i]=$rowresult['news_abs_2'];
			$round_news_press_2[$i]=$rowresult['news_press_2'];
			$round_news_title_3[$i]=$rowresult['news_title_3'];
			$round_news_link_3[$i]=$rowresult['news_link_3'];
			$round_news_abs_3[$i]=$rowresult['news_abs_3'];
			$round_news_press_3[$i]=$rowresult['news_press_3'];
		}
	}
	if($man_id!=null){
		array_push($round_list_id, $man_id);
		$round_num=11;
	}
	
	$fight_rate=array();
	for($l=1; $l<=$round_num; $l++){
		for($s=1; $s<=$round_num; $s++){
			if($s!=$l){
				$can1=$round_list_id[$l];
				$can2=$round_list_id[$s];
				$fight_rate[$can1][$can2]=(int)rate($can1, $can2);
				$fight_rate[$can2][$can1]=(int)rate($can2, $can1);
			}
		}
	}
	$result['rate']=$fight_rate;	
	$result['name']=$round_list;
	$result['id']=$round_list_id;
	$result['brief']=$round_brief;
	$result['img']=$round_img;
	$result['type']=$round_imgtype;
	$result['title1']=$round_news_title_1;
	$result['link1']=$round_news_link_1;
	$result['abs1']=$round_news_abs_1;
	$result['press1']=$round_news_press_1;
	$result['title2']=$round_news_title_2;
	$result['link2']=$round_news_link_2;
	$result['abs2']=$round_news_abs_2;
	$result['press2']=$round_news_press_2;
	$result['title3']=$round_news_title_3;
	$result['link3']=$round_news_link_3;
	$result['abs3']=$round_news_abs_3;
	$result['press3']=$round_news_press_3;
	$result['round_num']=$round_num - 1;
	return $result;
}

function rate($can1,$can2){
	$query="select id, 
			winner_id ,
			loser_id,
			count(id) as number 
			from fight_process 
			where (winner_id=$can1 and loser_id=$can2) 
			group by winner_id";
	$result=mysql_query($query);
	if(mysql_num_rows($result)){
		$rowresult=mysql_fetch_assoc($result);
		return $rowresult['number'];
	}
	else{
		return 0;
	}
}
?>
