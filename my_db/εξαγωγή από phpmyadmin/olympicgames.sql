-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 05:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olympicgames`
--

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE `standings` (
  `Sport` varchar(200) NOT NULL,
  `Country` varchar(200) NOT NULL,
  `Medals` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`Sport`, `Country`, `Medals`) VALUES
('Archery', 'Albania', 'gold'),
('Archery', 'Albania', 'gold'),
('Archery', 'Albania', 'gold'),
('Archery', 'Afghanistan', 'bronze'),
('Athletics', 'Algeria', 'silver'),
('Badminton', 'Albania', 'gold'),
('Athletics', 'Algeria', 'gold'),
('Archery', 'Afghanistan', 'gold'),
('Archery', 'Algeria', 'bronze'),
('Archery', 'Afghanistan', 'gold'),
('', '', ''),
('Archery', 'Algeria', 'silver'),
('Badminton', 'Albania', 'bronze');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
