-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 06:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery` int(11) DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `firstName`, `lastName`, `country`, `address`, `district`, `county`, `province`, `postcode`, `delivery`, `payment`, `created_at`, `updated_at`) VALUES
(10, 'จิรายุ', 'ชาติยานนท์', 'ไทย', 'จิรายุ ชาติยานนท์ 8/55 (เลขที่ใหม่ 62) ซอย โกสุมรวมใจ37แยก8 ถนน วิภาวดี แขวง ดอนเมือง เขต ดอนเมือง กรุงเทพ 10210\r\nซอย โกสุมรวมใจ37แยก8', 'ดอนเมือง', 'Bangkok', 'กรุงเทพมหานคร', '10210', 15, 'on', '2021-04-29 08:55:45', '2021-04-29 08:55:45'),
(11, 'จิรายุ', 'ชาติยานนท์', 'ไทย', 'จิรายุ ชาติยานนท์ 8/55 (เลขที่ใหม่ 62) ซอย โกสุมรวมใจ37แยก8 ถนน วิภาวดี แขวง ดอนเมือง เขต ดอนเมือง กรุงเทพ 10210\r\nซอย โกสุมรวมใจ37แยก8', 'ดอนเมือง', 'Bangkok', 'กทม', '10210', 15, 'on', '2021-04-29 08:58:25', '2021-04-29 08:58:25');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_27_141001_create_products_table', 1),
(4, '2021_04_27_183757_add_type_to_product_table', 2),
(5, '2021_04_27_184143_create_types_table', 3),
(6, '2021_04_27_191711_add_best_to_product_table', 4),
(7, '2021_04_28_163013_create_orders_table', 5),
(8, '2021_04_28_163306_create_order_detail_table', 5),
(9, '2021_04_28_163453_create_addresses_table', 6),
(10, '2021_04_28_184527_add_user_isadmino_product_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoce_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoce_number`, `total_price`, `user_id`, `address_id`, `created_at`, `updated_at`) VALUES
(8, '0C4214830479051', '331', NULL, 10, '2021-04-29 08:55:45', '2021-04-29 08:55:45'),
(9, '10316E613027288', '410', 3, 11, '2021-04-29 08:58:25', '2021-04-29 08:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `order_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(6, 1, 8, 3, 71, NULL, NULL),
(7, 3, 8, 1, 79, NULL, NULL),
(8, 1, 9, 3, 71, NULL, NULL),
(9, 3, 9, 2, 79, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `best_selle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image_name`, `detail`, `price`, `qty`, `discount`, `created_at`, `updated_at`, `type_id`, `best_selle`) VALUES
(1, 'ดาบพิฆาตอสูร', 'img_01.jpg', 'รายละเอียด : ดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก\r\nดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก', 79, 10, 10, '2021-04-27 14:33:50', '2021-04-27 14:33:50', 1, NULL),
(2, 'ดาบพิฆาตอสูร', 'img_01.jpg', 'รายละเอียด : ดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก\r\nดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก', 79, 10, 0, '2021-04-27 14:33:50', '2021-04-27 14:33:50', 1, 1),
(3, 'ดาบพิฆาตอสูร', 'img_01.jpg', 'รายละเอียด : ดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก\r\nดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก', 79, 10, 0, '2021-04-27 14:33:50', '2021-04-27 14:33:50', 1, NULL),
(4, 'ดาบพิฆาตอสูร', 'img_01.jpg', 'รายละเอียด : ดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก\r\nดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก', 79, 10, 10, '2021-04-27 14:33:50', '2021-04-27 14:33:50', 2, NULL),
(5, 'ดาบพิฆาตอสูร', 'img_01.jpg', 'รายละเอียด : ดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก\r\nดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก', 79, 10, 10, '2021-04-27 14:33:50', '2021-04-27 14:33:50', 2, NULL),
(6, 'ดาบพิฆาตอสูร', 'img_01.jpg', 'รายละเอียด : ดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก\r\nดาบพิฆาตอสูร เล่ม 8 ตอน 8 พลังของอสูรข้างขึ้นพลังของเสาหลัก', 79, 10, 0, '2021-04-27 14:33:50', '2021-04-27 14:33:50', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'สินค้าใหม่', NULL, NULL),
(2, 'สินค้าขายดี', NULL, NULL),
(3, 'สินค้าแนะนำ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'admin@itsolutionstuff.com', NULL, '$2y$10$F.PrN0o8T2veDPY/FvfDfujIuQZgkkQS.UxV2.NobI1lvJ8zMvlwW', NULL, '2021-04-28 11:58:38', '2021-04-28 11:58:38', 1),
(2, 'User', 'theboat722@gmail.com', NULL, '$2y$10$M5JHJbmfept3XNLglyLSkutM0iuzjGP1ub8zbuyTcnxMfLGZuZFCa', NULL, '2021-04-28 11:58:38', '2021-04-28 11:58:38', 0),
(3, 'จิรายุ ชาติยานนท์', 'theboat72@gmail.com', NULL, '$2y$10$M5JHJbmfept3XNLglyLSkutM0iuzjGP1ub8zbuyTcnxMfLGZuZFCa', NULL, '2021-04-28 12:04:45', '2021-04-28 12:04:45', 0),
(4, 'จิรายุ ชาติยานนท์', 'theboat73@gmail.com', NULL, '$2y$10$MWSL0TS8.ClnvlDJIXnq5e8gezFsneV/Baz1wqaonawkqy3ysITPa', NULL, '2021-04-28 12:24:18', '2021-04-28 12:24:18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
