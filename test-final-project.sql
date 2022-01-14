-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 05:53 PM
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
-- Database: `test-final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_image` varchar(250) NOT NULL,
  `cat_name` varchar(70) NOT NULL,
  `cat_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_image`, `cat_name`, `cat_status`) VALUES
(4, 'othersCat.png', 'Others', 1),
(1, 'ClothingCat.jpg', 'Clothing', 1),
(3, 'BagsCat.jfif', 'Bags', 1),
(2, 'CatShoes.pk_.jpg-3.jpg', 'Shoes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(400) NOT NULL,
  `status` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `address`, `status`, `user_type`, `phone_number`) VALUES
(145, 'hassanghanem', 'hassanghanem030@gmail.com', '$2y$10$DdrWxjyAZgrrphqiU39jSeHwYqXP0Axold.Fre5lrWw7Jt3Rl6CAC', 'Ainathah', 1, 'admin', 7865543),
(152, 'ALI', 'Ali@aut.edu', '$2y$10$Obb7S2jvyMgHdN9byq3/eeyUOP7on9skEReBrsMzgsLTarmPXvlcS', 'Tyre', 1, 'customer', 7865543),
(153, 'Mark', 'Mark@gmail.com', '$2y$10$YRfE7O.bC6h3L2zUsEX52ubpIwaOC7Ae45x641IP7LI7d3yUDaxxO', 'Halat', 1, 'customer', 7865543),
(154, 'Ghadir', 'ghadir@gmail.com', '$2y$10$vyTdx4fXd1nSyvZ6YLjM7uxzU1NYOMWZnd4dgsCDLWXWGjoJkid.y', 'Tebnin', 1, 'customer', 70624357),
(155, 'Reda', 'reda@gmail.com', '$2y$10$0T7cNjw3ES8eL8MxSW2ywOqgWfpip7gnSKKuK7oLxNm5obpujih4.', 'Tyre', 1, 'customer', 76522354);

-- --------------------------------------------------------

--
-- Table structure for table `logins_registers`
--

