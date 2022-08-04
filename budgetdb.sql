-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 06:29 PM
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
(11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-05 18:51:16.269', 'sycer'),
(12, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-06 15:48:06.196', 'sycer'),
(13, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-06 20:50:20.809', 'sycer'),
(14, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-06 20:53:03.867', 'sycer'),
(15, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-07 23:52:53.185', 'sycer'),
(16, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-08 00:01:56.584', 'sycer'),
(17, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-08 00:42:07.895', 'sycer'),
(18, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-08 00:44:34.027', 'sycer'),
(19, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-08 00:45:55.628', 'sycer'),
(20, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-25 17:29:11.017', 'sycer'),
(21, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0', '127.0.0.1', '2022-07-25 19:42:46.121', 'sycer'),
(22, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-01 14:54:42.845', 'sycer'),
(23, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-02 15:30:29.289', 'sycer'),
(24, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-04 14:30:09.425', 'sycer'),
(25, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-04 18:23:57.088', 'psycon');

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
  `memberData` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tableinfo`
--

INSERT INTO `tableinfo` (`tableName`, `budget`, `monthlyExpenses`, `lastMonthDate`, `income`, `otherIncome`, `budgetDescript`, `currentDate`, `memberData`, `Total`, `ID`) VALUES
('FunnyTable', 50, NULL, NULL, 1000, 0, 'A cry for help', '2022-08-02', NULL, 30, 1),
('FunnyTable', 30, NULL, NULL, 1000, 0, 'frog', '2022-08-04', NULL, 29, 2),
('FunnyTable', 1, NULL, NULL, 1000, 0, 'Szamla', '2022-08-05', NULL, 1200, 3),
('FunnyTable', 2, NULL, NULL, 1000, 0, 'szamla2', '2022-08-11', NULL, 1500, 4),
('FunnyTable', 3, NULL, NULL, 1000, 0, 'szamla3', '2022-08-12', NULL, 1600, 5),
('FunnyTable', 4, NULL, NULL, 1000, 0, 'szamla4', '2022-08-17', NULL, 1700, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tablename`
--

CREATE TABLE `tablename` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `budgetTableName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tablename`
--

INSERT INTO `tablename` (`username`, `budgetTableName`, `id`) VALUES
('sycer', 'FunnyTable', 7),
('sycer', 'NewTable', 8),
('sycer', 'testTable', 1);

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
(12, 'sycer', '$2y$10$aCwOgPmsTHQWnPiYTZfa3u7U78nDjES3tEgLKi8bKmUXZ6ys0Q596', '2022-05-19 22:33:41.698', NULL, 'nattila2001@gmail.com', 1, '', '0000-00-00 00:00:00', 'QpfunpffOrgwzyvzYbtfkqkuJvmkomwpRlvqybhoHztmiwfsGuxlzoxiRedu'),
(13, 'psycon', '$2y$10$WbMNWXd3EXwDHBoc8doz4emoD4dqyyzQX/5QCP0C7WAdi6A41ec/K', '2022-08-04 18:23:33.035', NULL, 'nattila2001@gmail.com', 1, '', '0000-00-00 00:00:00', '');

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
  ADD KEY `tableInfo_to_tableName` (`tableName`);

--
-- Indexes for table `tablename`
--
ALTER TABLE `tablename`
  ADD PRIMARY KEY (`budgetTableName`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tableinfo`
--
ALTER TABLE `tableinfo`
  ADD CONSTRAINT `tableInfo_to_tableName` FOREIGN KEY (`tableName`) REFERENCES `tablename` (`budgetTableName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
