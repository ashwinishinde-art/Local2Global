-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2026 at 10:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local2global`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `full_name`, `username`, `email`, `phone`, `password`, `gender`, `address`, `city`, `state`, `pincode`) VALUES
(6, 'shreya', 'shreya.67_', 'shreya456@gmail.com', '9945184523', '321', 'Female', 'Dhayari', 'Pune', 'Maharashtra', '444001'),
(12, 'khushi', 'khushi.17', 'khushi.wankhade17@gmail.com', '8889465489', '1717', 'Female', 'Narhe', 'Pune', 'Maharashtra', '411001'),
(16, 'Mayuri', 'Mayuri_123', 'mayuri33@gmail.com', '568218', 'mayu33', 'Female', 'Pimpri Chinchawad', 'Pune', 'Maharashtra', '411001');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(1500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `price`, `quantity`, `description`, `image`) VALUES
(6, 'Mirchi pickle', 'pickle', 250.00, 30, '250/gram', 'red chilly3.jpg.jpeg'),
(14, 'pure mango pickle', 'BambooCraft', 72.00, 73, 'hj', 'basket.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `shipping_area` text NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `seller_name`, `email`, `phone`, `business_name`, `product_name`, `shipping_area`, `address`, `password`) VALUES
(1, 'Amruta', 'amruta123@gmail.com', '9552164874', 'Desi Ghee', 'Ghee, Loni, Daldaa', 'all over Pune', 'Mulshi', 'amruta234'),
(9, 'Supriya', 'supriya.w@gmail.com', '7769486625', 'Bamboo.Co', 'handmade tray, basket, cutlery, home decor items', 'All over pune and nearby places', 'Haveli, Pune', 'supriyaw12'),
(15, 'Radha Shende', 'radha.sh45@gmail.com', '7769486625', 'Swad Pickles', 'pickles', 'All over Pune', 'Narhe, pune', 'radhashende45'),
(17, 'Deepa', 'deepa12@gmail.com', '7769486625', 'DD Papad Varities', 'Udid papad,  Masala papad, Moong papad, Rice papad', 'All over pune', 'Mulshi, Pune', 'deepa123');

-- --------------------------------------------------------

--
-- Table structure for table `seller_verification`
--

CREATE TABLE `seller_verification` (
  `id` int(11) NOT NULL,
  `account_holder` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(150) NOT NULL,
  `account_number` varchar(30) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `address_proof` varchar(255) NOT NULL,
  `shipping_area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_verification`
--

INSERT INTO `seller_verification` (`id`, `account_holder`, `bank_name`, `branch_name`, `account_number`, `ifsc`, `id_proof`, `address_proof`, `shipping_area`) VALUES
(2, 'Tanishka', 'UNION BANK', 'Saswad Branch', '221076283917', 'V0015739Y6164', 'Aadhaar Card', 'Aadhaar Card', 'Pune'),
(10, 'Tanvi', 'Kotak Bank', 'Kothrud', '432155759935', 'V00654168148', 'Aadhaar Card', 'Electricity Bill', 'Pune'),
(13, 'gauri', 'Kotak Bank', 'Kothrud', '432155759935', 'V00654168148', 'Aadhaar Card', 'Passport', 'gsdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_verification`
--
ALTER TABLE `seller_verification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seller_verification`
--
ALTER TABLE `seller_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
