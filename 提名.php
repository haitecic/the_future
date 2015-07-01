<html>
<head>
    <meta charset="utf-8">
	<link  rel="stylesheet" href="master/dist/semantic.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>	
<?php
require_once "config/db_connect.php";//連結到本機端資料庫
$results=mysql_query("SELECT candidate.name, count(*) as number FROM fight_result LEFT JOIN candidate ON candidate.id=fight_result.candidate_id GROUP BY candidate.id order by number ASC");
$num_candidate=mysql_num_rows($results);
$user_id=1;//目前提名需要署名
?>

<!--提名-->
<div class="ui modal">
		<i class="close icon"></i>
		<div class="header">
		我認為適合的人選
		</div>		
		<div id="nominate_img" class="image">
		</div>
		<div class="description">																																			
		<div id="nominatetext">
		</div>
		<div class="actions"><div id="confirmnominate"></div><div class="ui button">取消</div></div>
			
		</div> 		
</div>
		
		<form id="nominatedata" action="nominate.php" method="post"></form>

		
		
<div>我想提名</div>
<span>姓名：</span>
<input id="nominate_name" type="text" name="newname" size=20 value="" />
<div id="validate" class="ui button">認證</div>

<span id="wait"></span>	
<!------------>
    <div id="main" style="height:1000px"></div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="master/dist/semantic.js"></script>
	<script src="themes/js/dist/echarts.js"></script>
    <script type="text/javascript">
user_id=<?php echo $user_id?>	
	$(function(){
		//認證提名人選
		$("#validate").on('click', function(){
		nominateproperman();
		});
		//送出提名人選資訊
		$('#confirmnominate').on('click', function(){
		$("#nominatedata").trigger("submit");
		});
	});
	
	
//提名之認證功能
function nominateproperman(){
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
						if(str.wiki=='used') var string ='此人已經在候選人名單';
						else if(str.wiki==null) var string ='維基百科查無此人';
						else 
							{
							var string='<div>簡介：</div>'+
							'<div>' + str.wiki + '</div>' +					
							'<div>' + str.news[1].title_h +str.news[1].press + '</div>' +					
							'<div>' + str.news[2].title_h +str.news[2].press + '</div>' +					
							'<div>' + str.news[3].title_h +str.news[3].press + '</div>';
							var formdata='<input type="hidden" name="name" value='+ "'" + nominate + "'" + ' />'+
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
							'<input type="hidden" name="command" value="NominateInsert" />';
							var person_img='<img src="' + str.img + '" alt="" />';
							$("#nominate_img").html(person_img);
							$("#nominatedata").append(formdata);
							$("#confirmnominate").addClass("ui button");
							$("#confirmnominate").text("確認");
							console.log(string + formdata + person_img);
							}
							$("#nominatetext").html(string);
							$("#wait").empty();
							$('.ui.modal').modal('show');
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
		$("#nominate_img").empty();
		$("input").remove("#nominatedata > input");
		$("#confirmnominate").removeClass("ui button");
		$("#confirmnominate").text("");
		$("#wait").html("認證中...");		
} 
	
	
	
	
	
	
	
	
        // echart
        require.config({
            paths: {
                echarts: 'themes/js/dist'
            }
        });
        
        // 使用
        require(
            [
                'echarts',
                'echarts/chart/line',
				'echarts/chart/pie',
				 'echarts/chart/bar'// 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 
                
                var option = {
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    legend: {
        data:['票數']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {
			show: false,
			title : {
				mark : '輔助線開關',
				markUndo : '刪除輔助線',
				markClear : '清空輔助線'
				},
			},
            dataView : {show: false, readOnly: false},
            magicType : {show: false, type: ['pie'], title:'切換圓餅圖'},
             restore : {
				show : true,
				title : '還原'
			},
            saveAsImage : {	show: true,
							title : '保存為圖片'	
						}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'value'
        }
    ],
    yAxis : [
        {
            type : 'category',
            data : [
			<?php for($i=0; $i<$num_candidate; $i++)
   {   
   echo "'" . mysql_result($results, $i, 'name') . "',";
   }?>]
        }
    ],
    series : [
        {
            name:'票數',
            type:'bar',
            stack: '人數',
            itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
            data:[<?php for($i=0; $i<$num_candidate; $i++)
   {   
   echo  mysql_result($results, $i, 'number') . ", ";
   }?>]
        },

    ]
};
                    
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>
</html>