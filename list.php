<html>
<head>
    <meta charset="utf-8">
	
</head>
<body>	
<?php
require_once "config/db_connect.php";//連結到本機端資料庫project_resource

$results=mysql_query("SELECT candidate.name, count(*) as number FROM fight_result LEFT JOIN candidate ON candidate.id=fight_result.candidate_id GROUP BY candidate.id order by number ASC");
$num_candidate=mysql_num_rows($results);
?>
    <div id="main" style="height:400px"></div>
	<script src="themes/js/dist/echarts.js"></script>
    <script type="text/javascript">
        // 路径配置
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