CREATE TABLE `logins_registers` (
  `id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `action_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins_registers`
--

INSERT INTO `logins_registers` (`id`, `user_email`, `date_time`, `action_status`) VALUES
(88, 'Ali@aut.edu', '2022-01-12 13:35:21', 2),
(89, 'hassanghanem030@gmail.com', '2022-01-12 13:35:36', 1),
(90, 'ali@gmail.com', '2022-01-12 13:36:14', 0),
(91, 'Ali@gmail.com', '2022-01-12 13:36:21', 0),
(92, 'hassanghanem030@gmail.com', '2022-01-12 13:37:11', 1),
(93, 'Ali@aut.edu', '2022-01-12 13:37:32', 3),
(94, 'hassanghanem030@gmail.com', '2022-01-12 13:38:02', 1),
(95, 'Mark@gmail.com', '2022-01-12 13:39:30', 2),
(96, 'hassanghanem030@gmail.com', '2022-01-12 13:40:02', 1),
(97, 'ghadir@gmail.com', '2022-01-12 13:42:17', 2),
(98, 'hassanghanem030@gmail.com', '2022-01-12 13:43:13', 1),
(99, 'reda@gmail.com', '2022-01-12 13:44:19', 2),
(100, 'hassanghanem030@gmail.com', '2022-01-12 13:44:49', 1),
(101, 'Mark@gmail.com', '2022-01-12 17:58:49', 3),
(102, 'hassanghanem030@gmail.com', '2022-01-12 17:59:17', 1),
(103, 'hassanghanem030@gmail.com', '2022-01-12 18:20:27', 1),
(104, 'hassanghanem030@gmail.com', '2022-01-13 17:10:09', 1),
(105, 'Mark@gmail.com', '2022-01-13 20:31:20', 3),
(106, 'hassanghanem030@gmail.com', '2022-01-13 20:31:39', 1),
(107, 'ghadir@gmail.com', '2022-01-13 20:39:41', 3),
(108, 'hassanghanem030@gmail.com', '2022-01-13 20:40:06', 1),
(109, 'ghanem.hasan@aut.edu', '2022-01-13 23:28:09', 0),
(110, 'Mark@gmail.com', '2022-01-13 23:28:26', 3),
(111, 'ghadir@gmail.com', '2022-01-13 23:40:44', 3),
(112, 'ghadir@gmail.com', '2022-01-13 23:42:21', 3),
(113, 'ghadir@gmail.com', '2022-01-14 00:01:18', 3),
(114, 'hassanghanem030@gmail.com', '2022-01-14 00:11:10', 1),
(115, 'Mark@gmail.com', '2022-01-14 00:17:30', 3),
(116, 'ali@gmail.com', '2022-01-14 17:25:58', 0),
(117, 'Ali@gmail.com', '2022-01-14 17:26:02', 0),
(118, 'Mark@gmail.com', '2022-01-14 17:26:12', 3),
(119, 'Mark@gmail.com', '2022-01-14 17:45:59', 3),
(120, 'ghanem.hasan@aut.edu', '2022-01-14 17:47:05', 0),
(121, 'Mark@gmail.com', '2022-01-14 17:47:12', 3),
(122, 'Mark@gmail.com', '2022-01-14 17:47:37', 3),
(123, 'ghanem.hasan@aut.edu', '2022-01-14 17:48:29', 0),
(124, 'ghanem.hasan@aut.edu', '2022-01-14 17:48:31', 0),
(125, 'Mark@gmail.com', '2022-01-14 17:48:38', 3),
(126, 'Mark@gmail.com', '2022-01-14 17:50:45', 3),
(127, 'Mark@gmail.com', '2022-01-14 17:55:25', 3),
(128, 'hassanghanem030@gmail.com', '2022-01-14 18:39:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`id`, `customer_id`, `product_id`, `product_quantity`, `status`, `date_time`) VALUES
(30, 152, 119, 3, 1, 'Wednesday 22-01-12 13:37'),
(31, 152, 120, 2, 1, 'Wednesday 22-01-12 13:37'),
(32, 152, 117, 2, 1, 'Wednesday 22-01-12 13:37'),
(33, 153, 116, 1, 1, 'Wednesday 22-01-12 13:39'),
(34, 153, 113, 2, 1, 'Wednesday 22-01-12 13:39'),
(35, 153, 111, 2, 1, 'Wednesday 22-01-12 13:39'),
(36, 154, 112, 2, 2, 'Wednesday 22-01-12 13:43'),
(37, 154, 110, 1, 2, 'Wednesday 22-01-12 13:43'),
(38, 155, 111, 1, 0, 'Wednesday 22-01-12 13:44'),
(39, 155, 114, 2, 0, 'Wednesday 22-01-12 13:44'),
(40, 155, 121, 2, 0, 'Wednesday 22-01-12 13:44'),
(41, 155, 122, 1, 0, 'Wednesday 22-01-12 13:44'),
(42, 153, 119, 2, 1, 'Wednesday 22-01-12 17:59'),
(43, 153, 118, 2, 1, 'Wednesday 22-01-12 17:59'),
(44, 153, 117, 2, 1, 'Wednesday 22-01-12 17:59'),
(45, 153, 122, 2, 1, 'Thursday 22-01-13 20:31'),
(46, 154, 113, 1, 0, 'Thursday 22-01-13 20:39'),
(47, 154, 115, 1, 0, 'Thursday 22-01-13 20:39'),
(48, 154, 117, 1, 0, 'Friday 22-01-14 00:10'),
(49, 154, 111, 2, 0, 'Friday 22-01-14 00:10'),
(50, 154, 112, 2, 0, 'Friday 22-01-14 00:10'),
(51, 153, 110, 2, 1, 'Friday 22-01-14 17:26'),
(52, 153, 111, 2, 1, 'Friday 22-01-14 17:26'),
(53, 153, 114, 1, 1, 'Friday 22-01-14 17:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_gender` varchar(10) NOT NULL,
  `product_price` float NOT NULL,
  `product_final_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_category`, `product_gender`, `product_price`, `product_final_price`, `product_quantity`, `product_image`, `status`) VALUES
(110, 'Bag', 'Bags', 'male', 50, 40, 15, 'OIP9.jpg', 1),
(111, 'white shoes', 'Shoes', 'male', 20, 20, 50, 'OIP6.jpg', 1),
(112, 'black shoes', 'Shoes', 'female', 20, 20, 50, 'R1.jpg', 1),
(113, 'wristwatch gold', 'Others', 'female', 50, 45, 10, 'OIP11.jpg', 1),
(114, 'white', 'Clothing', 'female', 15, 15, 50, 'OIP2.jpg', 1),
(115, 'Bag', 'Bags', 'female', 30, 27, 50, 'R.jpg', 1),
(116, 'cap', 'Others', 'male', 45, 45, 5, 'OIF8.png', 1),
(117, 'white ', 'Clothing', 'male', 20, 18, 50, 'OIP3.jpg', 1),
(118, 'white shoes', 'Clothing', 'male', 20, 17, 50, 'OIP6.jpg', 1),
(119, 'blue shoes', 'Shoes', 'female', 20, 17, 50, 'OIP7.jpg', 1),
(120, 'green', 'Clothing', 'male', 20, 18, 50, 'OIP4.jpg', 1),
(121, 'freshness', 'Others', 'female', 20, 17, 15, 'OIP.jpg', 1),
(122, 'Black Bag', 'Bags', 'male', 50, 40, 20, 'OIP10.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins_registers`
--
ALTER TABLE `logins_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `logins_registers`
--
ALTER TABLE `logins_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
