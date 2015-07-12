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
		elseif($wiki=='deadMan' && !empty($wiki)){
			$result['wiki']='deadMan';
			echo json_encode($result);
			exit();
		}
		elseif(!empty($wiki)){
			$result['wiki']=$wiki;
			$result['wikiname']=$name;
			//$result['news']=yahoo_news_simpleHtmlDom($name);
			//$urlname=urlencode($name);
			//$result['img']=google_img_search($urlname, 0);
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
			$brief=$_POST['brief'];
			if(mb_strlen($brief,'utf-8')>90){
				$brief=mb_substr($brief,0,90,"utf-8");
				$brief = $brief . "...";
			}
			$brief=str_replace('"', "'", $brief);
			$brief=str_replace("'", "''", $brief);	
			$name=$_POST['name'];
			$query='insert into candidate (`user_id`, 
											`name`,  
											`wiki_name`, 
											`brief`) 
											value ("' . $user_id . '", "' . 
											$name . '", "' . 
											$wikiName . '", "' . 
											@$brief .  '")';
			mysql_query($query);
			$newManId=mysql_insert_id();
			$IdBriefWikiname=[];
			$IdBriefWikiname['id']=$newManId;
			$IdBriefWikiname['brief']=$brief;
			$IdBriefWikiname['wikiname']=$wikiName;
			$IdBriefWikiname['used']=$used;
			echo json_encode($IdBriefWikiname);
		}
		else{
			$result=mysql_query("select id, imgtype, brief, news_title_1, news_link_1, news_abs_1, news_press_1, news_title_2, news_link_2, news_abs_2, news_press_2, news_title_3, news_link_3, news_abs_3, news_press_3 from candidate where `wiki_name`='" . $wikiName . "'");
			$newManId=mysql_result($result, 0, 'id');
			$type=mysql_result($result, 0, 'imgtype');
			$brief=mysql_result($result, 0, 'brief');
			$yahoo=[];
			$yahoo[1]['title']=mysql_result($result, 0, 'news_title_1');
			$yahoo[1]['link']=mysql_result($result, 0, 'news_link_1');
			$yahoo[1]['newsabtract']=mysql_result($result, 0, 'news_abs_1');
			$yahoo[1]['press']=mysql_result($result, 0, 'news_press_1');
			$yahoo[2]['title']=mysql_result($result, 0, 'news_title_2');
			$yahoo[2]['link']=mysql_result($result, 0, 'news_link_2');
			$yahoo[2]['newsabtract']=mysql_result($result, 0, 'news_abs_2');
			$yahoo[2]['press']=mysql_result($result, 0, 'news_press_2');
			$yahoo[3]['title']=mysql_result($result, 0, 'news_title_3');
			$yahoo[3]['link']=mysql_result($result, 0, 'news_link_3');
			$yahoo[3]['newsabtract']=mysql_result($result, 0, 'news_abs_3');
			$yahoo[3]['press']=mysql_result($result, 0, 'news_press_3');
			$IdImgType=[];
			$IdImgType['type']=$type;
			$IdImgType['id']=$newManId;
			$IdImgType['brief']=$brief;
			$IdImgType['used']=$used;
			$IdImgType['news']=$yahoo;
			echo json_encode($IdImgType);
		}
	}
	else if($command=='NominateInsertSecond'){
			$wikiName = $_POST['wiki_name'];
			$id = $_POST['man_id'];
			$imgoutdata=imgdownload($wikiName, $id);
			$yahooNews=yahoo_news_simpleHtmlDom($wikiName);
			$query="update candidate set `img`='" . @$imgoutdata['source'] .  
									"', `imgtype`='" . @$imgoutdata['type'] .
									"', `news_title_1`='" . @$yahooNews[1]['title'] .  
									"', `news_link_1`='" . @$yahooNews[1]['link'] .  
									"', `news_abs_1`='" . @$yahooNews[1]['newsabtract'] .  
									"', `news_press_1`='" . @$yahooNews[1]['press'] .
									"', `news_title_2`='" . @$yahooNews[2]['title'] .
									"', `news_link_2`='" . @$yahooNews[2]['link'] .  
									"', `news_abs_2`='" . @$yahooNews[2]['newsabtract'] . 
									"', `news_press_2`='" . @$yahooNews[2]['press'] .
									"', `news_title_3`='" . @$yahooNews[3]['title'] .
									"', `news_link_3`='" . @$yahooNews[3]['link'] .
									"', `news_abs_3`='" . @$yahooNews[3]['newsabtract'] . 
									"', `news_press_3`='" . @$yahooNews[3]['press'] .
									"' where `id`=$id";
			mysql_query($query);
			$imgNews=[];
			$imgNews['type'] = $imgoutdata['type'];
			$imgNews['news'] = $yahooNews;
			echo json_encode($imgNews);		
	}
}
?>