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
<h2>yahoo 新聞標題摘要</h2>
<?php
if(!isset($_POST['keyword'])) exit;
$key_word=$_POST['keyword'];
$key_word=urlencode($key_word);                                                              
$html=file_get_contents("https://tw.news.search.yahoo.com/search?p=$key_word&fr=uh3_news_web_gs");
    preg_match_all ( '#<div class="compText mt-5" ><p class="">(.+?)</p>#', $html, $parts );
   //var_dump($parts);
foreach($parts['0'] as $contect)
{
echo $contect;
echo "<br>";
}
?>
</body>
</html>