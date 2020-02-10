-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 08:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onboarding`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_admin`
--

CREATE TABLE `chat_admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','jobs','quote','payment') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat_admin`
--

INSERT INTO `chat_admin` (`id`, `name`, `role`, `email`, `password`, `created_at`) VALUES
(1, 'nabeel', 'admin', 'peek@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-10-20 22:09:33'),
(2, 'a admin', 'jobs', 'a@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-12-02 13:18:59'),
(3, 'b admin', 'quote', 'b@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-12-02 13:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `num_id` int(100) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'free(0), book(1)',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`num_id`, `number`, `status`, `created_at`, `updated_at`) VALUES
(5, '+65-51-4898947', '0', '2020-02-07 10:14:05', '2020-02-07 10:14:05'),
(6, '+65-51-4898948', '0', '2020-02-07 10:14:14', '2020-02-07 10:14:14'),
(7, '+65-51-4898949', '0', '2020-02-07 10:14:21', '2020-02-07 10:14:21'),
(8, '+65-51-4898950', '0', '2020-02-07 10:14:29', '2020-02-07 10:14:29'),
(9, '+65-51-4898951', '0', '2020-02-07 10:14:38', '2020-02-07 10:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `land_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `virtualassistant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incomming` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freemints` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `slug`, `stripe_plan`, `cost`, `land_number`, `extension`, `virtualassistant`, `incomming`, `freemints`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nautilus Free', 'free', 'plan_GgXizDkQjc7FqK', 0.00, '1 landline number', '1 extensions', '1 interactive virtual assistant', 'Unlimited incoming calls', 'FREE 20 outgoing mins', 'ssa', '2020-02-06 00:08:05', NULL),
(2, 'Nautilus Basic', 'basic', 'plan_GhCpCcEi5tWXNS', 90.00, '1 landline number', '2 extensions', '2 interactive virtual assistant', 'Unlimited incoming calls', 'FREE 50 outgoing mins', 'ssa', '2020-02-06 00:08:05', NULL),
(3, 'Nautilus Standard', 'standard', 'plan_GhCbe9SWENOglv', 150.00, '1 landline number', '4 extensions', '4 interactive virtual assistant', 'Unlimited incoming calls', 'FREE 150 outgoing mins', 'FREE 150 outgoing mins', '2020-02-07 00:00:00', NULL),
(4, 'Nautilus Enterprise', 'enterprise', 'plan_GhCc1BzgMYkOMr', 300.00, 'Everything we offer!', 'More than 50 extensions', 'Customisable virtual assistant', 'Customisable free minutes', 'IDD calling available', 'FREE 150 outgoing mins', '2020-02-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `stripe_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_user_id`, `name`, `stripe_id`, `stripe_plan`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(4, 10, 'main', 'sub_GhCkS1NZUuDrVk', 'plan_GgXizDkQjc7FqK', 1, NULL, NULL, '2020-02-08 03:06:57', '2020-02-08 03:06:57'),
(5, 10, 'main', 'sub_GhCquZiMauUbNi', 'plan_GhCpCcEi5tWXNS', 1, NULL, NULL, '2020-02-08 03:12:30', '2020-02-08 03:12:30'),
(6, 12, 'main', 'sub_GhGHEMXL3tPjeL', 'plan_GgXizDkQjc7FqK', 1, NULL, NULL, '2020-02-08 06:45:34', '2020-02-08 06:45:34'),
(7, 11, 'main', 'sub_GhGKSsNCKwT5Yu', 'plan_GgXizDkQjc7FqK', 1, NULL, NULL, '2020-02-08 06:48:51', '2020-02-08 06:48:51'),
(8, 4, 'main', 'sub_GhvhwEgn2PYs1D', 'plan_GgXizDkQjc7FqK', 1, NULL, NULL, '2020-02-10 01:34:09', '2020-02-10 01:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choice_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('inactive','active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `verify_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `sur_name`, `company_name`, `email`, `password`, `mobile`, `local`, `location`, `choice_number`, `status`, `verify_code`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`, `created_at`, `remember_token`, `updated_at`) VALUES
(1, 'Nabeel', 'Ahmed', NULL, 'peek@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '03054949010', 'Singapore', 'Singapore', '+65-51-4898947', 'inactive', '524146', NULL, NULL, NULL, NULL, '2020-02-05 14:30:40', NULL, '2020-02-05 14:30:40'),
(2, 'Nabeel', 'Ahmed', '', 'peek212@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '03054949010', 'Singapore', 'Singapore', '+65-51-4898947', 'inactive', '979126', NULL, NULL, NULL, NULL, '2020-02-05 14:59:19', NULL, '2020-02-05 14:59:19'),
(3, 'Nabeel', 'Ahmed', '', 'nabeel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '6581234567', 'Singapore', 'Singapore', '+65-51-4898947', 'inactive', '418278', NULL, NULL, NULL, NULL, '2020-02-06 07:20:26', NULL, '2020-02-06 07:20:26'),
(4, 'Nabeel', 'Ahmed', '', 'nabeelirbab@gmail.com', '$2y$10$MzuSJ50ZwcJjmnWH7ZrZw.obnR5ZyPq4lNLtwZiSziHIGSDFmdbqy', '923054949010', 'Singapore', 'Singapore', '+65-51-4898947', 'active', '463782', 'cus_GgsxMYkdRFelku', 'Visa', '4242', NULL, '2020-02-06 07:21:48', '9h8XuBySulDRmFjSE3pVC9y1mDd6bE9i3jjB5I0OLguVdjb0h47ywFupBaou', '2020-02-10 06:33:38'),
(5, 'zee', 'Ahmed', '', 'zee@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '923487991015', 'Singapore', 'Singapore', '+65-51-4898947', 'active', '283422', NULL, NULL, NULL, NULL, '2020-02-06 07:42:37', NULL, '2020-02-06 07:43:02'),
(7, 'Nabeel', 'Ahmed', '의 유튜브.', '123rbab@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+923328624840', 'Singapore', 'Singapore', '+65-51-4898947', 'active', '323825', NULL, NULL, NULL, NULL, '2020-02-06 09:15:27', NULL, '2020-02-06 09:19:22'),
(8, 'Nabeel', 'Ahmed', 'Linkshare Co.Ltd', 'na@gmail.com', '$2y$10$MzuSJ50ZwcJjmnWH7ZrZw.obnR5ZyPq4lNLtwZiSziHIGSDFmdbqy', '+923054949010', 'Singapore', '', '+65-51-4898947', 'active', '268232', 'cus_Ggselne6U3GUWO', NULL, NULL, NULL, '2020-02-07 10:48:09', NULL, '2020-02-07 11:20:36'),
(9, 'Nabeel', 'Ahmed', '', 'nabeelirbab12313@gmail.com', '$2y$10$kAorCR76IjwSS4/cZbJtauUVf5YSv.pkgHqQxDIcU8lJYPYMvfF7W', '+923088342189', 'Singapore', '', '+65-51-4898948', 'inactive', '977524', NULL, NULL, NULL, NULL, '2020-02-07 15:28:10', NULL, '2020-02-07 15:28:10'),
(10, 'Nabeel', 'Ahmed', 'Linkshare', 'nabeel12333@gmail.com', '$2y$10$tZzfAOQEdXFOzkSnf1xHj.uCva2Voe/UbAjH6TRSr149MbQc1jgVW', '+923088442189', 'Singapore', '', '+65-51-4898950', 'active', '251828', 'cus_Ggwq2YaNrVCpww', 'Visa', '4242', NULL, '2020-02-07 15:36:11', 'soCsr13OFBDjJEl4oZRz0qoN9Npnxsk7p4HCbVXj7VoHhC8paO5KlF5URjOp', '2020-02-08 08:50:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_admin`
--
ALTER TABLE `chat_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`num_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plans_slug_unique` (`slug`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_admin`
--
ALTER TABLE `chat_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `num_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
