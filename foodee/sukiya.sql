-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 05:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `custbooking`
--

CREATE TABLE `custbooking` (
  `ID` int(11) NOT NULL,
  `Pax` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone_num` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `req` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custbooking`
--

INSERT INTO `custbooking` (`ID`, `Pax`, `Date`, `Time`, `name`, `phone_num`, `email`, `req`) VALUES
(4, 1, '2024-07-10', '13:59:00', 'qayyum', '0112012012', 'qayyyumm11@gmail.com', 'baby chair'),
(5, 1, '2024-07-10', '14:04:00', 'qayyum', '0112012012', 'qayyyumm11@gmail.com', ''),
(6, 2, '2024-07-31', '14:16:00', 'qayyum', '0112012012', 'wish@gmail.com', ''),
(7, 2, '2024-07-11', '22:09:00', 'wish', '0112012523', 'wish@gmail.com', ''),
(9, 1, '2024-07-11', '22:51:00', 'test', '0112012012', 'qayyyumm11@gmail.com', 'test'),
(10, 1, '2024-07-10', '22:53:00', 'test2', '0112012012', 'qayyyumm11@gmail.com', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `custinfo`
--

CREATE TABLE `custinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custinfo`
--

INSERT INTO `custinfo` (`id`, `name`, `email`, `phone_number`, `password`, `is_admin`) VALUES
(1, 'Muhammad Qayyum', 'qayyyumm11@gmail.com', '12345678', 'abc', 0),
(2, 'adam', 'fairusamar@gmail.com', '14141414', 'adam', 0),
(5, 'darwish', 'darwish@gmail.com', '011239087', '123', 0),
(6, 'Sukiya', 'sukiyaAdmin@gmail.com', '01121003738', 'sukiya123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Feedback` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `Feedback`) VALUES
(1, 'qayyum', 'qayyyumm11@gmail.com', 'halo'),
(3, 'a', 'a@gmail.com', 'a'),
(4, 'wish', 'wish@gmail.com', 'i want more meat ;)'),
(5, 'qayyum', 'a@gmail.com', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custbooking`
--
ALTER TABLE `custbooking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `custinfo`
--
ALTER TABLE `custinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custbooking`
--
ALTER TABLE `custbooking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `custinfo`
--
ALTER TABLE `custinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
