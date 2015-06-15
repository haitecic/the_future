-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 年 06 月 15 日 19:21
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `taiwan_future`
--

-- --------------------------------------------------------

--
-- 資料表結構 `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL COMMENT '提名者',
  `name` varchar(100) DEFAULT NULL,
  `brief` varchar(2500) DEFAULT NULL COMMENT 'wiki簡介',
  `img` varchar(300) DEFAULT NULL COMMENT 'wiki圖片連結',
  `news_title_1` varchar(600) DEFAULT NULL,
  `news_abs_1` varchar(300) DEFAULT NULL,
  `news_press_1` varchar(300) DEFAULT NULL,
  `news_title_2` varchar(600) DEFAULT NULL,
  `news_abs_2` varchar(300) DEFAULT NULL,
  `news_press_2` varchar(300) DEFAULT NULL,
  `news_title_3` varchar(600) DEFAULT NULL,
  `news_abs_3` varchar(300) DEFAULT NULL,
  `news_press_3` varchar(300) DEFAULT NULL,
  `news_title_4` varchar(600) DEFAULT NULL,
  `news_abs_4` varchar(300) DEFAULT NULL,
  `news_press_4` varchar(300) DEFAULT NULL,
  `news_title_5` varchar(600) DEFAULT NULL,
  `news_abs_5` varchar(300) DEFAULT NULL,
  `news_press_5` varchar(300) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 資料表的匯出資料 `candidate`
--

INSERT INTO `candidate` (`id`, `user_id`, `name`, `brief`, `img`, `news_title_1`, `news_abs_1`, `news_press_1`, `news_title_2`, `news_abs_2`, `news_press_2`, `news_title_3`, `news_abs_3`, `news_press_3`, `news_title_4`, `news_abs_4`, `news_press_4`, `news_title_5`, `news_abs_5`, `news_press_5`) VALUES
(1, NULL, '王建民', '<p><b>王建民</b>是一個比較常見的中文人名，可以指下列的知名人物：</p>\n<ul><li>王建民 (棒球選手)，台灣出身的棒球選手</li>\n<li>王建民 (企業家)，波音公司副總裁</li>\n<li>王建民 (中提琴演奏家)，中国国家交响乐团中提琴声部首席</li>\n<li>王建民 (上将)，中國人民解放軍退役高級軍事將領</li>\n<li>王建民 (中将)，中國人民解放軍現役高級軍事將領</li>\n<li>王建民 (二胡作曲家)，有著名作品《第一二胡狂想曲》，《天山風情》</li>\n<li>王建民 (国资委)，原中国国资委监事会主席</li>\n<li>王建民 (清华)，清华大学软件学院党委书记</li>\n<li>王建民 (中國社科院)，中國社會科學院台灣研究所研究員</li>\n<li>齊齊哈爾民工王建民醫院死亡事件，2005年疑因北京醫院拒絕施救而死亡，引起中國大陸媒體報道關注</li>\n</ul>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150612/519862.htm" target="_blank"><b><b>王建民</b></b>右側鼠蹊部拉傷進傷兵名單 本季第2次列傷兵</a></h3>', '<div class="compText mt-5" ><p class="">記者歐建智／綜合報導 旅美勇士隊3A投手<b>王建民</b>12日（台北時間）因為右側鼠蹊拉傷而被放入傷兵名單，這是<b>王建民</b>今年第2次被... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月12日 PM 13:17</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.epochtimes.com/b5/15/6/10/n4454902.htm" target="_blank"><b><b>王建民</b></b>4局丟6分 吞下第六敗</a></h3>', '<div class="compText mt-5" ><p class="">【大紀元2015年06月10日訊】（大紀元記者魏文彬綜合報導） <b>王建民</b> 今日再次對上金鶯3A諾佛克潮汐隊，上次3局被敲11支安打狂失10分... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">大紀元時報</span> <span class=" fc-2nd ml-5">06月11日 AM 02:12</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.nownews.com/n/2015/06/12/1717172" target="_blank">旅美球星／鼠蹊部拉傷 <b><b>王建民</b></b>又進傷兵名單</a></h3>', '<div class="compText mt-5" ><p class="">記者王真魚／綜合報導 勇士3A（Gwinnett Braves）<b>王建民</b>11日被勇士教頭Fredi Gonzalez點名有機會拉上大聯盟，不過最後... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">今日新聞網</span> <span class=" fc-2nd ml-5">06月12日 AM 11:32</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, '葉丙成', '<p>葉丙成，號丙紳，英文名Benson，美國密西根大學博士現任台大電機系副教授、台大 MOOC 計畫執行長。曾開設Coursera第一門華語課程「機率」，並領導開發寓教於樂的PaGamO線上遊戲，擊敗400多個團隊獲得全球第一屆的教學創新大獎「Reimagine Education」冠軍。</p>\n<p></p>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E7%BF%BB%E8%BD%89%E5%85%A8%E7%90%83%E8%AA%B2%E5%A0%82-%E5%8F%B0%E5%A4%A7%E6%95%99%E6%8E%88%E8%91%89%E4%B8%99%E6%88%90%E9%A1%9B%E8%A6%86%E5%82%B3%E7%B5%B1-030300530.html" target="_blank">翻轉全球課堂！　台大教授<b><b>葉丙成</b></b>顛覆傳統</a></h3>', '<div class="compText mt-5" ><p class="">...門課，登上世界知名的Coursera線上開放課程教學平台，台大電機系副教授<b>葉丙成</b>用顛覆傳統的教學方法，讓全球兩萬名學生搶著修他的機率課。 為了引起學生... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">TVBS via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">11月09日 AM 11:03</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E8%80%81%E5%B8%AB%E7%BF%BB%E8%BD%89%E6%95%99%E5%AD%B8-%E7%94%A8%E7%A7%91%E6%8A%80%E5%8A%A9%E5%AD%B8%E7%94%9F%E5%AD%B8%E7%BF%92-093649825.html" target="_blank">老師翻轉教學　用科技助學生學習</a></h3>', '<div class="compText mt-5" ><p class="">帶動創新教學，國立臺灣大學電機系副教授<b>葉丙成</b>今天（29）分享「如何運用科技幫助教學」，透過「翻轉教學」讓學生在課前自行... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">國立教育廣播電台 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">09月29日 PM 17:36</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%93%8A%E6%95%97%E5%93%88%E4%BD%9B-%E5%8F%B0%E5%A4%A7%E7%8D%B2%E5%85%A8%E7%90%83%E6%95%99%E5%AD%B8%E5%89%B5%E6%96%B0%E5%A4%A7%E7%8D%8E-091000905.html" target="_blank">​擊敗哈佛！　台大獲全球教學創新大獎</a></h3>', '<div class="compText mt-5" ><p class="">台灣學界傳來好消息！由台大副教授<b>葉丙成</b>率領的團隊，拿下國際性的教學創新大獎，他和台大學生一起開發的線上遊戲學習... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">TVBS via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">12月12日 PM 17:10</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, '林書豪', '<p><b>林書豪</b>（<span>英语：<span lang="en" xml:lang="en"><b>Jeremy Shu-How Lin</b></span></span>，1988年8月23日<span title="Template:BLP editintro">－</span>），生於美國加州托倫斯，美國職業籃球隊球員，現屬NBA洛杉磯湖人，司职得分後衛與控球後衛，擅長擋切戰術以及跑轟戰術。畢業於哈佛大學，是第二個進入NBA的哈佛大學畢業生。</p>\n<p>林書豪一開始進入NBA並不順利，在NBA的選秀會未得到任何球隊簽約，之後雖和金州勇士隊簽約，但只有零星上場比賽機會，三次被下放至發展聯盟。遭到金州勇士隊釋出後，短暫被休士頓火箭隊簽下又釋出後，最終進入紐約尼克隊。在尼克隊初期也未有上場機會，直到2012年2月，令人意想不到地帶領尼克隊連贏7場比賽，引起全世界的注意，此後成為先發球員，此一現象被媒體稱為「林來瘋」（Linsanity）。</p>\n<p>林書豪是NBA歷史上少數的美籍亞裔球員，也是第一個台灣裔美國人、美籍華人籃球員。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Jeremy_Lin_2012_Shankbone.JPG/200px-Jeremy_Lin_2012_Shankbone.JPG', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/7002/972257" target="_blank">鹽湖城媒體爆料 爵士看上<b><b>林書豪</b></b></a></h3>', '<div class="compText mt-5" ><p class="">...羅林書<b>豪</b>有意思，正在展現對林書豪的興趣，初估行情是兩年1000萬美元，這也符合<b>林書豪</b>在自由球員市場身價。 當然這些謠言只是網路上的傳聞，並不確定，甚至可能是... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">06月11日 PM 14:51</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%9E%97%E6%9B%B8%E8%B1%AA%E5%8F%AF%E5%8F%96%E4%BB%A3%E5%B0%8F%E7%89%9B%E8%89%BE%E5%88%A9%E6%96%AF-071849721-spt.html" target="_blank"><b><b>林書豪</b></b>可取代小牛艾利斯</a></h3>', '<div class="compText mt-5" ><p class="">美國職籃NBA洛杉磯湖人後衛<b>林書豪</b>動向備受關注。SB Nation的達拉斯小牛隊專欄作家傑納諾認為，如果... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">Yahoo奇摩新聞 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月10日 PM 15:18</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://cnyes.feedsportal.com/c/33100/f/637778/s/46d139d2/sc/21/l/0Lnews0Bcnyes0N0C20A150A60A10C0J67970J66f80J8c6a0J516d0J670A80J5e950J8a2a0J53f0A0E0J4e9e0J6d320J884c0J670A0A0J5f8c0J4e0A0A0J7ad90E14435970A0A176410A0Bshtml/story01.htm" target="_blank"><b><b>林書豪</b></b>六月底訪台 亞洲行最後一站</a></h3>', '<div class="compText mt-5" ><p class="">NBA球員<b>林書豪</b>將於月底訪台進行一年一度的亞洲之旅，由於今年他跟湖人結束合約成為自由球員... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">鉅亨網</span> <span class=" fc-2nd ml-5">06月01日 PM 15:20</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, '李焜耀', '<p><b>李焜耀</b>（1952年9月10日<span title="Template:BLP editintro">－</span>），台灣企業家，友達光電、明基電通董事長。</p>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E9%86%AB%E7%94%9F%E5%85%A8%E8%B2%AC-%E6%8B%92%E7%B4%85%E5%8C%85-%E6%9D%8E%E7%84%9C%E8%80%80%E6%89%AD%E8%BD%89%E5%A4%A7%E9%99%B8%E9%86%AB%E7%99%82%E7%94%9F%E6%85%8B-090221766.html" target="_blank">醫生全責、拒紅包！<b><b>李焜耀</b></b>扭轉大陸醫療生態</a></h3>', '<div class="compText mt-5" ><p class="">面板強人<b>李焜耀</b>閃辭友達董座震驚各界，其實早在十年前，除了面板業，<b>李焜耀</b>就開始放眼醫療... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">東森新聞 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">05月20日 PM 17:02</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%9D%8E%E7%84%9C%E8%80%80%E5%A4%A7%E7%97%85%E5%88%9D%E7%99%92%E5%BE%8C%E7%9A%84%E6%B7%B1%E5%B1%A4%E9%AB%94%E6%82%9F-%E5%8F%8B%E9%81%94%E5%A4%A7%E5%8F%8D%E6%94%BB-152548201--finance.html" target="_blank"><b><b>李焜耀</b></b>大病初癒後的深層體悟 友達大反攻</a></h3>', '<div class="compText mt-5" ><p class="">2015年2月12日下午，友達光電董事長<b>李焜耀</b>現身公司董事會，坐在會議室皮椅上的他，看起來精神不錯。出席會議的董監事... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">財訊 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">04月08日 PM 23:25</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%9D%8E%E7%84%9C%E8%80%80%E8%BE%AD%E5%8F%8B%E9%81%94%E8%91%A3%E5%BA%A7-%E5%BD%AD-%E5%8F%88%E5%8F%88-%E6%B5%AA%E6%8E%A5%E7%8F%AD-105237576--finance.html" target="_blank"><b><b>李焜耀</b></b>辭友達董座　彭（又又）浪接班</a></h3>', '<div class="compText mt-5" ><p class="">產業界重大消息，友達董事長<b>李焜耀</b>辭去董事長職務，董事會今天下午已推舉總經理彭(又又)浪接任董事長一職，彭... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中廣新聞網 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">05月11日 PM 18:52</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, '侯孝賢', '<p><b>侯孝賢</b>（1947年4月8日<span title="Template:BLP editintro">－</span>）是一位台灣電影導演，出生於中華人民共和國廣東省梅縣（今梅州市梅縣區）。父親原本為當地的教育科長，1948年全家搬到臺灣，屬客家人。侯孝賢喜愛使用長鏡頭、空鏡頭與固定鏡位，讓人物直接在鏡頭中說故事，是他電影的一大特色。目前是臺灣電影文化協會榮譽理事長。1989年的《悲情城市》获得金狮奖。2015年以《刺客聶隱娘》獲得坎城影展最佳導演獎。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/220px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150613/515698.htm" target="_blank">財訊／<b><b>侯孝賢</b></b>，一直都是<b><b>侯孝賢</b></b></a></h3>', '<div class="compText mt-5" ><p class="">...溯及了將近20年前第一次看侯導這部經典作品的回憶，才更清楚明白這部片與<b>侯孝賢</b>導演在我心中的重要位置。 台灣電影的一座高峰 坎城早就欠他一座大獎 我... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月13日 PM 14:15</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E4%BE%AF%E5%AD%9D%E8%B3%A2%E6%8B%8D%E8%81%B6%E9%9A%B1%E5%A8%98-%E5%9C%98%E9%9A%8A%E5%85%A8%E7%94%A8%E5%8F%B0%E7%81%A3%E4%BA%BA-084052411.html" target="_blank"><b><b>侯孝賢</b></b>拍聶隱娘 團隊全用台灣人</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者鄭景雯台北9日電）導演<b>侯孝賢</b>獲得坎城影展最佳導演，<b>侯孝賢</b>今天在記者會上說，「刺客聶隱娘」團隊全部都... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月09日 PM 16:40</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E4%BE%AF%E5%AD%9D%E8%B3%A2%E6%89%B9%E6%96%87%E5%89%B5%E6%98%AF%E9%A8%99%E4%BA%BA-081857776.html" target="_blank"><b><b>侯孝賢</b></b>批文創是騙人</a></h3>', '<div class="compText mt-5" ><p class="">日前國發會官員提及<b>侯孝賢</b>的新作「刺客聶隱娘」沒有跟文創產業合作很可惜，<b>侯孝賢</b>今天(9號)被媒體問到... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中廣新聞網 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月09日 PM 16:18</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, '李安', '<p><b>李安</b>（英文：<span lang="en" xml:lang="en"><b>Ang Lee</b></span>，1954年10月23日<span title="Template:BLP editintro">－</span>），著名臺灣導演，生於屏東縣，曾獲得多個主要國際電影獎項，包括三屆奧斯卡金像獎、五屆英國電影學院獎、五屆金球獎、兩屆威尼斯影展最佳電影金獅獎以及兩屆柏林影展最佳電影金熊獎。</p>\n<p>李安在1999年執導的《臥虎藏龍》獲得第73屆奧斯卡最佳外語片獎及三個技術獎項。2006年和2013年則分別以《斷背山》和《少年PI的奇幻漂流》獲得第78屆奧斯卡金像獎和第85屆奧斯卡金像獎最佳導演獎，是第一位獲得該獎項的亞洲導演，也是至今唯一兩度獲得該獎項的亞洲導演。</p>\n<p>為表彰他對電影的貢獻，小行星64291以他的名字命名，獲頒贈中華民國一等、二等景星勳章、法國文化藝術騎士勳章。</p>\n<p>李安是柏林影展歷史上，唯一能夠兩次奪得最佳電影的導演。李安亦是歷史上唯一能於奧斯卡獎、英國電影學院獎以及金球獎三大世界性電影頒獎禮上奪得最佳導演的華人導演。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/4/44/Ang_Lee_-_66%C3%A8me_Festival_de_Venise_%28Mostra%29.jpg/220px-Ang_Lee_-_66%C3%A8me_Festival_de_Venise_%28Mostra%29.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%9D%8E%E5%AE%89-%E8%87%A5%E8%99%8E-%E7%AA%A9%E8%A3%A1%E5%8F%8D-%E5%A4%8F%E7%A9%86%E6%96%AF%E7%88%86%E7%B2%97%E5%8F%A3-220158935.html" target="_blank"><b><b>李安</b></b>《臥虎》窩裡反 夏穆斯爆粗口</a></h3>', '<div class="compText mt-5" ><p class="">中國時報【徐定遠╱綜合報導】 <b>李安</b>2000年以《臥虎藏龍》奪下奧斯卡最佳外語片，成為首位獲此殊榮的台灣導演... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中時電子報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月19日 AM 06:01</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="https://tw.celebrity.yahoo.com/news/%E6%9D%8E%E5%AE%89%E6%98%8E%E6%98%A5%E9%96%8B%E5%B7%A5-%E6%88%B2%E8%AA%AA%E5%A4%A7%E5%85%B5%E6%9E%97%E6%81%A9-221112413.html" target="_blank"><b>李安</b>明春開工 戲說大兵林恩</a></h3>', '<div class="compText mt-5" ><p class="">〔自由時報記者鄒念祖／綜合報導〕<b>李安</b>確認執導小說改編新片「大兵林恩的半場休息」（暫譯），預計明年春天開拍。<b>李安</b>... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">自由時報 via Yahoo! 奇摩名人娛樂</span> <span class=" fc-2nd ml-5">09月20日 AM 06:11</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="https://tw.celebrity.yahoo.com/news/%E6%9D%8E%E5%AE%89%E9%81%B8%E4%B8%8A-%E5%94%90%E8%80%81%E5%A4%A7-%E5%8D%8A%E5%A0%B4%E7%84%A1%E6%88%B0%E4%BA%8B-%E6%98%8E%E6%98%9F%E5%A4%A7%E6%94%BE%E9%96%83-033842901.html" target="_blank"><b>李安</b>選上「唐老大」，《半場無戰事》明星大放閃</a></h3>', '<div class="compText mt-5" ><p class="">「夢幻組合」成真。台灣之光<b>李安</b>執導的新片《半場無戰事》，《玩命關頭》唐老大馮迪索將演出要角，讓這部... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">Yahoo奇摩娛樂訊息 via Yahoo! 奇摩名人娛樂</span> <span class=" fc-2nd ml-5">04月09日 AM 11:38</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, '張忠謀', '<p><b>張忠謀</b>（<span>英语：<span lang="en" xml:lang="en"><b>Morris Chang</b></span></span>，1931年7月10日<span title="Template:BLP editintro">－</span>），出生於浙江省鄞縣（今浙江寧波），畢業於美國麻省理工學院機械工程學系及史丹福大學電機工程學系，並曾任工業技術研究院院長及麻省理工學院董事，也是台灣積體電路公司創辦人，曾獲IEEE榮譽獎章。</p>\n<p></p>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/7238/992167" target="_blank"><b><b>張忠謀</b></b> 亞大頒名譽博士</a></h3>', '<div class="compText mt-5" ><p class="">台積電董事長<b>張忠謀</b>昨天獲亞洲大學頒授名譽工學博士學位，亞洲大學創辦人蔡長海、校長蔡進發在頒贈... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">06月14日 AM 02:44</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%BC%B5%E5%BF%A0%E8%AC%80-%E7%8D%B2%E9%A0%92%E4%BA%9E%E5%A4%A7%E5%90%8D%E8%AD%BD-%E5%B7%A5%E5%AD%B8%E5%8D%9A%E5%A3%AB-215006714--finance.html" target="_blank"><b><b>張忠謀</b></b> 獲頒亞大名譽 工學博士</a></h3>', '<div class="compText mt-5" ><p class="">工商時報【記者吳筱雯╱台北報導】 台積電董事長<b>張忠謀</b>昨(13)日獲頒亞洲大學名譽工學博士學位，這也是他的第9個榮譽博士，不過他... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中時電子報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月14日 AM 05:50</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://news.cnyes.com/20150614/%e5%bc%b5%e5%bf%a0%e8%ac%80-%e5%b9%b4%e8%bc%95%e4%ba%ba%e5%9f%b9%e9%a4%8a%e6%ad%a3%e9%9d%a2%e4%ba%ba%e6%a0%bc--%e7%b5%82%e8%ba%ab%e5%ad%b8%e7%bf%92-093602474665111.shtml" target="_blank"><b><b>張忠謀</b></b>：年輕人培養正面人格 終身學習</a></h3>', '<div class="compText mt-5" ><p class="">亞洲大學今天授予台積電董事長<b>張忠謀</b>名譽工學博士學位，表彰<b>張忠謀</b>董事長對社會、國家的貢獻，<b>張忠謀</b>董事長也對亞大... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">鉅亨網</span> <span class=" fc-2nd ml-5">06月14日 AM 09:54</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, '李國鼎', '<p><br></p>\n<p><b>李國鼎</b> （1910年1月28日－2001年5月31日） 是一位政治家兼經濟學家，曾任中華民國經濟部及財政部部長，在任時推動許多經濟建設，1982年推動修正《科學技術發展方案》，選擇了能源、自動化、材料、資訊、生物科技、光電、食品科技及肝炎防治等八項為重點科技項目，被譽為台灣經濟奇蹟的重要推手。南京市人，後定居於台北，其台北故居已規劃成為李國鼎故居，供世人懷念其對國家的貢獻。</p>\n<p></p>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E9%86%AB-%E6%B8%9B%E9%87%8D%E8%A1%93%E5%BE%8C-%E5%AE%9C%E5%9D%87%E8%A1%A1%E6%94%9D%E5%8F%96%E7%87%9F%E9%A4%8A-041404739.html" target="_blank">醫：減重術後 宜均衡攝取營養</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者張榮祥台南26日電）成大醫院外科醫師<b>李國鼎</b>今天表示，多數接受減重手術者以為體重下降越多越快越好，卻忘記調控飲食及... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">11月26日 PM 12:14</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E4%BD%BF%E7%94%A8%E8%80%85%E7%8E%8B%E9%81%93-%E5%8A%89%E5%85%86%E7%8E%84-%E6%BC%A2%E5%AD%97%E5%86%8D%E6%AC%A1%E6%9B%B8%E5%90%8C%E6%96%87-215034511.html" target="_blank">使用者王道 劉兆玄：漢字再次書同文</a></h3>', '<div class="compText mt-5" ><p class="">中國時報【湯雅雯╱台北報導】 昨天是資訊工業策進會創辦人<b>李國鼎</b>106歲冥誕，為感念他對台灣的付出與貢獻，資策會邀中華文化總會長劉兆玄以... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中時電子報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">01月29日 AM 05:50</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E7%A4%BE%E8%AB%96-%E5%81%87%E5%A6%82%E6%9B%BE%E9%8A%98%E5%AE%97%E8%88%87%E5%BC%B5%E7%9B%9B%E5%92%8C%E6%8F%9B%E4%BD%8D%E5%AD%90-215033093--finance.html" target="_blank">社論－假如曾銘宗與張盛和換位子</a></h3>', '<div class="compText mt-5" ><p class="">工商時報【本報訊】 有「科技之父」美譽的<b>李國鼎</b>先生，生前留下不少發人深省的大小軼事，其中一個被人傳誦的小故事是這樣的... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中時電子報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">12月15日 AM 05:50</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, '周杰倫', '<p><b>周杰倫</b>（<span>英语：<span lang="en" xml:lang="en">Jay Chou</span></span>，1979年1月18日<span title="Template:BLP editintro">－</span>）， 台湾男歌手、填詞人、作曲家、導演、演員及電視節目主持人等。於2000年發行個人首張同名音樂專輯《Jay》出道，並在隨後的第12屆金曲獎上奪得「最佳流行音樂演唱專輯獎」，。隔年2001年發行第二張音樂專輯《范特西》，其融合多元的主題與素材，創造出多變的風格，尤以融合中西元素的嘻哈、節奏藍調、饒舌和中國風而受歡迎。繼於2005年首次演出《頭文字D》進入電影界後，於2009年自導自演電視劇《熊貓人》跨足電視界，并积极参与公益活动。。2014年與相戀四年的藝人女友昆凌登記結婚，並于英國、台湾、澳大利亚舉辦三次婚禮。</p>\n<p></p>\n', '//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Jay_Chou_in_Seoul.jpg/230px-Jay_Chou_in_Seoul.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%91%A8%E6%9D%B0%E5%80%AB%E5%A2%BE%E4%B8%81%E6%8B%8D-%E7%A9%BA%E6%8B%8D%E6%A9%9F%E5%A4%B1%E6%8E%A7%E9%9A%AA%E5%89%8A%E8%85%A6-120623457.html" target="_blank"><b><b>周杰倫</b></b>墾丁拍ＭＶ空拍機失控險削腦</a></h3>', '<div class="compText mt-5" ><p class=""><b>周杰倫</b>最近在墾丁海邊拍新歌MV，還把一票好哥們都拉去，邊拍邊玩，不過... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">民視 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 20:06</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%91%A8%E6%9D%B0%E5%80%AB%E9%A6%B3%E9%A8%81%E6%B5%B7%E9%9D%A2-%E5%97%A8%E5%94%B1%E6%88%91%E8%A6%81%E5%A4%8F%E5%A4%A9-113401482.html" target="_blank"><b><b>周杰倫</b></b>馳騁海面 嗨唱我要夏天</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者王靖怡台北11日電）歌手<b>周杰倫</b>新歌「我要夏天」MV在墾丁取景，騎水上摩托車馳騁海面，也在海邊開唱... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月11日 PM 19:34</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/6816/990874" target="_blank">書摘╱《我相信失敗》<b><b>周杰倫</b></b>：失敗給我的禮物</a></h3>', '<div class="compText mt-5" ><p class="">...因為這時是你人生一切環境都最純真的時刻。 陳文茜： 他的歌陪著許多人成長，<b>周杰倫</b>要來聊聊他的人生、他的夢想。杰倫最特別的一件事情，是你和媽媽的關係... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">06月13日 PM 12:14</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, '柯文哲', '<p><b>柯文哲</b>（1959年8月6日<span title="Template:BLP editintro">－</span>），生於臺灣新竹市，外科醫師、政治人物，無黨籍，為現任臺北市市長。曾擔任臺大醫院急診部醫師、臺大醫院創傷醫學部主任、臺大醫學院教授，專長為外科重症醫學、器官移植 、人工器官等，是臺灣第一個急診與重症加護專職醫生，為臺灣器官標準移植程序的建立者，也是首位將葉克膜（ECMO）技術引進臺灣的醫師。綽號<b>柯P</b>、<b>KP</b>（「P」指教授之英譯「Professor」，為臺大醫學院內的習慣稱謂）。</p>\n<p>在2006年後開始在媒體曝光而知名，2014年參選臺北市市長選舉，並以「在野大聯盟」為號召，當選臺北市第15任直轄市市長，成為臺北市改制直轄市後首任無黨籍市長。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/5/51/%E6%9F%AF%E6%96%87%E5%93%B2_%2815972701052%29.jpg/300px-%E6%9F%AF%E6%96%87%E5%93%B2_%2815972701052%29.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%9F%AF%E6%96%87%E5%93%B2%E8%BD%9F%E7%94%A2%E7%99%BC%E5%B1%80%E9%95%B7-%E6%80%92%E9%A3%86-%E5%88%80%E5%B7%B2%E7%B6%93%E5%9C%A8%E8%84%96%E5%AD%90%E4%B8%8A-120253294.html" target="_blank"><b><b>柯文哲</b></b>轟產發局長 怒飆:刀已經在脖子上</a></h3>', '<div class="compText mt-5" ><p class=""><b>柯文哲</b>上任後首度到議會接受總質詢，今天(6月12日)最後一天，議員要他自己打分數... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">民視 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 20:02</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/8012/992148" target="_blank"><b><b>柯文哲</b></b>：遠雄曾提30億回饋金</a></h3>', '<div class="compText mt-5" ><p class="">台北市長<b>柯文哲</b>昨（13）日表示，大巨蛋問題用簡單的話說，就是貪婪財團和複雜政商關係所造成... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">06月14日 AM 03:13</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150614/520576.htm" target="_blank"><b><b>柯文哲</b></b>變身中華一番「小當家」 漫畫教做「巨蛋料理」</a></h3>', '<div class="compText mt-5" ><p class="">...大巨蛋」的小測驗漫畫。（圖／翻攝柯<b>文哲</b>臉書） 政治中心／台北報導 台北市長<b>柯文哲</b>13日參加「大巨蛋防災避難安全研討會」，他表示，市府對巨蛋案的首要考量就是... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月14日 PM 13:00</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, '吳季剛', '<p><b>吳季剛</b>（Jason Wu，1982年9月27日<span title="Template:BLP editintro">－</span>），旅居美國紐約的臺裔加拿大籍服裝設計師。</p>', '//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Jason_Wu_Shankbone_2009_Metropolitan_Opera.jpg/200px-Jason_Wu_Shankbone_2009_Metropolitan_Opera.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%90%B3%E5%AD%A3%E5%89%9B%E6%96%B0%E4%BD%9C%E7%B4%90%E7%B4%84%E4%BA%AE%E7%9B%B8-vogue%E4%B8%BB%E7%B7%A8%E5%8A%9B%E6%8C%BA-090700155.html" target="_blank"><b><b>吳季剛</b></b>新作紐約亮相　Vogue主編力挺</a></h3>', '<div class="compText mt-5" ><p class="">華裔設計師<b>吳季剛</b>，在紐約時裝週推出最新系列作品，Vogue雜誌主編安娜溫圖也到場看秀... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">TVBS via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">09月06日 PM 17:07</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%90%B3%E5%AD%A3%E5%89%9B%E6%96%B0%E4%BD%9C-%E9%A9%9A%E8%B1%94%E7%B4%90%E7%B4%84%E4%B8%96%E8%B2%BF%E4%B8%AD%E5%BF%83-024039931.html" target="_blank"><b><b>吳季剛</b></b>新作 驚豔紐約世貿中心</a></h3>', '<div class="compText mt-5" ><p class="">（中央社紐約10日綜合外電報導）台灣出生的時裝設計師<b>吳季剛</b>為知名品牌Hugo Boss操刀的新作，今天登上紐約世貿中心，也為... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">09月11日 AM 10:40</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E7%B4%90%E7%B4%84%E6%99%82%E8%A3%9D%E5%91%A8-1-boss%E6%89%93%E7%A0%B4%E6%80%A7%E5%88%A5%E7%95%8C%E7%B7%9A-jason-wu%E9%87%8D%E5%A1%91%E5%A5%B3%E6%80%A7%E7%BE%8E-215028736.html" target="_blank">紐約時裝周 1－BOSS打破性別界線 Jason Wu重塑女性美</a></h3>', '<div class="compText mt-5" ><p class="">中國時報【林哲良】 華裔設計師<b>吳季剛</b>（Jason Wu）一手執BOSS女裝藝術總監，一手掌自有品牌... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中時電子報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">03月01日 AM 05:50</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, '蔣經國', '<p><b>蔣經國</b>（1910年4月27日－1988年1月13日）字<b>建豐</b>，是中華民國政治家暨中國國民黨領導人。他是中國國民黨總裁及中華民國總統蔣中正的長子，1975年蔣中正逝世後的中國國民黨主席，同時也是中華民國第六、第七兩任總統，於1988年1月13日的第七任總統任期內逝世。</p>\n<p>在蘇聯期間，蔣經國接受正統馬列主義教育。回国后他成為三民主義忠實信徒。自1972年擔任行政院院長起，蔣經國於1978年接任中華民國總統，至1988年逝世為止。蔣經國在國際上孤立情勢中，大大發展經濟，解除台灣多年戒嚴，促進政治民主。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Chiang_Ching-kuo_1948.jpg/200px-Chiang_Ching-kuo_1948.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/blogs/society-watch/%E7%BF%92%E8%BF%91%E5%B9%B3%E7%B4%80%E5%BF%B5%E9%84%A7%E5%B0%8F%E5%B9%B3-%E9%A6%AC%E8%8B%B1%E4%B9%9D%E7%82%BA%E8%94%A3%E7%B6%93%E5%9C%8B%E5%81%9A%E4%BA%86%E4%BB%80%E9%BA%BC--055427555.html" target="_blank">習近平紀念鄧小平，馬英九為<b><b>蔣經國</b></b>做了什麼？</a></h3>', '<div class="compText mt-5" ><p class="">...已經22歲，他已加入旅歐共產黨組織，是成熟具歷練，信仰馬克思主義的熱血青年。<b>蔣經國</b>和鄧小平相遇那年，才要滿16歲。俄文名字「尼古拉」的他，早3個月，前一... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">社會觀察 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">08月13日 PM 13:54</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E4%B8%83%E6%B5%B7%E6%96%87%E5%8C%96%E5%9C%92%E5%8D%80%E5%8B%95%E5%B7%A5-%E9%A6%AC%E5%90%B3%E9%80%A3%E5%90%8C%E5%8F%B0-060150380.html" target="_blank">七海文化園區動工 馬吳連同台</a></h3>', '<div class="compText mt-5" ><p class="">前總統<b>蔣經國</b>的故居七海官邸，一向充滿神秘色彩，台北市政府與<b>蔣經國</b>基金會合作，計畫將... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">民視 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">08月28日 PM 14:01</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%9F%AF%E6%96%87%E5%93%B2-%E6%88%91%E8%AA%A0%E5%AF%A6%E8%AC%9B-%E8%94%A3%E7%B6%93%E5%9C%8B%E6%99%9A%E5%B9%B4%E5%8A%9F%E5%A4%A7%E6%96%BC%E9%81%8E-065011984.html" target="_blank">柯文哲：我誠實講 <b><b>蔣經國</b></b>晚年功大於過</a></h3>', '<div class="compText mt-5" ><p class="">新頭殼newtalk2014.09.03 林朝億/台北報導 對於昨晚在臉書肯定<b>蔣經國</b>時代官員操守等談話，無黨籍台北市長參選人柯文哲今（3）日堅持他的談話是... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">新頭殼 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">09月03日 PM 15:40</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, '尹衍樑', '<p><b>尹衍樑</b>（<b><span lang="en" xml:lang="en">Samuel Yin</span></b>，1950年8月16日<span title="Template:BLP editintro">－</span>），生於台灣台北，中華民國企業家，現任潤泰集團（Ruentex Financial Group）總裁、中國文化大學董事會董事。</p>\n<p>2008年富比世雜誌（Forbes）台灣富豪排行榜排名第30，2008年世界傑出華商協會組織評選全球華商500強排行榜第183名。2011年捐95%財產籌備唐獎，於2014年首度頒獎。</p>\n<p></p>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%B0%B9%E8%A1%8D%E6%A8%91%E5%B0%B1%E6%84%9B%E9%BB%91%E8%A5%AF%E8%A1%AB-%E6%BD%A4%E6%B3%B0%E9%9B%86%E5%9C%98%E5%88%B6%E6%9C%8D%E5%95%A6-034437699.html" target="_blank"><b><b>尹衍樑</b></b>就愛黑襯衫？ 潤泰集團制服啦！</a></h3>', '<div class="compText mt-5" ><p class=""><b>尹衍樑</b>幫魏家兄弟滅火。記者會上穿著一件黑色襯衫，不少民眾發現好眼熟，只要出席... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">東森新聞 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">10月18日 AM 11:44</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%B0%B9%E8%A1%8D%E6%A8%91-%E5%86%8D%E7%B5%A6%E9%AD%8F%E5%AE%B6-%E9%BB%9E%E6%99%82%E9%96%93-012356451.html" target="_blank"><b><b>尹衍樑</b></b>：再給魏家一點時間</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者江明晏台北15日電）潤泰集團總裁<b>尹衍樑</b>今天接受中央社記者獨家訪問時表示，食品安全革新委員會並沒有不做，他們(魏家... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">11月15日 AM 09:23</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%B0%B9%E8%A1%8D%E6%A8%91-%E8%91%89%E4%B8%96%E6%96%87%E6%A1%88-%E6%88%91%E6%AA%A2%E8%88%89%E7%9A%84-215034425--finance.html" target="_blank"><b><b>尹衍樑</b></b>：葉世文案 我檢舉的</a></h3>', '<div class="compText mt-5" ><p class="">工商時報【記者蔡惠芳╱台北報導】 潤泰集團總裁<b>尹衍樑</b>昨（17）日表示，營建署前署長葉世文涉及向企業主動索賄，這種事情「簡直是... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中時電子報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">12月18日 AM 05:50</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, '郭台銘', '<p><b>郭台銘</b>（英文名：<span lang="en" xml:lang="en"><b>Terry Guo</b></span>，1950年10月18日<span title="Template:BLP editintro">－</span>），台灣著名企業家，籍貫山西省晉城市澤州 ，生於台灣臺北縣板橋鎮（今新北市板橋區），板橋高中初中部、中國海事專科學校航運管理科(今台北海洋技術學院航海學系)畢業，台灣第一大企業鴻海精密、華人第一大民營科技集團富士康科技集團的董事長，以及永齡文教慈善基金會創辦人，有「台灣科技龍頭」之稱。他多年名列富比士億萬富翁列表中。2013年3月，富比士公佈全球富豪排行榜，郭台銘以51億美元，排名台灣第3。</p>\n<p></p>\n\n<p></p>\n', '//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Terry_Gou.jpg/220px-Terry_Gou.jpg', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/6/924444" target="_blank"><b><b>郭台銘</b></b>：實現工業4.0 以服務決勝</a></h3>', '<div class="compText mt-5" ><p class="">鴻海董事長<b>郭台銘</b>表示，集團持續往科技服務與商貿轉型，實現「工業4.0」智能製造的典範轉移... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">05月25日 PM 17:20</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E9%83%AD%E5%8F%B0%E9%8A%98-%E5%8F%83%E8%88%87%E4%B8%AD%E5%9C%8B%E8%A3%BD%E9%80%A02025%E7%B5%95%E4%B8%8D%E7%BC%BA%E5%B8%AD-043039802--finance.html" target="_blank"><b><b>郭台銘</b></b>：參與中國製造2025絕不缺席</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者鍾榮峰台北26日電）鴻海富士康集團總裁<b>郭台銘</b>表示，全力發展「雲移物大智網」結合機器人和網路自動駕駛車應用。富士康將... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">05月26日 PM 12:30</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/6/929115" target="_blank"><b><b>郭台銘</b></b>：服務所有大數據需求公司</a></h3>', '<div class="compText mt-5" ><p class="">鴻海富士康董事長<b>郭台銘</b>表示，鴻海能從最小零件做到整個數據中心，貴州綠色隧道數據中心有5000台伺服器... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">05月27日 PM 18:06</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, '王雪紅', '<p><b>王雪紅</b>（英文名：<span lang="en" xml:lang="en"><b>Cher Wang</b></span>，1958年9月14日<span title="Template:BLP editintro">－</span>），企業家，臺灣新北市新店區人，宏達電（HTC）創辦人、董事長及威盛電子公司董事長。上海科技大学信息学院院长。為臺塑集團董事長王永慶與二房楊嬌所生之么女，夫為威盛電子公司總經理陳文琦，有「台灣女首富」之稱。</p>\n<p>2011年王雪红进军媒体业，2011年1月26日联同陳國強入股香港无线电视，成为香港TVB和臺灣TVBS的非执行董事，以上為直至2015年4月23日。威盛電子在香港高等法院對代理商中聯控股提出商業仲裁無效的官司，呈堂證供顯示，王雪紅涉嫌協助中國政府壓制基本自由，打壓法輪功，王雪紅或威盛對此沒有出面反駁。而臺灣立委指出全球HTC手機使用者的個資，可能都被中國政府監聽、監控，官司仍在審理中。。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Cher_Wang_in_WEF.jpg/220px-Cher_Wang_in_WEF.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E7%8E%8B%E9%9B%AA%E7%B4%853%E5%A4%B1%E8%AA%A4-%E6%89%93%E9%80%A02%E8%82%A1%E7%8E%8B%E5%8F%88%E8%90%BD%E9%9B%A3-200900358--finance.html" target="_blank"><b><b>王雪紅</b></b>3失誤 打造2股王又落難</a></h3>', '<div class="compText mt-5" ><p class="">宏達電董事長<b>王雪紅</b>一生傳奇。她是經營之神王永慶的女兒，一手打造兩個台灣股王：威盛與宏達電... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月11日 AM 04:09</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://news.cnyes.com/20150613/%e7%8e%8b%e9%9b%aa%e7%b4%85%e7%99%bc%e5%85%a7%e9%83%a8%e4%bf%a1-HTC%e7%9a%84%e5%95%8f%e9%a1%8c%e5%9c%a8%e7%87%9f%e9%8a%b7%e8%80%8c%e9%9d%9e%e7%94%a2%e5%93%81-092154175758910.shtml" target="_blank"><b><b>王雪紅</b></b>發內部信：HTC的問題在營銷而非產品</a></h3>', '<div class="compText mt-5" ><p class="">...6月12日消息，據台灣“中央社”報導，為穩住內部員工信心，HTC董事長<b>王雪紅</b>在9日發出員工信。<b>王雪紅</b>表示，HTC的問題在營銷而非品，她在內部信... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">鉅亨網</span> <span class=" fc-2nd ml-5">06月13日 AM 09:37</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.nownews.com/n/2015/06/12/1717256" target="_blank">談宏達電<b><b>王雪紅</b></b> 黃茂雄：有點可惜，應該會調整過來！</a></h3>', '<div class="compText mt-5" ><p class="">記者許家禎／台北報導 宏達電<b>王雪紅</b>落難，不少企業大老送暖，像是富邦金控副董事長蔡明興、遠東集團董事長徐旭東... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">今日新聞網</span> <span class=" fc-2nd ml-5">06月12日 PM 12:33</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, '連勝文', '<p><b>連勝文</b>（1970年2月3日<span title="Template:BLP editintro">－</span>），出生於臺灣臺北市，中國國民黨籍政治人物，國民黨中央委員。曾祖父為連橫，祖父為連震東，父親為連戰。2014年參選臺北市長失利。</p>\n<p></p>\n\n<p></p>\n', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/blogs/society-watch/%E9%80%A3%E5%8B%9D%E6%96%87%E7%9C%9F%E7%9A%84%E4%BB%A5%E7%82%BA%E7%A4%BE%E5%AD%90%E5%B3%B6%E6%98%AF-%E5%B3%B6----074148655.html" target="_blank"><b><b>連勝文</b></b>真的以為社子島是「島」？！</a></h3>', '<div class="compText mt-5" ><p class="">都說<b>連勝文</b>競選幕僚團隊太差；<b>連勝文</b>也口口聲聲愈挫愈勇，重整旗鼓再出發求逆轉選情... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">社會觀察 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">07月29日 PM 15:41</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/blogs/society-watch/%E9%80%A3%E5%8B%9D%E6%96%87%E6%98%AF%E8%87%AA%E7%88%86%E9%86%9C%E8%81%9E-%E9%82%84%E6%98%AF%E5%9C%93%E8%AC%8A--062032232.html" target="_blank"><b><b>連勝文</b></b>是自爆醜聞？還是圓謊？</a></h3>', '<div class="compText mt-5" ><p class=""><b>連勝文</b>9月21日與PTT鄉民有約，在鄉民步步逼問之下，驚爆出兩個震撼台北市民... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">社會觀察 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">09月23日 PM 14:20</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/blogs/society-watch/%E9%80%A3%E5%8B%9D%E6%96%87%E6%82%B2%E5%8A%87%E8%A6%81%E6%80%AA%E8%AA%B0--075232770.html" target="_blank"><b><b>連勝文</b></b>悲劇要怪誰？</a></h3>', '<div class="compText mt-5" ><p class="">選到最後八天，<b>連勝文</b>越選越不開心，總在抱怨選舉走了樣。11月18日<b>連勝文</b>推出街舞廣告，最後字幕... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">社會觀察 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">11月21日 PM 15:52</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, '蔡英文', '<p><b>蔡英文</b>（英語：<b>Tsai Ing-wen</b>，1956年8月31日<span title="Template:BLP editintro">－</span>），臺灣政治人物及學者，故鄉屏東縣枋山鄉楓港，出生於臺北市中山區。 曾任行政院副院長，立法院立法委員，現任民主進步黨主席。國立臺灣大學法學院学士、美國康乃爾大學法學碩士和英國倫敦政治經濟學院法學博士学位。 在英國倫敦政經學院取得博士學位後，於東吳大學、政治大學擔任法學教授，專長為國際貿易法、反托拉斯法等，擔任教職期間亦曾受聘於中央銀行和行政院經濟部擔任GATT與WTO的談判顧問。在李登輝政府期間曾擔任智慧財產局委員和國安會經濟諮詢委員，陳水扁政府期間任行政院政務委員、陸委會主任委員及行政院副院長。</p>\n<p>2004年加入民主進步黨，接受提名為民進黨不分區立法委員。2008年首次當選第12屆民主進步黨主席，成為臺灣主要政黨中第一位女性黨主席，並於2010年當選連任第13屆民主進步黨主席。2012年第一次代表民進黨參選中華民國第13届總統選舉，成為中華民國史上首位女性總統候選人，唯敗於競選連任的馬英九。2014年以歷屆最高票及第三度當選第14屆民主進步黨主席。2016年將第二次代表民進黨參選中華民國第14届總統選舉。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Tsai_Ing-Wen_Cropped.png/230px-Tsai_Ing-Wen_Cropped.png', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/2016-093028998.html" target="_blank"><b><b>蔡英文</b></b>競選2016《台灣美樂地》歌曲 今開始徵選</a></h3>', '<div class="compText mt-5" ><p class="">民進黨主席暨總統參選人<b>蔡英文</b>今(12)日下午出席「台灣美樂地」<b>蔡英文</b>競選專輯《台灣美樂地》（Taiwan... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">民報 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 17:30</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.nownews.com/n/2015/06/12/1717628" target="_blank"><b><b>蔡英文</b></b>競選專輯《台灣美樂地》 向全民徵曲</a></h3>', '<div class="compText mt-5" ><p class="">記者邱明玉／台北報導 民進黨主席暨總統參選人<b>蔡英文</b>今（12）日下午出席<b>蔡英文</b>競選專輯《台灣美樂地》（Taiwan Melody... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">今日新聞網</span> <span class=" fc-2nd ml-5">06月12日 PM 18:25</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E8%94%A1%E8%8B%B1%E6%96%87%E8%A8%AA%E5%B7%A5%E5%95%86%E5%8D%94%E9%80%B2%E6%9C%83-%E7%AB%AF%E5%87%BA3%E5%A4%A7%E7%B6%93%E6%BF%9F%E6%96%B9%E6%A1%88-%E5%8D%80%E5%9F%9F%E6%95%B4%E5%90%88%E9%A6%96%E9%81%B8tpp-112137769.html" target="_blank"><b><b>蔡英文</b></b>訪工商協進會 端出3大經濟方案 區域整合首選TPP</a></h3>', '<div class="compText mt-5" ><p class="">民進黨2016年總統參選人<b>蔡英文</b>(左2)拜訪工商協進會。(圖：工商協進會提供) 民進黨2016年總統參選人<b>蔡英文</b>今(12... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">鉅亨網 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 19:21</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `candidate` (`id`, `user_id`, `name`, `brief`, `img`, `news_title_1`, `news_abs_1`, `news_press_1`, `news_title_2`, `news_abs_2`, `news_press_2`, `news_title_3`, `news_abs_3`, `news_press_3`, `news_title_4`, `news_abs_4`, `news_press_4`, `news_title_5`, `news_abs_5`, `news_press_5`) VALUES
(22, NULL, '蔡康永', '<p><b>蔡康永</b>（英語：<span lang="en" xml:lang="en"><b>Kevin Tsai</b></span>，1962年3月1日<span title="Template:BLP editintro">－</span>），祖籍浙江寧波，出生於臺北，著名的台灣節目主持人及作家，1990年從加州大學洛杉磯分校戲劇電影及電視學院 編導製作碩士畢業。</p>\n<p></p>\n\n<p></p>\n', '//upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/220px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://www.nownews.com/n/2015/05/29/1705136" target="_blank"><b><b>蔡康永</b></b>圓電影夢 小S、林志玲吃吃助陣</a></h3>', '<div class="compText mt-5" ><p class="">娛樂中心／綜合報導 <b>蔡康永</b>一直懷抱電影夢，曾說想找小S（徐熙娣）和林志玲合作，2014年其編導的... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">今日新聞網</span> <span class=" fc-2nd ml-5">05月29日 AM 11:47</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%BA%B7%E7%86%99%E4%BE%86%E4%BA%86%E5%B0%87%E5%81%9C%E6%92%AD-%E8%94%A1%E5%BA%B7%E6%B0%B8%E5%9A%B4%E6%AD%A3%E5%90%A6%E8%AA%8D-%E8%AC%A0%E5%82%B3-061517732.html" target="_blank">康熙來了將停播？ <b><b>蔡康永</b></b>嚴正否認：謠傳</a></h3>', '<div class="compText mt-5" ><p class="">外傳藝人<b>蔡康永</b>，被大陸網路節目已1億五千萬台幣的天價挖角，原本主持的康熙來了，可能在24... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">東森新聞 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">10月21日 PM 14:15</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E5%B0%8Fs%E8%87%89%E7%A0%B4%E7%9B%B8-%E4%B8%8B%E5%B7%B4%E8%A6%8B%E7%B4%85-%E7%9C%BC%E8%A7%92%E5%8F%88%E9%A9%9A%E8%A6%8B%E7%98%80%E9%9D%92-045354657.html" target="_blank">小S臉破相 下巴見紅、眼角又驚見瘀青</a></h3>', '<div class="compText mt-5" ><p class="">小S<b>蔡康永</b>主持的「康熙來了」，上周五兩人首度缺席，改由納豆、阿雅代班，原本還遭... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">東森新聞 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">05月12日 PM 12:53</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, '蔡依林', '<p><br></p>\n<p><b>蔡依林</b>（<b><span>英语：<span lang="en" xml:lang="en">Jolin Tsai</span></span></b>，1980年9月15日<span title="Template:BLP editintro">－</span>），出生於中華民國臺北縣新莊市（今新北市新莊區），是臺灣著名華語流行音樂女歌手，剛出道被譽為華語「四小天后」之一，入行多年被公认为华语乐坛新世纪至今唱片销量最高和最具代表性的女歌手之一，亦被封为「亞洲流行天后」。蔡依林高中畢業於臺北市立景美女子高級中學，後以推甄第一名的成績進入輔仁大學就讀，2003年獲得英國語文學系學士學位。</p>\n<p>蔡依林於1998年MTV音樂台舉辦的歌唱比賽「新生卡位戰」中奪得冠軍，後與唱片公司環球音樂簽約，翌年以首張專輯《1019》出道，其發行的數張專輯亦接連獲得商業迴響與音樂獎項的肯定。蔡依林更打破唱跳歌手紀錄，憑藉專輯《看我72變》、《舞孃》、《Muse》和《呸》數度入圍臺灣金曲獎最佳國語女歌手獎與最佳國語專輯獎；2007年憑藉專輯《舞孃》獲得第18屆臺灣金曲獎最佳國語女歌手獎；2013年憑藉專輯《Muse》中的歌曲〈大藝術家〉獲得第24屆臺灣金曲獎最佳年度歌曲獎，成為史上首位憑藉舞曲獲得該獎項的歌手。迄今蔡依林共發行13張國語專輯，全亞洲總銷量超過2300萬張，是2000年後亞洲地區唱片最暢銷的女歌手之一。</p>\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Jolin_Tsai_MAA.jpg/220px-Jolin_Tsai_MAA.jpg', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150613/520344.htm" target="_blank"><b><b>蔡依林</b></b>安可場2萬2000張票 上線才17分鐘就賣光光了！</a></h3>', '<div class="compText mt-5" ><p class="">影劇中心／綜合報導 天后<b>蔡依林</b>（Jolin）5月再度登上小巨蛋開唱，一連唱了4天讓歌迷嗨翻了。不過... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月13日 PM 15:10</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150613/520485.htm" target="_blank">姐好浪漫！<b><b>蔡依林</b></b>柏林圍牆哼10年前「好想你～我愛你」</a></h3>', '<div class="compText mt-5" ><p class="">記者游雁双／綜合報導 天后<b>蔡依林</b>（Jolin）5月底舉辦巡迴演唱會，連續4天high翻小巨蛋現場，活動結束後... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月13日 PM 22:12</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/7260/989980" target="_blank">歌后遺珠不失落 Jolin對專輯超有信心</a></h3>', '<div class="compText mt-5" ><p class="">由<b>蔡依林</b>Jolin完全主導的「Play」專輯在今年金曲獎，總共入圍9項大獎... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">06月12日 PM 22:07</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, '翟本喬', '<p><b>翟本喬</b>（<span>英语：<span lang="en" xml:lang="en"><b>Ben Jai</b></span></span>，1966年<span title="Template:BLP editintro">－</span>），生於臺灣臺北，臺灣工程師，曾經讀過了國語實小、臺北市建國高中、是臺灣大學數學系的第一屆的大學保送生，紐約大學電腦科學系博士。曾經工作於貝爾實驗室、Google公司、台達電雲端相關部門。2013年，離開台達電，並自行創設雲端科技公司和沛科技，擔任該公司負責人，將企業儲存雲改頭換面，另行推出「臺灣蒐證雲」<span id="refTag-cite_ref-sup"></span>。2014年12月，被柯文哲遴選為台北市政府市政顧問之一。</p>\n<p></p>', 'http://upload.wikimedia.org/wikipedia/zh/thumb/7/7e/Replace_this_image_male.svg/150px-Replace_this_image_male.svg.png', '<h3 class="title"><a class=" fz-m" href="http://udn.com/news/story/1/974963" target="_blank"><b><b>翟本喬</b></b>：支持洪秀柱代表國民黨選總統</a></h3>', '<div class="compText mt-5" ><p class="">...翟本<b>喬</b>今天以「我為什麼支持洪秀柱代表國民黨參選總統」為題發表網誌文章。 <b>翟本喬</b>發文如下： 洪秀柱這次的政見發表，內容正是國民黨基於本身政黨立場該做的事... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">聯合新聞網</span> <span class=" fc-2nd ml-5">06月12日 PM 14:50</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%8C%BA%E6%B4%AA%E7%A7%80%E6%9F%B1%E7%A0%B4%E7%A3%9A%E7%AB%8B%E5%A0%B4%E9%81%AD%E8%B3%AA%E7%96%91-%E7%BF%9F%E6%9C%AC%E5%96%AC3qa-%E8%AA%8D%E4%BA%8B%E4%B8%8D%E8%AA%8D%E9%BB%A8-042501619.html" target="_blank">挺洪秀柱破磚立場遭質疑 <b><b>翟本喬</b></b>3QA：認事不認黨</a></h3>', '<div class="compText mt-5" ><p class="">...提名，和沛科技總經理「翟神」翟本喬日前發文力挺，有人質疑他的政治色彩，<b>翟本喬</b>強調，「我本來就認事不認黨」。<b>翟本喬</b>在臉書發文說，洪秀柱這次的政見發表... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">NOWnews via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 12:25</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150612/519682.htm" target="_blank">專訪／官員怨上網被圍剿 <b><b>翟本喬</b></b>：應表達出真正的自我</a></h3>', '<div class="compText mt-5" ><p class="">文／記者賴于榛 被行政院長毛治國稱為網路大神、和沛科技總經理的<b>翟本喬</b>，先前幫府、院都上了一堂網路課，他接受 專訪時指出，有署長級的官員抱怨... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月12日 PM 12:47</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, '王金平', '<p><b>王金平</b>（1941年3月17日<span title="Template:BLP editintro">－</span>），臺灣政治人物，生於日治臺灣高雄州岡山郡路竹庄（今高雄市路竹區）。曾任中國國民黨副主席、立法院副院長，現任中華民國立法院院長。</p>\r\n<p>自1975年起已連續參與12次立法院公民選舉（含全國不分區席次），是最資深的現任立委；自1999年起擔任院長，是國會全面改選後迄今任期最長的國會議長。</p>\r\n<p></p>\r\n\r\n<p></p>\r\n', '//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Wang_Jin-pyng%2C_President_of_the_Legislative_Yuan_%287172294519%29.jpg/240px-Wang_Jin-pyng%2C_President_of_the_Legislative_Yuan_%287172294519%29.jpg', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E7%8E%8B%E9%87%91%E5%B9%B3-%E7%A5%9D%E7%A6%8F%E6%B4%AA%E7%A7%80%E6%9F%B1%E6%B0%91%E8%AA%BF%E8%83%BD%E5%A4%A0%E9%81%8E%E9%97%9C-040339785.html" target="_blank"><b><b>王金平</b></b>：祝福洪秀柱民調能夠過關</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者溫貴香台北13日電）立法院長<b>王金平</b>今天公開祝福立法院副院長洪秀柱的總統初選民調能夠順利過關；並說，民調結果... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月13日 PM 12:03</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E7%8E%8B%E9%87%91%E5%B9%B3%E8%87%B4%E9%9B%BB%E6%B4%AA%E7%A7%80%E6%9F%B1%E6%81%AD%E5%96%9C-%E4%B8%8D%E8%AB%87%E7%BE%A9%E4%B8%8D%E5%AE%B9%E8%BE%AD-054459631.html" target="_blank"><b><b>王金平</b></b>致電洪秀柱恭喜 不談義不容辭</a></h3>', '<div class="compText mt-5" ><p class="">（中央社記者陳偉婷、程啟峰台北14日電）立法院長<b>王金平</b>今天表示，有致電祝福和恭喜通過中國國民黨總統初選門檻的立法院副院長洪秀柱... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央社 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月14日 PM 13:44</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/blogs/society-watch/%E7%8E%8B%E9%87%91%E5%B9%B3-%E7%BE%A9%E4%B8%8D%E5%AE%B9%E8%BE%AD-%E7%9A%84%E5%85%A7%E5%A4%96%E9%83%A8%E6%84%8F%E7%BE%A9-080238692.html" target="_blank"><b><b>王金平</b></b>「義不容辭」的內外部意義</a></h3>', '<div class="compText mt-5" ><p class="">...提名民調比例由85%比15%改成50%比50%的制度，惹得黨內雞犬不寧，一向穩重的<b>王金平</b>突然在初選階段跳出來說義不容辭，吳敦義也透過週刊釋放了粉絲團的批王酸洪... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">社會觀察 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 16:02</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, '洪秀柱', '<p><b>洪秀柱</b>（1948年4月7日<span title="Template:BLP editintro">－</span>）女，出生於臺北縣（今新北市），籍貫浙江餘姚，中國國民黨籍政治人物，文化大學法律系、美國<span><span>密蘇里州立東北大學</span></span>教育碩士畢業，曾任中國國民黨副秘書長（兼任考核紀律委員會主任委員）、副主席。現任立法院副院長、中國文化大學董事會董事。因是教育界出身，所以較關注教育議題。</p>\r\n<p>中國國民黨於2015年6月14日公布民調結果，洪秀柱以46.203％的平均支持率跨越30％門檻，可望獲得中國國民黨全代會提名代表國民黨參選2016年中華民國總統選舉。</p>\r\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Hung-shiu-chu-3by2.png/190px-Hung-shiu-chu-3by2.png', '<h3 class="title"><a class=" fz-m" href="http://www.appledaily.com.tw/realtimenews/article/new/20150615/629617//" target="_blank"><b><b>洪秀柱</b></b>優點像柯P？ 名嘴批沈富雄全錯</a></h3>', '<div class="compText mt-5" ><p class="">立法院副院長<b>洪秀柱</b>可望代表國民黨參選明年總統大選。民進黨前立委沈富雄指出，「<b>洪秀柱</b>跟柯文哲... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">蘋果日報</span> <span class=" fc-2nd ml-5">06月15日 PM 21:52</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%B4%AA%E7%A7%80%E6%9F%B1%E5%89%AF%E6%89%8B%E6%89%BE%E8%AA%B0-%E5%82%B3%E6%9C%B1%E7%AB%8B%E5%80%AB%E5%A9%89%E6%8B%92%E9%82%80%E7%B4%84-044613984.html" target="_blank"><b><b>洪秀柱</b></b>副手找誰？ 傳朱立倫婉拒邀約</a></h3>', '<div class="compText mt-5" ><p class="">立法院副院長<b>洪秀柱</b>民調出爐之後，外界最關心的就是他的副手人選，<b>洪秀柱</b>坦承自己詢問過朱立倫... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">東森新聞 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月15日 PM 12:46</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E6%B4%AA%E7%A7%80%E6%9F%B1-%E6%9C%B1%E7%AB%8B%E5%80%AB%E7%84%A1%E6%84%8F%E9%A1%98%E4%BB%BB%E5%89%AF%E6%89%8B-022800263.html" target="_blank"><b><b>洪秀柱</b></b>：朱立倫無意願任副手</a></h3>', '<div class="compText mt-5" ><p class="">立法院副院長<b>洪秀柱</b>通過國民黨黨內初選民調門檻，她今天(15日)表示，昨天中午和國民黨主席朱立倫... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">中央廣播電台 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月15日 AM 10:28</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, '馬英九', '<p><b>馬英九</b>（英語：<b><span lang="en" xml:lang="en">Ma Ying-jeou</span></b>，1950年7月13日<span title="Template:BLP editintro">－</span>），中華民國政治人物及中華民國第12任及現任總統。籍贯湖南衡山。出生於香港，1952年隨雙親定居臺灣， 臺灣大學法律學士、紐約大學法學碩士、哈佛大學法學博士。歷任總統府第一局副局長、中國國民黨副秘書長、研考會主任委員、陸委會副主任委員、法務部部長、臺北市市長、前中國國民黨主席。</p>\r\n<p></p>', '//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Yingjeou_Ma_Cropped.jpg/270px-Yingjeou_Ma_Cropped.jpg', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150615/520894.htm" target="_blank">「我們大人沒有盡到責任」 <b><b>馬英九</b></b>哽咽談北投割喉案</a></h3>', '<div class="compText mt-5" ><p class="">▲出席警察節慶祝大會，<b>馬英九</b>一度哽咽談北投割喉案。（圖／記者陳明仁攝） 記者賴于榛／台北報導 總統<b>馬英九</b>... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月15日 AM 11:40</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://tw.news.yahoo.com/%E9%A6%AC%E8%8B%B1%E4%B9%9D%E6%8A%95%E6%9B%B8-%E8%8F%AF%E7%88%BE%E8%A1%97%E6%97%A5%E5%A0%B1-%E6%8F%90%E5%80%A1%E5%8D%97%E6%B5%B7%E5%92%8C%E5%B9%B3-%E9%A2%A8%E5%82%B3%E5%AA%92-091400479.html" target="_blank"><b><b>馬英九</b></b>投書《華爾街日報》 提倡南海和平 – 風傳媒</a></h3>', '<div class="compText mt-5" ><p class="">總統<b>馬英九</b>以「中華民國總統」署名投書《華爾街日報》，闡述「南海和平倡議」的內涵... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">風傳媒 via Yahoo! 奇摩新聞</span> <span class=" fc-2nd ml-5">06月12日 PM 17:14</span> </p></div>', '<h3 class="title"><a class=" fz-m" href="http://www.ettoday.net/news/20150615/520947.htm" target="_blank">警察節再次肯定王卓鈞 <b><b>馬英九</b></b>重述「卿雲勳章」授詞</a></h3>', '<div class="compText mt-5" ><p class="">記者賴于榛／台北報導 總統<b>馬英九</b>15日出席警察節慶祝大會，致詞時感謝警察維護治安、整頓交通的努力，也感謝... </p></div>', '<div class="compText mt-5" ><p class=""><span class=" fc-12th">ETtoday東森新聞雲</span> <span class=" fc-2nd ml-5">06月15日 PM 12:43</span> </p></div>', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `fight_process`
--

CREATE TABLE IF NOT EXISTS `fight_process` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `winner_id` int(10) unsigned NOT NULL,
  `loser_id` int(10) unsigned NOT NULL,
  `creattime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=496 ;

