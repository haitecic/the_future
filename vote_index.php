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
<div class="span6"><h1 class="cntr"></h1>
<p></p></div>
<div class="container">	
	
<div class="tabbable tabs">
<div class="tab-content label-primary">

	<div class="tab-pane active" id="all">
	<ul class="thumbnails">
        <li id="candidate_1" class="span4" >
		<div class="thumbnail">
		<div class="blockDtl">
		<div class="individual1" onclick="choose()"><img class="person_img" src="" alt=""></div>
		<h4 id="name_1"><?php echo $round_list[$i]; ?></h4>
		<h5 id="brief_1"></h5>
		<p></p>
		</div>
		</div>
		</li>
		<li id="candidate_2" class="span4" >
		<div class="thumbnail">
		<div class="blockDtl">
		<div class="individual2" onclick="choose()"><img id='image_2' class="person_img" src="" alt=""></div>
		<h4 id="name_2"><?php echo $round_list[$i]; ?></h4>
		<h5 id="brief_2"></h5>
		<p id="news_2_1">123</p>
		<p id="news_2_2">123</p>
		<p id="news_2_3">123</p>
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
var numberclick=1;

function choose()
			{
			numberclick=numberclick+1;
			var request_url = "wiki_yahoonews.php";
			$.ajax({
				url:request_url,  
				data:{			 //The data to send(will be converted to a query string)
					keyword:candidate[numberclick+1]
				},
				type:"POST",		 //Whether this is a POST or GET request
				dataType:"json", //回傳的資料型態
				//Code to run if the request succeeds. The response is passed to the function
				success:function(str){
				document.getElementById('name_2').innerHTML=candidate[numberclick+1];
				document.getElementById('image_2').src=str.imglink;
				document.getElementById('brief_2').innerHTML=str.maintxt;
				document.getElementById('news_2_1').innerHTML=str.yahoo[1].titile_h + str.yahoo[1].newsabtract + str.yahoo[1].press;
				document.getElementById('news_2_2').innerHTML=str.yahoo[2].titile_h + str.yahoo[2].newsabtract + str.yahoo[2].press;
				document.getElementById('news_2_3').innerHTML=str.yahoo[3].titile_h + str.yahoo[3].newsabtract + str.yahoo[3].press;				
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