-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2019 at 11:27 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alspok_maistas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kita`
--

DROP TABLE IF EXISTS `tbl_kita`;
CREATE TABLE IF NOT EXISTS `tbl_kita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_lithuanian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `tbl_kita`
--

INSERT INTO `tbl_kita` (`id`, `product`, `quantity`, `notes`) VALUES
(1, 'Pop. rankšluoščiai', '2 vnt.', 'dikelė pakuotė');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logreg`
--

DROP TABLE IF EXISTS `tbl_logreg`;
CREATE TABLE IF NOT EXISTS `tbl_logreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `activity` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `tbl_logreg`
--

INSERT INTO `tbl_logreg` (`id`, `username`, `password`, `email`, `phone`, `activity`) VALUES
(1, 'Rasa', '123456', 'rasiko@gmail.com', '+37068647139', 1),
(2, 'Alvydas', '123456', 'alspok@gmail.com', '+37069831479', 1),
(15, 'a', 'a', 'alspok@lt', '65646464646', 1),
(10, 'rasa', '123456', 'alspok@lt', '65646464646', 0),
(14, 'a', 'a', 'alspok@lt', '65646464646', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maistas`
--

DROP TABLE IF EXISTS `tbl_maistas`;
CREATE TABLE IF NOT EXISTS `tbl_maistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(256) CHARACTER SET utf8 NOT NULL,
  `quantity` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `notes` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `tbl_maistas`
--

INSERT INTO `tbl_maistas` (`id`, `product`, `quantity`, `notes`) VALUES
(1, 'Pienas', '2l', '㧾'),
(2, 'Varškė', '2pak.', 'B楲ﻸ'),
(3, 'Grietine', '1vnt.', '20%'),
(4, 'Grietine', '1vnt.', '20%'),
(5, 'asdf', 'asdf', '20%'),
(6, 'asdfasdf', '1vnt.', 'asdfasd'),
(7, 'Grietine', '1vnt.', '20%'),
(8, 'Grietine', '1vnt.', 'Ä…ÄÄ™'),
(9, 'asdfasdf', '2', 'Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾Å¾');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
