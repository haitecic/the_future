<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function

		$results=mysql_query("select * from candidate");
		$num_candidate=mysql_num_rows($results);
		//可加入一次存取數量判斷式
	
		for($i=0; $i<$num_candidate; $i++)
			{
			$i;
			$name=mysql_result($results, $i, 'name');
			$id=mysql_result($results, $i, 'id');
			$img=output_img(urlencode($name));
			$brief=query_main_txt(urlencode($name));
			$news=yahoo_news(urlencode($name));
			$query="update candidate set brief='" . $brief . "', img='" . $img . "', news_title_1='" . $news[1]['title_h'] . "', news_abs_1='" . $news[1]['newsabtract'] . "', news_press_1='" . $news[1]['press'] . "', news_title_2='" . $news[2]['title_h'] . "', news_abs_2='" . $news[2]['newsabtract'] . "', news_press_2='" . $news[2]['press'] . "', news_title_3='" . $news[3]['title_h'] . "', news_abs_3='" . $news[3]['newsabtract'] . "', news_press_3='" . $news[3]['press'] . "' where id='" . $id . "'";
			mysql_query($query);
			}

?>