-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 02:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machine_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `userType` enum('Admin','Employee') NOT NULL,
  `userPhoto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `LastName`, `email`, `address`, `city`, `State`, `userType`, `userPhoto`) VALUES
(1, 'Louis', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'a.jpg'),
(2, 'Charlie', 'Muldoon', 'charlie.muldoon12@gmail.com', '825 AL-165, Fort Mitchell, FL 36856, United States', 'Mitchell', 'FL', 'Employee', 'b.jpg'),
(3, 'kunal', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'c.jpg'),
(4, 'shri', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'd.jpg'),
(5, 'vaibhav', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'e.jpg'),
(6, 'ms', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'f.jpg'),
(7, 'jds', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'g.jpg'),
(8, 'kwil', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'h.jpg'),
(9, 'nesh', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'i.jpg'),
(12, 'vishal', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'l.jpg'),
(13, 'HK', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'm.jpg'),
(14, 'kartik', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'n.jpg'),
(15, 'sudhya', 'Ramage', 'louis.ramage@gmail.com', '825 AL-165, Fort Mitchell, AL 36856, United States', 'Mitchell', 'AL ', 'Admin', 'o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
