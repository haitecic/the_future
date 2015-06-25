<!DOCTYPE html>
<?php
require_once "random.php";//從資料庫隨機擷取10筆資料
$user_id=1;
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
<html>
<head>    
<meta charset="utf-8">    
<title>The future</title>	

<link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" /><!--隱藏表單與此項目衝突-->
<link  rel="stylesheet" href="css/screen.css" type="text/css" media="screen" charset="utf-8" />
<link  rel="stylesheet" href="css/fight.css" type="text/css" media="screen" charset="utf-8" />
<link  rel="stylesheet" href="css/animate.css" type="text/css" media="screen" charset="utf-8" />

<!--隱藏表單-->
<link  rel="stylesheet" href="master/dist/semantic.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body style="display:none">
<div class="container bodydiv">
<div class="row "><h1 class="headertext2 text-center">Who's your idea of the best <span style="font-size:30px">in 2016</span></h1></div>
<div class="row rowline"></div>
		

<div id="candidate_1" class="left col-md-5">			
<div id="image_1"><img class="person_img img-responsive center-block" src="<?php echo $round_img[1];?>" alt=""></div>
<hr class="hrline">				
<div id="name_1"><?php echo $round_list[1];?></div>					
<div id="brief_1" style="height:107px; overflow:hidden;"><?php echo $round_brief[1];?></div>
<a id="wikilink_1" href="https://zh.wikipedia.org/wiki/<?php echo $round_list[1];?>" target="_blank">維基百科</a>					
<div id="news_1_1"><?php echo $round_news_title_1[1] . $round_news_abs_1[1] . $round_news_press_3[1];?></div>					
<div id="news_1_2"><?php echo $round_news_title_2[1] . $round_news_abs_2[1] . $round_news_press_3[1];?></div>					
<div id="news_1_3"><?php echo $round_news_title_3[1] . $round_news_abs_3[1] . $round_news_press_3[1];?></div>                    					
</div>		
<!--
<div class="col-md-2">
<h1 class="text-center vsh1">vs</h1>
</div>
-->
<div id="candidate_2" class="right col-md-5">		
<div id="image_2"><img class="person_img img-responsive center-block" src="<?php echo $round_img[2];?>" alt=""></div>							
<hr class="hrline">		
<div id="name_2"><?php echo $round_list[2];?></div>		
<div id="brief_2" style="height:107px; overflow:hidden;"><?php echo $round_brief[2];?></div>
<a id="wikilink_2" href="https://zh.wikipedia.org/wiki/<?php echo $round_list[2];?>" target="_blank">維基百科</a>			
<div id="news_2_1"><?php echo $round_news_title_1[2] . $round_news_abs_1[2] . $round_news_press_1[2];?></div>		
<div id="news_2_2"><?php echo $round_news_title_2[2] . $round_news_abs_2[2] . $round_news_press_2[2];?></div>		
<div id="news_2_3"><?php echo $round_news_title_3[2] . $round_news_abs_3[2] . $round_news_press_3[2];?></div>		
</div>
<?php for($j=3; $j<=$round_num; $j++)
		{
		?>
<div id="candidate_<?php echo $j?>" class="readytofight col-md-5">		
<div id="image_<?php echo $j?>"><img class="person_img img-responsive center-block" src="<?php echo $round_img[$j];?>" alt=""></div>							
<hr class="hrline">
<div><?php echo $round_list[$j];?></div>		
<div style="height:107px; overflow:hidden;"><?php echo $round_brief[$j];?></div>
<a href="https://zh.wikipedia.org/wiki/<?php echo $round_list[$j];?>" target="_blank">維基百科</a>
<div><?php echo $round_news_title_1[$j] . $round_news_abs_1[$j] . $round_news_press_1[$j];?></div>		
<div><?php echo $round_news_title_2[$j] . $round_news_abs_2[$j] . $round_news_press_2[$j];?></div>		
<div><?php echo $round_news_title_3[$j] . $round_news_abs_3[$j] . $round_news_press_3[$j];?></div>		
</div>	
<?php 	}?>
		<div class="myboxcandidate">
			<div id="mybox_card" class="shadow">
				  <div class="front face">
					<div id="candidate1"></div>
					</div>
					<div class="back face center">
					<div id="winnerthisround"></div>
					</div>
			</div>
		</div>
</div>


<div class="ui modal">
<i class="close icon"></i>
		<div class="header">
		xxxxx
		</div>
		<div class="content">
		<img  id="favorite_one" src="http://www.egov.ee/media/1075/male-icon.jpg" style="width:20%; height:30%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		<img  id="favorite_two" src="http://www.egov.ee/media/1075/male-icon.jpg"  style="width:20%; height:30%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		<img  id="favorite_three" src="http://www.egov.ee/media/1075/male-icon.jpg" style="width:20%; height:30%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		<div class="actions">
		<div id="share" class="ui button">分享到facebook</div>
		<div id="playagain" class="ui button">再玩一次</div>
		</div>	
		</div>	
</div>

