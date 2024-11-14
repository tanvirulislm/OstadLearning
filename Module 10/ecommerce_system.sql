-- Active: 1731477436449@@127.0.0.1@3306
CREATE TABLE `users`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` varchar(20) NOT NULL,
    `last_name` varchar(20) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(20) NOT NULL,
    `role` ENUM('admin', 'vendor', 'customer') NOT NULL DEFAULT 'customer',
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
)

CREATE TABLE `products`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(50) NOT NULL,
    `description` text NOT NULL,
    `price` varchar(50) NOT NULL,
    `stock` varchar(50) NOT NULL DEFAULT 0,
    `img_url` varchar(100) NOT NULL, 
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)

CREATE TABLE customers (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(50) NOT NULL,
    `lastname` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL UNIQUE,
    `phone` VARCHAR(15),
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE addresses (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `customer_id` BIGINT(20) UNSIGNED NOT NULL,
    `address_line1` VARCHAR(255) NOT NULL,
    `address_line2` VARCHAR(255),
    `city` VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    `postal_code` VARCHAR(20) NOT NULL,
    `country` VARCHAR(50) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE orders (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `customer_id` BIGINT(20) UNSIGNED NOT NULL,
    `payment_id` BIGINT(20) UNSIGNED,
    status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    `total_amount` DECIMAL(10, 2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE invoice_products (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` BIGINT(20) UNSIGNED NOT NULL,
    `product_id` BIGINT(20) UNSIGNED NOT NULL,
    `quantity` INT NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
);


CREATE TABLE `payments` (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` BIGINT(20) UNSIGNED,
    `payment_method` ENUM('credit_card', 'paypal', 'bank_transfer', 'cash') NOT NULL,
    status ENUM('pending', 'completed', 'failed', 'refunded') NOT NULL DEFAULT 'pending',
    `transaction_id` VARCHAR(100),
    `amount` DECIMAL(10, 2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON UPDATE CASCADE ON DELETE SET NULL
);