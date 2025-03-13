-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 01:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `machine_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userFirstName` varchar(200) DEFAULT NULL,
  `userLastName` varchar(200) DEFAULT NULL,
  `userEmail` varchar(100) NOT NULL DEFAULT '',
  `userAddress` varchar(255) DEFAULT NULL,
  `userCity` varchar(100) DEFAULT NULL,
  `userState` varchar(100) DEFAULT NULL,
  `userType` varchar(100) NOT NULL DEFAULT 'user',
  `userPhoto` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userFirstName`, `userLastName`, `userEmail`, `userAddress`, `userCity`, `userState`, `userType`, `userPhoto`) VALUES
(1, 'Robin', 'Jackman', 'robin@jackman.com', '5001 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'r.jpg'),
(2, 'Taylor', 'Edward', 'Taylor@Edward.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 't.jpg'),
(3, 'Vivian', 'Dickens', 'Vivian@Dickens.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'v.jpg'),
(4, 'Harry', 'Clifford', 'Harry@Clifford.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'h.jpg'),
(5, 'Eliza', 'Clifford', 'Eliza@Clifford.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'e.jpg'),
(6, 'Nancy', 'Newman', 'Nancy@Newman.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'n.jpg'),
(7, 'Melinda', 'Clifford', 'Melinda@Clifford.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'm.jpg'),
(8, 'Harley', 'Gilbert', 'Harley@Gilbert.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'h.jpg'),
(9, 'Jerry', 'Gilbert', 'Jerry@Gilbert.com', '5002 North ST. Palo Alto', 'San Franscisco', 'California', 'user', 'j.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
