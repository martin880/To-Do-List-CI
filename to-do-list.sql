-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 05:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to-do-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `to-do-list`
--

CREATE TABLE `to-do-list` (
  `id` int(11) NOT NULL,
  `todo_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to-do-list`
--

INSERT INTO `to-do-list` (`id`, `todo_name`) VALUES
(1, 'ISSUE TO SUB STORE'),
(2, 'BAKE PCB & BARCODE LABELLING'),
(3, 'REFLOW SOLDERING PROCESS'),
(5, 'AQUEOUS WASHING'),
(6, 'X-RAY PROCESS'),
(7, 'AUTOMATED OPTICAL INSPECTION'),
(8, 'FPT TEST & STAMPING'),
(9, 'FQA'),
(10, 'PACKING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `to-do-list`
--
ALTER TABLE `to-do-list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `to-do-list`
--
ALTER TABLE `to-do-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
