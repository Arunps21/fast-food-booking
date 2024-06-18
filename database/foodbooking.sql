-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2021 at 05:15 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(5) NOT NULL AUTO_INCREMENT,
  `foodid` int(10) NOT NULL,
  `foodrate` int(5) NOT NULL,
  `bookingquantity` int(5) NOT NULL,
  `bookingdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `currentdate` date NOT NULL,
  `totalamount` int(11) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `deliv_date` date DEFAULT NULL,
  `issuedate` date DEFAULT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `foodid`, `foodrate`, `bookingquantity`, `bookingdate`, `status`, `email`, `currentdate`, `totalamount`, `foodname`, `deliv_date`, `issuedate`) VALUES
(69, 11, 160, 1, '2021-11-30', 3, 'arunps880@gmail.com', '2021-11-24', 160, 'Nuggets', '2021-11-25', NULL),
(68, 6, 75, 4, '2021-11-22', 3, 'arunps880@gmail.com', '2021-11-22', 300, 'Taquitos', '2021-11-25', NULL),
(67, 3, 90, 1, '2021-10-13', 2, 'arunps880@gmail.com', '2021-10-13', 90, 'Slider', NULL, NULL),
(11, 9, 250, 2, '2021-09-27', 5, 'arunps880@gmail.com', '2021-09-17', 500, 'Subwaychicken', NULL, NULL),
(12, 9, 250, 1, '2021-09-27', 5, 'arunps880@gmail.com', '2021-09-17', 250, 'Subwaychicken', NULL, NULL),
(13, 4, 65, 1, '2021-09-27', 5, 'arunps880@gmail.com', '2021-09-17', 65, 'Natchofries', NULL, NULL),
(20, 10, 230, 2, '2021-09-14', 5, 'arunps880@gmail.com', '2021-09-17', 460, 'Paochicken', NULL, NULL),
(17, 12, 190, 3, '2021-09-27', 5, 'arunps880@gmail.com', '2021-09-17', 570, 'Smokeshack', NULL, NULL),
(22, 9, 250, 2, '2021-09-14', 5, 'arunps880@gmail.com', '2021-09-17', 500, 'Subwaychicken', NULL, NULL),
(23, 9, 250, 5, '2021-09-14', 5, 'arunps880@gmail.com', '2021-09-17', 1250, 'Subwaychicken', NULL, NULL),
(25, 10, 230, 1, '2021-09-28', 1, '', '2021-09-24', 230, 'Paochicken', NULL, NULL),
(26, 10, 230, 2, '2021-09-28', 5, 'arunps880@gmail.com', '2021-09-24', 460, 'Paochicken', NULL, NULL),
(27, 4, 65, 4, '2021-09-21', 5, 'arunps880@gmail.com', '2021-09-24', 260, 'Natchofries', NULL, NULL),
(31, 9, 250, 4, '2021-09-28', 5, 'arunps880@gmail.com', '2021-09-24', 1000, 'Subwaychicken', NULL, NULL),
(34, 10, 230, 2, '2021-09-28', 5, 'arunps880@gmail.com', '2021-09-24', 460, 'Paochicken', NULL, NULL),
(35, 4, 65, 1, '2021-09-26', 5, 'arunps880@gmail.com', '2021-09-24', 65, 'Natchofries', NULL, NULL),
(43, 10, 230, 2, '2021-09-27', 5, 'arunps880@gmail.com', '2021-09-24', 460, 'Paochicken', NULL, NULL),
(37, 9, 250, 2, '2021-09-22', 1, '', '2021-09-24', 500, 'Subwaychicken', NULL, NULL),
(42, 9, 250, 2, '2021-09-28', 3, 'arunps880@gmail.com', '2021-09-24', 500, 'Subwaychicken', NULL, NULL),
(44, 3, 90, 2, '2021-09-29', 3, 'arunps880@gmail.com', '2021-09-24', 180, 'Slider', NULL, NULL),
(64, 9, 250, 4, '2021-10-27', 2, 'arunps880@gmail.com', '2021-10-04', 1000, 'Subwaychicken', NULL, NULL),
(59, 4, 65, 1, '2021-09-29', 2, 'arunps880@gmail.com', '2021-09-24', 65, 'Natchofries', NULL, NULL),
(65, 4, 65, 2, '2021-10-30', 2, 'arunps880@gmail.com', '2021-10-11', 130, 'Natchofries', NULL, NULL),
(62, 9, 250, 1, '2021-10-27', 2, 'arunps880@gmail.com', '2021-10-04', 250, 'Subwaychicken', NULL, NULL),
(52, 9, 250, 1, '2021-09-28', 1, '', '2021-09-24', 250, 'Subwaychicken', NULL, NULL),
(66, 11, 160, 4, '2021-10-25', 2, 'arunps880@gmail.com', '2021-10-13', 640, 'Nuggets', NULL, NULL),
(70, 7, 160, 1, '2021-11-30', 2, 'arunps880@gmail.com', '2021-11-24', 160, 'Butterburger', NULL, NULL),
(71, 8, 200, 1, '2021-11-29', 3, 'arunps880@gmail.com', '2021-11-24', 200, 'Arbysbeefroast', '2021-11-25', NULL),
(72, 10, 230, 1, '2021-11-30', 4, 'arunps880@gmail.com', '2021-11-25', 230, 'Paochicken', NULL, '2021-11-25'),
(73, 8, 200, 2, '2021-11-29', 4, 'arunps880@gmail.com', '2021-11-25', 400, 'Arbysbeefroast', NULL, '2021-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `cimage` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cimage`) VALUES
(4, 'Veg', 'cc6832d4d78bb10ae6737379951f43ff_94d98021c3e19296c06a.jpg'),
(5, 'NonVeg', 'e4d63fe3e1e807057f502bdedd5049f1_871a5ce7d15ee8a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(5) NOT NULL AUTO_INCREMENT,
  `customername` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phonenumber` char(10) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `customername`, `email`, `password`, `address`, `pincode`, `phonenumber`) VALUES
(1, 'Arun', 'arunps880@gmail.com', '1234', 'pookottu house', '683578', '7034470692'),
(2, 'Abin', 'abin123@gamil.com', '1122', 'sankriti house', '683478', '7034470792'),
(3, 'Jetlin', 'jetlinpaulose@gamil.com', '2580', 'panikulaghara house', '683878', '9288085673'),
(4, 'Dhanush', 'dhanushkombara@gamil.com', '2255', 'kombara house', '683576', '9288070266'),
(5, 'Alfred', 'freddyfreaks@gamil.com', '5656', 'vidhayathil house', '683896', '7034940692'),
(6, 'jethin', 'jethin@gmail.com', '8899', 'xfcsafrde', '123456', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryid` int(5) NOT NULL AUTO_INCREMENT,
  `bookingid` int(5) NOT NULL,
  `foodid` int(10) NOT NULL,
  `shippingdate` date NOT NULL,
  `deliverydate` date NOT NULL,
  `deliveryaddress` varchar(30) NOT NULL,
  `delivery charge` int(5) NOT NULL,
  PRIMARY KEY (`deliveryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employeeid` int(5) NOT NULL AUTO_INCREMENT,
  `employeename` varchar(15) NOT NULL,
  `salary` int(5) NOT NULL,
  PRIMARY KEY (`employeeid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `employeename`, `salary`) VALUES
(1, 'arun', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `foodid` int(10) NOT NULL AUTO_INCREMENT,
  `foodname` varchar(15) NOT NULL,
  `bookingquantity` int(5) NOT NULL,
  `offerrate` int(5) NOT NULL,
  `totalamount` int(5) NOT NULL,
  `cid` int(5) NOT NULL,
  `fimage` varchar(100) NOT NULL,
  PRIMARY KEY (`foodid`),
  KEY `foreignkey` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `foodname`, `bookingquantity`, `offerrate`, `totalamount`, `cid`, `fimage`) VALUES
(3, 'Slider', 1, 90, 85, 4, '888f077134de3a5f902fc28fc52210bc_d50c7c3f880adcbf.jpg'),
(4, 'Natchofries', 1, 65, 60, 4, '130e75ac63bc7cd7d7eace4b34088022_f85fe53e575a.jpg'),
(5, 'Paneracheese', 1, 50, 45, 4, '27b1dd9258aca37d24c6c01b85686efc_baa3f846a2e3adb5ba6b.jpg'),
(6, 'Taquitos', 1, 75, 70, 4, '85baf906ecd782830a88cadd27a03f52_e020f7771ee5333e39.jpg'),
(7, 'Butterburger', 1, 160, 150, 4, 'bc8e6fd9c4102eaa92fe58c2b4b47be6_d2d84386ced753cbd.jpg'),
(8, 'Arbysbeefroast', 1, 200, 190, 5, '70986f93f1ebc2b03ecacf513afb81f0_a803186b7e7.jpg'),
(9, 'Subwaychicken', 1, 250, 220, 5, '8d4ca1466307a47c0c9c2afc609e849f_f4a26c9aecc.jpg'),
(10, 'Paochicken', 1, 230, 210, 5, '398726c5f5629beced9d11f03ec3cff6_28c6829f25b0bd.jpg'),
(11, 'Nuggets', 1, 160, 150, 5, '20f00ac39c17ed1af2284b1714acfc82_db0775b98e.jpg'),
(12, 'Smokeshack', 1, 190, 180, 5, '697e28c478d0097f12b371c6fb7624e3_08f3f868a4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `deliveryid` int(5) NOT NULL,
  `bookingid` int(11) NOT NULL,
  `deliverycharge` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
