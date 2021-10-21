-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 06:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `email` varchar(1000) NOT NULL,
  `admission_date` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fees` tinyint(1) NOT NULL DEFAULT 0,
  `leaving_date` varchar(100) NOT NULL,
  `current_weight` float NOT NULL,
  `current_height` float NOT NULL,
  `leaving_reason` varchar(1000) NOT NULL,
  `user_remarks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `phone`, `weight`, `height`, `email`, `admission_date`, `password`, `fees`, `leaving_date`, `current_weight`, `current_height`, `leaving_reason`, `user_remarks`) VALUES
(1, 'Zahid', 34, 222344444, 55, 1.3208, 'saad@gmail.com', '11-0ct-2021', '25d55ad283aa400af464c76d713c07ad', 1, '', 0, 0, '', ''),
(2, 'Asad', 30, 2147483647, 50, 1.75, 'asad@gmail.com', '30-sep-2021', '25d55ad283aa400af464c76d713c07ad', 0, '', 0, 0, '', ''),
(3, 'Saad', 35, 2147483647, 60, 1.3208, 'saad@gmail.com', '11-0ct-2021', '25d55ad283aa400af464c76d713c07ad', 1, '', 0, 0, '', ''),
(4, 'Ali', 56, 222348545, 70, 1.245, 'ali@gmail.com', '01-oct-2021', '25d55ad283aa400af464c76d713c07ad', 1, '20/10/2021', 46, 1.777, 'I am done with course', 'It was fantastic journey'),
(5, 'Ali', 22, 222324525, 55, 1.3208, 'ali@gmail.com', '21-sep-2021', '25d55ad283aa400af464c76d713c07ad', 0, '', 0, 0, '', ''),
(6, 'asad', 43, 22233443, 70, 1.32084, 'asad@gmail.com', '05-oct-2021', '25d55ad283aa400af464c76d713c07ad', 0, '', 0, 0, '', ''),
(9, 'Ahmed', 22, 2147483647, 60, 1.345, 'ahmed@gmail.com', '14-oct-2021', '10a321b746b56906d6a44f8486d04ee6', 0, '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
