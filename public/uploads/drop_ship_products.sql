-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 01:59 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `drop_ship_products`
--

CREATE TABLE `drop_ship_products` (
  `id` bigint(20) NOT NULL,
  `dropship_id` bigint(20) DEFAULT NULL,
  `bundle_id` bigint(20) DEFAULT NULL,
  `dropship_qty` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drop_ship_products`
--

INSERT INTO `drop_ship_products` (`id`, `dropship_id`, `bundle_id`, `dropship_qty`, `created_at`, `updated_at`) VALUES
(62, 1569351963835, 15, 36, '2019-09-25 03:06:57', '2019-09-25 03:06:57'),
(66, 1569355755323, 20, 29, '2019-09-25 03:14:18', '2019-09-25 03:14:18'),
(67, 1569357424473, 15, 20, '2019-09-25 03:37:04', '2019-09-25 03:37:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drop_ship_products`
--
ALTER TABLE `drop_ship_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drop_ship_products`
--
ALTER TABLE `drop_ship_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
