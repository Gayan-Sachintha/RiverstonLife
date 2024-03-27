-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2024 at 08:21 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naturelife`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kasun', 'kasun@gmail.com', 'dimantha123'),
(2, 'dimantha', 'walallawitad@gmail.com', 'dimantha123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Dimantha', 'test@gmail.com', 'fdbvd');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(6, 'Basketball', '2021-02-05 00:00:00', '2021-02-05 14:30:00'),
(7, 'Birthday Party', '2021-02-12 00:00:00', '2021-02-13 00:00:00'),
(8, 'Hello', '2024-03-20 00:00:00', '2024-03-21 00:00:00'),
(9, 'booked ', '2024-03-14 00:00:00', '2024-03-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Admin_id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Admin_id`, `name`, `feedback`) VALUES
(2, 1, 'Dimantha', 'defcewfwcfacsc');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adminID` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `packageName` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `imagePath` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `adminID`, `status`, `packageName`, `description`, `price`, `imagePath`) VALUES
(3, 2, 'Approved', 'Cabana With', 'afsdf fvdbhyr yte ', 2600, '../View/assets/uploads/WhatsApp Image 2024-01-09 at 01.26.19(1).jpeg'),
(4, 2, 'Approved', 'Mountain Rides', 'dvcsvds dsfgsdgv sdfgsdgd ergegv', 2000, '../View/assets/uploads/fairy-forest-2d-background-environment-mobile-game-high-quality-horizontal-background-landscape-gaming-template-design-location-generative_159242-19280-transformed(1).jpeg'),
(5, 2, 'Approved', 'Mountain Rides With Kart', 'fasdf dvcsvds dsfgsdgv sdfgsdgd ergegvfdf', 3000, '../View/assets/uploads/WhatsApp Image 2024-01-12 at 01.43.04.jpeg'),
(6, 1, 'Approved', 'Mountain Rides With Kart', 'asdfvsvfsavsv v svsdvssdsvcsvs', 50002, '../View/assets/uploads/awreteiahenrgopi.png'),
(7, 1, 'Approved', 'Cabana With Foods', 'fasdf dvcsvds dsfgsdgv sdfgsdgd ergegvfdf', 12000, '../View/assets/uploads/WhatsApp Image 2024-01-12 at 01.43.04.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `package_bookings`
--

DROP TABLE IF EXISTS `package_bookings`;
CREATE TABLE IF NOT EXISTS `package_bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `adults` int NOT NULL,
  `kids` int DEFAULT '0',
  `otherMessage` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(255) DEFAULT NULL,
  `contactNo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `package_bookings`
--

INSERT INTO `package_bookings` (`id`, `package`, `time`, `adults`, `kids`, `otherMessage`, `firstName`, `lastName`, `email`, `nic`, `contactNo`) VALUES
(1, 'basic', '03:42:00', 4, 4, '0', 'Gayan', 'Kottawa Gamage', 'gayan.huslter@gmail.com', '98765434578', '56543'),
(2, 'basic', '03:42:00', 4, 4, '0', 'Gayan', 'Kottawa Gamage', 'gayan.huslter@gmail.com', '98765434578', '56543'),
(3, 'basic', '03:42:00', 4, 4, '0', 'Gayan', 'Kottawa Gamage', 'gayan.huslter@gmail.com', '98765434578', '56543'),
(4, 'basic', '00:46:00', 4, 2, '0', 'Gayan', 'Kottawa Gamage', 'gayan.huslter@gmail.com', '2323356', '334546');

-- --------------------------------------------------------

--
-- Table structure for table `villareservations`
--

DROP TABLE IF EXISTS `villareservations`;
CREATE TABLE IF NOT EXISTS `villareservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  `no_of_rooms` int NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `adults` int NOT NULL,
  `kids` int DEFAULT '0',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `villareservations`
--

INSERT INTO `villareservations` (`id`, `status`, `no_of_rooms`, `check_in_date`, `check_out_date`, `adults`, `kids`, `first_name`, `last_name`, `email`, `nic`, `contact_no`) VALUES
(1, 'Approved', 4, '2024-02-02', '2024-02-09', 4, 4, 'sdghsdgh', 'adfgsdfghg', 'gayan.huslter@gmail.com', '98765434578', '987654456789'),
(2, 'Approved', 4, '2024-02-02', '2024-02-09', 4, 4, 'sdghsdgh', 'adfgsdfghg', 'gayan.huslter@gmail.com', '98765434578', '987654456789'),
(3, 'Approved', 54, '2024-02-02', '2024-03-02', 314, 34, 'sdghsdgh', 'adfgsdfghg', 'walallawitad@gmail.com', '98765434578', '987654456789'),
(6, 'Approved', 2, '2024-03-23', '2024-03-26', 2, 2, 'Dimantha', 'Walallawita', 'walallawitat@gmail.com', '200025603288', '0711936100'),
(7, 'Cancelled', 5, '2024-03-14', '2024-03-29', 2, 3, 'Dimantha', 'Thihara', 'walallawitat@gmail.com', '20025656895', '0711936100'),
(8, 'Pending', 2, '2024-03-29', '2024-03-31', 2, 2, 'Dimantha', 'dimantha', 'test@gmail.com', '200025603288', '0714485969'),
(9, 'Pending', 2, '2024-04-04', '2024-04-03', 2, 2, 'W.K', 'Walallawita', 'walallawitad@gmail.com', '200025603288', '+94711936100');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
