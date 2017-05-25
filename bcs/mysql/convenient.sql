-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2017 年 05 月 25 日 16:53
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `convenient`
--
CREATE DATABASE IF NOT EXISTS `convenient` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `convenient`;

-- --------------------------------------------------------

--
-- 資料表結構 `balance`
--

CREATE TABLE `balance` (
  `BalanceID` int(10) NOT NULL,
  `Balance` int(10) NOT NULL,
  `BDatetime` datetime NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `balance`
--

INSERT INTO `balance` (`BalanceID`, `Balance`, `BDatetime`, `MemberID`) VALUES
(9, 100, '0000-00-00 00:00:00', 1),
(11, 50, '0000-00-00 00:00:00', 1),
(12, 50, '0000-00-00 00:00:00', 6);

-- --------------------------------------------------------

--
-- 資料表結構 `deposit`
--

CREATE TABLE `deposit` (
  `DepositID` int(10) NOT NULL,
  `Deposit` int(10) NOT NULL,
  `DDatetime` datetime NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `deposit`
--

INSERT INTO `deposit` (`DepositID`, `Deposit`, `DDatetime`, `MemberID`) VALUES
(1, 100, '0000-00-00 00:00:00', 1),
(2, 20, '0000-00-00 00:00:00', 1),
(3, 3, '0000-00-00 00:00:00', 6);

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `MemberID` int(10) NOT NULL,
  `MemberName` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberAccount` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberPassword` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberDatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`MemberID`, `MemberName`, `MemberAccount`, `MemberPassword`, `MemberDatetime`) VALUES
(1, 'a', 'aa', 'aaa', '0000-00-00 00:00:00'),
(6, 'b', 'bb', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `selectmembers`
--

CREATE TABLE `selectmembers` (
  `SMID` int(10) NOT NULL,
  `SConvenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SPrice` int(10) NOT NULL,
  `SQuantity` int(10) NOT NULL,
  `STotal` int(10) NOT NULL,
  `SM` int(10) NOT NULL,
  `STodayStore` int(10) NOT NULL,
  `SDatetimes` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `selectmembers`
--

INSERT INTO `selectmembers` (`SMID`, `SConvenient`, `SPrice`, `SQuantity`, `STotal`, `SM`, `STodayStore`, `SDatetimes`) VALUES
(29, '雞排', 20, 0, 0, 1, 18, '0000-00-00 00:00:00'),
(31, '雞腿', 20, 0, 0, 1, 20, '0000-00-00 00:00:00'),
(32, '雞排', 20, 0, 0, 6, 21, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `stores`
--

CREATE TABLE `stores` (
  `StoreID` int(10) NOT NULL,
  `StoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `StroePhone` int(10) NOT NULL,
  `StroeDescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `StorePic` text COLLATE utf8_unicode_ci NOT NULL,
  `StoreConvenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SCPrice` int(10) NOT NULL,
  `StoreDatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `stores`
--

INSERT INTO `stores` (`StoreID`, `StoreName`, `StroePhone`, `StroeDescription`, `StorePic`, `StoreConvenient`, `SCPrice`, `StoreDatetime`) VALUES
(13, 'a', 0, 'aa', 'http://www.railway-bento.com.tw/wp-content/uploads/2013/10/014%E6%BB%B7%E9%A6%99%E9%9B%9E%E8%85%BF%E9%A3%AF.jpg', '雞腿', 10, '0000-00-00 00:00:00'),
(14, 'b', 1, 'bb', 'http://2.bp.blogspot.com/-cxUwl5Oz0T0/VnqsHm5gbMI/AAAAAAAAE3w/nOv5stQ5E9A/s1600/IMG_0930.jpg', '雞排', 20, '0000-00-00 00:00:00'),
(16, 'c', 2, 'cc', 'http://img.ltn.com.tw/Upload/liveNews/BigPic/600_php2eoHWE.jpg', '噁心', 30, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `todaymenu`
--

CREATE TABLE `todaymenu` (
  `TodayID` int(10) NOT NULL,
  `TodayStoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TodayStorePhone` int(10) NOT NULL,
  `TodayDatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `todaymenu`
--

INSERT INTO `todaymenu` (`TodayID`, `TodayStoreName`, `TodayStorePhone`, `TodayDatetime`) VALUES
(18, 'a', 0, '0000-00-00 00:00:00'),
(20, 'b', 1, '0000-00-00 00:00:00'),
(21, 'c', 0, '0000-00-00 00:00:00');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`BalanceID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- 資料表索引 `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`DepositID`),
  ADD KEY `MemberID_1` (`MemberID`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `MemberName` (`MemberName`);

--
-- 資料表索引 `selectmembers`
--
ALTER TABLE `selectmembers`
  ADD PRIMARY KEY (`SMID`),
  ADD KEY `SM` (`SM`),
  ADD KEY `SPrice` (`SPrice`),
  ADD KEY `STodayStore` (`STodayStore`),
  ADD KEY `StoreConvenient_idx` (`SConvenient`),
  ADD KEY `SM_2` (`SM`);

--
-- 資料表索引 `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`StoreID`),
  ADD KEY `StoreName` (`StoreName`),
  ADD KEY `StroePhone` (`StroePhone`),
  ADD KEY `StoreConvenient` (`StoreConvenient`);

--
-- 資料表索引 `todaymenu`
--
ALTER TABLE `todaymenu`
  ADD PRIMARY KEY (`TodayID`),
  ADD KEY `TodayStoreName` (`TodayStoreName`),
  ADD KEY `TodayStroePhone` (`TodayStorePhone`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `balance`
--
ALTER TABLE `balance`
  MODIFY `BalanceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `deposit`
--
ALTER TABLE `deposit`
  MODIFY `DepositID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `selectmembers`
--
ALTER TABLE `selectmembers`
  MODIFY `SMID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用資料表 AUTO_INCREMENT `stores`
--
ALTER TABLE `stores`
  MODIFY `StoreID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用資料表 AUTO_INCREMENT `todaymenu`
--
ALTER TABLE `todaymenu`
  MODIFY `TodayID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `MemberID_2` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `MemberID_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `selectmembers`
--
ALTER TABLE `selectmembers`
  ADD CONSTRAINT `SM_2` FOREIGN KEY (`SM`) REFERENCES `members` (`MemberID`),
  ADD CONSTRAINT `STodayStore` FOREIGN KEY (`STodayStore`) REFERENCES `todaymenu` (`TodayID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `todaymenu`
--
ALTER TABLE `todaymenu`
  ADD CONSTRAINT `TodayStoreName` FOREIGN KEY (`TodayStoreName`) REFERENCES `stores` (`StoreName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TodayStroePhone` FOREIGN KEY (`TodayStorePhone`) REFERENCES `stores` (`StroePhone`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
