<?php
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
require_once 'simple_html_dom.php';
function yahoo_news_simpleHtmlDom($key){
	$key=urlencode($key);
	$html=file_get_html("https://tw.news.search.yahoo.com/search?p=$key&fr=uh3_news_web_gs");
	if($html && is_object($html) && isset($html->nodes)){
		$press=array();
		$newsabtract=array();
		$title=array();
		$link=array();
		//標題，連結位址
		foreach($html->find('div[class=compTitle] h3 a[class=fz-m]') as $element){
			$titleLink = $element -> href;
			$titleText = $element -> plaintext;
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
				array_push($press, $pressSource);
				//echo $element-> outertext;輸出原來標籤
			}
			else{
				$abstractText = $element-> plaintext;
				array_push($newsabtract, $abstractText);
				//echo $element-> outertext;輸出原來標籤
			}
		}
	}
	for($k=0; $k<10; $k++){
		$yahoo[$k]['newsabtract']=$newsabtract[$k];
		$yahoo[$k]['press']=$press[$k];
		$yahoo[$k]['title']=$title[$k];
		$yahoo[$k]['link']=$link[$k];
	}
	return $yahoo;
}

function query_main_txt($key){
	$key=urlencode($key);
	$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=query&prop=extracts&exintro=true&exsectionformat=wiki&format=php&titles=$key");
	$string=unserialize($string);
	foreach($string['query']['pages'] as $wiki){
		if(array_key_exists('extract', $wiki)) return $wiki['extract'];
	}
}


//詳細內容http://www.mediawiki.org/wiki/Extension:TextExtracts



function query_full_txt($key){
	$key=urlencode($key);
	$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=query&prop=extracts&explaintext=true&exsectionformat=wiki&format=php&titles=$key");
	$string=unserialize($string);
	foreach($string['query']['pages'] as $wiki){
		if(array_key_exists('extract', $wiki)) return $wiki['extract'];		
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
//google搜尋圖片
function google_img_search($key){
	$key=urlencode($key);
	$fourData = file_get_contents("https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$key");
	$fourDataObj = json_decode($fourData);
	$result = $fourDataObj -> responseData -> results[0] ->url;
	return $result;
}
?>