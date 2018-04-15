-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2018 at 01:01 PM
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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

DROP TABLE IF EXISTS `talent`;
CREATE TABLE IF NOT EXISTS `talent` (
  `talent_id` int(11) NOT NULL AUTO_INCREMENT,
  `talent_name` varchar(200) NOT NULL,
  `talent_profilepicture` varchar(200) DEFAULT NULL COMMENT 'Profile Picture filename.',
  `talent_type` varchar(30) NOT NULL,
  `talent_subtype` varchar(100) NOT NULL COMMENT 'Subtype of act',
  `talent_bio` text NOT NULL COMMENT 'Talent Biography.',
  `talent_country` varchar(30) NOT NULL COMMENT 'Country of the talent.',
  `talent_county` varchar(30) NOT NULL,
  `talent_town` varchar(30) NOT NULL,
  `talent_distance` int(11) NOT NULL,
  `talent_rating` float NOT NULL COMMENT 'Average Rating',
  `talent_bookings` int(11) NOT NULL COMMENT 'Number of Bookings',
  PRIMARY KEY (`talent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`talent_id`, `talent_name`, `talent_profilepicture`, `talent_type`, `talent_subtype`, `talent_bio`, `talent_country`, `talent_county`, `talent_town`, `talent_distance`, `talent_rating`, `talent_bookings`) VALUES
(1, 'John Smith', 'usermale1.jpg', 'Singer', 'Jazz', 'This is some test bio for John Smith.', 'United Kingdom', 'Bedfordshire', 'Bedford', 20, 3, 10),
(2, 'The Band', '0', 'Band', 'Rock', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary re', 'United Kingdom', 'Bedfordshire', 'Kempston', 25, 1.1, 4),
(3, 'New Person', '0', 'Musician', 'Acoustic', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring whi', 'United States of America', 'New York', 'Brooklyn', 10, 3.2, 7),
(4, 'New Person', '0', 'Musician', 'Acoustic', '', 'United States of America', 'New York', 'Brooklyn', 10, 4, 11),
(5, 'Mr Edgar', '0', 'Magician', 'Close-Up', 'Hello, I am Mr Edgar, I hate the world.', 'United Kingdom', 'Bedfordshire', 'Bedford', 30, 2.25, 6),
(6, 'The Deception', '0', 'Magician', 'Confidence Trickster', 'Something about Deception and things.', 'United Kingdom', 'Bedfordshire', 'Bedford', 20, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID Number.',
  `username` varchar(50) NOT NULL COMMENT 'User Username.',
  `password` varchar(255) NOT NULL COMMENT 'User Password.',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'Josh', '$2y$10$aPHO20LDK5SKhFHeuLgXzuBxahKmubnD8p8W2/xbcpwQ3ODEW/fOS');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(200) NOT NULL,
  `venue_type` varchar(200) NOT NULL,
  `venue_bio` text NOT NULL COMMENT 'Venue biography.',
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `venue_type`, `venue_bio`, `venue_add1`, `venue_add2`, `venue_add3`, `venue_postcode`, `venue_country`, `venue_town`, `venue_email`, `venue_phone`, `venue_openingtime`, `venue_closingtime`, `venue_active`, `venue_userid`) VALUES
(1, 'George & Dragon', 'Public House', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non nibh eget tellus lobortis tincidunt. Curabitur sodales felis a nunc ornare, sit amet aliquam odio finibus. Vivamus sollicitudin massa mi, in consequat enim iaculis id. Vivamus hendrerit sollicitudin rutrum. Nunc ut ultricies nunc, nec lobortis nisi. Vivamus erat odio, finibus.', '', '', '', 'MK420XX', 'United Kingdom', 'Bedford', 'gandd@email.com', '01234222222', '1100', '0000', 1, ''),
(2, 'New Pub', 'Public House', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non nibh eget tellus lobortis tincidunt. Curabitur sodales felis a nunc ornare, sit amet aliquam odio finibus. Vivamus sollicitudin massa mi, in consequat enim iaculis id. Vivamus hendrerit sollicitudin rutrum. Nunc ut ultricies nunc, nec lobortis nisi. Vivamus erat odio, finibus.', '', '', '', 'MK420XX', 'United Kingdom', 'Bedford', 'mypub@email.com', '01234222222', '1100', '0000', 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
