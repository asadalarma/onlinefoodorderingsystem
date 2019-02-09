-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 10:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorderingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedbacks`
--

CREATE TABLE `customer_feedbacks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `rating` float(10,0) DEFAULT NULL,
  `feedback` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `name`, `description`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'Deal1', 'Zinger Deal', 'deal-images/154970540527838.jpg', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `restaurant_id`, `name`, `description`, `image`, `price`, `created_by`, `updated_by`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 6, 'Zinger', 'Zinger meal', 'meal-images/154970513692975.jpg', '160', NULL, NULL, NULL, NULL, 0),
(2, 6, 'Chicken Nuggets', 'Nuggets meal', 'meal-images/154970577031875.jpeg', '350', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meal_deals`
--

CREATE TABLE `meal_deals` (
  `id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_deals`
--

INSERT INTO `meal_deals` (`id`, `meal_id`, `deal_id`, `is_deleted`) VALUES
(4, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('admin','customer','restaurant') NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `openinghours` time DEFAULT NULL,
  `closinghours` time DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `approval_status` tinyint(3) DEFAULT '1' COMMENT 'Approval Status 1= Pending , 2=Approved , 3=Not Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `username`, `phone`, `url`, `openinghours`, `closinghours`, `image`, `address`, `approval_status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'admin', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin user', '+920001234567', NULL, NULL, NULL, NULL, 'Shah rah e faisal', 1, NULL, NULL, NULL, NULL, 0),
(6, 'KFC', 'kfc@live.com', 'e10adc3949ba59abbe56e057f20f883e', 'restaurant', NULL, '+923654477892', 'http://www.google.com', '12:00:00', '00:00:00', 'restaurant-images/154970484875748.jpg', NULL, 2, NULL, NULL, NULL, NULL, 0),
(7, 'Ali', 'ali@live.com', 'e10adc3949ba59abbe56e057f20f883e', 'customer', NULL, '+923462767811', NULL, NULL, NULL, NULL, 'Shadmaan', 1, NULL, NULL, NULL, NULL, 0),
(8, 'Hammad', 'ah@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'admin', 'AH', '+923313332210', NULL, NULL, NULL, NULL, 'Bufferzone', 1, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_feedbacks`
--
ALTER TABLE `customer_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_deals`
--
ALTER TABLE `meal_deals`
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
-- AUTO_INCREMENT for table `customer_feedbacks`
--
ALTER TABLE `customer_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meal_deals`
--
ALTER TABLE `meal_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
