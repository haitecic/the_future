<!DOCTYPE html>
<?php
require_once "random.php";//從資料庫隨機擷取10筆資料
?>
<html>
<head>    
<meta charset="utf-8">    
<title>2016超級總統生死鬥</title>	
<link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
<link  rel="stylesheet" href="css/animate.css" type="text/css" media="screen" charset="utf-8" />
<link  rel="stylesheet" href="alertifyjs/css/alertify.css" type="text/css" media="screen" charset="utf-8" />
<link  rel="stylesheet" href="css/voteindex.css" type="text/css" media="screen" charset="utf-8" />
</head>

<body style="display:none">
		<div class="row "><h1 class="headertext2 text-center">2016超級總統生死鬥</h1></div>
		<div class="row rowline"></div>	
		
	<div id="personality_option" class="container">
	  <div><h2>你認為好的總統應該具備什麼特質？</h2></div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="王室血統"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>王室血統</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="一表人才"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>一表人才</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="清廉"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>清廉</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="學富五車有內涵"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>學富五車有內涵</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="不容易流淚"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>不容易流淚</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="體恤民意"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>體恤民意</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="兩岸政策"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>兩岸政策</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="台灣主體性"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>台灣主體性</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="勤勞踏實"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>勤勞踏實</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="未來擘畫"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>未來擘畫</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="領導魅力"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>領導魅力</div>
		</div>
		<div>
			<label class="listcheckbox">
				<input type="checkbox" name="personality" value="協調能力"/>
				<div id="" class="checkArea"></div>
			</label>
			<div>協調能力</div>
		</div>
		<button id="confirmPersonality" type="button" class="btn btn-default">確認</button>
	</div>
	
	<div id="nominateProperOne" class="container" style="display:none">
		<div id="opinionN"></div>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">有，提名</button>
		<button id="goToPlay" type="button" class="btn btn-default">沒有，開始PK</button>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">我心目中的秘密人選</h4>
				</div>
				<div class="modal-body">
					<span>姓名：</span>
					<input id="nominate_name" type="text" name="newname" size=20 value="" />
					<div id="validate" type="button" class="btn btn-default">認證</div>
					<span id="wait"></span>
					
					<div id="nominate_img"></div>
					<div id="nominatetext"></div>
				</div>
				<div class="modal-footer">
					<div id="nominateAction" style="display:none">
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					<button id="submitNominate" type="button" class="btn btn-default" data-dismiss="modal">確認</button>
					</div>
				</div>
			</div>
		  </div>
	    </div>
	</div>



	<div id="game" class="container" style="display:none">
		<div id="candidate_1" class="left col-md-5" value="1">			
			<a id="image_1" href="#"  value="1"><img class="person_img img-responsive center-block" src="<?php echo $round_img[1];?>" alt=""></a>
			<hr class="hrline">				
			<div><?php echo $round_list[1];?></div>					
			<div style="height:107px; overflow:hidden;"><?php echo $round_brief[1];?></div>
			<a href="https://zh.wikipedia.org/wiki/<?php echo $round_list[1];?>" target="_blank">維基百科</a>					
			<div>
				<div><a href="<?php echo $round_news_link_1[1];?>" target="_blank"><?php echo $round_news_title_1[1];?></a></div>
				<div><?php echo $round_news_abs_1[1];?></div>
				<div><?php echo $round_news_press_1[1];?></div>
			</div>					
			<div>
				<div><a href="<?php echo $round_news_link_2[1];?>" target="_blank"><?php echo $round_news_title_2[1];?></a></div>
				<div><?php echo $round_news_abs_2[1];?></div>
				<div><?php echo $round_news_press_2[1];?></div>
			</div>					
			<div>
				<div><a href="<?php echo $round_news_link_3[1];?>" target="_blank"><?php echo $round_news_title_3[1];?></a></div>
				<div><?php echo $round_news_abs_3[1];?></div>
				<div><?php echo $round_news_press_3[1];?></div>
			</div>                    					
		</div>		
		<!--
		<div class="col-md-2">
		<h1 class="text-center vsh1">vs</h1>
		</div>
		-->
		<div id="candidate_2" class="right col-md-5" value="2">		
			<a id="image_2" href="#" value="2"><img class="person_img img-responsive center-block" src="<?php echo $round_img[2];?>" alt=""></a>
			<hr class="hrline">		
			<div><?php echo $round_list[2];?></div>		
			<div style="height:107px; overflow:hidden;"><?php echo $round_brief[2];?></div>
			<a href="https://zh.wikipedia.org/wiki/<?php echo $round_list[2];?>" target="_blank">維基百科</a>			
			<div>
				<div><a href="<?php echo $round_news_link_1[2];?>" target="_blank"><?php echo $round_news_title_1[2];?></a></div>
				<div><?php echo $round_news_abs_1[2];?></div>
				<div><?php echo $round_news_press_1[2];?></div>
			</div>					
			<div>
				<div><a href="<?php echo $round_news_link_2[2];?>" target="_blank"><?php echo $round_news_title_2[2];?></a></div>
				<div><?php echo $round_news_abs_2[2];?></div>
				<div><?php echo $round_news_press_2[2];?></div>
			</div>					
			<div>
				<div><a href="<?php echo $round_news_link_3[2];?>" target="_blank"><?php echo $round_news_title_3[2];?></a></div>
				<div><?php echo $round_news_abs_3[2];?></div>
				<div><?php echo $round_news_press_3[2];?></div>
			</div>  
		</div>
		
		<!--問號-->
		<div id="question_mark" class="readytofight col-md-5">
			<img class="question_mark img-responsive center-block" src="img/question_mark.jpg" />	
		</div>
		
		<?php for($j=3; $j<=$round_num; $j++)
				{
				?>
		<div id="candidate_<?php echo $j?>" class="readytofight col-md-5" value="<?php echo $j?>">		
			<a id="image_<?php echo $j?>" href="#" value="<?php echo $j?>"><img class="person_img img-responsive center-block" src="<?php echo $round_img[$j];?>" alt=""></a>							
			<hr class="hrline">
			<div><?php echo $round_list[$j];?></div>		
			<div style="height:107px; overflow:hidden;"><?php echo $round_brief[$j];?></div>
			<a href="https://zh.wikipedia.org/wiki/<?php echo $round_list[$j];?>" target="_blank">維基百科</a>
			<div>
				<div><a href="<?php echo $round_news_link_1[$j];?>" target="_blank"><?php echo $round_news_title_1[$j];?></a></div>
				<div><?php echo $round_news_abs_1[$j];?></div>
				<div><?php echo $round_news_press_1[$j];?></div>
			</div>					
			<div>
				<div><a href="<?php echo $round_news_link_2[$j];?>" target="_blank"><?php echo $round_news_title_2[$j];?></a></div>
				<div><?php echo $round_news_abs_2[$j];?></div>
				<div><?php echo $round_news_press_2[$j];?></div>
			</div>					
			<div>
				<div><a href="<?php echo $round_news_link_3[$j];?>" target="_blank"><?php echo $round_news_title_3[$j];?></a></div>
				<div><?php echo $round_news_abs_3[$j];?></div>
				<div><?php echo $round_news_press_3[$j];?></div>
			</div>  			
		</div>	
		<?php 	}?>
	</div>
	
	<div id="roundResult" class="container" style="display:none">
		<div id="opinion"></div>
		<div>我的選擇是：</div>
		<img id="imgResult" src=""/>
		<div id="nameResult"></div>
		<button id="shareResult" type="button" class="btn btn-default">分享此次結果到facebook</button>
		<button id="" type="button" class="btn btn-default">看看還有哪些勝出的候選人，接著投票去</button>
		<button id="" type="button" class="btn btn-default">再PK一次</button>
	</div>


