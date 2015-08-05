<html>
<head>
<meta charset="utf-8">
</head>
<?php
/*ini_set('display_errors', 'On');
error_reporting(E_ALL | ~E_WARNING| ~E_NOTICE);*/
require_once "../config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function

		$results=mysql_query("select * from candidate");
		$num_candidate=mysql_num_rows($results);
		//可加入一次存取數量判斷式
	
		for($i=0; $i<$num_candidate; $i++){
			echo $i;
			echo "<br>";
			$rowresult=mysql_fetch_assoc($results);
			$id=$rowresult['id'];
			echo $name=$rowresult['name'];
			$news=yahoo_news_simpleHtmlDom($name);

			$query='update candidate set `news_title_1`="' . $news[0]['title'] . 
			'", `news_link_1`="' . $news[0]['link'] . 
			'", `news_abs_1`="' . $news[0]['newsabtract'] . 
			'", `news_press_1`="' . $news[0]['press'] . 
			'", `news_title_2`="' . $news[1]['title'] . 
			'", `news_link_2`="' . $news[1]['link'] . 
			'", `news_abs_2`="' . $news[1]['newsabtract'] . 
			'", `news_press_2`="' . $news[1]['press'] . 
			'", `news_title_3`="' . $news[2]['title'] . 
			'", `news_link_3`="' . $news[2]['link'] . 
			'", `news_abs_3`="' . $news[2]['newsabtract'] . 
			'", `news_press_3`="' . $news[2]['press'] . 
			'" where id="' . $id . '"';
			mysql_query($query) or die(mysql_error());
			echo "<br>finish<br>";
		}
		

?>