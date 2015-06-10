<!DOCTYPE html>
<?php
require_once "random.php";//從資料庫隨機擷取10筆資料
//登入資料載入
$user_id=1;
//讀取使用者資料
$result=mysql_query("SELECT candidate.img FROM candidate, user where user.right_one = candidate.id");
if(mysql_num_rows($result)) $rightone_img=mysql_result($result, 0, 'img');
else $rightone_img=null;
$result=mysql_query("SELECT candidate.img FROM candidate, user where user.right_two = candidate.id");
if(mysql_num_rows($result)) $righttwo_img=mysql_result($result, 0, 'img');
else $righttwo_img=null;
$result=mysql_query("SELECT candidate.img FROM candidate, user where user.right_three = candidate.id");
if(mysql_num_rows($result)) $rightthree_img=mysql_result($result, 0, 'img');
else echo $rightthree_img=null;
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Colorful Flat by tB3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />

	<link id="callCss"rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">

</head>
<body>


<!-- Sectionone block ends======================================== -->
 



<!-- Meet our team======================================== -->
<div id="meetourteamSection">
<div class="container">	
<div class="tabbable tabs">
<div class="tab-content label-primary">
	<div class="tab-pane active" id="all">
	<ul class="thumbnails">
		<div>
		<img  id="show_one" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:100px; height:100px;" />
		<img  id="show_two" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:100px; height:100px;" />
		<img  id="show_three" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:100px; height:100px;" />
		</div>
        <li id="candidate_1" class="span4" style="">
		<div class="thumbnail">
		<div class="blockDtl">
		<div class="individual1" onclick="choose('oldone')"><img id="image_oldone" class="person_img" src="<?php echo $round_img[1];?>" alt=""></div>
		<h4 id="name_oldone"><?php echo $round_list[1];?></h4>
		<h5 id="brief_oldone"><?php echo $round_brief[1];?></h5>
		<div id="news_oldone_1"><?php echo $round_news_title_1[1] . $round_news_abs_1[1] . $round_news_press_3[1];?></div>
		<div id="news_oldone_2"><?php echo $round_news_title_2[1] . $round_news_abs_2[1] . $round_news_press_3[1];?></div>
		<div id="news_oldone_3"><?php echo $round_news_title_3[1] . $round_news_abs_3[1] . $round_news_press_3[1];?></div>
		</div>
		</div>
		</li>
		<li id="candidate_2" class="span4" style="">
		<div class="thumbnail">
		<div class="blockDtl">
		<div class="individual2" onclick="choose('newone')"><img id="image_newone" class="person_img" src="<?php echo $round_img[2];?>" alt=""></div>
		<h4 id="name_newone"><?php echo $round_list[2];?></h4>
		<h5 id="brief_newone"><?php echo $round_brief[2];?></h5>
		<div id="news_newone_1"><?php echo $round_news_title_1[2] . $round_news_abs_1[2] . $round_news_press_1[2];?></div>
		<div id="news_newone_2"><?php echo $round_news_title_2[2] . $round_news_abs_2[2] . $round_news_press_2[2];?></div>
		<div id="news_newone_3"><?php echo $round_news_title_3[2] . $round_news_abs_3[2] . $round_news_press_3[2];?></div>
		</div>
		</div>
		</li>
			
	</ul>
   
    
	</div>
	
	<div id="ranking" style="width:70%; height:90%; display:none; position:fixed; top:8%; left:17%; z-index:20000">
	<div id="rank" width="95%" height="95%">
		<div><img id="image_winner" class="person_img" src="" alt="" /></div>
		<h4 id="name_winner"></h4>
		<div>
		<img  id="right_one" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:30%; height:30%;" onclick="result(oldcan_order, this.id)"/>
		<img  id="right_two" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:30%; height:30%;" onclick="result(oldcan_order, this.id)"/>
		<img  id="right_three" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:30%; height:30%;" onclick="result(oldcan_order, this.id)"/>
		</div>
	</div>
	</div>
	<div id="background_mask" class="background_mask" style="top:0px; left:0px; width:100%; height:100%; position:fixed; background-color: #D5D1D1; display: none; z-index:19999; opacity:0.6"></div>
	
	

	
	
</div>
</div>
</div>
</div>




<!-- Wrapper end -->



<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src="themes/js/jquery-1.9.1.min.js"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/default.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	$('#myCarousel').carousel({interval:7000});
	});
var candidate=<?php echo $round_list_json;?>;
var candidate_id=<?php echo $round_list_id_json;?>;
var brief=<?php echo $round_brief_json;?>;
var imglink=<?php echo $round_img_json;?>;
var title_1=<?php echo $round_news_title_1_json;?>;
var abs_1=<?php echo $round_news_abs_1_json;?>;
var press_1=<?php echo $round_news_press_1_json;?>;
var title_2=<?php echo $round_news_title_2_json;?>;
var abs_2=<?php echo $round_news_abs_2_json;?>;
var press_2=<?php echo $round_news_press_2_json;?>;
var title_3=<?php echo $round_news_title_3_json;?>;
var abs_3=<?php echo $round_news_abs_3_json;?>;
var press_3=<?php echo $round_news_press_3_json;?>;

