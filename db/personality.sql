-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 產生時間： 2015 年 08 月 05 日 02:21
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

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `personality`
--
ALTER TABLE `personality`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `personality`
--
ALTER TABLE `personality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
