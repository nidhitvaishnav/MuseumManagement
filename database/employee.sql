-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2015 at 04:49 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `museum_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contect` int(11) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(25) NOT NULL,
  `website` varchar(40) DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `post` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `uname`, `pword`, `email`, `name`, `contect`, `street`, `city`, `state`, `country`, `website`, `gender`, `date`, `month`, `year`, `post`) VALUES
(3, 'superstrom', 'superstrom', 'superstrom@castlesword.com', 'superstrom', 123456789, 'clg road', 'nadiad', 'gujarat', 'India', '', 'female', 5, 5, 1996, 'Director'),
(4, 'riya', '123456', 'mriya21rm@gmail.com', 'Modi Riya B', 2147483647, 'clg road', 'nadiad', 'gujarat', 'India', '', 'female', 21, 11, 1995, 'Art Curetor'),
(5, 'Kate', 'kate', 'kateBeckett@gmail.com', 'Kate Beckett', 45653764, '12th Prisinct', 'Newyork', 'Manhatten', 'United States ', '', 'female', 6, 2, 1981, 'Security Commissionar'),
(6, 'Shivani', 'abc', 'abc@gms.com', 'Thakkar Shivani', 1234567890, '', 'Baroda', 'gujarat', 'India', '', 'female', 14, 10, 1995, 'Art Curetor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
