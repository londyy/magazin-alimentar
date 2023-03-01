-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mart. 02, 2023 la 12:18 AM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `magazin-alimentar`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `categorii`
--

CREATE TABLE `categorii` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `imagine` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `categorii`
--

INSERT INTO `categorii` (`id`, `nume`, `imagine`) VALUES
(1, 'MEZELURI ŞI DELICATESE DIN CARNE', '1675439305.jpg'),
(2, 'PĂSĂRI ŞI CARNE PROASPĂTĂ', '1675440006.jpg'),
(3, 'PÂINE ŞI PRODUSE DE PANIFICAȚIE', '1675440727.jpg'),
(4, 'PRODUSE LACTATE ŞI OUĂ', '1675441118.jpg'),
(5, 'CAŞCAVAL', '1675454638.jpg'),
(6, 'DELICATESE DIN PEŞTE ŞI ICRE', '1675455024.jpg'),
(7, 'LEGUME FRUCTE VERDEAȚĂ', '1675455376.jpg'),
(8, 'FĂINĂ CRUPE ŞI PASTE', '1675455665.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `failed_jobs`
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
-- Structură tabel pentru tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_27_032752_creaza_categorii_tabel', 1),
(6, '2023_01_27_033340_creaza_tabelul_produse', 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `personal_access_tokens`
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
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `pret` double(8,2) DEFAULT NULL,
  `imagine` varchar(255) DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`id`, `nume`, `pret`, `imagine`, `categorie_id`, `created_at`, `updated_at`) VALUES
(3, 'Salam \'Mortadella\'', 133.60, '1675439828.jpg', 1, '2023-02-03 13:57:08', '2023-02-03 13:57:08'),
(4, 'Parizer \'De Gheottingher\'', 193.60, '1675439874.jpg', 1, '2023-02-03 13:57:54', '2023-02-03 13:57:54'),
(5, 'Salam \'De Varșovia\'', 150.60, '1675439937.jpg', 1, '2023-02-03 13:58:57', '2023-02-03 13:58:57'),
(7, 'Prepelițe marinate (1 buc ± 240 gr)', 209.60, '1675440271.jpg', 2, '2023-02-03 14:04:31', '2023-02-03 14:04:31'),
(8, 'Iepure', 172.00, '1675440385.jpg', 2, '2023-02-03 14:06:25', '2023-02-03 14:06:25'),
(9, 'Gulaș din carne de vită', 161.60, '1675440438.jpg', 1, '2023-02-03 14:07:18', '2023-02-03 14:07:18'),
(10, 'Antricot Ribeye din carne de vită marmorată „Black Angus” USA', 1440.60, '1675440497.jpg', 1, '2023-02-03 14:08:17', '2023-02-03 14:08:17'),
(11, 'Ceafă de Vită', 160.00, '1675440613.jpg', 1, '2023-02-03 14:10:13', '2023-02-03 14:10:13'),
(12, 'Baghet \'Francez\' ±240g', 13.00, '1675440833.jpg', 3, '2023-02-03 14:13:53', '2023-02-03 14:13:53'),
(13, 'Pâine \'Ciabatta Italiană\' ±300g', 20.00, '1675440884.jpg', 3, '2023-02-03 14:14:44', '2023-02-03 14:14:44'),
(14, 'Pâine \'Alpiischii\' ±315g', 21.60, '1675441188.jpg', 3, '2023-02-03 14:15:41', '2023-02-03 14:19:48'),
(15, 'Pâine pentru toast \'Dan Cake \' 750g', 58.60, '1675441225.jpg', 3, '2023-02-03 14:16:35', '2023-02-03 14:20:25'),
(16, 'Lavaș armenesc cu spanac \'Katifea-Lux\' 250g', 23.60, '1675441252.jpg', 3, '2023-02-03 14:17:19', '2023-02-03 14:20:52'),
(17, 'Iaurt fermentat 2,5% \'Lattese\' 290g', 28.00, '1675441352.jpg', 4, '2023-02-03 14:22:32', '2023-02-03 14:22:32'),
(18, 'Iaurt \"Micuțul-bio\" 3,5% 200 gr', 23.00, '1675454446.jpg', 4, '2023-02-03 18:00:46', '2023-02-03 18:00:46'),
(19, 'aurt de baut zmeura-rodie \'Activia\' 320 gr', 25.00, '1675454493.jpg', 4, '2023-02-03 18:01:33', '2023-02-03 18:01:33'),
(20, 'Mic Dejun \'ACTIVIA\' clasic cu fulgi de cereale 168g', 19.95, '1675454682.jpg', 4, '2023-02-03 18:02:12', '2023-02-03 18:04:42'),
(21, 'Ouă de gaină Premium \'Ovo Mia\' 10 buc', 47.99, '1675454714.jpg', 4, '2023-02-03 18:03:12', '2023-02-03 18:05:14'),
(22, 'Cașcaval \'Parmigiano Regiano\' DOP 30 luni', 820.00, '1675454773.png', 5, '2023-02-03 18:06:13', '2023-02-03 18:06:13'),
(23, 'Cașcaval \' Cambozola \'', 473.75, '1675454826.jpg', 5, '2023-02-03 18:07:06', '2023-02-03 18:07:06'),
(24, 'Cașcaval \'Emmentaler\'', 338.00, '1675454871.jpg', 5, '2023-02-03 18:07:51', '2023-02-03 18:07:51'),
(25, 'Mozzarella \'Sana\' 250g', 45.75, '1675454925.jpg', 5, '2023-02-03 18:08:45', '2023-02-03 18:08:45'),
(26, 'Cașcaval Kaserei Dorblu 100g', 39.60, '1675454973.jpg', 5, '2023-02-03 18:09:33', '2023-02-03 18:09:33'),
(27, 'Somon de afumare rece/feliat \'ATLANTIS\' 200g', 153.75, '1675455073.jpg', 6, '2023-02-03 18:11:13', '2023-02-03 18:11:13'),
(28, 'Somon sărat \'Русское море\' 300 gr', 273.60, '1675455164.jpg', 6, '2023-02-03 18:12:44', '2023-02-03 18:12:44'),
(29, 'Matias slab sărat \'ATLANTIS\' ± 500g', 135.60, '1675455209.jpg', 6, '2023-02-03 18:13:29', '2023-02-03 18:13:29'),
(30, 'Сaviar roșu granular de pește somon \'Aлый Жемчуг\' 100g', 350.60, '1675455258.jpg', 6, '2023-02-03 18:14:18', '2023-02-03 18:14:18'),
(31, 'Fileu bucați de hering cu masline \'Santa Bremor\' 500g', 85.00, '1675455328.png', 6, '2023-02-03 18:15:28', '2023-02-03 18:15:28'),
(32, 'Mintă, ambalată ± 50 gr', 27.60, '1675455446.jpg', 7, '2023-02-03 18:17:26', '2023-02-03 18:17:26'),
(33, 'Roșii \'Cherry\' pe crenguță ( ± 300 gr', 75.00, '1675455501.jpg', 7, '2023-02-03 18:18:21', '2023-02-03 18:18:21'),
(34, 'Сastraveți', 42.60, '1677705421.jpg', 7, '2023-02-03 18:18:57', '2023-03-01 19:17:01'),
(35, 'Conopidă (1 buc ± 500 gr)', 56.00, '1675455569.jpg', 7, '2023-02-03 18:19:29', '2023-02-03 18:19:29'),
(36, 'Ananas proaspăt ( 1 buc ± 1800 gr )', 52.80, '1675455617.jpg', 7, '2023-02-03 18:20:17', '2023-02-03 18:20:17'),
(37, 'Tăiței de casa cu oua de prepeliță 300 gr', 55.35, '1675455717.jpg', 8, '2023-02-03 18:21:57', '2023-02-03 18:21:57'),
(38, 'Paste mini Farfalle \'Barilla\' 500g', 38.79, '1675455761.jpg', 8, '2023-02-03 18:22:41', '2023-02-03 18:22:41'),
(39, 'Făină de ovaz \'Кудесница\' 400g', 23.60, '1675455811.jpg', 8, '2023-02-03 18:23:31', '2023-02-03 18:23:31'),
(40, 'Orez Jasmine \'Scotti\' 500g', 47.95, '1675455857.jpg', 8, '2023-02-03 18:24:17', '2023-02-03 18:24:17'),
(41, 'Griș \'ORA\' 1 kg', 14.40, '1675455906.jpg', 8, '2023-02-03 18:25:06', '2023-02-03 18:25:06'),
(42, 'prod 1', 123.00, '1675456460.jpg', 1, '2023-02-03 18:34:20', '2023-02-03 18:34:20'),
(43, 'asda', 213.00, '1675456581.jpg', 1, '2023-02-03 18:36:21', '2023-02-03 18:36:21'),
(44, 'produs test', 123.00, '1675522156.jpg', 1, '2023-02-04 12:49:16', '2023-02-04 12:49:16');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexuri pentru tabele `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexuri pentru tabele `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexuri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produse_categorie_id_foreign` (`categorie_id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `categorii`
--
ALTER TABLE `categorii`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `produse`
--
ALTER TABLE `produse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD CONSTRAINT `produse_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categorii` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
