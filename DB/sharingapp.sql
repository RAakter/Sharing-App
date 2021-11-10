-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 06:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile_no`, `address`, `email_verified_at`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Rezowana Akter', 'admin.116@gmail.com', '01781474358', NULL, NULL, '$2y$10$7Ui2MHZOH1J0OXRXyK66r.WLTD.7EA57M4TIrU9/VepDOELO4qfdW', 1, '2020-12-28 10:56:37', '2020-12-28 10:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `area_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1 = active , 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `division_id`, `district_id`, `area_title`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Gulshan-2', 1, '2021-01-09 11:16:47', '2021-01-09 11:20:12'),
(2, 2, 1, 'Shyamoli', 1, '2021-01-09 11:17:13', '2021-01-09 11:17:13'),
(3, 2, 1, 'Mirpur', 1, '2021-01-09 11:17:25', '2021-01-09 11:17:25'),
(4, 2, 1, 'Dhanmondi', 1, '2021-01-09 11:17:36', '2021-01-09 11:17:36'),
(5, 2, 1, 'Mohammadpur', 1, '2021-01-09 11:17:47', '2021-01-09 11:17:47'),
(6, 4, 3, 'Jessore', 1, '2021-01-09 11:18:10', '2021-01-09 11:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_status` tinyint(4) DEFAULT NULL COMMENT '1 = active , 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_title`, `district_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dhaka District', 1, '2021-01-09 11:11:53', '2021-01-09 11:12:15'),
(2, 2, 'Faridpur District', 1, '2021-01-09 11:12:37', '2021-01-09 11:12:37'),
(3, 4, 'Jessore District', 1, '2021-01-09 11:12:46', '2021-01-09 11:12:46'),
(4, 4, 'Chuadanga District', 1, '2021-01-09 11:12:58', '2021-01-09 11:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_status` tinyint(4) DEFAULT NULL COMMENT '1 = active , 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_title`, `division_status`, `created_at`, `updated_at`) VALUES
(2, 'Dhaka', 1, '2021-01-09 11:04:01', '2021-01-09 11:04:01'),
(3, 'Chittagong', 1, '2021-01-09 11:05:44', '2021-01-09 11:05:44'),
(4, 'Khulna', 1, '2021-01-09 11:07:14', '2021-01-09 11:07:14'),
(5, 'Rajshahi', 1, '2021-01-09 11:07:20', '2021-01-09 11:07:20'),
(6, 'Sylhet', 1, '2021-01-09 11:07:25', '2021-01-09 11:07:25'),
(7, 'Rangpur', 1, '2021-01-09 11:07:31', '2021-01-09 11:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_28_162733_create_admins_table', 1),
(8, '2020_12_28_164221_create_promotional_banners_table', 2),
(9, '2020_12_28_164638_create_product_deals_table', 2),
(10, '2020_12_28_164704_create_wastage_products_table', 2),
(11, '2021_01_09_164006_create_divisions_table', 3),
(12, '2021_01_09_164020_create_districts_table', 3),
(13, '2021_01_09_164031_create_areas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_deals`
--

CREATE TABLE `product_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `prev_price` bigint(20) DEFAULT NULL,
  `off_price` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_deals`
--

INSERT INTO `product_deals` (`id`, `image`, `title`, `description`, `price`, `prev_price`, `off_price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'J5QqyVtifYw5fqR1MOO7RG4JYVIMzQbFum8UlLbs.jpg', 'Hot deal', 'Hot deal Hot deal Hot deal Hot deal Hot deal Hot deal Hot deal Hot deal Hot deal Hot deal', 450, 520, -15, 1, '2020-12-30 10:45:58', '2020-12-30 10:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_banners`
--

CREATE TABLE `promotional_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotional_banners`
--

INSERT INTO `promotional_banners` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'JISgFKsSnFTW6KlaTWWzkEl1fn88tcfFVTYn1fWc.jpg', 'test', 'testing now', 1, '2020-12-29 08:58:47', '2020-12-29 08:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` bigint(20) DEFAULT NULL,
  `district_id` bigint(20) DEFAULT NULL,
  `area_id` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `image`, `division_id`, `district_id`, `area_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Rezowana', NULL, '01781474358', NULL, 2, 1, 1, NULL, '$2y$10$2emYdpJNsFdDIUTJ2Zm8q.kumZyJWTaK7HoxwkyozlTLBmMQLmDsO', NULL, '2021-01-09 11:55:52', '2021-01-09 11:55:52'),
(4, 'Eliyana', 'eliyana@gmail.com', '01741474147', '165ff9ef42b7584_1.jpg', 2, 1, 1, NULL, '$2y$10$4QYbaYJcpTlxEDajcoZ.EeSNoOJndpncJr9OvksyGRSdHwbIapr26', NULL, '2021-01-09 12:00:34', '2021-01-09 12:00:34'),
(6, 'Eliyana1', 'eliyana1@gmail.com', '01741474148', '165ff9f1524b4df_1.jpg', 2, 1, 1, NULL, '$2y$10$1zwppfEPArSn.p2ZCVTVweJuPK4dlo6ieJIHbjr79VXAC0lFhiXkK', NULL, '2021-01-09 12:09:22', '2021-01-09 12:09:22'),
(7, 'Eliyana2', 'eliyana2@gmail.com', '01741474149', '165ff9f1d9d6c36_1.jpg', 2, 1, 1, NULL, '$2y$10$.eG6kakCpe4wwKUXLkdLIeBzo0046.r7xgULlPeRCs1z8AVxK234m', NULL, '2021-01-09 12:11:38', '2021-01-09 12:11:38'),
(8, 'Eliyana3', 'eliyana3@gmail.com', '01741474145', '165ff9f2190c53c_1.jpg', 2, 1, 1, NULL, '$2y$10$RMML1v3jmTiDQen.5sjqBexvcxMAXmtW3Mg49RL6krBrnMb2lET5q', NULL, '2021-01-09 12:12:41', '2021-01-09 12:12:41'),
(9, 'Eliyana4', 'eliyana6@gmail.com', '01741474146', '165ff9f29026393_1.jpg', 2, 1, 1, NULL, '$2y$10$8PwfElF19rltIHDcQetKruBi.PBDQUXFTHCLo1X9t1t3QHvqw51Fq', NULL, '2021-01-09 12:14:40', '2021-01-09 12:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `wastage_products`
--

CREATE TABLE `wastage_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wastage_products`
--

INSERT INTO `wastage_products` (`id`, `image`, `title`, `description`, `measurement_unit`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'idO3fYAYWMaL0w6I7ywGTaWONzeWpA4KvUlvTTBq.jpg', 'Paper', 'Old Paper for sell now', '2 kg', 40, 1, '2020-12-30 11:01:02', '2020-12-30 11:02:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_division_id_foreign` (`division_id`),
  ADD KEY `areas_district_id_foreign` (`district_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `product_deals`
--
ALTER TABLE `product_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_banners`
--
ALTER TABLE `promotional_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wastage_products`
--
ALTER TABLE `wastage_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_deals`
--
ALTER TABLE `product_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promotional_banners`
--
ALTER TABLE `promotional_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wastage_products`
--
ALTER TABLE `wastage_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `areas_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
