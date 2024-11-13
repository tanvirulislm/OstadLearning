-- Active: 1731424507342@@127.0.0.1@3306@inventory

--- users
CREATE TABLE   `users`(
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE  CURRENT_TIMESTAMP()
)




  -- সুমাইয়া খানমের বিয়ে হবে গাইবান্ধার রাব্বিলের সাথে 
  -- পাত্রী- ফরেন কি 
  -- পাত্র- প্রাইমারি কি 

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE  CURRENT_TIMESTAMP(),
   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)


CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE  CURRENT_TIMESTAMP(),
   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)



CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE  CURRENT_TIMESTAMP(),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
   FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)  ON UPDATE CASCADE ON DELETE RESTRICT
)




CREATE TABLE `invoice` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `total` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `payable` varchar(50) NOT NULL,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE  CURRENT_TIMESTAMP(),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
   FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)



CREATE TABLE `invoice_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `qty` varchar(50) NOT NULL,
  `sale_price` varchar(50) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
   FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
   FOREIGN KEY (`product_id`) REFERENCES `product`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
   FOREIGN KEY (`invoice_id`) REFERENCES `invoice`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
  `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE  CURRENT_TIMESTAMP()
)

