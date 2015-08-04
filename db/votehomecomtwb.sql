-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 產生時間： 2015 年 08 月 05 日 02:20
-- 伺服器版本: 5.6.24-log
-- PHP 版本： 5.5.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `votehomecomtw`
--

-- --------------------------------------------------------

--
-- 資料表結構 `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `wiki_name` varchar(100) DEFAULT NULL,
  `brief` varchar(2500) DEFAULT NULL COMMENT 'wiki簡介',
  `img` varchar(300) DEFAULT NULL COMMENT 'wiki圖片連結',
  `originurl` varchar(300) DEFAULT NULL,
  `origintitle` varchar(100) DEFAULT NULL,
  `origintitleo` varchar(20) DEFAULT NULL,
  `imgtype` varchar(20) DEFAULT NULL,
  `imgheight` int(10) unsigned DEFAULT NULL,
  `imgwidth` int(10) unsigned DEFAULT NULL,
  `news_title_1` varchar(600) DEFAULT NULL,
  `news_link_1` varchar(500) DEFAULT NULL,
  `news_abs_1` varchar(300) DEFAULT NULL,
  `news_press_1` varchar(300) DEFAULT NULL,
  `news_title_2` varchar(600) DEFAULT NULL,
  `news_link_2` varchar(500) DEFAULT NULL,
  `news_abs_2` varchar(300) DEFAULT NULL,
  `news_press_2` varchar(300) DEFAULT NULL,
  `news_title_3` varchar(600) DEFAULT NULL,
  `news_link_3` varchar(500) DEFAULT NULL,
  `news_abs_3` varchar(300) DEFAULT NULL,
  `news_press_3` varchar(300) DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `inpool` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `wiki_name`, `brief`, `img`, `originurl`, `origintitle`, `origintitleo`, `imgtype`, `imgheight`, `imgwidth`, `news_title_1`, `news_link_1`, `news_abs_1`, `news_press_1`, `news_title_2`, `news_link_2`, `news_abs_2`, `news_press_2`, `news_title_3`, `news_link_3`, `news_abs_3`, `news_press_3`, `createtime`, `inpool`) VALUES
(3, '葉丙成', '葉丙成', '葉丙成，號丙紳，英文名Benson，美國密西根大學博士現任台大電機系副教授、台大 MOOC 計畫執行長。曾開設Coursera第一門華語課程「機率」，並領導開發寓教於樂的...', 'http://2013.tedxtaipei.com/wp-content/uploads/2013/08/ping-cheng-yeh.jpg', 'http://2013.tedxtaipei.com/speaker/ping-cheng-yeh/', '葉丙成| TEDxTaipei 2013', '來源：葉丙成| ...', 'jpeg', 300, 300, '葉丙成：找到你的style，別當一隻無法...', 'http://tw.news.yahoo.com/%E8%91%89%E4%B8%99%E6%88%90-%E6%89%BE%E5%88%B0%E4%BD%A0%E7%9A%84-tyle-%E5%88%A5%E7%95%B6-%E9%9A%BB%E7%84%A1%E6%B3%95%E8%BE%A8%E8%AD%98%E7%9A%84%E8%9E%9E%E8%9F%BB-023451675.html', '', 'Cheers雜誌 via Yahoo! 奇摩新聞  09月12日 AM 10:34  ', '翻轉全球課堂！　台大教授葉丙成顛覆傳統', 'http://tw.news.yahoo.com/%E7%BF%BB%E8%BD%89%E5%85%A8%E7%90%83%E8%AA%B2%E5%A0%82-%E5%8F%B0%E5%A4%A7%E6%95%99%E6%8E%88%E8%91%89%E4%B8%99%E6%88%90%E9%A1%9B%E8%A6%86%E5%82%B3%E7%B5%B1-030300530.html', '', 'TVBS via Yahoo! 奇摩新聞  11月09日 AM 11:03  ', '老師翻轉教學　用科技助學生學習', 'http://tw.news.yahoo.com/%E8%80%81%E5%B8%AB%E7%BF%BB%E8%BD%89%E6%95%99%E5%AD%B8-%E7%94%A8%E7%A7%91%E6%8A%80%E5%8A%A9%E5%AD%B8%E7%94%9F%E5%AD%B8%E7%BF%92-093649825.html', '', '國立教育廣播電台 via Yahoo! 奇摩新聞  09月29日 PM 17:36  ', '2015-08-04 16:43:38', 0),
(5, '李焜耀', '李焜耀', '李焜耀（1952年9月10日－ ），台灣企業家，友達光電、明基電通董事長。1952年9月10日出生於台灣苗栗後龍，父親為一碾米廠老闆，共有八名兒女，李焜耀即為其中之一。家...', 'http://magimg.chinayes.com/Mags/syzk/20091120/Article/Content/201010231924382090947.jpg', 'http://mag.cnyes.com/Content/20091120/F4055F67802D4D5691528FDBAA797D53.shtml', '郭董併奇美李焜耀變「防鴻總司令」_1148期_商業周刊_商業雜誌_台灣雜誌 ...', '來源：郭董併奇美...', 'jpeg', 276, 410, '李焜耀大病初癒後的深層體悟 友達大反攻', 'http://tw.news.yahoo.com/%E6%9D%8E%E7%84%9C%E8%80%80%E5%A4%A7%E7%97%85%E5%88%9D%E7%99%92%E5%BE%8C%E7%9A%84%E6%B7%B1%E5%B1%A4%E9%AB%94%E6%82%9F-%E5%8F%8B%E9%81%94%E5%A4%A7%E5%8F%8D%E6%94%BB-152548201--finance.html', '', '財訊 via Yahoo! 奇摩新聞  04月08日 PM 23:25  ', '李焜耀辭友達董座　彭（又又）浪接班', 'http://tw.news.yahoo.com/%E6%9D%8E%E7%84%9C%E8%80%80%E8%BE%AD%E5%8F%8B%E9%81%94%E8%91%A3%E5%BA%A7-%E5%BD%AD-%E5%8F%88%E5%8F%88-%E6%B5%AA%E6%8E%A5%E7%8F%AD-105237576--finance.html', '', '中廣新聞網 via Yahoo! 奇摩新聞  05月11日 PM 18:52  ', '李焜耀 請辭友達董座', 'http://tw.news.yahoo.com/%E6%9D%8E%E7%84%9C%E8%80%80-%E8%AB%8B%E8%BE%AD%E5%8F%8B%E9%81%94%E8%91%A3%E5%BA%A7-215006393--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  05月12日 AM 05:50  ', '2015-08-04 16:43:42', 1),
(6, '侯孝賢', '侯孝賢', '侯孝賢（1947年4月8日－ ）是一位臺灣電影導演。侯孝賢喜愛使用長鏡頭、空鏡頭與固定鏡位，讓人物直接在鏡頭中說故事，是他電影的一大特色。目前是臺灣電影文化協會榮譽理事長...', 'http://cc.shu.edu.tw/~ctepaper/images/67-tribune.jpg', 'http://cc.shu.edu.tw/~ctepaper/67-tribune.html', '世新大學新視界─教學卓越電子報', '來源：世新大學新...', 'jpeg', 267, 400, '侯孝賢拍片動力 來自對人產生的感動', 'http://tw.news.yahoo.com/%E4%BE%AF%E5%AD%9D%E8%B3%A2%E6%8B%8D%E7%89%87%E5%8B%95%E5%8A%9B-%E4%BE%86%E8%87%AA%E5%B0%8D%E4%BA%BA%E7%94%A2%E7%94%9F%E7%9A%84%E6%84%9F%E5%8B%95-215006140--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  08月02日 AM 05:50  ', '侯孝賢：拍片說故事 沒想說道理', 'http://tw.news.yahoo.com/%E4%BE%AF%E5%AD%9D%E8%B3%A2-%E6%8B%8D%E7%89%87%E8%AA%AA%E6%95%85%E4%BA%8B-%E6%B2%92%E6%83%B3%E8%AA%AA%E9%81%93%E7%90%86-215008458.html', '', '中時電子報 via Yahoo! 奇摩新聞  07月29日 AM 05:50  ', '侯導東京宣傳聶隱娘 忽那汐里獻花', 'http://tw.news.yahoo.com/%E4%BE%AF%E5%B0%8E%E6%9D%B1%E4%BA%AC%E5%AE%A3%E5%82%B3%E8%81%B6%E9%9A%B1%E5%A8%98-%E5%BF%BD%E9%82%A3%E6%B1%90%E9%87%8C%E7%8D%BB%E8%8A%B1-113148030.html', '', '中央社 via Yahoo! 奇摩新聞  08月03日 PM 19:31  ', '2015-08-04 16:43:47', 1),
(7, '李安', '李安', '李安（英文：Ang Lee ，1954年10月23日－ ），著名臺灣導演，生於屏東縣，曾獲得多個主要國際電影獎項，包括三屆奧斯卡金像獎、五屆英國電影學院獎、五屆金球獎、兩...', 'http://www.cctvwhzg.com/u/cms/www/201501/26163900jyzw.jpg', 'http://www.cctvwhzg.com/celebrity/22223.htm', '有梦想的人，才能举起奥斯卡——李安- CCTV文化中国', '來源：有梦想的人...', 'jpeg', 800, 534, '李安神化《捉妖記》拿大導當標竿', 'http://tw.news.yahoo.com/%E6%9D%8E%E5%AE%89%E7%A5%9E%E5%8C%96-%E6%8D%89%E5%A6%96%E8%A8%98-%E6%8B%BF%E5%A4%A7%E5%B0%8E%E7%95%B6%E6%A8%99%E7%AB%BF-215005676.html', '', '中時電子報 via Yahoo! 奇摩新聞  08月04日 AM 05:50  ', '斷背山救了他 李安：它給我很多愛', 'http://tw.news.yahoo.com/%E6%96%B7%E8%83%8C%E5%B1%B1%E6%95%91%E4%BA%86%E4%BB%96-%E6%9D%8E%E5%AE%89-%E5%AE%83%E7%B5%A6%E6%88%91%E5%BE%88%E5%A4%9A%E6%84%9B-132218682.html', '', '聯合新聞網 via Yahoo! 奇摩新聞  08月03日 PM 21:22  ', '專訪／不只是「李安之子」！ 李淳：浩克一...', 'http://www.ettoday.net/news/20150801/543729.htm', '', 'ETtoday東森新聞雲  08月01日 PM 19:06  ', '2015-08-04 16:43:54', 1),
(8, '張忠謀', '張忠謀', '張忠謀（英語：Morris Chang  ，1931年7月10日－ ），出生於浙江省鄞縣（今浙江寧波），畢業於美國麻省理工學院機械工程學系及史丹福大學電機工程學系，並曾任...', 'https://piposay.s3.amazonaws.com/pipo/6cfb1e03-afed-4f57-a39e-591de5300ab3.jpg', 'http://www.piposay.com/pipos/zhang_zhong_mou', '關於張忠謀的最新觀點| PipoSay', '來源：關於張忠謀...', 'jpeg', 246, 300, '張忠謀 成省話一哥', 'http://tw.news.yahoo.com/%E5%BC%B5%E5%BF%A0%E8%AC%80-%E6%88%90%E7%9C%81%E8%A9%B1-%E5%93%A5-215006923--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  07月17日 AM 05:50  ', '台積電二度調降　半導體成長預估值', 'http://tw.news.yahoo.com/%E5%8F%B0%E7%A9%8D%E9%9B%BB%E4%BA%8C%E5%BA%A6%E8%AA%BF%E9%99%8D-%E5%8D%8A%E5%B0%8E%E9%AB%94%E6%88%90%E9%95%B7%E9%A0%90%E4%BC%B0%E5%80%BC-010533907--finance.html', '', 'TVBS via Yahoo! 奇摩新聞  07月17日 AM 09:05  ', '張忠謀：此波庫存調節拉長至Q4 明年16...', 'http://www.nownews.com/n/2015/07/16/1750521', '', '今日新聞網  07月16日 PM 18:36  ', '2015-08-04 16:43:59', 1),
(10, '周杰倫', '周杰倫', '周杰倫（英語：Jay Chou  ，1979年1月18日－ ）， 生於台灣新北，是知名台灣男歌手、填詞人、作曲家、導演、演員及電視節目主持人等。於2000年發行個人首張同...', 'http://img.askci.com/images/ent/2015/2/28/5ceae551-aaa3-4e34-93e5-9070d6e4b72a.jpg', 'http://big5.askci.com/ent/2015/02/28/117553atl_all.shtml', '張學友《醒著做夢》PK周杰倫《哎呦，不錯哦》，誰能勝？-中商娛樂-中 ...', '來源：張學友《醒...', 'jpeg', 1200, 1920, '周杰倫《英雄聯盟》直播處女秀8/4日晚間...', 'http://www.ettoday.net/news/20150804/544822.htm', '', 'ETtoday東森新聞雲  08月04日 PM 13:52  ', '周杰倫為江蕙站台怕走音 唱完飛奔陪妻女', 'http://tw.news.yahoo.com/%E5%91%A8%E6%9D%B0%E5%80%AB%E7%82%BA%E6%B1%9F%E8%95%99%E7%AB%99%E5%8F%B0%E6%80%95%E8%B5%B0%E9%9F%B3-%E5%94%B1%E5%AE%8C%E9%A3%9B%E5%A5%94%E9%99%AA%E5%A6%BB%E5%A5%B3-160100877.html', '', 'NOWnews via Yahoo! 奇摩新聞  08月02日 AM 00:01  ', '江蕙演唱會 周董合唱原作曲「落雨聲」', 'http://tw.news.yahoo.com/%E6%B1%9F%E8%95%99%E6%BC%94%E5%94%B1%E6%9C%83-%E5%91%A8%E8%91%A3%E5%90%88%E5%94%B1%E5%8E%9F%E4%BD%9C%E6%9B%B2-%E8%90%BD%E9%9B%A8%E8%81%B2-042041534.html', '', '民視 via Yahoo! 奇摩新聞  08月02日 PM 12:20  ', '2015-08-04 16:44:31', 0),
(11, '柯文哲', '柯文哲', '柯文哲（1959年8月6日－ ），生於臺灣新竹市，外科醫師、政治人物，無黨籍，為現任臺北市市長。曾擔任臺大醫院急診部醫師、臺大醫院創傷醫學部主任、臺大醫學院教授，專長為外...', 'http://web.popo8.com/201501/26/5/19317d670c.jpg', 'http://news.6park.com/newspark/index.php?act=view&nid=77662', '民众拱选台湾地区领导人柯文哲：别害我-6park.com', '來源：民众拱选台...', 'png', 967, 1000, '柯文哲「尊重九二共識」 雙城論壇又有譜？', 'http://tw.news.yahoo.com/%E6%9F%AF%E6%96%87%E5%93%B2-%E5%B0%8A%E9%87%8D%E4%B9%9D%E4%BA%8C%E5%85%B1%E8%AD%98-%E9%9B%99%E5%9F%8E%E8%AB%96%E5%A3%87%E5%8F%88%E6%9C%89%E8%AD%9C-190200108.html', '', '聯合新聞網 via Yahoo! 奇摩新聞  08月04日 AM 03:02  ', '柯文哲：臺北上海城市論壇進入最後協商階段', 'http://www.xkb.com.tw/news-show.asp?id=39639', '', '台灣新快報  08月04日 PM 17:40  ', '柯文哲授旗少棒隊 小露棒球身手 柯文哲當...', 'http://www.ttv.com.tw/104/08/1040804/10408040032400H.htm?from=573', '', '台視新聞  08月04日 PM 18:59  ', '2015-08-04 16:44:42', 1),
(15, '尹衍樑', '尹衍樑', '尹衍樑（Samuel Yin ，1950年8月16日－ ），生於台灣台北，中華民國企業家，現任潤泰集團（Ruentex Financial Group）總裁、中國文化大學...', 'http://www.businesstoday.com.tw/images/98548/34F5FF2F-C780-49B6-82D9-473B83FBB921', 'http://www.businesstoday.com.tw/article-content-80392-98548', '焦點新聞- 響應恩師王金平尹衍樑十年六千萬助體壇- 今周刊', '來源：焦點新聞-...', 'jpeg', 350, 600, '尹衍樑就愛黑襯衫？ 潤泰集團制服啦！', 'http://tw.news.yahoo.com/%E5%B0%B9%E8%A1%8D%E6%A8%91%E5%B0%B1%E6%84%9B%E9%BB%91%E8%A5%AF%E8%A1%AB-%E6%BD%A4%E6%B3%B0%E9%9B%86%E5%9C%98%E5%88%B6%E6%9C%8D%E5%95%A6-034437699.html', '', '東森新聞 via Yahoo! 奇摩新聞  10月18日 AM 11:44  ', '尹衍樑：再給魏家一點時間', 'http://tw.news.yahoo.com/%E5%B0%B9%E8%A1%8D%E6%A8%91-%E5%86%8D%E7%B5%A6%E9%AD%8F%E5%AE%B6-%E9%BB%9E%E6%99%82%E9%96%93-012356451.html', '', '中央社 via Yahoo! 奇摩新聞  11月15日 AM 09:23  ', '尹衍樑：葉世文案 我檢舉的', 'http://tw.news.yahoo.com/%E5%B0%B9%E8%A1%8D%E6%A8%91-%E8%91%89%E4%B8%96%E6%96%87%E6%A1%88-%E6%88%91%E6%AA%A2%E8%88%89%E7%9A%84-215034425--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  12月18日 AM 05:50  ', '2015-08-04 16:44:46', 1),
(16, '郭台銘', '郭台銘', '郭台銘（英文名：Terry Guo ，1950年10月18日－ ），台灣著名企業家，籍貫山西省晉城市澤州 ，生於台灣臺北縣板橋鎮（今新北市板橋區），板橋高中初中部、中國海...', 'http://www.cnabc.com/Photos/topnews/201209/20120902132448.jpg', 'http://okok1111111111.blogspot.com/2011/08/terry-gou.html', 'est100 一些攝影(some photos): Terry Gou 郭台銘', '來源：est10...', 'jpeg', 2279, 3000, '郭台銘再訪印度 料與莫迪共同宣布投資', 'http://udn.com/news/story/6/1099555', '', '聯合新聞網  08月04日 PM 20:12  ', '郭台銘：布局貴州 掌握一帶一路契機', 'http://tw.news.yahoo.com/%E9%83%AD%E5%8F%B0%E9%8A%98-%E5%B8%83%E5%B1%80%E8%B2%B4%E5%B7%9E-%E6%8E%8C%E6%8F%A1-%E5%B8%B6-%E8%B7%AF%E5%A5%91%E6%A9%9F-124559351--finance.html', '', '中央社 via Yahoo! 奇摩新聞  08月02日 PM 20:45  ', '郭台銘攻一帶一路 主打貴州', 'http://tw.news.yahoo.com/%E9%83%AD%E5%8F%B0%E9%8A%98%E6%94%BB-%E5%B8%B6-%E8%B7%AF-%E4%B8%BB%E6%89%93%E8%B2%B4%E5%B7%9E-215005313--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  08月03日 AM 05:50  ', '2015-08-04 16:44:53', 1),
(17, '王雪紅', '王雪紅', '王雪紅（英文名：Cher Wang ，1958年9月14日－ ），企業家，臺灣新北市新店區人，宏達電（HTC）創辦人、董事長及威盛電子公司董事長。上海科技大學信息學院院長...', 'http://pic2.cnal.com/cnalnews/management/06/2011-09-09/abfae584bdbb4fab0d98d413e01c966a.jpg', 'http://big5news.cnal.com/management/06/2011/09-09/1315554963244201.shtml', '王雪紅：敢於和喬布斯過招的臺灣女首富_中鋁網', '來源：王雪紅：敢...', 'jpeg', 331, 500, '王雪紅為宏達電跌破百道歉 謝金河：九二共...', 'http://tw.news.yahoo.com/-040114425.html', '', '民報 via Yahoo! 奇摩新聞  06月02日 PM 15:30  ', '王雪紅 ： 宏達電還是令人尊敬的品牌', 'http://tw.news.yahoo.com/%E7%8E%8B%E9%9B%AA%E7%B4%85-%E5%AE%8F%E9%81%94%E9%9B%BB%E9%82%84%E6%98%AF%E4%BB%A4%E4%BA%BA%E5%B0%8A%E6%95%AC%E7%9A%84%E5%93%81%E7%89%8C-215004656--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  06月07日 AM 05:50  ', '王雪紅提改善營運四大方向 下半年有耳目一...', 'http://tw.news.yahoo.com/%E7%8E%8B%E9%9B%AA%E7%B4%85%E6%8F%90%E6%94%B9%E5%96%84%E7%87%9F%E9%81%8B%E5%9B%9B%E5%A4%A7%E6%96%B9%E5%90%91-%E4%B8%8B%E5%8D%8A%E5%B9%B4%E6%9C%89%E8%80%B3%E7%9B%AE-%E6%96%B0%E6%98%8E%E6%98%9F%E6%89%8B%E6%A9%9F%E7%94%A2%E5%93%81-041009950.html', '', '鉅亨網 via Yahoo! 奇摩新聞  06月02日 PM 12:10  ', '2015-08-04 16:46:58', 1),
(20, '連勝文', '連勝文', '連勝文（1970年2月3日－ ），出生於臺灣臺北市，中國國民黨籍政治人物，國民黨中央委員。曾祖父為連橫，祖父為連震東，父親為前副總統連戰。2014年參選臺北市長失利。', 'http://matchbin-assets.s3.amazonaws.com/public/sites/358/assets/138890768644992014010515393432_06884.jpg', 'http://www.worldjournal.com/view/full_aTaiwan/24335388/article-%E9%80%A3%E5%8B%9D%E6%96%87%E5%BE%81%E6%88%B0--%E5%B9%95%E5%83%9A%E7%BE%A4%E9%9C%B2%E7%AB%AF%E5%80%AA', '世界新聞網-北美華文新聞、華商資訊- 連勝文征戰幕僚群露端倪', '來源：世界新聞網...', 'jpeg', 400, 341, '連勝文北京挺巧克力店　避談幫柱姐站台', 'http://tw.news.yahoo.com/%E9%80%A3%E5%8B%9D%E6%96%87%E5%8C%97%E4%BA%AC%E6%8C%BA%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%BA%97-%E9%81%BF%E8%AB%87%E5%B9%AB%E6%9F%B1%E5%A7%90%E7%AB%99%E5%8F%B0-110238204.html', '', 'TVBS via Yahoo! 奇摩新聞  07月29日 PM 19:02  ', '連勝文是自爆醜聞？還是圓謊？', 'http://tw.news.yahoo.com/blogs/society-watch/%E9%80%A3%E5%8B%9D%E6%96%87%E6%98%AF%E8%87%AA%E7%88%86%E9%86%9C%E8%81%9E-%E9%82%84%E6%98%AF%E5%9C%93%E8%AC%8A--062032232.html', '', '社會觀察 via Yahoo! 奇摩新聞  09月23日 PM 14:20  ', '連勝文悲劇要怪誰？', 'http://tw.news.yahoo.com/blogs/society-watch/%E9%80%A3%E5%8B%9D%E6%96%87%E6%82%B2%E5%8A%87%E8%A6%81%E6%80%AA%E8%AA%B0--075232770.html', '', '社會觀察 via Yahoo! 奇摩新聞  11月21日 PM 15:52  ', '2015-08-04 16:47:04', 0),
(21, '蔡英文', '蔡英文', '蔡英文（英語：Tsai Ing-wen，1956年8月31日－ ），臺灣政治人物及學者，祖先來自屏東縣枋山鄉楓港，臺灣省臺北市中山區人。 曾任行政院副院長，立法院立法委員...', 'http://www.1111.com.tw/Zones/images/Art/Art9356.jpg', 'http://jennywumusicblog.blogspot.com/', 'Art9356.jpg', '來源：Art93...', 'jpeg', 497, 337, '蔡英文夜探學生 藍籲政治退出課綱爭議', 'http://www.epochtimes.com/b5/15/8/4/n4495987.htm', '', '大紀元時報  08月04日 PM 21:24  ', '蔡英文聲援學生 國民黨批收割政治利益', 'http://tw.news.yahoo.com/%E8%94%A1%E8%8B%B1%E6%96%87%E8%81%B2%E6%8F%B4%E5%AD%B8%E7%94%9F-%E5%9C%8B%E6%B0%91%E9%BB%A8%E6%89%B9%E6%94%B6%E5%89%B2%E6%94%BF%E6%B2%BB%E5%88%A9%E7%9B%8A-024100494.html', '', 'Yahoo! 奇摩新聞  08月04日 AM 10:41  ', '蔡英文夜探學生 國民黨批：收割政治利益！', 'http://tw.news.yahoo.com/%E8%94%A1%E8%8B%B1%E6%96%87%E5%A4%9C%E6%8E%A2%E5%AD%B8%E7%94%9F-%E5%9C%8B%E6%B0%91%E9%BB%A8%E6%89%B9-%E6%94%B6%E5%89%B2%E6%94%BF%E6%B2%BB%E5%88%A9%E7%9B%8A-030806845.html', '', 'NOWnews via Yahoo! 奇摩新聞  08月04日 AM 11:08  ', '2015-08-04 16:47:10', 1),
(24, '翟本喬', '翟本喬', '翟本喬（英語：Ben Jai  ，1966年－ ），生於臺灣臺北，臺灣工程師，曾經讀過了國語實小、臺北市建國高中、是臺灣大學數學系的第一屆的大學保送生，紐約大學電腦科學系...', 'http://setn-iset.cdn.hinet.net/newsimages/2015/02/14/221388-XXL.jpg', 'http://www.setn.com/News.aspx?NewsID=61762', '總統上課囉！剖析婉君心翟本喬要馬放膽做：反正不會連任| 網路| 馬英九 ...', '來源：總統上課囉...', 'jpeg', 340, 510, '演講掀波 翟神批宅神 「低階謾罵酸民代表...', 'http://tw.news.yahoo.com/%E6%BC%94%E8%AC%9B%E6%8E%80%E6%B3%A2-%E7%BF%9F%E7%A5%9E%E6%89%B9%E5%AE%85%E7%A5%9E-%E4%BD%8E%E9%9A%8E%E8%AC%BE%E7%BD%B5%E9%85%B8%E6%B0%91%E4%BB%A3%E8%A1%A8-072440190.html', '', '東森新聞 via Yahoo! 奇摩新聞  03月28日 PM 15:24  ', '網路低階代表? 翟神槓上宅神', 'http://tw.news.yahoo.com/%E7%B6%B2%E8%B7%AF%E4%BD%8E%E9%9A%8E%E4%BB%A3%E8%A1%A8-%E7%BF%9F%E7%A5%9E%E6%A7%93%E4%B8%8A%E5%AE%85%E7%A5%9E-120040928.html', '', '民視 via Yahoo! 奇摩新聞  03月27日 PM 20:00  ', '找網路名人上課 朱學恒批馬先拚政績', 'http://tw.news.yahoo.com/%E6%89%BE%E7%B6%B2%E8%B7%AF%E5%90%8D%E4%BA%BA%E4%B8%8A%E8%AA%B2-%E6%9C%B1%E5%AD%B8%E6%81%92%E6%89%B9%E9%A6%AC%E5%85%88%E6%8B%9A%E6%94%BF%E7%B8%BE-120046724.html', '', '民視 via Yahoo! 奇摩新聞  02月09日 PM 20:00  ', '2015-08-04 16:47:14', 1),
(25, '王金平', '王金平', '王金平（1941年3月17日－），臺灣政治人物，生於日治臺灣高雄州岡山郡路竹庄（今高雄市路竹區）。曾任中國國民黨副主席、立法院副院長，現任中華民國立法院院長。\n自1975...', 'http://m1.biz.itc.cn/pic/new/n/48/86/Img5498648_n.jpg', 'http://news.sohu.com/s2013/wangjinpng/', '王金平关说案-搜狐新闻', '來源：王金平关说...', 'jpeg', 700, 572, '王金平趁隙操作反課綱 周玉蔻：朱立倫難堪...', 'http://www.ettoday.net/news/20150804/544718.htm', '', 'ETtoday東森新聞雲  08月04日 AM 11:24  ', '公道伯粉絲團超專業 「王金平還不死心」', 'http://tw.news.yahoo.com/%E5%85%AC%E9%81%93%E4%BC%AF%E7%B2%89%E7%B5%B2%E5%9C%98%E8%B6%85%E5%B0%88%E6%A5%AD-%E7%8E%8B%E9%87%91%E5%B9%B3%E9%82%84%E4%B8%8D%E6%AD%BB%E5%BF%83-052000471.html', '', '聯合新聞網 via Yahoo! 奇摩新聞  08月01日 PM 13:20  ', '王金平：協商有助於立法效率', 'http://tw.news.yahoo.com/%E7%8E%8B%E9%87%91%E5%B9%B3-%E5%8D%94%E5%95%86%E6%9C%89%E5%8A%A9%E6%96%BC%E7%AB%8B%E6%B3%95%E6%95%88%E7%8E%87-042700780.html', '', '中央廣播電台 via Yahoo! 奇摩新聞  07月31日 PM 12:27  ', '2015-08-04 16:47:22', 1),
(26, '洪秀柱', '洪秀柱', '洪秀柱（1948年4月7日－ ），中華民國女性政治人物，籍貫浙江餘姚，生於中華民國臺北，現任立法院副院長。2015年6月14日中國國民黨公布民調結果，洪秀柱以46.203...', 'http://himg2.huanqiu.com/attachment2010/2015/0623/14/29/20150623022930139.jpg', 'http://taiwan.huanqiu.com/photo/2015-06/2782500.html', '台媒:洪秀柱超越蓝绿统独领导台脱掉国王新衣吧_台海_环球网', '來源：台媒:洪秀...', 'jpeg', 983, 656, '洪秀柱：歷史真相不可扭曲 要呈現出來', 'http://tw.news.yahoo.com/%E6%B4%AA%E7%A7%80%E6%9F%B1-%E6%AD%B7%E5%8F%B2%E7%9C%9F%E7%9B%B8%E4%B8%8D%E5%8F%AF%E6%89%AD%E6%9B%B2-%E8%A6%81%E5%91%88%E7%8F%BE%E5%87%BA%E4%BE%86-103237000.html', '', '中廣新聞網 via Yahoo! 奇摩新聞  08月03日 PM 18:32  ', '洪秀柱籲政治人物：放過孩子', 'http://udn.com/news/story/1/1098814', '', '聯合新聞網  08月04日 PM 15:00  ', '洪秀柱看「風中家族」 一開口就哽咽', 'http://udn.com/news/story/1/1097020', '', '聯合新聞網  08月03日 PM 18:28  ', '2015-08-04 16:47:27', 1),
(27, '馬英九', '馬英九', '馬英九（英語：Ma Ying-jeou ，1950年7月13日－ ），出生於英屬香港，籍貫湖南省衡山縣，1952年隨雙親定居臺灣。中華民國政治人物，中國國民黨籍，曾任中國...', 'http://img.epochtimes.com/i6/605300835021459.jpg', 'http://tw.epochtimes.com/b5/6/6/15/n1351787.htm', '605300835021459.jpg', '來源：60530...', 'jpeg', 1400, 2100, '馬英九促李登輝道歉 李辦：請總統多讀書', 'http://tw.news.yahoo.com/%E9%A6%AC%E8%8B%B1%E4%B9%9D%E4%BF%83%E6%9D%8E%E7%99%BB%E8%BC%9D%E9%81%93%E6%AD%89-%E6%9D%8E%E8%BE%A6-%E8%AB%8B%E7%B8%BD%E7%B5%B1%E5%A4%9A%E8%AE%80%E6%9B%B8-160000037.html', '', '台灣新生報 via Yahoo! 奇摩新聞  08月04日 AM 00:00  ', '馬英九要求李登輝就釣魚島言論向人民道歉', 'http://news.cnyes.com/Content/20150804/20150804083454180689911.shtml', '', '鉅亨網  08月04日 AM 08:50  ', '談二二八 馬英九：現在的執政黨就是當年的...', 'http://www.thenewslens.com/post/199051/', '', 'The News Lens  08月04日 PM 16:35  ', '2015-08-04 16:47:39', 1),
(28, '宋楚瑜', '宋楚瑜', '宋楚瑜（英文：James Soong ，1942年3月16日－ ），中華民國政治人物，出生於湖南省湘潭縣，客家人，曾任自1885年臺灣建省以來唯一的民選省長，支持他的人都...', 'http://pfp.gol.idv.tw/images/p2-1big.jpg', 'http://pfp.gol.idv.tw/p2.php', '親民黨主席宋楚瑜簡介- 泛橘全球資訊網│親民黨宋楚瑜後援會', '來源：親民黨主席...', 'jpeg', 346, 230, '宋楚瑜選總統 後天宣布', 'http://udn.com/news/story/7741/1098749', '', '聯合新聞網  08月04日 PM 15:08  ', '民調／希望誰當下任總統？ 宋楚瑜獲5成8...', 'http://www.ettoday.net/news/20150804/544288.htm', '', 'ETtoday東森新聞雲  08月04日 PM 12:10  ', '8/6黃道吉日 宋楚瑜宣布參選?', 'http://tw.news.yahoo.com/8-6%E9%BB%83%E9%81%93%E5%90%89%E6%97%A5-%E5%AE%8B%E6%A5%9A%E7%91%9C%E5%AE%A3%E5%B8%83%E5%8F%83%E9%81%B8-210000960.html', '', '華視 via Yahoo! 奇摩新聞  08月02日 AM 05:00  ', '2015-08-04 16:47:43', 1),
(29, '陳水扁', '陳水扁', '陳水扁（1950年10月12日－  ），臺南市官田人，生於臺灣省臺南縣官田鄉西莊村（今臺南市官田區西莊里），律師出身，民主進步黨籍政治人物。曾任海商法律師、中華民國第十任...', 'http://img.epochtimes.com/i6/605091010471535.jpg', 'http://www.epochtimes.com/b5/6/5/9/n1312620.htm', '陳水扁：取消軍購就是意氣用事| 大紀元', '來源：陳水扁：取...', 'jpeg', 2100, 1629, '陳水扁身體狀況未明顯改善 保外就醫再延3...', 'http://www.storm.mg/article/59808', '', '風傳媒  08月03日 PM 19:40  ', '陳水扁病情無改善 保外就醫再延3月', 'http://www.epochtimes.com/b5/15/8/3/n4495199.htm', '', '大紀元時報  08月03日 PM 21:12  ', '陳水扁身體狀況未明顯改善 保外就醫再延3...', 'http://tw.news.yahoo.com/%E9%99%B3%E6%B0%B4%E6%89%81%E8%BA%AB%E9%AB%94%E7%8B%80%E6%B3%81%E6%9C%AA%E6%98%8E%E9%A1%AF%E6%94%B9%E5%96%84-%E4%BF%9D%E5%A4%96%E5%B0%B1%E9%86%AB%E5%86%8D%E5%BB%B63%E5%80%8B%E6%9C%88-%E9%A2%A8%E5%82%B3%E5%AA%92-113000999.html', '', '風傳媒 via Yahoo! 奇摩新聞  08月03日 PM 19:30  ', '2015-08-04 16:48:02', 0),
(30, '蔣偉寧', '蔣偉寧', '蔣偉寧（1957年9月2日－ ），臺灣土木工程學者，研究專長是橋梁管理、風險管理、地震工程、模糊邏輯。曾任國立中央大學土木系教授、系主任、校長。2012年2月接任教育部部...', 'http://cw1.tw/CW/images/article/C1354004002567.jpg', 'http://www.cw.com.tw/article/article.action?id=5045066&page=1', '蔣偉寧：體制教育像剝洋蔥剝掉學生創意- 天下雜誌511期', '來源：蔣偉寧：體...', 'jpeg', 422, 630, '前後任部長說詞不一 課綱續燃燒', 'http://tw.news.yahoo.com/%E5%89%8D%E5%BE%8C%E4%BB%BB%E9%83%A8%E9%95%B7%E8%AA%AA%E8%A9%9E%E4%B8%8D-%E8%AA%B2%E7%B6%B1%E7%BA%8C%E7%87%83%E7%87%92-092629539.html', '', '自立晚報 via Yahoo! 奇摩新聞  07月22日 PM 17:26  ', '黃帝穎：前後任部長說詞不一，教育部應立即...', 'http://www.xkb.com.tw/news-show.asp?id=39428', '', '台灣新快報  07月22日 PM 16:10  ', '屏教大陳震遠停權10年', 'http://tw.news.yahoo.com/%E5%B1%8F%E6%95%99%E5%A4%A7%E9%99%B3%E9%9C%87%E9%81%A0%E5%81%9C%E6%AC%8A10%E5%B9%B4-215034165.html', '', '中時電子報 via Yahoo! 奇摩新聞  10月28日 AM 05:50  ', '2015-08-04 16:48:08', 0),
(39, '朱立倫', '朱立倫', '朱立倫（英語：Eric Chu or Chu Li-luan  ，1961年6月7日－ ），中華民國政治人物，出生於桃園市八德區，祖籍浙江義烏，曾任立法委員、桃園縣縣長、...', 'https://yt3.ggpht.com/--CjdNSaAd8M/AAAAAAAAAAI/AAAAAAAAAAA/iA-FBCDI4fs/s900-c-k-no/photo.jpg', 'https://www.youtube.com/user/chullchu', '朱立倫- YouTube', '來源：朱立倫- ...', 'png', 900, 900, '向朱立倫釋善意 蔡英文：全力解決課綱爭議', 'http://udn.com/news/story/1/1098058', '', '聯合新聞網  08月04日 AM 01:44  ', '朱立倫政海浮沉的啟示', 'http://tw.news.yahoo.com/-223120870.html', '', '民報 via Yahoo! 奇摩新聞  08月01日 AM 06:31  ', '朱立倫：臨時會應以民生法案為基礎', 'http://udn.com/news/story/1/1096177', '', '聯合新聞網  08月03日 PM 12:15  ', '2015-08-04 16:48:14', 1),
(40, '趙少康', '趙少康', '趙少康（1950年5月6日－ ），河南涉縣（後改河北）人，生於臺灣基隆市，中華民國政治人物，曾經在政壇上有「政治金童」的稱號。曾任臺北市議會議員、行政院環境保護署署長、立...', 'http://img.chinatimes.com/newsphoto/2014-12-24/656/20141224005113.jpg', 'http://www.chinatimes.com/realtimenews/20141224005061-260410', '趙少康辭富邦金獨董明日生效- 中時電子報', '來源：趙少康辭富...', 'jpeg', 611, 656, '選民喜新厭舊？ 洪秀柱：我是新、蔡英文是...', 'http://tw.news.yahoo.com/-143157010.html', '', '民報 via Yahoo! 奇摩新聞  07月29日 PM 22:31  ', '趙少康在家不如狗 誰叫他是女兒控', 'https://tw.celebrity.yahoo.com/news/%E8%B6%99%E5%B0%91%E5%BA%B7%E5%9C%A8%E5%AE%B6%E4%B8%8D%E5%A6%82%E7%8B%97-%E8%AA%B0%E5%8F%AB%E4%BB%96%E6%98%AF%E5%A5%B3%E5%85%92%E6%8E%A7-041435359.html', '', 'Yahoo奇摩娛樂訊息 via Yahoo! 奇摩名人娛樂  04月06日 PM 12:14  ', '柯指沒必要做人情 趙少康辭富邦', 'http://tw.news.yahoo.com/%E6%9F%AF%E6%8C%87%E6%B2%92%E5%BF%85%E8%A6%81%E5%81%9A%E4%BA%BA%E6%83%85-%E8%B6%99%E5%B0%91%E5%BA%B7%E8%BE%AD%E5%AF%8C%E9%82%A6-050046028.html', '', '民視 via Yahoo! 奇摩新聞  12月25日 PM 16:00  ', '2015-08-04 16:48:19', 0),
(43, '嚴凱泰', '嚴凱泰', '嚴凱泰（英文名：Kenneth, K.T. Yen ，1965年5月23日－ ）是台灣企業家，現任裕隆集團董事長。旗下事業有裕隆汽車、中華汽車工業、納智捷汽車、嘉裕西服、...', 'http://www.brain.com.tw/teach/image/businesstoday/photo/661-1.jpg', 'http://www.brain.com.tw/teach/businesstoday/661_1.html', '動腦brain-創意人才庫', '來源：動腦bra...', 'jpeg', 175, 250, '嚴凱泰年過半百喜獲麟兒 股東盼再接再厲', 'http://tw.news.yahoo.com/%E5%9A%B4%E5%87%B1%E6%B3%B0%E5%B9%B4%E9%81%8E%E5%8D%8A%E7%99%BE%E5%96%9C%E7%8D%B2%E9%BA%9F%E5%85%92-%E8%82%A1%E6%9D%B1%E7%9B%BC%E5%86%8D%E6%8E%A5%E5%86%8D%E5%8E%B2-050224304--finance.html', '', '民視 via Yahoo! 奇摩新聞  06月17日 PM 21:03  ', '股東勸生6個 嚴：銘記在心', 'http://tw.news.yahoo.com/%E8%82%A1%E6%9D%B1%E5%8B%B8%E7%94%9F6%E5%80%8B-%E5%9A%B4-%E9%8A%98%E8%A8%98%E5%9C%A8%E5%BF%83-215008868--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  06月18日 AM 05:50  ', '嚴凱泰率六人小組 向員工拜年', 'http://tw.news.yahoo.com/%E5%9A%B4%E5%87%B1%E6%B3%B0%E7%8E%87%E5%85%AD%E4%BA%BA%E5%B0%8F%E7%B5%84-%E5%90%91%E5%93%A1%E5%B7%A5%E6%8B%9C%E5%B9%B4-215032825--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  02月27日 AM 05:50  ', '2015-08-04 16:48:23', 0),
(50, '李昌鈺', '李昌鈺', '李昌鈺（英語：Henry Chang-Yu Lee  ，1938年11月22日－ ），華裔美國人，刑事鑑識學專家，生於江蘇如皋，臺灣中央警官學校畢業，美國紐約大學生物化學...', 'http://img.epochtimes.com/i5/4081221271198.jpg', 'http://www.epochtimes.com/b5/4/8/13/n626113.htm', '專訪】神探李昌鈺披露鮮為人知故事(上) | 大紀元', '來源：專訪】神探...', 'jpeg', 1704, 2272, '李昌鈺︰一天一小步 化不可能為可能', 'http://tw.news.yahoo.com/%E6%9D%8E%E6%98%8C%E9%88%BA-%E5%A4%A9-%E5%B0%8F%E6%AD%A5-%E5%8C%96%E4%B8%8D%E5%8F%AF%E8%83%BD%E7%82%BA%E5%8F%AF%E8%83%BD-221042779.html', '', '自由時報 via Yahoo! 奇摩新聞  11月22日 AM 06:10  ', '李昌鈺教你觀察力：從翻垃圾桶起', 'http://tw.news.yahoo.com/%E6%9D%8E%E6%98%8C%E9%88%BA%E6%95%99%E4%BD%A0%E8%A7%80%E5%AF%9F%E5%8A%9B-%E5%BE%9E%E7%BF%BB%E5%9E%83%E5%9C%BE%E6%A1%B6%E8%B5%B7-063350065.html', '', '商業周刊 via Yahoo! 奇摩新聞  11月21日 PM 14:33  ', '劫獄現場子彈 非從典獄長槍射出', 'http://tw.news.yahoo.com/%E5%8A%AB%E7%8D%84%E7%8F%BE%E5%A0%B4%E5%AD%90%E5%BD%88-%E9%9D%9E%E5%BE%9E%E5%85%B8%E7%8D%84%E9%95%B7%E6%A7%8D%E5%B0%84%E5%87%BA-102755554.html', '', '中央社 via Yahoo! 奇摩新聞  03月20日 PM 18:27  ', '2015-08-04 16:48:39', 0),
(57, '王建民', '王建民 (棒球選手)', '王建民（英语：Chien-Ming Wang，1980年3月31日－），是臺灣旅美棒球選手，出生於臺灣台南市關廟區新埔，現為美國職棒西雅圖水手隊選手，守備位置為先發投手。...', 'http://img.epochtimes.com/i6/705060524491668.jpg', 'http://search.epochtimes.com/search?q=%E7%8E%8B%E5%BB%BA%E6%B0%91', '王建民- 大紀元', '來源：王建民- ...', 'jpeg', 2144, 3000, '王建民返台奔喪 祖母過世跟球隊請假', 'http://www.ettoday.net/news/20150801/543587.htm', '', 'ETtoday東森新聞雲  08月01日 PM 12:58  ', '〈旅美球員〉王建民短暫回台1、2天 參加...', 'http://tw.sports.yahoo.com/news/%E6%97%85%E7%BE%8E%E7%90%83%E5%93%A1-%E7%8E%8B%E5%BB%BA%E6%B0%91%E7%9F%AD%E6%9A%AB%E5%9B%9E%E5%8F%B01-2%E5%A4%A9-%E5%8F%83%E5%8A%A0%E7%A5%96%E6%AF%8D%E5%91%8A%E5%88%A5%E5%BC%8F-052509420.html', '', 'TSNA via Yahoo!奇摩運動  08月01日 PM 13:25  ', '祖母過世 王建民請假返台', 'http://tw.sports.yahoo.com/news/%E7%A5%96%E6%AF%8D%E9%81%8E%E4%B8%96-%E7%8E%8B%E5%BB%BA%E6%B0%91%E8%AB%8B%E5%81%87%E8%BF%94%E5%8F%B0-094040682--mlb.html', '', '中央社 via Yahoo!奇摩運動  08月01日 PM 17:40  ', '2015-08-04 16:48:55', 1),
(72, '孫維新', '孫維新', '孫維新（Wei-Hsin Sun，1957年11月8日－ ）是以天文教育推廣聞名的台灣天文學家，曾任國立中央大學天文研究所所長與科學教育中心主任，現任教於國立臺灣大學物理...', 'http://matchbin-assets.s3.amazonaws.com/public/sites/358/assets/13395744976660201206131557515_09490.jpg', 'http://blog.udn.com/1698/6546253', '大千世界】維新與天文相遇孫維新命中注定？ - 啟示路- udn部落格', '來源：大千世界】...', 'jpeg', 300, 400, '科博館館長孫維新：物理系出路廣', 'http://tw.news.yahoo.com/%E7%A7%91%E5%8D%9A%E9%A4%A8%E9%A4%A8%E9%95%B7%E5%AD%AB%E7%B6%AD%E6%96%B0-%E7%89%A9%E7%90%86%E7%B3%BB%E5%87%BA%E8%B7%AF%E5%BB%A3-094619234.html', '', 'Career職場情報誌 via Yahoo! 奇摩新聞  01月30日 PM 17:46  ', '線上直擊科博館後台 蘭嶼綠蠵龜打頭陣', 'http://www.epochtimes.com/b5/15/8/2/n4494458.htm', '', '大紀元時報  08月02日 PM 21:48  ', '移居地球2.0 孫維新：未來有可能', 'http://tw.news.yahoo.com/%E7%A7%BB%E5%B1%85%E5%9C%B0%E7%90%832-0-%E5%AD%AB%E7%B6%AD%E6%96%B0-%E6%9C%AA%E4%BE%86%E6%9C%89%E5%8F%AF%E8%83%BD-043322651.html', '', '中央社 via Yahoo! 奇摩新聞  07月24日 PM 12:33  ', '2015-08-04 16:49:02', 0),
(74, '周玉蔻', '周玉蔻', '周玉蔻（1953年9月9日－ ），台灣著名媒體人、記者、主持人。人稱：蔻蔻姐。', 'http://www.rfa.org/mandarin/pinglun/caochangqing/ccq-01052015152721.html/016.jpg', 'http://www.rfa.org/mandarin/pinglun/caochangqing/ccq-01052015152721.html', '016.jpg', '來源：016.j...', 'jpeg', 1365, 2048, '王金平趁隙操作反課綱 周玉蔻：朱立倫難堪...', 'http://www.ettoday.net/news/20150804/544718.htm', '', 'ETtoday東森新聞雲  08月04日 AM 11:24  ', '周玉蔻爆料：阿中以無黨籍選立委，對打費鴻...', 'http://tw.news.yahoo.com/%E5%91%A8%E7%8E%89%E8%94%BB%E7%88%86%E6%96%99-%E9%98%BF%E4%B8%AD%E4%BB%A5%E7%84%A1%E9%BB%A8%E7%B1%8D%E9%81%B8%E7%AB%8B%E5%A7%94-%E5%B0%8D%E6%89%93%E8%B2%BB%E9%B4%BB%E6%B3%B0-050441301.html', '', 'NOWnews via Yahoo! 奇摩新聞  07月27日 PM 13:04  ', '周玉蔻爆料：民、親默契聯手 棄楊實秋保張...', 'http://tw.news.yahoo.com/%E5%91%A8%E7%8E%89%E8%94%BB%E7%88%86%E6%96%99-%E6%B0%91-%E8%A6%AA%E9%BB%98%E5%A5%91%E8%81%AF%E6%89%8B-%E6%A3%84%E6%A5%8A%E5%AF%A6%E7%A7%8B%E4%BF%9D%E5%BC%B5%E6%89%BF%E4%B8%AD-%E9%A2%A8%E5%82%B3%E5%AA%92-074200948.html', '', '風傳媒 via Yahoo! 奇摩新聞  07月27日 PM 15:42  ', '2015-08-04 16:49:07', 0),
(77, '金城武', '金城武', '1992《分手的夜裡》\r\n 1993《只要你和我》\r\n 1994《溫柔超人》\r\n 1994《可依靠的好朋友》\r\n 1994《失約》\r\n 1994《標準情人》\r\n 1995...', 'http://entdata-pic.stor.vipsinaapp.com/2014110411/54584d4518cec704_1465596_288335.jpg', 'http://ent.sina.com.cn/s/h/f/jincw.html', '金城武资料档案,写真,视频,新闻,代表作_新浪娱乐_新浪网', '來源：金城武资料...', 'jpeg', 634, 950, '金城武自認不新鮮：我的小鮮肉時代已過', 'http://udn.com/news/story/7260/1099452', '', '聯合新聞網  08月04日 PM 20:14  ', '遭小鮮肉包圍 金城武神回：什麼是小鮮肉？', 'http://tw.news.yahoo.com/%E9%81%AD%E5%B0%8F%E9%AE%AE%E8%82%89%E5%8C%85%E5%9C%8D-%E9%87%91%E5%9F%8E%E6%AD%A6%E7%A5%9E%E5%9B%9E-%E4%BB%80%E9%BA%BC%E6%98%AF%E5%B0%8F%E9%AE%AE%E8%82%89-161100482.html', '', '聯合新聞網 via Yahoo! 奇摩新聞  07月23日 AM 00:11  ', '金城武蓄鬍亮相 笑問小鮮肉是啥', 'http://www.cna.com.tw/news/amov/201507240180-1.aspx', '', 'Central News Agency  07月24日 PM 13:32  ', '2015-08-04 16:49:12', 0),
(82, '沈芯菱', '沈芯菱', '沈芯菱（1989年11月－ ），臺灣雲林縣人，出身流動攤販，半工半讀，現就讀於國立台灣大學商學院博士、美國哈佛大學校本部三年制學程研讀。自11歲起投身公益，從未接受捐款贊...', 'https://kidfamily.files.wordpress.com/2013/02/20130223_2884.jpg', 'https://kidfamily.wordpress.com/2013/02/26/living-example-of-miss-shen/', '沈芯菱的活榜樣| KidKidding 孩子。愛玩。笑', '來源：沈芯菱的活...', 'jpeg', 951, 1212, '世代傳愛 吳尊賢基金會展公益人士', 'http://tw.news.yahoo.com/%E4%B8%96%E4%BB%A3%E5%82%B3%E6%84%9B-%E5%90%B3%E5%B0%8A%E8%B3%A2%E5%9F%BA%E9%87%91%E6%9C%83%E5%B1%95%E5%85%AC%E7%9B%8A%E4%BA%BA%E5%A3%AB-113009854.html', '', '中央社 via Yahoo! 奇摩新聞  03月14日 PM 19:30  ', '沈芯菱也來當天使', 'http://tw.news.yahoo.com/%E6%B2%88%E8%8A%AF%E8%8F%B1%E4%B9%9F%E4%BE%86%E7%95%B6%E5%A4%A9%E4%BD%BF-215032884.html', '', '中時電子報 via Yahoo! 奇摩新聞  12月22日 AM 05:50  ', '世代傳愛 展彭蒙惠劉啟群沈芯菱貢獻', 'http://tw.news.yahoo.com/%E4%B8%96%E4%BB%A3%E5%82%B3%E6%84%9B-%E5%B1%95%E5%BD%AD%E8%92%99%E6%83%A0%E5%8A%89%E5%95%9F%E7%BE%A4%E6%B2%88%E8%8A%AF%E8%8F%B1%E8%B2%A2%E7%8D%BB-071504667.html', '', '中央社 via Yahoo! 奇摩新聞  03月07日 PM 15:15  ', '2015-08-04 16:49:17', 0),
(83, '蔣萬安', '蔣萬安', '蔣萬安（1978年12月26日－ ），生於臺北，原名章萬安，父為蔣經國庶子蔣孝嚴。曾為美國執業律師，30歲與朋友合夥創辦萬澤國際法律事務所。2008年在美國加州登記結婚，...', 'http://img.chinatimes.com/newsphoto/2015-05-20/656/20150520003752.jpg', 'http://www.chinatimes.com/realtimenews/20150520002299-260407', '蔣萬安：國民黨也有熱血新人- 中時電子報', '來源：蔣萬安：國...', 'jpeg', 519, 656, '課綱爭議 蔣家第四代蔣萬安籲教育部撤告', 'http://www.nownews.com/n/2015/08/02/1767610', '', '今日新聞網  08月02日 PM 19:17  ', '王子復仇延長賽 羅淑蕾預選未過關', 'http://tw.news.yahoo.com/%E7%8E%8B%E5%AD%90%E5%BE%A9%E4%BB%87%E5%BB%B6%E9%95%B7%E8%B3%BD-%E7%BE%85%E6%B7%91%E8%95%BE%E9%A0%90%E9%81%B8%E6%9C%AA%E9%81%8E%E9%97%9C-%E9%A2%A8%E5%82%B3%E5%AA%92-073500670.html', '', '風傳媒 via Yahoo! 奇摩新聞  04月19日 PM 15:35  ', '​王子復仇延長賽！　羅淑蕾：民調方式怪怪...', 'http://tw.news.yahoo.com/%E7%8E%8B%E5%AD%90%E5%BE%A9%E4%BB%87%E5%BB%B6%E9%95%B7%E8%B3%BD-%E7%BE%85%E6%B7%91%E8%95%BE-%E6%B0%91%E8%AA%BF%E6%96%B9%E5%BC%8F%E6%80%AA%E6%80%AA%E7%9A%84-063700011.html', '', 'TVBS via Yahoo! 奇摩新聞  04月20日 PM 14:37  ', '2015-08-04 16:49:22', 0),
(84, '馮光遠', '馮光遠', '馮光遠（英語：Neil Peng  、Feng Guang Yuan ，1953年9月23日－ ），筆名徐玖經，生於臺北三重，祖籍上海市，記者出身，曾是《中國時報》主筆、...', 'http://iservice.libertytimes.com.tw/Upload/liveNews/phpWUsGsv.jpeg', 'http://www.hi-on.org.tw/bulletins.jsp?b_ID=136867', '獲2萬票支持馮光遠「嗯哼」謝票- [HI-ON]鯨魚網站', '來源：獲2萬票支...', 'jpeg', 442, 300, '馮光遠遭運匠警告 怒提客訴惹爭議 – 風...', 'http://tw.news.yahoo.com/%E9%A6%AE%E5%85%89%E9%81%A0%E9%81%AD%E9%81%8B%E5%8C%A0%E8%AD%A6%E5%91%8A-%E6%80%92%E6%8F%90%E5%AE%A2%E8%A8%B4%E6%83%B9%E7%88%AD%E8%AD%B0-%E9%A2%A8%E5%82%B3%E5%AA%92-044500296.html', '', '風傳媒 via Yahoo! 奇摩新聞  07月27日 PM 12:45  ', '馮光遠遭警告事件司機致歉 馮光遠：到此為...', 'http://tw.news.yahoo.com/%E9%A6%AE%E5%85%89%E9%81%A0%E9%81%AD%E8%AD%A6%E5%91%8A%E4%BA%8B%E4%BB%B6%E5%8F%B8%E6%A9%9F%E8%87%B4%E6%AD%89-%E9%A6%AE%E5%85%89%E9%81%A0-%E5%88%B0%E6%AD%A4%E7%82%BA%E6%AD%A2-080956943.html', '', 'NOWnews via Yahoo! 奇摩新聞  07月27日 PM 16:09  ', '馮光遠淡水總部成立 黃國昌給第一個功課', 'http://tw.news.yahoo.com/-073142496.html', '', '民報 via Yahoo! 奇摩新聞  07月25日 PM 22:31  ', '2015-08-04 16:49:26', 1),
(85, '魏德聖', '魏德聖', '魏德聖（Wei Te-Sheng，1969年8月16日－ ），台灣電影導演，果子電影有限公司負責人。於2008年執導首部電影《海角七號》獲得億萬票房佳績，因而聲名大噪。2...', 'http://news.nuk.edu.tw/~adnuk/Images/news/IMG_5850_A_resize.jpg', 'http://previous.nuk.edu.tw/history_detail.php?id=397', '國立高雄大學- 歷史新聞', '來源：國立高雄大...', 'jpeg', 1048, 1148, '【專文】KANO精神是台灣的驕傲', 'http://tw.news.yahoo.com/kano-223117232.html', '', '民報 via Yahoo! 奇摩新聞  07月31日 AM 06:31  ', '【耕耘希望的沃土】鈕承澤 x 魏德聖野台...', 'http://tw.news.yahoo.com/%E8%80%95%E8%80%98%E5%B8%8C%E6%9C%9B%E7%9A%84%E6%B2%83%E5%9C%9F%E9%88%95%E6%89%BF%E6%BE%A4%E9%AD%8F%E5%BE%B7%E8%81%96%E9%87%8E%E5%8F%B0%E9%96%8B%E6%A7%93-080302124.html', '', 'Yahoo奇摩（新聞） via Yahoo! 奇摩新聞  09月25日 PM 16:03  ', '魏德聖：金門適合拍奇幻片', 'http://tw.news.yahoo.com/%E9%AD%8F%E5%BE%B7%E8%81%96-%E9%87%91%E9%96%80%E9%81%A9%E5%90%88%E6%8B%8D%E5%A5%87%E5%B9%BB%E7%89%87-064328408.html', '', '中央社 via Yahoo! 奇摩新聞  12月05日 PM 14:43  ', '2015-08-04 16:49:31', 0),
(86, '彭淮南', '彭淮南', '彭淮南（英語：Fai-Nan Perng  ，1939年1月2日－ ），臺灣新竹市出生，為金融學家，現任中華民國中央銀行總裁。畢業於新竹高商與國立中興大學法商學院經濟學系...', 'http://magimg.chinayes.com/Mags/M46/20110901/Article/Content/201109011707005585356.jpg', 'http://mag.chinayes.com/Content/20110901/0E285C2F5C4D424A80FBD64046134565.shtml', '八A彭淮南甘做「总裁钉子户」_380期_财讯_理财杂志_台湾杂志_Yes杂志_ ...', '來源：八A彭淮南...', 'jpeg', 239, 319, '設主權基金 彭淮南不反對', 'http://tw.news.yahoo.com/%E8%A8%AD%E4%B8%BB%E6%AC%8A%E5%9F%BA%E9%87%91-%E5%BD%AD%E6%B7%AE%E5%8D%97%E4%B8%8D%E5%8F%8D%E5%B0%8D-215006579--finance.html', '', '中時電子報 via Yahoo! 奇摩新聞  07月23日 AM 05:50  ', '彭淮南證實馬總統徵詢任閣揆 重申「央行是...', 'http://tw.news.yahoo.com/-061202755.html', '', '民報 via Yahoo! 奇摩新聞  12月08日 PM 14:12  ', '彭淮南:房市成交量減 預期上漲不再', 'http://tw.news.yahoo.com/%E5%BD%AD%E6%B7%AE%E5%8D%97-%E6%88%BF%E5%B8%82%E6%88%90%E4%BA%A4%E9%87%8F%E6%B8%9B-%E9%A0%90%E6%9C%9F%E4%B8%8A%E6%BC%B2%E4%B8%8D%E5%86%8D-063205248.html', '', '公共電視 via Yahoo! 奇摩新聞  09月24日 PM 14:32  ', '2015-08-04 16:49:35', 1),
(87, '楊志良', '楊志良', '楊志良（1946年3月11日－ ），出生於臺灣臺北市，為公共衛生學者與政治人物，中國國民黨籍，曾任行政院衛生署署長。2009年8月6日因前衛生署長葉金川參選花蓮縣長，而出...', 'https://ed-nanzao-com.s3.amazonaws.com/files/2015/04/23/f006b159-d633-4e7d-b1d0-9567366c48e0.png', 'http://www.nanzao.com/tc/hk-macau-tw/14ce433cb01c19c/wo-yao-zheng-si-guo-min-dang-tai-qian-wei-sheng-shu-chang-can-jia-zong-tong-chu-xuan', '我要整死國民黨！” 台前衛生署長參加“總統”初選- 港澳台- 南早中文', '來源：我要整死國...', 'jpeg', 450, 600, '楊志良選總統 5月1日國黨領表', 'http://tw.news.yahoo.com/%E6%A5%8A%E5%BF%97%E8%89%AF%E9%81%B8%E7%B8%BD%E7%B5%B1-5%E6%9C%881%E6%97%A5%E5%9C%8B%E9%BB%A8%E9%A0%98%E8%A1%A8-120041015.html', '', '民視 via Yahoo! 奇摩新聞  04月23日 PM 20:00  ', '楊志良請辭廉政委員　柯文哲慰留', 'http://tw.news.yahoo.com/-043027466.html', '', '民報 via Yahoo! 奇摩新聞  02月17日 PM 12:30  ', '楊志良明領表 正式投入國黨總統初選', 'http://tw.news.yahoo.com/%E6%A5%8A%E5%BF%97%E8%89%AF%E6%98%8E%E9%A0%98%E8%A1%A8-%E6%AD%A3%E5%BC%8F%E6%8A%95%E5%85%A5%E5%9C%8B%E9%BB%A8%E7%B8%BD%E7%B5%B1%E5%88%9D%E9%81%B8-110043441.html', '', '民視 via Yahoo! 奇摩新聞  04月30日 PM 19:00  ', '2015-08-04 16:49:41', 1),
(89, '黃國昌', '黃國昌', '黃國昌（Huang Kuo-chang，1973年8月19日－ ），臺灣新北市汐止區人，法律學者，長期關心並參與學運、社運，佔領國會事件後發起新組織島國前進。長期投身司法...', 'http://img.ltn.com.tw/2014/new/mar/24/images/bigPic/600_101.jpg', 'http://news.ltn.com.tw/news/politics/paper/764651', '星期專訪》中研院副研究員黃國昌：為台灣救亡圖存奮力一擊- 政治- 自由 ...', '來源：星期專訪》...', 'jpeg', 400, 600, '臨時會虛晃一招 黃國昌：朱立倫要繼續軟弱...', 'http://tw.news.yahoo.com/-073141507.html', '', '民報 via Yahoo! 奇摩新聞  08月01日 PM 15:31  ', '黃國昌：賴清德鼓勵參選', 'http://tw.news.yahoo.com/%E9%BB%83%E5%9C%8B%E6%98%8C-%E8%B3%B4%E6%B8%85%E5%BE%B7%E9%BC%93%E5%8B%B5%E5%8F%83%E9%81%B8-112756633.html', '', '中央社 via Yahoo! 奇摩新聞  07月29日 AM 05:30  ', '黃國昌宣布參選立委：這一刻從頭贏回台灣', 'http://tw.news.yahoo.com/%E9%BB%83%E5%9C%8B%E6%98%8C%E5%AE%A3%E5%B8%83%E5%8F%83%E9%81%B8%E7%AB%8B%E5%A7%94-%E9%80%99-%E5%88%BB%E5%BE%9E%E9%A0%AD%E8%B4%8F%E5%9B%9E%E5%8F%B0%E7%81%A3-210000345.html', '', '新頭殼早報 via Yahoo! 奇摩新聞  07月28日 AM 05:00  ', '2015-08-04 16:49:45', 1),
(90, '洪慈庸', '洪慈庸', '洪慈庸（Hung Tzu-yung ，1982年12月20日－ ），是2013年陸軍下士洪仲丘事件中暑死亡案的姐姐，父母從小把她領養過來，臺灣臺中市長大，國立高雄第一科技...', 'http://img.ltn.com.tw/2015/new/feb/24/images/bigPic/400_400/phpBJxnWO.jpg', 'http://news.ltn.com.tw/news/politics/breakingnews/1240061', '談洪慈庸參選林佳龍：年輕人願站出社會有希望- 政治- 自由時報電子報', '來源：談洪慈庸參...', 'jpeg', 400, 301, '洪慈庸批政府學不到教訓', 'http://udn.com/news/story/1/1092113', '', '聯合新聞網  07月31日 PM 22:07  ', '柱柱姐同鄉 洪慈庸三問題挑戰一中同表 –...', 'http://tw.news.yahoo.com/%E6%9F%B1%E6%9F%B1%E5%A7%90%E5%90%8C%E9%84%89-%E6%B4%AA%E6%85%88%E5%BA%B8%E4%B8%89%E5%95%8F%E9%A1%8C%E6%8C%91%E6%88%B0-%E4%B8%AD%E5%90%8C%E8%A1%A8-%E9%A2%A8%E5%82%B3%E5%AA%92-101000097.html', '', '風傳媒 via Yahoo! 奇摩新聞  07月23日 PM 18:10  ', '洪慈庸將參選台中立委 對上藍委楊瓊瓔', 'http://tw.news.yahoo.com/%E6%B4%AA%E6%85%88%E5%BA%B8%E5%B0%87%E5%8F%83%E9%81%B8%E5%8F%B0%E4%B8%AD%E7%AB%8B%E5%A7%94-%E5%B0%8D%E4%B8%8A%E8%97%8D%E5%A7%94%E6%A5%8A%E7%93%8A%E7%93%94-053405386.html', '', '新頭殼 via Yahoo! 奇摩新聞  02月23日 PM 13:34  ', '2015-08-04 16:49:50', 0),
(91, '羅瑤', '羅瑤', '羅瑤（1980年8月23日－ ），藝名瑤瑤，台灣藝人，淡江大學教育科技系畢業。因為在藝人吳宗憲所開設的甜品店糖朝打工而被發掘。因活潑的個性與甜美的外表，使其很快在各大綜藝...', 'http://setn-iset.cdn.hinet.net/newsimages/2014/12/12/189295-XXL.jpg', 'http://www.setn.com/E/News.aspx?NewsID=52501', '獨／搶攻毛小孩市場！藝人羅瑤創業砸500萬開寵物旅館| 狗| 貓| 娛樂星 ...', '來源：獨／搶攻毛...', 'jpeg', 340, 510, '', '', '', '', '', '', '', '', '', '', '', '', '2015-08-04 16:49:53', 0),
(92, '彭明輝', '彭明輝 (工程學家)', '彭明輝，臺灣學者、作家、社會評論家。新竹中學畢業、國立成功大學機械工程學系學士、國立清華大學動力機械研究所固體力學組碩士，英國劍橋大學控制工程博士。曾任國立清華大學動力機...', 'https://www.linkingbooks.com.tw/LNB/upimages/author/large/0000692.jpg', 'https://www.linkingbooks.com.tw/LNB/author/Author.aspx?ID=0000692', '聯經出版事業公司- 作家專區：彭明輝', '來源：聯經出版事...', 'jpeg', 249, 200, '產業危機 彭明輝：既得利益者不放手', 'http://tw.news.yahoo.com/%E7%94%A2%E6%A5%AD%E5%8D%B1%E6%A9%9F-%E5%BD%AD%E6%98%8E%E8%BC%9D-%E6%97%A2%E5%BE%97%E5%88%A9%E7%9B%8A%E8%80%85%E4%B8%8D%E6%94%BE%E6%89%8B-111734146.html', '', '中央社 via Yahoo! 奇摩新聞  06月17日 PM 19:17  ', '彭明輝：可以開除不適任的老闆嗎？', 'http://opinion.cw.com.tw/blog/profile/30/article/3144', '', '天下雜誌  07月30日 PM 18:25  ', '鐵人夢語－營造快樂學習環境', 'http://tw.news.yahoo.com/%E9%90%B5%E4%BA%BA%E5%A4%A2%E8%AA%9E-%E7%87%9F%E9%80%A0%E5%BF%AB%E6%A8%82%E5%AD%B8%E7%BF%92%E7%92%B0%E5%A2%83-215036275.html', '', '中時電子報 via Yahoo! 奇摩新聞  03月25日 AM 05:50  ', '2015-08-04 16:49:58', 0),
(93, '郭雪芙', '郭雪芙', '郭雪芙（Puff Kuo，1988年6月30日－ ），台灣女藝人。台灣流行樂女歌手、影視演員，女子團體Dream Girls成員。', 'http://wownews.tw/upload_images_b/2013/09/07/013/522ae2b2cc1ef.JPG', 'http://lerler12.pixnet.net/blog/post/227995790-%E5%A4%A9%E5%AD%90%E7%89%B9%E5%8D%80--%E9%83%AD%E9%9B%AA%E8%8A%99%E8%88%87%E5%B9%B8%E9%81%8B%E7%B2%89%E7%B5%B2%E7%94%9C%E8%9C%9C%E4%B8%8B%E5%8D%88%E8%8C%B6-%E8%B2%BC%E5%BF%83', '天子特區- 郭雪芙與幸運粉絲甜蜜下午茶貼心提醒下載APP返鄉免塞車 ...', '來源：天子特區-...', 'jpeg', 1080, 720, '郭雪芙為古又文剪綵 美得像花仙子', 'http://tw.news.yahoo.com/%E9%83%AD%E9%9B%AA%E8%8A%99%E7%82%BA%E5%8F%A4%E5%8F%88%E6%96%87%E5%89%AA%E7%B6%B5-%E7%BE%8E%E5%BE%97%E5%83%8F%E8%8A%B1%E4%BB%99%E5%AD%90-102054112.html', '', '中央社 via Yahoo! 奇摩新聞  07月28日 PM 18:20  ', '郭雪芙「戴透明板扮隱形女」 網友：像甯采...', 'http://tw.news.yahoo.com/%E9%83%AD%E9%9B%AA%E8%8A%99-%E6%88%B4%E9%80%8F%E6%98%8E%E6%9D%BF%E6%89%AE%E9%9A%B1%E5%BD%A2%E5%A5%B3-%E7%B6%B2%E5%8F%8B-%E5%83%8F%E7%94%AF%E9%87%87%E8%87%A3-034801948.html', '', '東森新聞 via Yahoo! 奇摩新聞  07月17日 AM 11:48  ', '郭雪芙為古又文剪綵 美如花仙子【影】', 'http://www.cna.com.tw/news/amov/201507280343-1.aspx', '', 'Central News Agency  07月28日 PM 19:17  ', '2015-08-04 16:50:02', 1),
(95, '蕭敬騰', '蕭敬騰', '蕭敬騰（1987年3月30日－ ），臺灣著名華語流行音樂男歌手，出生於花蓮縣豐濱鄉成長於艋舺，嗓音渾厚高亢，唱腔多元，演唱曲風多樣化。他原本在餐廳駐唱，2007年參加台灣...', 'http://img1.gtimg.com/ent/pics/22035/22035032.jpg', 'http://jyflowercloth.blogspot.com/2011/07/jam-hsiao.html', 'JY-花不的花布: Jam Hsiao 蕭敬騰', '來源：JY-花不...', 'jpeg', 500, 333, '當江蕙告別演唱會嘉賓？ 蕭敬騰最想合唱《...', 'http://www.ettoday.net/news/20150727/541187.htm', '', 'ETtoday東森新聞雲  07月27日 PM 20:27  ', '老蕭演唱忘我 麥克風拿末端怕擋臉？', 'http://tw.news.yahoo.com/%E8%80%81%E8%95%AD%E6%BC%94%E5%94%B1%E5%BF%98%E6%88%91-%E9%BA%A5%E5%85%8B%E9%A2%A8%E6%8B%BF%E6%9C%AB%E7%AB%AF%E6%80%95%E6%93%8B%E8%87%89-105100152.html', '', '台灣醒報 via Yahoo! 奇摩新聞  07月27日 PM 18:51  ', '蕭敬騰憶追夢路 盼再和二姊合唱', 'http://www.epochtimes.com/b5/15/7/27/n4490064.htm', '', '大紀元時報  07月27日 PM 22:20  ', '2015-08-04 18:07:37', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fight_personality`
--

