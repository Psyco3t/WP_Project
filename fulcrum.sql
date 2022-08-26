-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 01:01 AM
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
-- Database: `fulcrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `jointable`
--

CREATE TABLE `jointable` (
  `UID` int(11) NOT NULL,
  `TableID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jointable`
--

INSERT INTO `jointable` (`UID`, `TableID`) VALUES
(13, 13),
(13, 14),
(13, 15),
(13, 16),
(13, 17),
(13, 18),
(15, 19),
(15, 20),
(15, 21),
(15, 22),
(15, 23),
(15, 24);

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
(25, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-04 18:23:57.088', 'psycon'),
(26, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-04 18:38:11.810', 'sycer'),
(27, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-04 18:49:27.309', 'sycer'),
(28, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-04 18:50:28.972', 'sycer'),
(29, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 12:40:09.260', 'sycer'),
(30, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 12:52:28.659', 'sycer'),
(31, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 13:45:45.010', 'sycer'),
(32, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 13:46:12.657', 'sycer'),
(33, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 13:50:24.036', 'sycer'),
(34, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 13:51:53.110', 'psycon'),
(35, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 13:54:49.296', 'sycer'),
(36, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 14:03:36.290', 'sycer'),
(37, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-07 17:00:42.642', 'sycer'),
(38, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-14 13:21:25.591', 'sycer'),
(39, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-14 15:23:17.694', 'sycer'),
(40, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-14 15:24:47.809', 'sycer'),
(41, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-14 16:48:44.896', 'sycer'),
(42, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-22 15:28:43.914', 'psycon'),
(43, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-22 16:17:58.859', 'psycon'),
(44, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-24 00:27:42.059', 'psycon'),
(45, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:103.0', '127.0.0.1', '2022-08-24 00:51:48.488', 'sycer'),
(46, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 13:14:22.230', 'psycon'),
(47, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 13:27:03.094', 'sycer'),
(48, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 14:40:20.965', 'psycon'),
(49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 15:09:46.584', 'sycer'),
(50, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 15:10:24.142', 'psycon'),
(51, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 15:32:10.514', 'sycer'),
(52, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 16:06:16.656', 'psycon'),
(53, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 16:28:58.407', 'sycer'),
(54, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-24 16:29:31.324', 'psycon'),
(55, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-26 00:24:37.618', 'psycon'),
(56, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-26 00:31:45.060', 'sycer'),
(57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:104.0', '127.0.0.1', '2022-08-26 00:32:13.803', 'sycer');

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
  `tableID` int(11) NOT NULL,
  `Total` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tableinfo`
--

INSERT INTO `tableinfo` (`tableName`, `budget`, `monthlyExpenses`, `lastMonthDate`, `income`, `otherIncome`, `budgetDescript`, `currentDate`, `tableID`, `Total`, `ID`) VALUES
('NewTable', 500, 2700, NULL, 11200, 0, 'wednesday', '2022-08-24', 13, 300, 1),
('NewTable', 100, 2700, NULL, 11200, 0, 'thursday', '2022-08-25', 14, 400, 2),
('NewTable', 600, 2700, NULL, 11200, 0, 'friday', '2022-08-26', 15, 100, 3),
('NewTable', 700, 2700, NULL, 11200, 0, 'saturday', '2022-08-27', 16, 500, 4),
('NewTable', 800, 2700, NULL, 11200, 0, 'sunday', '2022-08-28', 17, 600, 5),
('NewTable', 900, 2700, NULL, 11200, 0, 'monday', '2022-08-29', 18, 800, 6),
('FunnyTable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, 1),
('FunnyTable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, 2),
('FunnyTable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, 3),
('FunnyTable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, 4),
('FunnyTable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, 5),
('FunnyTable', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, 6);

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
('sycer', 'FunnyTable', 15),
('psycon', 'NewTable', 13);

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
(12, 'sycer', '$2y$10$aCwOgPmsTHQWnPiYTZfa3u7U78nDjES3tEgLKi8bKmUXZ6ys0Q596', '2022-05-19 22:33:41.698', 1, 'nattila2001@gmail.com', 1, '', '0000-00-00 00:00:00', 'CnadumnwCifartovIygpbvdyPwbbeiwsOfkoxxnkEeryieyiHdkohwqcIubm'),
(15, 'psycon', '$2y$10$jKnxIG0VFr6nJad.W.Ulau.zAggiALvsqlNTL/SZNPjsejkTbAiS6', '2022-08-07 13:51:16.363', NULL, 'assblast@gmail.com', 1, '', '0000-00-00 00:00:00', 'ZqmyapmIfiwrxkEwrcfmuKtxctxzKftadnmLlurxtmQqwtgbtJoznmjlNcxz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jointable`
--
ALTER TABLE `jointable`
  ADD KEY `UID` (`UID`),
  ADD KEY `TableID` (`TableID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableinfo`
--
ALTER TABLE `tableinfo`
  ADD PRIMARY KEY (`tableID`),
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tableinfo`
--
ALTER TABLE `tableinfo`
  MODIFY `tableID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jointable`
--
ALTER TABLE `jointable`
  ADD CONSTRAINT `jointable_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `tablename` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jointable_ibfk_2` FOREIGN KEY (`TableID`) REFERENCES `tableinfo` (`tableID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tableinfo`
--
ALTER TABLE `tableinfo`
  ADD CONSTRAINT `tableInfo_to_tableName` FOREIGN KEY (`tableName`) REFERENCES `tablename` (`budgetTableName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
