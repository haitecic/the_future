<!DOCTYPE html>
<?php
require_once "random.php";//從資料庫隨機擷取10筆資料
//登入資料載入
$user_id=1;
//讀取使用者資料=>寫入ramdom，使首頁簡潔
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
<link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />	
<link  rel="stylesheet" href="css/screen.css" type="text/css" media="screen" charset="utf-8" />
<!--隱藏表單-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
</head>
<body>
		<!--提名表單-->
		<div id="dialog" title="">

		姓名：<input id="nominate_name" type="text" name="newname" size=20 value="" />
		<button id="validate">
		認證
		</button>																																					
		<div id="wait">
		</div>
	    </div>
	
<div class="container bodydiv">
<div class="row "><h1 class="headertext2 text-center">Who's your idea of the best 總統候選人 <span style="font-size:30px">in 2016</span></h1></div>
<div class="row rowline"></div>
		
		<button id="opener">
		提名
		</button>
		
<div class="mylist">
<h1 class="headertext1">My list:</h1>	
<img  id="show_one" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:100px; height:100px;" />		
<img  id="show_two" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:100px; height:100px;" />		
<img  id="show_three" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:100px; height:100px;" />		
</div>	
<div class="row  ">		
<div class="col-md-5">			
<a href="#" class="individual1">				
<div class="person_div">					
<div class="person_div2">						
<h1 class="person_h1 text-center">WIN</h1>																	
<div  onclick="choose('oldone')"><img id="image_oldone" class="person_img img-responsive center-block" src="<?php echo $round_img[1];?>" alt=""></div>															
</div>									
</div>								
</a>				
<hr class="hrline">				
<h4 id="name_oldone"><?php echo $round_list[1];?></h4>					
<div style="height:200px; overflow:scroll; overflow-x: hidden"><h5 id="brief_oldone"><?php echo $round_brief[1];?></h5></div>					
<div id="news_oldone_1"><?php echo $round_news_title_1[1] . $round_news_abs_1[1] . $round_news_press_3[1];?></div>					
<div id="news_oldone_2"><?php echo $round_news_title_2[1] . $round_news_abs_2[1] . $round_news_press_3[1];?></div>					
<div id="news_oldone_3"><?php echo $round_news_title_3[1] . $round_news_abs_3[1] . $round_news_press_3[1];?></div>                    					
</div>		

<div class="col-md-2">				<h1 class="text-center vsh1">vs</h1>					</div>
<div class=" col-md-5">		
<a href="#" class="vote">												
<a href="#" class="individual2">				
<div class="person_div">				
<div class="person_div2">				
<h1 class="person_h1 text-center">WIN</h1>									
<div class="" onclick="choose('newone')"><img id="image_newone" class="person_img img-responsive center-block" src="<?php echo $round_img[2];?>" alt=""></div>							
</div>				
</div>				
</a>              
<hr class="hrline">		
<h4 id="name_newone"><?php echo $round_list[2];?></h4>		
<h5 id="brief_newone"><?php echo $round_brief[2];?></h5>		
<div id="news_newone_1"><?php echo $round_news_title_1[2] . $round_news_abs_1[2] . $round_news_press_1[2];?></div>		
<div id="news_newone_2"><?php echo $round_news_title_2[2] . $round_news_abs_2[2] . $round_news_press_2[2];?></div>		
<div id="news_newone_3"><?php echo $round_news_title_3[2] . $round_news_abs_3[2] . $round_news_press_3[2];?></div>		
</div>	
</div>
</div>

		

		

	
	
			
	
	
	<div id="ranking" class ="" style="display:none;top:0px;position: absolute;z-index:20000">
	<div id="rank" >
		<div><img id="image_winner" src="" alt="" /></div>
		<h4 id="name_winner"></h4>
		<div>
		<img  id="right_one" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:20%; height:30%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		<img  id="right_two" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:20%; height:30%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		<img  id="right_three" src="http://www.egov.ee/media/1075/male-icon.jpg" alt="" style="width:20%; height:30%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		<img  id="trash" src="http://b.dryicons.com/images/icon_sets/handy_part_2_icons/png/128x128/recycle_bin.png" alt="" style="width:10%; height:10%;" onclick="finish(oldcan_order, this.id, '<?php echo $user_id;?>')"/>
		</div>
	</div>
	</div>
	<div id="background_mask" class="background_mask" style="top:0px; left:0px; width:100%; height:100%; position: absolute; background-color: #D5D1D1; display: none; z-index:19999; opacity:0.6"></div>


<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->		
	<!-- Jquery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>	
	<!-- 隱藏表單 -->
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript">
			$(function() {
				$("#dialog").dialog({
					autoOpen : false,
					show : {
						effect : "blind",
						duration : 500
					},
					hide : {
						effect : "blind",
						duration : 500
					}
				});
				$("#opener").click(function() {
					$("#dialog").dialog("open");
				});
			});
		</script>

