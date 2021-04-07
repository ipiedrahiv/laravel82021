-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2021 at 05:57 PM
-- Server version: 10.2.10-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `#mysql50#.rocksdb`
--
CREATE DATABASE IF NOT EXISTS `#mysql50#.rocksdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `#mysql50#.rocksdb`;
--
-- Database: `laravelcourse`
--
CREATE DATABASE IF NOT EXISTS `laravelcourse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravelcourse`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `quantity`, `subtotal`, `product_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 1, 1, '2021-04-05 15:08:16', '2021-04-05 15:08:16'),
(2, 1, 1000, 1, 2, '2021-04-06 17:38:40', '2021-04-06 17:38:40'),
(3, 4, 1500, 4, 3, '2021-04-06 17:49:06', '2021-04-06 17:49:06'),
(4, 2, 500, 6, 4, '2021-04-06 17:51:07', '2021-04-06 17:51:07'),
(5, 3, 2000, 8, 4, '2021-04-06 17:51:07', '2021-04-06 17:51:07'),
(6, 6, 500, 6, 5, '2021-04-06 17:53:49', '2021-04-06 17:53:49'),
(7, 4, 2000, 3, 6, '2021-04-06 17:57:08', '2021-04-06 17:57:08'),
(8, 3, 1500, 4, 6, '2021-04-06 17:57:08', '2021-04-06 17:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2021_03_13_000000_create_seeds_table', 1),
(22, '2021_03_17_000000_create_orders_table', 1),
(23, '2021_03_17_000001_create_items_table', 1),
(24, '2021_03_20_000000_add_role_to_users', 1),
(25, '2021_03_21_000000_create_reviews_table', 1),
(26, '2021_03_30_000000_add_image_to_reviews', 1),
(27, '2021_03_31_000000_add_image_to_seeds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1000, 1, '2021-04-05 15:08:16', '2021-04-05 15:08:16'),
(2, 1000, 2, '2021-04-06 17:38:40', '2021-04-06 17:38:40'),
(3, 6000, 4, '2021-04-06 17:49:06', '2021-04-06 17:49:06'),
(4, 7000, 8, '2021-04-06 17:51:07', '2021-04-06 17:51:07'),
(5, 3000, 5, '2021-04-06 17:53:49', '2021-04-06 17:53:49'),
(6, 12500, 7, '2021-04-06 17:57:08', '2021-04-06 17:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `seed_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `user_id`, `seed_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 4, 'Funcionan muy bien!', 2, 1, '2021-04-06 17:38:26', '2021-04-06 17:38:26', 'cilantro.jpeg'),
(2, 5, 'Muy lindo!', 2, 2, '2021-04-06 17:40:24', '2021-04-06 17:40:24', 'gira.jpg'),
(3, 5, 'Me gustó mucho.', 3, 3, '2021-04-06 17:41:58', '2021-04-06 17:41:58', '600x400_calabaza-770.jpg'),
(4, 5, 'Funcionan muy bien!', 3, 2, '2021-04-06 17:43:06', '2021-04-06 17:43:06', 'gira.jpg'),
(5, 2, 'Muy caro!', 3, 5, '2021-04-06 17:44:19', '2021-04-06 17:44:19', 'mostaza.jpg'),
(6, 5, 'Súper bien.', 4, 1, '2021-04-06 17:47:17', '2021-04-06 17:47:17', 'cilantro1.jpeg'),
(7, 4, 'Muy nutritiva', 8, 8, '2021-04-06 17:49:18', '2021-04-06 17:49:18', 'zapalloplanta.jpg'),
(8, 4, 'Muy nutritivo.', 4, 4, '2021-04-06 17:50:11', '2021-04-06 17:50:11', 'chiaf.jpg'),
(9, 3, 'Se demoró en llegar pero crecio super bien', 8, 6, '2021-04-06 17:50:37', '2021-04-06 17:50:37', 'sesamoplanta.jpg'),
(10, 4, 'Me gustó mucho.', 5, 8, '2021-04-06 17:51:29', '2021-04-06 17:51:29', 'zapallo.jpg'),
(11, 4, 'Abrete sésamo.', 5, 6, '2021-04-06 17:52:36', '2021-04-06 17:52:36', 'sesamo.jpg'),
(12, 5, 'Creció super linda', 7, 3, '2021-04-06 17:53:22', '2021-04-06 17:53:22', 'calabazaplanta.jpg'),
(13, 4, 'Super bonita, muy fácil de plantar', 7, 4, '2021-04-06 17:56:32', '2021-04-06 17:56:32', 'chiaplanta2.png');

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`id`, `name`, `seller`, `price`, `stock`, `keywords`, `categories`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Cilantro', 'Matilda', '1000', '100', 'Comestible', 'Comestible', '2021-04-05 15:07:23', '2021-04-05 15:07:23', 'cilantro.jpeg'),
(2, 'Girasol', 'Matilda', '1000', '100', 'Flor', 'Flor', '2021-04-05 15:07:59', '2021-04-05 15:07:59', 'girasol.jpeg'),
(3, 'Calabaza', 'Vincent', '2000', '0', 'Semilla', 'Semilla', '2021-04-06 17:39:09', '2021-04-06 17:39:09', 'calabaza.jpg'),
(4, 'Chia', 'Juan pablo', '1500', '20', 'Semilla, Nutricion', 'Nutricion', '2021-04-06 17:40:30', '2021-04-06 17:40:30', 'chia.jpg'),
(5, 'Moztasa', 'Andres', '2000', '30', 'Semilla', 'Nutricion', '2021-04-06 17:41:36', '2021-04-06 17:41:36', 'moztasa.png'),
(6, 'Sesamo', 'Jhon', '500', '20', 'Semilla', 'Decoración', '2021-04-06 17:42:35', '2021-04-06 17:42:35', 'sesamo.jpg'),
(8, 'Zapallo', 'Isabella', '2000', '0', 'Semilla', 'Nutricion', '2021-04-06 17:47:05', '2021-04-06 17:47:05', 'zapalloo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'isa', 'o2908772@nwytg.net', NULL, '$2y$10$0TeBu1RiJXrdgweiQvA7WOzv6Z8VgIVQTqaYbGonZUYLCfDjTkhfS', NULL, '2021-04-05 15:06:28', '2021-04-05 15:06:28', 'admin'),
(2, 'user1', 'xrk02360@zwoho.com', NULL, '$2y$10$XX2ctfMFkYCWpCpalvQm7uuWbM2QIHajvEpbo8/bShPL.MhJU/0x6', NULL, '2021-04-06 17:31:23', '2021-04-06 17:31:23', 'client'),
(3, 'user2', 'cif70577@zwoho.com', NULL, '$2y$10$.LjvXFYWY3caayxc6YQWxeE7nBFw1x/TnAlYE3LYpLNpAuHst7RBi', NULL, '2021-04-06 17:31:58', '2021-04-06 17:31:58', 'client'),
(4, 'user3', 'jyg11508@cuoly.com', NULL, '$2y$10$DWH1/fz7D/IDhZdtBiczKud2zpjaj/2yLN6ELBJckUTBnQZncRgFW', NULL, '2021-04-06 17:32:27', '2021-04-06 17:32:27', 'client'),
(5, 'user4', 'chi96311@zwoho.com', NULL, '$2y$10$jAlUp9kORXkOn9nRzzwERumY9yoD/UHuVV8YHUrDXCpJNHUZROOru', NULL, '2021-04-06 17:32:46', '2021-04-06 17:32:46', 'client'),
(6, 'user5', 'xdk40098@cuoly.com', NULL, '$2y$10$bzMKvgCatcyb4YU/.us59.0ZpRHhXdXJlAxmt1og3MLtISY2ergIq', NULL, '2021-04-06 17:33:05', '2021-04-06 17:33:05', 'client'),
(7, 'user6', 'avo51135@zwoho.com', NULL, '$2y$10$aGawh.Lqb1t/YdPuqOC1g.habEzdomvDj0cKgt5ruqHY8KmbsM/h6', NULL, '2021-04-06 17:33:45', '2021-04-06 17:33:45', 'client'),
(8, 'user7', 'hjo86671@cuoly.com', NULL, '$2y$10$vP9e1pjFz82iLDZTObzTBeFbf7UUpnw/pa41JoR.YLfUHyTUHyYZu', NULL, '2021-04-06 17:34:04', '2021-04-06 17:34:04', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_product_id_foreign` (`product_id`),
  ADD KEY `items_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_seed_id_foreign` (`seed_id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `seeds` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_seed_id_foreign` FOREIGN KEY (`seed_id`) REFERENCES `seeds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
