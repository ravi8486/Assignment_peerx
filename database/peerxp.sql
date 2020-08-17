-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 08:36 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peerxp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_dtails`
--

CREATE TABLE `user_dtails` (
  `id` int(10) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `registration_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dtails`
--

INSERT INTO `user_dtails` (`id`, `u_name`, `u_email`, `u_password`, `registration_date`) VALUES
(1, 'Ravi kumar', 'kumar.ravi8486@gmail.com', '12345678', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_dtails`
--
ALTER TABLE `user_dtails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_dtails`
--
ALTER TABLE `user_dtails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
