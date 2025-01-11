-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `number`, `password`) VALUES
(1, 'shra4', 'shra4@gmail.com', '', '6f04f0d75f6870858bae14ac0b6d9f73'),
(2, 'hrish5', 'hrish5@gmail.com', '', '81b073de9370ea873f548e31b8adc081'),
(3, '', 'bhaktikharate24@gmail.com', '', '1234'),
(4, '', 'bhaktikharate24@gmail.com', '', '1234'),
(5, 'Bhakti Kharate', 'bhaktikharate24@gmail.com', '9969054541', '1234'),
(6, 'Bhakti Kharat', 'bhaktikharate24@gmail.com', '9969054541', '1234'),
(7, 'Bhakti', 'bhaktikharate24@gmail.com', '9969054541', 'MTIzNDU='),
(8, 'Bhakti', 'bhaktikharate24@gmail.com', '9969054541', 'MTIzNA=='),
(9, 'Jay Shukla', 'jay.shukla_19@sakec.ac.in', '9969054541', 'MTIzNA=='),
(10, 'Jay Shukla', 'jay.shukla_19@sakec.ac.in', '9969054541', 'MTIzNA=='),
(11, 'Jay Shukla', 'jay.shukla_19@sakec.ac.in', '9969054541', 'MTIzNA=='),
(12, 'Jay Shukla', 'jay.shukla_19@sakec.ac.in', '9969054541', 'MTIzNA=='),
(13, 'Jay Shukla', 'jay.shukla_19@sakec.ac.in', '9969054541', 'MTIzNA=='),
(14, 'Bhakti Prashant Kharate ', 'bhaktikharate24@gmail.com', '9969054541', 'MTIzNA=='),
(15, 'Jay Shukla', 'jay.shukla_19@sakec.ac.in', '9969054542', 'MTIzNA==');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
