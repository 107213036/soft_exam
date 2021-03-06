-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `soft`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exam`
--

CREATE TABLE `exam` (
  `applied` int(11) NOT NULL,
  `StdName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `StdID` int(11) NOT NULL,
  `Dad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `FundType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TSign` int(11) NOT NULL DEFAULT 0,
  `PSign` int(11) NOT NULL DEFAULT 0,
  `SSign` int(11) DEFAULT 0,
  `TExplain` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fund` int(11) NOT NULL,
  `SExplain` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `exam`
--

INSERT INTO `exam` (`applied`, `StdName`, `StdID`, `Dad`, `Mom`, `FundType`, `TSign`, `PSign`, `SSign`, `TExplain`, `Fund`, `SExplain`, `status`) VALUES
(1, '陳QQ', 107213000, '陳爸', '陳媽', '家庭突發因素', 1, 1, 1, 'teacher say', 0, '', 1),
(2, '徐FF', 107213099, '徐把拔', '徐馬麻', '低收入戶', 1, 0, 1, 'TExplain', 0, '', 0),
(9, '張先生', 106213088, '張叔叔', '張阿姨', '中低收入戶', 0, 0, 1, 'TExplain', 0, '', 0),
(10, '>???', 5, 'ijo', 'uhiu', '低收入戶', 0, 0, 1, 'TExplain', 0, '', 0),
(11, 'uhi', 0, 'jlk', 'lkl', '低收入戶', 0, 0, 1, 'TExplain', 0, '', 0),
(12, 'SEEEEEE', 107213039, 'SED', 'SEM', '中低收入戶', 1, 1, 1, 'TExplain', 0, 'SExplain', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `loginID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `loginID`, `password`) VALUES
(1, 'student', 'student'),
(2, 'teacher', 'teacher'),
(3, 'secretary', 'secretary'),
(4, 'principal', 'principal');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`applied`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exam`
--
ALTER TABLE `exam`
  MODIFY `applied` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
