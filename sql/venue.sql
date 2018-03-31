-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2018 at 03:43 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venues`
--

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(200) NOT NULL,
  `venue_type` varchar(200) NOT NULL,
  `venue_add1` varchar(255) NOT NULL,
  `venue_add2` varchar(255) NOT NULL,
  `venue_add3` varchar(255) NOT NULL,
  `venue_postcode` varchar(20) NOT NULL,
  `venue_country` varchar(100) NOT NULL,
  `venue_town` varchar(100) NOT NULL,
  `venue_email` varchar(150) NOT NULL,
  `venue_phone` varchar(15) NOT NULL,
  `venue_openingtime` varchar(4) NOT NULL,
  `venue_closingtime` varchar(4) NOT NULL,
  `venue_active` tinyint(1) NOT NULL,
  `venue_userid` varchar(200) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
