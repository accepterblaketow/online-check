-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-04 08:20:25
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
  `ev` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(100) NOT NULL,
  `score` int(10) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `log`
--

CREATE TABLE `log` (
  `id` int(100) NOT NULL,
  `roomid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `p` int(100) NOT NULL,
  `d1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `d2` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `log`
--

INSERT INTO `log` (`id`, `roomid`, `uid`, `p`, `d1`, `d2`) VALUES
(18, 26, 2, 3200, '2022-01-06', '2022-01-08'),
(19, 26, 2, 3200, '2022-01-05', '2022-01-07'),
(20, 28, 2, 8000, '2022-01-08', '2022-01-12'),
(21, 27, 2, 4000, '2022-01-06', '2022-01-08');

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
  `ph` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
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

-- --------------------------------------------------------

--
-- 資料表結構 `room`
--

CREATE TABLE `room` (
  `rname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p` int(50) NOT NULL,
  `c` int(50) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `room`
--

INSERT INTO `room` (`rname`, `des`, `p`, `c`, `img`, `id`) VALUES
('雅致雙人房', '簡潔俐落的空間風格，溫暖的大地色系室內裝潢，落地窗外寬廣的視野景觀。', 800, 10, '../upload/20211231173714', 26),
('雅致雙床房', '雅潔典雅的裝潢風格，寬敞設計擁有充足活動空間，觀景落地窗的設計。', 1000, 10, '../upload/20220101095059', 27),
('豪華單床房', '一張舒適的床，是旅人的渴望，愜意氛圍，放鬆身心靈。', 1000, 10, '../upload/20220101095405', 28),
('豪華雙床房', '加大的空間體驗，加倍的幸福感受。', 10000, 10, '../upload/20220101095533', 29);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ph` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `iid`, `ph`, `lo`, `sex`) VALUES
(1, '管理員', 'admin', '1234', '', '', '', ''),
(2, '李德龍', 'B10923001@yuntech.edu.tw', 'aaa', 'K12312323', '0912312311', '雲林縣斗六市龍潭路1號', '男');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `eva`
--
ALTER TABLE `eva`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `eva`
--
ALTER TABLE `eva`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `log`
--
ALTER TABLE `log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `res`
--
ALTER TABLE `res`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `room`
--
ALTER TABLE `room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
