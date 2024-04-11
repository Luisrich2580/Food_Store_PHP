-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 06:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loui_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(25) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productdetail` varchar(255) NOT NULL,
  `productimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productdetail`, `productimg`) VALUES
(1, 'Cakes', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/food_(1).jpg'),
(2, 'Chicken', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/food_1.jpg'),
(3, 'Chicken Nuggets', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/food_2.jpg'),
(4, 'Potatoes', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/food_(5).jpg'),
(5, 'Soup', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/menu-image4.jpg'),
(6, 'Burger', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/menu-image5.jpg'),
(7, 'Special VIP', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/menu-image6.jpg'),
(8, 'Chicken Nuggets', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/food_3.jpg'),
(9, 'Professional Dish', 'With supporting text below as a natural lead-in to additional content.', 'Assets/img/food_(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Louis', '457684c25a1265391fe547971ef50a'),
(2, 'Maya', 'bcf4c214a58f6ee5c23d577e00f771'),
(3, 'John', 'b5e42f49ab3acf8f6c2ccf99f604a1'),
(4, 'Jane', 'janedoe123'),
(5, 'chriss', 'marymary'),
(6, 'money', 'moneymoney'),
(7, 'mary', 'MARYMARY'),
(8, 'Mgwatu', 'mgwatu12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`password`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
