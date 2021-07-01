-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 03:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

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
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_pembeli` varchar(25) NOT NULL,
  `id_produk` varchar(25) NOT NULL,
  `total` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_pembeli`, `id_produk`, `total`, `jumlah`) VALUES
('2', 'ck0339', 300000, 1),
('4', 'ck0086', 500000, 1),
('4', 'ck0720', 300000, 1),
('4', 'ck0086', 500000, 1),
('2', 'ck0106', 235000, 1),
('2', 'ck0285', 50000, 1);

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
('ck0106', 'Chocolate grandy', 235000, 'Cake yang soft dan manis', 3, '1625112761_taylor-kiser-s7Vh1kg-clM-unsplash.jpg'),
('ck0140', 'Oreo Cupcake', 20000, 'Cupcake coklat dipadukan dengan biskuit oreo, rasanya ahhh mantaps!!', 8, '1625112242_aleksandra-tanasiienko-_Xy5WtRyu3w-unsplash.jpg'),
('ck0220', 'Rainbow Cake', 251000, 'Raindow Cream yang manis yuhu', 4, '1625114180_beautiful-cake-black-background_23-2147840416.jpg'),
('ck0285', 'Chinnamon Cookies', 50000, 'Cookies dengan rasa manis', 17, '1625113636_registrasi.jpg'),
('ck0540', 'Cupcake with creamy white', 123000, 'Cupcake yang soft dan manis', 17, '1625113512_ec6f6b7434f8f74fd63794a5194d24f2.jpg'),
('ck0837', 'Redvelvet Cupcake', 67000, 'Cupcake dengan rasa redelvet', 13, '1625113895_pmgrpwgg87dl70wpyp9n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_produk` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_user`, `id_produk`, `jumlah`, `total`, `pembayaran`, `status`, `tanggal`) VALUES
('TR-0027', '2', 'ck0339', 2, 600000, '1624351786_tf.jpeg', 'Di Terima', '2021-06-22'),
('TR-0027', '2', 'ck0086', 3, 1500000, '1624351786_tf.jpeg', 'Di Terima', '2021-06-22'),
('TR-0443', '2', 'ck0656', 3, 1200000, '1624377606_tf.jpeg', 'Di Terima', '2021-06-22'),
('TR-0302', '2', 'ck0086', 2, 1000000, '1624382072_tf.jpeg', 'Di Terima', '2021-06-22'),
('TR-0982', '5', 'ck0285', 1, 50000, '1625125593_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0517', '5', 'ck0106', 1, 235000, '1625127848_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0517', '5', 'ck0540', 3, 369000, '1625127848_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0517', '5', 'ck0837', 2, 134000, '1625127848_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0698', '5', 'ck0220', 1, 251000, '1625128621_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0698', '5', 'ck0140', 10, 200000, '1625128621_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0698', '5', 'ck0285', 5, 250000, '1625128621_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0422', '5', 'ck0285', 7, 350000, '1625129143_TF.jpeg', 'Di Terima', '2021-07-01'),
('TR-0474', '5', 'ck0220', 1, 251000, '1625141425_TF.jpeg', 'Di Terima', '2021-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `alamat`, `telp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, 'admin', 'nganjuk', '085735208487', '$2y$10$IOYbjbvEqPTUd7GlL6FkJeYNRr5wCqLB0xW8a6uAH4ZPUCcSUIMAq', NULL, NULL, NULL),
(2, 'user', 'user@user.com', NULL, 'user', 'Jombang', '085735208487', '$2y$10$.6l7LGr2WwAoLGlW113wKuOxYPxT9aNOBrchP9mtelqUrvkzwGE.C', NULL, NULL, NULL),
(5, 'Nara', 'nara@nara.com', NULL, 'user', 'Surabaya', '08543562781', '$2y$10$ig7.6xEvD6qLTuOzf5g.ee5USTphPvt4kAyinCemaKyzGAhyO6a4K', NULL, NULL, NULL);

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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
