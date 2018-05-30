-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-25 08:28:17
-- 服务器版本： 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zimage`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `star` smallint(6) DEFAULT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `pid`, `uid`, `content`, `star`, `date`) VALUES
(5, 14, 1, '', NULL, 1527161410),
(6, 14, 1, '45646545', NULL, 1527161443),
(8, 9, 16, 'nice', NULL, 1527224789),
(9, 9, 16, 'nice', NULL, 1527224791);

-- --------------------------------------------------------

--
-- 表的结构 `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `tag` smallint(6) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `authorid` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tagname` varchar(20) NOT NULL,
  `avgrating` smallint(6) DEFAULT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `picture`
--

INSERT INTO `picture` (`id`, `name`, `size`, `tag`, `url`, `authorid`, `author`, `tagname`, `avgrating`, `date`) VALUES
(21, 'Puppy', 322706, 1, './data/picture/1527229207615.jpg', 16, 'lxy', 'animal', NULL, 1527229207),
(9, '3', 400454, 1, './data/picture/1527125470892.jpg', 1, 'admin', 'animal', NULL, 1527125470),
(10, '4', 444895, 1, './data/picture/1527125484189.jpg', 1, 'admin', 'car', NULL, 1527125484),
(12, '6', 341942, 1, './data/picture/1527125506435.jpg', 1, 'admin', 'car', NULL, 1527125506),
(14, '7', 315663, 1, './data/picture/1527125533211.jpg', 1, 'admin', 'nature', NULL, 1527125533),
(20, 'animal01', 301172, 1, './data/picture/1527228343597.jpg', 16, 'lxy', 'animal', NULL, 1527228343),
(22, 'Eagle', 255459, 1, './data/picture/152722923322.jpg', 16, 'lxy', 'animal', NULL, 1527229233),
(23, 'Desert', 426874, 1, './data/picture/1527229259852.jpg', 16, 'lxy', 'nature', NULL, 1527229259),
(24, 'Race', 694139, 1, './data/picture/1527229441349.jpg', 16, 'lxy', 'car', NULL, 1527229441),
(25, 'Nice cloud', 1977436, 1, './data/picture/1527229471195.jpg', 16, 'lxy', 'nature', NULL, 1527229471);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `date`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'jkljklkl', 'jkljlkjlkj', 0),
(2, 'hehe', 'e10adc3949ba59abbe56e057f20f883e', 'jkljklj', 'jkljkljl', 0),
(3, 'hehe1', 'e10adc3949ba59abbe56e057f20f883e', 'jkljklj', 'jkljkljl', 0),
(4, 'a123456', '25f9e794323b453885f5181f1b624d0b', '7894651432', 'wang', 1527078471),
(5, '456123', 'f3ae1e93f5f0671e75ae22cb07aa41c2', '456789', '789456', 1527078534),
(6, '4564', 'ab233b682ec355648e7891e66c54191b', '465', '45656', 1527078573),
(7, 'wang123', 'e10adc3949ba59abbe56e057f20f883e', '465456', 'ceshi', 1527078725),
(8, 'admin123', 'e10adc3949ba59abbe56e057f20f883e', 'jkjkljk', '嘿嘿', 1527078841),
(9, 'admin456', 'e10adc3949ba59abbe56e057f20f883e', '7894566132', 'name', 1527078913),
(10, 'admin456798', 'e10adc3949ba59abbe56e057f20f883e', '7894566132', 'name', 1527078953),
(11, 'amdin', 'e10adc3949ba59abbe56e057f20f883e', '465789465', '456789', 1527078965),
(12, '123455', '68053af2923e00204c3ca7c6a3150cf7', '456', '456789', 1527078994),
(13, '123456', 'e10adc3949ba59abbe56e057f20f883e', '132465', '123456', 1527079010),
(14, '132132380931890', 'e10adc3949ba59abbe56e057f20f883e', '809809', '89089080', 1527079053),
(15, 'haha', 'e10adc3949ba59abbe56e057f20f883e', 'jkljlk', 'heieh', 1527079085),
(16, 'lxy', 'bc98b023302c55b39ff218bea906da6c', '123@gmail.com', 'li', 1527224321),
(17, 'zw', '202cb962ac59075b964b07152d234b70', 'sadflkjlkds', 'zhou', 1527225750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
