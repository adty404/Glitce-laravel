-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2021 pada 08.05
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glitce_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destination`
--

CREATE TABLE `destination` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destination`
--

INSERT INTO `destination` (`id`, `ticket_id`, `name`, `slug`, `country`, `location`, `description`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mount Fuji', 'mount-fuji', 'Japan', 'Tokyo', 'Mount Fuji, Mount Fuji, Mount Fuji, Mount Fuji, Mount Fuji, Mount Fuji', 'assets/destination/DdsGYYz0yIaKeE30gMqc2MwIOnWS4x9lrIwQI0aT.jpg', NULL, '2021-07-31 10:20:56', '2021-07-31 10:23:39'),
(2, 2, 'Mariposa Grove', 'mariposa-grove', 'California', 'United States', 'Mariposa Grove, Mariposa Grove, Mariposa Grove, Mariposa Grove, Mariposa Grove,', 'assets/destination/ou1DCf0I1HZhIwD7eRi3qTlHzRIBb3HqYQNeDNkc.jpg', NULL, '2021-07-31 10:33:22', '2021-07-31 10:50:29'),
(3, 3, 'Warner Bros World Abu Dhabi', 'warner-bros-world-abu-dhabi', 'United Emirates Arab', 'Abu Dhabi', 'Warner Bros World Abu Dhabi, Warner Bros World Abu Dhabi, Warner Bros World Abu Dhabi,', 'assets/destination/SVZMpoJOueMeDj27J7rWIV2NKj79Wj0IIlvWAnYH.jpg', NULL, '2021-07-31 10:51:20', '2021-07-31 10:51:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_26_141341_create_order_table', 1),
(5, '2021_07_26_141748_create_ticket_table', 1),
(6, '2021_07_26_141820_create_payment_table', 1),
(7, '2021_07_26_141929_create_payment_slip_table', 1),
(8, '2021_07_26_142028_create_status_table', 1),
(9, '2021_07_26_142110_create_destination_table', 1),
(10, '2021_07_26_142239_create_testimonial_table', 1),
(11, '2021_08_04_141322_drop_ticket_id_column_on_order_table', 2),
(12, '2021_08_04_141816_add_destination_id_column_on_order_table', 3),
(13, '2021_08_04_152300_change_payment_slip_id_to_nullable', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_slip_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `destination_id`, `payment_id`, `payment_slip_id`, `status_id`, `order_number`, `name`, `id_card`, `email`, `phone_number`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2', 3, 'GLT-1628090952', 'Aditya Prasetyo', '78445963245', 'aditya@email.com', '081245457846', NULL, '2021-08-04 08:29:12', '2021-08-04 22:09:56'),
(2, 3, 3, '3', 3, 'GLT-1628142189', 'Test', '73571212432', 'test@order.com', '081285748212', NULL, '2021-08-04 22:43:09', '2021-08-04 22:52:43'),
(3, 1, 1, '5', 4, 'GLT-1628142872', 'Prasetyo', '775192873', 'prasetyo@order.com', '0124556669', NULL, '2021-08-04 22:54:32', '2021-08-04 23:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `payment`, `number`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BCA', '84277172', NULL, '2021-07-31 10:11:00', '2021-07-31 10:41:43'),
(2, 'BRI', '17747472232', NULL, '2021-07-31 10:11:16', '2021-07-31 10:11:16'),
(3, 'BNI', '4412321353', NULL, '2021-07-31 10:11:33', '2021-07-31 10:11:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_slip`
--

CREATE TABLE `payment_slip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payment_slip`
--

INSERT INTO `payment_slip` (`id`, `image`, `reason`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'assets/payment_slip/6SUEW4YclnIDPB41RTWQPDMFRvgF7EFNtYvF9NXv.jpg', 'a', '2021-08-04 19:50:31', '2021-08-04 19:50:31', '2021-08-04 19:50:31'),
(2, 'assets/payment_slip/HBArGlMalkWdJPdMZ6zw1TPGWhPAo3ZlAuMPND7Y.jpg', '', NULL, '2021-08-04 19:53:57', '2021-08-04 19:53:57'),
(3, 'assets/payment_slip/ItKLsay2YeF4GrCLsJR4XzsisH00fzouSkOA66iu.png', '', NULL, '2021-08-04 22:47:26', '2021-08-04 22:47:26'),
(4, 'assets/payment_slip/ZzuRFbzyNMdZQ56799NylEcxxxc6OfUqfxLQuq0P.png', 'not valid', '2021-08-04 22:58:24', '2021-08-04 22:57:01', '2021-08-04 22:58:24'),
(5, 'assets/payment_slip/YPNwlcLWRtXwyqk9KpF9QR3ROheFXtyFN1etGJFd.jpg', 'not valid', NULL, '2021-08-04 22:58:54', '2021-08-04 23:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Placed Order', NULL, '2021-07-31 10:11:58', '2021-07-31 10:41:07'),
(2, 'Verifying Payment', NULL, '2021-07-31 10:12:14', '2021-07-31 10:12:14'),
(3, 'Payment Verified', NULL, '2021-07-31 10:12:28', '2021-07-31 10:12:28'),
(4, 'Not Verified', NULL, '2021-07-31 10:14:11', '2021-07-31 10:14:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `testimonial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id`, `price`, `info`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '100000', 'Info tiket 1', NULL, '2021-07-31 10:09:48', '2021-07-31 10:09:48'),
(2, '200000', 'Info tiket 2', NULL, '2021-07-31 10:10:01', '2021-07-31 10:42:17'),
(3, '300000', 'Info tiket 3', NULL, '2021-07-31 10:10:18', '2021-08-04 08:30:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aditya Prasetyo', 'aditya@glitce.com', '2021-07-31 10:09:17', '$2y$10$QO.kXs.OjFfKeHKZRou5TOTiPqzy8/AHNoPE/.PHfgfzAxCS9qoaO', 'yh3o2H89q7OgJXUNJX59c4G5AMCHm7UxnPNLwz9GPOoLypew2lMrQ3sm8X9H', '2021-07-31 10:09:17', '2021-07-31 10:09:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment_slip`
--
ALTER TABLE `payment_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destination`
--
ALTER TABLE `destination`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `payment_slip`
--
ALTER TABLE `payment_slip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
