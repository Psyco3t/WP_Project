-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 12:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `browser` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginDate` datetime(3) DEFAULT current_timestamp(3),
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `browser`, `ip`, `loginDate`, `user`) VALUES
(6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-06-30 14:43:47.356', 'sycer'),
(7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-06-30 15:33:37.917', 'sycer'),
(8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-06-30 15:41:32.504', 'sycer'),
(9, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-06-30 16:26:50.040', 'sycer'),
(10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-06-30 16:34:15.182', 'sycer'),
(11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-05 18:51:16.269', 'sycer');

-- --------------------------------------------------------

--
-- Table structure for table `tableinfo`
--

CREATE TABLE `tableinfo` (
  `tableName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `budget` int(11) DEFAULT NULL,
  `monthlyExpenses` int(11) DEFAULT NULL,
  `lastMonthDate` date DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `otherIncome` int(11) DEFAULT NULL,
  `budgetDescript` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currentDate` date DEFAULT NULL,
  `memberData` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tablename`
--

CREATE TABLE `tablename` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `budgetTableName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tablename`
--

INSERT INTO `tablename` (`username`, `budgetTableName`) VALUES
('sycer', 'testTable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime(3) DEFAULT current_timestamp(3),
  `userPerms` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT 0,
  `token` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `registration_expires` datetime NOT NULL,
  `resetToken` char(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `userPerms`, `email`, `active`, `token`, `registration_expires`, `resetToken`) VALUES
(12, 'sycer', '$2y$10$aCwOgPmsTHQWnPiYTZfa3u7U78nDjES3tEgLKi8bKmUXZ6ys0Q596', '2022-05-19 22:33:41.698', NULL, 'nattila2001@gmail.com', 1, '', '0000-00-00 00:00:00', 'QpfunpffOrgwzyvzYbtfkqkuJvmkomwpRlvqybhoHztmiwfsGuxlzoxiRedu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableinfo`
--
ALTER TABLE `tableinfo`
  ADD PRIMARY KEY (`tableName`);

--
-- Indexes for table `tablename`
--
ALTER TABLE `tablename`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_tableName_tableInfo1` (`budgetTableName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ__users__F3DBC5726B469406` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tableinfo`
--
ALTER TABLE `tableinfo`
  ADD CONSTRAINT `tableInfo_to_tableName` FOREIGN KEY (`tableName`) REFERENCES `tablename` (`budgetTableName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tablename`
--
ALTER TABLE `tablename`
  ADD CONSTRAINT `FK_tablename_to_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
