-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 03:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leafnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_name`, `admin_password`, `admin_id`) VALUES
('admin@gmail.com', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `seller_id` int(11) NOT NULL,
  `plant_id` int(255) NOT NULL,
  `plant_name` varchar(255) NOT NULL,
  `plant_price` int(50) NOT NULL,
  `about` varchar(255) NOT NULL,
  `grow` varchar(255) NOT NULL,
  `plant_care` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`seller_id`, `plant_id`, `plant_name`, `plant_price`, `about`, `grow`, `plant_care`, `status`) VALUES
(5, 9, 'Adenium Flower Fairy (Grafted) ', 649, 'Adenium Flower Fairy (Grafted) ', 'Adenium Flower Fairy (Grafted) ', 'Adenium Flower Fairy (Grafted) ', 1),
(5, 10, 'African Violet Purple Plant ', 549, 'African Violet Purple Plant ', 'African Violet Purple Plant ', 'African Violet Purple Plant ', 1),
(5, 11, 'Aglaonema Lipstick Plant', 449, 'Aglaonema Lipstick Plant', 'Aglaonema Lipstick Plant', 'Aglaonema Lipstick Plant', 1),
(5, 12, 'Rose Plant', 240, 'Rose Plant', 'Rose Plant', 'Rose Plant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_email` varchar(255) NOT NULL,
  `seller_number` varchar(255) NOT NULL,
  `seller_address` varchar(255) NOT NULL,
  `seller_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_name`, `seller_email`, `seller_number`, `seller_address`, `seller_password`) VALUES
(5, 'leafnow', 'leafnow@gmail.com', '0215978463', 'Bengaluru', '$2y$10$YhGWOYb8k3sGPAbJ3ZMVCefX3M4.WJhTIYU.zIv7PZnagMpSjxcpC');

-- --------------------------------------------------------

--
-- Table structure for table `users_applied_plant_db`
--

CREATE TABLE `users_applied_plant_db` (
  `users_applied_plant_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `plant_id` int(255) NOT NULL,
  `seller_id` int(255) NOT NULL,
  `plant_name` varchar(255) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `plant_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_applied_plant_db`
--

INSERT INTO `users_applied_plant_db` (`users_applied_plant_id`, `user_id`, `plant_id`, `seller_id`, `plant_name`, `seller_name`, `plant_price`) VALUES
(51, 5, 10, 5, 'African Violet Purple Plant ', 'leafnow', 549),
(52, 5, 12, 5, 'Rose Plant', 'leafnow', 240),
(53, 7, 11, 5, 'Aglaonema Lipstick Plant', 'leafnow', 449),
(54, 7, 9, 5, 'Adenium Flower Fairy (Grafted) ', 'leafnow', 649),
(55, 8, 9, 5, 'Adenium Flower Fairy (Grafted) ', 'leafnow', 649),
(56, 8, 10, 5, 'African Violet Purple Plant ', 'leafnow', 549),
(57, 8, 11, 5, 'Aglaonema Lipstick Plant', 'leafnow', 449),
(58, 6, 10, 5, 'African Violet Purple Plant ', 'leafnow', 549),
(59, 6, 12, 5, 'Rose Plant', 'leafnow', 240);

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_number` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`user_id`, `user_name`, `user_email`, `user_number`, `user_address`, `user_password`) VALUES
(5, 'mohammed imran', 'mohammedimran@gmail.com', '7624947684', 'Bangalore 560032\r\nBangalore 560032', '$2y$10$MghtZcCdqVvSkRTIPKANUOE/k6boHr4dw3fXNtoHR5TtOvg5Edl.S'),
(6, 'rhia', 'rhia@gmail.com', '9836000455', 'bangalore', '$2y$10$t1GsoyxBkFv5a2pPssFv4.jb7bvav73sObGywNHzKqZ/oMMUvPsWe'),
(7, 'shariff', 'shariff@gmail.com', '8073552065', 'bangalore', '$2y$10$A2YZOsnHneiMJEJApqytru/4VGOtOkKln9qCNJlyrI7/4wAxrupmW'),
(8, 'bhavya', 'bhavya@gmail.com', '7338230529', 'bangalore', '$2y$10$dy5/2L/O2UAfDbzEOfemx.Y22EXZnig85Tizu0QBjTi9GVEuWw.rK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `users_applied_plant_db`
--
ALTER TABLE `users_applied_plant_db`
  ADD PRIMARY KEY (`users_applied_plant_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `plant_id` (`plant_id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_applied_plant_db`
--
ALTER TABLE `users_applied_plant_db`
  MODIFY `users_applied_plant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_applied_plant_db`
--
ALTER TABLE `users_applied_plant_db`
  ADD CONSTRAINT `users_applied_plant_db_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_db` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_applied_plant_db_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_applied_plant_db_ibfk_3` FOREIGN KEY (`plant_id`) REFERENCES `plant` (`plant_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
