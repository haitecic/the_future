<?php
require_once "config/db_connect.php";//連結到資料庫taiwan_future
if(isset($_POST['id']) && !empty($_POST['id'])){
	$id=$_POST['id'];
	$query="select name, imgtype, brief, wiki_name from candidate where id=$id";
	$result=mysql_query($query);
	if(mysql_num_rows($result)==1){
		$rowresult=mysql_fetch_row($result);
		
		$showresult['name']=$rowresult[0];
		$showresult['imgtype']=$rowresult[1];
		$showresult['brief']=$rowresult[2];
		$showresult['wikiname']=$rowresult[3];
		$showresult['status']="successful";
		echo json_encode($showresult);
	}
	else{
		$showresult['status']="failed";
		echo json_encode($showresult);
	}
}
else{
	$showresult['status']="failed";
	echo json_encode($showresult);
}
?>