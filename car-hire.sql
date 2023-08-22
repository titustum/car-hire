-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 08:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car-hire`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hire_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booked_to` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  `diff` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_id`, `car_id`, `fullname`, `phone`, `car_name`, `car_price`, `hire_duration`, `total_price`, `status`, `status_state`, `booked_to`, `updated_at`, `created_at`, `diff`) VALUES
(1, 'SIMP96890', '', 'sam simpoe', 9, 'landcruiser L-300', '2000', '9', '18000', 'Inactive', 'Inactive', NULL, '2023-06-16', '14:39:41', ' day(s)'),
(2, 'SIMP37222', '', 'Reecca', 80, 'landcruiser L-300', '2000', '3', '6000', 'Inactive', 'Inactive', NULL, '2023-06-16', '14:51:39', ' day(s)'),
(3, 'SIMP84348', '', 'Dan Ndong', 978, 'Subaru Wrx STI', '2000', '8', '16000', 'Inactive', 'Inactive', NULL, '2023-06-20', '13:51:52', ' day(s)'),
(4, 'SIMP15404', 'TOY123', 'john', 786, 'landcruiser L-300', '2000', '2', '4000', 'Inactive', 'Inactive', NULL, '2023-06-29', '10:09:54', ' day(s)'),
(5, 'SIMP38359', 'SUB3026', 'tito', 676, 'Subaru Wrx STI', '2000', '2', '4000', 'Inactive', 'Inactive', NULL, '2023-06-29', '10:28:50', ' day(s)'),
(6, 'SIMP31714', 'TOY123', 'yu', 4533, 'landcruiser L-300', '2000', '4', '8000', 'Inactive', 'Inactive', '2023-07-03', '2023-06-29', '10:50:49', '-45 day(s)'),
(7, 'SIMP54189', 'SUB3026', 'dan', 1234, 'Subaru Wrx STI', '2000', '6', '12000', 'Inactive', 'Inactive', '2023-07-09', '2023-07-03', '10:09:33', '-39 day(s)'),
(8, 'SIMP98687', 'Aud22513', 'Dan Ndong', 8796, 'Audi Q8', '3500', '7', '24500', 'Inactive', 'Inactive', '2023-07-12', '2023-07-05', '17:36:44', '-36 day(s)'),
(9, 'SIMP38460', 'Aud26644', 'Dan  Tyson', 908654, 'Audi Q3', '3000', '6', '18000', 'Inactive', 'Inactive', '2023-07-17', '2023-07-11', '10:22:18', '-31 day(s)'),
(10, 'SIMP54275', 'Aud22513', 'Murui Muriu', 700000000, 'Audi Q8', '3500', '5', '17500', 'Inactive', 'Inactive', '2023-07-17', '2023-07-12', '17:16:02', '-31 day(s)'),
(11, 'SIMP44823', 'Aud22513', 'Mark Too', 123455697, 'Audi Q8', '3500', '10', '35000', 'Inactive', 'Inactive', '2023-07-27', '2023-07-17', '12:24:08', '-21 day(s)'),
(12, 'SIMP18449', 'TOY123', 'John', 700000, 'landcruiser L-300', '2000', '9', '18000', 'Inactive', 'Inactive', '2023-07-26', '2023-07-17', '15:30:21', '-22 day(s)'),
(13, 'SIMP83441', 'TOY123', 'Dan  Tyson', 9706, 'landcruiser L-300', '2000', '2', '4000', 'Inactive', 'Inactive', '2023-07-19', '2023-07-17', '15:41:23', '-29 day(s)'),
(14, 'SIMP64388', 'SUB3026', 'Mark Kibe', 123456780000, 'Subaru Wrx STI', '1500', '7', '10500', 'Inactive', 'Inactive', '2023-07-24', '2023-07-17', '16:09:40', '-24 day(s)'),
(15, 'SIMP77768', 'TOY123', 'Dan Ndong', 46586, 'landcruiser L-300', '2000', '6', '12000', 'Inactive', 'Inactive', '2023-07-23', '2023-07-17', '17:00:00', '-25 day(s)'),
(16, 'SIMP24664', 'Toy93300', 'Dan Ndong', 969, 'Toyota foturner', '5000', '9', '45000', 'Inactive', 'Inactive', '2023-07-26', '2023-07-17', '17:05:01', '-22 day(s)'),
(17, 'SIMP41287', 'Aud22513', 'jay', 67898988, 'Audi Q8', '3500', '8', '28000', 'Inactive', 'Inactive', '2023-08-02', '2023-07-25', '11:36:54', '-15 day(s)'),
(18, 'SIMP60598', 'SUB3026', 'jay', 67444, 'Subaru Wrx STI', '1500', '2', '3000', 'Inactive', 'Inactive', '2023-07-27', '2023-07-25', '12:30:21', '-21 day(s)'),
(19, 'SIMP66604', 'Aud26644', 'jay', 6784784335, 'Audi Q3', '3000', '4', '12000', 'Inactive', 'Inactive', '2023-07-29', '2023-07-25', '12:38:30', '-19 day(s)');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(20) NOT NULL,
  `car_id` varchar(255) DEFAULT NULL,
  `car_brand` varchar(50) DEFAULT NULL,
  `car_type` varchar(50) DEFAULT NULL,
  `car_name` varchar(50) DEFAULT NULL,
  `car_image` varchar(255) NOT NULL,
  `car_status` varchar(20) NOT NULL,
  `car_price` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_id`, `car_brand`, `car_type`, `car_name`, `car_image`, `car_status`, `car_price`, `created_at`, `updated_at`) VALUES
