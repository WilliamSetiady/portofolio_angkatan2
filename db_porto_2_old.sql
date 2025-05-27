-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 10:23 AM
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
-- Database: `db_porto_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_name` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(100) NOT NULL,
  `contact_message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `created_at`, `update_at`) VALUES
(5, 'William', 'williamsetiady575@gmail.com', 'Hello', 'qwertyuiopasdfghjklzxcvbnm', '2025-05-27 00:51:29', NULL),
(6, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 00:52:04', NULL),
(7, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 05:51:51', NULL),
(8, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 05:52:01', NULL),
(9, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:27:53', NULL),
(10, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:28:55', NULL),
(11, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:30:01', NULL),
(12, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:30:52', NULL),
(13, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:30:55', NULL),
(14, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:31:51', NULL),
(15, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:33:35', NULL),
(16, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:42:02', NULL),
(17, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:42:07', NULL),
(18, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:42:12', NULL),
(19, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:42:20', NULL),
(20, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:52:13', NULL),
(21, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:52:34', NULL),
(22, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:53:12', NULL),
(23, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:53:25', NULL),
(24, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:54:17', NULL),
(25, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 07:54:46', NULL),
(26, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 08:20:40', NULL),
(27, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 08:21:39', NULL),
(28, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 08:21:51', NULL),
(29, 'ucup stuerd', 'ad@gmail.com', 'hiii', 'dasdsdasqwedeadsad', '2025-05-27 08:22:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `role_id` int(11) NOT NULL,
  `role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL,
  `profile_name` varchar(45) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `profile_name`, `about`, `photo`) VALUES
(75, 'Perkenalan', '<p><b>Hello, </b>nama saya William.</p>', '6833ed0355dc1_jakarta raya.png');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_color` varchar(50) NOT NULL,
  `skill_icon` varchar(100) NOT NULL,
  `skill_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_color`, `skill_icon`, `skill_name`) VALUES
(1, '', '', 'HTM'),
(2, '', '', 'CSS'),
(3, '', '', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_profile` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_role`, `id_profile`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(20, 1, NULL, 'Will', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2025-05-24 01:18:56', NULL),
(21, 2, NULL, 'Daniel Oktafianus', 'daniel1@gmail.com', '3da541559918a808c2402bba5012f6c60b27661c', '2025-05-24 02:25:00', '2025-05-27 01:47:14'),
(22, 2, NULL, 'ucup stuerd', 'ucup123@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2025-05-24 02:25:44', '2025-05-27 01:47:16'),
(33, 1, NULL, 'daaaads', 'adiprabowok@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2025-05-27 03:04:28', NULL),
(34, 1, NULL, 'd', 'adiprabowok@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2025-05-27 03:04:38', NULL),
(35, 1, NULL, 'dsdasdsd', 'adiprabowok@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2025-05-27 03:06:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role_to_role_id` (`id_role`),
  ADD KEY `profile_id_to_id_profile` (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `id_role_to_role_id` FOREIGN KEY (`id_role`) REFERENCES `levels` (`role_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profile_id_to_id_profile` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`profile_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
