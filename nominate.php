<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
$command=$_POST['command'];
if(isset($_SESSION['userid']) && isset($_POST['command']) && !empty($_POST['command'])){
	//提名預覽
	if($command=='NominatePreview'){
		$name=$_POST['name'];
		$wiki=query_main_txt($name);
		$result['wiki']=$wiki;
		if(!empty($wiki)){
			$result['wiki']=$wiki;
			$result['img']=output_img($name);
			$result['news']=yahoo_news_simpleHtmlDom($name);
			echo json_encode($result);
		}
		else{
			$result['wiki']=null;
			echo json_encode($result);
		}

	}
	//將提名內容寫入
	else if($command=='NominateInsert'){
		//判定是否被提名過
		$name=$_POST['name'];
		$used=false;
		$query="select name from candidate";
		$qresult=mysql_query($query);
		for($k=0; $k<mysql_num_rows($qresult); $k++){
			if($name==mysql_result($qresult, $k, 'name')) $used=true;			
			}
		if(!$used){
			$user_id=$_SESSION['userid'];
			$img=$_POST['img'];
			$brief=$_POST['brief'];
			$title_1=$_POST['title_1'];
			$link_1=$_POST['link_1'];
			$abs_1=$_POST['abs_1'];
			$press_1=$_POST['press_1'];
			$title_2=$_POST['title_2'];
			$link_2=$_POST['link_2'];
			$abs_2=$_POST['abs_2'];
			$press_2=$_POST['press_2'];
			$title_3=$_POST['title_3'];
			$link_3=$_POST['link_3'];
			$abs_3=$_POST['abs_3'];
			$press_3=$_POST['press_3'];
			$query="insert into candidate (`user_id`, `name`, `brief`, `img`, `news_title_1`, `news_link_1`, `news_abs_1`, `news_press_1`, `news_title_2`, `news_link_2`, `news_abs_2`, `news_press_2`, `news_title_3`, `news_link_3`, `news_abs_3`, `news_press_3`) value ('" . $user_id . "', '" . $name . "', '" . $brief . "', '" . $img . "', '" . $title_1 . "', '" . $link_1 . "', '" . $abs_1 . "', '" . $press_1 . "', '" . $title_2 . "', '" . $link_2 . "', '" . $abs_2 . "', '" . $press_2 . "', '" . $title_3 . "', '" . $link_3 . "', '" . $abs_3 . "', '" . $press_3 . "')";
			mysql_query($query);
			echo mysql_insert_id();
		}
		else{
			$result=mysql_query("select id from candidate where `name`='" . $name . "'");
			echo mysql_result($result, 0, 'id');
		}
	}
}
?>