--
-- 資料表的匯出資料 `fight_process`
--

INSERT INTO `fight_process` (`id`, `user_id`, `winner_id`, `loser_id`, `creattime`) VALUES
(262, 1, 23, 12, '2015-06-11 16:48:21'),
(263, 1, 23, 9, '2015-06-11 16:48:21'),
(264, 1, 23, 13, '2015-06-11 16:48:21'),
(265, 1, 23, 21, '2015-06-11 16:48:21'),
(266, 1, 23, 6, '2015-06-11 16:48:21'),
(267, 1, 23, 3, '2015-06-11 16:48:21'),
(268, 1, 23, 15, '2015-06-11 16:48:21'),
(269, 1, 7, 23, '2015-06-11 16:48:21'),
(270, 1, 7, 5, '2015-06-11 16:48:21'),
(271, 1, 8, 6, '2015-06-11 16:48:34'),
(272, 1, 7, 8, '2015-06-11 16:48:34'),
(273, 1, 9, 7, '2015-06-11 16:48:34'),
(274, 1, 24, 9, '2015-06-11 16:48:34'),
(275, 1, 12, 24, '2015-06-11 16:48:34'),
(276, 1, 3, 12, '2015-06-11 16:48:34'),
(277, 1, 13, 3, '2015-06-11 16:48:34'),
(278, 1, 4, 13, '2015-06-11 16:48:34'),
(279, 1, 16, 4, '2015-06-11 16:48:34'),
(280, 1, 21, 15, '2015-06-11 16:48:43'),
(281, 1, 21, 13, '2015-06-11 16:48:43'),
(282, 1, 21, 24, '2015-06-11 16:48:43'),
(283, 1, 21, 16, '2015-06-11 16:48:43'),
(284, 1, 21, 6, '2015-06-11 16:48:43'),
(285, 1, 21, 8, '2015-06-11 16:48:43'),
(286, 1, 21, 22, '2015-06-11 16:48:43'),
(287, 1, 21, 20, '2015-06-11 16:48:43'),
(288, 1, 21, 12, '2015-06-11 16:48:43'),
(289, 1, 12, 13, '2015-06-14 08:01:22'),
(290, 1, 12, 15, '2015-06-14 08:01:22'),
(291, 1, 12, 24, '2015-06-14 08:01:22'),
(292, 1, 12, 20, '2015-06-14 08:01:22'),
(293, 1, 12, 6, '2015-06-14 08:01:22'),
(294, 1, 11, 12, '2015-06-14 08:01:22'),
(295, 1, 11, 5, '2015-06-14 08:01:22'),
(296, 1, 11, 10, '2015-06-14 08:01:22'),
(297, 1, 11, 9, '2015-06-14 08:01:22'),
(298, 1, 23, 21, '2015-06-14 08:04:48'),
(299, 1, 11, 23, '2015-06-14 08:04:48'),
(300, 1, 11, 15, '2015-06-14 08:04:48'),
(301, 1, 5, 11, '2015-06-14 08:04:48'),
(302, 1, 1, 5, '2015-06-14 08:04:48'),
(303, 1, 7, 1, '2015-06-14 08:04:48'),
(304, 1, 7, 16, '2015-06-14 08:04:48'),
(305, 1, 7, 24, '2015-06-14 08:04:48'),
(306, 1, 7, 20, '2015-06-14 08:04:48'),
(307, 1, 21, 16, '2015-06-14 08:05:17'),
(308, 1, 21, 20, '2015-06-14 08:05:17'),
(309, 1, 21, 9, '2015-06-14 08:05:17'),
(310, 1, 21, 10, '2015-06-14 08:05:17'),
(311, 1, 21, 6, '2015-06-14 08:05:17'),
(312, 1, 13, 21, '2015-06-14 08:05:17'),
(313, 1, 17, 13, '2015-06-14 08:05:17'),
(314, 1, 17, 1, '2015-06-14 08:05:17'),
(315, 1, 17, 15, '2015-06-14 08:05:17'),
(316, 1, 20, 6, '2015-06-14 08:47:42'),
(317, 1, 20, 3, '2015-06-14 08:47:42'),
(318, 1, 20, 17, '2015-06-14 08:47:42'),
(319, 1, 12, 20, '2015-06-14 08:47:42'),
(320, 1, 1, 12, '2015-06-14 08:47:42'),
(321, 1, 9, 1, '2015-06-14 08:47:42'),
(322, 1, 16, 9, '2015-06-14 08:47:42'),
(323, 1, 15, 16, '2015-06-14 08:47:42'),
(324, 1, 5, 15, '2015-06-14 08:47:42'),
(325, 1, 23, 5, '2015-06-14 12:08:51'),
(326, 1, 23, 8, '2015-06-14 12:08:51'),
(327, 1, 12, 23, '2015-06-14 12:08:51'),
(328, 1, 12, 1, '2015-06-14 12:08:51'),
(329, 1, 12, 10, '2015-06-14 12:08:51'),
(330, 1, 15, 12, '2015-06-14 12:08:51'),
(331, 1, 9, 15, '2015-06-14 12:08:51'),
(332, 1, 9, 24, '2015-06-14 12:08:51'),
(333, 1, 9, 11, '2015-06-14 12:08:51'),
(334, 1, 17, 15, '2015-06-14 12:09:44'),
(335, 1, 17, 1, '2015-06-14 12:09:44'),
(336, 1, 17, 11, '2015-06-14 12:09:44'),
(337, 1, 17, 4, '2015-06-14 12:09:44'),
(338, 1, 17, 9, '2015-06-14 12:09:44'),
(339, 1, 17, 8, '2015-06-14 12:09:44'),
(340, 1, 17, 7, '2015-06-14 12:09:44'),
(341, 1, 17, 3, '2015-06-14 12:09:44'),
(342, 1, 17, 23, '2015-06-14 12:09:44'),
(343, 1, 11, 17, '2015-06-14 12:10:10'),
(344, 1, 11, 6, '2015-06-14 12:10:10'),
(345, 1, 11, 3, '2015-06-14 12:10:10'),
(346, 1, 11, 20, '2015-06-14 12:10:10'),
(347, 1, 11, 4, '2015-06-14 12:10:10'),
(348, 1, 11, 8, '2015-06-14 12:10:10'),
(349, 1, 11, 10, '2015-06-14 12:10:10'),
(350, 1, 11, 7, '2015-06-14 12:10:10'),
(351, 1, 11, 15, '2015-06-14 12:10:10'),
(352, 1, 10, 20, '2015-06-14 12:16:03'),
(353, 1, 10, 13, '2015-06-14 12:16:03'),
(354, 1, 10, 24, '2015-06-14 12:16:03'),
(355, 1, 10, 23, '2015-06-14 12:16:03'),
(356, 1, 10, 5, '2015-06-14 12:16:03'),
(357, 1, 10, 17, '2015-06-14 12:16:03'),
(358, 1, 10, 4, '2015-06-14 12:16:03'),
(359, 1, 10, 8, '2015-06-14 12:16:03'),
(360, 1, 10, 15, '2015-06-14 12:16:03'),
(361, 1, 21, 24, '2015-06-14 12:58:28'),
(362, 1, 21, 3, '2015-06-14 12:58:28'),
(363, 1, 13, 21, '2015-06-14 12:58:28'),
(364, 1, 13, 1, '2015-06-14 12:58:28'),
(365, 1, 13, 20, '2015-06-14 12:58:28'),
(366, 1, 13, 16, '2015-06-14 12:58:28'),
(367, 1, 13, 9, '2015-06-14 12:58:28'),
(368, 1, 23, 13, '2015-06-14 12:58:28'),
(369, 1, 7, 23, '2015-06-14 12:58:28'),
(370, 1, 9, 11, '2015-06-14 12:58:37'),
(371, 1, 5, 9, '2015-06-14 12:58:37'),
(372, 1, 23, 5, '2015-06-14 12:58:37'),
(373, 1, 23, 15, '2015-06-14 12:58:37'),
(374, 1, 4, 23, '2015-06-14 12:58:37'),
(375, 1, 4, 3, '2015-06-14 12:58:37'),
(376, 1, 4, 17, '2015-06-14 12:58:37'),
(377, 1, 4, 7, '2015-06-14 12:58:37'),
(378, 1, 4, 1, '2015-06-14 12:58:37'),
(379, 1, 6, 3, '2015-06-14 14:23:00'),
(380, 1, 6, 5, '2015-06-14 14:23:00'),
(381, 1, 6, 8, '2015-06-14 14:23:00'),
(382, 1, 6, 20, '2015-06-14 14:23:00'),
(383, 1, 6, 12, '2015-06-14 14:23:01'),
(384, 1, 6, 24, '2015-06-14 14:23:01'),
(385, 1, 6, 4, '2015-06-14 14:23:01'),
(386, 1, 6, 1, '2015-06-14 14:23:01'),
(387, 1, 6, 21, '2015-06-14 14:23:01'),
(388, 1, 3, 5, '2015-06-14 14:23:08'),
(389, 1, 3, 4, '2015-06-14 14:23:08'),
(390, 1, 3, 15, '2015-06-14 14:23:08'),
(391, 1, 3, 8, '2015-06-14 14:23:08'),
(392, 1, 3, 12, '2015-06-14 14:23:08'),
(393, 1, 3, 21, '2015-06-14 14:23:08'),
(394, 1, 3, 10, '2015-06-14 14:23:08'),
(395, 1, 3, 7, '2015-06-14 14:23:08'),
(396, 1, 3, 6, '2015-06-14 14:23:08'),
(397, 1, 20, 3, '2015-06-14 14:23:36'),
(398, 1, 15, 20, '2015-06-14 14:23:36'),
(399, 1, 11, 15, '2015-06-14 14:23:36'),
(400, 1, 7, 11, '2015-06-14 14:23:36'),
(401, 1, 6, 7, '2015-06-14 14:23:36'),
(402, 1, 22, 6, '2015-06-14 14:23:36'),
(403, 1, 10, 22, '2015-06-14 14:23:36'),
(404, 1, 10, 23, '2015-06-14 14:23:36'),
(405, 1, 10, 16, '2015-06-14 14:23:36'),
(406, 1, 3, 22, '2015-06-14 14:36:49'),
(407, 1, 6, 3, '2015-06-14 14:36:49'),
(408, 1, 6, 23, '2015-06-14 14:36:49'),
(409, 1, 6, 15, '2015-06-14 14:36:49'),
(410, 1, 6, 10, '2015-06-14 14:36:49'),
(411, 1, 6, 20, '2015-06-14 14:36:49'),
(412, 1, 6, 16, '2015-06-14 14:36:49'),
(413, 1, 6, 5, '2015-06-14 14:36:49'),
(414, 1, 6, 17, '2015-06-14 14:36:49'),
(415, 1, 9, 22, '2015-06-14 14:49:42'),
(416, 1, 9, 11, '2015-06-14 14:49:42'),
(417, 1, 9, 21, '2015-06-14 14:49:42'),
(418, 1, 20, 9, '2015-06-14 14:49:42'),
(419, 1, 1, 20, '2015-06-14 14:49:42'),
(420, 1, 5, 1, '2015-06-14 14:49:42'),
(421, 1, 16, 5, '2015-06-14 14:49:42'),
(422, 1, 10, 16, '2015-06-14 14:49:42'),
(423, 1, 4, 10, '2015-06-14 14:49:42'),
(424, 1, 23, 16, '2015-06-14 15:14:39'),
(425, 1, 23, 9, '2015-06-14 15:14:39'),
(426, 1, 23, 8, '2015-06-14 15:14:39'),
(427, 1, 23, 4, '2015-06-14 15:14:39'),
(428, 1, 23, 24, '2015-06-14 15:14:39'),
(429, 1, 23, 20, '2015-06-14 15:14:39'),
(430, 1, 23, 7, '2015-06-14 15:14:39'),
(431, 1, 23, 1, '2015-06-14 15:14:39'),
(432, 1, 23, 17, '2015-06-14 15:14:39'),
(433, 1, 7, 6, '2015-06-14 15:23:32'),
(434, 1, 7, 12, '2015-06-14 15:23:32'),
(435, 1, 7, 20, '2015-06-14 15:23:32'),
(436, 1, 7, 21, '2015-06-14 15:23:32'),
(437, 1, 7, 8, '2015-06-14 15:23:32'),
(438, 1, 7, 11, '2015-06-14 15:23:32'),
(439, 1, 7, 22, '2015-06-14 15:23:32'),
(440, 1, 5, 7, '2015-06-14 15:23:32'),
(441, 1, 24, 5, '2015-06-14 15:23:32'),
(442, 1, 17, 7, '2015-06-14 15:23:41'),
(443, 1, 17, 12, '2015-06-14 15:23:41'),
(444, 1, 17, 9, '2015-06-14 15:23:41'),
(445, 1, 5, 17, '2015-06-14 15:23:41'),
(446, 1, 5, 6, '2015-06-14 15:23:41'),
(447, 1, 5, 3, '2015-06-14 15:23:41'),
(448, 1, 5, 24, '2015-06-14 15:23:41'),
(449, 1, 5, 8, '2015-06-14 15:23:41'),
(450, 1, 5, 15, '2015-06-14 15:23:41'),
(451, 1, 23, 3, '2015-06-14 15:23:50'),
(452, 1, 23, 8, '2015-06-14 15:23:50'),
(453, 1, 23, 24, '2015-06-14 15:23:50'),
(454, 1, 23, 16, '2015-06-14 15:23:50'),
(455, 1, 23, 15, '2015-06-14 15:23:50'),
(456, 1, 23, 10, '2015-06-14 15:23:50'),
(457, 1, 21, 23, '2015-06-14 15:23:50'),
(458, 1, 21, 12, '2015-06-14 15:23:50'),
(459, 1, 21, 9, '2015-06-14 15:23:50'),
(460, 1, 13, 15, '2015-06-14 15:24:32'),
(461, 1, 21, 13, '2015-06-14 15:24:32'),
(462, 1, 21, 4, '2015-06-14 15:24:32'),
(463, 1, 21, 7, '2015-06-14 15:24:32'),
(464, 1, 21, 24, '2015-06-14 15:24:32'),
(465, 1, 21, 3, '2015-06-14 15:24:32'),
(466, 1, 21, 11, '2015-06-14 15:24:32'),
(467, 1, 21, 1, '2015-06-14 15:24:32'),
(468, 1, 21, 10, '2015-06-14 15:24:32'),
(469, 1, 12, 4, '2015-06-14 15:24:55'),
(470, 1, 24, 12, '2015-06-14 15:24:55'),
(471, 1, 3, 24, '2015-06-14 15:24:55'),
(472, 1, 9, 3, '2015-06-14 15:24:55'),
(473, 1, 15, 9, '2015-06-14 15:24:55'),
(474, 1, 23, 15, '2015-06-14 15:24:55'),
(475, 1, 23, 8, '2015-06-14 15:24:55'),
(476, 1, 1, 23, '2015-06-14 15:24:55'),
(477, 1, 20, 1, '2015-06-14 15:24:55'),
(478, 1, 10, 11, '2015-06-14 15:25:06'),
(479, 1, 24, 10, '2015-06-14 15:25:06'),
(480, 1, 24, 3, '2015-06-14 15:25:06'),
(481, 1, 24, 5, '2015-06-14 15:25:06'),
(482, 1, 20, 24, '2015-06-14 15:25:07'),
(483, 1, 20, 8, '2015-06-14 15:25:07'),
(484, 1, 6, 20, '2015-06-14 15:25:07'),
(485, 1, 13, 6, '2015-06-14 15:25:07'),
(486, 1, 13, 17, '2015-06-14 15:25:07'),
(487, 1, 11, 3, '2015-06-15 05:58:34'),
(488, 1, 11, 24, '2015-06-15 05:58:35'),
(489, 1, 11, 1, '2015-06-15 05:58:35'),
(490, 1, 11, 20, '2015-06-15 05:58:35'),
(491, 1, 11, 5, '2015-06-15 05:58:35'),
(492, 1, 11, 6, '2015-06-15 05:58:35'),
(493, 1, 11, 23, '2015-06-15 05:58:35'),
(494, 1, 11, 12, '2015-06-15 05:58:35'),
(495, 1, 11, 16, '2015-06-15 05:58:35');

