<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="yahoo_news_get.php" method="post">
<h2>關鍵字： <input type='text' name='keyword' value='' />
<input type='submit' value='確認' /></h2>
</form>
<br>
<h2>yahoo 新聞</h2>
<?php
if(!isset($_POST['keyword'])) exit;
$key_word=$_POST['keyword'];
$key_word=urlencode($key_word);                                                              
$html=file_get_contents("https://tw.news.search.yahoo.com/search?p=$key_word&fr=uh3_news_web_gs");
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
for($i=0; $i<count($newsabtract); $i++)
	{
	echo $titile_link[$i];
	echo $newsabtract[$i];
	echo $press[$i];
	echo "<br>";	
	}
/*   
foreach($parts['0'] as $contect)
{
echo $contect;
echo "<br>";
}*/
?>
</body>
</html>