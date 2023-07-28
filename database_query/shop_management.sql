-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 01:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `buying_transaction`
--

CREATE TABLE `buying_transaction` (
  `user_id` int(11) DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `vendor` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buying_transaction`
--

INSERT INTO `buying_transaction` (`user_id`, `datee`, `vendor`, `quantity`, `price`, `name`) VALUES
(1, '2023-07-28', 'rejens', 1000, '100.00', 'rice');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `datee` date DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cp` decimal(10,2) DEFAULT NULL,
  `sp` decimal(10,2) DEFAULT NULL,
  `pl` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `salesAmt` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`datee`, `item_name`, `quantity`, `cp`, `sp`, `pl`, `user_id`, `salesAmt`) VALUES
('2023-07-28', 'rice', 10, '1000.00', '1200.00', '200.00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `cp` decimal(10,2) DEFAULT NULL,
  `sp` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `vendor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cp`, `sp`, `quantity`, `user_id`, `expiry_date`, `vendor`) VALUES
(1, 'rice', '100.00', '120.00', 790, 1, '2023-07-29', 'rejens');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp` varchar(6) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selling_transaction`
--

CREATE TABLE `selling_transaction` (
  `datee` date DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cp` decimal(10,2) DEFAULT NULL,
  `sp` decimal(10,2) DEFAULT NULL,
  `pl` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `salesAmt` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selling_transaction`
--

INSERT INTO `selling_transaction` (`datee`, `name`, `quantity`, `cp`, `sp`, `pl`, `user_id`, `salesAmt`) VALUES
('2023-07-27', 'rice', 100, '10000.00', '12000.00', '2000.00', 1, NULL),
('2023-07-28', 'rice', 100, '10000.00', '12000.00', '2000.00', 1, NULL),
('2023-07-28', 'rice', 10, '1000.00', '1200.00', '200.00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `company`, `password`, `email`) VALUES
(1, 'rejens', 'rejens', '$2y$10$.J08P.itHmdedGUOli70bObN728xwwC41lVROxTExj7N/pVvOhbRK', 'rejensraya@gmail.com'),
(2, 'rejens', 'rayamajhi', '$2y$10$c/r4qBLdEXO7VPssA4GxU.CF3eUhyUo.pEufUj8cMLuhQwnxHxGDW', 'rejensraya@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
