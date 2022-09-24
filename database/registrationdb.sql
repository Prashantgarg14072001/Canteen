-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2020 at 05:17 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

DROP TABLE IF EXISTS `cont`;
CREATE TABLE IF NOT EXISTS `cont` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contactus` varchar(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`id`, `name`, `contactus`, `email`, `message`) VALUES
(1, 'TECHNICAL FUN', 'submit', 'sujkhfmdcuyk@gmail.com', 'dnmxnm'),
(2, 'Prashant pandey', '5214210', 'g@gamil.com', 'fjkmn ');

-- --------------------------------------------------------

--
-- Table structure for table `requestfood`
--

DROP TABLE IF EXISTS `requestfood`;
CREATE TABLE IF NOT EXISTS `requestfood` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `foodid` varchar(255) NOT NULL,
  `reqby` varchar(155) NOT NULL,
  `reqdate` varchar(20) NOT NULL,
  `reqstatus` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(1, 'Prashant', 'pandey', 'Male', 'hf@g.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'Prashant', 'pandey', 'Male', 'g@gamil.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'hhdsss', 'sss', 'Male', 'p@gmil.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(4, 'Prashant', 'pandey', 'Male', 'PrashanT100@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(5, 'Prashant', 'pandey', 'Male', 'hff@g.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Prashant', 'pandey', 'Male', 'Prashantvikash100@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addfood`
--

DROP TABLE IF EXISTS `tbl_addfood`;
CREATE TABLE IF NOT EXISTS `tbl_addfood` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `foodid` varchar(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `foodtype` varchar(255) NOT NULL,
  `foodpdf` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addfood`
--

INSERT INTO `tbl_addfood` (`id`, `foodid`, `foodname`, `foodtype`, `foodpdf`, `date`) VALUES
(1, 'cake', 'kl', 'hh', '52.jpg', '14/07/2001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`) VALUES
(1, 'pt@gm.com', '1234'),
(2, 'jyo@gm.com', '25'),
(3, 'jj@gmail.com', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
