-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 11:03 AM
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
-- Table structure for table `shipping_method_types`
--

CREATE TABLE `shipping_method_types` (
  `id` bigint(20) DEFAULT NULL,
  `Type_Name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping_method_types`
--

INSERT INTO `shipping_method_types` (`id`, `Type_Name`, `created_at`, `updated_at`) VALUES
(1, 'Sea Freight', '2019-09-18 11:21:34', NULL),
(2, 'Air Freight', '2019-09-19 04:18:50', NULL),
(3, 'Express', '2019-09-19 04:18:59', NULL),
(4, 'Epacket', '2019-09-19 04:19:07', NULL),
(5, 'EMS', '2019-09-19 04:19:19', NULL),
(6, 'Airmail', '2019-09-18 11:22:16', NULL),
(7, 'Airmail No Tracking', '2019-09-19 04:19:31', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
