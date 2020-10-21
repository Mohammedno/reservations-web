-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 11:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(3) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(1, 'Mohammednour', 'mohammed96');

-- --------------------------------------------------------

--
-- Table structure for table `hall_info`
--

CREATE TABLE `hall_info` (
  `id` int(3) NOT NULL,
  `hallname` varchar(50) NOT NULL,
  `halllocation` varchar(50) NOT NULL,
  `hallcapacity` varchar(50) NOT NULL,
  `times` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_info`
--

INSERT INTO `hall_info` (`id`, `hallname`, `halllocation`, `hallcapacity`, `times`) VALUES
(17, 'SparkCity2', 'Mamora', '800 people', '- Lunch from 2 PM to 4 PM\r\n- Dinner from 7 PM to 9 PM');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(3) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'lunch or dinner',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `type`, `user_id`) VALUES
(1, '2020-10-15', 'lunch', 1),
(2, '2020-10-15', 'dinner', 1),
(3, '2020-10-28', 'dinner', 2),
(4, '2020-10-29', 'lunch', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`) VALUES
(1, 'fredx', 'fredx', '$2y$10$U2eP6EnWSzV45mhfV5G5TO0VVJdF5OXYZVJ9h3GBBcLLW/XZKDZJy', 'fredx@gmail.com'),
(2, 'mohammed', 'mohammed', '$2y$10$kSMJApclGA.8yBEPJa224Op7xoKbqIfPU/3AsNNelCwnXXSPrI8lG', 'mohammed@gmail.com'),
(3, 'mora mohammed horuan', 'mora', '$2y$10$ajO8p070p8GTELSqc.3u.Ozj6JDJlYVLvEWq3Ej3xm3L7BEvxfR..', 'mora@gmail.com'),
(4, 'Suliman Musa', 'king', '$2y$10$y4An8UFOqDg6IgqKa3VLIOmUKSuvs100Nkq/LL8W3OXeNBvmS/Ed2', 'suliman@gmail.com'),
(5, 'Adress Adam', 'adress', '$2y$10$Fl2f7gxbX6OJni1iAAmv1eoB7bcI3FIwFrjW5aFwnbxn8WC/BXkKe', 'Aadress@gmail.com'),
(14, 'Mohammed Adam', 'mohammed', '$2y$10$yaZSFuJgfTFc9mUlNsunm.ae4/U8U55viv2ydzQtMlumxdh4cApr2', 'Mohammed\'s@gmail.com'),
(15, 'Hassan Ali Mohammed', 'hassan', '$2y$10$sOFDHJf5rng8hCPO2DDH.OSLorj2sDwejPl4CNUEtKwhWKmzTZtzW', 'hassan@gmail.com'),
(16, 'ABC', 'ABC123', '$2y$10$OpjvRe9fnONmlpFM5YyLSOy4q6zDyy9J1xVp2bZe6YFSx.PxzvMGa', 'ABC@gmial.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_info`
--
ALTER TABLE `hall_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hall_info`
--
ALTER TABLE `hall_info`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
