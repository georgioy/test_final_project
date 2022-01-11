-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 03:32 PM
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
(146, 'Mark', 'Mark@gmail.com', '$2y$10$2KKiEC1o10F7Baw1LiyZc.lA.dM423vOwI4.dyBvnh5bRxzzNImza', 'ds', 1, 'customer', 7865543),
(147, 'Hassan', 'ghanem.hasan@aut.edu', '$2y$10$j2VLsXr.NhomOxoiobdps.LsfTPpLPAb.TTfM1AFHgQfsvj2i62mi', 'ds', 1, 'customer', 7865543);

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
(28, 'hassanghanem030@gmail.com', '2022-01-07 13:39:40', 2),
(29, 'Mark@gmail.com', '2022-01-07 13:40:19', 2),
(30, 'ghanem.hasan@aut.edu', '2022-01-07 13:40:31', 2),
(31, 'hassanghanem030@gmail.com', '2022-01-07 13:40:41', 1),
(32, 'ghanem.hasan@aut.edu', '2022-01-07 13:40:58', 3),
(33, 'ali@gmail.com', '2022-01-07 13:41:04', 0),
(34, 'hassanghanem030@gmail.com', '2022-01-07 13:41:18', 1),
(35, 'hassanghanem030@gmail.com', '2022-01-07 16:28:54', 1),
(36, 'hassanghanem030@gmail.com', '2022-01-07 16:29:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

DROP TABLE IF EXISTS `ordered`;
CREATE TABLE IF NOT EXISTS `ordered` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`id`, `customer_id`, `product_id`, `product_quantity`, `status`, `date_time`) VALUES
(83, 147, 100, 1, 0, '2022-01-11 20:07:28'),
(82, 147, 97, 1, 0, '2022-01-11 20:07:28');

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
(94, 'white', 'Clothing', 'male', 20, 20, 50, 'OIP2.jpg', 1),
(95, 'white', 'clothing', 'male', 117, 93.6, 10, 'OIP3.jpg', 1),
(96, 'white shoes', 'shoes', 'female', 100, 50, 15, 'OIP7.jpg', 0),
(97, 'wristwatch gold', '', 'female', 500, 250, 50, 'OIP11.jpg', 1),
(98, 'white', 'clothing', 'male', 20, 18, 25, '155494.jpg', 0),
(99, 'Bag', 'bags', 'male', 30, 24, 50, 'R.jpg', 1),
(100, 'Bag', 'bags', 'male', 20, 16, 15, 'OIP10.jpg', 1),
(103, 'hjk', 'others', 'female', 20, 10, 15, 'OIF8.jpg', 1),
(104, 'black shoes', 'shoes', 'male', 30, 24, 50, 'R1.jpg', 1),
(106, 'white shoes', 'shoes', 'male', 20, 20, 15, 'OIP6.jpg', 1),
(107, 'Bag', 'bags', 'female', 20, 20, 50, 'R.jpg', 1),
(108, 'Bag', 'bags', 'male', 50, 40, 50, 'OIP9.jpg', 1),
(109, 'Bag', 'bags', 'male', 40, 32, 15, 'OIP10.jpg', 1);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `logins_registers`
--
ALTER TABLE `logins_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
