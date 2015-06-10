<!DOCTYPE html>
<?php
require_once "random.php";//從資料庫隨機擷取10筆資料
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
        <li id="candidate_1" class="span4" >
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
		<li id="candidate_2" class="span4" >
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
var brief=<?php echo $round_brief;?>;
var imglink=<?php echo $round_img;?>;
var title_1=<?php echo $round_news_title_1;?>;
var abs_1=<?php echo $round_news_abs_1;?>;
var press_1=<?php echo $round_news_press_1;?>;
var title_2=<?php echo $round_news_title_2;?>;
var abs_2=<?php echo $round_news_abs_2;?>;
var press_2=<?php echo $round_news_press_2;?>;
var title_3=<?php echo $round_news_title_3;?>;
var abs_3=<?php echo $round_news_abs_3;?>;
var press_3=<?php echo $round_news_press_3;?>;

var numberclick=0;
var oldcan_order=1;
var newcan_order=2;
var winner_id= new Array();
var loser_id= new Array();
var fight_num=parseInt('<?php echo $round_num;?>')-1;
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
				if(numberclick==fight_num) roundresult(winner_id, loser_id);
				else winnershowup(oldcan_order, newcan_order);
			}
			
function winnershowup(oldone_order, newone_order)
			{
			document.getElementById('name_oldone').innerHTML=candidate[oldone_order];
			document.getElementById('name_newone').innerHTML=candidate[newone_order];
			//document.getElementById('image_newone').src=str.imglink;
			//document.getElementById('brief_newone').innerHTML=str.maintxt;
			//document.getElementById('news_newone_1').innerHTML=str.yahoo[1].titile_h + str.yahoo[1].newsabtract + str.yahoo[1].press;
			//document.getElementById('news_newone_2').innerHTML=str.yahoo[2].titile_h + str.yahoo[2].newsabtract + str.yahoo[2].press;
			//document.getElementById('news_newone_3').innerHTML=str.yahoo[3].titile_h + str.yahoo[3].newsabtract + str.yahoo[3].press;	
			}

function roundresult(winner_id, loser_id)
			{
			var request_url = "finish_round.php";
			$.ajax({
				url:request_url,  
				data:{			 //The data to send(will be converted to a query string)
					winner:winner_id,
					loser:loser_id,
				},
				type:"POST",		 //Whether this is a POST or GET request
				dataType:"text", //回傳的資料型態
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
			});
			}

</script>










</body>
</html>