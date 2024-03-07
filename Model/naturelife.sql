-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2024 at 07:21 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `villareservations`
--

INSERT INTO `villareservations` (`id`, `no_of_rooms`, `check_in_date`, `check_out_date`, `adults`, `kids`, `first_name`, `last_name`, `email`, `nic`, `contact_no`) VALUES
(1, 4, '2024-02-02', '2024-02-09', 4, 4, 'sdghsdgh', 'adfgsdfghg', 'gayan.huslter@gmail.com', '98765434578', '987654456789'),
(2, 4, '2024-02-02', '2024-02-09', 4, 4, 'sdghsdgh', 'adfgsdfghg', 'gayan.huslter@gmail.com', '98765434578', '987654456789'),
(3, 54, '2024-02-02', '2024-03-02', 314, 34, 'sdghsdgh', 'adfgsdfghg', 'gayan.huslter@gmail.com', '98765434578', '987654456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
