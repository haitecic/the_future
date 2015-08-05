<?php
ini_set('display_errors', 1); //顯示錯誤訊息
ini_set('log_errors', 1); //錯誤log 檔開啟
ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); //log檔位置
error_reporting(E_ALL); //錯誤回報
ini_set('display_errors', 'On');
//error_reporting(E_ALL | ~E_WARNING| ~E_NOTICE);
$order=1;
$key="尹衍樑";
$key=urlencode($key);
echo "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$key&start=0&rsz=8";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=$key&start=0&rsz=8");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$output = curl_exec($ch);
curl_close($ch);
//var_dump($output);
$eightDataObj = json_decode($output);
echo $imgresult = $eightDataObj -> responseData -> results[$order] ->url;

?>