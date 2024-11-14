-- Active: 1731477436449@@127.0.0.1@3306@erpsystem
CREATE TABLE `users`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` varchar(20) NOT NULL,
    `last_name` varchar(20) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(20) NOT NULL,
    `role` ENUM('admin', 'manager', 'employee', 'supplier') NOT NULL DEFAULT 'supplier',
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
)

CREATE TABLE `departments`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(50) NOT NULL,
    `description` text,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
)

CREATE TABLE `employees`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` bigint(20) UNSIGNED NOT NULL,
    `department_id` bigint(20) UNSIGNED NOT NULL,
    `position` varchar(20) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `address` varchar(50) NOT NULL,
    `hire_date` date NOT NULL,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(), 
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`department_id`) REFERENCES `departments`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)

CREATE TABLE `projects`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(50) NOT NULL,
    `description` text NOT NULL,
    `start_date` date NOT NULL,
    `end_date` date NOT NULL,
    `status` ENUM('pending', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
)

CREATE TABLE `tasks`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `project_id` bigint(20) UNSIGNED NOT NULL,
    `employee_id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(50) NOT NULL,
    `status` ENUM('pending', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    `due_date` date NOT NULL,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`employee_id`) REFERENCES `employees`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)

CREATE TABLE `resources`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `project_id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(50) NOT NULL,
    `type` ENUM('metial', 'software', 'human', 'equipment') NOT NULL,
    `quantity` int NOT NULL,
    `allocated_to` bigint(20) UNSIGNED,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)

CREATE TABLE `suppliers`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` bigint(20) UNSIGNED NOT NULL,
    `contact_person` varchar(50) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `email` varchar(50) NOT NULL,
    `address` varchar(50) NOT NULL,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)


CREATE TABLE `orders`(
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` bigint(20) UNSIGNED NOT NULL,
    `supplier_id` bigint(20) UNSIGNED NOT NULL,
    `status` ENUM('pending', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    `total_amount` DECIMAL(10, 2) NOT NULL,
    `order_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `delivery_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `order_reference` varchar(50) NOT NULL UNIQUE,
    `payment_status` ENUM('unpaid', 'partial', 'paid') NOT NULL DEFAULT 'unpaid',
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`supplier_id`) REFERENCES `suppliers`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)

CREATE TABLE `invoice` (
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` bigint(20) UNSIGNED NOT NULL,
    `project_id` bigint(20) UNSIGNED NOT NULL,
    `invoice_number` varchar(50) NOT NULL UNIQUE,
    `quantity` int NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    `subtotal` DECIMAL(10, 2) NOT NULL,
    `vat` DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    `discount` DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT
)

CREATE TABLE `order_payments` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` BIGINT(20) UNSIGNED NOT NULL,
    `payment_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `amount` DECIMAL(10, 2) NOT NULL,
    `payment_method` ENUM('cash', 'card', 'bank_transfer') NOT NULL,
    `transaction_id` VARCHAR(50) NOT NULL UNIQUE,
    `payment_status` ENUM('pending', 'successful', 'failed') NOT NULL DEFAULT 'pending',
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
);



