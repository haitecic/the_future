<?php
session_start();
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
    $config['username'],
    $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");

require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
//echo nominate_main_txt("柯文哲");
//echo "2";


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
			$dbh->beginTransaction();
			$sql="select wiki_name from candidate where (name=? OR wiki_name=?)";
			$stmt = $dbh->prepare($sql);
			$rowresults=null;
			$rowresults=array();
			$exeres = $stmt->execute(array($name, $name));
			$dbh->commit();
			if ($exeres){
				for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
					$rowresults[$i]=$row;
				}
				if(!empty($rowresults)){
					$result['wikiname']=$rowresults[0]['wiki_name'];
				}
				else{
				$result['wikiname']=$name;
				}
				$rowresults=null;
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
		$dbh->beginTransaction();
		$sql="select * from candidate where wiki_name=?";
		$stmt = $dbh->prepare($sql);
		$exeres = $stmt->execute(array($wikiName));
		$dbh->commit();
		$rowresults=null;
		$rowresults=array();
		if ($exeres){
			for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
				$rowresults[$i]=$row;
			}
			if(!empty($rowresults)){
				$used=true;
			}
			$rowresults=null;
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
			
			$dbh->beginTransaction();
			$sql="insert into candidate (`name`, `wiki_name`, `brief`) value(?, ?, ?)";
			$stmt=$dbh->prepare($sql);
			$stmt->execute(array($name, $wikiName, $brief));
			$newManId=$dbh->lastInsertId();
			$dbh->commit();			
			
			$IdBriefWikiname=array();
			$IdBriefWikiname['id']=$newManId;
			$IdBriefWikiname['brief']=$brief;
			$IdBriefWikiname['wikiname']=$wikiName;
			$IdBriefWikiname['used']=$used;
			$IdBriefWikiname['random']=random($newManId);
			echo json_encode($IdBriefWikiname);
		}
		else{
			$dbh->beginTransaction();
			$sql="select id, originurl, origintitleo, imgtype, brief, news_title_1, news_link_1, news_abs_1, news_press_1, news_title_2, news_link_2, news_abs_2, news_press_2, news_title_3, news_link_3, news_abs_3, news_press_3 from candidate where wiki_name=?";
			$stmt = $dbh->prepare($sql);
			$exeres = $stmt->execute(array($wikiName));
			$dbh->commit();
			$rowresults=null;
			$rowresults=array();
			if ($exeres){
				for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
					$rowresults[$i]=$row;
				}
				if(!empty($rowresults)){
					$rowresult=$rowresults[0];
				}
				$rowresults=null;
			}
			
			$newManId=$rowresult['id'];
			$dbh->beginTransaction();
			$sql="update candidate set `inpool`=? where id=?";
			$stmt = $dbh->prepare($sql);
			$exeres = $stmt->execute(array(true, $newManId));
			$dbh->commit();
			$type=$rowresult['imgtype'];
			$brief=$rowresult['brief'];
			$yahoo=array();
			$yahoo[1]['title']=$rowresult['news_title_1'];
			$yahoo[1]['link']=$rowresult['news_link_1'];
			$yahoo[1]['newsabtract']=$rowresult['news_abs_1'];
			$yahoo[1]['press']=$rowresult['news_press_1'];
			$yahoo[2]['title']=$rowresult['news_title_2'];
			$yahoo[2]['link']=$rowresult['news_link_2'];
			$yahoo[2]['newsabtract']=$rowresult['news_abs_2'];
			$yahoo[2]['press']=$rowresult['news_press_2'];
			$yahoo[3]['title']=$rowresult['news_title_3'];
			$yahoo[3]['link']=$rowresult['news_link_3'];
			$yahoo[3]['newsabtract']=$rowresult['news_abs_3'];
			$yahoo[3]['press']=$rowresult['news_press_3'];
			$IdImgType=array();
			$IdImgType['type']=$type;
			$IdImgType['originurl']=$rowresult['originurl'];
			$IdImgType['origintitle']=$rowresult['origintitleo'];
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
			$dbh->beginTransaction();
			$titleoutput=$imgoutdata['origintitle'];
			if(mb_strlen($titleoutput,'utf-8')>6){
				$titleoutput=mb_substr($titleoutput,0,5,"utf-8");
				$titleoutput = "來源：" . $titleoutput . "...";
			}
			else{
				$titleoutput = "來源：" . $titleoutput;
			}			
			$sql="update candidate set `img`=?, 
			`imgtype`=?,
			`originurl`=?,
			`origintitle`=?,
			`origintitleo`=?,
			`imgwidth`=?, 
			`imgheight`=?, 
			`news_title_1`=?, 
			`news_link_1`=?, 
			`news_abs_1`=?, 
			`news_press_1`=?, 
			`news_title_2`=?, 
			`news_link_2`=?, 
			`news_abs_2`=?, 
			`news_press_2`=?, 
			`news_title_3`=?, 
			`news_link_3`=?, 
			`news_abs_3`=?, 
			`news_press_3`=?,
			`inpool`=? 
			where id=?";
			$stmt = $dbh->prepare($sql);
			$exeres = $stmt->execute(array($imgoutdata['source'], 
			$imgoutdata['type'],
			$imgoutdata['originurl'],
			$imgoutdata['origintitle'],
			$titleoutput,
			$imgoutdata['width'], 
			$imgoutdata['height'], 
			$yahooNews[1]['title'], 
			$yahooNews[1]['link'], 
			$yahooNews[1]['newsabtract'], 
			$yahooNews[1]['press'], 
			$yahooNews[2]['title'], 
			$yahooNews[2]['link'], 
			$yahooNews[2]['newsabtract'], 
			$yahooNews[2]['press'], 
			$yahooNews[3]['title'], 
			$yahooNews[3]['link'], 
			$yahooNews[3]['newsabtract'], 
			$yahooNews[3]['press'], true, $id));
			$dbh->commit();
			
			$imgNews=array();
			$imgNews['type'] = $imgoutdata['type'];
			$imgNews['news'] = $yahooNews;
			$imgNews['originurl']=$imgoutdata['originurl'];
			$imgNews['origintitle']=$titleoutput;
			echo json_encode($imgNews);		
	}
}
?>