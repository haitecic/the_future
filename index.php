<!DOCTYPE html>
<html>
<head>    
<meta charset="utf-8" />
<?php
require_once "config/db_config.php";
$config = $server_config['db'];
$dbh = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
    $config['username'],
    $config['password']);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用prepared statements的模擬效果
$dbh->exec("set names 'utf8'");


if(isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
	$description="";
	if(isset($_GET['des']) && !empty($_GET['des'])) {
		$urldescription=$_GET['des'];
		$description=urldecode($_GET['des']);
	}
	$dbh->beginTransaction();
	$sql="select imgtype, imgheight, imgwidth from candidate where id=:id";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(':id', $id);
	$exeres = $stmt->execute();
	$dbh->commit();
	//$result=mysql_query("select imgtype, imgheight, imgwidth from candidate where id=$id");
	$dbh = null;
	$rowresults=array();
	if ($exeres){
		for($i=0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
			$rowresults[$i]=$row;
		}
	}
	if(!empty($rowresults)){
		$rowresult=$rowresults[0];
?>
<meta property="og:title" content="<?php echo $description;?>" />
<meta property="og:description" content="到底是誰？點擊看結果" />
<meta property="og:site_name" content="投家，鬥陣選總統" />
<meta property="og:url" content="http://www.votehome.com.tw/index.php?des=<?php echo $urldescription;?>&id=<?php echo $id;?>" />
<meta property="og:image" content="http://www.votehome.com.tw/image/candidate/<?php echo $id . "m." . $rowresult['imgtype'];?>" />
<meta property="og:image:width" content="<?php echo $rowresult['imgwidth'];?>" />
<meta property="og:image:height" content="<?php echo $rowresult['imgheight'];?>" />
<meta property="og:type" content="website"/>
<?php
	}
}
else{
?>
<meta property="og:title" content="投家，鬥陣選總統" />
<meta property="og:description" content="你是否無數次吶喊總統若是XXX，台灣會更好？現在，抓緊你的滑鼠！歷史，從現在開始！！" />
<meta property="og:site_name" content="投家，鬥陣選總統" />
<meta property="og:url" content="http://www.votehome.com.tw/index.php" />
<meta property="og:image" content="http://www.votehome.com.tw/image/indexBG.jpg" />
<meta property="og:type" content="website"/>
<meta property="og:image:width" content="730" />
<meta property="og:image:height" content="344" />
<?php
}
?>
<meta property="fb:app_id" content="1109820955698868" />
<title>投家，鬥陣選總統</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/index.css" />
</head>
<body>
	<div id="indexContent" class="containerAll">
		<h1>投家, &nbsp;鬥陣選總統</h1>
		<p class="indexSubtitle">
			你是否無數次吶喊總統若是XXX，台灣會更好？<br>
			現在，抓緊你的滑鼠！歷史，從現在開始！！
		</p>
		<p class="indexSubtitle_2">
			先戰鬥！<span>隨機二選一，誰好誰更好，一比就知道</span><br>
			後補票！<span>誰又是最好，在這裡，你的一票說了算</span>
		</p>
		<a class="startBtn" id="fight">開戰！START！</a>
		<div id="indexSideBtn">
			<a id="realtimesituation" data-toggle="modal" data-target="#ModalRealtime">►即時戰況</a>
			<a data-toggle="modal" data-target="#ModalIdea">►團隊理念</a>
			<a data-toggle="modal" data-target="#ModalLaw">►本站宣告</a>
			<button id="showResult" data-toggle="modal" data-target="#ModalShowResult" style="display:none"></button>
		</div>
		<div class="indexBG"></div>
		<div class="copyright">Design by NaughtyX</div>
	</div>
	
	
		<div class="modal fade" id="ModalIdea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">團隊理念</h4>
				</div>
				<div class="modal-body">
					<p style="font-size: 16px;">我們是一群七年級生，在一次的旅行中聊到明年的總統選舉，在天馬行空地論述各自心中的最佳人選時，我們意外地發現，當選擇不再被侷限於檯面上的政治人物，而是來自各領域的優秀人士時，話題從一開始的適任人選，逐漸聚焦為<b>擔任總統應該具備的特質</b>，討論氛圍也擺脫了意識形態進而沉浸在理性的思考。如此一來，我們對於選舉將以較理性的方式來看待，對於重大政策的方向也能有更深入的討論。在這樣的討論中，我們較不會受到政治言語的影響，陷入分裂與仇恨的情緒，而是理性思考怎麼樣的人，才真正值得我們賦予國家中最高的權力，並決定我們國家未來四年的方向。<!--這樣的思考應該才是民主的根基，民主的價值也才有機會真正的體現。--></p>
					<p style="font-size: 16px;">基於這樣的理念，我們找了一群有相同理想的夥伴，經歷了兩個月中的許多討論，架構起這個平台。期望藉由這個遊戲，讓每個玩的人都能經歷我們當時的討論，並且在自我探索後，找出自己心中對於總統的想像。</p>
					<p style="font-size: 16px;">在我們的歷史中並沒有歷經啟蒙時代凝聚屬於我們的價值，<b>這次我們不再錯過，我們將建立屬於自己的啟蒙，凝聚對總統大選的共識，最後落實於明年神聖的選票。</b></p>
					<br><br>
					<p>聯絡我們：<a href="mailto:votehome2015@gmail.com">votehome2015@gmail.com</a></p>
					<!--<h4>1、玩家將認識更多優秀的人才</h4>
					<p>遊戲中有自由提名的機制，使人民對於擔任政府要職的想像，從政治人物擴展到各領域的優秀人士，只要人選夠優秀，就有機會被人民看見。</p>
					<h4>2、玩家將重新思考擔任總統需要的特質</h4>
					<p>遊戲的方式是在二者中選一適任者，連續的兩兩配對比較，玩家不只考慮對單一候選人的喜惡，而是思考擔任總統要職需要具備的特質。當人民能夠更理性地思考對總統的選擇，也許能成為改變台灣選舉風氣的契機。</p>
					<h4>3、增進人民理性討論公共議題的風氣，進而凝聚社會共識</h4>
					<p>透過PK戰及投票，彷彿經歷許多次虛擬的、不侷限於黨派的總統大選，降低了平時討論政治議題的敏感度，並且從理性的角度出發，考量較重要的特質、政見與議題。期望延續理性思辨的討論風氣，使人民對公眾議題累積出更多共識。</p>-->
				</div>
				<div class="modal-footer">
				</div>
			</div>
		  </div>
	    </div>
		
		<div class="modal fade" id="ModalLaw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">本站宣告</h4>
				</div>
				<div id="claim" class="modal-body">
					<h4>歡迎光臨本網站，以下為本網站之宣告，請使用人嚴格遵守以下內容</h4>
					<p>&nbsp;&nbsp;1、本網站係以非營利為目的之遊戲網站，網站之內容純屬娛樂性質，不涉及任何政治及社會議題之操作。</p>
					<p>&nbsp;&nbsp;2、本網站所有列為被提名候選人之人選，皆由網友依自由意志所提供，本網站不涉及任何暗示、指示、誘導、勸誘之行為。</p>
					<p>&nbsp;&nbsp;3、本網站所顯示之被提名候選人之照片或生平或重要事蹟皆係引用自維基百科或其他可取得使用之公開網路平台．並符合其引用規範，故若資料內容與現實不符或有疑義，本網站不負任何相關責任。</p>
					<p>&nbsp;&nbsp;4、若使用者發現本網站存有有任何未經授權使用之資料或圖文內容，請不吝來信告知本站人員，本站經確認後將立即撤除該內容。</p>
					<p>&nbsp;&nbsp;5、本網站之架設係涉及總統選舉相關之敏感議題，惟本網站之宗旨僅係提供一般民眾有別於真實選舉外之娛樂功能，人選可能包含所有不論是否符合法定參選資格之一般民眾，故所得之結果，本站不就其真實性及可行性負任何責任。</p>
					<p>&nbsp;&nbsp;6、本網站所產生之結果僅屬大眾娛樂性質，並不存在任何民調之功能。故不論本網站之結構、過程、結果未經本站之授權，不得擅加引用其資料公開於新聞、報章雜誌、廣播，或其他私人或公眾播送之平台。若經不當引用，本站保有一切法律追朔之權利。</p>
					<p>&nbsp;&nbsp;7、本網站之架構將秉持公正並公開之原則，並不介入操作任何於本平台上的投票行為，所有出現之人選皆為隨機產生，先後之順序並不帶有任何暗示之性質，且候選人為使用者提名後不會由站方更改其提名資格。不符合常理之提名人選將由本站人工檢視後刪除並保存其提名相關記錄，必要時以供查證。就提名人選是否符合常理，本站將依民法一般正常合理之人之邏輯審核，並保有最終解釋之權利。</p>
					<p>&nbsp;&nbsp;8、若使用者提名之「總統候選人具備特質」有污衊、不雅、侮辱與其他違反社會善良風俗之內容，本網站會將其從選項中刪除，並留存相關記錄以茲證明。就是否有污衊、不雅、侮辱與其他違反社會善良風俗之內容，本站將依民法一般正常合理之人之邏輯審核，並保有最終解釋之權利。</p>
					<p>&nbsp;&nbsp;9、本站僅為提供一般民眾娛樂性質之平台，並無介入真實總統選舉之意圖。本站並不屬於任何政黨，社會團體，或其他可能就總統選舉有利害關係之法人。</p>
					<p>10、本網站所得到之結果僅係提供參與人之娛樂，非為有目的性的為某參選人宣傳。本網站並無使任何真實參選候選人當選或不當選之意圖。</p>
					<p>11、本網站依照不同使用者輸入不同資料所呈現之統計結果將以數據或其他方式呈現，除有明顯不符常理之事項將由本站進行篩選刪除外，本站將忠實呈現使用者依照規則輸入相關內容所呈現之結果，本站不會對結果有任何竄改之行為。就何謂明顯不符合常理之事項，本站擁有最終解釋之權利。</p>
					
				</div>
				<div class="modal-footer">
				</div>
			</div>
		  </div>
	    </div>
				
		<div class="modal fade" id="ModalShowResult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">符合特質的候選人是</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
				</div>
			</div>
		  </div>
	    </div>
		
		<div class="modal fade" id="ModalRealtime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">神聖投票所的即時戰況</h4>
				</div>
				<div class="modal-body">
					<div id="hChartsMap" style="width:550px"></div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		  </div>
	    </div>		
		
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/highcharts.js"></script>
<script>
$(function(){
	promptSolution();
	$("#realtimesituation").on('click', function(){
		loadAllList();
	});
	
	$("#fight").on('click', function(){
		location="fightgame.html";
	});
});
function promptSolution(){ //獲取 url 的參數值，不區分大小寫,如無此參數，返回空字符串.
	var url = location.href;
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&");
	var paraObj = {}
	for (i=0; j=paraString[i]; i++){
		paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length);
	}
	$.ajax({
		url:"getresult.php",
		data:{
			id:paraObj['id'],
		},
		type:"POST",
		dataType:"json",
		success:function(json){
			if(json.status=='successful'){
				$("#ModalShowResult .modal-body").append('<div class="final"><div class="personImg" style="background:url(image/candidate/'+ paraObj['id'] + '.' + json.imgtype +');background-size:auto 200px;background-repeat: no-repeat;background-position:center;"></div><div class="quote"><a href="'+json.originurl+'" target="_blank">'+json.origintitle+'</a></div><div class="canName">' + json.name + '</div><div class="canBrief">' + json.brief + '<a href="http://zh.wikipedia.org/zh-tw/'+json.wikiname+'" target="_blank">維基百科</a></div></div>');
				$("#showResult").trigger('click');
				$("#showResult").unbind('click');
			}
			else{
			}
		}
	});
}
function loadAllList(){
	var request_url="loadalllist.php"
	$.ajax({
		url:request_url,
		data:{
			command:"start",
		},
		type:"POST",
		dataType:"json",
		success:function(json){
			//console.log(json.name);
			//console.log(json.number);
			//echart(json.name.reverse(), json.number.reverse());
			$("#hChartsMap").css("height", json.height + "px");
			hcharts(json.name, json.number);
		},
		asyns:true,
		complete:function(){
		}
	});		
}



function hcharts(xdata, ydata) {
    $('#hChartsMap').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: '',
        },
        xAxis: {
            categories: xdata,
			labels:{
				style:{font: '14px arial, futura, cwTeXHei'}
			}
		},
        yAxis: {
			allowDecimals: false,
            min: 0,
            title: {
                text: '票數',
				style:{font: '14px arial, futura, cwTeXHei'}
            }
        },
        legend: {
            reversed: true
        },
		plotOptions: {
            series: {
				stacking: 'normal',
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
                            window.open('https://zh.wikipedia.org/wiki/' + this.category);
                        },
                    }
                }
            }
        },
        series: [{
			//allowPointSelect: true,
            name: 'Facebook有效選舉人數',
            data: ydata,
			color: '#8AFFE8',
        }]
    });
}	
</script>
</body>
</html>