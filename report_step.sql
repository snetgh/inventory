-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2020 at 10:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report_step`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(100) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_timestamp`) VALUES
(7, 'hello', '2020-03-07 21:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `remarks` mediumtext NOT NULL,
  `departments` int(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `name`, `quantity`, `serial`, `remarks`, `departments`, `timestamp`) VALUES
(1, 'vbvb', 45, 'cvcv', '1', 1, '2020-03-07 14:48:02'),
(2, 'as', 4, 'gfg', '2', 4, '2020-03-07 14:48:02'),
(3, 'xcx', 45, 'ffgf', '3', 4, '2020-03-07 14:48:02'),
(4, 'waaw', 3434, 'ffggf', '4', 4, '2020-03-07 14:48:02'),
(5, 'vbvbv', 343, '4545', '5', 1, '2020-03-07 14:48:02'),
(6, 'waaw', 3434, 'ffggf', '6', 4, '2020-03-07 14:48:02'),
(7, 'vbvbv', 343, '4545', '7', 1, '2020-03-07 14:48:02'),
(8, 'asas', 34, 'cvcvgg', '8', 1, '2020-03-07 14:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(100) NOT NULL,
  `secret_id` varchar(100) NOT NULL,
  `report_to` varchar(255) NOT NULL,
  `report_from` varchar(255) NOT NULL,
  `report_date` varchar(50) NOT NULL,
  `report_subject` varchar(255) NOT NULL,
  `report_title` varchar(255) NOT NULL,
  `report_item` mediumtext NOT NULL,
  `performance` mediumtext NOT NULL,
  `downtime` mediumtext NOT NULL,
  `cause` mediumtext NOT NULL,
  `solution` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `secret_id`, `report_to`, `report_from`, `report_date`, `report_subject`, `report_title`, `report_item`, `performance`, `downtime`, `cause`, `solution`, `timestamp`) VALUES
(1, '6932155', 'Peter Donk', 'Stephen Fosu', 'January 20, 2020', 'Report for School', 'Something Must Kill A Man', 'qw', 'er', 'ty', 'uui', 'oo', '2020-03-07 17:23:46'),
(2, '6932155', 'Peter Donk', 'Stephen Fosu', 'January 20, 2020', 'Report for School', 'Something Must Kill A Man', 'as', 'f', 'g', 'h', 'k', '2020-03-07 17:23:46'),
(3, '6932155', 'Peter Donk', 'Stephen Fosu', 'January 20, 2020', 'Report for School', 'Something Must Kill A Man', 'we', 'fg', 'hj', 'kl', 'ty', '2020-03-07 17:23:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
