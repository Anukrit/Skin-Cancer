-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2017 at 09:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluecard`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_details`
--

CREATE TABLE `upload_details` (
  `upload_id` int(11) NOT NULL,
  `filename` varchar(45) DEFAULT NULL,
  `application_details` varchar(200) DEFAULT NULL,
  `application_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `isadmin` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userid`, `first_name`, `last_name`, `email`, `username`, `password`, `gender`, `isadmin`, `birthdate`) VALUES
(1, 'Admin', 'admin', 'admin@suncare.com', 'admin', 'admin123!@#', 'M', 'Y', NULL),
(2, 'gagan', 'verma', 'cap@gmail.com', 'caper', '1234567890', 'F', NULL, NULL),
(3, 'simple', 'dimple', 'simple@gmail.com', 'simple', 'dimple', 'F', NULL, '2017-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_details`
--
ALTER TABLE `upload_details`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_details`
--
ALTER TABLE `upload_details`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
