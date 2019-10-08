-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2019 at 02:41 PM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `17kibr`
--

-- --------------------------------------------------------

--
-- Table structure for table `irunaal`
--

CREATE TABLE `irunaal` (
  `id` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `color` varchar(1) NOT NULL,
  `price` int(12) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irunaal`
--

INSERT INTO `irunaal` (`id`, `item`, `qty`, `color`, `price`, `contact`, `owner`) VALUES
(1, 'OUVEL', 0, 'B', 100, '', ''),
(2, 'OUVEL', 0, 'R', 10000000, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irunaal`
--
ALTER TABLE `irunaal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irunaal`
--
ALTER TABLE `irunaal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
