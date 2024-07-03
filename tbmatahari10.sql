-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2024 pada 22.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbmatahari10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `stok_barang` varchar(255) DEFAULT NULL,
  `foto_barang` varchar(255) DEFAULT NULL,
  `harga_ecer` varchar(255) DEFAULT NULL,
  `harga_grosir` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `kategori_id`, `supplier_id`, `kode_barang`, `stok_barang`, `foto_barang`, `harga_ecer`, `harga_grosir`, `created_at`, `updated_at`) VALUES
(1, 'Besi 6 Kecil', 3, 1, 'BE0601', '50', 'upload/barang/1802201895128339.png', '30000', '27000', '2024-06-29 15:47:41', '2024-06-29 15:47:41'),
(2, 'Besi 6 SNI', 3, 1, 'BE0602', '50', 'upload/barang/1803236762596040.png', '25000', '23000', '2024-06-29 15:47:57', '2024-06-29 15:47:57'),
(3, 'Besi 8 Kecil', 3, 1, 'BE0801', '50', NULL, '38000', '35000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(4, 'Besi 8 SNI', 3, 1, 'BE0802', '50', NULL, '48000', '44000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(5, 'Besi 8 TSN', 3, 1, 'BE0803', '50', NULL, '45000', '43000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(6, 'Besi 8 TSN Ulir', 3, 1, 'BE0804', '50', NULL, '46000', '43000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(7, 'Besi 10 Kecil', 3, 1, 'BE1001', '50', NULL, '60000', '55000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(8, 'Besi 10 SNI', 3, 1, 'BE1002', '50', NULL, '72000', '67000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(9, 'Besi 10 TSN', 3, 1, 'BE1003', '50', NULL, '67000', '61000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(10, 'Besi 10 TSN Ulir', 3, 1, 'BE1004', '50', NULL, '68000', '62000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(11, 'Besi 12 Kecil', 3, 1, 'BE1201', '50', NULL, '95000', '90000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(12, 'Besi 12 SNI', 3, 1, 'BE1202', '50', NULL, '110000', '102000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(13, 'Besi 13 Kecil Ulir', 3, 1, 'BE1303', '50', NULL, '119000', '112000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(14, 'Besi 13 SNI', 3, 1, 'BE1301', '50', NULL, '126000', '120000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(15, 'Besi 16 SNI Ulir', 3, 1, 'BE1602', '50', NULL, '200000', '192000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(16, 'Besi Hollow 4x2', 3, 1, 'BE9901', '50', NULL, '22000', '20000', '2024-06-29 15:59:24', '2024-06-29 15:59:24'),
(17, 'Besi Hollow 4x4', 3, 1, 'BE9902', '50', NULL, '30000', '27000', '2024-06-29 15:59:24', '2024-06-29 15:59:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Lain-lain', '2024-06-18 05:26:56', NULL),
(2, 'Perkakas', '2024-06-18 05:27:01', NULL),
(3, 'Besi', '2024-06-18 05:27:10', NULL),
(4, 'Cat', '2024-06-18 05:32:38', NULL),
(5, 'Pintu & Jendela', '2024-06-18 05:32:50', NULL),
(6, 'Keramik', '2024-06-18 05:33:00', NULL),
(7, 'Kamar Mandi', '2024-06-18 05:33:09', NULL),
(8, 'Pipa', '2024-06-18 05:33:19', NULL),
(9, 'Semen', '2024-06-18 05:33:42', NULL),
(10, 'Pasir', '2024-06-18 05:33:50', NULL),
(11, 'Batu Bata', '2024-06-18 05:33:57', NULL),
(12, 'Batu', '2024-06-18 05:34:03', NULL),
(13, 'Kayu', '2024-06-18 05:34:09', NULL),
(14, 'Triplek', '2024-06-18 05:34:18', NULL),
(15, 'Paku', '2024-06-18 05:34:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2024_05_29_140707_create_employees_table', 1),
(24, '2024_06_02_163039_create_customers_table', 1),
(25, '2024_06_02_212758_create_kategoris_table', 1),
(26, '2024_06_02_225331_create_suppliers_table', 1),
(27, '2024_06_09_031745_create_barangs_table', 1),
(28, '2024_06_18_181244_create_pengeluarans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengeluaran` text NOT NULL,
  `jumlah_pengeluaran` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `nama_pengeluaran`, `jumlah_pengeluaran`, `tanggal`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Listrik Toko', '500000', '18-06-2024', 'June', '2024', '2024-06-18 12:21:06', NULL),
(2, 'Solar Mobil 1', '200000', '22-06-2024', 'June', '2024', '2024-06-22 09:48:26', NULL),
(3, 'Solar mobil 2', '100000', '22-06-2024', 'June', '2024', '2024-06-22 09:51:07', NULL),
(4, 'Pembelian Besi 6 Kecil', '100000000', '23-06-2024', 'June', '2024', '2024-06-23 11:14:00', '2024-06-23 11:14:00'),
(5, 'Pembelian Besi 6 SNI', '100000000', '23-06-2024', 'June', '2024', '2024-06-23 11:14:08', '2024-06-23 11:14:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `jenis_supplier` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`, `email`, `phone`, `nama_toko`, `jenis_supplier`, `alamat`, `kota`, `bank`, `nama_rekening`, `nomor_rekening`, `image`, `created_at`, `updated_at`) VALUES
(1, 'suppliertest1', 'suppliertest1@gmail.com', '082411111111', 'suppliertokotest1', 'Distributor', 'supplieralamattest1', 'supplierkotatest1', 'supplierbanktest1', 'supplierrekeningtest1', '1234567890', NULL, '2024-06-18 05:22:10', '2024-06-18 05:22:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test1@gmail.com', NULL, '082111111111', '202406231502kementerian-komunikasi-dan-informasi-logo.png', '$2y$10$iFAqUxlGHf6ufaIqAeXfh.kqabJS6mPzUvi/Ct0tgjDsBISFoPv8S', NULL, '2024-06-18 05:20:59', '2024-06-23 08:02:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
