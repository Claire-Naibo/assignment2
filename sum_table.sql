-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 10:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addition`
--

-- --------------------------------------------------------

--
-- Table structure for table `sum_table`
--

CREATE TABLE `sum_table` (
  `ID` int(8) NOT NULL,
  `Firstnumber` int(222) NOT NULL,
  `Secondnumber` int(222) NOT NULL,
  `result` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sum_table`
--

INSERT INTO `sum_table` (`ID`, `Firstnumber`, `Secondnumber`, `result`) VALUES
(7, 12, 12, 24),
(9, 13, 15, 28),
(12, 15, 56, 71),
(13, 78, 888, 966),
(14, 78, 888, 966);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sum_table`
--
ALTER TABLE `sum_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sum_table`
--
ALTER TABLE `sum_table`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
