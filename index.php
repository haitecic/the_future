<!DOCTYPE html>
<?php

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
<div class="span6"><h1 class="cntr">台灣之光 </h1>
<p></p></div>
<div class="container">	
	
<div class="tabbable tabs">
<div class="tab-content label-primary">

	<div class="tab-pane active" id="all">
	<ul class="thumbnails">
	<?php
	require_once "vote.php";//從資料庫隨機擷取10筆資料
	for($i=1; $i<=$round_num; $i++)
	   {
	   if($i>2) echo '<li id="candidate' . $i . '" class="span4" style="display:none">';
	   else	echo '<li id="candidate' . $i . '" class="span4">';	
	   echo '<div class="vote" Onclick="chosen_one('. "'" .$i . "'" .')"><img src="themes/img/win button.png" alt=""></div>';
	   echo '<div class="thumbnail">';
	   echo '<div class="blockDtl">';
	   echo '<a href="#" class="individual1"><img class="person_img" src="' . $round_list[$i]['img'] . '" alt=""></a>';
	   echo '<h4>' . $round_list[$i]['name'] . '</h4>';
	   echo '<h5>' . $round_list[$i]['position'] . '</h5>';
	   echo  '<p>' . $round_list[$i]['note'] . '</p>';
	   echo '<a class="wiki" href="http://zh.wikipedia.org/zh-tw/' . $round_list[$i]['name'] . '" target="_blank"></a>';
	   echo '<a class="facebook" href="#"></a>';
	   echo '</div>';
	   echo '</div>';
	   echo '</li>';
	   echo '<input type="hidden" id="candidateid' . $i . '" name="id" value="'.$round_list_id[$i].'"></input>';
	   }
	?>

		<input type="hidden" id="vote_count" name="file_count" value="1"></input>
		<input type="hidden" id="candidate_1" name="file_count" value="1"></input>
		<input type="hidden" id="candidate_2" name="file_count" value="2"></input>
			
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
	$('#myCarousel').carousel({
	  interval: 7000
	});
	
	});
	
	function chosen_one(winner)
	{
	var round=Number(document.getElementById('vote_count').value);
	var newone=round+2;
	var candidate_1=Number(document.getElementById('candidate_1').value);
	var candidate_2=Number(document.getElementById('candidate_2').value);
	if(winner==candidate_1) var loser=candidate_2;
	else var loser=candidate_1;
	document.getElementById('candidate_1').value=winner;
	document.getElementById('candidate_2').value=newone;
	document.getElementById('vote_count').value=round+1;
	 if(round<Number('<?php echo $round_num;?>')-1)
		{
		document.getElementById('candidate' + newone).style.display="";
		}
	    document.getElementById('candidate' + loser).style.display="none";
     if(round==Number('<?php echo $round_num;?>')-1) 
		{      
		//alert('candidateid' + winner);
		var winner_id=document.getElementById('candidateid' + winner).value;
		location="finish_round.php?candidate=" + winner_id;
		}
	}
	
	
 
</script>










</body>
</html>