CREATE TABLE IF NOT EXISTS `fight_personality` (
  `id` int(11) unsigned NOT NULL,
  `personality_id` int(11) unsigned DEFAULT NULL,
  `round_id` int(11) unsigned DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=295 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fight_personality`
--

INSERT INTO `fight_personality` (`id`, `personality_id`, `round_id`, `createtime`) VALUES
(275, 1, NULL, '2015-08-04 18:14:52'),
(276, 2, NULL, '2015-08-04 18:15:00'),
(277, 4, NULL, '2015-08-04 18:15:08'),
(278, 5, NULL, '2015-08-04 18:15:23'),
(279, 6, NULL, '2015-08-04 18:15:32'),
(280, 7, NULL, '2015-08-04 18:15:43'),
(281, 8, NULL, '2015-08-04 18:15:48'),
(282, 9, NULL, '2015-08-04 18:16:04'),
(283, 10, NULL, '2015-08-04 18:16:10'),
(284, 11, NULL, '2015-08-04 18:16:24'),
(285, 12, NULL, '2015-08-04 18:16:30'),
(286, 13, NULL, '2015-08-04 18:16:45'),
(287, 14, NULL, '2015-08-04 18:16:56'),
(288, 15, NULL, '2015-08-04 18:17:01'),
(289, 16, NULL, '2015-08-04 18:17:09'),
(290, 20, NULL, '2015-08-04 18:17:14'),
(291, 24, NULL, '2015-08-04 18:17:22'),
(292, 26, NULL, '2015-08-04 18:17:26'),
(293, 27, NULL, '2015-08-04 18:17:34'),
(294, 28, NULL, '2015-08-04 18:17:39');

-- --------------------------------------------------------

--
-- 資料表結構 `fight_process`
--

CREATE TABLE IF NOT EXISTS `fight_process` (
  `id` int(10) unsigned NOT NULL,
  `round_id` int(10) unsigned NOT NULL,
  `winner_id` int(10) unsigned NOT NULL,
  `loser_id` int(10) unsigned NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5639 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `fight_result`
--

CREATE TABLE IF NOT EXISTS `fight_result` (
  `id` int(10) unsigned NOT NULL,
  `candidate_id` int(10) unsigned NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=640 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `personality`
--

CREATE TABLE IF NOT EXISTS `personality` (
  `id` int(11) NOT NULL,
  `content` varchar(20) DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `personality`
--

INSERT INTO `personality` (`id`, `content`, `createtime`) VALUES
(1, '王室血統', '2015-07-26 08:47:58'),
(2, '平民出身', '2015-07-26 08:48:28'),
(4, '經歷啟蒙有思想', '2015-07-26 08:49:02'),
(5, '領導魅力千呼萬應', '2015-07-26 08:49:40'),
(6, '不會太老', '2015-07-26 08:49:57'),
(7, '學富五車有內涵', '2015-07-26 08:50:14'),
(8, '黑白兩道通吃', '2015-07-26 08:52:27'),
(9, '八面玲瓏', '2015-07-26 08:52:59'),
(10, '說到做到', '2015-07-26 08:53:10'),
(11, '不容易流淚', '2015-07-26 08:53:29'),
(12, '女兒身', '2015-07-26 08:53:39'),
(13, '一步一腳印', '2015-07-26 08:53:47'),
(14, '說話不轉彎', '2015-07-26 08:53:58'),
(15, '體恤民意', '2015-07-26 08:54:06'),
(16, '看得高望得遠', '2015-07-26 08:54:48'),
(20, '清廉', '2015-07-28 13:55:21'),
(24, '有膽識有決斷力', '2015-08-02 07:13:24'),
(26, '有擔當', '2015-08-02 15:10:28'),
(27, '耐操', '2015-08-02 18:39:10'),
(28, '善於權謀協調', '2015-08-03 06:19:17');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `thebest` int(10) unsigned DEFAULT NULL,
  `fb_id` varchar(30) DEFAULT NULL,
  `fb_email` varchar(50) DEFAULT NULL,
  `fb_first_name` varchar(15) DEFAULT NULL,
  `fb_last_name` varchar(15) DEFAULT NULL,
  `fb_gender` varchar(10) DEFAULT NULL,
  `fb_name` varchar(30) DEFAULT NULL,
  `fb_timezone` int(10) DEFAULT NULL,
  `fb_update_time` varchar(25) DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `fb_verified` tinyint(1) DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `thebest`, `fb_id`, `fb_email`, `fb_first_name`, `fb_last_name`, `fb_gender`, `fb_name`, `fb_timezone`, `fb_update_time`, `fb_link`, `fb_verified`, `createtime`) VALUES
(3, 3, '10153458119676600', 'shianhong@yahoo.com.tw', 'Sean', 'Hung', 'male', 'Sean Hung', 8, '2015-06-05T20:32:08+0000', 'https://www.facebook.com/app_scoped_user_id/10153458119676600/', 1, '2015-07-26 08:42:02'),
(6, 3, '985498904816851', 'valleys107@yahoo.com.tw', 'Rain', 'Kuo', 'female', 'Rain Kuo', 8, '2015-07-01T08:19:30+0000', 'https://www.facebook.com/app_scoped_user_id/985498904816851/', 1, '2015-07-26 08:42:02'),
(7, 82, '1043520662326854', 'gameisfun@yahoo.com.tw', 'Kuang-Ting', 'Chen', 'male', 'Chen Kuang-Ting', 8, '2015-07-10T05:29:49+0000', 'https://www.facebook.com/app_scoped_user_id/1043520662326854/', 1, '2015-07-26 08:42:02'),
(8, 8, '1017035271647734', '', 'Tienchi', 'Hu', 'male', 'Tienchi Hu', 8, '2015-06-06T02:44:30+0000', 'https://www.facebook.com/app_scoped_user_id/1017035271647734/', 1, '2015-07-26 08:42:02'),
(16, 24, '10153157557419615', 'ayeu15@hotmail.com', 'Ayeu', 'Chen', 'male', 'Ayeu Chen', 8, '2015-03-28T05:32:46+0000', 'https://www.facebook.com/app_scoped_user_id/10153157557419615/', 1, '2015-07-26 08:42:02'),
(17, 15, '10154126756744922', 'jos_217@hotmail.com', 'Jos', 'Yeh', 'male', 'Jos Yeh', 8, '2015-06-06T14:02:31+0000', 'https://www.facebook.com/app_scoped_user_id/10154126756744922/', 1, '2015-07-26 08:42:02'),
(18, 11, '10153464746992604', 'sunnychi1021@gmail.com', 'Daisy', 'Lin', 'female', 'Daisy Lin', 8, '2015-05-13T14:46:41+0000', 'https://www.facebook.com/app_scoped_user_id/10153464746992604/', 1, '2015-07-26 08:42:02'),
(19, NULL, '10152941378245896', 'ohnodigolight@gmail.com', '孟賢', '陳', 'male', '陳孟賢', 8, '2015-06-05T20:47:39+0000', 'https://www.facebook.com/app_scoped_user_id/10152941378245896/', 1, '2015-07-26 08:42:02'),
(20, 8, '10153403597230470', '', 'Cynthia', 'Su', 'female', 'Cynthia Su', 8, '2015-07-15T08:06:47+0000', 'https://www.facebook.com/app_scoped_user_id/10153403597230470/', 1, '2015-07-26 08:42:02'),
(21, 3, '10206182048085827', 'kiddliu@me.com', 'Kidd', 'Liu', 'male', 'Kidd Liu', 8, '2015-06-11T02:41:52+0000', 'https://www.facebook.com/app_scoped_user_id/10206182048085827/', 1, '2015-07-30 12:56:44'),
(25, 26, '10205820652850034', 'tigger19870528@hotmail.com', 'Daniel', 'Chiu', 'male', 'Daniel Chiu', 8, '2015-06-14T08:58:42+0000', 'https://www.facebook.com/app_scoped_user_id/10205820652850034/', 1, '2015-08-04 17:03:48');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `fight_personality`
--
ALTER TABLE `fight_personality`
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
-- 資料表索引 `personality`
--
ALTER TABLE `personality`
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- 使用資料表 AUTO_INCREMENT `fight_personality`
--
ALTER TABLE `fight_personality`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=295;
--
-- 使用資料表 AUTO_INCREMENT `fight_process`
--
ALTER TABLE `fight_process`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5639;
--
-- 使用資料表 AUTO_INCREMENT `fight_result`
--
ALTER TABLE `fight_result`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=640;
--
-- 使用資料表 AUTO_INCREMENT `personality`
--
ALTER TABLE `personality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
