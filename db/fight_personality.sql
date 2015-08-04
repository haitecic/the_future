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

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `fight_personality`
--
ALTER TABLE `fight_personality`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `fight_personality`
--
ALTER TABLE `fight_personality`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=295;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