<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->		
	<!-- Jquery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<!-- 隱藏表單 -->
		<script type="text/javascript" src="master/dist/semantic.js"></script>
<script>
	/*	
	//fb
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1109820955698868',
          xfbml      : true,
          version    : 'v2.3'
        });
      	function checkLoginState(){	
		  FB.getLoginStatus(function(response) {
		if (response.status === 'connected' && !response.error) {
			var uid = response.authResponse.userID;
			
			$("body").css("display", "block");
			
		} else if (response.status === 'not_authorized' && !response.error) {
		location="login.html";
		} else if (!response.error) {
		location="login.html";
		}
		else{
		console.log(response.error);
		alert("fb 無法連線");
		}
		});
		}
		checkLoginState();		
	  };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));*/
	   
$("body").css("display", "block");
    </script>


<script type="text/javascript">
//載入基本資料
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
var user_id=<?php echo $user_id;?>;

var numberclick=0;
var oldcan_order=1;
var newcan_order=2;
var winner_id= new Array();
var loser_id= new Array();
var fight_num=parseInt('<?php echo $round_num;?>')-1;

var rightone_img="<?php echo $rightone_img?>";
var righttwo_img="<?php echo $righttwo_img?>";
var rightthree_img="<?php echo $rightthree_img?>";

if(rightone_img!=""){
	$('#favorite_one').attr('src', rightone_img);
	}
if(righttwo_img!=""){
	$('#favorite_two').attr('src', righttwo_img);
	}
	if(rightthree_img!=""){
	$('#favorite_three').attr('src', rightthree_img);
	}

//觸發事件的function	
$(function(){
		
		//onmouseover
		$("#image_left").on('mouseover', function(){
		mouseoverimage('left');
		});
		$("#image_right").on('mouseover', function(){
		mouseoverimage('right');
		});
		
		//fight點擊
		$("#image_1").on('click', function(){
		choose(this.id);
		});
		$("#image_2").on('click', function(){
		choose(this.id);
		});
		
		
});
		

	

function mouseoverimage(position){
	switch(position){
		case 'left':
			$("#image_left").addClass("animated bounce");
			$("#image_right").removeClass("animated bounce");
			break;
		case 'right':
			$("#image_right").addClass("animated bounce");
			$("#image_left").removeClass("animated bounce");
			break;
	}
}	

	

function choose(winner){
		numberclick=numberclick+1;
		var leftside='left';//左側戰鬥者類別
		var rightside='right';//右側戰鬥者類別
		var left_order=$("." + leftside).attr('id').substr(10, 2);
		var right_order=$("." + rightside).attr('id').substr(10, 2);
		var winner_order=winner.substr(6, 2);
		if(winner_order==left_order){
			var loser_order=right_order;
			var loser_position=rightside;
			}
		else{
			var loser_order=left_order;
			var loser_position=leftside;
			}
		//點擊功能暫時失效
		$("#image_" + left_order).unbind('click');
		$("#image_" + right_order).unbind('click');
		//將對戰紀錄存入winner_id、loser_id
		winner_id[numberclick]=candidate_id[winner_order];
		loser_id[numberclick]=candidate_id[loser_order];
		
		//當對戰沒結束，呈現新的候選人
		if(numberclick<fight_num){
			newcan_order=newcan_order+1;
			var animationend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			var outanimation='animated zoomOut';//出去的效果類別
			var inanimation='animated zoomIn';//進來的效果類別
			var nonfighter='readytofight';//非參與者類別
			//淘汰
			$("#candidate_" + loser_order).addClass(outanimation).one(animationend, function(){
				$(this).removeClass(outanimation+ ' ' + loser_position);
				$(this).addClass(nonfighter);
				//更新
				$("#candidate_" + newcan_order).removeClass(nonfighter);
				$("#candidate_" + newcan_order).addClass(inanimation+ ' ' +　loser_position).one(animationend, function(){
				$(this).removeClass(inanimation);
				
				//將click功能加上去
				$("#image_" + winner_order).on('click', function(){choose(this.id);});
				$("#image_" + newcan_order).on('click', function(){choose(this.id);});
				});
			});
		}
		//當對戰結束時
		else{
		//存入對戰紀錄
		var request_url = "save.php";
		var mylist="";					
		$.ajax({
			url:request_url,  
			data:{			 
				winner_array:JSON.stringify(winner_id),
				loser_array:JSON.stringify(loser_id),
				user:user_id
			},
			type:"POST",	
			dataType:"text",
			success:function(str){
			$('.ui.modal').modal('show');
			},
			async:true,
			error:function(xhr, status, errorThrown){
				console.log("Error: " + errorThrown);
				console.log("Status: " + status);
				console.dir( xhr );
			},
			complete:function( xhr, status ){
			}
			});
		}
}



function finish(winner, place, user_id){
		if(place=='trash') location="";
		else location="save.php?winnerone=" +　candidate_id[winner] + "&position=" + place + "&user=" + user_id;
		}

</script>










</body>
</html>