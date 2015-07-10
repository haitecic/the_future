<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
$command=$_POST['command'];
if(isset($_SESSION['userid']) && isset($_POST['command']) && !empty($_POST['command'])){
	//提名預覽
	if($command=='NominatePreview'){
		$name=$_POST['name'];
		$wiki=nominate_main_txt($name);
		$result['wiki']=$wiki;
		if($wiki=='notHuman' && !empty($wiki)){
			$result['wiki']='notHuman';
			echo json_encode($result);
			exit();
		}
		elseif(is_array($wiki) && !empty($wiki)){
			$result['wiki']='names';
			array_push($result, $wiki);
			echo json_encode($result);
			exit();
		}
		elseif($wiki=='Disambig' && !empty($wiki)){
			$result['wiki']='Disambig';
			echo json_encode($result);
			exit();
		}
		elseif(!empty($wiki)){
			$result['wiki']=$wiki;
			$result['wikiname']=$name;
			$result['news']=yahoo_news_simpleHtmlDom($name);
			$urlname=urlencode($name);
			$result['img']=google_img_search($urlname, 0);
			$txt=preg_replace("/\s+/", "", $name);
			$name=preg_replace('#\((.+?)\)#', "", $txt);
			$result['name']=$name;
			echo json_encode($result);
			exit();
		}
		else{
			$result['wiki']=null;
			echo json_encode($result);
			exit();
		}

	}
	//將提名內容寫入
	else if($command=='NominateInsert'){
		//判定是否被提名過
		$wikiName=$_POST['wiki_name'];
		$used=false;
		$query="select wiki_name from candidate";
		$qresult=mysql_query($query);
		for($k=0; $k<mysql_num_rows($qresult); $k++){
			if($wikiName==mysql_result($qresult, $k, 'wiki_name')) $used=true;			
			}
		if(!$used){
			$user_id=$_SESSION['userid'];
			$img=$_POST['img'];
			
			$brief=$_POST['brief'];
			if(mb_strlen($brief,'utf-8')>90){
				$brief=mb_substr($brief,0,90,"utf-8");
				$brief = $brief . "...";
			}
			$brief=str_replace('"', "'", $brief);
			$brief=str_replace("'", "''", $brief);	
			$name=$_POST['name'];
			$yahooNews=$_POST['yahooNews'];
			/*$numNews=3;
			if(empty($yahooNews)) $numNews=0;
			elseif(count($yahooNews)<3 && !empty($yahooNews)) $numNews=$yahooNews;
			switch($numNews){
				case 0:
					$query='insert into candidate (`user_id`, 
													`name`,  
													`wiki_name`, 
													`brief`, 
													`img`) 
													value ("' . $user_id . '", "' . 
													$name . '", "' . 
													$wikiName . '", "' . 
													$brief . '", "' . 
													$img . '")';
					break;
				case 1:
					$query='insert into candidate (`user_id`, 
													`name`,  
													`wiki_name`, 
													`brief`, 
													`img`, 
													`news_title_1`, 
													`news_link_1`, 
													`news_abs_1`, 
													`news_press_1`) 
													value ("' . $user_id . '", "' . 
													$name . '", "' . 
													$wikiName . '", "' . 
													$brief . '", "' . 
													$img . '", "' . 
													$yahooNews[1]['title'] . '", "' . 
													$yahooNews[1]['link'] . '", "' . 
													$yahooNews[1]['newsabtract'] . '", "' . 
													$yahooNews[1]['press'] . '")';
					break;
				case 2:
					$query='insert into candidate (`user_id`, 
													`name`,  
													`wiki_name`, 
													`brief`, 
													`img`, 
													`news_title_1`, 
													`news_link_1`, 
													`news_abs_1`, 
													`news_press_1`, 
													`news_title_2`, 
													`news_link_2`, 
													`news_abs_2`, 
													`news_press_2`) 
													value ("' . $user_id . '", "' . 
													$name . '", "' . 
													$wikiName . '", "' . 
													$brief . '", "' . 
													$img . '", "' . 
													$yahooNews[1]['title'] . '", "' . 
													$yahooNews[1]['link'] . '", "' . 
													$yahooNews[1]['newsabtract'] . '", "' . 
													$yahooNews[1]['press'] . '", "' . 
													$yahooNews[2]['title'] . '", "' . 
													$yahooNews[2]['link'] . '", "' . 
													$yahooNews[2]['newsabtract'] . '", "' . 
													$yahooNews[2]['press'] . '")';
					break;
				case 3:*/
					$query='insert into candidate (`user_id`, 
													`name`,  
													`wiki_name`, 
													`brief`, 
													`img`, 
													`news_title_1`, 
													`news_link_1`, 
													`news_abs_1`, 
													`news_press_1`, 
													`news_title_2`, 
													`news_link_2`, 
													`news_abs_2`, 
													`news_press_2`, 
													`news_title_3`, 
													`news_link_3`, 
													`news_abs_3`, 
													`news_press_3`) 
													value ("' . $user_id . '", "' . 
													$name . '", "' . 
													$wikiName . '", "' . 
													@$brief . '", "' . 
													@$img . '", "' . 
													@$yahooNews[1]['title'] . '", "' . 
													@$yahooNews[1]['link'] . '", "' . 
													@$yahooNews[1]['newsabtract'] . '", "' . 
													@$yahooNews[1]['press'] . '", "' . 
													@$yahooNews[2]['title'] . '", "' . 
													@$yahooNews[2]['link'] . '", "' . 
													@$yahooNews[2]['newsabtract'] . '", "' . 
													@$yahooNews[2]['press'] . '", "' . 
													@$yahooNews[3]['title'] . '", "' . 
													@$yahooNews[3]['link'] . '", "' . 
													@$yahooNews[3]['newsabtract'] . '", "' . 
													@$yahooNews[3]['press'] . '")';
					//break;
			//}
			mysql_query($query);
			$newManId=mysql_insert_id();
			$imgoutdata=imgdownload($wikiName, $newManId);
			$query="update candidate set `imgtype`='" . $imgoutdata['type'] . "' where `id`=$newManId";
			mysql_query($query);
			$IdImgType=[];
			$IdImgType['type']=$imgoutdata['type'];
			$IdImgType['id']=$newManId;
			$IdImgType['brief']=$brief;
			echo json_encode($IdImgType);
		}
		else{
			$result=mysql_query("select id, imgtype, brief from candidate where `wiki_name`='" . $wikiName . "'");
			$newManId=mysql_result($result, 0, 'id');
			$type=mysql_result($result, 0, 'imgtype');
			$brief=mysql_result($result, 0, 'brief');
			$IdImgType=[];
			$IdImgType['type']=$type;
			$IdImgType['id']=$newManId;
			$IdImgType['brief']=$brief;
			echo json_encode($IdImgType);
		}
	}
}
?>