(1, 'TOY123', 'toyota', '4X4', 'landcruiser L-300', 'cruiser.jpg\r\n', 'Available', 2000, '2023-07-04 14:42:58', '2023-07-04 14:42:58'),
(2, 'SUB3026', 'Subaru', 'saloon', 'Subaru Wrx STI', '', 'Available', 1500, '2023-07-04 14:42:58', '2023-07-04 14:42:58'),
(3, 'Aud26644', 'Audi', 'Saloon', 'Audi Q3', '202307041445audi.jpg', 'Available', 3000, '2023-07-04 14:45:08', '2023-07-04 14:45:08'),
(4, 'Aud22513', 'Audi', 'Saloon', 'Audi Q8', '202307041450car.jpg', 'Available', 3500, '2023-07-04 14:50:51', '2023-07-04 14:50:51'),
(5, 'Toy93300', 'Toyota', '4X4', 'Toyota foturner', '202307171403dfcaf0fa3fc3ddde940ea4f9f1742be3.jpg', 'Available', 5000, '2023-07-17 14:03:59', '2023-07-17 14:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `booking_id`, `fullname`, `phone`, `email`, `location`, `days`, `created_at`, `updated_at`) VALUES
(1, 'SIMP72001', 'Dan Ndong', 726585782, 'danndong080@gmail.com', 'Eldoret', '2day(s)', '2023-06-16 07:01:07', '2023-06-16 07:01:07'),
(2, 'SIMP78463', 'Mark Too', 1234567, 'v@v.com', 'Narok', '4day(s)', '2023-06-16 07:03:06', '2023-06-16 07:03:06'),
(3, 'SIMP33826', 'Mark Kibe', 12345678, 'n@v.com', 'Narok', '4day(s)', '2023-06-16 07:07:49', '2023-06-16 07:07:49'),
(4, 'SIMP75312', 'Mark Too', 711111111, 'mit@gmail.com', 'Nairobi', '1day(s)', '2023-06-16 07:11:56', '2023-06-16 07:11:56'),
(5, 'SIMP84504', 'Mark Too', 12345678888, 'va@v.com', 'Mombasa', '5day(s)', '2023-06-16 07:20:38', '2023-06-16 07:20:38'),
(6, 'SIMP25084', 'John', 705003927, 'a@gmail.com', 'Mombasa', '3day(s)', '2023-06-16 07:34:37', '2023-06-16 07:34:37'),
(7, 'SIMP20020', 'Dan Ndong', 980, 'danndong00@gmail.com', 'Eldoret', '2day(s)', '2023-06-16 07:37:01', '2023-06-16 07:37:01'),
(8, 'SIMP13933', 'Daisy Cherono', 909090909, 'd@gmail.com', 'Eldoret', '2day(s)', '2023-06-16 08:37:55', '2023-06-16 08:37:55'),
(9, 'SIMP96890', 'sam simpoe', 9, 's@gmail.com', 'Nairobi', '9day(s)', '2023-06-16 08:39:41', '2023-06-16 08:39:41'),
(10, 'SIMP37222', 'Reecca', 80, 're@gmail.com', 'Baringo', '3day(s)', '2023-06-16 08:51:39', '2023-06-16 08:51:39'),
(11, 'SIMP84348', 'Dan Ndong', 978, 'danndong0@gmail.com', 'Nairobi', '8day(s)', '2023-06-20 07:51:51', '2023-06-20 07:51:51'),
(12, 'SIMP15404', 'john', 786, 'j@gmail.com', 'Baringo', '2day(s)', '2023-06-29 07:09:54', '2023-06-29 07:09:54'),
(13, 'SIMP38359', 'tito', 676, 't@gmail.com', 'Baringo', '2day(s)', '2023-06-29 07:28:50', '2023-06-29 07:28:50'),
(14, 'SIMP34956', 'trt', 7668, 'aa@gmail.com', 'Mombasa', '2day(s)', '2023-06-29 07:33:58', '2023-06-29 07:33:58'),
(17, 'SIMP34956', 'trt', 9965, 'aa@aagmail.com', 'Mombasa', '2day(s)', '2023-06-29 07:38:59', '2023-06-29 07:38:59'),
(18, 'SIMP31714', 'yu', 4533, 'n@gmai.com', 'Narok', '4day(s)', '2023-06-29 07:50:49', '2023-06-29 07:50:49'),
(19, 'SIMP54189', 'dan', 1234, 'n@va.com', 'Narok', '6day(s)', '2023-07-03 07:09:33', '2023-07-03 07:09:33'),
(20, 'SIMP98687', 'Dan Ndong', 8796, 'danndong10@gmail.com', 'Eldoret', '7day(s)', '2023-07-05 14:36:44', '2023-07-05 14:36:44'),
(21, 'SIMP38460', 'Dan  Tyson', 908654, 'dan@gmail.com', 'Meru', '6day(s)', '2023-07-11 07:22:18', '2023-07-11 07:22:18'),
(22, 'SIMP54275', 'Murui Muriu', 700000000, 'S@s.s', 'Eldoret', '5day(s)', '2023-07-12 14:15:59', '2023-07-12 14:15:59'),
(23, 'SIMP44823', 'Mark Too', 123455697, 'v@va.com', 'Mombasa', '10day(s)', '2023-07-17 09:24:08', '2023-07-17 09:24:08'),
(24, 'SIMP18449', 'John', 700000, 'aka@gmail.com', 'Baringo', '9day(s)', '2023-07-17 12:30:21', '2023-07-17 12:30:21'),
(25, 'SIMP83441', 'Dan  Tyson', 9706, 'dante@gmail.com', 'Baringo', '2day(s)', '2023-07-17 12:41:23', '2023-07-17 12:41:23'),
(26, 'SIMP64388', 'Mark Kibe', 123456780000, 'na@v.com', 'Meru', '7day(s)', '2023-07-17 13:09:40', '2023-07-17 13:09:40'),
(27, 'SIMP77768', 'Dan Ndong', 46586, 'da090@gmail.com', 'Narok', '6day(s)', '2023-07-17 14:00:00', '2023-07-17 14:00:00'),
(28, 'SIMP24664', 'Dan Ndong', 969, 'dann@gmail.com', 'Narok', '9day(s)', '2023-07-17 14:05:01', '2023-07-17 14:05:01'),
(29, 'SIMP41287', 'jay', 67898988, 'ja@gmail.com', 'eldoret', '8day(s)', '2023-07-25 08:36:54', '2023-07-25 08:36:54'),
(30, 'SIMP60598', 'jay', 67444, 'jay@gmail.com', 'eldoret', '2day(s)', '2023-07-25 09:30:21', '2023-07-25 09:30:21'),
(31, 'SIMP66604', 'jay', 6784784335, 'jayz@gmail.com', 'narok', '4day(s)', '2023-07-25 09:38:30', '2023-07-25 09:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_16_084152_clients', 2),
(6, '2023_06_16_090953_bookings', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `firstname`, `secondname`, `phone`, `id_no`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'Mark', 'Too', '0711111111', '12345678', '123456', NULL, '2023-06-14 14:37:01', '2023-06-14 14:37:01'),
(2, '', 'Dan', 'Ndong', '0726585782', '12345', '$2y$10$MKfE6aKuMhYT1FlzPiqqV.E3XSXnmGUbvogvjHMnsDXK223ioKUCm', NULL, '2023-06-14 14:56:45', '2023-06-14 14:56:45'),
(3, 'Admin', 'Mark', 'Too', '1234567', '1234', '$2y$10$sMsZpQeUI/DDixw0wVb3mOWyEO5n4tG/QHPdB5/jBuZHjtWqKE28q', NULL, '2023-06-14 15:02:38', '2023-06-14 15:02:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_id` (`car_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_id_no_unique` (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
