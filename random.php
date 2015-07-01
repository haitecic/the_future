<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future

if(!empty($_GET['user_id'])){
	$place=$_GET['place'];
	mysql_query("update user set " . $_GET['place'] . "='" . $_GET['id'] . "' where id='" . $_GET['user_id'] . "'");
	header("Location: vote_index.php");
    exit();  
}


$round_num=10;//設定一輪要幾個
$results=mysql_query("select * from candidate");
$num_candidate=mysql_num_rows($results);


$round_list=array();
for($i=1; $i<=$round_num; $i++){
	$random_number=rand(0,$num_candidate-1);
	$round_list_id[$i]=mysql_result($results, $random_number, 'id');
	
	$x=0;
	foreach($round_list_id as $list_id){
		if($list_id==$round_list_id[$i]) $x=$x+1;
	}
	if($x>=2) {
		unset($round_list_id[$i]);
		$i=$i-1;
	}
	else{
		$round_list[$i]=mysql_result($results, $random_number, 'name');
		$round_brief[$i]=mysql_result($results, $random_number, 'brief');
		$round_img[$i]=mysql_result($results, $random_number, 'img');
		$round_news_title_1[$i]=mysql_result($results, $random_number, 'news_title_1');
		$round_news_link_1[$i]=mysql_result($results, $random_number, 'news_link_1');
		$round_news_abs_1[$i]=mysql_result($results, $random_number, 'news_abs_1');
		$round_news_press_1[$i]=mysql_result($results, $random_number, 'news_press_1');
		$round_news_title_2[$i]=mysql_result($results, $random_number, 'news_title_2');
		$round_news_link_2[$i]=mysql_result($results, $random_number, 'news_link_2');
		$round_news_abs_2[$i]=mysql_result($results, $random_number, 'news_abs_2');
		$round_news_press_2[$i]=mysql_result($results, $random_number, 'news_press_2');
		$round_news_title_3[$i]=mysql_result($results, $random_number, 'news_title_3');
		$round_news_link_3[$i]=mysql_result($results, $random_number, 'news_link_3');
		$round_news_abs_3[$i]=mysql_result($results, $random_number, 'news_abs_3');
		$round_news_press_3[$i]=mysql_result($results, $random_number, 'news_press_3');
	}
}
	$round_list_json=json_encode($round_list);
	$round_list_id_json=json_encode($round_list_id);
	$round_brief_json=json_encode($round_brief);
	$round_img_json=json_encode($round_img);
	$round_news_title_1_json=json_encode($round_news_title_1);
	$round_news_link_1_json=json_encode($round_news_link_1);
	$round_news_abs_1_json=json_encode($round_news_abs_1);
	$round_news_press_1_json=json_encode($round_news_press_1);
	$round_news_title_2_json=json_encode($round_news_title_2);
	$round_news_link_2_json=json_encode($round_news_link_2);
	$round_news_abs_2_json=json_encode($round_news_abs_2);
	$round_news_press_2_json=json_encode($round_news_press_2);
	$round_news_title_3_json=json_encode($round_news_title_3);
	$round_news_link_3_json=json_encode($round_news_link_3);
	$round_news_abs_3_json=json_encode($round_news_abs_3);
	$round_news_press_3_json=json_encode($round_news_press_3);
?>
