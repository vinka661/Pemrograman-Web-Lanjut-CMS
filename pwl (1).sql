-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 05:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', 'Brand laptop terbaik nomor 1 yaitu Lenovo Ideapad 320-14IKB', 'images/qlmmXwWwQ2kmeTTVtm9xUGB4fcLYL2yAoqDMuFh3.jpeg', NULL, '2020-11-13 19:35:45'),
(2, 'HP', 'Brand laptop terbaik nomor 2 yaitu HP Chromebook', 'images/UZzk8Z6RUOjRtAVrwn1dTGt7t1oQpeHpKtPL5jmL.jpeg', NULL, '2020-11-13 19:37:24'),
(3, 'Asus', 'Brand laptop terbaik nomor 3 yaitu Asus ZenBook Flip 14', 'images/KNhOrnrvYOIC8d4tt3rwy5FUDkpY2i0zlB56NF3o.jpeg', NULL, '2020-11-13 19:39:13'),
(5, 'dell', 'laptop dell bagus, menarik, keren', 'images/yJxaxLuQEiYEQCnpw2gZGHVeFNWyuvaBdHp2fMej.jpeg', '2020-10-19 05:32:16', '2020-11-13 19:40:38'),
(7, 'Acer Swift 3', 'Laptop yang keren dan fleksibel', 'images/VfZWoGf3VghVRtmAKe45As5LmibduZX3PaPWk9XX.jpeg', '2020-11-13 04:04:03', '2020-11-13 05:21:56'),
(8, 'abc', 'ddwe', 'images/gCF62ZIRbB6Diy19Ru7xtKOgu65bE7Bu7MNOOZVO.jpeg', '2020-11-15 06:59:21', '2020-11-24 07:57:18'),
(9, 'a1', 'abc', 'images/xY0suBawOkB8e6M0qnsYz8fJ4f4z5hG3vQ05GZcx.jpeg', '2020-11-25 20:35:11', '2020-11-25 20:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `nama`, `merk`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', 'Lenovo Ideapad 320-14IKB', 'Operating System : Windows 10 Home 64 Bit\n                                Processor : Intel Core i5 7200U (Dual Core 2.5 - 3.1 GHZ, 3MB)\n                                Memory RAM : 4 GB DDR4 Onboard + 1 Slot kosong (Max 12 GB)\n                                Penyimpanan : 1 TB\n                                Ukuran Layar : 14 inch HD (1366 x 768) Antiglare\n                                Resolusi : 1366 x 768', NULL, NULL),
(2, 'Lenovo', 'Lenovo Ideapad S340 14', 'Operating System : Windows 10 Home\n                                    Processor : Intel Core i5-8265U processor\n                                    Memory RAM : 16 GB (8+8) DDR4 RAM\n                                    Penyimpanan : HDD SATA 1 TB / 2 TB\n                                    Ukuran Layar : 14 inch FHD (1920 x 1080) IPS, 250 nits', NULL, NULL),
(3, 'HP', 'HP Chromebook', 'Processor : Intel Celeron N3060 (1.60 GHZ, Turbo up to 2.48 GHz) 2 MB 1600 MHz L2 cache, 2 cores\n                                    Memory RAM : 2 GB or 4 GB\n                                    Penyimpanan : 16 GB or 32 GB eMMC\n                                    Ukuran Layar : 11.6 inch diagonal HD WELD 1366 x 768, Corning Gorilla Glass NBT (Touch Version)\n                                    Resolusi : 1366 x 768', NULL, NULL),
(4, 'HP', 'HP Omen DH0105TX', 'Operating System : Windows 10 Home\n                                    Processor : Intel Core i7-9750H\n                                    Memory RAM : 16 GB DDR4\n                                    Penyimpanan : 512 GB SSD + 1 TB HDD\n                                    Ukuran Layar : 15.6 inch Full HD IPS Anti-Glare, 144 Hz', NULL, NULL),
(5, 'Asus', 'Asus ZenBook Flip 14', 'Operating System : Windows 10\n                                    Processor : Intel Core i78550U, 2.5 GHz \n                                    Memory RAM : 16 GB\n                                    Penyimpanan : 512 GB HDD\n                                    Ukuran Layar : 14 inch\n                                    Resolusi : 1920 x 1080 pixels', NULL, NULL),
(6, 'Asus', 'Asus VivoBook S13 S330FA', 'Operating System : Windows 10 Home\n                                    Processor : Intel Core i5-8265U\n                                    Memory RAM : 4 GB LPDDR3\n                                    Penyimpanan : 256 GB SSD\n                                    Ukuran Layar : 13.3-inch Full HD Ultraslim', NULL, NULL),
(7, 'asus x451na', 'asus', 'bagus dan keren', '2020-10-19 00:40:52', '2020-10-19 01:15:43'),
(11, 'abc123', 'abc12345', 'bagus banget dan keren', '2020-11-25 20:38:11', '2020-11-25 20:38:33');

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
(4, '2020_09_25_134447_create_articles_table', 1),
(5, '2020_10_09_140319_create_brands_table', 1),
(6, '2020_10_09_142138_create_collections_table', 2),
(7, '2020_11_06_182327_modif_table_users', 3),
(8, '2020_11_25_065841_foto_tabel_users', 4),
(9, '2020_11_25_173009_modif_table_users', 5),
(10, '2020_11_25_180107_modif_table_users', 6);

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
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `foto`) VALUES
(13, 'administrator', 'admin@gmail.com', NULL, '$2y$10$8MTCPDdD74N/g/2CHxP8jeyTbMWsCDk3IqeIcLhUMTB5U/Yd4taXu', NULL, '2020-11-25 20:55:02', '2020-11-25 20:57:24', 'Administrator', 'images/tifpvCFotGHHgB9jfEnJSvvcJYjoRKzaCKDAXBBg.jpeg'),
(14, 'user1', 'user1@gmail.com', NULL, '$2y$10$YUykhlssvUzwDX7yenqX1eU0ZwtJ4MeK8O45ZVAuAxBmWLJlLDfJ2', NULL, '2020-11-25 20:59:17', '2020-11-25 21:00:29', 'User', 'images/jBY3CB4qLzbHHJwwzBspcyG2WCjcozEizBxmvG0s.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
