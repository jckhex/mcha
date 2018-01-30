-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 06:49 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paylife_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paylife_registartion`
--

CREATE TABLE `tbl_paylife_registartion` (
  `reg_id` int(11) NOT NULL,
  `Sponsor_id` varchar(1000) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `email_id` varchar(500) NOT NULL,
  `mobile` int(255) NOT NULL,
  `city` varchar(500) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `level_1` int(255) NOT NULL,
  `level_2` int(255) NOT NULL,
  `level_3` int(255) NOT NULL,
  `level_4` int(255) NOT NULL,
  `level_5` int(225) NOT NULL,
  `level_6` int(225) NOT NULL,
  `level_7` int(225) NOT NULL,
  `level_8` int(255) NOT NULL,
  `level_9` int(255) NOT NULL,
  `level_10` int(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `leg_id` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paylife_registartion`
--

INSERT INTO `tbl_paylife_registartion` (`reg_id`, `Sponsor_id`, `username`, `password`, `full_name`, `email_id`, `mobile`, `city`, `country`, `pincode`, `level_1`, `level_2`, `level_3`, `level_4`, `level_5`, `level_6`, `level_7`, `level_8`, `level_9`, `level_10`, `is_active`, `leg_id`, `create_date`, `user_image`) VALUES
(1, '1', 'vc', 'cvz', 'vcxz', 'cfd', 1, 'fdew', 'cd', 1417, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1, '4525', '2017-12-11 23:01:14', '44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
