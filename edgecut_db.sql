-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 01:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edgecut_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `created_at`, `updated_at`, `blog_title`, `blog_description`, `blog_image`) VALUES
(1, NULL, '2022-11-23 04:19:11', 'Look even slightly believable. If you are', 'alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1669196951.jpg'),
(2, NULL, '2022-11-23 04:19:22', 'Look even slightly believable. If you are', 'alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1669196962.jpg'),
(3, NULL, '2022-11-23 04:19:31', 'Look even slightly believable. If you are', 'alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1669196971.jpg'),
(9, '2022-11-23 04:23:10', '2022-11-23 04:23:10', 'Look even slightly believable. If you are', 'alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1669197190.jpg'),
(10, '2022-11-23 04:23:31', '2022-11-23 04:23:31', 'Look even slightly believable. If you are', 'alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1669197211.jpg'),
(11, '2022-11-23 04:23:55', '2022-11-23 04:23:55', 'Look even slightly believable. If you are', 'alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1669197235.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `email`, `phone`, `address`, `product_title`, `quantity`, `price`, `image`, `Product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'Admin', 'admin@admin.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', 'BLUE CHAIR DESIGN', '3', '480', '1669197613.png', '5', '5', '2022-11-23 05:18:50', '2022-11-23 05:18:50'),
(13, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', 'DOUBLE BED DESIGN', '2', '400', '1669197539.png', '2', '2', '2022-11-24 05:46:13', '2022-11-24 05:46:13');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_25_115655_create_blog_table', 2),
(6, '2022_11_01_082457_create_product_table', 3),
(7, '2022_11_08_095730_add_role_as_to_users_table', 4),
(8, '2022_11_20_095236_create_carts_table', 5),
(9, '2022_11_20_113531_add_address_to_users_table', 6),
(10, '2022_11_21_095444_create_orders_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(4, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'HOUSE CHAIR DESIGN', '4', '600', 'images/f3.png', '3', 'Paid', 'delivered', '2022-11-21 04:55:56', '2022-11-22 11:30:10'),
(5, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'DOUBLE BED DESIGN', '1', '200', 'images/f2.png', '2', 'Cash On Delivery', 'Processing', '2022-11-21 05:02:16', '2022-11-21 05:02:16'),
(6, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'DOUBLE BED DESIGN', '1', '200', 'images/f2.png', '2', 'Cash On Delivery', 'Processing', '2022-11-21 05:05:12', '2022-11-21 05:05:12'),
(7, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'HOUSE CHAIR DESIGN', '1', '150', 'images/f3.png', '3', 'Cash On Delivery', 'Processing', '2022-11-21 05:05:12', '2022-11-21 05:05:12'),
(8, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'DOUBLE BED DESIGN', '2', '400', '1669197539.png', '2', 'Paid', 'Processing', '2022-11-23 06:05:47', '2022-11-23 06:05:47'),
(9, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'BROWN CHAIR DESIGN', '2', '200', '1669197520.png', '1', 'Paid', 'Processing', '2022-11-23 06:05:47', '2022-11-23 06:05:47'),
(10, 'thlip', 'test28@gmail.com', '(372) 587-2335', 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '2', 'BROWN CHAIR DESIGN', '10', '1000', '1669197520.png', '1', 'Paid', 'Processing', '2022-11-23 06:08:48', '2022-11-23 06:08:48');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `created_at`, `updated_at`, `product_name`, `product_image`, `product_price`, `quantity`) VALUES
(1, NULL, '2022-11-23 04:48:36', 'BROWN CHAIR DESIGN', '1669197520.png', 100, '25'),
(2, NULL, '2022-11-23 04:28:59', 'DOUBLE BED DESIGN', '1669197539.png', 200, '30'),
(3, NULL, '2022-11-23 04:29:37', 'HOUSE CHAIR DESIGN', '1669197577.png', 150, '50'),
(4, NULL, '2022-11-23 04:29:58', 'BROWN TABLE DESIGN', '1669197598.png', 200, '60'),
(5, NULL, '2022-11-23 04:30:13', 'BLUE CHAIR DESIGN', '1669197613.png', 160, '10'),
(6, NULL, '2022-11-23 04:30:27', 'BROWN TABLE DESIGN', '1669197627.png', 5001, '20');

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
  `role_as` int(11) NOT NULL DEFAULT 0,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`, `address`, `phone`) VALUES
(1, 'thlip', 'thilip@g2techsoft.com', NULL, '$2y$10$xs2Yc19LgLGIKhrynipYsuN1S2vukJGHFJQpMOImAezxdL8Okcod2', NULL, '2022-10-22 23:38:58', '2022-10-22 23:38:58', 0, 'Cecilia Chapman\n711-2880 Nulla St.\nMankato Mississippi 96522', '(257) 563-7401'),
(2, 'thlip', 'test28@gmail.com', NULL, '$2y$10$lcUSk9SZNBuSOXV9HehPSe5UJ/1eAgH5TGT/QoMRraFovL5eCTw9e', NULL, '2022-10-22 23:44:07', '2022-10-22 23:44:07', 0, 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '(372) 587-2335'),
(3, 'thlip', 'test282@gmail.com', NULL, '$2y$10$PagdxbOmbBy4feIHCrcGkOP6wVHYLOpOZRY5TSXVUMAdkxsV6CTfS', NULL, '2022-10-23 00:50:48', '2022-10-23 00:50:48', 0, 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '(372) 587-2335'),
(4, 'test', 'test@gamil.com', NULL, '$2y$10$d14yROoxA2WdHwou9qpVPOJgJPqvgprhdI0LspZOcQybPksopxCom', NULL, '2022-10-26 05:04:08', '2022-10-26 05:04:08', 0, 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '(372) 587-2335'),
(5, 'Admin', 'admin@admin.com', NULL, '$2y$10$DiBk4EN6sfSj9GbKN48NcODBFD.tZHaFTkGXhhrTUsR0KCxGfq6Ne', NULL, '2022-11-08 04:30:34', '2022-11-08 04:30:34', 1, 'Iris Watson\nP.O. Box 283 8562 Fusce Rd.\nFrederick Nebraska 20620', '(372) 587-2335'),
(10, 'Testing', 'testing28@gmail.com', NULL, '$2y$10$hdhr6XXT2574lV14w0twBOpvz3EQJ95d2mQgyDSo1sk4enUwrn8CC', NULL, '2022-11-23 08:29:26', '2022-11-23 08:29:26', 0, '12, middle street,', '9008123458'),
(11, 'thiliptette', 'tetetet@gmail.com', NULL, '$2y$10$IogFbnLSsDhMdmFiaw6N7eHvH.JQ6vnEF4X8sYgdGhXPM9c18713O', NULL, '2022-11-23 08:59:24', '2022-11-23 08:59:24', 0, '12, middle street,', '9003816505'),
(12, 'anu', 'tetet@maiimp.com', NULL, '$2y$10$p0jo7NPz6eJWRXEl4VY5C.aIPU2WlmcWKFocF9hSp7mtLNUMCryPe', NULL, '2022-11-23 09:01:07', '2022-11-23 09:01:07', 0, 'sfsffsf', '12346979779'),
(13, 'amperage', 'amperage@gmai.com', NULL, '$2y$10$msFuKfBtZjFifQeo/7MXtuYpLz8C3pI1dmrOcmiTnNf/6HPJVZ39W', NULL, '2022-11-23 09:02:00', '2022-11-23 09:02:00', 0, 'safsfsffda', '1234648799879');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