<!--
<i class="close icon"></i>
		<div class="header">
		xxxxx
		</div>
		<div class="content">
		<img  id="favorite_one" src="http://www.egov.ee/media/1075/male-icon.jpg" style="width:100px; height:100px;" value='1'/>
		<img  id="favorite_two" src="http://www.egov.ee/media/1075/male-icon.jpg" style="width:100px; height:100px;" value='2'/>
		<img  id="favorite_three" src="http://www.egov.ee/media/1075/male-icon.jpg" style="width:100px; height:100px;" value='3'/>
		<div class="actions">
		<div id="shareonce" class="ui button">分享這次結果到facebook</div>
		<div id="sharegame" class="ui button">分享遊戲到facebook</div>
		<div id="playagain" class="ui button">再玩一次</div>
		</div>	
		</div>-->	


<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="alertifyjs/alertify.js"></script>
<script type="text/javascript">
//載入基本資料
var candidate=<?php echo $round_list_json;?>;
var candidate_id=<?php echo $round_list_id_json;?>;
//以下似乎可以刪除
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
//fb
window.fbAsyncInit = function() {
    FB.init({
          appId      : '1109820955698868',
          xfbml      : true,
          version    : 'v2.3'
    });
	FB.getLoginStatus(function(response) {
		if (response.status === 'connected' && !response.error) {
			var uid = response.authResponse.userID;
			var request_url="checkloginsession.php";
			$.ajax({
				url:request_url,  
				data:{
					fb_id:uid
				},
				type:"POST",	
				dataType:"text",
				success:function(str){
					$("body").css("display", "block");
				},
				async:false,
				error:function(){},
				beforeSend:function(){},
				complete:function(){
					
				}
			});
			
			
		} else if (response.status === 'not_authorized' && !response.error) {
			var request_url="logout.php";
			$.ajax({
				url:request_url,	
				dataType:"text",
				success:function(str){
					location="login.html";
				},
				async:false,
				error:function(){},
				beforeSend:function(){},
				complete:function(){}
			});
		} 
		else{
			var request_url="logout.php";
			$.ajax({
				url:request_url,	
				dataType:"text",
				success:function(str){
					location="login.html";
				},
				async:false,
				error:function(){},
				beforeSend:function(){},
				complete:function(){}
			});
		}
	});	
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
	   
//$("body").css("display", "block");


//觸發事件的function	
$(function(){
		
		/*onmouseover
		$("#image_left").on('mouseover', function(){
		mouseoverimage('left');
		});
		$("#image_right").on('mouseover', function(){
		mouseoverimage('right');
		});*/
		
		$("#confirmPersonality").on('click', function(){
			finishPersonality();
			var animationend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			$("#personality_option").addClass('animated zoomOut').one(animationend, function(){
				$(this).css("display", "none");
				$(this).removeClass('animated zoomOut');
				$("#nominateProperOne").css("display", "block");
				$("#nominateProperOne").addClass('animated zoomIn').one(animationend, function(){
					$(this).removeClass('animated zoomIn');
				});
			});
		});
		
		
		$("#validate").on('click', function(){
			nominateproperman();
		});
		
		$("#shareResult").on('click', function(){
			location="realtimelist.html";
		})
		
		$("#goToPlay").on('click', function(){
			var animationend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			$("#nominateProperOne").addClass('animated zoomOut').one(animationend, function(){
			console.log("insert2");
				$(this).css("display", "none");
				$(this).removeClass('animated zoomOut');
				$("#game").css("display", "block");
				$("#game").addClass('animated zoomIn').one(animationend, function(){
					$(this).removeClass('animated zoomIn');
				});
			});	
		})
		
		//fight點擊
		$("#image_1").on('click', function(){
		choose($(this).attr('value'));
		});
		$("#image_2").on('click', function(){
		choose($(this).attr('value'));
		});
		$("#playagain").on('click', function(){
		location="vote_index.php";
		});
});
		

	
/*
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
}*/	
function nominateproperman(){
		$("#nominate_img").empty();
		$("#nominatetext").empty();
		//$("input").remove("#nominatedata > input");
		$("#wait").html("認證中...");
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
			//console.log(str);
			//if(str.wiki=='used') var string ='此人已經在候選人名單';
			if(str.wiki==null) var string ='維基百科查無此人，為了資料的客觀性，必須提名維基百科有記載的人選';
			else{
				var string='<div>簡介：</div>'+
				'<div>' + str.wiki + '</div>';
				/*var formdata='<input type="hidden" name="name" value='+ "'" + nominate + "'" + ' />'+
				'<input type="hidden" name="img" value='+ "'" + str.img + "'" + ' />'+
				'<input type="hidden" name="brief" value='+ "'" + str.wiki + "'" + ' />'+
				'<input type="hidden" name="title_1" value='+ "'" + str.news[1].title + "'" + ' />'+
				'<input type="hidden" name="link_1" value='+ "'" + str.news[1].link + "'" + ' />'+
				'<input type="hidden" name="abs_1" value='+ "'" + str.news[1].newsabtract + "'" + ' />'+
				'<input type="hidden" name="press_1" value='+ "'" + str.news[1].press + "'" + ' />'+
				'<input type="hidden" name="title_2" value='+ "'" + str.news[2].title + "'" + ' />'+
				'<input type="hidden" name="link_2" value='+ "'" + str.news[2].link + "'" + ' />'+
				'<input type="hidden" name="abs_2" value='+ "'" + str.news[2].newsabtract + "'" + ' />'+
				'<input type="hidden" name="press_2" value='+ "'" + str.news[2].press + "'" + ' />'+
				'<input type="hidden" name="title_3" value='+ "'" + str.news[3].title + "'" + ' />'+
				'<input type="hidden" name="link_3" value='+ "'" + str.news[3].link + "'" + ' />'+
				'<input type="hidden" name="abs_3" value='+ "'" + str.news[3].newsabtract + "'" + ' />'+
				'<input type="hidden" name="press_3" value='+ "'" + str.news[3].press + "'" + ' />'+
				'<input type="hidden" name="command" value="NominateInsert" />';*/
				var person_img='<img src="' + str.img + '" alt="" />';
				$("#nominate_img").html(person_img);
				//$("#nominatedata").append(formdata);
				$("#submitNominate").on('click', function(){
					submitProperMan(str, nominate);
				});
				$("#nominateAction").css("display", "block");
				//$("#confirmnominate").addClass("ui button");
				//$("#confirmnominate").text("確認");
				//console.log(string + formdata + person_img);
			}
			$("#wait").empty();
			$("#nominatetext").html(string);
				//$('.ui.modal').modal('show');
			},
			error:function(){},
			complete:function(){
			}
		});	
} 

