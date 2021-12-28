-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 08:08 PM
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


CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(400) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_category`, `product_gender`, `product_price`, `product_final_price`, `product_quantity`, `product_image`, `status`) VALUES
(88, 'white shoes', 'shoes', 'female', 50, 25, 15, 'OIP6.jpg', 1),
(92, 'Bag', 'bags', 'male', 50, 25, 11, 'OIP9.jpg', 1),
(94, 'white ', 'clothing', 'male', 20, 17, 50, 'OIP2.jpg', 0),
(95, 'white', 'clothing', 'male', 117, 93.6, 10, 'OIP3.jpg', 0),
(97, 'white shoes', 'shoes', 'female', 100, 50, 15, 'OIP7.jpg', 1),
(98, 'wristwatch gold', 'others', 'female', 500, 375, 50, 'OIP11.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
