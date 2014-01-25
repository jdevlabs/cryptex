-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2014 at 08:28 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamedata`
--

CREATE TABLE IF NOT EXISTS `gamedata` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(3) NOT NULL,
  `score` int(10) NOT NULL,
  `reached` varchar(12) NOT NULL,
  `qlevel` int(3) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gamedata`
--

INSERT INTO `gamedata` (`userid`, `level`, `score`, `reached`, `qlevel`, `ques`, `ans`) VALUES
(1, 1, 1000, '1390067826', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(2) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `pass`, `email`, `name`,`gender`) VALUES
(1, 'dummy', 'pass', 'dummy@chu.in', 'Dummy User', 'M');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