function submitProperMan(jsondata, man){
			var URLs="nominate.php";
            $.ajax({
                url: URLs,
                data: {
				command:'NominateInsert',
				name:man,
				img:jsondata.img,
				brief:jsondata.wiki,
				title_1:jsondata.news[1].title,
				link_1:jsondata.news[1].link,
				abs_1:jsondata.news[1].newsabtract,
				press_1:jsondata.news[1].press,
				title_2:jsondata.news[2].title,
				link_2:jsondata.news[2].link,
				abs_2:jsondata.news[2].newsabtract,
				press_2:jsondata.news[2].press,
				title_3:jsondata.news[3].title,
				link_3:jsondata.news[3].link,
				abs_3:jsondata.news[3].newsabtract,
				press_3:jsondata.news[3].press,				
				},
                type:"POST",
                dataType:'text',
                success: function(str){
						var animationend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
						$("#nominateProperOne").addClass('animated zoomOut').one(animationend, function(){
						console.log("insert2");
							$(this).css("display", "none");
							$(this).removeClass('animated zoomOut');
							$("#game").css("display", "block");
							$("#game").addClass('animated zoomIn').one(animationend, function(){
								$(this).removeClass('animated zoomIn');
							});
						});
						alertify.warning('已經提名成功!!');
				},
                beforeSend:function(){},
                complete:function(){

                },
                error:function(){}
            });

}
	

