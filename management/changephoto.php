<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL | ~E_WARNING| ~E_NOTICE);
require_once "../config/db_connect.php";//連結到資料庫taiwan_future
require_once "WikiYahoonewsfunction.php";//呼叫出 crawl function
		$id=$_POST['id'];
		$order=$_POST['porder'];
		//$id=3;
		//$order=5;
		$results=mysql_query("select * from candidate where id=$id");
		if(mysql_num_rows($results)){
			$rowresult=mysql_fetch_assoc($results);
			$name=$rowresult['name'];
			$img=imgdownload($name, $id, $order);
			$titleoutput=$img['origintitle'];
			if(mb_strlen($titleoutput,'utf-8')>6){
				$titleoutput=mb_substr($titleoutput,0,5,"utf-8");
				$titleoutput = "來源：" . $titleoutput . "...";
			}
			else{
				$titleoutput = "來源：" . $titleoutput;
			}
			$query='update candidate set `img`="' . $img['source'] . 
			'", `originurl`="' . $img['originurl'] .
			'", `origintitle`="' . $img['origintitle'] .
			'", `origintitleo`="' . $titleoutput .
			'", `imgwidth`="' . $img['width'] . 
			'", `imgheight`="' . $img['height'] . 
			'", `imgtype`="' . $img['type'] . 
			'" where id="' . $id . '"';
			mysql_query($query) or die(mysql_error());
			$outputresults=mysql_query("select * from candidate where id=$id");
			if(mysql_num_rows($outputresults)){
				$outputrowresult=mysql_fetch_assoc($outputresults);
				$showresult['type']=$outputrowresult['imgtype'];
				echo json_encode($showresult);
			}
			//for(){
			//$query="insert into news (`candidate_id`, `title`, `title_link`, `abstract`, `source`) value ('" . $id . "', '" . $name . "', '" . $brief . "', '" . $img . "', '" . $title_1 . "', '" . $abs_1 . "', '" . $press_1 . "', '" . $title_2 . "', '" . $abs_2 . "', '" . $press_2 . "', '" . $title_3 . "', '" . $abs_3 . "', '" . $press_3 . "')";;
			//}
		}
		

?>