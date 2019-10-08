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
-- Table structure for table `irunaitems`
--

CREATE TABLE `irunaitems` (
  `id` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `refinement` int(1) NOT NULL,
  `slots` int(1) NOT NULL,
  `slot1` varchar(30) NOT NULL,
  `slot2` varchar(30) NOT NULL,
  `ability` varchar(20) NOT NULL,
  `abilitylv` int(1) NOT NULL,
  `atk` int(4) NOT NULL,
  `def` int(4) NOT NULL,
  `price` int(12) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irunaitems`
--

INSERT INTO `irunaitems` (`id`, `item`, `refinement`, `slots`, `slot1`, `slot2`, `ability`, `abilitylv`, `atk`, `def`, `price`, `contact`, `owner`) VALUES
(3, 'KODACHI', 9, 1, 'GANEI', '', 'QUICK COOL', 5, 0, 0, 1000, '', ''),
(6, 'yeet', 2, 2, '123', '321', '1', 2, 123, 123, 123123123, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irunaitems`
--
ALTER TABLE `irunaitems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irunaitems`
--
ALTER TABLE `irunaitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
