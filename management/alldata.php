<?php
require_once "../config/db_connect.php";
	$query="select * from candidate where inpool=true";
	$results=mysql_query($query);
	$num_candidate=mysql_num_rows($results);
	for($i=0; $i<$num_candidate; $i++){

		$rowresult=mysql_fetch_assoc($results);
		$round_list_id[$i]=$rowresult['id'];
		$round_list[$i]=$rowresult['name'];
		$round_brief[$i]=$rowresult['brief'];
		$round_imgtype[$i]=$rowresult['imgtype'];
		$round_img[$i]=$rowresult['img'];
		$round_qualify[$i]=$rowresult['qualify'];
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
		$round_inpool[$i]=true;

	}
	$query="select * from candidate where inpool=false";
	$results=mysql_query($query);
	$num_candidate=mysql_num_rows($results);
	for($i=0; $i<$num_candidate; $i++){

		$rowresult=mysql_fetch_assoc($results);
		array_push($round_list_id,$rowresult['id']);
		array_push($round_list, $rowresult['name']);
		array_push($round_brief, $rowresult['brief']);
		array_push($round_imgtype, $rowresult['imgtype']);
		array_push($round_img, $rowresult['img']);
		array_push($round_qualify, $rowresult['qualify']);
		array_push($round_news_title_1, $rowresult['news_title_1']);
		array_push($round_news_link_1, $rowresult['news_link_1']);
		array_push($round_news_abs_1, $rowresult['news_abs_1']);
		array_push($round_news_press_1, $rowresult['news_press_1']);
		array_push($round_news_title_2, $rowresult['news_title_2']);
		array_push($round_news_link_2, $rowresult['news_link_2']);
		array_push($round_news_abs_2, $rowresult['news_abs_2']);
		array_push($round_news_press_2, $rowresult['news_press_2']);
		array_push($round_news_title_3, $rowresult['news_title_3']);
		array_push($round_news_link_3, $rowresult['news_link_3']);
		array_push($round_news_abs_3, $rowresult['news_abs_3']);
		array_push($round_news_press_3, $rowresult['news_press_3']);
		array_push($round_inpool, false);

	}	
	$result['name']=$round_list;
	$result['id']=$round_list_id;
	$result['brief']=$round_brief;
	$result['img']=$round_img;
	$result['ifqualify']=$round_qualify;
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
	$result['inpool']=$round_inpool;
	echo json_encode($result);
?>