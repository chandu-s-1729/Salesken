-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 12:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `srs`
--

CREATE TABLE `srs` (
  `sno` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `english` int(10) NOT NULL,
  `maths` int(10) NOT NULL,
  `science` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `average` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srs`
--

INSERT INTO `srs` (`sno`, `name`, `semester`, `english`, `maths`, `science`, `total`, `average`) VALUES
(1, 'Uppala Rohitha', 'sem1', 95, 100, 93, 288, 96),
(2, 'Uppala Rohitha', 'sem2', 90, 95, 92, 277, 92),
(3, 'B V V N D BHAVANI', 'sem1', 90, 95, 92, 277, 92),
(4, 'B V V N D BHAVANI', 'sem2', 90, 90, 93, 273, 91),
(5, 'Chandu', 'sem1', 95, 90, 92, 277, 92),
(6, 'Chandu', 'sem2', 95, 90, 85, 270, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `srs`
--
ALTER TABLE `srs`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `srs`
--
ALTER TABLE `srs`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
