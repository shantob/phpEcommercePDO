-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 11:32 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm_ajob`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE `category_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(20) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`id`, `name`, `category_id`, `picture`) VALUES
(16, 'jhjhjh', 1222, '2022-09-131663086838Class-4-class-work.PNG'),
(18, 'zxc', 11111, '2022-09-131663092282Screenshot_5.png'),
(19, '899', 990000, '2022-09-131663093749Screenshot_13.png'),
(21, 'xzxcxzc', 21222, '2022-09-131663094201Screenshot_16.png'),
(22, 'xzcxz', 21212, '2022-09-131663094278Screenshot_16.png'),
(24, 'EEWEW', 3334, '2022-09-141663193367Screenshot_1.png'),
(25, 'pants', 98, '2022-09-141663196232OIP.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(20) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_description` text NOT NULL,
  `percentage_discount` double NOT NULL,
  `online_date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `name`, `product_id`, `picture`, `product_category`, `product_price`, `product_description`, `percentage_discount`, `online_date`) VALUES
(2, 'dsadaszzaa', 122221, '2022-09-141663169682ol.png', '', 40000, 'tjjsas jeeoo', 20, NULL),
(4, 'glasssssqqqqq', 1111111, '2022-09-141663181881Screenshot_19.png', 'w90rj', 1000, 'the os', 100, '2022-09-15 00:00:00.000000'),
(5, 'jeans pants', 122, '2022-09-151663227804gettyimages-173239968-612x612.jpg', 'w90rj', 2000, 'this is good pants', 200, '2022-09-15 00:00:00.000000'),
(6, 'T-tas', 1111566, '2022-09-151663237624gettyimages-173239968-612x612.jpg', '98', 2200, 'this is good pants', 50, '2022-09-15 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_on` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_info`
--
ALTER TABLE `category_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_info`
--
ALTER TABLE `category_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
