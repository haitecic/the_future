-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 產生時間： 2015 年 08 月 05 日 02:26
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
(3, NULL, '10153458119676600', 'shianhong@yahoo.com.tw', 'Sean', 'Hung', 'male', 'Sean Hung', 8, '2015-06-05T20:32:08+0000', 'https://www.facebook.com/app_scoped_user_id/10153458119676600/', 1, '2015-08-04 18:25:34'),
(6, NULL, '985498904816851', 'valleys107@yahoo.com.tw', 'Rain', 'Kuo', 'female', 'Rain Kuo', 8, '2015-07-01T08:19:30+0000', 'https://www.facebook.com/app_scoped_user_id/985498904816851/', 1, '2015-08-04 18:25:40'),
(7, NULL, '1043520662326854', 'gameisfun@yahoo.com.tw', 'Kuang-Ting', 'Chen', 'male', 'Chen Kuang-Ting', 8, '2015-07-10T05:29:49+0000', 'https://www.facebook.com/app_scoped_user_id/1043520662326854/', 1, '2015-08-04 18:26:09'),
(8, NULL, '1017035271647734', '', 'Tienchi', 'Hu', 'male', 'Tienchi Hu', 8, '2015-06-06T02:44:30+0000', 'https://www.facebook.com/app_scoped_user_id/1017035271647734/', 1, '2015-08-04 18:26:03'),
(16, NULL, '10153157557419615', 'ayeu15@hotmail.com', 'Ayeu', 'Chen', 'male', 'Ayeu Chen', 8, '2015-03-28T05:32:46+0000', 'https://www.facebook.com/app_scoped_user_id/10153157557419615/', 1, '2015-08-04 18:25:59'),
(17, NULL, '10154126756744922', 'jos_217@hotmail.com', 'Jos', 'Yeh', 'male', 'Jos Yeh', 8, '2015-06-06T14:02:31+0000', 'https://www.facebook.com/app_scoped_user_id/10154126756744922/', 1, '2015-08-04 18:25:55'),
(18, NULL, '10153464746992604', 'sunnychi1021@gmail.com', 'Daisy', 'Lin', 'female', 'Daisy Lin', 8, '2015-05-13T14:46:41+0000', 'https://www.facebook.com/app_scoped_user_id/10153464746992604/', 1, '2015-08-04 18:25:52'),
(19, NULL, '10152941378245896', 'ohnodigolight@gmail.com', '孟賢', '陳', 'male', '陳孟賢', 8, '2015-06-05T20:47:39+0000', 'https://www.facebook.com/app_scoped_user_id/10152941378245896/', 1, '2015-07-26 08:42:02'),
(20, NULL, '10153403597230470', '', 'Cynthia', 'Su', 'female', 'Cynthia Su', 8, '2015-07-15T08:06:47+0000', 'https://www.facebook.com/app_scoped_user_id/10153403597230470/', 1, '2015-08-04 18:25:43'),
(21, NULL, '10206182048085827', 'kiddliu@me.com', 'Kidd', 'Liu', 'male', 'Kidd Liu', 8, '2015-06-11T02:41:52+0000', 'https://www.facebook.com/app_scoped_user_id/10206182048085827/', 1, '2015-08-04 18:25:46'),
(25, NULL, '10205820652850034', 'tigger19870528@hotmail.com', 'Daniel', 'Chiu', 'male', 'Daniel Chiu', 8, '2015-06-14T08:58:42+0000', 'https://www.facebook.com/app_scoped_user_id/10205820652850034/', 1, '2015-08-04 18:25:50');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
