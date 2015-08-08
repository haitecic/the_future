<?php
require_once "../config/db_connect.php";
	$query="select * from personality";
	$results=mysql_query($query);
	$num=mysql_num_rows($results);
	$showresult=array();
	for($i=0; $i<$num; $i++){
		$rowresult=mysql_fetch_assoc($results);
		$showresult['id'][$i]=$rowresult['id'];
		$showresult['content'][$i]=$rowresult['content'];
	}
	echo json_encode($showresult);
?>