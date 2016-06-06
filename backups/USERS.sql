-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2016 at 03:49 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `USERS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `ID` int(16) NOT NULL AUTO_INCREMENT,
  `Email` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `Password` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `Surname` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `Organization` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Address` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `Country` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Email`, `Password`, `Name`, `Surname`, `Organization`, `Address`, `Country`) VALUES
(1, 'alex@test.com', '123456', 'Alex', 'Stan', 'UNIBZ', 'piazza Domenicani 3b', 'Italy'),
(2, 'mercy@test.com', '123456', 'Mercy', 'Lio', 'UNIBZ', 'piazza Gries 19', 'Kenya'),
(3, 'test@test.com', '123456', 'Admin', 'Super', 'UNIBZ', 'piazza Gries 19', 'Gries');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
