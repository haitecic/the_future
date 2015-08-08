<?php
/*ini_set('display_errors', 'On');
error_reporting(E_ALL | ~E_WARNING| ~E_NOTICE);
*/
require_once "ImageResize.php";
require_once 'simple_html_dom.php';
function yahoo_news($key){
	$key=urlencode($key);
	$html=file_get_contents("https://tw.news.search.yahoo.com/search?p=$key&fr=uh3_news_web_gs");
    //摘要
	if(preg_match_all('#<div class="compText mt-5" ><p class="">(.+?)</p></div>#', $html, $parts)){
		$newsabtract=array();
		for($i=0; $i<count($parts['0']); $i++){ 
			if(!preg_match('/<div class="compText mt-5" ><p class=""><span class=" fc-12th">/i', $parts['0'][$i])) array_push($newsabtract, $parts['0'][$i]);
		}
		//媒體來源
		preg_match_all('#<div class="compText mt-5" ><p class=""><span class=" fc-12th">(.+?)</p></div>#', $html, $parts); 
		$press=$parts[0];
		//標題，連結位址
		preg_match_all('#<h3 class="title"><a class=" fz-m"(.+?)</a></h3>#', $html, $parts);
		$title_link=$parts[0];
		for($k=0; $k<10; $k++){
			$yahoo[$k]['newsabtract']=$newsabtract[$k];
			$yahoo[$k]['press']=$press[$k];
			$yahoo[$k]['title_h']=$title_link[$k];
		}
		return $yahoo;
	}
}

function yahoo_news_simpleHtmlDom($key){
	$key=urlencode($key);
	$html=file_get_html("https://tw.news.search.yahoo.com/search?p=$key&fr=uh3_news_web_gs");
	if($html && is_object($html) && isset($html->nodes)){
		//判斷是否有新聞存在
		$ifNewsExist=$html->find('div[class=compTitle] h3 a[class=fz-m]');
		//若有，回傳
		//var_dump($ifNewsExist);
		if(!empty($ifNewsExist)){
			$press=array();
			$newsabtract=array();
			$title=array();
			$link=array();
			//標題，連結位址
			foreach($html->find('div[class=compTitle] h3 a[class=fz-m]') as $element){
				$titleLink = $element -> href;
				$titleText = $element -> plaintext;
				$titleText=strip_tags($titleText);
				if(mb_strlen($titleText,'utf-8')>20){
					$titleText=mb_substr($titleText,0,20,"utf-8");
					$titleText = $titleText . "...";
				}
				$titleLink=strip_tags($titleLink);
				$titleH = '<div><a href="' .$titleLink . '" target="_blank">' . $titleText . '</a></div>';
				//$titleH = $element -> outertext;//輸出原來標籤
				array_push($title, $titleText);
				array_push($link, $titleLink);
				}
			//摘要與媒體來源
			foreach($html->find('div[class="compText mt-5"] p') as $element){
				$span = $element-> find('.fc-12th');
				if(!empty($span)){
					$pressSource = $element-> plaintext;
					$pressSource=strip_tags($pressSource);
					array_push($press, $pressSource);
					//echo $element-> outertext;輸出原來標籤
				}
				else{
					//$abstractText = $element-> plaintext;
					//$abstractText=strip_tags($abstractText);
					$abstractText="";
					array_push($newsabtract, $abstractText);
					//echo $element-> outertext;輸出原來標籤
				}
			}	
			for($k=0; $k<count($ifNewsExist); $k++){
				$yahoo[$k]['newsabtract']=$newsabtract[$k];
				$yahoo[$k]['press']=$press[$k];
				$yahoo[$k]['title']=$title[$k];
				$yahoo[$k]['link']=$link[$k];
			}
			return $yahoo;
		}
	}	
}


