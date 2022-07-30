-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 08:57 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayu_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `tgl` varchar(50) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `id_berkas`, `tgl`, `no_surat`, `file`, `created_at`, `updated_at`) VALUES
(1, 9, '2022-07-30', 'Kep.250/87/100.04', '1659205697_print.pdf', '2022-07-30 10:28:17', '2022-07-30 10:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `tanggal` varchar(225) DEFAULT NULL,
  `jenis` varchar(225) DEFAULT NULL,
  `file` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_surat` varchar(225) DEFAULT NULL,
  `no_pendaftaran` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `dari` varchar(225) DEFAULT NULL,
  `sampai` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `id_user`, `tanggal`, `jenis`, `file`, `created_at`, `updated_at`, `no_surat`, `no_pendaftaran`, `alamat`, `dari`, `sampai`) VALUES
(1, 1, '2022-12-31', NULL, '1657960240_008 Surat Jalan Lanjutan GD. Makassar.pdf', '2022-07-16 00:30:40', '2022-07-16 00:30:40', NULL, NULL, NULL, NULL, NULL),
(2, 1, '2022-12-31', NULL, '1657960272_008 Surat Jalan Lanjutan GD. Makassar.pdf', '2022-07-16 00:31:12', '2022-07-16 00:31:12', NULL, NULL, NULL, NULL, NULL),
(3, 1, '2022-12-31', NULL, '1657960401_009 Surat Jalan Lanjutan  GD. Samarinda.pdf', '2022-07-16 00:33:21', '2022-07-16 00:33:21', NULL, NULL, NULL, NULL, NULL),
(4, 1, '2022-12-31', NULL, '1657960488_009 Surat Jalan Lanjutan  GD. Samarinda.pdf', '2022-07-16 00:34:48', '2022-07-16 00:34:48', NULL, NULL, NULL, NULL, NULL),
(5, 1, '2022-12-31', NULL, '1657960524_009 Surat Jalan Lanjutan  GD. Samarinda.pdf', '2022-07-16 00:35:24', '2022-07-16 00:35:24', NULL, NULL, NULL, NULL, NULL),
(6, 2, '2022-07-17', NULL, '1657997556_PIJAR.pdf', '2022-07-16 10:09:27', '2022-07-16 10:52:36', NULL, NULL, NULL, NULL, NULL),
(8, 2, '2022-07-30', NULL, '1659121528_pasien.jpg', '2022-07-29 11:05:28', '2022-07-29 11:05:28', NULL, NULL, NULL, NULL, NULL),
(9, 2, '2022-07-30', NULL, '1659122365_per.jpg', '2022-07-29 11:06:52', '2022-07-29 12:19:49', 'Kep.250/87/100.04', NULL, NULL, '2022-07-30', '2022-08-06');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `id_berkas` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `stsek` int(11) DEFAULT 0,
  `stbid` int(11) DEFAULT 0,
  `stkep` int(11) DEFAULT 0,
  `ket` text DEFAULT NULL,
  `hal` varchar(255) DEFAULT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `id_user`, `id_berkas`, `status`, `stsek`, `stbid`, `stkep`, `ket`, `hal`, `bagian`, `alamat`, `created_at`, `updated_at`) VALUES
(5, 1, '5', 2, 0, 0, 0, 'adsasd', NULL, NULL, NULL, '2022-07-16 01:53:32', '2022-07-16 01:53:32'),
(8, 1, '6', 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-16 10:09:27', '2022-07-16 10:09:27'),
(10, 1, '6', 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-16 10:40:05', '2022-07-16 10:40:05'),
(11, 1, '6', 2, 0, 0, 0, 'Dihapus', '12', 'Pasal 10 Ayat 1', NULL, '2022-07-16 10:44:20', '2022-07-16 10:44:20'),
(12, 1, '6', 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-16 10:52:59', '2022-07-16 10:52:59'),
(16, 1, '6', 3, 1, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 09:27:10', '2022-07-29 09:27:10'),
(24, 3, '6', 3, 3, 1, 0, NULL, NULL, NULL, NULL, '2022-07-29 10:28:31', '2022-07-29 10:28:31'),
(26, 4, '6', 3, 3, 3, 1, NULL, NULL, NULL, NULL, '2022-07-29 10:36:35', '2022-07-29 10:36:35'),
(27, 5, '6', 3, 3, 3, 3, NULL, NULL, NULL, NULL, '2022-07-29 10:49:25', '2022-07-29 10:49:25'),
(31, 0, '8', 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:05:28', '2022-07-29 11:05:28'),
(32, 2, '9', 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:06:52', '2022-07-29 11:06:52'),
(33, 2, '9', 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:07:11', '2022-07-29 11:07:11'),
(34, 1, '9', 2, 0, 0, 0, '1', '1', '1', NULL, '2022-07-29 11:09:32', '2022-07-29 11:09:32'),
(35, 2, '9', 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:09:56', '2022-07-29 11:09:56'),
(43, 1, '9', 3, 1, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:27:27', '2022-07-29 11:27:27'),
(44, 3, '9', 3, 2, 0, 0, '1', '1', '1', NULL, '2022-07-29 11:27:38', '2022-07-29 11:27:38'),
(45, 2, '9', 3, 1, 0, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:28:02', '2022-07-29 11:28:02'),
(46, 3, '9', 3, 3, 1, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:28:16', '2022-07-29 11:28:16'),
(47, 4, '9', 3, 3, 2, 0, '1', '1', '1', NULL, '2022-07-29 11:36:11', '2022-07-29 11:36:11'),
(48, 2, '9', 3, 3, 1, 0, NULL, NULL, NULL, NULL, '2022-07-29 11:49:00', '2022-07-29 11:49:00'),
(49, 4, '9', 3, 3, 3, 1, NULL, NULL, NULL, NULL, '2022-07-29 11:49:34', '2022-07-29 11:49:34'),
(51, 5, '9', 3, 3, 3, 2, '1', '1', '1', NULL, '2022-07-29 11:51:45', '2022-07-29 11:51:45'),
(52, 2, '9', 3, 3, 3, 1, NULL, NULL, NULL, NULL, '2022-07-29 11:53:14', '2022-07-29 11:53:14'),
(53, 5, '9', 3, 3, 3, 3, NULL, NULL, NULL, NULL, '2022-07-29 11:53:58', '2022-07-29 11:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 'admin@gmail.com', '2022-07-16 08:27:26', '$2y$10$fRZ2XRUTob5Z/CbTUnwXCObmuVaZC0HohtWKT69qPXb4Gw.DRtvu6', NULL, NULL, NULL),
(2, 'CV. GEMILANG CAHAYA SEMESTA ABADI', 0, 'ayu@gmail.com', NULL, '$2y$10$uP1BKokcpkqzlKcDi33MqeB6Ei12Smloi4LqAfKG4Du9bedqeVUUu', NULL, '2022-07-16 09:49:36', '2022-07-16 09:49:36'),
(3, 'Kepala Seksi', 2, 'kepsek@gmail.com', NULL, '$2y$10$uP1BKokcpkqzlKcDi33MqeB6Ei12Smloi4LqAfKG4Du9bedqeVUUu', NULL, '2022-07-29 09:16:19', '2022-07-29 09:16:19'),
(4, 'Kepala Bidang', 3, 'kepbid@gmail.com', NULL, '$2y$10$7P2VRjnTq6MpjUJAd9lQFencaOGyQIQ1pjB2l/yDuLp7iizhwyg1W', NULL, '2022-07-29 10:23:15', '2022-07-29 10:23:15'),
(5, 'Kepala Dinas', 4, 'kepaladinas@gmail.com', NULL, '$2y$10$lY6we3CTsLgurwhQicPaqe.5hHia/RP8MM.hn7YygaIZ/HU5SIFNa', NULL, '2022-07-29 10:42:27', '2022-07-29 10:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `bidang` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `bidang`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Visi', '<p><strong><em>TERWUJUDNYA TENAGA KERJA DAN TRANSMIGRAN YANG MAJU DAN SEJAHTERA&nbsp;</em></strong></p>', '2022-07-29 08:18:27', '2022-07-29 08:28:12'),
(2, 'Misi', '<p>Meningkatkan Kualitas dan Produktivitas Tenaga Kerja melalui Pelatihan.<br>Meningkatkan Fasilitasi Penempatan dan Perluasan Kesempatan Kerja<br>Meningkatkan Perlindungan Tenaga Kerja melalui Pembinaan Hubungan Industrial dan Syarat Kerja serta Pembinaan Jaminan Sosial dan Kesejahteraan Tenaga Kerja.<br>Meningkatkan Kesiapan Calon Transmigran dan Pemberdayaan Kawasan Transmigrasi Lokal</p>', '2022-07-29 08:21:38', '2022-07-29 08:33:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

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
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `FK_berkas_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
