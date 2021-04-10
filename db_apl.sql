-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 10:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apl`
--

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
-- Table structure for table `marketings`
--

CREATE TABLE `marketings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_marketing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_marketing` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp_marketing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketings`
--

INSERT INTO `marketings` (`id`, `file`, `nama_marketing`, `email_marketing`, `jabatan`, `notlp_marketing`, `created_at`, `updated_at`) VALUES
(1, '1595314591_marketing1.jpg', 'Riqi Nurdian', 'Riqi Nurdian@gmail.com', 'Manager Marketing 1', '087722696049', '2020-07-03 17:21:55', '2020-07-20 23:56:31'),
(2, '1595314640_marketing3.jpg', 'Nina Karmila', 'Ninakarmila@gmail.com', 'Manager Marketing 2', '087722696049', '2020-07-04 02:42:28', '2020-07-20 23:57:20'),
(3, '1595314656_marketing2.jpg', 'Ujang Kusniadi', 'ujangkusniadi@gmail.com', 'SPV Marketing', '087722696049', '2020-07-04 02:43:56', '2020-07-20 23:57:36');

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
(4, '2014_10_12_000000_create_users_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 2),
(28, '2020_07_02_091212_create_proyeks_table', 2),
(29, '2020_07_03_022840_create_tipe_table', 2),
(31, '2020_07_03_230623_create_marketings_table', 3),
(32, '2020_07_12_081428_create_promo_table', 4),
(33, '2020_07_12_104814_create_pemesanan_table', 4),
(34, '2020_07_21_010610_add_status_to_pemesanan_table', 5),
(35, '2020_09_06_103601_add_nomorkav_to_pemesanan_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `email`, `no_hp`, `alamat`, `ttl`, `no_ktp`, `proyek`, `tipe`, `created_at`, `updated_at`, `status`) VALUES
(3, 'Alex', 'alex@gmail.com', '088567567454', 'jl. padasuka 21', '08/07/2000', '3333452345234234', 'Pratama Asri Cicalengka', 'tipe 40/70', '2020-07-15 17:22:52', '2020-09-06 08:28:05', 0),
(4, 'Andre', 'andre@gmail.com', '08886464234234', 'jl.cisaranten kulon no. 43', '07/05/1999', '33387698709787', 'Griya Pratama Asri Cibiru 1', 'tipe 80/120', '2020-07-15 17:25:26', '2020-07-21 06:57:21', 0),
(7, 'adit', 'adittyasubagja13@gmail.com', '08812232323', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 05:51:50', '2020-07-21 06:57:19', 0),
(8, 'adit', 'adittyasubagja13@gmail.com', '08812232323', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 05:52:50', '2020-07-21 06:57:15', 0),
(9, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:02:55', '2020-07-21 06:57:13', 0),
(10, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:02:55', '2020-07-21 06:57:10', 0),
(11, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:04:05', '2020-07-20 06:04:05', 0),
(12, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:04:05', '2020-07-20 06:04:05', 0),
(13, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:04:40', '2020-07-20 06:04:40', 0),
(14, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:04:40', '2020-07-20 06:04:40', 0),
(15, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:04:57', '2020-07-20 06:04:57', 0),
(16, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:04:58', '2020-07-20 06:04:58', 0),
(17, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:12:41', '2020-07-20 06:12:41', 0),
(18, 'adit', 'adittyasubagja13@gmail.com', '0881023799224', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:12:41', '2020-07-20 06:12:41', 0),
(19, 'ujang', 'adittyasubagja13@gmail.com', '098098', 'jalan gedebage', 'bandung 08/01/1999', '3294809123', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 06:58:52', '2020-07-20 06:58:52', 0),
(20, 'test mang', 'adittyasubagja13@gmail.com', '08812232323', 'asdsaasd', 'asdasd', '98098098', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 07:39:00', '2020-07-21 05:55:42', 0),
(21, 'kokorobet', 'adittyasubagja13@gmail.com', '000000', 'cisaranten', 'bandung 08/05/2000', '11111', 'Pratama Asri Cicalengka', 'tipe 40/70', '2020-07-20 07:43:03', '2020-07-20 07:43:03', 0),
(22, 'asalamualaikum', 'adittyasubagja13@gmail.com', '08812232323', 'asdas', 'bandung 08/01/1999', '098098098', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 07:46:58', '2020-07-20 07:46:58', 0),
(23, 'asalamualaikum', 'adittyasubagja13@gmail.com', '08812232323', 'asdas', 'bandung 08/01/1999', '098098098', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 07:47:55', '2020-07-20 07:47:55', 0),
(24, 'Bejo', 'Setyoadji199@gmail.com', '0881023799224', 'cijambe', '03/19/1999', '87098098098', 'Griya Pratama Asri Cileunyi 1', 'tipe 30/60', '2020-07-20 08:29:25', '2020-07-20 08:29:25', 0),
(26, 'hari', 'isanr8199@gmail.com', '098098', 'asdasddf', 'sdfsdf', '09098', 'Griya Pratama Asri Cileunyi 1', 'tipe 80/120', '2020-07-21 19:58:00', '2020-07-21 19:58:00', 0),
(27, 'sadasdasd', 'adittyasubagja13@gmail.com', '09809809809', 'jl.arcamanik endah no.29', 'garut, 08/01/1999', '9080980978', 'Griya Pratama Asri Cileunyi 1', 'tipe 80/120', '2020-07-21 20:00:51', '2020-07-21 20:00:51', 0),
(28, 'dadang', 'isanr8199@gmail.com', '09809809', 'asdas', 'asdasd', '0988098', 'Pratama Asri Cicalengka', 'tipe 35/50', '2020-07-21 20:11:11', '2020-07-21 20:11:11', 0),
(29, 'ihsan', 'isanr8199@gmail.com', '890809809', 'arcamanik', 'garut, 08/01/1999', '09809809', 'Griya Pratama Asri Cileunyi 1', 'tipe 80/120', '2020-07-22 02:49:26', '2020-07-22 02:49:26', 0),
(30, 'ihsan ramadan', 'ihsanr90@gmail.com', '0881023799224', 'arcamanik', 'garut, 08/01/1999', '09809809803923', 'Griya Pratama Asri Cileunyi 1', 'tipe 80/120', '2020-09-05 20:27:02', '2020-09-05 20:27:02', 0),
(31, 'ihsan ramadan', 'ihsanr90@gmail.com', '0881023799224', 'arcamanik', 'garut, 08/01/1999', '09809809803923', 'Griya Pratama Asri Cileunyi 1', 'tipe 80/120', '2020-09-05 20:27:13', '2020-09-05 20:27:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_promo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_promo` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `file`, `nama_promo`, `deskripsi_promo`, `created_at`, `updated_at`) VALUES
(1, '1594995073_promo1.jpg', 'Promo corona', 'promo bombastis', '2020-07-12 19:10:00', '2020-07-17 07:11:13'),
(2, '1594995086_promo2.jpg', 'promo peratama asri', 'promo mantap', '2020-07-12 19:10:59', '2020-07-17 07:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `proyeks`
--

CREATE TABLE `proyeks` (
  `proyek_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_proyek` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_proyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_proyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proyeks`
--

INSERT INTO `proyeks` (`proyek_id`, `file`, `nama_proyek`, `alamat_proyek`, `deskripsi_proyek`, `created_at`, `updated_at`) VALUES
(3, '1594995115_proyek.jpg', 'Griya Pratama Asri Cileunyi 1', 'Jln. Cileunyi', 'hunian asri dan nyaman', '2020-07-03 04:51:16', '2020-07-17 07:11:55'),
(5, '1594995125_proyek.jpg', 'Pratama Asri Cicalengka', 'Jl. Cicalengka', 'hunian asri dan nyaman', '2020-07-03 07:14:51', '2020-07-17 07:12:05'),
(7, '1594995135_proyek.jpg', 'Griya Pratama Asri Cibiru 1', 'Jl. Cibiru', 'hunian asri dan nyaman', '2020-07-05 16:18:08', '2020-07-17 07:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `tipe_id` bigint(20) UNSIGNED NOT NULL,
  `proyek_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tipe` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` int(11) NOT NULL,
  `kamar` int(11) NOT NULL,
  `kamar_mandi` int(11) NOT NULL,
  `ruang_keluarga` int(11) NOT NULL,
  `dapur` int(11) NOT NULL,
  `garasi` int(11) NOT NULL,
  `gudang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`tipe_id`, `proyek_id`, `file`, `nama_tipe`, `deskripsi_tipe`, `lantai`, `kamar`, `kamar_mandi`, `ruang_keluarga`, `dapur`, `garasi`, `gudang`, `harga`, `created_at`, `updated_at`) VALUES
(8, 5, '1595924763_IMG-20190830-WA0000.jpg', 'tipe 80/120', 'Temukan hunian rumah yang nayaman dan, menyediakan fasilitas dan arsitektur yang mewah', 1, 3, 2, 1, 1, 1, 1, 500000000, '2020-07-03 07:41:47', '2020-07-28 01:26:03'),
(12, 3, '1595924482_IMG-20190827-WA0015.jpg', 'tipe 40/70', 'rumah nyaman', 1, 1, 1, 1, 1, 1, 1, 300000000, '2020-07-03 07:48:34', '2020-07-28 01:21:22'),
(14, 7, '1595924497_rumah5.jpg', 'tipe 35/50', 'rumah kokoh', 1, 1, 1, 1, 1, 1, 1, 400000000, '2020-07-11 15:44:14', '2020-07-28 01:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizki Ramadhan A', 'rizkiramadhan34@gmail.com', NULL, '$2y$10$y9p6a/VIsfDXli2V/XN3yuR1Pv5kGm/u91jQGH1KKRT99ekrcHJI2', NULL, '2020-06-29 02:46:09', '2020-06-29 02:46:09'),
(2, 'Bahsocks', 'babahsocks@gmail.com', NULL, '$2y$10$TG6qIHuVNn4PQWEXwK8nle0dQXf6Wl63nE07.GNz9PYbr53AJ2mj.', NULL, '2020-06-29 03:28:13', '2020-06-29 03:28:13'),
(3, 'Roro Joro', 'rorojoro@gmail.com', NULL, '$2y$10$8vHRBkyjGNRol84ztl6OFeWQUh0SmimiEVvdTGhhwY9APeq7fSUCq', NULL, '2020-07-03 19:11:23', '2020-07-03 19:11:23'),
(4, 'Ihsan Ramadan', 'ihsanr90@gmail.com', NULL, '$2y$10$RDpPlcPpBUIE0ZSwQprLUOQGD9qPtveSM0Xg7CXHZjYAZuQ5dnfNG', NULL, '2020-07-10 06:06:27', '2020-07-10 06:06:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketings`
--
ALTER TABLE `marketings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `marketings_email_marketing_unique` (`email_marketing`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyeks`
--
ALTER TABLE `proyeks`
  ADD PRIMARY KEY (`proyek_id`),
  ADD UNIQUE KEY `proyeks_nama_proyek_unique` (`nama_proyek`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`tipe_id`),
  ADD KEY `tipe_proyek_id_foreign` (`proyek_id`);

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
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proyeks`
--
ALTER TABLE `proyeks`
  MODIFY `proyek_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `tipe_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tipe`
--
ALTER TABLE `tipe`
  ADD CONSTRAINT `tipe_proyek_id_foreign` FOREIGN KEY (`proyek_id`) REFERENCES `proyeks` (`proyek_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
