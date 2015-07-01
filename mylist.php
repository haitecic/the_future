<?php
session_start();
require_once "config/db_connect.php";
if(isset($_SESSION['userid'])){
	$user_id=$_SESSION['userid'];
	//讀取最愛
	$result=mysql_query("select right_one, right_two, right_three from user where id=$user_id");
		$right_one=mysql_result($result, 0, 'right_one');
		$right_two=mysql_result($result, 0, 'right_two');
		$right_three=mysql_result($result, 0, 'right_three');
	
	//讀取選秀名單
	$query="SELECT * FROM fight_result LEFT JOIN candidate ON fight_result.candidate_id = candidate.id WHERE fight_result.user_id=$user_id GROUP BY fight_result.candidate_id";
	$result=mysql_query($query);
	$string="";
	for($j=0; $j<mysql_num_rows($result); $j++){
	$name=mysql_result($result, $j, 'candidate.name');
	$imgsrc=mysql_result($result, $j, 'candidate.img');
	$id=mysql_result($result, $j, 'candidate.id');
		if($id==$right_one || $id==$right_two || $id==$right_three){
			$string= $string . '<div id="list_' . $j . '">
								<label class="listcheckbox">
								<input type="checkbox" style="display:none" name="favoriteid" value="' . $id . '" checked/>
								<div id="area_' . $j . '" class="checkArea"><div class="check"></div></div>
								</label>
								<div>' . $name . '</div>
								<div><img src="' . $imgsrc . '"/></div>
								</div>';
		}
		else{
			$string= $string . '<div id="list_' . $j . '">
								<label class="listcheckbox">
								<input type="checkbox" style="display:none" name="favoriteid" value="' . $id . '"/>
								<div id="area_' . $j . '" class="checkArea"></div>
								</label>
								<div>' . $name . '</div>
								<div><img src="' . $imgsrc . '"/></div>
								</div>';	
		}
	}
	echo $string;
}
?>