-- --------------------------------------------------------

--
-- 資料表結構 `fight_result`
--

CREATE TABLE IF NOT EXISTS `fight_result` (
`id` int(10) unsigned NOT NULL,
  `candidate_id` int(10) unsigned NOT NULL,
  `user_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- 資料表的匯出資料 `fight_result`
--

INSERT INTO `fight_result` (`id`, `candidate_id`, `user_id`) VALUES
(42, 7, '1'),
(43, 16, '1'),
(44, 21, '1'),
(45, 11, '1'),
(46, 7, '1'),
(47, 17, '1'),
(48, 5, '1'),
(49, 9, '1'),
(50, 17, '1'),
(51, 11, '1'),
(52, 10, '1'),
(53, 7, '1'),
(54, 4, '1'),
(55, 6, '1'),
(56, 3, '1'),
(57, 10, '1'),
(58, 6, '1'),
(59, 4, '1'),
(60, 23, '1'),
(61, 24, '1'),
(62, 5, '1'),
(63, 21, '1'),
(64, 21, '1'),
(65, 20, '1'),
(66, 13, '1'),
(67, 11, '1');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `right_one` int(10) unsigned DEFAULT NULL,
  `right_two` int(10) unsigned DEFAULT NULL,
  `right_three` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `right_one`, `right_two`, `right_three`) VALUES
(1, 'daniel', '1q2w3e4r', 7, 11, 24);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `candidate`
--
ALTER TABLE `candidate`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `fight_process`
--
ALTER TABLE `fight_process`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `fight_result`
--
ALTER TABLE `fight_result`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `candidate`
--
ALTER TABLE `candidate`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- 使用資料表 AUTO_INCREMENT `fight_process`
--
ALTER TABLE `fight_process`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=496;
--
-- 使用資料表 AUTO_INCREMENT `fight_result`
--
ALTER TABLE `fight_result`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