function choose(winner){
		numberclick=numberclick+1;
		var leftside='left';//左側戰鬥者類別
		var rightside='right';//右側戰鬥者類別
		//var left_order=$("." + leftside).attr('id').substr(10, 2);
		//var right_order=$("." + rightside).attr('id').substr(10, 2);
		//var winner_order=winner.substr(6, 2);
		var left_order=$("." + leftside).attr('value');
		var right_order=$("." + rightside).attr('value');
		var winner_order=winner;
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
			var inanimation='animated bounceIn';//進來的效果類別
			var nonfighter='readytofight';//非參與者類別
			//淘汰
			$("#candidate_" + loser_order).addClass(outanimation).one(animationend, function(){
				$(this).removeClass(outanimation+ ' ' + loser_position);
				$(this).addClass(nonfighter);
				//問號出現
				$('#question_mark').removeClass(nonfighter);
				$('#question_mark').addClass('animated flip'+ ' ' +　loser_position).one(animationend, function(){
				$(this).removeClass(outanimation+ ' ' + loser_position);
				$(this).addClass(nonfighter);
				
					//更新
					$("#candidate_" + newcan_order).removeClass(nonfighter);
					$("#candidate_" + newcan_order).addClass(inanimation+ ' ' +　loser_position).one(animationend, function(){
					$(this).removeClass(inanimation);
					
					//將click功能加上去
					$("#image_" + winner_order).on('click', function(){choose($(this).attr('value'));});
					$("#image_" + newcan_order).on('click', function(){choose($(this).attr('value'));});
					});
				});
			});
		}
		//當對戰結束時
		else{
		//存入對戰紀錄，並顯示投票箱及分享框
		//var finalwinnerid=winner_id[fight_num];
		var request_url = "savefight.php";				
		$.ajax({
			url:request_url,  
			data:{
				winner_array:JSON.stringify(winner_id),
				loser_array:JSON.stringify(loser_id),
			},
			type:"POST",	
			dataType:"text",
			success:function(str){
				if(str=='login') finishGame(winner_order);
				else {
				alertify.error('閒置時間過久，重新驗證中...');
				location="vote_index.php";
				}
			},
			async:true,
			error:function(){},
			complete:function(){}
			});
		}
}

