-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 01:25 PM
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
(1, 1, 'abc', 784, 'abcabc', 'abcabcabc', 'abcabcabcabc', 1),
(1, 7, 'xyz', 1234, 'xyzxyz', 'xyzxyzxyz', 'xyzxyzxyzxyz', 1),
(3, 8, 'tulsi', 874, 'tulsitulsi', 'tulsitulsitulsi', 'tulsitulsitulsi', 1);

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
(1, 'Mohammed Imran', 'myselfmdimran@gmail.com', '7624947684', 'Bangalore 560032\r\nBangalore 560032', '1234'),
(2, 'xyzxyzxyzxyzxyzxyzxyzxyzxyz', '', '', '', ''),
(3, 'imraan', 'imraan@gmail.com', '75395185245', 'poiuytr', '$2y$10$UbYVE1tNfzrKemWJoNda1ufwY0qqfji7YQW708Qm4EZEfzWkgng4m');

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
(5, 1, 1, 1, 'abc', 'Mohammed Imran', 784),
(6, 1, 1, 1, 'abc', 'Mohammed Imran', 784),
(15, 1, 7, 1, 'xyz', 'Mohammed Imran', 1234),
(16, 3, 1, 1, 'abc', 'Mohammed Imran', 784),
(17, 3, 7, 1, 'xyz', 'Mohammed Imran', 1234),
(18, 3, 7, 1, 'xyz', 'Mohammed Imran', 1234),
(19, 3, 7, 1, 'xyz', 'Mohammed Imran', 1234),
(20, 3, 8, 3, 'tulsi', 'imraan', 874);

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
(1, 'mohammed@gmail.com', 'myselfmdimran@gmail.com', '7624947684', 'Bangalore 560032\r\nBangalore 560032', '1234'),
(2, '123@gmail.com', '123@gmail.com', '14785239', 'qwertyuio', ''),
(3, 'imran', 'imran@gmail.com', '12589634', 'qwertyui', '$2y$10$r4BIgUY9zZHNW/PKVv/97u26CZK8AKO8IMSTnhpoPoBVGQ7OuWiB2');

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
  MODIFY `plant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_applied_plant_db`
--
ALTER TABLE `users_applied_plant_db`
  MODIFY `users_applied_plant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
