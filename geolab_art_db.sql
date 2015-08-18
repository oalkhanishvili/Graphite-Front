-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2015 at 05:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geolab_art_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'art');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
`id` int(10) NOT NULL,
  `user_id` text NOT NULL,
  `marker_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `user_id`, `marker_id`) VALUES
(1, '0', 11),
(2, '0', 11),
(3, '2147483647', 11),
(4, '2147483647', 11),
(5, '2147483647', 11),
(6, '2147483647', 11),
(7, '2147483647', 11),
(8, '2147483647', 11),
(9, '2147483647', 11),
(10, '1441106692882834', 11),
(11, '14411066928828342', 4),
(12, '1441106692882834124', 4),
(13, '1441106692882834', 4);

-- --------------------------------------------------------

--
-- Table structure for table `peaceofart`
--

CREATE TABLE IF NOT EXISTS `peaceofart` (
`id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `pic_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `like` int(10) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peaceofart`
--

INSERT INTO `peaceofart` (`id`, `user_id`, `category_id`, `pic_name`, `title`, `description`, `like`, `longitude`, `latitude`, `create_date`) VALUES
(4, '1441106692882834', 2, '12.png', 'ჯემოლაბი', 'ქართლად გამომაქვს ტექსტი 1', 2, 44.782323, 41.718853, '2015-07-14 13:48:05'),
(11, '1441106692882834', 0, 'afd562c597df16854a8d8380041d25cc11.jpg', 'atasg', 'QTQWT', 1, 44.783363342285156, 41.70124284555466, '2015-07-24 12:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `fb_id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `prof_img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fb_id`, `name`, `surname`, `prof_img`) VALUES
(2, '1', 'lasha', '', ''),
(19, '1441106692882834', 'Oto Alkhanishvili', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `peaceofart_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `peaceofart_id`) VALUES
(3, 2, 4),
(4, 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peaceofart`
--
ALTER TABLE `peaceofart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `peaceofart`
--
ALTER TABLE `peaceofart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