//var_dump(query_main_txt('王建民 (棒球選手)'));
function query_main_txt($key){
	$key=urlencode($key);
	$string=@file_get_contents("http://zh.wikipedia.org/w/api.php?action=query&prop=extracts&exintro=true&exsectionformat=wiki&format=php&titles=$key");
	$string=unserialize($string);
	foreach($string['query']['pages'] as $wiki){
		if(array_key_exists('extract', $wiki) && $wiki['extract']!=""){
			$html = @file_get_html("http://zh.wikipedia.org/zh-tw/$key");
			if($html && is_object($html) && isset($html->nodes)){//以simple_html_dom解析原網頁，解除簡體中文的問題
			//var_dump(@$html->find('div[id=mw-content-text] p')[0]);
				if(is_object($html->find('div[id=mw-content-text] p')[0])){
					//echo "1";
					$txt=@$html->find('div[id=mw-content-text] p')[0]->plaintext;
					if(is_object($html->find('div[id=mw-content-text] p')[1])){
						$txt= $txt . $html->find('div[id=mw-content-text] p')[1]->plaintext;
					}
					$txt=preg_replace("/\[(.+?)\]/", "", $txt);
				}
				else{
					
					$txt=strip_tags($wiki['extract']);
				}
				$html->clear();
				unset($html);
			}
			else{
				
				$txt=strip_tags($wiki['extract']);	
			}
			//處理字串長度
			if(mb_strlen($txt,'utf-8')>85){
				$txt=mb_substr($txt,0,85,"utf-8");
				$txt = $txt . "...";
			}
			$txt=str_replace('"', "'", $txt);
			$txt=str_replace("'", "''", $txt);
			return $txt;			
		}		
	}
}
//nominate_main_txt('蔣經國');
function nominate_main_txt($key){
	//先讀取資料庫
	global $dbh;
	$dbh->beginTransaction();
	$sql="select * from candidate where (name=? OR wiki_name=?)";
	$stmt = $dbh->prepare($sql);
	$rowresults=array();
	$exeres = $stmt->execute(array($key, $key));
	$dbh->commit();
	if ($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
		if(!empty($rowresults)){
			$qualify=$rowresults[0]['qualify'];
			if($qualify==0){
				return $rowresults[0]['brief'];
				$rowresults=null;
			}
			else if($qualify==1){
				return "notHuman";
				$rowresults=null;
			}
			else if($qualify==2){
				return "notTaiwan";
				$rowresults=null;
			}
			
		}
		$rowresults=null;
	}
	//wiki api
	$key=urlencode($key);
	$string=@file_get_contents("http://zh.wikipedia.org/w/api.php?action=query&prop=extracts&exintro=true&exsectionformat=wiki&format=php&titles=$key&redirects=");
	$arrayExtract=unserialize($string);
	//var_dump($arrayExtract['query']['pages']);
	foreach($arrayExtract['query']['pages'] as $wikiExtract){
		//wiki是否有資料
		if(array_key_exists('extract', $wikiExtract)){
			//用Template:Bd, Template:Age判斷是否為人
			$person=1;
			$string=@file_get_contents("https://zh.wikipedia.org//w/api.php?action=query&prop=templates&format=php&tllimit=100&titles=$key&redirects=");
			$arrayTemplates=unserialize($string);
			//var_dump($arrayTemplates);
			foreach($arrayTemplates['query']['pages'] as $wikiTemplates){
				if(array_key_exists('templates', $wikiTemplates)){
					$person=0;
					foreach($wikiTemplates['templates'] as $template){
						if($template['title']!='Template:Bd' && $template['title']!='Template:Age' && $template['title']!='Template:Infobox Politician Basic' && $template['title']!='Template:Infobox person') $person = $person + 0;
						else $person = $person + 1;
						//判斷同名
						if($template['title']=='Template:Disambig' || $template['title']=='Template:Dmbox'){
							preg_match_all('#<li>(.+?)</li>#', $wikiExtract['extract'], $parts);
							if(count($parts[0])){
								for($i=0; $i<count($parts[0]); $i++){
									$namestring=explode('，', $parts[0][$i]);
									$namestring=explode('：', $namestring[0]);
									$names[$i]=str_replace("<li>", "", $namestring[0]);
								}
								return $names;
							}
							else return "Disambig";
						}
					}
				}
			}

			if($person){
				$alive=true;
				$string=@file_get_contents("https://zh.wikipedia.org/w/api.php?action=query&prop=categories&format=php&cllimit=100&titles=$key&redirects=");
				$arrayCategories=unserialize($string);
				foreach($arrayCategories['query']['pages'] as $wikiCategories){
					if(array_key_exists('categories', $wikiCategories)){
						foreach($wikiCategories['categories'] as $categories){
							if(strpos($categories['title'], '逝世')) $alive=false;
						}
					}
				}
				if($alive){
					$html = @file_get_html("http://zh.wikipedia.org/zh-tw/$key");
					if($html && is_object($html) && isset($html->nodes)){
						//var_dump(is_array($html->find('div[id=mw-content-text] p')));
						if(is_array($html->find('div[id=mw-content-text] p'))){
							$maintxtParray=$html->find('div[id=mw-content-text] p');
							$txt=$maintxtParray[0]->plaintext;
							if(is_object($maintxtParray[1])){
								$txt= $txt . $maintxtParray[1]->plaintext;
							}
							$txt=preg_replace("/\[(.+?)\]/", "", $txt);
						}
						else{
							$txt=strip_tags($wikiExtract['extract']);
						}
						$html->clear();
						unset($html);
					}
					else{
						$txt=strip_tags($wikiExtract['extract']);	
					}
					return $txt;
				}
				else{
					return "deadMan";
				}
			}
			else{
				return "notHuman";
			}
		}
	}
}


//var_dump($ar['query']['pages']);
//var_dump(nominate_main_txt('林書豪'));
//echo "<br><br><br>";
//var_dump(nominate_main_txt('壽豐鄉'));


//詳細內容http://www.mediawiki.org/wiki/Extension:TextExtracts



