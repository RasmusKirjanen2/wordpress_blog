-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb13.awardspace.net
-- Generation Time: Feb 12, 2020 at 11:34 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2169676_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` text,
  `password` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(15, 'rasmuskirjanen@gmail.com', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4'),
(14, 'rasmus12354@gmail.com', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4');

-- --------------------------------------------------------

--
-- Table structure for table `blog_entry`
--

CREATE TABLE `blog_entry` (
  `entry_id` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `entry_text` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_entry`
--

INSERT INTO `blog_entry` (`entry_id`, `title`, `entry_text`, `date_created`) VALUES
(47, 'y6rr', '<p>ttyrtyrt</p>', '2016-07-18 19:03:33'),
(46, 'sadsasd', '<p>fdfsdfsdf</p>', '2016-07-18 13:05:32'),
(45, 'sssss', '<p><img src="img/1431289357263.jpg" alt="" width="491" height="250" /></p>\r\n<p>ewrfewfewf</p>', '2016-07-16 16:15:35'),
(42, 'lamb', '<p><img src="img/1431289357263.jpg" alt="" width="491" height="250" />sasdasd</p>', '2016-07-12 15:14:15'),
(43, 'kjjkjk rtret', '<p><span style="font-family: \'Times New Roman\'; font-size: medium;">img/1431289357263.jpg retret ewfwef ew</span></p>', '2016-07-15 19:27:50'),
(44, 'hdtfrh', '<p><img src="img/1446463254774.png" alt="" width="156" height="88" /></p>\r\n<p>allahu snacbar!</p>', '2016-07-16 14:41:41'),
(41, 'lalalala ertgfert rewrewr dsfdsf', '<p>dfgdfgdfgdf gdfgdfg df dsfsdf</p>', '2016-07-12 15:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `author` varchar(75) DEFAULT NULL,
  `txt` text,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `entry_id`, `author`, `txt`, `date`) VALUES
(2, 41, 'i7ugfu', 'gouygouy', '2016-07-12 15:20:48'),
(3, 41, 'gouyg', 'ouygouy', '2016-07-12 15:20:51'),
(4, 41, 'goyugoyu', 'ogyugo', '2016-07-12 15:20:53'),
(5, 41, 'tfyfi', 'tyfiytf', '2016-07-12 15:20:56'),
(6, 42, 'uihoiuhi', 'uhpiuhpiuh', '2016-07-12 15:21:33'),
(7, 42, 'ghfh', 'ddfddd', '2016-07-14 09:39:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog_entry`
--
ALTER TABLE `blog_entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `entry_id` (`entry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `blog_entry`
--
ALTER TABLE `blog_entry`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
