-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 04:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_new_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT 'Y for active, N for inactive',
  `is_deleted` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'Y for deleted, N for not deleted',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT 'Y for active, N for inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(31, 'test', 'Y', '2023-04-07 16:57:24', '2023-04-07 16:57:24'),
(32, 'demo', 'N', '2023-04-07 16:57:31', '2023-04-07 16:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT 'Y for active, N for  inactive',
  `is_deleted` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'Y for deleted, N for not deleted',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`id`, `category_id`, `sub_category_name`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(8, 17, 'a1', 'N', 'Y', '2023-03-31 17:44:05', '2023-03-31 17:44:05'),
(9, 17, 'b1', 'N', 'Y', '2023-03-31 17:44:11', '2023-03-31 17:44:11'),
(10, 18, 'c1', 'Y', 'Y', '2023-03-31 17:44:20', '2023-03-31 17:44:20'),
(11, 19, 'd1', 'N', 'N', '2023-03-31 17:44:28', '2023-03-31 17:44:28'),
(13, 27, 'b1', 'Y', 'N', '2023-04-06 14:16:10', '2023-04-06 14:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_unit`
--

CREATE TABLE `product_unit` (
  `id` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT 'Y for active, N for inactive',
  `is_deleted` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'Y for deleted, N for not deleted',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('U','A') NOT NULL DEFAULT 'U' COMMENT 'U for user, A for admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `address`, `email`, `city`, `password`, `user_type`) VALUES
(6, 'user', '901, sardar patel', 'user@gmail', 'surat', '25d55ad283aa400af464c76d713c07ad', 'U'),
(7, 'admin', '901, sardar patel', 'admin@gmai', 'surat', '25d55ad283aa400af464c76d713c07ad', 'A'),
(8, 'demo', '901, sardar patel', 'demo@gmail', 'surat', '25d55ad283aa400af464c76d713c07ad', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_unit`
--
ALTER TABLE `product_unit`
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
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_unit`
--
ALTER TABLE `product_unit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
