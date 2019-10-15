-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2019 at 09:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendances`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

DROP TABLE IF EXISTS `attendances`;
CREATE TABLE IF NOT EXISTS `attendances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `staffno` varchar(255) DEFAULT NULL,
  `time_in` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `fullname`, `staffno`, `time_in`) VALUES
(1, 'Datuk Dr. Aizai Azan', '0598', NULL),
(2, 'Akmal Arief Mohamed Fauzi', 'K0655', NULL),
(3, 'Abdul Rahman bin Haji Siraj', 'K0968', NULL),
(4, 'Teoh Teong Chooi', '0054', NULL),
(5, 'Mohd Mazuar Mohd Noor', '2267', NULL),
(6, 'Ainalida Mohamad Jamil', '1641', NULL),
(7, 'Rusmawati Khosim', '1106', NULL),
(8, 'Mohd Zaidi Harun', '4361', NULL),
(9, 'Aryati Mohd Sabirin', '0961', NULL),
(10, 'Akim Affandi Ahmad', '4342', NULL),
(11, 'Dr. Beni Isman Rusani', '3095', NULL),
(12, 'Datuk Dr. Akmal Hakim Arshad', '2934', NULL),
(13, 'Dr. Farina Mohd Salleh', '3588', NULL),
(14, 'Shamsul Hazli Ramly', '0816', NULL),
(15, 'Khairullizam Ahmad Termizi', '0512', NULL),
(16, 'Jamaliah Non', 'K0814', NULL),
(17, 'Nor Hasni Mat Jenon', '0535', NULL),
(18, 'Halizan Hasroni', '1190', NULL),
(19, 'Farid Irfan Choong Abdullah', '4280', NULL),
(20, 'Nor Eizati Mat Shum', '1219', NULL),
(21, 'Masriza Mohammad', '2940', NULL),
(22, 'Raya Pg Ulai', '1375', NULL),
(23, 'Nor Suzilawati Idris', '1806', NULL),
(24, 'Mohd Shafiee Mukhtar', '4191', NULL),
(25, 'Anida Elias', '0637', NULL),
(26, 'Lim Yet Foong', '0150', NULL),
(27, 'Sharul Faizal Mohd Saidi', '4067', NULL),
(28, 'Norhalim Kassim', '4467', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
