-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 08:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `role`) VALUES
(2, 'chard', 'Cj', 'cj@gmail.com', '$2y$10$95gkIaCbp4RS72zbtfMGteYTxezFPRzKrgoSW9uoq2GED6YCSCAaW', 'user'),
(3, 'chard', 'Cj', 'cj@gmail.com', '$2y$10$u7THfId6cnf9gxJRoiHpGueRkrApPS3O7NmmLOm2DBeTbK3gTgv22', 'user'),
(4, 'chard', 'Cj', 'cj@gmail.com', '$2y$10$XDJlzX6F9XLlHm.NMfpJfuTCn1NBA/5n6H02cb.YMhO0NwTy1Ks2W', 'user'),
(5, 'harold vicquerra', 'rold', 'harold@gmail.com', '$2y$10$2lenG41MMGfjNN6PFLWEF.UG5j64OSAYWomoiY5YFGWs1TMkSAoF.', 'user'),
(6, 'harold vicquerra', 'rold', 'harold@gmail.com', '$2y$10$IbQZrcHnH2iE/6WJ9SO4b.rX6CU6rXtod0x5vf8ywLEPYkOglNdVy', 'user'),
(7, 'cjjjjj', 'cj23', 'cj23@gmail.com', '$2y$10$N5SdSCWYnQlqAIw.5zUlru0c9MYVz2k8R1xFjuXMcnEh1dTqpnXyy', 'user'),
(8, 'chard', 'ccc', 'cjj@gmail.com', '$2y$10$elWyhBaRRqSkDt3gmYg.xuLpHFlfCKTgQibnw09qRtzcy1Jq5mOmy', 'user'),
(9, 'zxc', 'zxc', 'a@gmail.com', '$2y$10$h9Jiz78OfBEWQLE.oHQhUOv4e7R0olaWPU2nK0ozJCFlp14QZ.dMG', 'user'),
(10, 'haroldd', 'herold', 'harolder@gmail.com', '$2y$10$PPrSyrfvdN7SJeJn0WysaO3STGuTT5RRY2cgSeLGqa5dciveDXAfu', 'user'),
(11, 'cal iboso', 'boyjohn', 'roy@gmail.com', '$2y$10$467HMnJ25JdvpN4Rdwhy.O12Y1aQWn4EZ6E6No3x3DRH7NSaEq3ua', 'user'),
(12, '', 'admin', '', '$2y$10$3ICvXmEP8czyFT9HQsKiLO86eKIeLaH.uF16M83EFgidC/kwHm.wW', 'admin'),
(13, '', 'admin_1', '', '$2y$10$3ICvXmEP8czyFT9HQsKiLO86eKIeLaH.uF16M83EFgidC/kwHm.wW', 'admin'),
(14, 'cj', 'cj123', 'wawa@gmail.com', '$2y$10$9si40m5s/pA2VQ7SeCtOAufNTP4obzS9kxcBQoJsAs6PdTPE3eKUO', 'user'),
(15, 'cj', 'cj123', 'wawa@gmail.com', '$2y$10$V6Y2U1lEL7EvEl7en7c54uqFG7S0YoaezxSFJjBEXkz6vtSify48K', 'user'),
(16, 'harold', 'haroldbisaya', 'harold@gmail.com', '$2y$10$LOkRRwAnrP/25Ga7N5jQi.rEl2UUfcuGHtqoNLMkfIKYk5sqQQImO', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
