-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 11:46 AM
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
-- Database: `sql_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(2, 'Books', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(3, 'Clothing', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(4, 'Home & Kitchen', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(5, 'Sports & Outdoors', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(6, 'Toys & Games', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(7, 'Health & Beauty', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(8, 'Automotive', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(9, 'Garden & Tools', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29'),
(10, 'Music & Movies', 1, '2023-10-31 07:06:29', '2023-10-31 07:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Alice Johnson', 'alice.johnson@email.com', '123-456-7890', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(2, 'Bob Smith', 'bob.smith@email.com', '123-456-7891', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(3, 'Charlie Brown', 'charlie.brown@email.com', '123-456-7892', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(4, 'Diana Ross', 'diana.ross@email.com', '123-456-7893', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(5, 'Edward Norton', 'edward.norton@email.com', '123-456-7894', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(6, 'Fiona Apple', 'fiona.apple@email.com', '123-456-7895', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(7, 'George Lucas', 'george.lucas@email.com', '123-456-7896', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(8, 'Helen Hunt', 'helen.hunt@email.com', '123-456-7897', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(9, 'Ian McKellen', 'ian.mckellen@email.com', '123-456-7898', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16'),
(10, 'Julia Roberts', 'julia.roberts@email.com', '123-456-7899', 1, '2023-10-31 07:07:16', '2023-10-31 07:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `payable` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `total`, `discount`, `vat`, `payable`, `user_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '100.00', '5.00', '20.00', '115.00', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(2, '200.00', '10.00', '40.00', '230.00', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(3, '150.00', '7.50', '30.00', '172.50', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(4, '250.00', '12.50', '50.00', '287.50', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(5, '300.00', '15.00', '60.00', '345.00', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(6, '350.00', '17.50', '70.00', '402.50', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(7, '400.00', '20.00', '80.00', '460.00', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(8, '450.00', '22.50', '90.00', '517.50', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(9, '500.00', '25.00', '100.00', '575.00', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40'),
(10, '550.00', '27.50', '110.00', '632.50', 1, 1, '2023-10-31 07:11:40', '2023-10-31 07:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

CREATE TABLE `invoice_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(50) NOT NULL,
  `sale_price` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_products`
--

INSERT INTO `invoice_products` (`id`, `invoice_id`, `product_id`, `user_id`, `qty`, `sale_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2', '19.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(2, 1, 2, 1, '1', '29.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(3, 1, 3, 1, '3', '9.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(4, 1, 4, 1, '2', '14.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(5, 1, 5, 1, '1', '24.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(6, 1, 6, 1, '3', '34.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(7, 1, 7, 1, '2', '4.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(8, 1, 8, 1, '1', '44.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(9, 1, 9, 1, '3', '54.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38'),
(10, 1, 10, 1, '2', '64.99', '2023-10-31 07:14:38', '2023-10-31 07:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `name`, `price`, `unit`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Product A', '19.99', 'each', 'http://example.com/img/product_a.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(2, 1, 1, 'Product B', '29.99', 'each', 'http://example.com/img/product_b.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(3, 1, 1, 'Product C', '9.99', 'each', 'http://example.com/img/product_c.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(4, 1, 1, 'Product D', '14.99', 'each', 'http://example.com/img/product_d.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(5, 1, 1, 'Product E', '24.99', 'each', 'http://example.com/img/product_e.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(6, 1, 1, 'Product F', '34.99', 'each', 'http://example.com/img/product_f.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(7, 1, 1, 'Product G', '4.99', 'each', 'http://example.com/img/product_g.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(8, 1, 1, 'Product H', '44.99', 'each', 'http://example.com/img/product_h.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(9, 1, 1, 'Product I', '54.99', 'each', 'http://example.com/img/product_i.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06'),
(10, 1, 1, 'Product J', '64.99', 'each', 'http://example.com/img/product_j.jpg', '2023-10-31 07:10:06', '2023-10-31 07:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `otp` varchar(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `mobile`, `password`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', 'john.doe@email.com', '123-456-7890', 'encrypted_password1', '123456', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(2, 'Jane', 'Doe', 'jane.doe@email.com', '123-456-7891', 'encrypted_password2', '654321', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(3, 'Sam', 'Smith', 'sam.smith@email.com', '123-456-7892', 'encrypted_password3', '987654', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(4, 'Emily', 'Jones', 'emily.jones@email.com', '123-456-7893', 'encrypted_password4', '876543', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(5, 'Michael', 'Brown', 'michael.brown@email.com', '123-456-7894', 'encrypted_password5', '567890', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(6, 'Jessica', 'Taylor', 'jessica.taylor@email.com', '123-456-7895', 'encrypted_password6', '345678', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(7, 'Brian', 'Davis', 'brian.davis@email.com', '123-456-7896', 'encrypted_password7', '234567', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(8, 'Laura', 'Garcia', 'laura.garcia@email.com', '123-456-7897', 'encrypted_password8', '456789', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(9, 'Kevin', 'Martinez', 'kevin.martinez@email.com', '123-456-7898', 'encrypted_password9', '789012', '2023-10-31 07:05:48', '2023-10-31 07:05:48'),
(10, 'Sara', 'Lee', 'sara.lee@email.com', '123-456-7899', 'encrypted_password10', '890123', '2023-10-31 07:05:48', '2023-10-31 07:05:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD CONSTRAINT `invoice_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_products_ibfk_3` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
