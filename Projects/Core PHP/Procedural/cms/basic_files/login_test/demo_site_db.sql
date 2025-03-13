-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 12:23 PM
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
-- Database: `demo_site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo_multiple`
--

CREATE TABLE `demo_multiple` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subjects` text NOT NULL,
  `photos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo_multiple`
--

INSERT INTO `demo_multiple` (`id`, `name`, `email`, `subjects`, `photos`) VALUES
(1, 'dsdsd', 'sadsdsadsad', '', 'Array'),
(2, 'dsadsad', 'asdsdasdsad', '', '_large_image_4.jpg'),
(3, 'sdsadsad', 'sadsadsadsad', 'Array', 'Array'),
(4, 'asadsds', 'cxcxcxcxc', 'Physics,Math,English,Marathi', '_large_image_1.jpg,_large_image_2.jpg,_large_image_3.jpg'),
(5, 'Atishkumar', 'atishjaiwal9@gmail.com', 'Physics,Math,English', 'images-1.jpg,images-2.jpg,images-3.jpg,images-4.jpg,images-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `digital_cards`
--

CREATE TABLE `digital_cards` (
  `id` int(11) NOT NULL,
  `profile_photo` text NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `email_id` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `linedin_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `instagram_link` text NOT NULL,
  `whats_app_number` varchar(11) NOT NULL,
  `last_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_cards`
--

INSERT INTO `digital_cards` (`id`, `profile_photo`, `first_name`, `last_name`, `designation`, `mobile_number`, `email_id`, `address`, `linedin_link`, `twitter_link`, `instagram_link`, `whats_app_number`, `last_updated`) VALUES
(1, '_large_image_1.jpg', 'Atish', 'Jaiwal', 'Web Devloper', '9823901118', 'atishjaiwal48@gmail.com', 'N-12, ED-22/5, Bharatmata Nagar, HUDCO, Aurangabad.', 'https://in.linkedin.com/', 'https://twitter.com/?lang=en', 'https://www.instagram.com/demo/', '9823901118', '2021-05-27 03:05:37'),
(2, 'images-1 copy.jpg', 'Kunal', 'Kharat', 'Javascript Devloper', '9823901117', 'kunal@gmail.com', 'N-11, CIDCO,Aurangabad.', 'https://in.linkedin.com/', 'https://twitter.com/?lang=en', 'https://www.instagram.com/demo/', '9823901117', '2021-05-27 05:05:47'),
(3, '_large_image_1.jpg', 'sdsd', 'sadsad', 'sdsadsad', '9823901118', 'sdsad@gmail.com', 'sdasdasd', 'sdsd', 'asdsd', 'dsadsadsad', '9823901118', '2021-06-09 05:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` text NOT NULL,
  `user_role` varchar(256) NOT NULL,
  `user_mobilenumber` varchar(11) NOT NULL,
  `user_subjects` varchar(256) NOT NULL,
  `user_dateofbirth` varchar(256) NOT NULL,
  `user_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_role`, `user_mobilenumber`, `user_subjects`, `user_dateofbirth`, `user_address`) VALUES
(1, 'Atish Jaiwal', 'admin@gmail.com', '123', 'admin', '9823901118', '', '', ''),
(2, 'Kunal Kharat', 'k@gmail.com', '', '', '9823456700', 'Marathi,Hindi,English', '1998-04-16', 'N-12, ED-22/5, Bharatmata Nagar , HUDCO, A.bad.'),
(3, 'Subham Kathar', 'shubham@gmail.com', '', '', '9876545566', 'Marathi,Hindi,Math', '1996-02-05', 'TV center HUDCO, Aurangabad.'),
(4, 'Vishal Deshmukh', 'v@gmail.com', '', '', '8790115622', 'Marathi,Hindi,English,Physics,Math', '2021-06-15', 'sdsadsdsdsdsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo_multiple`
--
ALTER TABLE `demo_multiple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_cards`
--
ALTER TABLE `digital_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo_multiple`
--
ALTER TABLE `demo_multiple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `digital_cards`
--
ALTER TABLE `digital_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