function finishPersonality(){
	var opinion=collectPersonality();
	opinion = opinion + "，有沒有要提名心目中的秘密人選?";
	$("#opinionN").html(opinion);
	
}

function collectPersonality(){
	var myopinion=[];
	for(var t=0; t<$(".listcheckbox > input").length; t++){
		var listcanobj=$($(".listcheckbox > input").get(t));
		if(listcanobj.prop("checked")){
			myopinion.push(listcanobj.attr('value'));
		}
	}
	if(myopinion.length!=0){
		var opinionString= myopinion[0];
		for(var t=1; t<myopinion.length; t++){
			opinionString= opinionString + '、' + myopinion[t];
		}
		opinionString="我認為成為一個好的總統候選人應該具備「" + opinionString + "」的特質";
	}
	else{
		opinionString="";
	}
	return opinionString; 
}

function finishGame(roundwinner){
	var animationend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	var name=candidate[roundwinner];
	var img=imglink[roundwinner];
	//console.log(name);
	//console.log(img);
	$("#imgResult").attr("src", img);
	$("#nameResult").html(name);
	var myopinion=[];
	for(var t=0; t<$(".listcheckbox > input").length; t++){
		var listcanobj=$($(".listcheckbox > input").get(t));
		if(listcanobj.prop("checked")){
			myopinion.push(listcanobj.attr('value'));
		}
	}
	if(myopinion.length!=0){
		var opinionString= myopinion[0];
		for(var t=1; t<myopinion.length; t++){
			opinionString= opinionString + '、' + myopinion[t];
		}
		opinionString="我認為成為一個好的總統候選人應該具備「" + opinionString + "」的特質";
	}
	else{
		opinionString="";
	}
	//addListString=name + "已經加入我的選秀名單";
	$("#opinion").html(opinionString);
	//$("#addList").html(addListString);
	$("#game").addClass('animated zoomOut').one(animationend, function(){
		$(this).css("display", "none");
		$(this).removeClass('animated zoomOut');
		$("#roundResult").css("display", "block");
		$("#roundResult").addClass('animated zoomIn').one(animationend, function(){
			$(this).removeClass('animated zoomIn');
		});
	});
}
/*
function checkmybox(fwinnerid){
			$('#favotite_one').unbind('click');
			$('#favorite_one').unbind('mouseover');
			$('#favorite_two').unbind('click');
			$('#favorite_two').unbind('mouseover');
			$('#favorite_three').unbind('click');
			$('#favorite_three').unbind('mouseover');
			var request_url = "mybox.php";
			$.ajax({
			url:request_url,  
			data:{
				action:'check',
				user:user_id,
				fwinner:fwinnerid
			},
			type:"POST",	
			dataType:"text",
			success:function(str){
			if(str=='qualified'){
				var animationend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				$('#favorite_one').on('mouseover', function(){
				$(this).addClass('animated bounce').one(animationend,function(){
				$(this).removeClass('animated bounce');
				});
				});
				$('#favorite_one').on('click', function(){
				updatemybox($(this).attr('value'));
				});
				$('#favorite_two').on('mouseover', function(){
				$(this).addClass('animated bounce').one(animationend,function(){
				$(this).removeClass('animated bounce');
				});
				});
				$('#favorite_two').on('click', function(){
				updatemybox($(this).attr('value'));
				});
				$('#favorite_three').on('mouseover', function(){
				$(this).addClass('animated bounce').one(animationend,function(){
				$(this).removeClass('animated bounce');
				});
				});
				$('#favorite_three').on('click', function(){
				updatemybox($(this).attr('value'));
				});
				}
			},
			async:true,
			error:function(){},
			complete:function(){}
			});	
		}
function loadmybox(){
		var request_url = "mybox.php";				
		$.ajax({
			url:request_url,  
			data:{
				action:'load',
				user:user_id
			},
			type:"POST",	
			dataType:"json",
			success:function(str){
			if (str[1]!=null) $("#favorite_one").attr('src', str[1]);
			if (str[2]!=null) $("#favorite_two").attr('src', str[2]);
			if (str[3]!=null) $("#favorite_three").attr('src', str[3]);
			},
			async:true,
			error:function(){},
			beforeSend:function(){},
			complete:function(){}
			});
}
function updatemybox(position){
		$('#favotite_one').unbind('click');
		$('#favorite_one').unbind('mouseover');
		$('#favorite_two').unbind('click');
		$('#favorite_two').unbind('mouseover');
		$('#favorite_three').unbind('click');
		$('#favorite_three').unbind('mouseover');
		var finalwinnerid=winner_id[fight_num];
		var request_url = "myfavorite.php";				
		$.ajax({
			url:request_url,
			data:{
				action:'update',
				fwinner:finalwinnerid,
				personposition:position,
				user:user_id
			},
			type:"POST",	
			dataType:"text",
			success:function(str){
			//checkmybox(finalwinnerid);
			loadmybox();
			},
			async:true,
			error:function(){},
			complete:function(){}
			});
		}*/
//define a new dialog
if(!alertify.myAlert){
  alertify.dialog('myAlert',function(){
    return{
      main:function(message){
        this.message = message;
      },
      setup:function(){
          return { 
            buttons:[{text: "cool!", key:27/*Esc*/}],
            focus: { element:0 }
          };
      },
      prepare:function(){
        this.setContent(this.message);
      }
  }});
}
</script>
</body>
</html>