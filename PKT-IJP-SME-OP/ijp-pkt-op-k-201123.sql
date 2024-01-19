-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 08:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbp-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ijp-pkt-op-k-201123`
--

CREATE TABLE `ijp-pkt-op-k-201123` (
  `id` int(50) NOT NULL,
  `emp_id` varchar(500) DEFAULT NULL,
  `full_name` varchar(500) DEFAULT NULL,
  `department` varchar(500) DEFAULT NULL,
  `totalScore` int(11) DEFAULT NULL,
  `timeTaken` varchar(500) DEFAULT NULL,
  `q1` varchar(500) DEFAULT NULL,
  `q2` varchar(1000) DEFAULT NULL,
  `q3` varchar(1000) DEFAULT NULL,
  `q4` varchar(1000) DEFAULT NULL,
  `q5` varchar(1000) DEFAULT NULL,
  `q6` varchar(1000) DEFAULT NULL,
  `q7` varchar(1000) DEFAULT NULL,
  `q8` varchar(1000) DEFAULT NULL,
  `q9` varchar(1000) DEFAULT NULL,
  `q10` varchar(1000) DEFAULT NULL,
  `q11` varchar(1000) DEFAULT NULL,
  `q12` varchar(1000) DEFAULT NULL,
  `q13` varchar(1000) DEFAULT NULL,
  `q14` varchar(1000) DEFAULT NULL,
  `q15` varchar(1000) DEFAULT NULL,
  `q16` varchar(1000) DEFAULT NULL,
  `q17` varchar(1000) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ijp-pkt-op-k-201123`
--
ALTER TABLE `ijp-pkt-op-k-201123`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ijp-pkt-op-k-201123`
--
ALTER TABLE `ijp-pkt-op-k-201123`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
