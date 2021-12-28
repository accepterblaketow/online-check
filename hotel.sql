-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-28 03:35:50
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `hotel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `eva`
--

CREATE TABLE `eva` (
  `ev` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `eva`
--

INSERT INTO `eva` (`ev`) VALUES
('aaa'),
('aaa'),
('aaa'),
('aaa'),
('aaa'),
('aaa'),
('aaa'),
('aaa'),
('aaa'),
('aaa');

-- --------------------------------------------------------

--
-- 資料表結構 `res`
--

CREATE TABLE `res` (
  `id` int(100) NOT NULL,
  `roomid` int(100) NOT NULL,
  `d1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `d2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `na` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ph` int(100) NOT NULL,
  `lo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p` int(100) NOT NULL,
  `pay` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `da` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `op` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `c` int(100) NOT NULL,
  `em` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `res`
--

INSERT INTO `res` (`id`, `roomid`, `d1`, `d2`, `na`, `ph`, `lo`, `sex`, `iid`, `p`, `pay`, `da`, `uid`, `op`, `c`, `em`) VALUES
(14, 41, '2021-12-04', '2021-12-10', 'sss', 0, 'tyry', '男', 'eeeee', 52800, '線上刷卡', 6, 2, '555', 1, 'qqq');

-- --------------------------------------------------------

--
-- 資料表結構 `room`
--

CREATE TABLE `room` (
  `rname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p` int(50) NOT NULL,
  `c` int(50) NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `room`
--

INSERT INTO `room` (`rname`, `des`, `p`, `c`, `img`, `id`) VALUES
('雅致雙人房', '舒適寬大的空間，豪華時尚，柔軟大床，沙發，木桌，及日式拉門的配置典雅高貴氣息。', 8800, 30, '../upload/20211223145910', 41),
('雅致雙床房', '風格新穎的規劃與設計、貼心的服務讓您感覺彷彿回到家中的舒適溫暖，客房各有獨立陽台之設計。', 9000, 5, '../upload/20211224213711', 42);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`) VALUES
(1, '管理員', 'admin', '1234'),
(2, '李德龍', 'B10923001@yuntech.edu.tw', 'aaa'),
(3, '中国共产党中央委员会总书记', 'asdasd', 'aaa');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `res`
--
ALTER TABLE `res`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `room`
--
ALTER TABLE `room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
