<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
if(isset($_POST['command']) && !empty($_POST['command']))
	{
	$command=$_POST['command'];
	if($command=='NominatePreview')//提名預覽
		{
		$command=$_POST['command'];
		$name=$_POST['name'];
		$wiki=query_main_txt(urlencode($name));
		//判定是否被提名過
		$used=false;
		$query="select name from candidate";
		$qresult=mysql_query($query);
		for($k=0; $k<mysql_num_rows($qresult); $k++)
			{
			if($name==mysql_result($qresult, $k, 'name')) $used=true;			
			}
		
		if($used)
			{
			$result['wiki']='used';
			echo json_encode($result);
			}
		else
			{
			if(!empty($wiki))
				{
				$result['wiki']=$wiki;
				$result['img']=output_img(urlencode($name));
				$result['news']=yahoo_news(urlencode($name));
				echo json_encode($result);
				}
			else
				{
				$result['wiki']=null;
				echo json_encode($result);
				}
			}
		}
	else if($command=='NominateInsert')//將提名內容寫入
		{
		$name=$_POST['name'];
		$user_id=$_POST['user'];
		$img=$_POST['img'];
		$brief=$_POST['brief'];
		$title_1=$_POST['title_1'];
		$abs_1=$_POST['abs_1'];
		$press_1=$_POST['press_1'];
		$title_2=$_POST['title_2'];
		$abs_2=$_POST['abs_2'];
		$press_2=$_POST['press_2'];
		$title_3=$_POST['title_3'];
		$abs_3=$_POST['abs_3'];
		$press_3=$_POST['press_3'];
		$query="insert into candidate (`user_id`, `name`, `brief`, `img`, `news_title_1`, `news_abs_1`, `news_press_1`, `news_title_2`, `news_abs_2`, `news_press_2`, `news_title_3`, `news_abs_3`, `news_press_3`) value ('" . $user_id . "', '" . $name . "', '" . $brief . "', '" . $img . "', '" . $title_1 . "', '" . $abs_1 . "', '" . $press_1 . "', '" . $title_2 . "', '" . $abs_2 . "', '" . $press_2 . "', '" . $title_3 . "', '" . $abs_3 . "', '" . $press_3 . "')";
		mysql_query($query);
		header("Location:vote_index.php");
		}
	}
?>