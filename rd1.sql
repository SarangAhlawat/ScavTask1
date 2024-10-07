-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 09:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scavanger_hunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `rd1`
--

CREATE TABLE `rd1` (
  `id` int(11) NOT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `team_id` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `time_taken` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rd1`
--

INSERT INTO `rd1` (`id`, `team_name`, `team_id`, `points`, `time_taken`) VALUES
(1, 'champ', '124', 11, 48.632),
(2, 'win', '126', 15, 62.734),
(3, 'win', '126', 15, 96.529),
(4, 'hero', '172', 11, 53.673);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rd1`
--
ALTER TABLE `rd1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rd1`
--
ALTER TABLE `rd1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