<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/default.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	$('#myCarousel').carousel({interval:7000});
	});
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

//提名-wiki認證
$(function(){
		$("#validate").on('click', function(e)  
		{
		e.stopPropagation();
		e.preventDefault();
		var nominate=($("#nominate_name").val());
		var request_url="nominate.php";
		$.ajax({
						url:request_url,  
						data:{			 
							command:'NominatePreview',
							name:nominate,
						},
						type:"POST",
						dataType:"json",
						success:function(str){
						console.log(str);
						if(str.wiki==null) var string ='維基百科查無此人';
						else 
							{
							var string='<form action="nominate.php" method=post>' +
							'<img src="' + str.img + '" alt="" />' +			
							'簡介：<div style="height:200px; overflow:scroll; overflow-x: hidden"><h5>'+
							str.wiki+
							'</h5></div>' +					
							'<div>' + str.news[1].title_h +str.news[1].press +'</div>' +					
							'<div>' + str.news[2].title_h +str.news[2].press + '</div>' +					
							'<div>'  + str.news[3].title_h +str.news[3].press + '</div>' +                    					
							'<div id="validate_submit">這是你想提名的人?<input type=submit  value="確認" /></div>' +
							'<input type="hidden" name="name" value='+ "'" + nominate + "'" + ' />'+
							'<input type="hidden" name="img" value='+ "'" + str.img + "'" + ' />'+
							'<input type="hidden" name="brief" value='+ "'" + str.wiki + "'" + ' />'+
							'<input type="hidden" name="title_1" value='+ "'" + str.news[1].title_h + "'" + ' />'+
							'<input type="hidden" name="abs_1" value='+ "'" + str.news[1].newsabtract + "'" + ' />'+
							'<input type="hidden" name="press_1" value='+ "'" + str.news[1].press + "'" + ' />'+
							'<input type="hidden" name="title_2" value='+ "'" + str.news[2].title_h + "'" + ' />'+
							'<input type="hidden" name="abs_2" value='+ "'" + str.news[2].newsabtract + "'" + ' />'+
							'<input type="hidden" name="press_2" value='+ "'" + str.news[2].press + "'" + ' />'+
							'<input type="hidden" name="title_3" value='+ "'" + str.news[3].title_h + "'" + ' />'+
							'<input type="hidden" name="abs_3" value='+ "'" + str.news[3].newsabtract + "'" + ' />'+
							'<input type="hidden" name="press_3" value='+ "'" + str.news[3].press + "'" + ' />'+
							'<input type="hidden" name="user" value="'+ user_id +'" />'+
							'<input type="hidden" name="command" value="NominateInsert" />'+
							'</form>';
							}
						$("#wait").html(string);
						},
						error:function(xhr, status, errorThrown){
							//alert("Sorry, there was a problem!");
							console.log("Error: " + errorThrown);
							console.log("Status: " + status);
							console.dir( xhr );
						},
						complete:function( xhr, status ){
						}
						});
		$("#wait").html("認證中...");				
		}); 		
		});
						

//呈現三大王牌
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
	

//點擊
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
				if(numberclick==fight_num) rank_three(oldcan_order, winner_id, loser_id, '<?php echo $user_id;?>');
				else winnershowup(oldcan_order, newcan_order);
			}

//每一點擊後更新候選人			
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

//一輪完玩，顯示結果
function rank_three(winner, winners, losers, userid)
{		
				    //存入對戰紀錄
					var request_url = "save.php";					
					$.ajax({
						url:request_url,  
						data:{			 
							winner_array:JSON.stringify(winners),
							loser_array:JSON.stringify(losers),
							user:userid
						},
						type:"POST",	
						dataType:"text",
						success:function(str){
						var result = str;
						},
						async:false,
						error:function(xhr, status, errorThrown){
							console.log("Error: " + errorThrown);
							console.log("Status: " + status);
							console.dir( xhr );
						},
						complete:function( xhr, status ){
						}
						});
						
					if(result=='overlap') location="vote_index.php";
					else
					{
					//讓使用者決定是否要替換心目中的三大王牌
					document.getElementById('image_winner').src=imglink[winner];
					document.getElementById('name_winner').innerHTML=candidate[winner];
					document.getElementById("background_mask").style.display = "block";
					document.getElementById("ranking").style.display = "block";						
					}				
	
}


	function finish(winner, place, user_id)
					{
					if(place=='trash') location="";
					else location="save.php?winnerone=" +　candidate_id[winner] + "&position=" + place + "&user=" + user_id;
					}

</script>










</body>
</html>