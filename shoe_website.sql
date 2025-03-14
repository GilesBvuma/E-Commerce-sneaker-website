-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 04:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `product_id` int(11) NOT NULL,
  `shoe_name` varchar(128) NOT NULL,
  `shoe_price` decimal(10,0) NOT NULL,
  `shoes_stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `checkbox` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_name`, `email`, `pass_word`, `checkbox`) VALUES
(1, 'darystzw', 'dhliwayonorest@gmail.com', '$2y$10$fTJU1Moc9d2vlu2MBQqUC.yYyBwKLsaYToQVaNl9dQtGbwvbQxfjK', 1),
(2, 'honemon', 'kudadestiny@gmail.com', '$2y$10$7tN5D.4nmN4yI/elUYoER.zHAx5zww1Omhkd213ltUEHZT7ZJ4upm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `shoe_name` (`shoe_name`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
