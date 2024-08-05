-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2024 at 09:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `waitlist`
--

CREATE TABLE `waitlist` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waitlist`
--

INSERT INTO `waitlist` (`id`, `user_id`, `email`) VALUES
(1, '$user_id', '$email'),
(2, '$user_id', '$email'),
(3, '$user_id', '$email'),
(4, '$user_id', '$email'),
(5, '$user_id', '$email'),
(6, '$user_id', '$email'),
(7, '$user_id', '$email'),
(8, '$user_id', '$email'),
(9, '$user_id', '$email'),
(10, '$user_id', '$email'),
(11, '$user_id', '$email'),
(12, '$user_id', '$email'),
(13, '$user_id', '$email'),
(14, '$user_id', '$email'),
(15, '$user_id', '$email'),
(16, '$user_id', '$email'),
(17, '$user_id', '$email'),
(18, '$user_id', '$email'),
(19, '$user_id', '$email'),
(20, '$user_id', '$email'),
(21, '$user_id', '$email');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `waitlist`
--
ALTER TABLE `waitlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
