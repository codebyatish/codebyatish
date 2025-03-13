-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2023 at 11:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `amount` varchar(11) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `verification` int(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `summery` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `order_id`, `amount`, `status`, `cancel`, `verification`, `created_at`, `created_by`, `modified_at`, `modified_by`, `summery`) VALUES
(1, 20, '120.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(2, 21, '120.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(3, 22, '230.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(4, 23, '160.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(5, 24, '800.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(6, 25, '240.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(7, 26, '35.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(8, 27, '140.00', 0, 0, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `main_category` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `main_category`, `active`) VALUES
(5, 'Dessert', '', 2),
(6, 'Drinks', '', 2),
(15, 'Starters', '', 1),
(18, 'Vegitable', '', 1),
(19, 'Vegitable', 'inventory', 1),
(20, 'chienies', 'billing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `service_charge_value` varchar(255) NOT NULL,
  `vat_charge_value` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `service_charge_value`, `vat_charge_value`, `address`, `phone`, `country`, `message`, `currency`) VALUES
(1, 'Dine Fine', '3', '13', '6996 Blecker Street', '3012458800', 'United States', 'Restaurant Management System in PHP with CodeIgniter Framework.', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `customer_mobile_number` varchar(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_date_of_birth` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_mobile_number`, `customer_email`, `customer_date_of_birth`, `user_id`, `created_at`) VALUES
(1, 'Atish Jaiwal', '9856321144', 'atish@gmail.com', '1996-02-05', 0, '2023-12-05 05:13:07'),
(2, 'Shivam Chopade', '9756454122', 'shivam1@gmail.com', '1992-09-16', 1, '2023-12-05 05:20:15'),
(3, 'Nayan ', '7845961245', 'nayan@gmail.com', '2016-06-22', 1, '2023-12-06 04:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Super Administrator', 'a:32:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:11:\"createStore\";i:9;s:11:\"updateStore\";i:10;s:9:\"viewStore\";i:11;s:11:\"deleteStore\";i:12;s:11:\"createTable\";i:13;s:11:\"updateTable\";i:14;s:9:\"viewTable\";i:15;s:11:\"deleteTable\";i:16;s:14:\"createCategory\";i:17;s:14:\"updateCategory\";i:18;s:12:\"viewCategory\";i:19;s:14:\"deleteCategory\";i:20;s:13:\"createProduct\";i:21;s:13:\"updateProduct\";i:22;s:11:\"viewProduct\";i:23;s:13:\"deleteProduct\";i:24;s:11:\"createOrder\";i:25;s:11:\"updateOrder\";i:26;s:9:\"viewOrder\";i:27;s:11:\"deleteOrder\";i:28;s:10:\"viewReport\";i:29;s:13:\"updateCompany\";i:30;s:11:\"viewProfile\";i:31;s:13:\"updateSetting\";}'),
(4, 'Members', 'a:9:{i:0;s:9:\"viewStore\";i:1;s:11:\"deleteStore\";i:2;s:9:\"viewTable\";i:3;s:11:\"deleteTable\";i:4;s:12:\"viewCategory\";i:5;s:11:\"viewProduct\";i:6;s:11:\"createOrder\";i:7;s:11:\"updateOrder\";i:8;s:9:\"viewOrder\";}'),
(5, 'Staff', 'a:6:{i:0;s:9:\"viewTable\";i:1;s:11:\"viewProduct\";i:2;s:11:\"createOrder\";i:3;s:11:\"updateOrder\";i:4;s:9:\"viewOrder\";i:5;s:11:\"viewProfile\";}'),
(6, 'Manager', 'a:19:{i:0;s:8:\"viewUser\";i:1;s:11:\"createGroup\";i:2;s:11:\"updateGroup\";i:3;s:9:\"viewGroup\";i:4;s:11:\"deleteGroup\";i:5;s:9:\"viewStore\";i:6;s:11:\"createTable\";i:7;s:11:\"updateTable\";i:8;s:9:\"viewTable\";i:9;s:11:\"deleteTable\";i:10;s:14:\"updateCategory\";i:11;s:13:\"createProduct\";i:12;s:13:\"updateProduct\";i:13;s:11:\"viewProduct\";i:14;s:13:\"deleteProduct\";i:15;s:9:\"viewOrder\";i:16;s:11:\"deleteOrder\";i:17;s:10:\"viewReport\";i:18;s:11:\"viewProfile\";}'),
(7, 'Cashier', 'a:8:{i:0;s:8:\"viewUser\";i:1;s:11:\"createOrder\";i:2;s:11:\"updateOrder\";i:3;s:9:\"viewOrder\";i:4;s:11:\"deleteOrder\";i:5;s:10:\"viewReport\";i:6;s:11:\"viewProfile\";i:7;s:13:\"updateSetting\";}');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `service_charge_rate` varchar(255) DEFAULT NULL,
  `service_charge_amount` varchar(255) DEFAULT NULL,
  `vat_charge_rate` varchar(255) DEFAULT NULL,
  `vat_charge_amount` varchar(255) DEFAULT NULL,
  `discount` varchar(255) NOT NULL,
  `net_amount` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `paid_status` int(11) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `online` varchar(11) DEFAULT NULL,
  `cash` varchar(11) DEFAULT NULL,
  `whatsapp` int(1) NOT NULL DEFAULT 0,
  `email` int(1) NOT NULL DEFAULT 0,
  `mobile_no` int(20) DEFAULT NULL,
  `email_id` int(50) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `payment_mode` varchar(11) NOT NULL,
  `cancel` varchar(11) DEFAULT '0',
  `cancel_reason` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bill_no`, `date_time`, `gross_amount`, `service_charge_rate`, `service_charge_amount`, `vat_charge_rate`, `vat_charge_amount`, `discount`, `net_amount`, `user_id`, `table_id`, `paid_status`, `store_id`, `online`, `cash`, `whatsapp`, `email`, `mobile_no`, `email_id`, `customer_id`, `type`, `payment_mode`, `cancel`, `cancel_reason`) VALUES
(1, 'CDSTRO-17AD', '1621937009', '14.00', '', '0', '13', '1.82', '0', '15.82', 1, 3, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(2, 'CDSTRO-E230', '1621941718', '6.00', '', '0', '13', '0.78', '0', '6.78', 1, 6, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(3, 'CDSTRO-32CD', '1621951601', '9.00', '3', '0.27', '13', '1.17', '0', '10.44', 1, 30, 2, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(4, 'CDSTRO-D1E6', '1621954896', '29.79', '3', '0.89', '13', '3.87', '0', '34.55', 1, 23, 2, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(5, 'CDSTRO-8C4D', '1621958450', '36.44', '3', '1.09', '13', '4.74', '1', '41.27', 1, 12, 2, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(6, 'CDSTRO-9507', '1621960539', '18.99', '3', '0.57', '13', '2.47', '0', '22.03', 1, 24, 2, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(7, 'CDSTRO-8B2C', '1621962871', '44.34', '3', '1.33', '13', '5.76', '1', '50.43', 1, 37, 2, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(8, 'CDSTRO-0E73', '1621963107', '9.85', '3', '0.30', '13', '1.28', '0', '11.43', 5, 33, 2, 16, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(9, 'CDSTRO-C56A', '1700911919', '51.25', '3', '1.54', '13', '6.66', '10', '49.45', 1, 22, 2, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(10, 'CDSTRO-1803', '1700912364', '6.00', '3', '0.18', '13', '0.78', '', '6.96', 1, 19, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(11, 'CDSTRO-E6D7', '1700912736', '5.10', '3', '0.15', '13', '0.66', '1', '4.91', 1, 39, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(12, 'CDSTRO-4A4E', '1700913856', '80.00', '3', '0', '13', '0', '10', '70.00', 1, 38, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(13, 'CDSTRO-90F2', '1700917084', '5.10', '3', '0', '13', '0', '', '5.10', 1, 39, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(14, '12', '1700918287', '1440.00', '3', '0', '13', '0', '', '1440.00', 1, 40, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(15, '1', '1700993783', '80.00', '3', '0', '13', '0', '', '80.00', 1, 38, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(16, '1', '1700993868', '1040.00', '3', '0', '13', '0', '', '1040.00', 1, 41, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(17, '1', '1700994296', '80.00', '3', '0', '13', '0', '', '80.00', 1, NULL, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, '', '0', NULL),
(18, '1', '1701437565', '120.00', NULL, NULL, NULL, NULL, '', '120.00', 1, 38, 1, NULL, '120.00', '0', 0, 0, NULL, NULL, NULL, 'parcel', 'phonepe', '0', NULL),
(19, '1', '1701442198', '120.00', NULL, NULL, NULL, NULL, '10', '110.00', 1, 38, 1, NULL, '120.00', '0', 0, 0, NULL, NULL, NULL, 'parcel', 'phonepe', '0', NULL),
(20, '1', '1701442299', '120.00', NULL, NULL, NULL, NULL, '', '120.00', 1, 38, 1, NULL, '120.00', '0', 0, 0, NULL, NULL, NULL, 'parcel', 'phonepe', '0', NULL),
(21, '1', '1701576849', '120.00', NULL, NULL, NULL, NULL, '', '120.00', 1, 38, 1, NULL, '120.00', '0', 0, 0, NULL, NULL, NULL, 'parcel', 'phonepe', '0', NULL),
(22, '1', '1701577366', '230.00', NULL, NULL, NULL, NULL, '10', '220.00', 1, 40, 1, NULL, '230.00', '0', 0, 0, NULL, NULL, NULL, 'table', 'phonepe', '0', NULL),
(23, '1', '1701700527', '160.00', NULL, NULL, NULL, NULL, '10', '150.00', 1, 38, 1, NULL, '160.00', '0', 0, 0, NULL, NULL, NULL, 'parcel', 'phonepe', '0', NULL),
(24, '1', '1701779089', '800.00', NULL, NULL, NULL, NULL, '100', '700.00', 1, 38, 1, NULL, '800.00', '0', 0, 0, NULL, NULL, NULL, 'parcel', 'phonepe', '0', NULL),
(25, '1', '1701792787', '240.00', NULL, NULL, NULL, NULL, '', '240.00', 1, 38, 1, NULL, '240.00', '0', 0, 0, NULL, NULL, 1, 'parcel', 'phonepe', '0', NULL),
(26, '2', '1701793215', '35.00', NULL, NULL, NULL, NULL, '', '35.00', 1, 38, 1, NULL, '35.00', '0', 0, 0, NULL, NULL, 2, 'parcel', 'phonepe', '0', NULL),
(27, '2', '1701834192', '140.00', NULL, NULL, NULL, NULL, '', '140.00', 1, 38, 1, NULL, '140.00', '0', 0, 0, NULL, NULL, 3, 'parcel', 'phonepe', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `rate`, `amount`) VALUES
(6, 1, 2, '2', '5', '10.00'),
(7, 1, 1, '3', '4', '4.00'),
(8, 2, 3, '2', '3', '6.00'),
(9, 3, 5, '1', '6', '6.00'),
(10, 3, 3, '2', '3', '3.00'),
(11, 4, 19, '2', '7.95', '15.90'),
(12, 4, 16, '2', '1.89', '1.89'),
(13, 4, 9, '1', '12', '12.00'),
(18, 5, 23, '2', '10.30', '20.60'),
(19, 5, 19, '1', '7.95', '7.95'),
(20, 5, 16, '2', '1.89', '1.89'),
(21, 5, 5, '1', '6', '6.00'),
(24, 6, 12, '1', '9', '9.00'),
(25, 6, 15, '1', '9.99', '9.99'),
(33, 7, 24, '2', '9.85', '19.70'),
(34, 7, 25, '1', '5.10', '5.10'),
(35, 7, 18, '1', '8.95', '8.95'),
(36, 7, 16, '3', '1.89', '1.89'),
(37, 7, 8, '2', '1.70', '1.70'),
(38, 7, 2, '1', '5', '5.00'),
(39, 7, 4, '2', '2', '2.00'),
(41, 8, 24, '1', '9.85', '9.85'),
(42, 9, 25, '2', '5.10', '10.20'),
(43, 9, 22, '1', '10.95', '10.95'),
(44, 9, 25, '1', '5.10', '5.10'),
(45, 9, 21, '1', '12.50', '12.50'),
(46, 9, 21, '1', '12.50', '12.50'),
(47, 10, 5, '1', '6', '6.00'),
(49, 11, 25, '1', '5.10', '5.10'),
(51, 13, 25, '10', '5.10', '5.10'),
(52, 14, 26, '8', '80', '400.00'),
(53, 14, 26, '5', '80', '400.00'),
(54, 14, 26, '5', '80', '640.00'),
(55, 12, 26, '1', '80', '80.00'),
(56, 15, 26, '1', '80', '80.00'),
(57, 16, 26, '13', '80', '1040.00'),
(58, 17, 26, '1', '80', '80.00'),
(73, 18, 30, '1', '120', '120.00'),
(74, 19, 30, '1', '120', '120.00'),
(75, 20, 30, '1', '120', '120.00'),
(76, 21, 30, '1', '120', '120.00'),
(77, 22, 26, '1', '80', '80.00'),
(78, 22, 30, '1', '120', '120.00'),
(79, 22, 29, '2', '15', '30.00'),
(80, 23, 26, '2', '80', '160.00'),
(81, 24, 26, '3', '80', '240.00'),
(82, 24, 30, '4', '120', '480.00'),
(83, 24, 28, '4', '20', '80.00'),
(84, 25, 30, '2', '120', '240.00'),
(89, 26, 28, '1', '20', '20.00'),
(90, 26, 27, '1', '15', '15.00'),
(91, 27, 30, '1', '120', '120.00'),
(92, 27, 28, '1', '20', '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` text NOT NULL,
  `store_id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `store_id`, `name`, `price`, `description`, `image`, `active`) VALUES
(26, 'null', '[\"1\"]', 'Shev Bhaji', '80', '', '<p>The upload path does not appear to be valid.</p>', 1),
(27, '[\"6\"]', '[\"1\"]', 'Water Bottle', '15', '', '<p>The upload path does not appear to be valid.</p>', 1),
(28, '[\"15\"]', '[\"1\"]', 'Masala Papad', '20', '', '<p>The upload path does not appear to be valid.</p>', 1),
(29, '[\"15\"]', '[\"1\"]', 'Fry Papad', '15', '', '<p>The upload path does not appear to be valid.</p>', 1),
(30, '[\"20\"]', '[\"1\"]', 'Paneer Chilli', '120', '', '<p>The upload path does not appear to be valid.</p>', 1),
(31, '[\"20\"]', '[\"1\"]', 'Veg Fried Rice', '90', '', '<p>The upload path does not appear to be valid.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `active`) VALUES
(1, 'Green Kitchen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `available` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_name`, `capacity`, `available`, `active`, `store_id`) VALUES
(38, 'T-1', '4', 1, 1, 1),
(39, 'T-2', '4', 1, 1, 1),
(40, 'T-3', '4', 1, 1, 1),
(41, 'T-4', '4', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`, `store_id`) VALUES
(1, 'admin', '$2y$10$7HpMJOYDc7QyaRfJX5exJuQSi2U/fB7qgRLACu.1TMg7snJNf7Mim', 'admin@gmail.com', 'Will', 'Williams', '80789998', 1, 0),
(2, 'kenny', '$2y$10$QQESnj3B3Q3nb9IBuZwZE..rmAJPUzz0DWlNM8zCydju432BlyjuO', 'kennyw@gmail.com', 'Kenny', 'Waldrom', '7545554540', 1, 1),
(3, 'liamoore', '$2y$10$ug9KuKmpgY1ck0tuzjxjU.rROEkaFCloTTZGjMhRzugMZA14bZSdC', 'liam@gmail.com', 'Liam', 'Moore', '7400002140', 1, 1),
(4, 'veronica', '$2y$10$J4/hvDs/.rW8nrd8N9kfuuh0Msh4djj6LyhQvG3l8/9clc7ge7At.', 'veronica@gmail.com', 'Veronica', 'Lyle', '7850002680', 2, 2),
(5, 'donna', '$2y$10$uhWPHza2qiKtFKS3IKbIyeblUBXPoJWbwyWCuju7ukCTAcm2oncZO', 'donna@gmail.com', 'Donna', 'Edwards', '7025556960', 2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 4),
(3, 3, 4),
(4, 4, 6),
(5, 5, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
