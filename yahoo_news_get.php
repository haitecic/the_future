<!DOCTYPE html>
<?php

?>
<html>
<head>
    <meta charset="utf-8">
</head>
<?php
$key_word='王建民';
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
</html>