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
						if(str.wiki=='used') var string ='此人已經在候選人名單';
						else if(str.wiki==null) var string ='維基百科查無此人';
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
