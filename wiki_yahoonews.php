<?php
//if(!isset($_POST['keyword']) || empty($_POST['keyword'])) exit;
$key_word=$_POST['keyword'];
$key_word=urlencode($key_word);

$wikiinfo['imglink']=output_img($key_word);
$wikiinfo['maintxt']=query_main_txt($key_word);
$wikiinfo['yahoo']=yahoo_news($key_word);
echo json_encode($wikiinfo);



function yahoo_news($key)
{
$html=file_get_contents("https://tw.news.search.yahoo.com/search?p=$key&fr=uh3_news_web_gs");
    //摘要
	preg_match_all('#<div class="compText mt-5" ><p class="">(.+?)</p>#', $html, $parts); 
	$newsabtract=array();
	for($i=0; $i<count($parts['0']); $i++)
		{ 
		if(!preg_match('/<div class="compText mt-5" ><p class=""><span class=" fc-12th">/i', $parts['0'][$i])) array_push($newsabtract, $parts['0'][$i]);
		}
	//媒體
	preg_match_all('#<div class="compText mt-5" ><p class=""><span class=" fc-12th">(.+?)</p>#', $html, $parts); 
	$press=$parts[0];
    //標題，連結位址
	preg_match_all('#<h3 class="title"><a class=" fz-m"(.+?)</a></h3>#', $html, $parts);
	$titile_link=$parts[0];
	for($k=0; $k<10; $k++)
		{
		$yahoo[$k]['newsabtract']=$newsabtract[$k];
		$yahoo[$k]['press']=$press[$k];
		$yahoo[$k]['titile_h']=$titile_link[$k];
		}
		return $yahoo;
}


function query_main_txt($key)
{
$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=query&prop=extracts&exintro=true&exsectionformat=wiki&format=php&titles=$key");
$string=unserialize($string);
foreach($string['query']['pages'] as $wiki)
		{
		if(array_key_exists('extract', $wiki)) return $wiki['extract'];
		}
}
//詳細內容http://www.mediawiki.org/wiki/Extension:TextExtracts



function query_full_txt($key)
{
$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=query&prop=extracts&explaintext=true&exsectionformat=wiki&format=php&titles=$key");
$string=unserialize($string);
foreach($string['query']['pages'] as $wiki)
		{
		if(array_key_exists('extract', $wiki)) return $wiki['extract'];		
		}
}
//詳細內容http://www.mediawiki.org/wiki/Extension:TextExtracts


		
function parse_web_text($key)
{
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

//若沒有圖則輸出空值
function parse_web_img($key)
{
$string=file_get_contents("http://zh.wikipedia.org/w/api.php?action=parse&page=$key&prop=text&contentmodel=wikitext&format=php");
$string=unserialize($string);
if(array_key_exists('parse', $string))
	{
	$string=$string['parse']['text']['*'];
	if(preg_match_all('#<td colspan=(.+?)/>#', $string, $parts))
		{
		if(preg_match_all('#src="(.+?)"#', $parts[0][0], $link))
			{
			if(preg_match_all('#"(.+?)"#', $link[0][0], $imglink)) return trim($imglink[0][0], '"');
			}
		}
	}
}

function output_img($key)
{
$result=parse_web_img($key);
if($result==null) return "http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png";
else return $result;
}
?>