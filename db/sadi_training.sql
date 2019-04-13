-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2019 at 11:01 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadi_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `father_name` char(255) NOT NULL,
  `mother_name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `phone` char(50) NOT NULL,
  `address` text NOT NULL,
  `class` int(11) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `email`, `phone`, `address`, `class`, `roll`) VALUES
(6, 'Saquibul Hasan Razib', 'Borhan Uddin', 'Mrs. ABC', 'saquibulhassan@gmail.com', '1234564', 'Test', 2, 1),
(8, 'Sheikh Sadi', 'Mr. XYZ', 'Mrs. ABC', 'saquibulhassan@gmail.com', '1234564', 'Test', 1, 1),
(9, 'Saquibul Hasan Razib', 'Mr. XYZ', 'Mrs. ABC', 'saquibulhassan@gmail.com', '1234564', 'Test', 1, 123),
(10, 'Saquibul Hasan Razib', 'Mr. XYZ', 'Mrs. ABC', 'saquibulhassan@gmail.com', '1234564', 'Test', 1, 789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
