<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future
/*
if(!empty($_GET['user_id'])){
	$place=$_GET['place'];
	mysql_query("update user set " . $_GET['place'] . "='" . $_GET['id'] . "' where id='" . $_GET['user_id'] . "'");
	header("Location: vote_index.php");
    exit();  
}*/


$round_num=10;//設定一輪要幾個
$query="select * from candidate";
if(!empty($_POST['manid'])){
	$man_id=$_POST['manid'];
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
	$round_list_id[$i]=$rowresult['id'];
	
	$x=0;
	foreach($round_list_id as $list_id){
		if($list_id==$round_list_id[$i]) $x=$x+1;
	}
	if($x>=2) {
		unset($round_list_id[$i]);
		$i=$i-1;
	}
	else{
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
	echo json_encode($result);
?>
