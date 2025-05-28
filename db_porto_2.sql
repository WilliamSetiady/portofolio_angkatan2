-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 09:52 AM
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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `data_id` int(10) NOT NULL,
  `data_to` int(10) NOT NULL,
  `data_speed` int(10) NOT NULL,
  `data_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`data_id`, `data_to`, `data_speed`, `data_name`) VALUES
(1, 100, 5000, 'Cups of Coffee'),
(2, 3, 6000, 'Projects'),
(3, 13, 5000, 'Clients'),
(4, 10, 5000, 'Partners');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `education_name` varchar(50) NOT NULL,
  `education_desc` text NOT NULL,
  `education_def` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `education_name`, `education_desc`, `education_def`) VALUES
(7, 'Master Degree Graphic Design', '<p><span style=\"color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&nbsp;</span><span style=\"color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</span></p>', 'One'),
(8, 'Bachelor Degree Of Computer Science', '<p style=\"margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">Far far away, behind the word&nbsp;<strong style=\"font-weight: bold;\">mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><ul style=\"margin-bottom: 10px; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\"><li>Separated they live in Bookmarksgrove right</li><li>Separated they live in Bookmarksgrove right</li></ul>', 'Two'),
(9, 'Diploma in Information Technology', '<p><span style=\"color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">Far far away, behind the word&nbsp;</span><strong style=\"font-weight: bold; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">mountains</strong><span style=\"color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</span></p>', 'Three'),
(10, 'High School Secondary Education', '<p><span style=\"color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">Far far away, behind the word&nbsp;</span><strong style=\"font-weight: bold; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">mountains</strong><span style=\"color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 15px;\">, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</span></p>', 'Four');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `expertise_id` int(11) NOT NULL,
  `color_services` varchar(25) NOT NULL,
  `expertise_icon` varchar(50) NOT NULL,
  `expertise_name` varchar(25) NOT NULL,
  `expertise_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`expertise_id`, `color_services`, `expertise_icon`, `expertise_name`, `expertise_desc`) VALUES
(1, 'services color-1', 'icon-bulb', 'Innovative Ideas', 'My expertise lies in generating and developing innovative ideas that challenge conventional thinking and create meaningful impact. I specialize in identifying unmet needs, spotting emerging trends, and transforming abstract concepts into practical, forward-thinking solutions. Whether it’s streamlining processes, creating new products, or reimagining user experiences, I thrive at the intersection of creativity and strategy—bringing fresh perspectives that drive progress and inspire change.'),
(2, 'services color-2', 'icon-data', 'Software', 'My expertise in software lies in crafting innovative, scalable solutions that solve real-world problems through elegant code and forward-thinking design. I specialize in developing robust applications, optimizing system performance, and integrating cutting-edge technologies such as AI, cloud computing, and automation. With a strong foundation in both back-end architecture and user-centric front-end development, I bring a creative, problem-solving mindset to every project—transforming complex challenges into streamlined, impactful software solutions.'),
(5, 'services color-3', 'icon-phone3', 'Application', 'My expertise in application development centers on creating intuitive, high-performing apps that enhance user experience and deliver tangible value. From concept to deployment, I specialize in designing and building mobile and web applications that are both technically sound and visually engaging. With a strong grasp of modern frameworks, APIs, and UX/UI principles, I turn innovative ideas into practical, user-friendly solutions. Whether it\'s streamlining workflows, connecting communities, or introducing entirely new functionalities, I focus on building applications that not only work—but make a difference.'),
(6, 'services color-4', 'icon-layers2', 'Design', 'I specialize in design that blends creativity, functionality, and user experience to bring ideas to life in visually compelling ways. With a strong understanding of design principles, color theory, and modern aesthetics, I craft intuitive interfaces and impactful visuals that not only look good but communicate effectively. Whether it\'s branding, UI/UX, or digital graphics, my approach is centered on solving problems through thoughtful, user-focused design. I aim to create experiences that resonate, inspire, and elevate the overall value of a product or message.'),
(9, 'services color-5', 'icon-data', 'Software', '<p>I specialize in software development with a focus on building efficient, scalable, and innovative solutions that drive real-world impact. With a deep understanding of programming principles, system architecture, and modern development frameworks, I transform complex problems into clean, functional code. From back-end logic to front-end experiences, I craft applications that are not only robust and secure but also user-friendly and performance-optimized. My passion lies in continuous learning and pushing the boundaries of what software can do—turning ideas into powerful digital tools.</p>'),
(10, 'services color-6', 'icon-phone3', 'Application', '<p>I specialize in application development, focusing on creating seamless, high-performance apps that combine functionality, design, and user experience. With expertise across the full development lifecycle—from initial concept and architecture to deployment and maintenance—I build applications that are intuitive, scalable, and aligned with user needs. Whether developing for mobile, web, or cross-platform environments, I prioritize clean code, responsive design, and reliable performance. My goal is to turn innovative ideas into practical, user-centered applications that deliver real value and lasting impact.</p>');

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
  `color_services` varchar(50) NOT NULL,
  `skill_icon` varchar(100) NOT NULL,
  `skill_name` varchar(25) NOT NULL,
  `skill_point` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `color_services`, `skill_icon`, `skill_name`, `skill_point`) VALUES
(9, 'services color-1', 'icon-display2', 'Graphic Design', 55),
(10, 'services color-2', 'icon-world2', 'Web Design', 50),
(11, 'services color-3', 'icon-download', 'Software', 45),
(12, 'services color-5', 'icon-phone3', 'Application', 90);

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

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `work_name` varchar(50) NOT NULL,
  `work_year` varchar(25) NOT NULL,
  `work_desc` int(11) NOT NULL,
  `animate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`expertise_id`);

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
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT;

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
