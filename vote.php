<?php
require_once "config/db_connect.php";//連結到本機端資料庫project_resource

$round_num=10;//設定一輪要幾個
$results=mysql_query("select * from candidate");
$num_candidate=mysql_num_rows($results);


$round_list=array();
for($i=1; $i<=$round_num; $i++)
	{
	$random_number=rand(0,$num_candidate-1);
	$round_list_id[$i]=mysql_result($results, $random_number, 'id');
	
	$x=0;
	foreach($round_list_id as $list_id)
			{
			if($list_id==$round_list_id[$i]) $x=$x+1;
			}
	
	  if($x>=2) 
		{
		unset($round_list_id[$i]);
		$i=$i-1;
		}
	else{
		$round_list[$i]['name']=mysql_result($results, $random_number, 'name');
		$round_list[$i]['img']=mysql_result($results, $random_number, 'img');
		$round_list[$i]['note']=mysql_result($results, $random_number, 'note');
		$round_list[$i]['position']=mysql_result($results, $random_number, 'position');
		}
	}
	//var_dump($round_list);
?>