function query_full_txt($key){
	$key=urlencode($key);
	$string=file_get_contents("http://zh-tw.wikipedia.org/w/api.php?action=query&prop=extracts&explaintext=true&exsectionformat=wiki&format=php&titles=$key");
	$string=unserialize($string);
	foreach($string['query']['pages'] as $wiki){
		if(array_key_exists('extract', $wiki)){
			$fulltxt=strip_tags($wiki['extract']);
			return $fulltxt;
		}
	}
}
//詳細內容http://www.mediawiki.org/wiki/Extension:TextExtracts

function parse_web_text($key){
	$key=urlencode($key);
	$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=parse&page=$key&prop=text&contentmodel=wikitext&format=php");
	$string=unserialize($string);
	if(array_key_exists('parse', $string)) return $string['parse']['text']['*'];
}
/*
prop參數可以調整輸出
=categories(Gives the categories of the parsed wikitext.)
=images(Gives the images in the parsed wikitext.)
輸出後，函數輸出方式可能會有所不同

詳細內容http://www.mediawiki.org/wiki/API:Parsing_wikitext
*/

//爬wiki的圖，若無圖則輸出wiki未經授權圖
/*
function output_img($key){
	$key=urlencode($key);
	$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=parse&page=$key&prop=text&contentmodel=wikitext&format=php");
	$string=unserialize($string);
	$result="http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png";
	if(array_key_exists('parse', $string)){
		$string=$string['parse']['text']['*'];
		$html = str_get_html($string);
		if($html && is_object($html) && isset($html->nodes)){
			if(is_object(@$html->find('.vcard a.image img')[0])){
				$result=$html->find('.vcard a.image img')[0] -> src;
			}
			else if(is_object(@$html->find('.thumbinner a.image img')[0])){
				$result=$html->find('.thumbinner a.image img')[0] -> src;
			}
			$html->clear();
			unset($html);
		}		
		else{
			if(preg_match_all('#<td colspan=(.+?)</td>#', $string, $parts)){
				if(preg_match_all('#src="(.+?)"#', $parts[0][0], $link)){
					if(preg_match_all('#"(.+?)"#', $link[0][0], $imglink)) $result=trim($imglink[0][0], '"');
				}
			}
		}
	}
	return $result;
}
*/
//google搜尋圖片
function google_img_search($key, $order){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$key&start=0&rsz=8");
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$output = curl_exec($ch);
	curl_close($ch);
	$eightDataObj = json_decode($output);
	
	$imgresult = $eightDataObj -> responseData -> results[$order] ->url;
	$originurl = $eightDataObj -> responseData -> results[$order] ->originalContextUrl;
	$origintitle = $eightDataObj -> responseData -> results[$order] ->titleNoFormatting;
	$imginfo = @getimagesize($imgresult);
	if(!$imginfo){
		$order=$order+1;
		return google_img_search($key, $order);
	}
	else{
		$typestring = explode('/', $imginfo["mime"]);
		$result['width']=$imginfo['0'];
		$result['height']=$imginfo['1'];
		$result['type']= $typestring[1];
		$result['source']=$imgresult;
		$result['originurl']=$originurl;
		$result['origintitle']=$origintitle;
		return $result;
	}
}

function imgdownload($candidatename, $newname){
	$i=1;
	$candidatename=urlencode($candidatename);	
	$imgdata=google_img_search($candidatename, $i);
	
	$source=$imgdata['source'];
	$width = $imgdata['width'];
	$height = $imgdata['height'];
	$type = $imgdata['type'];
	
	if ($width>= "630") $d = $width / 35;
	else $d = $width / 20;
	
	$Mosaic=$newname."m";
	switch($type){
		case "jpeg":
			$img = @imagecreatefromjpeg($source);
			imagejpeg($img, 'image/candidate/' . $newname . '.' . $type);
			imagemosaic($img, 0, 0, $width, $height, $d);
			imagejpeg($img, 'image/candidate/' . $Mosaic . '.' . $type);
			break;
		case "png":
			$img = imagecreatefrompng($source);
			imagepng($img, 'image/candidate/' . $newname . '.' . $type);
			imagemosaic($img, 0, 0, $width, $height, $d);
			imagepng($img, 'image/candidate/' . $Mosaic . '.' . $type);
			break;
	}
	/*調整尺寸*/
	$imageobj = new \Eventviva\ImageResize('image/candidate/' . $newname . '.' . $type);
	$imageobj->resizeToWidth(300);
	$imageobj->save('image/candidate/' . $newname . '.' . $type);
	$result=array();
	$result['source']=$source;
	$result['type']=$type;
	$result['width']=$width;
	$result['height']=$height;
	$result['originurl']=$imgdata['originurl'];
	$result['origintitle']=$imgdata['origintitle'];
	return $result;
}
//馬賽克函數
function imagemosaic(&$im, $x1, $y1, $x2, $y2, $deep){
	for($x = $x1; $x < $x2; $x += $deep){
		for ($y = $y1; $y < $y2; $y += $deep){
			$color = @imagecolorat ($im, $x + round($deep / 2), $y + round($deep / 2));
			@imagefilledrectangle ($im, $x, $y, $x + $deep, $y + $deep, $color);
		}
	}
}
?>