var numberclick=0;
var oldcan_order=1;
var newcan_order=2;
var winner_id= new Array();
var loser_id= new Array();
var fight_num=parseInt('<?php echo $round_num;?>')-1;


var rightone_img="<?php echo $rightone_img?>";
var righttwo_img="<?php echo $righttwo_img?>";
var rightthree_img="<?php echo $rightthree_img?>";
if(rightone_img!="") 
	{
	document.getElementById('show_one').src=rightone_img;
	document.getElementById('right_one').src=rightone_img;
	}
if(righttwo_img!="") 
	{
	document.getElementById('show_two').src=righttwo_img;
	document.getElementById('right_two').src=righttwo_img;
	}
	if(rightthree_img!="") 
	{
	document.getElementById('show_three').src=rightthree_img;
	document.getElementById('right_three').src=rightthree_img;
	}
function choose(winner)
			{
			numberclick=numberclick+1;
				switch(winner){
				case 'oldone':
					winner_id[numberclick]=candidate_id[oldcan_order];
					loser_id[numberclick]=candidate_id[newcan_order];
					oldcan_order=oldcan_order;
					var loser='newone';
					break;
				case 'newone':
					winner_id[numberclick]=candidate_id[newcan_order];
					loser_id[numberclick]=candidate_id[oldcan_order];
					oldcan_order=newcan_order;
					var loser='oldone';
					break;				
				}
				newcan_order=newcan_order+1;
				if(numberclick==fight_num) roundresult(winner_id, loser_id, oldcan_order);
				else winnershowup(oldcan_order, newcan_order);
			}
			
function winnershowup(oldone_order, newone_order)
			{
			document.getElementById('name_oldone').innerHTML=candidate[oldone_order];
			document.getElementById('image_oldone').src=imglink[oldone_order];
			document.getElementById('brief_oldone').innerHTML=brief[oldone_order];
			document.getElementById('news_oldone_1').innerHTML=title_1[oldone_order] + abs_1[oldone_order] + press_1[oldone_order];
			document.getElementById('news_oldone_2').innerHTML=title_2[oldone_order] + abs_2[oldone_order] + press_2[oldone_order];
			document.getElementById('news_oldone_3').innerHTML=title_3[oldone_order] + abs_3[oldone_order] + press_3[oldone_order];	
			document.getElementById('name_newone').innerHTML=candidate[newone_order];
			document.getElementById('image_newone').src=imglink[newone_order];
			document.getElementById('brief_newone').innerHTML=brief[newone_order];
			document.getElementById('news_newone_1').innerHTML=title_1[newone_order] + abs_1[newone_order] + press_1[newone_order];
			document.getElementById('news_newone_2').innerHTML=title_2[newone_order] + abs_2[newone_order] + press_2[newone_order];
			document.getElementById('news_newone_3').innerHTML=title_3[newone_order] + abs_3[newone_order] + press_3[newone_order];	
			}
			
function rank_three(winner)
{		
	document.getElementById('image_winner').src=imglink[winner];
	document.getElementById('name_winner').innerHTML=candidate[winner];
	document.getElementById("background_mask").style.display = "block";
	document.getElementById("ranking").style.display = "block";
}

function close_file_preview(clicked_element_id)
{
	document.getElementById("preview_pdf").style.display="none";
	document.getElementById("background_mask").style.display="none";
	user_behavior_log(clicked_element_id, null);
}

function roundresult(winner_id, loser_id, winner)
			{
			rank_three(winner);
			/*var request_url = "save_process.php";
			$.ajax({
				url:request_url,  
				data:{			 //The data to send(will be converted to a query string)
					winner:winner_id,
					loser:loser_id,
				},
				type:"POST",		 //Whether this is a POST or GET request
				dataType: //回傳的資料型態
				//Code to run if the request succeeds. The response is passed to the function
				success:function(str){

				
				},
				async:false,
				//Code to run if the request fails; the raw request and status codes are passed to the function
				error:function(xhr, status, errorThrown){
					//alert("Sorry, there was a problem!");+ str.yahoo[1].press + str.yahoo[1].titile_h
					console.log("Error: " + errorThrown);
					console.log("Status: " + status);
					console.dir( xhr );
				},
				complete:function( xhr, status ){
					//alert("確定要跳出編輯頁面嗎?");
				}
			});*/
			}
	function result(winner, place)
					{
					location="random.php?user_id=1&place=" + place + "&id=" + candidate_id[winner];
					}

</script>










</body>
</html>