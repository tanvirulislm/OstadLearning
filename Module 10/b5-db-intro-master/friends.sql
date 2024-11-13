-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 04:31 PM
-- Server version: 8.0.36
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friends`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `note` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `dob`, `address`, `note`) VALUES
(1, 'Rahim', 'rahims@rahim.com', 1234, '2001-01-04', 'habijabi address', ''),
(2, 'Karim', 'karim@karim.com', 2345, '2003-11-13', 'jana nai', '');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` int NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `name`, `amount`, `type`, `date`, `return_date`) VALUES
(1, 'Rahim', 100, 'L', '2024-11-05', NULL),
(2, 'Rahim', 500, 'L', '2024-11-20', NULL),
(3, 'Karim', 250, 'L', '2024-11-03', NULL),
(4, 'Jahid', 1000, 'B', '2024-11-01', NULL),
(5, 'Dulal', 2000, 'L', '2024-11-12', NULL),
(7, 'Minhaz', 5000, 'B', '2024-11-03', NULL),
(8, 'Miraz', 500, 'B', '2024-11-03', NULL),
(9, 'Munir', 500, 'L', '2024-11-03', NULL),
(10, 'Munir', 500, 'L', '2024-11-03', NULL),
(11, 'Ali', 750, 'B', '2024-11-02', NULL),
(12, 'Sara', 1000, 'L', '2024-11-01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
