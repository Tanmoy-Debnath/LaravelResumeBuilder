-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 07:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_resumebuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(16, 'Tanmoy', 'Debnath', 'tanmoy.pappu1@gmail.com', '$2y$10$0umKc/q.OEnug8z/c3Q3De3KPHr0pE2NVaEhO.22vTbblejUPbauG', '01685726839', 'Dhaka', '2018-08-03 08:02:25', '2018-08-03 08:02:25'),
(17, 'Tanmoy', 'Debnath', 'tanmoy.pappu1@gmail.com', '$2y$10$uMBif.xOU2LjUhypMWIZbepZstdkq/9YvPsa4B1a7lNqCkN1il7le', '01685726839', 'Mirpur', '2018-08-03 08:04:42', '2018-08-03 08:04:42'),
(18, 'Tanmoy', 'Debnath', 'tanmoy.pappu1@gmail.com', '$2y$10$RMQuX4pQ40jX6diqAzF4g.v/mC3Xvlf.Zyr0gTscKqvL0ViPJPdm2', '01685726839', 'Mirpur', '2018-08-03 08:06:56', '2018-08-03 08:06:56'),
(19, 'Tanmoy', 'Debnath', 'tanmoy.pappu1@gmail.com', '$2y$10$/HW.z33sa6DMOwFdTgMGtuVKFxpVXH0zgWq8xhn2WA4G7uIrmp9RS', '01685726839', 'Mirpur', '2018-08-03 08:07:28', '2018-08-03 08:07:28'),
(20, 'Tanmoy', 'Debnath', 'tanmoy.pappu1@gmail.com', '$2y$10$Kvhc4x6W4df3PeiY/V/NJOLU4Y/GFo4eeN2rVUfQXE6bgdaCF7vNy', '01685726839', 'Mirpur', '2018-08-03 08:09:16', '2018-08-03 08:09:16'),
(21, 'Tanmoy', 'Debnath', 'tanmoy.bubt@gmail.com', '$2y$10$RHYBil8SUZq1W0BICNdrteP7RrFJmzT7DoKrFtTFoRbnCSROGMyGW', '01685726839', 'Mirpur', '2018-08-03 08:10:48', '2018-08-03 08:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_07_13_083756_create_clients_table', 2),
(5, '2018_07_17_173640_create_resumes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `looking_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_achivement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_achivement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_achivement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `full_name`, `present_address`, `permanent_address`, `phone_number`, `email`, `client_image`, `looking_for`, `available_for`, `expected_salary`, `preferred_job`, `preferred_district`, `career_objective`, `career_summary`, `father_name`, `mother_name`, `nationality`, `date_of_birth`, `gender`, `maritial_status`, `national_id`, `religion`, `g_exam`, `g_major`, `g_institute`, `g_result`, `g_year`, `g_duration`, `g_achivement`, `h_exam`, `h_major`, `h_institute`, `h_result`, `h_year`, `h_duration`, `h_achivement`, `s_exam`, `s_major`, `s_institute`, `s_result`, `s_year`, `s_duration`, `s_achivement`, `created_at`, `updated_at`) VALUES
(21, 'Ashiqul Islam', 'House # 43, (6th Floor, West), Road # 25 Rupnagar R/A Mirpur Mirpur, Dhaka-1216', 'Village/Road: Mayshair, Thana:-Kaliganj-1720, Post:-Baghoon, District:Gazipur', '01685726839', 'ashiqulislam@gmail.com', 'client-image/Ashiqul Islam.jpg', 'Mid Level Job', 'Full Time', '15000', 'Bank/Non-Bank Fin. Institution, Engineer/Architect, IT/Telecommunication', 'Gazipur', 'Seeking a challenging and rewarding opportunity in IT profession and also build a long-term career as a software developer with opportunities for career growth and to keep up with the cutting edge of the computer technologies.', 'Seeking a challenging and rewarding opportunity in IT profession and also build a long-term career as a software developer with opportunities for career growth and to keep up with the cutting edge of the computer technologies.', 'Dharani Debnath', 'Gayotri Debnath', 'Bangladeshi', '15-02-1994', 'Male', 'Unmaried', '19943313494000124', 'Hindu', 'B.Sc in CSE', 'Computer Science & Engineering', 'Bangladesh University of Business and Technology (BUBT)', '3.07', '2018', '2013-2018', 'I have completed a \"Jewelry POS System \" project using PHP as my final project', 'HSC', 'Science', 'Dhaka State College', '4.30', '2012', '2010-2012', 'First Divison', 'SSC', 'Science', 'Baghoon High School', '4.56', '2010', '2008-2010', 'First Divison', '2018-07-20 00:42:57', '2018-07-20 00:42:57'),
(23, 'Tanmoy Debnath', 'House # 43, (6th Floor, West), Road # 25 Rupnagar R/A Mirpur Mirpur, Dhaka-1216', 'Village/Road: Mayshair, Thana:-Kaliganj-1720, Post:-Baghoon, District:Gazipur', '01685726839', 'tanmoy.bubt@gmail.com', 'client-image/Tanmoy Debnath.jpg', 'Mid Level Job', 'Full Time', '15000', 'Bank/Non-Bank Fin. Institution, Engineer/Architect, IT/Telecommunication', 'Gazipur', 'Please give some suggestion which is better for me in interview Expo group at executive Marketing and ykk Bangladesh pte ltd officer imports and exports at the same time.where I attend please give a idea..', 'Please give some suggestion which is better for me in interview Expo group at executive Marketing and ykk Bangladesh pte ltd officer imports and exports at the same time.where I attend please give a idea..', 'Dharani Debnath', 'Gayotri Debnath', 'Bangladeshi', '15-02-1994', 'Male', 'Unmaried', '19943313494000124', 'Hindu', 'B.Sc In CSE', 'Computer Science & Engineering', 'Bangladesh University of Business and Technology (BUBT)', '3.07', '2018', '2013-2018', 'I have completed a \"Jewelry POS System \" project using PHP as my final project .', 'HSC', 'Science', 'Dhaka State College', '4.30', '2012', '2010-2012', 'First Divison', 'SSC', 'Science', 'Baghoon High School', '4.56', '2010', '2008-2010', 'First Divison', '2018-08-03 08:15:41', '2018-08-03 08:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Masum Talukder', 'masum.bubt@gmail.com', '$2y$10$iyGkvBkeqUNRyICoh7YBYuZIq8BFjTV54SohTN7pB4RO7Ua7kwKHm', NULL, '2018-07-21 13:11:14', '2018-07-21 13:11:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
