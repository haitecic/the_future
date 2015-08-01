<?php
session_start();
require_once "config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
require_once "random.php";//呼叫出 crawl function
$command=$_POST['command'];
if(isset($_POST['command']) && !empty($_POST['command'])){
	//提名預覽
	if($command=='NominatePreview'){
		$name=$_POST['name'];
		$wiki=nominate_main_txt($name);//此部分連結了資料庫(查詢)
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
			$checkresult=mysql_query("select wiki_name from candidate where (`name`='" . $name . "' OR `wiki_name`='" . $name . "')");
			if(mysql_num_rows($checkresult)){
				$rowcheckresult=mysql_fetch_row($checkresult);
				$result['wikiname']=$rowcheckresult[0];
			}
			else{
				$result['wikiname']=$name;
			}
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
	//將候選人id確認，並把初始10(11名單回傳)，若提名人不在資料庫中，則暫不新增其新聞/圖片，由insersecond處理
	else if($command=='NominateInsert'){
		//判定是否被提名過
		$wikiName=$_POST['wiki_name'];
		$used=false;
		$query="select wiki_name from candidate";
		$qresult=mysql_query($query);
		if(mysql_num_rows($qresult)){
			for($k=0; $k<mysql_num_rows($qresult); $k++){
				$rowresult=mysql_fetch_row($qresult);
				if($wikiName==$rowresult[0]) $used=true;			
				}
		}
		if(!$used){	
			$brief=$_POST['brief'];
			if(mb_strlen($brief,'utf-8')>85){
				$brief=mb_substr($brief,0,85,"utf-8");
				$brief = $brief . "...";
			}
			$brief=str_replace('"', "'", $brief);
			$brief=str_replace("'", "''", $brief);	
			$name=$_POST['name'];
			$query='insert into candidate (	`name`,  
											`wiki_name`, 
											`brief`) 
											value ("' . 
											$name . '", "' . 
											$wikiName . '", "' . 
											@$brief .  '")';
			mysql_query($query);
			$newManId=mysql_insert_id();
			$IdBriefWikiname=array();
			$IdBriefWikiname['id']=$newManId;
			$IdBriefWikiname['brief']=$brief;
			$IdBriefWikiname['wikiname']=$wikiName;
			$IdBriefWikiname['used']=$used;
			$IdBriefWikiname['random']=random($newManId);
			echo json_encode($IdBriefWikiname);
		}
		else{
			$result=mysql_query("select id, imgtype, brief, news_title_1, news_link_1, news_abs_1, news_press_1, news_title_2, news_link_2, news_abs_2, news_press_2, news_title_3, news_link_3, news_abs_3, news_press_3 from candidate where `wiki_name`='" . $wikiName . "'");
			$rowresult=mysql_fetch_row($result);
			$newManId=$rowresult[0];
			$type=$rowresult[1];
			$brief=$rowresult[2];
			$yahoo=array();
			$yahoo[1]['title']=$rowresult[3];
			$yahoo[1]['link']=$rowresult[4];
			$yahoo[1]['newsabtract']=$rowresult[5];
			$yahoo[1]['press']=$rowresult[6];
			$yahoo[2]['title']=$rowresult[7];
			$yahoo[2]['link']=$rowresult[8];
			$yahoo[2]['newsabtract']=$rowresult[9];
			$yahoo[2]['press']=$rowresult[10];
			$yahoo[3]['title']=$rowresult[11];
			$yahoo[3]['link']=$rowresult[12];
			$yahoo[3]['newsabtract']=$rowresult[13];
			$yahoo[3]['press']=$rowresult[14];
			$IdImgType=array();
			$IdImgType['type']=$type;
			$IdImgType['id']=$newManId;
			$IdImgType['brief']=$brief;
			$IdImgType['used']=$used;
			$IdImgType['news']=$yahoo;
			$IdImgType['random']=random($newManId);
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
									"', `imgwidth`='" . @$imgoutdata['width'] .
									"', `imgheight`='" . @$imgoutdata['height'] .
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
			$imgNews=array();
			$imgNews['type'] = $imgoutdata['type'];
			$imgNews['news'] = $yahooNews;
			echo json_encode($imgNews);		
	}
}
?>