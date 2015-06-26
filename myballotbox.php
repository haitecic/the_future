<html>
<head>
    <meta charset="utf-8">	
</head>
<body>	
<?php
require_once "config/db_connect.php";//連結到本機端資料庫project_resource
$user_id=1;//載入登入資料
	//讀取圖片//未來引用mybox.php
	$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_one WHERE user.id=$user_id");
	if(mysql_num_rows($result)) $rightone_img=mysql_result($result, 0, 'img');
	else $rightone_img=null;
	$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_two WHERE user.id=$user_id");
	if(mysql_num_rows($result)) $righttwo_img=mysql_result($result, 0, 'img');
	else $righttwo_img=null;
	$result=mysql_query("SELECT candidate.img FROM candidate LEFT JOIN user ON candidate.id = user.right_three WHERE user.id=$user_id");
	if(mysql_num_rows($result)) $rightthree_img=mysql_result($result, 0, 'img');
	else $rightthree_img=null;
?>
<div class="mylist">
<h1 class="headertext1">我的投票箱</h1>	
<img id="show_one" src="http://www.egov.ee/media/1075/male-icon.jpg"/>		
<img id="show_two" src="http://www.egov.ee/media/1075/male-icon.jpg"/>		
<img id="show_three" src="http://www.egov.ee/media/1075/male-icon.jpg"/>		
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
var rightone_img="<?php echo $rightone_img?>";
var righttwo_img="<?php echo $righttwo_img?>";
var rightthree_img="<?php echo $rightthree_img?>";
if(rightone_img!=""){
	$('#show_one').attr('src', rightone_img);
	}
if(righttwo_img!=""){
	$('#show_two').attr('src', righttwo_img);
	}
	if(rightthree_img!=""){
	$('#show_three').attr('src', rightthree_img);
	}
</script>	
</body>
</html>