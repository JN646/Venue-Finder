-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2018 at 10:56 AM
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
-- Table structure for table `talent`
--

DROP TABLE IF EXISTS `talent`;
CREATE TABLE IF NOT EXISTS `talent` (
  `talent_id` int(11) NOT NULL AUTO_INCREMENT,
  `talent_name` varchar(200) NOT NULL,
  `talent_type` varchar(30) NOT NULL,
  `talent_country` varchar(30) NOT NULL,
  `talent_county` varchar(30) NOT NULL,
  `talent_town` varchar(30) NOT NULL,
  `talent_distance` int(11) NOT NULL,
  PRIMARY KEY (`talent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`talent_id`, `talent_name`, `talent_type`, `talent_country`, `talent_county`, `talent_town`, `talent_distance`) VALUES
(1, 'John Smith', 'Singer', 'United Kingdom', 'Bedfordshire', 'Bedford', 20),
(2, 'The Band', 'Rock Band', 'United Kingdom', 'Bedfordshire', 'Kempston', 25),
(3, 'New Person', 'Musician', 'United States of America', 'New York', 'Brooklyn', 10),
(4, 'New Person', 'Musician', 'United States of America', 'New York', 'Brooklyn', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
