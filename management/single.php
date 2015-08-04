<html>
<head>
<meta charset="utf-8">
</head>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | ~E_WARNING| ~E_NOTICE);
require_once "../config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
		//$manid=$_POST['id'];
		echo $manid=15;
		$qresults=mysql_query("select * from candidate where id=$manid");
		$qnum_candidate=mysql_num_rows($qresults);
		//可加入一次存取數量判斷式
		$candidatename="尹衍樑";
		
		echo "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$candidatename&start=0&rsz=8";
		//if($qnum_candidate){
			$rowresult=mysql_fetch_assoc($qresults);
			$id=$rowresult['id'];
			$name=$rowresult['name'];
			$key=urlencode($name);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL, "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$key&start=0&rsz=8");
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			$output = curl_exec($ch);
			curl_close($ch);
			$eightDataObj = json_decode($output);
			echo $imgresult = $eightDataObj -> responseData -> results[$order] ->url;

			//$img=imgdownload($name, $id);
			//var_dump($img);
			/*
			$wikiname=$rowresult['wiki_name'];
			$brief=query_main_txt($wikiname);
			$news=yahoo_news_simpleHtmlDom($name);
			$query='update candidate set `brief`="' . $brief . '", `img`="' . $img['source'] . '", `imgwidth`="' . $img['width'] . '", `imgheight`="' . $img['height'] . '", `imgtype`="' . $img['type'] . '", `news_title_1`="' . $news[0]['title'] . '", `news_link_1`="' . $news[0]['link'] . '", `news_abs_1`="' . $news[0]['newsabtract'] . '", `news_press_1`="' . $news[0]['press'] . '", `news_title_2`="' . $news[1]['title'] . '", `news_link_2`="' . $news[1]['link'] . '", `news_abs_2`="' . $news[1]['newsabtract'] . '", `news_press_2`="' . $news[1]['press'] . '", `news_title_3`="' . $news[2]['title'] . '", `news_link_3`="' . $news[2]['link'] . '", `news_abs_3`="' . $news[2]['newsabtract'] . '", `news_press_3`="' . $news[2]['press'] . '" where id="' . $id . '"';
			mysql_query($query) or die(mysql_error());
	

			$query="select * from candidate where id=$manid";
			$results=mysql_query($query);
			$num_candidate=mysql_num_rows($results);
			if($num_candidate){
		
				$rowresult=mysql_fetch_assoc($results);
				$round_list_id=$rowresult['id'];
				$round_list=$rowresult['name'];
				$round_brief=$rowresult['brief'];
				$round_imgtype=$rowresult['imgtype'];
				$round_img=$rowresult['img'];
				$round_news_title_1=$rowresult['news_title_1'];
				$round_news_link_1=$rowresult['news_link_1'];
				$round_news_abs_1=$rowresult['news_abs_1'];
				$round_news_press_1=$rowresult['news_press_1'];
				$round_news_title_2=$rowresult['news_title_2'];
				$round_news_link_2=$rowresult['news_link_2'];
				$round_news_abs_2=$rowresult['news_abs_2'];
				$round_news_press_2=$rowresult['news_press_2'];
				$round_news_title_3=$rowresult['news_title_3'];
				$round_news_link_3=$rowresult['news_link_3'];
				$round_news_abs_3=$rowresult['news_abs_3'];
				$round_news_press_3=$rowresult['news_press_3'];
		
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
			echo json_encode($result);*/
		//}
?>