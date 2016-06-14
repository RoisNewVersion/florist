-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 12:19 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapemesanan`
--

CREATE TABLE `datapemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `produk_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `tgl_pengiriman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bunga Segar'),
(2, 'Bunga Kain'),
(3, 'Bunga Rangkaian'),
(4, 'Bunga  Standing'),
(5, 'Birthday'),
(6, 'Congaratulation'),
(7, 'Duka cita'),
(8, 'Wedding'),
(9, 'HOT');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `keterangan_bunga` varchar(150) NOT NULL,
  `kode_bunga` int(5) UNSIGNED NOT NULL,
  `harga_bunga` int(6) NOT NULL,
  `img` varchar(50) NOT NULL,
  `kategori_id` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `keterangan_bunga`, `kode_bunga`, `harga_bunga`, `img`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 'Karangan Bunga 1', 'Terbuat Dari Campuran Bunga Alami Yang Segar', 100, 20000, '1465591332.jpg', 4, '2016-06-07 10:30:31', '2016-06-14 10:00:51'),
(2, 'karangan bunga 2', 'Terbuat Dari Campuran Bunga Alami Yang Segar', 101, 20000, 'hand_bouquet2.jpg', 2, '2016-06-07 10:30:31', '2016-06-14 10:00:58'),
(3, 'karangan bunga 3', 'Terbuat Dari Campuran Bunga Alami Yang Segar', 102, 20000, 'hand_bouquet3.jpg', 3, '2016-06-07 10:30:31', '2016-06-14 10:01:03'),
(4, 'karangan bunga 4', 'Terbuat Dari Campuran Bunga Alami Yang Segar', 103, 20000, 'hand_bouquet4.jpg', 6, '2016-06-07 10:30:31', '2016-06-14 10:01:08'),
(5, 'karangan bunga 5', 'Terbuat Dari Campuran Bunga Alami Yang Segar', 104, 20000, 'hand_bouquet5.jpg', 8, '2016-06-07 10:30:31', '2016-06-14 10:01:13'),
(6, 'Karangan Bunga Segar Enyoi', 'Terbuat Dari Campuran Bunga Alami Yang Segar', 564, 25000, '1465778230.jpg', 1, '2016-06-12 17:37:10', '2016-06-13 00:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `user_level` int(1) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_level`, `name`, `email`, `password`, `remember_token`, `kota`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bella', 'ekabella@gmail.com', '$2y$10$.Php4p3AkD0R3XqbZuPHsOKwWXxXF1Xrypv/ekP5FpFsD1hn/PA6W', 'U0Tgjr7F3JPWFQoFsIwkHKOloPGq3Ch2UBunzTPuyA6NOiFkokCtbLuzHHLk', 'Kendal', 'Kendal City', '08985716073', '2016-06-07 07:42:15', '2016-06-11 06:20:43'),
(2, 1, 'Roisul', 'rois@gmail.com', '$2y$10$YMfaDNbTrFNProcssB7PmekiUeFxg0zVZlTFkGto8LTS8Xuh6/IoC', 'iO9gMC7XvYzKIq4XGuTseyRy7v5FeqVYjkcsejB6SIPaIrChFCLGMf5JQy2M', 'Demak', 'Demak City', '08985716073', '2016-06-07 08:29:30', '2016-06-12 17:34:35'),
(3, 1, 'Roisul Asolole', 'asolole@gmail.com', '$2y$10$zmUhsnXy2/SENiJQnPvjfexeW4MYgWU.MOhBAJX5kGenTbVW/V77e', 'YU2Iv5smbPZscKRnrmmFAu0qIsxFh79gwVDUUXAfcBueqi7xELyZoqU1t7IT', 'Semarang', 'Mburi USM', '1234567', '2016-06-09 06:52:50', '2016-06-09 08:41:29'),
(6, 1, 'Eko Hardiyanto', 'eko@gmail.com', '$2y$10$xcp/bNcmL1ND8a82MtZ7jel5vRAT6GTHEwD3oHzuRdfKff3InviUK', '', 'Demak', 'Demak Cedak Halte Buyaran', '1234567789', '2016-06-11 06:48:21', '2016-06-11 06:48:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapemesanan`
--
ALTER TABLE `datapemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_produk_kategori` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapemesanan`
--
ALTER TABLE `datapemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
