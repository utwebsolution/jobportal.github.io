-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 12:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `phone`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'ujjawal tiwari', 'ujjawal.mespil@gmail.com', '7004635848', 10, 'complete', 'pay_JyYpDG1WQRDb3T', '2022-07-28 12:48:20'),
(2, 'Generator', 'ujjawal.mespil@gmail.com', '7654380987', 0, 'complete', 'pay_JyYroGIyRRQLVh', '2022-07-28 12:50:47'),
(3, 'Generator', 'fgsdfgasdgdsag@gmail.com', '7654380987', 500, 'complete', 'pay_JyYuj1bpFMx5LF', '2022-07-28 12:53:33'),
(4, 'ujjawal tiwari', 'ujjawal.mespil@gmail.com', '7004635848', 500, 'complete', 'pay_JyZBqxXnzlENIv', '2022-07-28 01:09:46'),
(5, 'ujjawal tiwari', 'fgsdfgasdgdsag@gmail.com', '7004635848', 500, 'complete', 'pay_JyZGBCIUSG2Npf', '2022-07-28 01:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'ujjawal', 'uk.ut76@gmail.com', '27bbfbeb42bdafb199aa2ac79c8cfd81', '2022-07-27 08:39:05'),
(2, 'utweb', 'ujjawal.mespil@gmail.com', '27bbfbeb42bdafb199aa2ac79c8cfd81', '2022-07-27 22:25:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
