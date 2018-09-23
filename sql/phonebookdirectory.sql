-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 12:01 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebookdirectory`
--

-- --------------------------------------------------------

--
-- Table structure for table `_contact`
--

CREATE TABLE `_contact` (
  `contact_id` int(20) NOT NULL,
  `cf_name` varchar(20) NOT NULL,
  `cl_name` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `landline` varchar(12) NOT NULL,
  `contactEmail` varchar(100) NOT NULL,
  `public` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `mobile` int(12) NOT NULL,
  `email` varchar(12) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_users`
--

INSERT INTO `_users` (`fname`, `lname`, `dob`, `mobile`, `email`, `pass`, `user_id`) VALUES
('Muhammad', 'rehan', '0000-00-00', 32767, 'maryam@gmail', 'ec6a6536ca304edf844d1d248a4f08dc', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_contact`
--
ALTER TABLE `_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_contact`
--
ALTER TABLE `_contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
