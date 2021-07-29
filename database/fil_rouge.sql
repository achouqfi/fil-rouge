-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juil. 2021 à 12:14
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `photo`, `title`, `text`, `created_at`, `updated_at`) VALUES
(2, 'storage/public/1626625461.png', 'Safi Garden (Le Jardin) Prévisio,,,,,,,ns de Surf et Surf Report (Central Morocco)', '<p><img src=\"https://assets.weather-forecast.com/maps/pda/p_Morocco.maxenergy.animated.cc23.gif\" alt=\"Morocco Énergie de la vague prévue dans 12h\"></p><p><strong>Énergie de Vague (puissance): 12h</strong></p><p>Utilisez les onglets ci-dessus pour voir la température de la mer à Safi Garden (Le Jardin), photos pour Safi Garden (Le Jardin), prévisions de houle détaillées pour Safi Garden (Le Jardin), prévisions de vent et météo, webcams pour Safi Garden (Le Jardin), conditions de vents en temps réel à partir des données de la station météo de Central Morocco et prévisions des marées pour Safi Garden (Le Jardin). Les cartes de houle pour Morocco afficheront une image agrandie de Morocco et des ses mers environnantes. Ces cartes de houles peuvent êtres animées pour montrer les différents composantes de houle, la hauteur, la période et l\'énergie des vagues avec les prévisions météo et prévisions de vent. Des observations en temps réel du temps et de l\'état de la mer sont fournies grâce aux bouées marines de Morocco, des navires de passages, et des stations météo côtières. Toutes les pages de prévisions pour ce spot de surf ont un Vagu-o-Mètre Local et Global pour facilement trouver les meilleurs spot de surf à proximité de Safi Garden (Le Jardin)</p>', '2021-07-18 10:32:14', '2021-07-18 15:24:21'),
(3, 'storage/images/1626608055.jpg', 'xxx', '<p>xx</p>', '2021-07-18 10:34:15', '2021-07-18 10:34:15'),
(4, 'storage/images/1626608380.png', 'sss', '<p>sss</p>', '2021-07-18 10:39:40', '2021-07-18 10:39:40'),
(9, 'storage/public/1626610273.jpg', 'qqqq', '<p>wwwwwwwwwwww</p>', '2021-07-18 11:11:13', '2021-07-18 11:11:13');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `prenom`, `email`, `message`, `created_at`, `updated_at`) VALUES
(3, 'AYOUB CHOUQFI', 'a.chouqfi@gmail.com', '0650407717', 'ssss', '2021-07-17 13:49:59', '2021-07-17 13:49:59'),
(4, 'jdiuhd', 'jnfj', 'cf', 'kkkkkkk', '2021-07-25 12:59:44', '2021-07-25 12:59:44');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2021_07_12_095912_create_contacts_table', 1),
(36, '2021_07_12_132704_create_ships_table', 1),
(39, '2021_07_15_150457_create_articles_table', 2),
(40, '2021_07_17_150335_create_shaps_table', 2),
(47, '2021_07_19_154941_create_comments_table', 3),
(48, '2021_07_27_131346_create_riads_table', 3),
(49, '2021_07_27_134244_create_photo_hotels_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photo_hotels`
--

CREATE TABLE `photo_hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pathPhoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `riads`
--

CREATE TABLE `riads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotelName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelAdresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoPrincipal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `shaps`
--

CREATE TABLE `shaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rocker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeOfWave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lenght` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thickness` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoreDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AYOUB CHOUQFI', 'a.chouqfi@gmail.com', NULL, 1, '$2y$10$ngRfk4v0JaTP2mMAdu6ycOasV3XSWx2PG/l8lEDovZNVpSVVoT3zO', NULL, '2021-07-14 10:15:14', '2021-07-14 10:15:14'),
(2, 'AYOUB', 'a@gmail.com', NULL, 0, '$2y$10$.jWUzTosqXRye2sC4awvy.jgTMsn0z9jrVnliSx50YG0Q9JmZNheG', NULL, '2021-07-14 10:22:45', '2021-07-14 10:22:45'),
(3, 'CHOUQFI', 'as@gmail.com', NULL, 0, '$2y$10$M78BmjldiMJ7s2Utn631g.ZPH4nBVTyle9ZI4lF9ylvYL3eRT7Yue', NULL, '2021-07-17 13:49:35', '2021-07-17 13:49:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `photo_hotels`
--
ALTER TABLE `photo_hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_hotels_riad_id_foreign` (`riad_id`);

--
-- Index pour la table `riads`
--
ALTER TABLE `riads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shaps`
--
ALTER TABLE `shaps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shaps_users_id_foreign` (`users_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `photo_hotels`
--
ALTER TABLE `photo_hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `riads`
--
ALTER TABLE `riads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `shaps`
--
ALTER TABLE `shaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `photo_hotels`
--
ALTER TABLE `photo_hotels`
  ADD CONSTRAINT `photo_hotels_riad_id_foreign` FOREIGN KEY (`riad_id`) REFERENCES `riads` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `shaps`
--
ALTER TABLE `shaps`
  ADD CONSTRAINT `shaps_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
