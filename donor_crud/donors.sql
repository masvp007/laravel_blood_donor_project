-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 08:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donorsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `bloodg` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `sex`, `age`, `bloodg`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ameer', 'Male', 24, 'O Positive', NULL, NULL, NULL),
(2, 'Suhail', 'Male', 22, 'O Positive', NULL, NULL, NULL),
(3, 'Ajmal', 'Male', 28, 'AB Positive', NULL, NULL, NULL),
(4, 'Anwar', 'Male', 30, 'A Negative', NULL, NULL, NULL),
(5, 'Shakeer', 'Male', 23, 'A Positive', NULL, NULL, NULL),
(6, 'Sreenath', 'Male', 23, 'B Positive', NULL, NULL, NULL),
(7, 'Nirmal', 'Male', 23, 'AB Positive', NULL, NULL, NULL),
(8, 'Murali', 'Male', 17, 'A Negative', NULL, NULL, NULL),
(9, 'Jibin', 'Male', 22, 'B Negative', NULL, NULL, NULL),
(10, 'Pooja', 'Female', 18, 'O Positive', NULL, NULL, NULL),
(11, 'Sruthy', 'Female', 22, 'AB Positive', NULL, NULL, NULL),
(12, 'Shahina', 'Male', 15, 'O Negative', NULL, NULL, NULL),
(13, 'Aparna', 'Female', 20, 'B Negative', '2022-04-11 14:09:43', '2022-04-11 14:09:43', NULL),
(14, 'Rashad', 'Male', 24, 'AB Positive', '2022-04-11 14:13:28', '2022-04-11 14:13:28', NULL),
(15, 'Shabeer', 'Male', 40, 'A Postive', '2022-04-11 14:15:08', '2022-04-11 14:15:08', NULL),
(16, 'Ajay', 'Male', 33, 'B Positive', '2022-04-11 14:17:27', '2022-04-11 14:17:27', NULL),
(17, 'Michael', 'Male', 50, 'A Negative', '2022-04-11 18:19:16', '2022-04-11 18:19:16', NULL),
(18, 'John', 'Male', 45, 'B Negative', '2022-04-11 18:19:56', '2022-04-11 18:19:56', NULL),
(19, 'Arjun', 'Male', 30, 'B Positive', '2022-04-12 08:53:38', '2022-04-12 08:53:38', NULL),
(20, 'Anoop', 'Male', 26, 'O Negative', '2022-04-12 12:22:09', '2022-04-12 12:22:09', NULL),
(21, 'Prabitha', 'Female', 22, 'O Positive', '2022-04-12 12:22:38', '2022-04-12 12:22:38', NULL),
(22, 'Namitha', 'Female', 22, 'B Positive', '2022-04-12 12:22:59', '2022-04-12 12:22:59', NULL),
(23, 'Aysha', 'Female', 10, 'A Positive', '2022-04-12 13:23:25', '2022-04-12 13:23:25', NULL),
(24, 'Shadiya', 'Female', 19, 'AB Positive', '2022-04-12 13:23:59', '2022-04-12 13:23:59', NULL),
(25, 'Ameer S', 'Male', 55, 'O Negative', '2022-04-13 00:00:30', '2022-04-13 00:00:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
