-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 08:49 AM
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
-- Database: `arzec`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mobile_name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `image`, `type`, `mobile_name`, `model`) VALUES
(8, '1659853337-appleiphone112614.jpg', 'UV Print', 'IPHONE', '12'),
(9, '1659853672-2a598b2771a5ced9d77f02682c6d521e.jpg', 'UV Print', 'SAMSUNG', 'Note 9'),
(10, '1659854740-appleiphone112614.jpg', 'UV Print', 'SAMSUNG', '12 max');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `image`) VALUES
(1, 'Sajid', 'Ahmed', 'sajid_ahmed', 'sajid1@gmail.com', '80b692bba4f6027452896a6afde0da68', '2021-04-19', 'images/profile_pics/defaults/head_deep_blue.png'),
(2, 'admin', 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2021-04-19', 'images/profile_pics/defaults/head_emerald.png'),
(3, 'Adnan', 'Shisir', 'adnan_shisir', 'adnan@gmail.com', '272324e634e00bf557e046a28f6b031e', '2021-05-10', 'images/profile_pics/defaults/head_deep_blue.png'),
(4, 'Shadia', 'Kabir', 'shadia_kabir', 'shadia@gmail.com', '26bfe6f53b607d8f4e65c087f1afd6f8', '2021-05-13', 'images/profile_pics/defaults/head_emerald.png'),
(5, 'Turna', 'Ahmed', 'turna_ahmed', 'turna@gmail.com', '4f83ad71374f6749b96f27a87deac80e', '2021-05-22', 'images/profile_pics/defaults/head_deep_blue.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
