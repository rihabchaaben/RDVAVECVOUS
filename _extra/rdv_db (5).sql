-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2020 at 07:22 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agences`
--

DROP TABLE IF EXISTS `agences`;
CREATE TABLE IF NOT EXISTS `agences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_societe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demandeur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agences_demandeur_id_foreign` (`demandeur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `option_question_id` int(10) UNSIGNED NOT NULL,
  `proposition_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_option_question_id_foreign` (`option_question_id`),
  KEY `answers_proposition_id_foreign` (`proposition_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `note` int(11) NOT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `avis_demande_id_foreign` (`demande_id`),
  KEY `avis_professionnel_id_foreign` (`professionnel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
CREATE TABLE IF NOT EXISTS `billings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` int(11) NOT NULL,
  `creancier_id` int(10) UNSIGNED NOT NULL,
  `debiteur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `billings_creancier_id_foreign` (`creancier_id`),
  KEY `billings_debiteur_id_foreign` (`debiteur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardless`
--

DROP TABLE IF EXISTS `cardless`;
CREATE TABLE IF NOT EXISTS `cardless` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cardless_professionnel_id_foreign` (`professionnel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `ordering` int(11) NOT NULL,
  KEY `rdv_category_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `label`, `parent_id`, `ordering`) VALUES
(1, 'Construction de maison individuelle', 0, 0),
(2, 'Rénovation – TRAVAUX', 0, 0),
(3, 'ENTRETIEN', 0, 0),
(4, 'SOIN ET BEAUTE', 0, 0),
(5, 'Constructeur', 1, 0),
(6, 'Maître d’œuvre', 1, 0),
(7, 'Architecte', 1, 0),
(8, 'Peinture', 2, 0),
(9, 'Couverture - Toiture', 2, 0),
(10, 'Electricite générale', 2, 0),
(11, 'Architecte d\'interieur', 2, 0),
(12, 'Isolation de combles', 2, 0),
(13, 'Installation salle de bains', 2, 0),
(14, 'Pompe à chaleur', 2, 0),
(15, 'Terrassement', 2, 0),
(16, 'Ravalement de façade', 2, 0),
(17, 'Pose carrelage', 2, 0),
(18, 'Climatisation réversible', 2, 0),
(19, 'Installation cuisine', 2, 0),
(20, 'Plaques de plâtre (placo)', 2, 0),
(21, 'Plomberie', 2, 0),
(22, 'Elagage - Débroussaillage', 3, 0),
(23, 'Entretien jardin', 3, 0),
(25, 'Esthétisme', 4, 0),
(26, 'Onglerie', 4, 0),
(27, 'Pose dressing', 2, 0),
(38, 'DEPANNAGE', 0, 0),
(43, 'Dépannage Informatique', 38, 0),
(44, 'Dépannage Electro-ménager', 38, 0),
(45, 'Dépannage serrurerie', 38, 0),
(46, 'Dépannage plomberie', 38, 0),
(48, 'Construction bois', 1, 0),
(49, 'SERVICES', 0, 0),
(50, 'Service de  nettoyage - ménage', 49, 0),
(51, 'Garde d \'enfants', 49, 0),
(52, 'Menuiserie', 2, 0),
(55, 'Massages', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_professionnel`
--

DROP TABLE IF EXISTS `categorie_professionnel`;
CREATE TABLE IF NOT EXISTS `categorie_professionnel` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_professionnel_professionnel_id_foreign` (`professionnel_id`),
  KEY `categorie_professionnel_categorie_id_foreign` (`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `citations`
--

DROP TABLE IF EXISTS `citations`;
CREATE TABLE IF NOT EXISTS `citations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citations`
--

INSERT INTO `citations` (`id`, `text`, `annee`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Le temps fournira les moyens.', 1826, 'Proverbe italien', '2020-02-11 18:50:19', '2020-02-11 18:50:19'),
(2, 'Ce qu\'on ne fait pas, le temps le fait.', 1827, 'Proverbe français', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(3, 'Temps qui se lève la nuit, dure peu quand le jour luit', 1985, 'Proverbe normand', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(4, 'Le ciel rouge à la fin du jour, du beau temps prédit le retour.', 1822, 'Proverbe cévenol', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(5, 'Il faut prendre le temps comme il vient, les hommes pour ce qu\'ils sont, et l\'argent pour ce qu\'il vaut.', 1864, 'Proverbe cévenol', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(6, 'Si nous tuons le temps, celui-ci nous le rend bien.', 1853, 'Proverbe français', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(7, 'N\'emploie pas si mal ton temps, que tu fasses des mécontents.', 1853, 'Proverbe français', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(8, 'Avec de la paille et du temps, les nèfles blettissent.', 1664, 'Proverbe français', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(9, 'Le temps est le meilleur bâtisseur de l\'amitié.', 1670, 'Blaise Pascal', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(10, 'Le temps passe, d\'accord ! Mais il n\'a pas de mérite, il n\'a que ça à faire.', 1994, 'Tahar Ben Jelloun', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(11, 'Le temps n\'endort pas les grandes douleurs, mais il les assoupit.', 2006, 'Grégoire Lacroix', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(12, 'Le temps n\'est pas maître de notre destin, il n\'en est que le comptable.', 1855, 'George Sand', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(13, 'Le temps est la caisse, l\'ordre est le caissier.', 2013, 'Grégoire Lacroix', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(14, 'Le temps n\'a point d\'ailes pour le captif.', 1913, 'Anne Barratin', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(15, 'Le temps ronge l\'acier et met le marbre en poudre.', 1823, 'Étienne de Jouy', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(16, 'Le temps passe par le trou de l\'aiguille des heures.', 1800, 'Pierre-Claude-Victor Boiste', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(17, 'Le temps est la plus précieuse des propriétés, rien ne saurait le racheter.', 1900, 'Jules Renard', '2020-02-11 18:50:20', '2020-02-11 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `creanciers`
--

DROP TABLE IF EXISTS `creanciers`;
CREATE TABLE IF NOT EXISTS `creanciers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `creanciers`
--

INSERT INTO `creanciers` (`id`, `ics`, `nom`, `adress`, `ville`, `cp`, `pays`, `created_at`, `updated_at`) VALUES
(1, 'FR23ZZZ866873', 'IAMB', '15 RUE DES GERBIERS', 'ST GENIES BELLEVUE', '31180', 'FRANCE', '2020-02-11 18:50:20', '2020-02-11 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `debiteurs`
--

DROP TABLE IF EXISTS `debiteurs`;
CREATE TABLE IF NOT EXISTS `debiteurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_jacent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `type_devis` int(11) DEFAULT NULL,
  `type_commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `demandeur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demandes_ville_id_foreign` (`ville_id`),
  KEY `demandes_categorie_id_foreign` (`categorie_id`),
  KEY `demandes_demandeur_id_foreign` (`demandeur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demandeurs`
--

DROP TABLE IF EXISTS `demandeurs`;
CREATE TABLE IF NOT EXISTS `demandeurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demandeurs_ville_id_foreign` (`ville_id`),
  KEY `demandeurs_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demande_files`
--

DROP TABLE IF EXISTS `demande_files`;
CREATE TABLE IF NOT EXISTS `demande_files` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demande_files_demande_id_foreign` (`demande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demande_files_demandes`
--

DROP TABLE IF EXISTS `demande_files_demandes`;
CREATE TABLE IF NOT EXISTS `demande_files_demandes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `demande_file_id` int(10) UNSIGNED NOT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demande_files_demandes_demande_file_id_foreign` (`demande_file_id`),
  KEY `demande_files_demandes_demande_id_foreign` (`demande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
CREATE TABLE IF NOT EXISTS `designations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` double(8,2) NOT NULL,
  `prix_unitaire` double(8,2) NOT NULL,
  `devis_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `designations_devis_id_foreign` (`devis_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `proposition_id` int(10) UNSIGNED NOT NULL,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `montant` double(8,2) NOT NULL,
  `tax` double(8,2) NOT NULL,
  `valable_until` date NOT NULL,
  `condition_paiement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `devis_proposition_id_foreign` (`proposition_id`),
  KEY `devis_professionnel_id_foreign` (`professionnel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` timestamp NOT NULL,
  `end_date` timestamp NOT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_demande_id_foreign` (`demande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `montant` double(8,2) NOT NULL,
  `quantite` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `factures_professionnel_id_foreign` (`professionnel_id`),
  KEY `factures_demande_id_foreign` (`demande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kbis`
--

DROP TABLE IF EXISTS `kbis`;
CREATE TABLE IF NOT EXISTS `kbis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kbis_professionnel_id_foreign` (`professionnel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readed_at` datetime DEFAULT NULL,
  `proposition_id` int(10) UNSIGNED NOT NULL,
  `from_id` int(10) UNSIGNED NOT NULL,
  `to_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_proposition_id_foreign` (`proposition_id`),
  KEY `messages_from_id_foreign` (`from_id`),
  KEY `messages_to_id_foreign` (`to_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_18_071213_create_villes_table', 1),
(4, '2019_04_18_071245_create_categories_table', 1),
(5, '2019_04_18_071258_create_demandeurs_table', 1),
(6, '2019_04_18_071317_create_professionnels_table', 1),
(7, '2019_04_18_071332_create_documents_table', 1),
(8, '2019_04_18_071346_create_factures_table', 1),
(9, '2019_04_18_071414_create_vendeurs_table', 1),
(10, '2019_04_18_071442_create_demandes_table', 1),
(11, '2019_07_30_151141_create_events_table', 1),
(12, '2019_09_09_210735_create_demandes_files_table', 1),
(13, '2019_09_09_211429_create_demandes_files_demandes_table', 1),
(14, '2019_09_10_132633_create_devis_table', 1),
(15, '2019_09_17_150725_create_vip_professionnel_table', 1),
(16, '2019_09_18_184135_create_categories_has_professionnels_table', 1),
(17, '2019_09_18_195844_create_avis_table', 1),
(18, '2019_09_18_234538_create_propositions_table', 1),
(19, '2019_09_19_000701_create_messages_table', 1),
(20, '2019_09_21_152114_create_zone_de_travailles_table', 1),
(21, '2019_09_28_120344_create_permission_tables', 1),
(22, '2019_10_20_092432_create_table_special_demandes', 1),
(23, '2019_10_27_200929_create_promo_payments', 1),
(24, '2019_10_27_202851_create_vendeurs_professionnels', 1),
(25, '2019_10_27_203155_create_vendeur_professionnel', 1),
(26, '2019_10_27_203430_create_professionnel_vendeur', 1),
(27, '2019_10_28_160205_add_demande_id_to_demande_files_table', 1),
(28, '2019_11_04_225758_table_kbis', 1),
(29, '2019_11_18_144426_create_cardless_table', 1),
(30, '2019_11_22_101214_create_agences_table', 1),
(31, '2019_12_17_124156_add_column_siret_to_professionnels_table', 1),
(32, '2019_12_17_124604_add_column_tva_to_professionnels_table', 1),
(33, '2019_12_21_132605_create_designations_table', 1),
(34, '2020_01_07_210533_create_notifications_table', 1),
(35, '2020_01_09_092251_create_table_citations', 1),
(36, '2020_01_09_104311_professionnel_citations_table', 1),
(37, '2020_01_09_111449_questionnaires_table', 1),
(38, '2020_01_09_111525_questions_table', 1),
(39, '2020_01_09_111606_option_questions_table', 1),
(40, '2020_01_09_165922_answers_table', 1),
(41, '2020_01_28_105150_creanciers_table', 1),
(42, '2020_01_28_105313_debiteurs_tables', 1),
(43, '2020_01_28_105344_billings_table', 1),
(44, '2020_02_11_190524_add_coulumn_nom_assurance_to_professionnels', 2),
(45, '2020_02_11_191704_add_coulumn_description_garantie_to_professionnels', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `notifiable_id` int(11) NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `readed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `option_questions`
--

DROP TABLE IF EXISTS `option_questions`;
CREATE TABLE IF NOT EXISTS `option_questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `option_questions_question_id_foreign` (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_questions`
--

INSERT INTO `option_questions` (`id`, `text`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 'oui', 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(2, 'non', 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(3, 'oui', 2, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(4, 'non', 2, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(5, 'oui', 3, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(6, 'peut-être', 3, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(7, 'pas du tout', 3, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(8, 'satisfait', 4, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(9, 'moyen', 4, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(10, 'je ne suis pas satisfait', 4, '2020-02-11 18:50:20', '2020-02-11 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professionnels`
--

DROP TABLE IF EXISTS `professionnels`;
CREATE TABLE IF NOT EXISTS `professionnels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_societe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `siret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_assurance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_garantie` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `professionnels_ville_id_foreign` (`ville_id`),
  KEY `professionnels_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professionnel_citations`
--

DROP TABLE IF EXISTS `professionnel_citations`;
CREATE TABLE IF NOT EXISTS `professionnel_citations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionnel_citations`
--

INSERT INTO `professionnel_citations` (`id`, `text`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Les plus belles réussites ont bien souvent été précédées par de nombreux échecs.', 'Robert Sabatier', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(2, 'L\'honneur s\'acquiert par l\'accomplissement de nos devoirs et nos réussites, et non par la fonction.', 'Francis Bacon', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(3, ' La peur de l\'échec enterre la réussite.', 'Francis Bacon ', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(4, 'La réussite nous rend plus exigeants que justes.', 'Robert Sabatier', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(5, 'C\'est le propre d\'un sot de ne jamais désespérer de la réussite d\'une entreprise tant qu\'il lui reste une occasion de commettre de nouvelles sottises.', 'Anne Barratin', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(6, 'Persévère dans l\'échec, et sois toujours modeste dans la réussite.', 'Hyacinthe de Charencey', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(7, 'L\'honneur qui s\'acquiert vient à nous par nos réussites et nos résultats dans nos propres entreprises.', 'Stanislas Leszczynski', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(8, 'La modération a du bon en tout, surtout dans la réussite.', 'Francis Bacon', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(9, 'Après le travail vient l\'argent et le repos.', 'Chauvot de Beauchêne', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(10, 'Beau est le travail fait avec lenteur.', 'Proverbe espagnol', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(11, 'Le travail au présent, l\'espoir à l\'avenir.', 'Proverbe basque', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(12, 'Travail : Ne perdez pas de temps, soyez toujours occupé à quelque chose d\'utile. Supprimez tout ce qui n\'est pas nécessaire.', 'Proverbe français', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(13, 'Le travail n\'est pas seulement une nécessité, il est aussi un besoin métaphysique de l\'homme. Travailler beaucoup, pour en être beaucoup récompensé, est une forme d\'héroïsme pacifique.', 'Benjamin Franklin', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(14, 'Tout travail suivi fait paraître une aptitude.', 'Jean Dutourd ', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(15, 'Si l\'homme se résigne au travail c\'est qu\'il pense que ce travail un jour aura sa récompense.', 'Alain', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(16, 'La tempérance et le travail sont les meilleurs médecins de l\'homme.', 'Publilius Syrus', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(17, 'Malheureux celui qui ne connaît pas le charme du travail ! il ne connaîtra que trop tôt le dégoût des plaisirs.', 'Jean-Jacques Rousseau', '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(18, 'À force de travail et de recherches on atteint la perfection.', 'François Gaston de Lévis', '2020-02-11 18:50:20', '2020-02-11 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `professionnel_vendeur`
--

DROP TABLE IF EXISTS `professionnel_vendeur`;
CREATE TABLE IF NOT EXISTS `professionnel_vendeur` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `vendeur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `professionnel_vendeur_professionnel_id_foreign` (`professionnel_id`),
  KEY `professionnel_vendeur_vendeur_id_foreign` (`vendeur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo_payments`
--

DROP TABLE IF EXISTS `promo_payments`;
CREATE TABLE IF NOT EXISTS `promo_payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `proposition_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `promo_payments_professionnel_id_foreign` (`professionnel_id`),
  KEY `promo_payments_proposition_id_foreign` (`proposition_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propositions`
--

DROP TABLE IF EXISTS `propositions`;
CREATE TABLE IF NOT EXISTS `propositions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `propositions_professionnel_id_foreign` (`professionnel_id`),
  KEY `propositions_demande_id_foreign` (`demande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

DROP TABLE IF EXISTS `questionnaires`;
CREATE TABLE IF NOT EXISTS `questionnaires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questionnaires`
--

INSERT INTO `questionnaires` (`id`, `nom`, `type`, `created_at`, `updated_at`) VALUES
(1, 'mission accomplis', 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `questionnaire_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_questionnaire_id_foreign` (`questionnaire_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `type`, `questionnaire_id`, `created_at`, `updated_at`) VALUES
(1, 'Avez vous été satisfait par la qualité  d’écoute', 1, 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(2, 'A-t-il su répondre à vos interrogations', 2, 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(3, 'Si le devis que vous recevrez vous convient, aimeriez-vous travailler avec', 3, 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20'),
(4, 'Vous etes satisfait de notre service', 4, 1, '2020-02-11 18:50:20', '2020-02-11 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-02-11 18:50:19', '2020-02-11 18:50:19'),
(2, 'professionnel', 'web', '2020-02-11 18:50:19', '2020-02-11 18:50:19'),
(3, 'demandeur', 'web', '2020-02-11 18:50:19', '2020-02-11 18:50:19'),
(4, 'vendeur', 'web', '2020-02-11 18:50:19', '2020-02-11 18:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `special_demandes`
--

DROP TABLE IF EXISTS `special_demandes`;
CREATE TABLE IF NOT EXISTS `special_demandes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `demande_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `special_demandes_professionnel_id_foreign` (`professionnel_id`),
  KEY `special_demandes_demande_id_foreign` (`demande_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `last_login`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Linwood Langosh', 'hessel.deron@example.net', '2020-02-11 18:50:19', NULL, '$2y$10$QXC0tXSdZThSuFmJQewNfeoK2bYcqZ0XG4mgEMg5Tt8czSvKcrXWS', 2, 'xOLxcni4i2', '2020-02-11 18:50:19', '2020-02-11 18:50:19'),
(2, 'Lilly Gibson', 'eturcotte@example.net', '2020-02-11 18:50:19', NULL, '$2y$10$H41/0jVSg8Z/90EjQCG0qO5fBapyuHVh/QoMa0mQCtP.2cYZUi5zy', 2, 'fjigMh4bTX', '2020-02-11 18:50:19', '2020-02-11 18:50:19'),
(3, 'Audrey Douglas', 'whitney92@example.org', '2020-02-11 18:50:19', NULL, '$2y$10$MmoZ9wOXkK8Gj.ZPWfagDeyXud9FkrLpfKgvQjReDxsg9dn7BQTO2', 2, '6v4gqip7ln', '2020-02-11 18:50:19', '2020-02-11 18:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_promo` int(11) NOT NULL,
  `ville_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendeurs_ville_id_foreign` (`ville_id`),
  KEY `vendeurs_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendeurs_professionnels`
--

DROP TABLE IF EXISTS `vendeurs_professionnels`;
CREATE TABLE IF NOT EXISTS `vendeurs_professionnels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `vendeur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendeurs_professionnels_professionnel_id_foreign` (`professionnel_id`),
  KEY `vendeurs_professionnels_vendeur_id_foreign` (`vendeur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendeur_professionnel`
--

DROP TABLE IF EXISTS `vendeur_professionnel`;
CREATE TABLE IF NOT EXISTS `vendeur_professionnel` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `professionnel_id` int(10) UNSIGNED NOT NULL,
  `vendeur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendeur_professionnel_professionnel_id_foreign` (`professionnel_id`),
  KEY `vendeur_professionnel_vendeur_id_foreign` (`vendeur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `asciiname` varchar(200) DEFAULT NULL,
  `alternatenames` varchar(5000) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `feature class` char(1) DEFAULT NULL,
  `feature code` varchar(10) DEFAULT NULL,
  `country code` char(2) DEFAULT NULL,
  `cc2` char(60) DEFAULT NULL,
  `admin1 code` varchar(20) DEFAULT NULL,
  `admin2 code` varchar(80) DEFAULT NULL,
  `admin3 code` varchar(20) DEFAULT NULL,
  `admin4 code` varchar(20) DEFAULT NULL,
  `population` bigint(20) DEFAULT NULL,
  `elevation` int(11) DEFAULT NULL,
  `gtopo30` int(11) DEFAULT NULL,
  `timezone` varchar(100) DEFAULT NULL,
  `modification date` date DEFAULT NULL,
  `adm1` int(11) DEFAULT NULL,
  `adm2` int(11) DEFAULT NULL,
  `adm4` int(11) DEFAULT NULL,
  `zip` varchar(200) DEFAULT NULL,
  KEY `name` (`name`,`zip`(50))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id`, `name`, `asciiname`, `alternatenames`, `latitude`, `longitude`, `feature class`, `feature code`, `country code`, `cc2`, `admin1 code`, `admin2 code`, `admin3 code`, `admin4 code`, `population`, `elevation`, `gtopo30`, `timezone`, `modification date`, `adm1`, `adm2`, `adm4`, `zip`) VALUES
(2967196, 'Département des Yvelines', 'Departement des Yvelines', 'Departement des Yvelines,Département des Yvelines,Yvelines', '48.7833300', '1.8666700', 'A', 'ADM2', 'FR', '', '11', '78', '', '', 1433447, 0, 110, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2967222, 'Département de l\'Yonne', 'Departement de l\'Yonne', 'Departement de l\'Yonne,Département de l\'Yonne,Yonne', '47.9166700', '3.7500000', 'A', 'ADM2', 'FR', '', '27', '89', '', '', 354282, 0, 124, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2967681, 'Département des Vosges', 'Departement des Vosges', 'Departement des Vosges,Département des Vosges,Vogezen,Vosges,Vosgi,Vosgos', '48.1666700', '6.3333300', 'A', 'ADM2', 'FR', '', '44', '88', '', '', 393474, 0, 402, 'Europe/Paris', '2016-02-21', NULL, NULL, NULL, NULL),
(2968577, 'Villeneuve-d\'Ascq', 'Villeneuve-d\'Ascq', 'Lungsod ng Villeneuve-d\'Ascq,Vil\'nev-d\'Ask,Vil\'njov-d\'Ask,Villeneuve d\'Ascq,Villeneuve-d\'Ascq,Viln\'ov d\'Ask,Vilnev Dask,Вилнев Даск,Вилньов д\'Аск,Вильнёв-д\'Аск,Вільнев-д\'Аск,ヴィルヌーヴ・ダスク', '50.6227800', '3.1441700', 'A', 'ADM4', 'FR', '', '32', '59', '595', '59009', 63844, 0, 31, 'Europe/Paris', '2016-02-18', 11071624, 2990129, NULL, '59493,59491,59650'),
(2968815, 'Paris', 'Paris', 'Departement de Paris,Département de Paris,Parigi,Paris,Paris Department', '48.8534000', '2.3486000', 'A', 'ADM2', 'FR', '', '11', '75', '', '', 2257981, 0, 35, 'Europe/Paris', '2016-06-17', NULL, NULL, NULL, '75000,75001,75002,75003,75004,75005,75006,75007,75008,75009,75010,75011,75012,75013,75014,75015,75116,75016,75017,75018,75019,75020'),
(2969280, 'Département de la Vienne', 'Departement de la Vienne', 'Departement de la Vienne,Département de la Vienne,Viena,Vienne', '46.5000000', '0.5000000', 'A', 'ADM2', 'FR', '', '75', '86', '', '', 437411, 0, 127, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(2970140, 'Département de la Vendée', 'Departement de la Vendee', 'Departement de la Vendee,Département de la Vendée,Vandea,Vendea,Vendee,Vendée', '46.6666700', '-1.3333300', 'A', 'ADM2', 'FR', '', '52', '85', '', '', 645820, 0, 87, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(2970554, 'Département du Vaucluse', 'Departement du Vaucluse', 'Vaucluse', '44.0000000', '5.1666700', 'A', 'ADM2', 'FR', '', '93', '84', '', '', 551922, 0, 254, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2970749, 'Département du Var', 'Departement du Var', 'Departement du Var,Département du Var,Var', '43.5000000', '6.3333300', 'A', 'ADM2', 'FR', '', '93', '83', '', '', 1025201, 0, 234, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2971071, 'Département du Val-d’Oise', 'Departement du Val-d\'Oise', 'Departement du Val-d\'Oise,Département du Val-d\'Oise,Département du Val-d’Oise,Val d\'Oise,Val-d\'Oise,Valle de Oise', '49.0666700', '2.0666700', 'A', 'ADM2', 'FR', '', '11', '95', '', '', 1185379, 0, 77, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2971090, 'Département du Val-de-Marne', 'Departement du Val-de-Marne', 'Departement du Val-de-Marne,Département du Val-de-Marne,Val-de-Marne,Valle de Marne', '48.7833300', '2.4500000', 'A', 'ADM2', 'FR', '', '11', '94', '', '', 1331443, 0, 37, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2973014, 'Bitschwiller-lès-Thann', 'Bitschwiller-les-Thann', 'Bitschweiler,Bitshviler le Tan,Bitshviller-le-Tan,Bitshviller-le-Tann,bi te si ke wei lai lai tang,Битшвилер ле Тан,Битшвиллер-ле-Тан,Битшвиллер-ле-Танн,Бітшвіллер-ле-Танн,比特斯克维莱莱唐', '47.8302800', '7.0802800', 'A', 'ADM4', 'FR', '', '44', '68', '686', '68040', 2073, 0, 358, 'Europe/Paris', '2016-02-18', 11071622, 3013663, NULL, '68620'),
(2973357, 'Département du Tarn-et-Garonne', 'Departement du Tarn-et-Garonne', 'Tarn y Garona,Tarn-et-Garonne', '44.0000000', '1.1666700', 'A', 'ADM2', 'FR', '', '76', '82', '', '', 245857, 0, 78, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2973362, 'Département du Tarn', 'Departement du Tarn', 'Departement du Tarn,Département du Tarn,Tarn', '43.8333300', '2.0000000', 'A', 'ADM2', 'FR', '', '76', '81', '', '', 385722, 0, 205, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2974304, 'Département de la Somme', 'Departement de la Somme', 'Departement de la Somme,Département de la Somme,Soma,Somme', '49.9166700', '2.5000000', 'A', 'ADM2', 'FR', '', '32', '80', '', '', 582469, 0, 31, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2975246, 'Département de Seine-Saint-Denis', 'Departement de Seine-Saint-Denis', 'Departement de Seine-Saint-Denis,Département de Seine-Saint-Denis,Seine st denis,Seine-Saint-Denis,Sena Saint Denis', '48.9166700', '2.5000000', 'A', 'ADM2', 'FR', '', '11', '93', '', '', 1528413, 0, 53, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2975248, 'Département de la Seine-Maritime', 'Departement de la Seine-Maritime', 'Departement de la Seine-Maritime,Département de la Seine-Maritime,Seine-Inferieure,Seine-Inférieure,Seine-Maritime,Sena Maritimo,Sena Marítimo,Senna marittima', '49.7500000', '1.0000000', 'A', 'ADM2', 'FR', '', '28', '76', '', '', 1275483, 0, 125, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2975249, 'Département de Seine-et-Marne', 'Departement de Seine-et-Marne', 'Departement de Seine-et-Marne,Département de Seine-et-Marne,Seine-et-Marne,Sena y Marne', '48.5000000', '3.0000000', 'A', 'ADM2', 'FR', '', '11', '77', '', '', 1335284, 0, 126, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2975517, 'Département de la Savoie', 'Departement de la Savoie', 'Departement de la Savoie,Département de la Savoie,Saboia,Saboya,Sabóia,Savoia,Savoie,Savojo,Savoy,Savoya', '45.5000000', '6.4166700', 'A', 'ADM2', 'FR', '', '84', '73', '', '', 424578, 0, 1427, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2975926, 'Département de la Sarthe', 'Departement de la Sarthe', 'Departement de la Sarthe,Département de la Sarthe,Sarthe', '48.0000000', '0.0833300', 'A', 'ADM2', 'FR', '', '52', '72', '', '', 576741, 0, 68, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2976082, 'Département de Saône-et-Loire', 'Departement de Saone-et-Loire', 'Departement de Saone-et-Loire,Département de Saône-et-Loire,Saona y Loira,Saone-et-Loire,Saône-et-Loire', '46.6666700', '4.5000000', 'A', 'ADM2', 'FR', '', '27', '71', '', '', 574002, 0, 376, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2984885, 'Département des Pyrénées-Orientales', 'Departement des Pyrenees-Orientales', 'Departament dels Pirineus Orientals,Departement des Pyrenees-Orientales,Département des Pyrénées-Orientales,Pirenei Orientali,Pirineos Orientales,Pirineus Orientais,Pyrenees-Orientales,Pyrenes-Orientales,Pyrénées-Orientales,Pyrénés-Orientales', '42.5000000', '2.3333300', 'A', 'ADM2', 'FR', '', '76', '66', '', '', 454737, 0, 1699, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2984887, 'Département des Pyrénées-Atlantiques', 'Departement des Pyrenees-Atlantiques', 'Bosse-Atlantiques,Departement des Basses-Pyrenees,Departement des Pyrenees-Atlantiques,Département des Basses-Pyrénées,Département des Pyrénées-Atlantiques,Pirenei atlantici,Pireneus-Atlantics,Pirenèus-Atlantics,Pirineos Atlanticos,Pirineos Atlánticos,Pirineus Atlanticos,Pirineus Atlânticos,Pirinio-Atlantiarrak,Pyrenees-Atlantiques,Pyrénées-Atlantiques', '43.2500000', '-0.8333300', 'A', 'ADM2', 'FR', '', '75', '64', '', '', 671644, 0, 240, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(2984986, 'Département du Puy-de-Dôme', 'Departement du Puy-de-Dome', 'Departement du Puy-de-Dome,Département du Puy-de-Dôme,Puy de Dome,Puy-de-Dome,Puy-de-Dôme', '45.6666700', '3.0000000', 'A', 'ADM2', 'FR', '', '84', '63', '', '', 646908, 0, 832, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2985244, 'Provence-Alpes-Côte d\'Azur', 'Provence-Alpes-Cote d\'Azur', 'Provans — Al\'py — Lazurnyj Bereg,Provans-Alpi-Lazuren brjag,Provansa-Alpe-Azurna obala,Provansa-Alpi-Azurna obala,Provansas-Alpes-Zydrasis Krantas,Provansas-Alpės-Žydrasis Krantas,Provenca – Alps – Costa Blava,Provenca-Alpes-Costa Azul,Provenca-Aups-Costa d\'Azur,Provence-Alpes-Cote d\'Azur,Provence-Alpes-Cote d\'Azur Region,Provence-Alpes-Côte d\'Azur,Provence-Alpes-Côte d\'Azur Region,Provence-Alpes-Côte d’Azur,Provence-Arpes-Couta d\'Azur,Provence-Arpes-Couta d’Azur,Provenco Alpi Azur-Rivo,Provenco-Alpoj-Bordo Lazura,Proventa-Alpi-Coasta de Azur,Proventza-Alpeak-Cote d\'Azur,Provenza-Alpes-Costa Azul,Provenza-Alpi-Costa Azzurra,Provença – Alps – Costa Blava,Provença-Alpes-Costa Azul,Provença-Aups-Còsta d\'Azur,Provența-Alpi-Coasta de Azur,Prowansja-Alpy-Lazurowe Wybrzeze,Prowansja-Alpy-Lazurowe Wybrzeże,Pruvenza-Alpi-Costa Azzola,Region PACA,Region Provence-Alpes-Cote d\'Azur,Région PACA,Région Provence-Alpes-Côte d\'Azur,peulobangseualpeukoteudajwileu,prwbʼns-ʼlp-qwt d\'ʼzwr,pu luo wang si-a er bei si-lan se hai an,Прованс — Альпы — Лазурный Берег,Прованс-Алпи-Лазурен бряг,Прованса-Алпи-Азурна обала,פרובאנס-אלפ-קוט ד\'אזור,პროვანსი-ალპები-ლაჟვარდოვანი ნაპირი,プロヴァンス＝アルプ＝コート・ダジュール地域圏,普罗旺斯-阿尔卑斯-蓝色海岸,프로방스알프코트다쥐르', '44.0000000', '6.0000000', 'A', 'ADM1', 'FR', '', '93', '', '', '', 4864015, 0, 729, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2986293, 'Pontault-Combault', 'Pontault-Combault', '', '48.7980000', '2.6063000', 'A', 'ADM4', 'FR', '', '11', '77', '775', '77373', 35252, 0, 107, 'Europe/Paris', '2017-04-19', 3012874, 2975249, NULL, '77340,77340'),
(2987410, 'Département du Rhône', 'Departement du Rhone', 'Departement du Rhone,Département du Rhône,Rhone,Rhône,Rodano,Ródano', '46.0000000', '4.5000000', 'A', 'ADM2', 'FR', '', '84', '69', '', '', 1738949, 0, 362, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2988289, 'Pays de la Loire', 'Pays de la Loire', 'Broiou al Liger,Broioù al Liger,Kraj Loary,Lando di Loire,Loarski Kraj,Loire,Loire-mente,Luara,Luara torpagi,Luara torpağı,Luaran lattanash,Luarayi erkir,Luarlandoj,Luaros krastas,Luaros kraštas,Luāra,Paesi della Loira,Pagi Ligeris,Pais del Loira,Pais do Loire,Pais ed la Loira,Pais ëd la Lòira,Paises da Loira,Paises de Leger,Paises del Loira,Paises do Loira,Paisi da Loira,Paisi dâ Loira,Payis de la Lere,Payis de la Lêre,Pays de la Loire,Pays de la Loire Region,Pays de la Loire suyu,Pays-de-la-Loire,País del Loira,País do Loire,Países da Loira,Países del Loira,Países do Loira,Païses de Léger,Pei d\'o la Loar,Pei-de-la-Luar,Region Loara,Region Pays de la Loire,Région Pays de la Loire,Zemli Luary,Zemlja Loire,bayy dw la lwar,lu wa er he de qu,luarash regioni,luaris regioni,lwayyr wady,pe da la lu\'ara,pe\'i da la lo\'ara,peideulalualeu,pyy dw la lwar,Земли Луары,Землі Луары,Лоарски Крај,Луаран латтанаш,Пеи дьо ла Лоар,Пеї-де-ла-Луар,Регион Лоара,Լուարայի երկիր,פיי דה לה לואר,بايي دو لا لوار,لوائیر وادی,پئی دو لا لوار,پیی دو لا لوآر,पेई दा ला लोआर,ਪੇ ਡ ਲਾ ਲੁਆਰ,แคว้นเปอีเดอลาลัวร์,ლუარაშ რეგიონი,ლუარის რეგიონი,ペイ・ド・ラ・ロワール地域圏,卢瓦尔河地区,페이드라루아르', '47.5000000', '-0.8333300', 'A', 'ADM1', 'FR', '', '52', '', '', '', 3482594, 0, 77, 'Europe/Paris', '2016-06-01', NULL, NULL, NULL, NULL),
(2988430, 'Département du Pas-de-Calais', 'Departement du Pas-de-Calais', 'Departement du Pas-de-Calais,Département du Pas-de-Calais,Pas-de-Calais,Paso de Calais,Passo di Calais', '50.5000000', '2.3333300', 'A', 'ADM2', 'FR', '', '32', '62', '', '', 1488951, 0, 184, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2989247, 'Département de l\'Orne', 'Departement de l\'Orne', 'Departement de l\'Orne,Département de l\'Orne,Orne', '48.6666700', '0.0833300', 'A', 'ADM2', 'FR', '', '28', '61', '', '', 302010, 0, 180, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2989663, 'Département de l\'Oise', 'Departement de l\'Oise', 'Departement de l\'Oise,Département de l\'Oise,Oise', '49.5000000', '2.5000000', 'A', 'ADM2', 'FR', '', '32', '60', '', '', 821568, 0, 118, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2990129, 'Département du Nord', 'Departement du Nord', 'Departement du Nord,Département du Nord,Nord,Norte,North', '50.3333300', '3.6666700', 'A', 'ADM2', 'FR', '', '32', '59', '', '', 2613285, 0, 96, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2990371, 'Département de la Nièvre', 'Departement de la Nievre', 'Departement de la Nievre,Département de la Nièvre,Nievre,Nièvre', '47.0833300', '3.5000000', 'A', 'ADM2', 'FR', '', '27', '58', '', '', 227740, 0, 280, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2991627, 'Département de la Moselle', 'Departement de la Moselle', 'Departement de la Moselle,Département de la Moselle,Mosela,Mosella,Moselle', '49.0000000', '6.5000000', 'A', 'ADM2', 'FR', '', '44', '57', '', '', 1066328, 0, 263, 'Europe/Paris', '2016-02-21', NULL, NULL, NULL, NULL),
(2991879, 'Département du Morbihan', 'Departement du Morbihan', 'Departement du Morbihan,Département du Morbihan,Morbihan', '47.9166700', '-2.8333300', 'A', 'ADM2', 'FR', '', '53', '56', '', '', 739144, 0, 122, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2994106, 'Département de la Meuse', 'Departement de la Meuse', 'Departement de la Meuse,Département de la Meuse,Meuse,Mosa', '49.0000000', '5.5000000', 'A', 'ADM2', 'FR', '', '44', '55', '', '', 200417, 0, 259, 'Europe/Paris', '2016-02-21', NULL, NULL, NULL, NULL),
(2994111, 'Département de Meurthe-et-Moselle', 'Departement de Meurthe-et-Moselle', 'Departement de Meurthe-et-Moselle,Département de Meurthe-et-Moselle,Meurthe,Meurthe et Moselle,Meurthe y Mosela,Meurthe-et-Moselle', '48.5833300', '6.1666700', 'A', 'ADM2', 'FR', '', '44', '54', '', '', 745134, 0, 220, 'Europe/Paris', '2016-02-21', NULL, NULL, NULL, NULL),
(2994932, 'Département de la Mayenne', 'Departement de la Mayenne', 'Departement de la Mayenne,Département de la Mayenne,Mayenne,Mezven', '48.0833300', '-0.6666700', 'A', 'ADM2', 'FR', '', '52', '53', '', '', 315303, 0, 91, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2995603, 'Département de la Marne', 'Departement de la Marne', 'Departement de la Marne,Département de la Marne,Marna,Marne', '48.9166700', '4.1666700', 'A', 'ADM2', 'FR', '', '44', '51', '', '', 580402, 0, 108, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(2996268, 'Département de la Manche', 'Departement de la Manche', 'Departement de la Manche,Département de la Manche,Mancha,Manche,Manica', '49.0000000', '-1.1666700', 'A', 'ADM2', 'FR', '', '28', '50', '', '', 516065, 0, 121, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2996663, 'Département de Maine-et-Loire', 'Departement de Maine-et-Loire', 'Anjou,Departement de Maine-et-Loire,Département de Maine-et-Loire,Maine y Loira,Maine-et-Loire,Mayenne-et-Loire', '47.5000000', '-0.3333300', 'A', 'ADM2', 'FR', '', '52', '49', '', '', 803573, 0, 32, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2997288, 'Département de la Lozère', 'Departement de la Lozere', 'Departement de la Lozere,Département de la Lozère,Lozere,Lozère', '44.5000000', '3.5000000', 'A', 'ADM2', 'FR', '', '76', '48', '', '', 81312, 0, 1064, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2997523, 'Département du Lot-et-Garonne', 'Departement du Lot-et-Garonne', 'Lot y Garona,Lot-et-Garonne,Olt-et-Garona', '44.3333300', '0.5000000', 'A', 'ADM2', 'FR', '', '75', '47', '', '', 341132, 0, 143, 'Europe/Paris', '2016-12-27', NULL, NULL, NULL, NULL),
(2997524, 'Département du Lot', 'Departement du Lot', 'Departement du Lot,Département du Lot,Lot', '44.5000000', '1.5000000', 'A', 'ADM2', 'FR', '', '76', '46', '', '', 180305, 0, 315, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2997856, 'Département du Loir-et-Cher', 'Departement du Loir-et-Cher', 'Loir y Cher,Loir-et-Cher', '47.5000000', '1.5000000', 'A', 'ADM2', 'FR', '', '24', '41', '', '', 338503, 0, 127, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2997857, 'Département du Loiret', 'Departement du Loiret', 'Departement du Loiret,Département du Loiret,Loiret', '47.9166700', '2.3333300', 'A', 'ADM2', 'FR', '', '24', '45', '', '', 672142, 0, 132, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2997861, 'Département de la Loire-Atlantique', 'Departement de la Loire-Atlantique', 'Departement de la Loire-Atlantique,Département de la Loire-Atlantique,Loira Atlantica,Loira Atlantico,Loira Atlántico,Loire-Atlantique,Loire-Inferieure,Loire-Inférieure', '47.2500000', '-1.8333300', 'A', 'ADM2', 'FR', '', '52', '44', '', '', 1301325, 0, 3, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(2997870, 'Département de la Loire', 'Departement de la Loire', 'Departement de la Loire,Département de la Loire,Loira,Loire', '45.4716900', '4.4329800', 'A', 'ADM2', 'FR', '', '84', '42', '', '', 763867, 0, 500, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3007866, 'Département des Landes', 'Departement des Landes', 'Departement des Landes,Département des Landes,Lanas,Landak,Landas,Landes', '44.0000000', '-0.8333300', 'A', 'ADM2', 'FR', '', '75', '40', '', '', 392592, 0, 52, 'Europe/Paris', '2017-03-02', NULL, NULL, NULL, NULL),
(3008501, 'L\'Albère', 'L\'Albere', 'L\'Albere,L\'Albère,l\'Albera', '42.4827800', '2.8944400', 'A', 'ADM4', 'FR', '', '76', '66', '661', '66001', 83, 0, 540, 'Europe/Paris', '2016-02-18', 11071623, 2984885, NULL, '66480'),
(3012051, 'Département du Jura', 'Departement du Jura', 'Departement du Jura,Département du Jura,Giura,Jura', '46.8333300', '5.8333300', 'A', 'ADM2', 'FR', '', '27', '39', '', '', 271680, 0, 597, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3012715, 'Département de l\'Isère', 'Departement de l\'Isere', 'Departement de l\'Isere,Département de l\'Isère,Isere,Isère', '45.1666700', '5.8333300', 'A', 'ADM2', 'FR', '', '84', '38', '', '', 1223730, 0, 664, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3012804, 'Département d\'Indre-et-Loire', 'Departement d\'Indre-et-Loire', 'Departement d\'Indre-et-Loire,Département d\'Indre-et-Loire,Indre and Loire,Indre y Loira,Indre-et-Loire', '47.2500000', '0.7500000', 'A', 'ADM2', 'FR', '', '24', '37', '', '', 603337, 0, 87, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3012805, 'Département de l\'Indre', 'Departement de l\'Indre', 'Departement de l\'Indre,Département de l\'Indre,Indre', '46.8333300', '1.6666700', 'A', 'ADM2', 'FR', '', '24', '36', '', '', 239443, 0, 154, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3012849, 'Département d\'Ille-et-Vilaine', 'Departement d\'Ille-et-Vilaine', 'Departement d\'Ille-et-Vilaine,Département d\'Ille-et-Vilaine,Il-ha-Gwilen,Ille y Vilaine,Ille-et-Vilaine', '48.1666700', '-1.5000000', 'A', 'ADM2', 'FR', '', '53', '35', '', '', 1003933, 0, 49, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3012874, 'Île-de-France', 'Ile-de-France', 'Ile-de-France,Ile-de-France Region,Ilha de Franca,Ilha de França,Isla de Francia,Region Ile-de-France,Region parisienne,Région parisienne,Région Île-de-France,ildeupeulangseu,Île-de-France,Île-de-France Region,일드프랑스', '48.7000000', '2.5000000', 'A', 'ADM1', 'FR', '', '11', '', '', '', 11598866, 0, 53, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013500, 'Département de l\'Hérault', 'Departement de l\'Herault', 'Departement de l\'Herault,Département de l\'Hérault,Herault,Hérault', '43.6666700', '3.5000000', 'A', 'ADM2', 'FR', '', '76', '34', '', '', 1050026, 0, 89, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013657, 'Département des Hauts-de-Seine', 'Departement des Hauts-de-Seine', 'Altos de Sena,Departement des Hauts-de-Seine,Département des Hauts-de-Seine,Hauts-de-Seine', '48.8500000', '2.2000000', 'A', 'ADM2', 'FR', '', '11', '92', '', '', 1579457, 0, 140, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013663, 'Département du Haut-Rhin', 'Departement du Haut-Rhin', 'Alto Reno,Alto Rin,Departement du Haut-Rhin,Département du Haut-Rhin,Haut-Rhin,Uwer-Elsass', '48.0000000', '7.3333300', 'A', 'ADM2', 'FR', '', '44', '68', '', '', 764064, 0, 201, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013719, 'Département de la Haute-Vienne', 'Departement de la Haute-Vienne', 'Alta Viena,Departement de la Haute-Vienne,Département de la Haute-Vienne,Haute-Vienne', '45.8333300', '1.1666700', 'A', 'ADM2', 'FR', '', '75', '87', '', '', 383418, 0, 293, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013726, 'Département des Hautes-Pyrénées', 'Departement des Hautes-Pyrenees', 'Alti Pirenei,Altos Pirineos,Altos Pirineus,Departement des Hautes-Pyrenees,Département des Hautes-Pyrénées,Hautes-Pyrenees,Hautes-Pyrénées', '43.0000000', '0.1666700', 'A', 'ADM2', 'FR', '', '76', '65', '', '', 238031, 0, 1222, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(3013736, 'Département de la Haute-Savoie', 'Departement de la Haute-Savoie', 'Alta Saboia,Alta Saboya,Alta Sabóia,Alta Savoia,Alta Savojo,Alta Savoya,Departement de la Haute-Savoie,Département de la Haute-Savoie,Haute-Savoie', '46.0000000', '6.3333300', 'A', 'ADM2', 'FR', '', '84', '74', '', '', 747965, 0, 1786, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013737, 'Département de la Haute-Saône', 'Departement de la Haute-Saone', 'Alto Saona,Departement de la Haute-Saone,Département de la Haute-Saône,Haute-Saone,Haute-Saône', '47.6666700', '6.1666700', 'A', 'ADM2', 'FR', '', '27', '70', '', '', 246975, 0, 241, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013738, 'Département des Hautes-Alpes', 'Departement des Hautes-Alpes', 'Alte Alpi,Altos Alpes,Departement des Hautes-Alpes,Département des Hautes-Alpes,Hautes-Alpes', '44.6666700', '6.5000000', 'A', 'ADM2', 'FR', '', '93', '05', '', '', 141153, 0, 2095, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013757, 'Département de la Haute-Marne', 'Departement de la Haute-Marne', 'Alta Marna,Alto Marne,Departement de la Haute-Marne,Département de la Haute-Marne,Haute-Marne', '48.0833300', '5.1666700', 'A', 'ADM2', 'FR', '', '44', '52', '', '', 192224, 0, 269, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(3013760, 'Département de la Haute-Loire', 'Departement de la Haute-Loire', 'Alta Loira,Alto Loira,Departement de la Haute-Loire,Département de la Haute-Loire,Haute-Loire', '45.0833300', '4.0000000', 'A', 'ADM2', 'FR', '', '84', '43', '', '', 231066, 0, 809, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013767, 'Département de la Haute-Garonne', 'Departement de la Haute-Garonne', 'Alta Garonna,Alto Garona,Departement de la Haute-Garonne,Département de la Haute-Garonne,Haute Garonne,Haute-Garonne,Upper Garonne', '43.4166700', '1.5000000', 'A', 'ADM2', 'FR', '', '76', '31', '', '', 1254347, 0, 181, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3013793, 'Département de la Haute-Corse', 'Departement de la Haute-Corse', 'Alta Corcega,Alta Corsega,Alta Córcega,Alta Córsega,Corsica settentrionale,Departement de la Haute-Corse,Département de la Haute-Corse,Golo,Haute-Corse,Upper Corsica', '42.4166700', '9.1666700', 'A', 'ADM2', 'FR', '', '94', '2B', '', '', 167103, 0, 716, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3015948, 'Département de la Gironde', 'Departement de la Gironde', 'Departement de la Gironde,Département de la Gironde,Gironda,Gironde', '44.9166700', '-0.5000000', 'A', 'ADM2', 'FR', '', '75', '33', '', '', 1464088, 0, 35, 'Europe/Paris', '2016-12-27', NULL, NULL, NULL, NULL),
(3016194, 'Département du Gers', 'Departement du Gers', 'Departement du Gers,Département du Gers,Gers', '43.6666700', '0.5000000', 'A', 'ADM2', 'FR', '', '76', '32', '', '', 194560, 0, 206, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(3016670, 'Département du Gard', 'Departement du Gard', 'Departement du Gard,Département du Gard,Gard', '44.0000000', '4.0000000', 'A', 'ADM2', 'FR', '', '76', '30', '', '', 718181, 0, 170, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3018471, 'Département du Finistère', 'Departement du Finistere', 'Departement du Finistere,Département du Finistère,Finistere,Finisterre,Finistère', '48.3333300', '-4.0000000', 'A', 'ADM2', 'FR', '', '53', '29', '', '', 925442, 0, 283, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3019316, 'Département d\'Eure-et-Loir', 'Departement d\'Eure-et-Loir', 'Departement d\'Eure-et-Loir,Département d\'Eure-et-Loir,Eure y Loir,Eure-et-Loir', '48.5000000', '1.5000000', 'A', 'ADM2', 'FR', '', '24', '28', '', '', 436966, 0, 154, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3019317, 'Département de l\'Eure', 'Departement de l\'Eure', 'Aebura,Departement de l\'Eure,Département de l\'Eure,Eburae,Eure', '49.1666700', '1.0000000', 'A', 'ADM2', 'FR', '', '28', '27', '', '', 599181, 0, 151, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3019599, 'Département de l\'Essonne', 'Departement de l\'Essonne', 'Departement de l\'Essonne,Département de l\'Essonne,Essonne', '48.5000000', '2.2500000', 'A', 'ADM2', 'FR', '', '11', '91', '', '', 1225717, 0, 139, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3020781, 'Département de la Drôme', 'Departement de la Drome', 'Departament de Droma,Departement de la Drome,Droma,Drome,Drôme,Département de la Drôme', '44.5833300', '5.1666700', 'A', 'ADM2', 'FR', '', '84', '26', '', '', 497487, 0, 557, 'Europe/Paris', '2017-07-06', NULL, NULL, NULL, NULL),
(3020989, 'Département du Doubs', 'Departement du Doubs', 'Departement du Doubs,Doubs,Département du Doubs', '47.1666700', '6.4166700', 'A', 'ADM2', 'FR', '', '27', '25', '', '', 539992, 0, 806, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3021042, 'Département de la Dordogne', 'Departement de la Dordogne', 'Departement de la Dordogne,Dordogna,Dordogne,Dordona,Dordonha,Dordoña,Département de la Dordogne', '45.1666700', '0.8333300', 'A', 'ADM2', 'FR', '', '75', '24', '', '', 424456, 0, 205, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3021501, 'Département des Deux-Sèvres', 'Departement des Deux-Sevres', 'Departement des Deux-Sevres,Deux Sevres,Deux Sèvres,Deux-Sevres,Deux-Sèvres,Département des Deux-Sèvres', '46.5000000', '-0.2500000', 'A', 'ADM2', 'FR', '', '75', '79', '', '', 377784, 0, 171, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(3022516, 'Département de la Creuse', 'Departement de la Creuse', 'Creuse,Departement de la Creuse,Département de la Creuse', '46.0833300', '2.0000000', 'A', 'ADM2', 'FR', '', '75', '23', '', '', 128435, 0, 477, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3023414, 'Département des Côtes-d’Armor', 'Departement des Cotes-d\'Armor', 'Aodou-an-Arvor,Aodoù-an-Arvor,Costas de Armor,Cotes-d\'Armor,Côtes-d\'Armor,Departement des Cotes-d\'Armor,Departement des Cotes-du-Nord,Département des Côtes-du-Nord,Département des Côtes-d’Armor', '48.4166700', '-2.6666700', 'A', 'ADM2', 'FR', '', '53', '22', '', '', 608356, 0, 102, 'Europe/Paris', '2016-05-14', NULL, NULL, NULL, NULL),
(3023423, 'Département de la Côte-d\'Or', 'Departement de la Cote-d\'Or', 'Cote D Or,Cote D\'Or,Cote d\'Or,Cote-d\'Or,Côte-d\'Or,Departement de la Cote-d\'Or,Département de la Côte-d\'Or', '47.5000000', '4.8333300', 'A', 'ADM2', 'FR', '', '27', '21', '', '', 538259, 0, 486, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3023514, 'Département de la Corse-du-Sud', 'Departement de la Corse-du-Sud', 'Corcega del Sur,Corse-du-Sud,Corsega do Sul,Corsica del Sud,Córcega del Sur,Córsega do Sul,Departement de la Corse-du-Sud,Département de la Corse-du-Sud,Liamone,South Corsica,Suedkorsika,Südkorsika', '41.9166700', '9.1666700', 'A', 'ADM2', 'FR', '', '94', '2A', '', '', 143724, 0, 1392, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3023519, 'Corse', 'Corse', 'Collectivite Territoriale de Corse,Collectivité Territoriale de Corse,Corse,Corsega,Corsica,Corsica Region,Còrsega,Korsika,Region Corse,Région Corse,Territorial Collectivity of Corsica,koleusika,코르시카', '42.0615300', '8.9542000', 'A', 'ADM1', 'FR', '', '94', '', '', '', 299209, 0, 317, 'Europe/Paris', '2017-02-01', NULL, NULL, NULL, NULL),
(3023532, 'Département de la Corrèze', 'Departement de la Correze', 'Correza,Correze,Corrèze,Departement de la Correze,Département de la Corrèze', '45.2500000', '1.8333300', 'A', 'ADM2', 'FR', '', '75', '19', '', '', 252116, 0, 414, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3025480, 'Département du Cher', 'Departement du Cher', 'Cher,Departement du Cher,Département du Cher', '47.0000000', '2.5000000', 'A', 'ADM2', 'FR', '', '24', '18', '', '', 319423, 0, 156, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3026644, 'Département de la Charente-Maritime', 'Departement de la Charente-Maritime', 'Carantonus Maritimus,Charanta Maritima,Charenta Maritima,Charenta Marítima,Charente Maritim,Charente Maritime,Charente Maritimo,Charente Marítim,Charente Marítimo,Charente-Inferieure,Charente-Inférieure,Charente-Maritima,Charente-Maritime,Dehpartament Sharanta Prymorskaja,Departamenti Sharantai Nazdibaҳri,Departement Charente-Maritime,Departement de la Charente-Maritime,Département de la Charente-Maritime,Pajurio Saranta,Pajūrio Šaranta,Primors\'ka Sharanta,Primorskaja Sharanta,Primorski Sharant,Tines enchi Sharanta,bin hai xia lang de sheng,cang hwad cha r xngt-ma ri tim,sharanto=maritimu xian,sharnt marytym,shrant-marytym,Департаменти Шарантаи Наздибаҳрӣ,Дэпартамент Шаранта Прыморская,Приморская Шаранта,Приморски Шарант,Приморська Шаранта,Тинĕс енчи Шаранта,השראנט הימי,شارنت ماريتيم,شرانت-ماریتیم,จังหวัดชาร็องต์-มารีตีม,ზღვისპირა შარანტა,シャラント＝マリティーム県,滨海夏朗德省', '45.5000000', '-0.7500000', 'A', 'ADM2', 'FR', '', '75', '17', '', '', 634928, 0, 37, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3026646, 'Département de la Charente', 'Departement de la Charente', 'Charenta,Charente,Departement de la Charente,Département de la Charente', '45.6666700', '0.0833300', 'A', 'ADM2', 'FR', '', '75', '16', '', '', 363913, 0, 51, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3027939, 'Centre-Val-de-Loire', 'Centre-Val-de-Loire', 'Centre,Centre Region,Centro,Region Centre,Regione Centrale,Région Centre,sangteuleu,상트르', '47.5000000', '1.7500000', 'A', 'ADM1', 'FR', '', '24', '', '', '', 2526919, 0, 96, 'Europe/Paris', '2017-04-08', NULL, NULL, NULL, NULL),
(3028791, 'Département du Cantal', 'Departement du Cantal', 'Cantal,Departement du Cantal,Département du Cantal', '45.0833300', '2.6666700', 'A', 'ADM2', 'FR', '', '84', '15', '', '', 154354, 0, 1063, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3029094, 'Département du Calvados', 'Departement du Calvados', 'Calvados,Departement du Calvados,Département du Calvados', '49.1666700', '-0.5000000', 'A', 'ADM2', 'FR', '', '28', '14', '', '', 697054, 0, 89, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3030293, 'Bretagne', 'Bretagne', 'A Bhreatainn Bheag,An Bhriotain,An Bhriotáin,Armorica,Bertanne,Breetany,Brehtan\',Breizh,Bretagna,Bretagne,Bretagne suyu,Bretagnei poolsaar,Bretainia,Bretan,Bretan\',Bretana,Bretane,Bretangne,Bretanha,Bretania,Bretanio,Bretaniô,Bretanja,Bretanje,Bretansky poloostrov,Bretanya,Bretanė,Bretaña,Bretaņa,Bretaňský poloostrov,Breten Vian,Breton,Bretonia,Bretonio,Bretonsko,Bretonya,Bretónsko,Britagna,Britannia,Britannia Minor,Britannia minor,Brittany,Brittany Region,Brétangne,Brëtagna,Burtaegne,Historiese Bretagne,Istor Breizh,Llydaw,Peretane Iti,Peretāne Iti,Pu-liet-thap-ni,Pu-lie̍t-thap-nì,Region Bretagne,Région Bretagne,Vretani,Yn Vritaan,beuleutanyu,brata\'ina,bratan\'ya,brattan\'ya,brirrani,brtany,brytany,bu li si,bu lie ta ni,bu lie ta ni ban dao,burutanyu,pirittani,Βρετάνη,Бретан,Бретан түбегі,Бретань,Бретања,Брэтань,Բրետան,ברטאן,برتانی,بريتاني,برٹنی,بریتانیہ,ब्रतान्य,ब्रत्तान्य,ব্রতাইন,பிரித்தானி,ബ്രിറ്റനി,แคว้นเบรอตาญ,ბრეტანი,ブルターニュ,布列塔尼,布列塔尼半岛,布禮斯,브르타뉴,', '48.1666700', '-2.8333300', 'A', 'ADM1', 'FR', '', '53', '', '', '', 3120288, 0, 91, 'Europe/Paris', '2016-06-01', NULL, NULL, NULL, NULL),
(3031359, 'Département des Bouches-du-Rhône', 'Departement des Bouches-du-Rhone', 'Bocas del Rodano,Bocas del Ródano,Bocas do Rodano,Bocas do Ródano,Bocche del Rodano,Bouches-du-Rhone,Bouches-du-Rhône,Departement des Bouches-du-Rhone,Département des Bouches-du-Rhône', '43.5236600', '5.4245000', 'A', 'ADM2', 'FR', '', '93', '13', '', '', 1995094, 0, 178, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3033789, 'Territoire de Belfort', 'Territoire de Belfort', 'Ager Belfortii,Bel\'for Cere,Belfora,Belforo teritorija,Belfort,Belfort Herrialdea,Belforti departemang,Departamenti Sarzamini Belfor,Departimento Territoire de Belfort,Edafos tou Belfor,Tehrytoryja Bel\'for,Teritoar d\'o Belfor,Teritori ed Belfort,Teritorija Bel\'for,Teritorija Belfor,Teritorio de Belfort,Teritòri ëd Belfort,Territoire de Belfort,Territoire-de-Belfort,Territori de Belfort,Territorija Bel\'for,Territorija-de-Bel\'for,Territorio de Belfort,Territorio di Belfort,Territouero de Belfort,Territòri de Belfòrt,Território de Belfort,Tèrritouèro de Bélfôrt,Welschsundgau,aqlym blfwr,bei er fu de qu,telitualeudeubelpoleu ju,teritora de belphora,trytwar dw blfwr,tyrytwar dw bylfwr,Έδαφος του Μπελφόρ,Бельфор Çĕрĕ,Департаменти Сарзамини Белфор,Теритоар дьо Белфор,Територија Белфор,Територія Бельфор,Территория Бельфор,Территория-де-Бельфор,Тэрыторыя Бельфор,Բելֆորի տարածք,إقليم بلفور,تریتوآر دو بلفور,تیریتوار دو بیلفور,ضلع ٹیراٹری ڈی بیلفورٹ,तेरितॉर दे बेल्फॉर,จังหวัดแตรีตัวร์เดอแบลฟอร์,ბელფორის ტერიტორია,テリトワール・ド・ベルフォール県,贝尔福地区,테리투아르드벨포르 주', '47.6357800', '6.8884300', 'A', 'ADM2', 'FR', '', '27', '90', '', '', 145987, 0, 371, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3034720, 'Département du Bas-Rhin', 'Departement du Bas-Rhin', 'Baixo Reno,Bajo Rin,Bas-Rhin,Basso Reno,Departement du Bas-Rhin,Département du Bas-Rhin,Nieder-Elsass', '48.5833300', '7.6666700', 'A', 'ADM2', 'FR', '', '44', '67', '', '', 1113207, 0, 146, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3035691, 'Département de l\'Aveyron', 'Departement de l\'Aveyron', 'Aveyron,Departement de l\'Aveyron,Département de l\'Aveyron', '44.2500000', '2.5000000', 'A', 'ADM2', 'FR', '', '76', '12', '', '', 288634, 0, 592, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3036264, 'Département de l\'Aude', 'Departement de l\'Aude', 'Aude', '43.0833300', '2.5000000', 'A', 'ADM2', 'FR', '', '76', '11', '', '', 363420, 0, 207, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3036420, 'Département de l\'Aube', 'Departement de l\'Aube', 'Aube,Departement de l\'Aube,Département de l\'Aube', '48.2500000', '4.0833300', 'A', 'ADM2', 'FR', '', '44', '10', '', '', 311676, 0, 127, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(3036965, 'Département de l\'Ariège', 'Departement de l\'Ariege', 'Ariege,Arieja,Ariège,Departement de l\'Ariege,Département de l\'Ariège', '43.0000000', '1.5000000', 'A', 'ADM2', 'FR', '', '76', '09', '', '', 156701, 0, 547, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3037136, 'Département des Ardennes', 'Departement des Ardennes', 'Ardenas,Ardenne,Ardennes,Departement des Ardennes,Département des Ardennes', '49.6666700', '4.6666700', 'A', 'ADM2', 'FR', '', '44', '08', '', '', 291717, 0, 233, 'Europe/Paris', '2016-12-28', NULL, NULL, NULL, NULL),
(3037147, 'Département de l\'Ardèche', 'Departement de l\'Ardeche', 'Ardeche,Ardèche,Departement de l\'Ardeche,Département de l\'Ardèche,Vivarais', '44.6666700', '4.3333300', 'A', 'ADM2', 'FR', '', '84', '07', '', '', 323516, 0, 445, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3038049, 'Département des Alpes-Maritimes', 'Departement des Alpes-Maritimes', 'Alpes Maritimos,Alpes Marítimos,Alpes-Maritimes,Alpi Marittime,Departement des Alpes-Maritimes,Département des Alpes-Maritimes,Maritimes Alpes', '44.0000000', '7.1666700', 'A', 'ADM2', 'FR', '', '93', '06', '', '', 1094596, 0, 844, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3038050, 'Département des Alpes-de-Haute-Provence', 'Departement des Alpes-de-Haute-Provence', 'Alpes da Alta Provenca,Alpes da Alta Provença,Alpes de Alta Provenza,Alpes-de-Haute-Provence,Alpi dell\'Alta Provenza,Basses Alpes,Departement des Alpes-de-Haute-Provence,Département des Alpes-de-Haute-Provence', '44.1666700', '6.0000000', 'A', 'ADM2', 'FR', '', '93', '04', '', '', 164519, 0, 510, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3038111, 'Département de l\'Allier', 'Departement de l\'Allier', 'Alaier,Alaièr,Allier,Departement de l\'Allier,Département de l\'Allier', '46.5000000', '3.0000000', 'A', 'ADM2', 'FR', '', '84', '03', '', '', 353362, 0, 297, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3038375, 'Département de l\'Aisne', 'Departement de l\'Aisne', 'Aisne,Departement de l\'Aisne,Département de l\'Aisne', '49.5000000', '3.5000000', 'A', 'ADM2', 'FR', '', '32', '02', '', '', 554521, 0, 66, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(3038422, 'Département de l\'Ain', 'Departement de l\'Ain', 'Ain,Departement de l\'Ain,Département de l\'Ain', '46.1666700', '5.3333300', 'A', 'ADM2', 'FR', '', '84', '01', '', '', 605892, 0, 416, 'Europe/Paris', '2016-02-18', NULL, NULL, NULL, NULL),
(6324452, 'Maureillas-las-Illas', 'Maureillas-las-Illas', 'Maureillas-las-Illas,Morellas i les Illes,Morellàs i les Illes', '42.4902800', '2.8102800', 'A', 'ADM4', 'FR', '', '76', '66', '661', '66106', 2649, 0, 131, 'Europe/Paris', '2016-02-18', 11071623, 2984885, NULL, '66480,66480,66480'),
(6424361, 'Volx', 'Volx', '', '43.8777800', '5.8416700', 'A', 'ADM4', 'FR', '', '93', '04', '044', '04245', 2953, 0, 379, 'Europe/Paris', '2016-02-18', 2985244, 3038050, NULL, '04130'),
(6424362, 'Orignolles', 'Orignolles', '', '45.2305600', '-0.2347200', 'A', 'ADM4', 'FR', '', '75', '17', '171', '17269', 624, 0, 103, 'Europe/Paris', '2016-02-18', 11071620, 3026644, NULL, '17210'),
(6424363, 'Morogues', 'Morogues', 'Morog,mo luo gai,Морог,莫罗盖', '47.2411100', '2.5977800', 'A', 'ADM4', 'FR', '', '24', '18', '181', '18156', 451, 0, 222, 'Europe/Paris', '2016-02-18', 3027939, 3025480, NULL, '18220'),
(6424364, 'Sourzac', 'Sourzac', '', '45.0488900', '0.3958300', 'A', 'ADM4', 'FR', '', '75', '24', '243', '24543', 1092, 0, 91, 'Europe/Paris', '2016-02-18', 11071620, 3021042, NULL, '24400'),
(6424365, 'Réaumont', 'Reaumont', '', '45.3697200', '5.5258300', 'A', 'ADM4', 'FR', '', '84', '38', '381', '38331', 940, 0, 407, 'Europe/Paris', '2016-02-18', 11071625, 3012715, NULL, '38140'),
(6424366, 'Montgesty', 'Montgesty', '', '44.5788000', '1.2977000', 'A', 'ADM4', 'FR', '', '76', '46', '461', '46205', 297, 0, 285, 'Europe/Paris', '2016-02-18', 11071623, 2997524, NULL, '46150'),
(6424368, 'Viry', 'Viry', 'Viri,Viriacum,Вірі', '46.1175000', '6.0375000', 'A', 'ADM4', 'FR', '', '84', '74', '743', '74309', 3512, 0, 507, 'Europe/Paris', '2016-02-18', 11071625, 3013736, NULL, '74580'),
(6424369, 'Ichy', 'Ichy', '', '48.2025000', '2.5475000', 'A', 'ADM4', 'FR', '', '11', '77', '774', '77230', 154, 0, 106, 'Europe/Paris', '2016-02-18', 3012874, 2975249, NULL, '77890'),
(6424370, 'Villevaudé', 'Villevaude', '', '48.9175000', '2.6513900', 'A', 'ADM4', 'FR', '', '11', '77', '775', '77517', 1717, 0, 118, 'Europe/Paris', '2016-02-18', 3012874, 2975249, NULL, '77410,77410,77410'),
(6424371, 'Portieux', 'Portieux', '', '48.3438900', '6.3447200', 'A', 'ADM4', 'FR', '', '44', '88', '881', '88355', 1321, 0, 295, 'Europe/Paris', '2016-02-21', 11071622, 2967681, NULL, '88330'),
(6424372, 'Daon', 'Daon', '', '47.7500000', '-0.6388900', 'A', 'ADM4', 'FR', '', '52', '53', '531', '53089', 486, 0, 40, 'Europe/Paris', '2016-02-18', 2988289, 2994932, NULL, '53200'),
(6424373, 'Cusy', 'Cusy', 'Cosi,Cusium Gebennesium,Côsi,Kizi,Kjuzi,Кизи,Кюзі', '45.7650000', '6.0305600', 'A', 'ADM4', 'FR', '', '84', '74', '741', '74097', 1731, 0, 550, 'Europe/Paris', '2016-02-18', 11071625, 3013736, NULL, '74540'),
(6424374, 'Mourjou', 'Mourjou', '', '44.6905600', '2.3294400', 'A', 'ADM4', 'FR', '', '84', '15', '151', '15136', 328, 0, 484, 'Europe/Paris', '2016-02-18', 11071625, 3028791, NULL, '15340'),
(6424375, 'Salins', 'Salins', 'Salen,sa lan,Сален,萨兰', '45.1908300', '2.3930600', 'A', 'ADM4', 'FR', '', '84', '15', '152', '15220', 157, 0, 660, 'Europe/Paris', '2016-02-18', 11071625, 3028791, NULL, '15200'),
(6424376, 'Juillenay', 'Juillenay', 'Zhjujene,Zhuene,rui yi lei nai,Жуене,Жуєне,Жюйене,瑞伊勒奈', '47.3600000', '4.2761100', 'A', 'ADM4', 'FR', '', '27', '21', '213', '21328', 53, 0, 376, 'Europe/Paris', '2016-02-18', 11071619, 3023423, NULL, '21210'),
(6424377, 'Busy', 'Busy', 'Bizi,Bjuzi,Бизи,Бюзі', '47.1677800', '5.9477800', 'A', 'ADM4', 'FR', '', '27', '25', '251', '25103', 545, 0, 303, 'Europe/Paris', '2016-02-18', 11071619, 3020989, NULL, '25320'),
(6424378, 'Rottier', 'Rottier', '', '44.4744400', '5.4130600', 'A', 'ADM4', 'FR', '', '84', '26', '261', '26283', 30, 0, 576, 'Europe/Paris', '2016-02-18', 11071625, 3020781, NULL, '26470'),
(6424379, 'Lucé', 'Luce', 'Ljuse,lu sai,Люсе,吕塞', '48.4383300', '1.4650000', 'A', 'ADM4', 'FR', '', '24', '28', '281', '28218', 15288, 0, 157, 'Europe/Paris', '2016-02-18', 3027939, 3019316, NULL, '28110'),
(6424380, 'Cox', 'Cox', 'Coths,Còths,Koks,ke zhen,Кокс,科镇', '43.7608300', '1.0422200', 'A', 'ADM4', 'FR', '', '76', '31', '313', '31156', 335, 0, 296, 'Europe/Paris', '2016-02-18', 11071623, 3013767, NULL, '31480'),
(6424381, 'Francarville', 'Francarville', '', '43.5852000', '1.7513000', 'A', 'ADM4', 'FR', '', '76', '31', '313', '31194', 170, 0, 229, 'Europe/Paris', '2016-02-18', 11071623, 3013767, NULL, '31460'),
(6424382, 'Pointis-Inard', 'Pointis-Inard', 'Puantis-Inar,Puenti-Inar,Puntic-Inard,Puntis dInard,Puntiç-Inard,Puntís dInard,pu an di yi na er,Пуантис-Инар,Пуенті-Інар,普安蒂伊纳尔', '43.0861100', '0.8116700', 'A', 'ADM4', 'FR', '', '76', '31', '312', '31427', 816, 0, 335, 'Europe/Paris', '2016-02-18', 11071623, 3013767, NULL, '31800'),
(6424383, 'Sassay', 'Sassay', '', '47.3930600', '1.4416700', 'A', 'ADM4', 'FR', '', '24', '41', '411', '41237', 913, 0, 111, 'Europe/Paris', '2016-02-18', 3027939, 2997856, NULL, '41700'),
(6424384, 'Préfontaines', 'Prefontaines', '', '48.1086100', '2.6913900', 'A', 'ADM4', 'FR', '', '24', '45', '451', '45255', 465, 0, 87, 'Europe/Paris', '2016-02-18', 3027939, 2997857, NULL, '45490'),
(6424386, 'Millières', 'Millieres', 'Mil\'er,mi li ai,Мильер,Мільєр,米利埃', '49.1855600', '-1.4591700', 'A', 'ADM4', 'FR', '', '28', '50', '503', '50328', 683, 0, 48, 'Europe/Paris', '2016-02-18', 11071621, 2996268, NULL, '50190'),
(6424387, 'Champvoisy', 'Champvoisy', '', '49.1302800', '3.6363900', 'A', 'ADM4', 'FR', '', '44', '51', '512', '51121', 243, 0, 143, 'Europe/Paris', '2016-02-18', 11071622, 2995603, NULL, '51700'),
(6424388, 'Sarcey', 'Sarcey', '', '48.0561100', '5.3050000', 'A', 'ADM4', 'FR', '', '44', '52', '521', '52459', 113, 0, 375, 'Europe/Paris', '2016-02-18', 11071622, 3013757, NULL, '52800'),
(6424389, 'Mée', 'Mee', '', '47.7972200', '-0.8605600', 'A', 'ADM4', 'FR', '', '52', '53', '531', '53148', 201, 0, 62, 'Europe/Paris', '2016-02-18', 2988289, 2994932, NULL, '53400'),
(6424390, 'Éply', 'Eply', '', '48.9197200', '6.1802800', 'A', 'ADM4', 'FR', '', '44', '54', '543', '54179', 302, 0, 197, 'Europe/Paris', '2016-02-21', 11071622, 2994111, NULL, '54610'),
(6424391, 'Harville', 'Harville', '', '49.0986100', '5.7275000', 'A', 'ADM4', 'FR', '', '44', '55', '553', '55232', 109, 0, 211, 'Europe/Paris', '2016-02-21', 11071622, 2994106, NULL, '55160'),
(6424392, 'Septsarges', 'Septsarges', '', '49.2805600', '5.1675000', 'A', 'ADM4', 'FR', '', '44', '55', '553', '55484', 51, 0, 242, 'Europe/Paris', '2016-02-21', 11071622, 2994106, NULL, '55270'),
(6424393, 'Waly', 'Waly', '', '49.0194400', '5.1066700', 'A', 'ADM4', 'FR', '', '44', '55', '551', '55577', 57, 0, 210, 'Europe/Paris', '2016-02-21', 11071622, 2994106, NULL, '55250'),
(6424394, 'Mogneville', 'Mogneville', '', '49.3144400', '2.4716700', 'A', 'ADM4', 'FR', '', '32', '60', '602', '60404', 1495, 0, 47, 'Europe/Paris', '2016-02-18', 11071624, 2989663, NULL, '60140'),
(6424395, 'Igé', 'Ige', 'Izhe,yi re,Іже,Иже,伊热', '48.3244400', '0.5213900', 'A', 'ADM4', 'FR', '', '28', '61', '613', '61207', 686, 0, 131, 'Europe/Paris', '2016-02-18', 11071621, 2989247, NULL, '61130'),
(6424396, 'Mirepeix', 'Mirepeix', '', '43.1891700', '-0.2508300', 'A', 'ADM4', 'FR', '', '75', '64', '643', '64386', 1170, 0, 262, 'Europe/Paris', '2016-02-18', 11071620, 2984887, NULL, '64800'),
(6424397, 'Puberg', 'Puberg', 'Bubert,Pjuberg,bwbyrgh,pi bei er,pwbrg,Пюберг,بوبيرغ,پوبرگ,皮贝尔', '48.9113300', '7.3158600', 'A', 'ADM4', 'FR', '', '44', '67', '674', '67381', 339, 0, 377, 'Europe/Paris', '2016-02-18', 11071622, 3034720, NULL, '67290'),
(6424398, 'Motz', 'Motz', 'Mo,Motz,Môtz,Мо', '45.9197200', '5.8477800', 'A', 'ADM4', 'FR', '', '84', '73', '732', '73180', 381, 0, 445, 'Europe/Paris', '2016-02-18', 11071625, 2975517, NULL, '73310'),
(6424399, 'Megève', 'Megeve', '', '45.8569400', '6.6175000', 'A', 'ADM4', 'FR', '', '84', '74', '742', '74173', 3907, 0, 1105, 'Europe/Paris', '2016-02-18', 11071625, 3013736, NULL, '74120'),
(6424400, 'Tacoignières', 'Tacoignieres', '', '48.8363900', '1.6747200', 'A', 'ADM4', 'FR', '', '11', '78', '781', '78605', 1040, 0, 144, 'Europe/Paris', '2016-02-18', 3012874, 2967196, NULL, '78910'),
(6424401, 'Mérobert', 'Merobert', '', '48.4158300', '2.0072200', 'A', 'ADM4', 'FR', '', '11', '91', '911', '91393', 545, 0, 147, 'Europe/Paris', '2016-02-18', 3012874, 3019599, NULL, '91780'),
(6424403, 'Jausiers', 'Jausiers', '', '44.4177800', '6.7305600', 'A', 'ADM4', 'FR', '', '93', '04', '041', '04096', 1095, 0, 1213, 'Europe/Paris', '2016-02-18', 2985244, 3038050, NULL, '04850'),
(6424404, 'Coux', 'Coux', '', '44.7336000', '4.6205000', 'A', 'ADM4', 'FR', '', '84', '07', '072', '07072', 1662, 0, 224, 'Europe/Paris', '2016-02-18', 11071625, 3037147, NULL, '07000'),
(6424405, 'Ayen', 'Ayen', '', '45.2469400', '1.3272200', 'A', 'ADM4', 'FR', '', '75', '19', '191', '19015', 708, 0, 324, 'Europe/Paris', '2016-02-18', 11071620, 3023532, NULL, '19310'),
(6424406, 'Arnayon', 'Arnayon', 'Arnaion,Arnajon,Arneon,a er nai weng,Арнајон,Арнеон,阿尔奈翁', '44.4891700', '5.3177800', 'A', 'ADM4', 'FR', '', '84', '26', '261', '26012', 32, 0, 804, 'Europe/Paris', '2016-02-18', 11071625, 3020781, NULL, '26470'),
(6424407, 'Charols', 'Charols', 'Charous,Charòus,Sharol,Sharol\',sha luo er,Шарол,Шароль,沙罗尔', '44.5927800', '4.9513900', 'A', 'ADM4', 'FR', '', '84', '26', '262', '26078', 765, 0, 219, 'Europe/Paris', '2016-02-18', 11071625, 3020781, NULL, '26450'),
(6424408, 'Brenas', 'Brenas', '', '43.6533300', '3.2569400', 'A', 'ADM4', 'FR', '', '76', '34', '342', '34040', 44, 0, 446, 'Europe/Paris', '2016-02-18', 11071623, 3013500, NULL, '34650'),
(6424409, 'Bey', 'Bey', '', '46.8211100', '4.9636100', 'A', 'ADM4', 'FR', '', '27', '71', '712', '71033', 784, 0, 192, 'Europe/Paris', '2016-02-18', 11071619, 2976082, NULL, '71620'),
(6424410, 'Auchonvillers', 'Auchonvillers', 'Chonvile,Chonvilé,Oshonvile,Oshonville,ou xiong wei lai er,Ошонвиле,Ошонвілле,欧雄维莱尔', '50.0808300', '2.6300000', 'A', 'ADM4', 'FR', '', '32', '80', '804', '80038', 130, 0, 148, 'Europe/Paris', '2016-02-18', 11071624, 2974304, NULL, '80560'),
(6424411, 'Blan', 'Blan', '', '43.5269400', '2.0080600', 'A', 'ADM4', 'FR', '', '76', '81', '812', '81032', 1014, 0, 201, 'Europe/Paris', '2016-02-18', 11071623, 2973362, NULL, '81700'),
(6424412, 'Saint-Éloi', 'Saint-Eloi', 'Sent Elua,Sent-Ehlua,Sent-Elua,san-aylwa  ayn,sheng ai lu wa,Сент-Елуа,Сент-Элуа,Սենտ Էլուա,سان-إيلوا، أين,سینٹ-علوی، این,圣埃卢瓦', '45.9330600', '5.1522200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01349', 378, 0, 300, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01800'),
(6424413, 'Servas', 'Servas', 'Serva,sai er wa si,syrfas  ayn,Серва,Սերվա,سيرفاس، أين,塞尔瓦斯', '46.1327800', '5.1655600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01405', 1188, 0, 267, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01960'),
(6424414, 'Mazan-l\'Abbaye', 'Mazan-l\'Abbaye', '', '44.7280600', '4.0888900', 'A', 'ADM4', 'FR', '', '84', '07', '071', '07154', 137, 0, 1126, 'Europe/Paris', '2016-02-18', 11071625, 3037147, NULL, '07510'),
(6424415, 'Nouvion-sur-Meuse', 'Nouvion-sur-Meuse', 'Nuv\'on-sjur-Mjoz,Nuvion-sjur-Mez,mo ci he pan nu wei yong,Нувьон-сюр-Мёз,Нувіон-сюр-Мез,默兹河畔努维永', '49.7000000', '4.7950000', 'A', 'ADM4', 'FR', '', '44', '08', '081', '08327', 2256, 0, 153, 'Europe/Paris', '2016-02-18', 11071622, 3037136, NULL, '08160'),
(6424416, 'Sonnac', 'Sonnac', '', '44.5483300', '2.1086100', 'A', 'ADM4', 'FR', '', '76', '12', '123', '12272', 438, 0, 404, 'Europe/Paris', '2016-02-18', 11071623, 3035691, NULL, '12700'),
(6424417, 'Formigny La Bataille', 'Formigny La Bataille', 'Formigneium,Formin\'i,Formini,fu er mi ni,Форминьи,Формињи,Форміньї,福尔米尼', '49.3366700', '-0.8988900', 'A', 'ADM4', 'FR', '', '28', '14', '141', '14281', 264, 0, 28, 'Europe/Paris', '2017-05-10', 11071621, 3029094, NULL, '14710'),
(6424418, 'Vieux-Ruffec', 'Vieux-Ruffec', '', '46.0094400', '0.3880600', 'A', 'ADM4', 'FR', '', '75', '16', '163', '16404', 111, 0, 148, 'Europe/Paris', '2016-02-18', 11071620, 3026646, NULL, '16350'),
(6424419, 'Mornay-Berry', 'Mornay-Berry', 'Morne-Berri,mo er nai bei er li,Морне-Берри,Морне-Беррі,莫尔奈贝尔里', '47.0488900', '2.8711100', 'A', 'ADM4', 'FR', '', '24', '18', '182', '18154', 212, 0, 214, 'Europe/Paris', '2016-02-18', 3027939, 3025480, NULL, '18350'),
(6424420, 'Maurens', 'Maurens', 'Maurencs,Moran,mo lang,Моран,莫朗', '44.9352800', '0.4836100', 'A', 'ADM4', 'FR', '', '75', '24', '241', '24259', 1035, 0, 120, 'Europe/Paris', '2016-02-18', 11071620, 3021042, NULL, '24140'),
(6424421, 'Upie', 'Upie', 'Jupi,Upia,Upiá,yu pi ye,Юпі,于皮耶', '44.8047200', '4.9786100', 'A', 'ADM4', 'FR', '', '84', '26', '263', '26358', 1432, 0, 203, 'Europe/Paris', '2016-02-18', 11071625, 3020781, NULL, '26120'),
(6424422, 'Nottonville', 'Nottonville', 'Nottonvil\',nuo tong wei er,Ноттонвіль,诺通维尔', '48.1125000', '1.5055600', 'A', 'ADM4', 'FR', '', '24', '28', '282', '28283', 300, 0, 119, 'Europe/Paris', '2016-02-18', 3027939, 3019316, NULL, '28140'),
(6424423, 'Pessan', 'Pessan', '', '43.6205600', '0.6483300', 'A', 'ADM4', 'FR', '', '76', '32', '321', '32312', 703, 0, 173, 'Europe/Paris', '2016-02-18', 11071623, 3016194, NULL, '32550');
INSERT INTO `villes` (`id`, `name`, `asciiname`, `alternatenames`, `latitude`, `longitude`, `feature class`, `feature code`, `country code`, `cc2`, `admin1 code`, `admin2 code`, `admin3 code`, `admin4 code`, `population`, `elevation`, `gtopo30`, `timezone`, `modification date`, `adm1`, `adm2`, `adm4`, `zip`) VALUES
(6424424, 'Lacoste', 'Lacoste', '', '43.6466700', '3.4366700', 'A', 'ADM4', 'FR', '', '76', '34', '342', '34124', 285, 0, 177, 'Europe/Paris', '2016-02-18', 11071623, 3013500, NULL, '34800'),
(6424425, 'Nizas', 'Nizas', '', '43.5130600', '3.4077800', 'A', 'ADM4', 'FR', '', '76', '34', '341', '34184', 579, 0, 73, 'Europe/Paris', '2016-02-18', 11071623, 3013500, NULL, '34320'),
(6424426, 'Cize', 'Cize', 'Siz,Сиз,Сіз', '46.7316700', '5.9100000', 'A', 'ADM4', 'FR', '', '27', '39', '392', '39153', 820, 0, 524, 'Europe/Paris', '2016-02-18', 11071619, 3012051, NULL, '39300'),
(6424427, 'Marclopt', 'Marclopt', 'Marklo,ma er ke luo pu,Маркло,马尔克洛普', '45.6650000', '4.2094400', 'A', 'ADM4', 'FR', '', '84', '42', '421', '42135', 490, 0, 341, 'Europe/Paris', '2016-02-18', 11071625, 2997870, NULL, '42210'),
(6424428, 'Nadillac', 'Nadillac', '', '44.5626000', '1.5191000', 'A', 'ADM4', 'FR', '', '76', '46', '461', '46210', 69, 0, 349, 'Europe/Paris', '2016-02-18', 11071623, 2997524, NULL, '46360'),
(6424429, 'Sos', 'Sos', 'Sos,Sòs,suo zhen,Сос,索镇', '44.0425000', '0.1402800', 'A', 'ADM4', 'FR', '', '75', '47', '474', '47302', 708, 0, 125, 'Europe/Paris', '2016-02-18', 11071620, 2997523, NULL, '47170,47170,47170'),
(6424430, 'Trémons', 'Tremons', '', '44.4100000', '0.8994400', 'A', 'ADM4', 'FR', '', '75', '47', '473', '47314', 367, 0, 114, 'Europe/Paris', '2016-02-18', 11071620, 2997523, NULL, '47140'),
(6424432, 'Quibou', 'Quibou', '', '49.0680600', '-1.2000000', 'A', 'ADM4', 'FR', '', '28', '50', '504', '50420', 907, 0, 65, 'Europe/Paris', '2016-02-18', 11071621, 2996268, NULL, '50750'),
(6424433, 'Ravigny', 'Ravigny', '', '48.4472200', '-0.0619400', 'A', 'ADM4', 'FR', '', '52', '53', '533', '53187', 214, 0, 203, 'Europe/Paris', '2016-02-18', 2988289, 2994932, NULL, '53370'),
(6424434, 'Gye', 'Gye', 'Zhi,gay,ji ai,Жи,Жі,گای,吉埃', '48.6200000', '5.8755600', 'A', 'ADM4', 'FR', '', '44', '54', '544', '54242', 198, 0, 224, 'Europe/Paris', '2016-02-21', 11071622, 2994111, NULL, '54113'),
(6424435, 'Gimécourt', 'Gimecourt', '', '48.8491700', '5.3686100', 'A', 'ADM4', 'FR', '', '44', '55', '552', '55210', 37, 0, 270, 'Europe/Paris', '2016-02-21', 11071622, 2994106, NULL, '55260'),
(6424436, 'Ley', 'Ley', '', '48.7355600', '6.6566700', 'A', 'ADM4', 'FR', '', '44', '57', '572', '57397', 110, 0, 224, 'Europe/Paris', '2016-02-21', 11071622, 2991627, NULL, '57810'),
(6424437, 'Moussy', 'Moussy', 'Mussi,mu xi,Мусси,Муссі,穆西', '47.1922200', '3.4536100', 'A', 'ADM4', 'FR', '', '27', '58', '584', '58184', 118, 0, 306, 'Europe/Paris', '2016-02-18', 11071619, 2990371, NULL, '58700'),
(6424438, 'Godenvillers', 'Godenvillers', 'Godanviler,Godanville,ge dang wei lai er,Годанвилер,Годанвілле,戈当维莱尔', '49.5888900', '2.5527800', 'A', 'ADM4', 'FR', '', '32', '60', '602', '60276', 156, 0, 86, 'Europe/Paris', '2016-02-18', 11071624, 2989663, NULL, '60420'),
(6424439, 'Litz', 'Litz', 'Lic,Ліц', '49.4163000', '2.3327000', 'A', 'ADM4', 'FR', '', '32', '60', '602', '60366', 344, 0, 78, 'Europe/Paris', '2016-02-18', 11071624, 2989663, NULL, '60510'),
(6424440, 'Bomy', 'Bomy', '', '50.5738900', '2.2350000', 'A', 'ADM4', 'FR', '', '32', '62', '625', '62153', 596, 0, 106, 'Europe/Paris', '2016-02-18', 11071624, 2988430, NULL, '62960'),
(6424441, 'Cucq', 'Cucq', '', '50.4769400', '1.6186100', 'A', 'ADM4', 'FR', '', '32', '62', '624', '62261', 5167, 0, 6, 'Europe/Paris', '2016-02-18', 11071624, 2988430, NULL, '62780,62780,62780'),
(6424442, 'Offekerque', 'Offekerque', '', '50.9411100', '2.0183300', 'A', 'ADM4', 'FR', '', '32', '62', '625', '62634', 1091, 0, 3, 'Europe/Paris', '2016-02-18', 11071624, 2988430, NULL, '62370'),
(6424443, 'Doumy', 'Doumy', '', '43.4469400', '-0.3758300', 'A', 'ADM4', 'FR', '', '75', '64', '643', '64203', 267, 0, 266, 'Europe/Paris', '2016-02-18', 11071620, 2984887, NULL, '64450'),
(6424444, 'Vidou', 'Vidou', 'Vido,Vidou,Vidu,Vidòu,wei du,Виду,Віду,维杜', '43.2988900', '0.3238900', 'A', 'ADM4', 'FR', '', '76', '65', '653', '65461', 88, 0, 333, 'Europe/Paris', '2016-02-18', 11071623, 3013726, NULL, '65220'),
(6424445, 'Souanyas', 'Souanyas', 'Soanyes,Suanias,su a ni a,Суаниас,Суаніас,苏阿尼阿', '42.5497200', '2.2788900', 'A', 'ADM4', 'FR', '', '76', '66', '663', '66197', 39, 0, 835, 'Europe/Paris', '2016-02-18', 11071623, 2984885, NULL, '66360'),
(6424446, 'Sornay', 'Sornay', 'Sorne,Сорне', '47.2783300', '5.6977800', 'A', 'ADM4', 'FR', '', '27', '70', '702', '70494', 305, 0, 201, 'Europe/Paris', '2016-02-18', 11071619, 3013737, NULL, '70150'),
(6424447, 'Meillerie', 'Meillerie', '', '46.4072200', '6.7197200', 'A', 'ADM4', 'FR', '', '84', '74', '744', '74175', 315, 0, 382, 'Europe/Paris', '2016-02-18', 11071625, 3013736, NULL, '74500'),
(6424448, 'Gouy', 'Gouy', '', '49.3544400', '1.1475000', 'A', 'ADM4', 'FR', '', '28', '76', '763', '76313', 813, 0, 79, 'Europe/Paris', '2016-02-18', 11071621, 2975248, NULL, '76520'),
(6424449, 'Nègrepelisse', 'Negrepelisse', '', '44.0752800', '1.5216700', 'A', 'ADM4', 'FR', '', '76', '82', '822', '82134', 5056, 0, 105, 'Europe/Paris', '2016-02-18', 11071623, 2973357, NULL, '82800'),
(6424450, 'Tanlay', 'Tanlay', 'Tanle,tang lai,Танле,唐莱', '47.8467000', '4.0877000', 'A', 'ADM4', 'FR', '', '27', '89', '892', '89407', 1123, 0, 158, 'Europe/Paris', '2016-02-18', 11071619, 2967222, NULL, '89430,89430,89430'),
(6424451, 'Villevallier', 'Villevallier', 'Vil\'val\'e,wei er wa li ye,Вильвалье,Вільвальє,维尔瓦利耶', '48.0247200', '3.3138900', 'A', 'ADM4', 'FR', '', '27', '89', '891', '89468', 425, 0, 81, 'Europe/Paris', '2016-02-18', 11071619, 2967222, NULL, '89330'),
(6424452, 'Bey', 'Bey', 'Be,Bej,bei zhen,by,Бе,Бей,Բե,بي,贝镇', '46.2194400', '4.8458300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01042', 244, 0, 211, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424453, 'Barbaira', 'Barbaira', '', '43.1850000', '2.5122200', 'A', 'ADM4', 'FR', '', '76', '11', '111', '11027', 721, 0, 83, 'Europe/Paris', '2016-02-18', 11071623, 3036264, NULL, '11800'),
(6424454, 'Barsac', 'Barsac', 'Barcac,Barsak,Barçac,ba er sa ke,Барсак,巴尔萨克', '44.7308300', '5.2911100', 'A', 'ADM4', 'FR', '', '84', '26', '261', '26027', 163, 0, 392, 'Europe/Paris', '2016-02-18', 11071625, 3020781, NULL, '26150'),
(6424455, 'Arre', 'Arre', 'Ar,Arr,a er,Ар,Арр,阿尔', '43.9659000', '3.5198000', 'A', 'ADM4', 'FR', '', '76', '30', '303', '30016', 288, 0, 314, 'Europe/Paris', '2016-02-18', 11071623, 3016670, NULL, '30120'),
(6424456, 'Brax', 'Brax', 'Bra,Bracs,Braks,Brats,bu la,Бра,Бракс,布拉', '43.6136100', '1.2391700', 'A', 'ADM4', 'FR', '', '76', '31', '313', '31088', 2474, 0, 191, 'Europe/Paris', '2016-02-18', 11071623, 3013767, NULL, '31490'),
(6424457, 'Caro', 'Caro', 'Karo,Karozh,ka luo,karw,Каро,كارو,卡罗', '47.8641700', '-2.3191700', 'A', 'ADM4', 'FR', '', '53', '56', '563', '56035', 1167, 0, 111, 'Europe/Paris', '2016-02-18', 3030293, 2991879, NULL, '56140'),
(6424458, 'Boëcé', 'Boece', '', '48.5161100', '0.4577800', 'A', 'ADM4', 'FR', '', '28', '61', '613', '61048', 133, 0, 182, 'Europe/Paris', '2016-02-18', 11071621, 2989247, NULL, '61560'),
(6424459, 'Charnay', 'Charnay', 'Sharne,Шарне', '45.8905600', '4.6683300', 'A', 'ADM4', 'FR', '', '84', '69', '692', '69047', 1078, 0, 415, 'Europe/Paris', '2016-02-18', 11071625, 2987410, NULL, '69380'),
(6424461, 'Chenay', 'Chenay', '', '48.4494400', '0.1625000', 'A', 'ADM4', 'FR', '', '52', '72', '722', '72076', 199, 0, 145, 'Europe/Paris', '2016-02-18', 2988289, 2975926, NULL, '72610'),
(6424462, 'Murs', 'Murs', 'Mjur,mi er,Мюр,米尔', '43.9519400', '5.2413900', 'A', 'ADM4', 'FR', '', '93', '84', '841', '84085', 428, 0, 507, 'Europe/Paris', '2016-02-18', 2985244, 2970554, NULL, '84220'),
(6424463, 'Allevard', 'Allevard', '', '45.3936100', '6.0741700', 'A', 'ADM4', 'FR', '', '84', '38', '381', '38006', 3768, 0, 470, 'Europe/Paris', '2016-02-18', 11071625, 3012715, NULL, '38580'),
(6424464, 'Chevroux', 'Chevroux', 'Sevru,Shavru,Shevru,she fu lu,shyfrw,Шавру,Шевру,Շևրու,شيفرو,舍夫鲁', '46.3805600', '4.9486100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01102', 892, 0, 203, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424465, 'Anchamps', 'Anchamps', '', '49.9297800', '4.6745100', 'A', 'ADM4', 'FR', '', '44', '08', '081', '08011', 232, 0, 149, 'Europe/Paris', '2016-02-18', 11071622, 3037136, NULL, '08500'),
(6424466, 'Mogues', 'Mogues', '', '49.6513900', '5.2791700', 'A', 'ADM4', 'FR', '', '44', '08', '083', '08291', 151, 0, 285, 'Europe/Paris', '2016-02-18', 11071622, 3037136, NULL, '08110'),
(6424467, 'Saint-Eugène', 'Saint-Eugene', 'Sent-Ehzhen,Sent-Ezhen,sheng e re en,Сент-Ежен,Сент-Эжен,سینٹ-یوجین، چارینتے-مریتھمے,圣厄热恩', '45.5075000', '-0.2858300', 'A', 'ADM4', 'FR', '', '75', '17', '171', '17326', 306, 0, 109, 'Europe/Paris', '2016-02-18', 11071620, 3026644, NULL, '17520'),
(6424468, 'Saint-Just', 'Saint-Just', 'Sen-Zhjust,Sen-Zhust,sheng rui si,Сен-Жуст,Сен-Жюст,圣瑞斯', '46.9935000', '2.5091000', 'A', 'ADM4', 'FR', '', '24', '18', '181', '18218', 594, 0, 157, 'Europe/Paris', '2016-02-18', 3027939, 3025480, NULL, '18340'),
(6424469, 'Lubersac', 'Lubersac', '', '45.4447200', '1.4044400', 'A', 'ADM4', 'FR', '', '75', '19', '191', '19121', 2281, 0, 371, 'Europe/Paris', '2016-02-18', 11071620, 3023532, NULL, '19210'),
(6424470, 'Vexin-sur-Epte', 'Vexin-sur-Epte', 'Ecos,Eko,ai ke,Еко,埃科', '49.1588900', '1.6052800', 'A', 'ADM4', 'FR', '', '28', '27', '271', '27213', 953, 0, 107, 'Europe/Paris', '2016-07-29', 11071621, 3019317, NULL, '27510,27630,27630,27510,27630,27630,27420,27510,27510,27630,27510,27630,27420,27630'),
(6424472, 'Anduze', 'Anduze', '', '44.0547200', '3.9855600', 'A', 'ADM4', 'FR', '', '76', '30', '301', '30010', 3303, 0, 140, 'Europe/Paris', '2016-02-18', 11071623, 3016670, NULL, '30140'),
(6424473, 'Agde', 'Agde', '', '43.3100000', '3.4752800', 'A', 'ADM4', 'FR', '', '76', '34', '341', '34003', 24031, 0, 14, 'Europe/Paris', '2016-02-18', 11071623, 3013500, NULL, '34300,34300'),
(6424474, 'Vif', 'Vif', 'Vif,wei zhen,Виф,Віф,维镇', '45.0552800', '5.6700000', 'A', 'ADM4', 'FR', '', '84', '38', '381', '38545', 8092, 0, 313, 'Europe/Paris', '2016-02-18', 11071625, 3012715, NULL, '38450'),
(6424475, 'Cuq', 'Cuq', '', '44.0830600', '0.6983300', 'A', 'ADM4', 'FR', '', '75', '47', '471', '47076', 274, 0, 159, 'Europe/Paris', '2016-02-18', 11071620, 2997523, NULL, '47220'),
(6424476, 'Isse', 'Isse', '', '49.0661100', '4.2050000', 'A', 'ADM4', 'FR', '', '44', '51', '511', '51301', 129, 0, 81, 'Europe/Paris', '2016-02-18', 11071622, 2995603, NULL, '51150'),
(6424477, 'Vinay', 'Vinay', '', '49.0100000', '3.8986100', 'A', 'ADM4', 'FR', '', '44', '51', '512', '51643', 522, 0, 106, 'Europe/Paris', '2016-02-18', 11071622, 2995603, NULL, '51530'),
(6424478, 'Séné', 'Sene', 'Sene,Sine,sai nei,sene,Сене,セネ,塞内', '47.6197200', '-2.7372200', 'A', 'ADM4', 'FR', '', '53', '56', '563', '56243', 8527, 0, 15, 'Europe/Paris', '2016-02-18', 3030293, 2991879, NULL, '56860'),
(6424479, 'Dury', 'Dury', 'Djuri,di li,dwry,Дюри,Дюрі,دوري,迪里', '50.2469400', '3.0080600', 'A', 'ADM4', 'FR', '', '32', '62', '621', '62280', 341, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 2988430, NULL, '62156'),
(6424480, 'Nyer', 'Nyer', '', '42.5336100', '2.2758300', 'A', 'ADM4', 'FR', '', '76', '66', '663', '66123', 167, 0, 724, 'Europe/Paris', '2016-02-18', 11071623, 2984885, NULL, '66360'),
(6424481, 'Vanne', 'Vanne', '', '47.6050000', '5.8388900', 'A', 'ADM4', 'FR', '', '27', '70', '702', '70520', 93, 0, 205, 'Europe/Paris', '2016-02-18', 11071619, 3013737, NULL, '70130'),
(6424482, 'Avessé', 'Avesse', '', '47.9547200', '-0.2508300', 'A', 'ADM4', 'FR', '', '52', '72', '721', '72019', 372, 0, 83, 'Europe/Paris', '2016-02-18', 2988289, 2975926, NULL, '72350'),
(6424483, 'Méry', 'Mery', '', '45.6422200', '5.9386100', 'A', 'ADM4', 'FR', '', '84', '73', '732', '73155', 1320, 0, 374, 'Europe/Paris', '2016-02-18', 11071625, 2975517, NULL, '73420'),
(6424484, 'Chevry', 'Chevry', 'Sevri,Shevri,she fu li,shwry  an,shyfry,Шеври,Шеврі,Շևրի,شوری، ان,شيفري,舍夫里', '46.2808300', '6.0369400', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01103', 1217, 0, 508, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01170'),
(6424485, 'Chézery-Forens', 'Chezery-Forens', '', '46.2216700', '5.8663900', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01104', 419, 0, 587, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01200,01410'),
(6424486, 'Cize', 'Cize', 'Sicum,Siz,syz,xi ci,Сиз,Сіз,Սիզ,سيز,西兹', '46.2041700', '5.4455600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01106', 167, 0, 326, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424487, 'Cleyzieu', 'Cleyzieu', 'Cllêziœx,Klejz\'e,Klez\'jo,Klezje,Klezyo,ke lai qi e,klyzyw,Клезьё,Клезје,Клейзьє,Կլեզյո,كليزيو,کلیزیو,克莱齐厄', '45.9077800', '5.4305600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01107', 133, 0, 593, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424489, 'Colomieu', 'Colomieu', 'Kolom\'jo,Kolome,Kolomio,Kolomje,ke luo mi e,kwlwmyw,Коломьё,Коломє,Коломје,Կոլոմիո,كولوميو,科洛米厄', '45.7330600', '5.6219400', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01110', 114, 0, 324, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424490, 'Conand', 'Conand', 'Konan,ke nan,kwnan,Конан,Կոնան,كونان,科南', '45.8925000', '5.4711100', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01111', 103, 0, 418, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424491, 'Condeissiat', 'Condeissiat', 'Kondes\'ja,Kondesia,Kondesja,kong dai xi ya,kwndysya,Кондесья,Кондесја,Կոնդեսիա,كونديسيا,孔代西亚', '46.1583300', '5.0800000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01113', 757, 0, 245, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01400'),
(6424492, 'Confort', 'Confort', 'Konfor,kong fu er,kwnfwr,Конфор,Կոնֆոր,كونفور,孔福尔', '46.1500000', '5.8230600', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01114', 510, 0, 562, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01200'),
(6424493, 'Confrançon', 'Confrancon', 'Konfranson,kong fu lang song,kwnfransw,Конфрансон,Կոնֆրանսոն,كونفرانسو,孔夫朗松', '46.2672200', '5.0652800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01115', 1114, 0, 199, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01310'),
(6424494, 'Contrevoz', 'Contrevoz', 'Kontrevo,kong te lei wo,kwntryfw,Контрево,Կոնտրևո,كونتريفو,孔特勒沃', '45.8061100', '5.6283300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01116', 530, 0, 370, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424495, 'Conzieu', 'Conzieu', 'Konz\'e,Konz\'jo,Konzje,Konzyo,kong qi e,kwnzyw,Конзьё,Конзьє,Конзје,Կոնզյո,كونزيو,孔齐厄', '45.7261100', '5.6072200', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01117', 128, 0, 350, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424496, 'Corbonod', 'Corbonod', 'Korbono,ke er bo nuo,kwrbwnw,Корбоно,Կորբոնո,كوربونو,科尔博诺', '45.9675000', '5.8229000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01118', 1168, 0, 348, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01420'),
(6424497, 'Corlier', 'Corlier', '', '46.0302800', '5.4991700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01121', 121, 0, 782, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01110'),
(6424498, 'Cormaranche-en-Bugey', 'Cormaranche-en-Bugey', '', '45.9530600', '5.6111100', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01122', 855, 0, 850, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01110'),
(6424499, 'Cormoranche-sur-Saône', 'Cormoranche-sur-Saone', 'Kormorans syur Son,Kormoransh sir Saon,Kormoransh-sjur-Son,kwrmwransh-swr-swn,suo en he pan ke er shao lang shen,Корморанш сир Саон,Корморанш-сюр-Сон,Կորմորանշ սյուր Սոն,كورمورانش-سور-سون,索恩河畔科尔绍朗什', '46.2408300', '4.8313900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01123', 1051, 0, 177, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424501, 'Corveissiat', 'Corveissiat', 'Korves\'ja,Korvesia,ke er wei xi ya,kwrfyssya,Корвесья,Կորվեսիա,كورفيسسيا,科尔韦西亚', '46.2430600', '5.4813900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01125', 582, 0, 455, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424502, 'Courmangoux', 'Courmangoux', '', '46.3311100', '5.3688900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01127', 495, 0, 283, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01370'),
(6424503, 'Crans', 'Crans', 'Kran,ke lang,kran,Кран,Կրան,كران,克朗', '45.9650000', '5.1905600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01129', 271, 0, 304, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01320'),
(6424504, 'Cras-sur-Reyssouze', 'Cras-sur-Reyssouze', 'Kra sir Resuz,Kra syur Resuz,Kra-sjur-Rejssuz,Kra-sjur-Resuz,kra-swr-ryswz,lei su ci he pan ke la,Кра сир Ресуз,Кра-сюр-Рейссуз,Кра-сюр-Ресуз,Կրա սյուր Ռեսուզ,كرا-سور-ريسوز,雷苏兹河畔克拉', '46.3083300', '5.1655600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01130', 1206, 0, 199, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424505, 'Cressin-Rochefort', 'Cressin-Rochefort', 'Kresen Rosfor,Kresen Roshfor,Kressen-Roshfor,ke lei sang-luo she fu er,krsn-rwshfwr,krysyn-rwshfwr,Кресен Рошфор,Крессен-Рошфор,Կրեսեն Ռոշֆոր,كريسين-روشفور,کرسن-روشفور,克雷桑－罗舍福尔', '45.7767000', '5.7617000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01133', 368, 0, 276, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01350'),
(6424506, 'Crottet', 'Crottet', 'Crotet,Crotèt,Krote,Krotte,ke luo tai,krwtyh,Кроте,Кротте,Կրոթե,كروتيه,克罗泰', '46.2772200', '4.8922200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01134', 1721, 0, 203, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01750,01290'),
(6424507, 'Cruzilles-lès-Mépillat', 'Cruzilles-les-Mepillat', 'Krizij le Mepija,Krjuzij-le-Mepija,Krjuzij-le-Mepijja,Kryuziy le Mepiyya,ke lu qi ye lai mei pi ya,krwzyl-lyh-mybya,Кризиј ле Мепија,Крюзий-ле-Мепийя,Крюзій-ле-Мепія,Կրյուզիյ լե Մեպիյյա,كروزيل-ليه-ميبيا,克吕齐耶莱梅皮亚', '46.2247200', '4.8805600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01136', 806, 0, 216, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424508, 'Culoz', 'Culoz', '', '45.8486100', '5.7816700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01138', 2920, 0, 250, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01350'),
(6424509, 'Curciat-Dongalon', 'Curciat-Dongalon', 'Kirsja Dongalon,Kjurs\'ja-Dongalon,Kyursya Dongalon,kwrsya-dwnghalw,qu er xi ya-dong jia long,Кирсја Донгалон,Кюрсья-Донгалон,Կյուրսյա Դոնգալոն,كورسيا-دونغالو,屈尔西亚－东加隆', '46.4750000', '5.1575000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01139', 454, 0, 216, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424510, 'Curtafond', 'Curtafond', 'Kirtafon,Kjurtafon,Kyurtafon,kwrtafwn,qu er ta feng,Киртафон,Кюртафон,Կյուրտաֆոն,كورتافون,屈尔塔丰', '46.2725000', '5.0886100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01140', 690, 0, 219, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01310'),
(6424511, 'Dagneux', 'Dagneux', '', '45.8516700', '5.0680600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01142', 4014, 0, 204, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01120'),
(6424512, 'Divonne-les-Bains', 'Divonne-les-Bains', '', '46.3566700', '6.1427800', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01143', 7926, 0, 478, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01220'),
(6424514, 'Dompierre-sur-Veyle', 'Dompierre-sur-Veyle', 'Domp\'er-sjur-Vel\',Domperr-sjur-Vejl\',Dompier syur Vel,Dompjer sir Vel,dwmbyyr-swr-fyl,wei er he pan dong pi ai,Домпьер-сюр-Вель,Домпєрр-сюр-Вейль,Домпјер сир Вел,Դոմպիեր սյուր Վել,دومبيير-سور-فيل,韦尔河畔东皮埃', '46.0711100', '5.2047200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01145', 1208, 0, 284, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01240'),
(6424515, 'Dompierre-sur-Chalaronne', 'Dompierre-sur-Chalaronne', 'Domp\'er-sjur-Shalaron,Domperr-sjur-Shalaronn,Dompier syur Salaron,Dompjer sir Shalaron,dwmbyyr-swr-shalarwn,sha la long en he pan dong pi ai,Домпьер-сюр-Шаларон,Домпєрр-сюр-Шаларонн,Домпјер сир Шаларон,Դոմպիեր սյուր Շալարոն,دومبيير-سور-شالارون,沙拉龙恩河畔东皮埃', '46.1433300', '4.9044400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01146', 380, 0, 243, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01400'),
(6424516, 'Domsure', 'Domsure', 'Domsir,Domsjur,Donsjur,Donsyur,dong xu er,dwmswr,Домсир,Домсюр,Донсюр,Դոնսյուր,دومسور,东叙尔', '46.4191700', '5.2950000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01147', 477, 0, 227, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01270'),
(6424518, 'Douvres', 'Douvres', 'Duvr,du fu er,dwfr,Дувр,Դուվր,دوفر,杜夫尔', '45.9888900', '5.3730600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01149', 948, 0, 279, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01500'),
(6424519, 'Drom', 'Drom', 'Drom,de long,drwm,Дром,Դրոմ,دروم,德龙', '46.2175000', '5.3686100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01150', 205, 0, 324, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424520, 'Druillat', 'Druillat', 'Drjuja,Drjujja,Dryuya,de lu yi ya,drwyya,Дрюйя,Дрюя,Դրյույա,دروييا,德吕伊亚', '46.0600000', '5.3172200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01151', 1130, 0, 273, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01160'),
(6424521, 'Échenevex', 'Echenevex', 'Echenevex,Eshneve,ai she na,ayshynyfyh,Ешневе,أيشينيفيه,埃舍纳', '46.3088900', '6.0361100', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01153', 1596, 0, 587, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01170'),
(6424522, 'Étrez', 'Etrez', 'Ehtre,Etre,Etrez,ai te lei,aytryh,Етре,Етрез,Этре,أيتريه,埃特雷', '46.3341700', '5.1847200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01154', 805, 0, 222, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424523, 'Évosges', 'Evosges', 'Ehvozh,Evosges,Evoz,Evozh,afwsghyh,ai wo ri,Евож,Эвож,Էվոժ,أفوسغيه,埃沃日', '45.9612000', '5.4989000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01155', 135, 0, 760, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424524, 'Fareins', 'Fareins', 'Faren,fa lan si,faryyn,Фарен,Ֆարեն,فاريين,法兰斯', '46.0194400', '4.7616700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01157', 2099, 0, 200, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01480'),
(6424525, 'Feillens', 'Feillens', 'Fejan,Feyan,fei yan,fyan,fylyn,Фейан,Феян,Ֆեյան,فيلين,فیان,费延', '46.3358300', '4.8911100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01159', 3107, 0, 180, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01570'),
(6424527, 'Flaxieu', 'Flaxieu', 'Flaks\'e,Flaks\'jo,flaksyw,fu la xi e,Флаксьё,Флаксьє,Ֆլաքսիո,فلاكسيو,夫拉西厄', '45.8083300', '5.7352800', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01162', 60, 0, 291, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01350'),
(6424528, 'Foissiat', 'Foissiat', 'Fuas\'ja,Fuasia,fu lu wa xi ya,fwasya,Фуасья,Ֆուասիա,فواسيا,夫鲁瓦西亚', '46.3702800', '5.1747200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01163', 1884, 0, 222, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424529, 'Francheleins', 'Francheleins', 'Franshlen,Franslen,franshylyn,fu lang she lan,Франшлен,Ֆրանշլեն,فرانشيلين,夫朗舍兰', '46.0736100', '4.8086100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01165', 1270, 0, 215, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01090,01090,01090'),
(6424530, 'Frans', 'Frans', 'Fran,fran,fu lang,Фран,Ֆրան,فران,夫朗', '45.9913900', '4.7738900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01166', 1994, 0, 202, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01480'),
(6424531, 'Garnerans', 'Garnerans', 'Garneran,gharnyran,jia er na lang,Гарнеран,Գարներան,غارنيران,加尔纳朗', '46.2058300', '4.8411100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01167', 642, 0, 205, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424532, 'Genouilleux', 'Genouilleux', 'Zenuyyo,Zhenue,Zhenujjo,ghynwyyw,re nu yue,Женуйё,Женує,Ժենույյո,غينوييو,热努约', '46.1188900', '4.7869400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01169', 590, 0, 187, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01090'),
(6424533, 'Béard-Géovreissiat', 'Beard-Geovreissiat', 'Bear Zeovresya,Bear-Zheovres\'ja,Geovreissiat,Géovreissiat,Zheovresja,ghywfrysya,re ao fu lei xi ya,Беар-Жеовресья,Жеовресја,Բեար Ժեովրեսյա,غيوفريسيا,热奥夫雷西亚', '46.1898000', '5.5574000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01170', 935, 0, 555, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01460'),
(6424534, 'Géovreisset', 'Geovreisset', 'Zeovrese,Zheovres,Zheovresse,ghywfrysyh,re ao fu lei sai,Жеоврес,Жеоврессе,Ժեովրեսե,غيوفريسيه,热奥夫雷塞', '46.2561100', '5.6177800', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01171', 912, 0, 663, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01100'),
(6424536, 'Gex', 'Gex', 'Zheks,ghyks,jegseu,jekusu,re ke si,zhks  an,Жекс,غيكس,ژکس، ان,ジェクス,热克斯,젝스', '46.3333300', '6.0577800', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01173', 9882, 0, 616, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01170'),
(6424537, 'Giron', 'Giron', 'Zhiron,Ziron,ghyrwn,ri long,Жирон,Ժիրոն,غيرون,日龙', '46.2255600', '5.7741700', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01174', 154, 0, 1008, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01130'),
(6424538, 'Gorrevod', 'Gorrevod', 'Gorevo,Gorrevo,Gorrevod,Gorrevôd,Gorvo,ghwryfw,ruo lei wo,Горво,Горрево,Գոռևո,غوريفو,若勒沃', '46.4158300', '4.9411100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01175', 781, 0, 185, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424539, 'Grand-Corent', 'Grand-Corent', 'Gran Koran,Gran-Koran,da ke lang,ghran-kwrwn,Гран-Коран,Գրան Կորան,غران-كورون,大科朗', '46.1991700', '5.4308300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01177', 158, 0, 497, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424540, 'Grièges', 'Grieges', 'Griez,Griezh,ge li ai ri,ghryyj,Гриеж,Грієж,Գրիեժ,غرييج,格里埃日', '46.2547200', '4.8502800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01179', 1850, 0, 185, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424541, 'Grilly', 'Grilly', '', '46.3305600', '6.1150000', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01180', 736, 0, 511, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01220'),
(6424542, 'Groissiat', 'Groissiat', 'Gruas\'ja,Gruasya,ge lu wa xi ya,ghrwassya,grwasya,Груасья,Գրուասյա,غرواسسيا,گرواسیا,格鲁瓦西亚', '46.2291700', '5.6125000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01181', 1135, 0, 530, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01100'),
(6424544, 'Guéreins', 'Guereins', 'Geren,gai lan,ghwyryyn,Герен,Գերեն,غويريين,盖兰', '46.1080600', '4.7797200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01183', 1275, 0, 185, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01090'),
(6424545, 'Hauteville-Lompnes', 'Hauteville-Lompnes', '', '45.9792000', '5.5997000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01185', 4116, 0, 801, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01110'),
(6424546, 'Hostiaz', 'Hostiaz', 'Ost\'ja,Ostija,ao si di ya ci,hwstya,Остья,Остія,Հոսթիա,هوستيا,奥斯蒂亚兹', '45.9016700', '5.5344400', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01186', 81, 0, 812, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01110'),
(6424547, 'Haut Valromey', 'Haut Valromey', '', '45.9977800', '5.6933300', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01187', 301, 0, 742, 'Europe/Paris', '2016-07-29', 11071625, 3038422, NULL, '01260,01260,01260,01260'),
(6424548, 'Illiat', 'Illiat', 'Ijja,Il\'ja,Illiacus,Ilya,aylya,yi li ya,Ійя,Илья,Իլյա,إيليا,伊利亚', '46.1902800', '4.8883300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01188', 557, 0, 220, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424549, 'Innimond', 'Innimond', '', '45.7827800', '5.5725000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01190', 113, 0, 882, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01680'),
(6424550, 'Izenave', 'Izenave', '', '46.0380600', '5.5250000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01191', 161, 0, 693, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424551, 'Izernore', 'Izernore', '', '46.2205600', '5.5538900', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01192', 2262, 0, 466, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01580'),
(6424552, 'Izieu', 'Izieu', 'Iz\'e,Iz\'jo,Izyo,azyw,yi qi e,Ізьє,Изьё,Իզյո,إزيو,伊齐厄', '45.6547200', '5.6436100', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01193', 202, 0, 404, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424553, 'Jassans-Riottier', 'Jassans-Riottier', '', '45.9855600', '4.7566700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01194', 5955, 0, 174, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01480'),
(6424554, 'Jasseron', 'Jasseron', 'Jasseron,Jâsseron,Zasron,Zhasron,Zhassron,jasyrwn,ya se long,Жасрон,Жассрон,Ժասրոն,جاسيرون,جسسیروں,雅瑟龙', '46.2125000', '5.3244400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01195', 1482, 0, 293, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424555, 'Jayat', 'Jayat', 'Zeyya,Zheja,Zhejja,jayat,ya ya,Жейя,Жея,Ժեյյա,جايات,雅亚', '46.3705600', '5.1208300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01196', 1021, 0, 207, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424556, 'Journans', 'Journans', 'Zhurnan,Zurnan,jwrnan,ru er nan,zhwrnan,Журнан,Ժուրնան,جورنان,ژورنان,茹尔南', '46.1447200', '5.3325000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01197', 316, 0, 292, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424557, 'Jujurieux', 'Jujurieux', 'Zhuzhure,jwjwryw  ayn,rui rui li e,Жужурє,جوجوريو، أين,瑞瑞里厄', '46.0400000', '5.4088900', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01199', 2035, 0, 305, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01640'),
(6424558, 'Lagnieu', 'Lagnieu', '', '45.9036100', '5.3491700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01202', 6726, 0, 217, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01150'),
(6424559, 'Laiz', 'Laiz', 'Le,lai ci,lyz,Ле,Լե,ليز,莱兹', '46.2483300', '4.8888900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01203', 1111, 0, 181, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424560, 'Le Poizat-Lalleyriat', 'Le Poizat-Lalleyriat', 'Laleria,Lallejrja,Laller\'ja,la lai li ya,lalyrya,Лаллейря,Лаллерья,Լալերիա,لاليريا,拉莱里亚', '46.1547200', '5.7147200', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01204', 231, 0, 816, 'Europe/Paris', '2016-07-29', 11071625, 3038422, NULL, '01130,01130'),
(6424561, 'Lancrans', 'Lancrans', 'Lankran,lang ke lang,lankran,Ланкран,Լանկրան,لانكران,朗克朗', '46.1244400', '5.8333300', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01205', 1047, 0, 477, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01200'),
(6424562, 'Lantenay', 'Lantenay', 'Lantene,lang te nai,lantynay,Лантене,Լանտենե,لانتيناي,朗特奈', '46.0575000', '5.5416700', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01206', 254, 0, 733, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424563, 'Lavours', 'Lavours', 'Lavur,la wu er,lafwr,Лавур,Լավուր,لافور,拉武尔', '45.8091700', '5.7725000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01208', 139, 0, 234, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01350'),
(6424564, 'Léaz', 'Leaz', 'Lea,lai a ci,lyaz,Леа,Լեա,لياز,莱阿兹', '46.0980600', '5.8866700', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01209', 529, 0, 498, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01200'),
(6424566, 'Lent', 'Lent', 'Lan,lan  an,lang zhen,lwn,Лан,Լան,لان، ان,لون,朗镇', '46.1194400', '5.1958300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01211', 1277, 0, 255, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01240'),
(6424567, 'Lescheroux', 'Lescheroux', 'Lesheru,Leshru,Lesru,lai she lu,lyshyrw,Лешеру,Лешру,Լեշրու,ليشيرو,莱舍鲁', '46.4066700', '5.1463900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01212', 689, 0, 215, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424568, 'Leyment', 'Leyment', 'Lejman,Leman,Lement,Lêment,lai mang,lymwn,Лейман,Леман,Լեման,ليمون,莱芒', '45.9233300', '5.2950000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01213', 1273, 0, 251, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01150'),
(6424569, 'Leyssard', 'Leyssard', '', '46.1556000', '5.4764000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01214', 157, 0, 567, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01450'),
(6424570, 'Lhuis', 'Lhuis', 'Ljui,Lues,Lués,Lyui,lu yi si,lwys,Люи,Люї,Լյուի,لويس,吕伊斯', '45.7466700', '5.5333300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01216', 835, 0, 395, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01680'),
(6424571, 'Lochieu', 'Lochieu', 'Losh\'jo,Loshe,Losyo,luo xi e,lwshyw,Лошьё,Лошє,Լոշյո,لوشيو,洛希厄', '45.9305600', '5.7277800', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01218', 88, 0, 612, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01260'),
(6424572, 'Lompnas', 'Lompnas', 'Lomna,Lompnaz,Lonna,long pu na si,lwmna,Ломна,Лонна,Լոննա,لومنا,隆普纳斯', '45.8030600', '5.5202800', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01219', 148, 0, 640, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01680'),
(6424573, 'Lompnieu', 'Lompnieu', 'Lomn\'e,Lon\'jo,Lonyo,long pu ni e,lwmnyw,Ломньє,Лоньё,Լոնյո,لومنيو,隆普尼厄', '45.9616700', '5.6608300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01221', 118, 0, 668, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01260'),
(6424575, 'Lurcy', 'Lurcy', 'Ljursi,Lyursi,lu er xi,lwrsy,Люрси,Люрсі,Լյուրսի,لورسي,吕尔西', '46.0627800', '4.7811100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01225', 394, 0, 203, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01090'),
(6424576, 'Magnieu', 'Magnieu', 'Man\'e,Man\'jo,Manyo,ma ni e,manyw,Маньё,Маньє,Մանյո,مانيو,马尼厄', '45.7755600', '5.7194400', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01227', 418, 0, 279, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424577, 'Maillat', 'Maillat', 'Maja,Majja,Maya,ma ya,mayla,Майя,Мая,Մայա,مايلا,马亚', '46.1291700', '5.5380600', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01228', 661, 0, 513, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424578, 'Malafretaz', 'Malafretaz', 'Malafreta,Monlafretat,Monlafretât,ma la fu lei ta ci,malafryta,Малафрета,Մալաֆրետա,مالافريتا,马拉夫雷塔兹', '46.3241700', '5.1466700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01229', 895, 0, 216, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424579, 'Mantenay-Montlin', 'Mantenay-Montlin', 'Mantene Monlen,Mantene-Monlen,mang te nai-meng lan,mantynay-mwnla,Мантене-Монлен,Մանտենե Մոնլեն,مانتيناي-مونلا,芒特奈－蒙兰', '46.4244400', '5.0983300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01230', 286, 0, 197, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424580, 'Manziat', 'Manziat', 'Manz\'ja,Manzia,mang qi ya,manzya,Манзья,Մանզիա,مانزيا,芒齐亚', '46.3594400', '4.9077800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01231', 1905, 0, 201, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01570'),
(6424581, 'Marboz', 'Marboz', 'Marbo,ma er bo ci,marbwz,Марбо,Մարբո,ماربوز,马尔博兹', '46.3425000', '5.2583300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01232', 2178, 0, 226, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01851'),
(6424582, 'Marchamp', 'Marchamp', 'Marsan,Marsham,Marshan,ma er shang,marsham,Маршам,Маршан,Մարշան,مارشام,马尔尚', '45.7866700', '5.5416700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01233', 113, 0, 560, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01680'),
(6424583, 'Marlieux', 'Marlieux', 'Marl\'e,Marl\'jo,Marlyo,ma er li e,marlyw,Марльё,Марльє,Մարլյո,مارليو,马尔利厄', '46.0647200', '5.0727800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01235', 844, 0, 269, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01240'),
(6424584, 'Marsonnas', 'Marsonnas', 'Marsona,Marsonna,ma er suo na si,marswnna,Марсонна,Մարսոնա,مارسوننا,马尔索纳斯', '46.3408300', '5.0711100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01236', 985, 0, 215, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424585, 'Martignat', 'Martignat', 'Martegne,Martegnê,Martin\'ja,Martinya,ma er di ni ya,martynya,Мартинья,Мартінья,Մարտինյա,مارتينيا,马尔蒂尼亚', '46.2094400', '5.6088900', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01237', 1615, 0, 511, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01100'),
(6424586, 'Massieux', 'Massieux', 'Mas\'e,Mas\'jo,Masyo,ma xi e,massyw,Масьё,Масьє,Մասյո,ماسسيو,马西厄', '45.9086100', '4.8302800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01238', 2409, 0, 213, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01600'),
(6424588, 'Meillonnas', 'Meillonnas', '', '46.2450000', '5.3519400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01241', 1301, 0, 272, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01370'),
(6424589, 'Mérignat', 'Merignat', '', '46.0694400', '5.4366700', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01242', 136, 0, 436, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01450'),
(6424590, 'Meximieux', 'Meximieux', '', '45.9044400', '5.1944400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01244', 7301, 0, 224, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01800'),
(6424591, 'Mézériat', 'Mezeriat', 'Mezer\'ja,Mezeria,Mezerja,mei ze li ya,myzyrya,mzrya,Мезерья,Мезеря,Մեզերիա,مزریا,ميزيريا,梅泽里亚', '46.2347200', '5.0472200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01246', 2054, 0, 199, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01660'),
(6424593, 'Mionnay', 'Mionnay', 'M\'onne,Mionne,Mjonne,mi ao nai,mywnay,Мйонне,Мьонне,Միոննե,ميوناي,米奥奈', '45.8950000', '4.9297200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01248', 2096, 0, 284, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01390'),
(6424594, 'Misérieux', 'Miserieux', 'Mizer\'jo,Mizere,mi ze li e,myzyryw,Мизерьё,Мізерє,ميزيريو,米泽里厄', '45.9733300', '4.8108300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01250', 1745, 0, 232, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01600'),
(6424595, 'Mogneneins', 'Mogneneins', 'Mon\'enen,Monenen,mo ni e nan,mwnyann,mwnynyyn,Моньенен,Моньєнен,Մոնենեն,مونينيين,مونیانن,莫尼厄南', '46.1383300', '4.8116700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01252', 718, 0, 221, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424596, 'Montagnat', 'Montagnat', 'Montan\'ja,Montanya,meng ta ni ya,mwntanya,Монтанья,Մոնտանյա,مونتانيا,蒙塔尼亚', '46.1708300', '5.2841700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01254', 1614, 0, 263, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424597, 'Montanges', 'Montanges', 'Montanz,Montanzh,meng tang ri,mwntanyy9,Монтанж,Մոնտանժ,مونتانيي9,蒙唐日', '46.1641700', '5.8013900', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01257', 332, 0, 605, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01200'),
(6424598, 'Montceaux', 'Montceaux', 'Monso,meng suo,mwnsyw,Монсо,Մոնսո,مونسيو,蒙索', '46.0963900', '4.7972200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01258', 1113, 0, 211, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01090'),
(6424599, 'Montcet', 'Montcet', 'Monse,meng sai,mwnsyh,Монсе,Մոնսե,مونسيه,蒙塞', '46.2123000', '5.1128000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01259', 664, 0, 245, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01310'),
(6424600, 'Monthieux', 'Monthieux', 'Mont\'e,Mont\'jo,Montyo,meng di e,mwntyw,Монтьё,Монтьє,Մոնտյո,مونتيو,蒙蒂厄', '45.9572200', '4.9402800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01261', 599, 0, 295, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01390'),
(6424601, 'Montluel', 'Montluel', '', '45.8516700', '5.0563900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01262', 6913, 0, 206, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01120,01120,01120'),
(6424602, 'Montracol', 'Montracol', 'Monrakol,Monrakol\',meng te la ke er,mwnrakw,mwntrakwl,Монраколь,Մոնրակոլ,مونتراکول,مونراكو,蒙特拉科尔', '46.1970000', '5.1227000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01264', 957, 0, 234, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01310'),
(6424603, 'Montrevel-en-Bresse', 'Montrevel-en-Bresse', 'Monrevel an Bres,Monrevel\'-an-Bres,Monrevel\'-an-Bress,bu lei si de qu meng lei wei er,mwnryfyl-aw-brys,Монревель-ан-Брес,Монревель-ан-Бресс,Մոնրևել ան Բրես,مونريفيل-أو-بريس,布雷斯地区蒙勒韦尔', '46.3366700', '5.1283300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01266', 2363, 0, 216, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424604, 'Murs-et-Gélignieux', 'Murs-et-Gelignieux', 'Mjur-e-Zhelin\'e,Mjur-eh-Zhelin\'jo,Myur e Zelinio,mi er he re li ni e,mwrs-ayh-ghylynyw,Мюр-е-Желіньє,Мюр-э-Желиньё,Մյուր է Ժելինիո,مورس-إيه-غيلينيو,米尔和热利尼厄', '45.6413900', '5.6619400', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01268', 236, 0, 232, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424605, 'Nantua', 'Nantua', '', '46.1533300', '5.6061100', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01269', 3639, 0, 485, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01460,01130'),
(6424607, 'Neuville-les-Dames', 'Neuville-les-Dames', 'Nevil\'-le-Dam,Njovil\'-le-Dam,Nyovil le Dam,na wei ye lai da mu,nwfy-lys-dam,nwwyl-lh-dam,Невіль-ле-Дам,Нёвиль-ле-Дам,Նյովիլ լե Դամ,نوفي-ليس-دام,نوویل-له-دام,纳维耶莱达姆', '46.1622200', '5.0036100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01272', 1511, 0, 241, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01400'),
(6424608, 'Neuville-sur-Ain', 'Neuville-sur-Ain', 'Nevil\'-sjur-En,Njovil\'-sjur-Ehn,Nyovil syur En,an he pan na wei ye,nwfy-swr-ayn,Невіль-сюр-Ен,Нёвиль-сюр-Эн,Նյովիլ սյուր Էն,نوفي-سور-أين,安河畔纳维耶', '46.0825000', '5.3722200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01273', 1549, 0, 295, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01160'),
(6424609, 'Nivollet-Montgriffon', 'Nivollet-Montgriffon', '', '46.0035000', '5.4710000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01277', 140, 0, 753, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424610, 'Oncieu', 'Oncieu', '', '45.9591700', '5.4733300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01279', 91, 0, 459, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424611, 'Ordonnaz', 'Ordonnaz', 'Ordonna,ao er duo na ci,awrdwnna,Ордонна,Օրդոննա,أوردوننا,奥尔多纳兹', '45.8372200', '5.5383300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01280', 135, 0, 844, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01510'),
(6424612, 'Ornex', 'Ornex', '', '46.2761100', '6.0933300', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01281', 3344, 0, 480, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01210'),
(6424613, 'Outriaz', 'Outriaz', 'Owtria,Utria,Utrja,awtrya,wu te li ya ci,Утриа,Утря,Ուտրիա,أوتريا,乌特里亚兹', '46.0672200', '5.5469400', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01282', 256, 0, 713, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424614, 'Oyonnax', 'Oyonnax', '', '46.2555600', '5.6550000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01283', 22884, 0, 546, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01100,01100,01100'),
(6424615, 'Ozan', 'Ozan', 'Ozan,ao cang,awza,Озан,Օզան,أوزا,奥藏', '46.3916700', '4.9155600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01284', 578, 0, 194, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424616, 'Parcieux', 'Parcieux', 'Pars\'e,Pars\'jo,Parsio,barsyw,pa er xi e,Парсьё,Парсьє,Պարսիո,بارسيو,帕尔西厄', '45.9155600', '4.8252800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01285', 1069, 0, 197, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01600'),
(6424617, 'Parves et Nattages', 'Parves et Nattages', 'Parv,barf,pa er fu,Парв,Պարվ,بارف,帕尔夫', '45.7441700', '5.7408300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01286', 351, 0, 504, 'Europe/Paris', '2016-07-29', 11071625, 3038422, NULL, '01300,01300'),
(6424618, 'Péron', 'Peron', 'Peron,byrwn,pei long,Перон,Պերոն,بيرون,佩龙', '46.1898000', '5.9273000', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01288', 2032, 0, 532, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01630'),
(6424619, 'Péronnas', 'Peronnas', '', '46.1786100', '5.2027800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01289', 6054, 0, 244, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01960'),
(6424620, 'Pérouges', 'Perouges', '', '45.9033300', '5.1794400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01290', 1204, 0, 285, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01800'),
(6424621, 'Perrex', 'Perrex', 'Perre,Perreks,byryh,pei lei ke si,Перре,Перрекс,Պերեքս,بيريه,佩雷克斯', '46.2456000', '4.9787000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01291', 841, 0, 206, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01540'),
(6424622, 'Peyriat', 'Peyriat', '', '46.1541700', '5.5102800', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01293', 169, 0, 627, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424623, 'Peyzieux-sur-Saône', 'Peyzieux-sur-Saone', 'Pejz\'e-sjur-Son,Pez\'jo-sjur-Son,Pezyo syur Son,byzyw-swr-swn,suo en he pan pei qi e,Пезьё-сюр-Сон,Пейзьє-сюр-Сон,Պեզյո սյուր Սոն,بيزيو-سور-سون,索恩河畔佩齐厄', '46.1268000', '4.8158000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01295', 429, 0, 228, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424625, 'Plagne', 'Plagne', 'Plan,Plan\',blanyyh,lei la ni,Плань,Պլան,بلانييه,勒拉尼', '46.1919400', '5.7283300', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01298', 125, 0, 779, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01130'),
(6424626, 'Polliat', 'Polliat', 'Pol\'ja,Polia,bo li ya,bwlya,Полья,Պոլիա,بوليا,波利亚', '46.2488900', '5.1258300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01301', 2412, 0, 225, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01310'),
(6424627, 'Pollieu', 'Pollieu', 'Pol\'e,Pol\'jo,Polio,bo li e,bwlyw,Польё,Польє,Պոլիո,بوليو,波利厄', '45.7997200', '5.7416700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01302', 156, 0, 279, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01350'),
(6424628, 'Poncin', 'Poncin', 'Ponsen,bwnsa,peng sang,Понсен,Պոնսեն,بونسا,蓬桑', '46.0850000', '5.4066700', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01303', 1618, 0, 259, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01450'),
(6424629, 'Pont-d\'Ain', 'Pont-d\'Ain', '', '46.0483300', '5.3363900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01304', 2571, 0, 241, 'Europe/Paris', '2017-04-19', 11071625, 3038422, NULL, '01160'),
(6424630, 'Pont-de-Vaux', 'Pont-de-Vaux', 'Pon de Vo,Pon-de-Vo,bwn-dw-fw,peng de wo,Пон-де-Во,Պոն դե Վո,بون-دو-فو,蓬德沃', '46.4319400', '4.9380600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01305', 2187, 0, 178, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424631, 'Pont-de-Veyle', 'Pont-de-Veyle', '', '46.2633300', '4.8877800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01306', 1545, 0, 178, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424632, 'Pougny', 'Pougny', 'Pun\'i,Punyi,bwnyy,pu ni,Пуньи,Пуньї,Պունյի,بونيي,普尼', '46.1397200', '5.9494400', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01308', 781, 0, 415, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01550'),
(6424634, 'Prémeyzel', 'Premeyzel', 'Premejzel\',Premezel,Premezel\',brymyzyh,pu lei mei ze er,Премезель,Премейзель,Պրեմեզել,بريميزيه,普雷梅泽尔', '45.6838900', '5.6480600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01310', 244, 0, 342, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424635, 'Prémillieu', 'Premillieu', 'Premijjo,Premil\'e,Premiyo,brymyyw,pu lei mi li e,Премийё,Премільє,Պրեմիյո,بريمييو,普雷米利厄', '45.8741700', '5.5713900', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01311', 35, 0, 898, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01110'),
(6424637, 'Priay', 'Priay', 'Prie,Priê,bryay,pryy,pu li ai,Прие,Пріе,Պրիե,برياي,پریی,普里艾', '46.0033300', '5.2900000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01314', 1459, 0, 235, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01160'),
(6424639, 'Ramasse', 'Ramasse', 'Ramas,Ramass,la ma si,ramas,Рамас,Рамасс,Ռամաս,راماس,拉马斯', '46.1950000', '5.3552800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01317', 250, 0, 353, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424640, 'Rancé', 'Rance', 'Rance,Rancê,Ranse,lang sai,ransh,ransyh,Рансе,Ռանսե,رانسه,رانسيه,朗塞', '45.9655600', '4.8688900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01318', 644, 0, 285, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01390'),
(6424641, 'Relevant', 'Relevant', 'Rel\'van,Relvan,lei lei wang,rwlwfan,Рельван,Ռելվան,رولوفان,勒勒旺', '46.0902800', '4.9494400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01319', 449, 0, 269, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01990'),
(6424642, 'Replonges', 'Replonges', '', '46.3104000', '4.8869000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01320', 3390, 0, 183, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01750'),
(6424643, 'Revonnas', 'Revonnas', 'Revona,Revonna,lei wo na si,rwfwna,Ревонна,Ռևոնա,روفونا,雷沃纳斯', '46.1622200', '5.3302800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01321', 718, 0, 332, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424644, 'Reyrieux', 'Reyrieux', '', '45.9344400', '4.8233300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01322', 4038, 0, 204, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01600'),
(6424645, 'Rignieux-le-Franc', 'Rignieux-le-Franc', 'Rin\'e-le-Fran,Rin\'jo-le-Fran,Rinyo le Fran,li ni e lei fu lang,rynyw-lw-fran  ayn,Риньё-ле-Фран,Риньє-ле-Фран,Ռինյո լե Ֆրան,رينيو-لو-فران، أين,里尼厄勒夫朗', '45.9400000', '5.1894400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01325', 947, 0, 275, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01800'),
(6424646, 'Rossillon', 'Rossillon', 'Rosiyon,Rossijon,luo xi yong,rwsylw,Российон,Россійон,Ռոսիյոն,روسيلو,罗西永', '45.8319400', '5.5936100', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01329', 147, 0, 336, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01510');
INSERT INTO `villes` (`id`, `name`, `asciiname`, `alternatenames`, `latitude`, `longitude`, `feature class`, `feature code`, `country code`, `cc2`, `admin1 code`, `admin2 code`, `admin3 code`, `admin4 code`, `population`, `elevation`, `gtopo30`, `timezone`, `modification date`, `adm1`, `adm2`, `adm4`, `zip`) VALUES
(6424647, 'Ruffieu', 'Ruffieu', 'Rjuf\'jo,Rjuffe,Ryufyo,lu fei e,rwfyw,Рюффє,Рюфьё,Ռյուֆյո,روفيو,吕菲厄', '45.9941700', '5.6633300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01330', 191, 0, 719, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01260'),
(6424648, 'Saint-André-de-Bâgé', 'Saint-Andre-de-Bage', 'Sent Andre de Baze,Sent-Andre-de-Bazhe,san-andryh-dw-bajyh  ayn,sheng an de lie de ba re,Сент-Андре-де-Баже,Սենտ Անդրե դե Բաժե,سان-أندريه-دو-باجيه، أين,سینٹ-آندرے-دے-بگے,圣安德烈德巴热', '46.3016700', '4.9233300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01332', 563, 0, 199, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01380'),
(6424649, 'Saint-André-de-Corcy', 'Saint-Andre-de-Corcy', 'Sent Andre de Korsi,Sent-Andre-de-Korsi,san-andryh-dw-kwrsy  ayn,sheng an de lie de ke er xi,Сент-Андре-де-Корси,Сент-Андре-де-Корсі,Սենտ Անդրե դե Կորսի,سان-أندريه-دو-كورسي، أين,سینٹ-آندرے-دے-کورکے,圣安德烈德科尔西', '45.9263900', '4.9522200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01333', 3007, 0, 296, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01390'),
(6424650, 'Saint-André-d\'Huiriat', 'Saint-Andre-d\'Huiriat', '', '46.2133300', '4.9122200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01334', 543, 0, 210, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424651, 'Saint-André-le-Bouchoux', 'Saint-Andre-le-Bouchoux', 'Sent Andre le Busu,Sent-Andre-le-Bushu,san-andryh-lw-bwshw  ayn,sheng an de lie lei bu shu,sn-andrh-lw-bwshw,Сент-Андре-ле-Бушу,Սենտ Անդրե լե Բուշու,سان-أندريه-لو-بوشو، أين,سن-آندره-لو-بوشو,سینٹ-آندرے-لے-وچوش,圣安德烈勒布舒', '46.1172200', '5.0786100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01335', 310, 0, 269, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01240'),
(6424652, 'Saint-André-sur-Vieux-Jonc', 'Saint-Andre-sur-Vieux-Jonc', 'Sent Andre syur Vyo Zon,Sent-Andre-sjur-V\'jo-Zhon,Sent-Andre-sjur-Ve-Zhonk,san-andryh-swr-fyw-jwn  ayn,wei e rong he pan sheng an de lie,Сент-Андре-сюр-Вьё-Жон,Сент-Андре-сюр-Вє-Жонк,Սենտ Անդրե սյուր Վյո Ժոն,سان-أندريه-سور-فيو-جون، أين,سینٹ-آندرے-سر-ےش-جونک,维厄容河畔圣安德烈', '46.1572200', '5.1463900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01336', 1055, 0, 252, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01960'),
(6424653, 'Saint-Bénigne', 'Saint-Benigne', 'Sen Benin,Sen-Benin\',san-bynynyyh  ayn,sheng bei ni ni,Сен-Бенинь,Сен-Бенінь,Սեն Բենին,سان-بينينييه، أين,سینٹ-بینیگنے,圣贝尼尼', '46.4447200', '4.9605600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01337', 1135, 0, 204, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424655, 'Saint-Cyr-sur-Menthon', 'Saint-Cyr-sur-Menthon', '', '46.2755600', '4.9730600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01343', 1598, 0, 210, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01380'),
(6424656, 'Saint-Denis-lès-Bourg', 'Saint-Denis-les-Bourg', '', '46.1997200', '5.1922200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01344', 5357, 0, 231, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01000'),
(6424657, 'Saint-Denis-en-Bugey', 'Saint-Denis-en-Bugey', 'Sen Deni an Byuze,Sen-Deni-an-Bjuzhe,bi re de qu sheng dan ni,san-dynys-awn-bwghyy  ayn,Сен-Дени-ан-Бюже,Сен-Дені-ан-Бюже,Սեն Դենի ան Բյուժե,سان-دينيس-أون-بوغيي، أين,سینٹ-ڈینس-این -بگے,比热地区圣但尼', '45.9519400', '5.3291700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01345', 2135, 0, 244, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01500'),
(6424658, 'Saint-Didier-d\'Aussiat', 'Saint-Didier-d\'Aussiat', '', '46.3063900', '5.0608300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01346', 842, 0, 218, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01340'),
(6424659, 'Saint-Didier-de-Formans', 'Saint-Didier-de-Formans', 'Sen Didie de Forman,Sen-Did\'e-de-Forman,san-dydyy-dw-fwrman  ayn,sheng di di ai de fu er mang,Сен-Дидье-де-Форман,Сен-Дідьє-де-Форман,Սեն Դիդիե դե Ֆորման,سان-ديديي-دو-فورمان، أين,سینٹ-ددئر-دے-فورمانس,圣迪迪埃德福尔芒', '45.9563900', '4.7802800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01347', 1787, 0, 203, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01600'),
(6424660, 'Saint-Didier-sur-Chalaronne', 'Saint-Didier-sur-Chalaronne', 'Sen Didie syur Salaron,Sen-Did\'e-sjur-Shalaron,Sen-Did\'e-sjur-Shalaronn,san-dydyy-swr-shalarwn  ayn,sha la long en he pan sheng di di ai,Сен-Дидье-сюр-Шаларон,Сен-Дідьє-сюр-Шаларонн,Սեն Դիդիե սյուր Շալարոն,سان-ديديي-سور-شالارون، أين,سینٹ-ددئر-سر-چلاروں نے,沙拉龙恩河畔圣迪迪埃', '46.1772000', '4.8185000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01348', 2741, 0, 178, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424661, 'Saint-Étienne-du-Bois', 'Saint-Etienne-du-Bois', 'Sent Etien dyu Bua,Sent-Eht\'en-dju-Bua,Sent-Et\'enn-dju-Bua,san-aytyan-dw-bwa  ayn,sheng ai di an di bu wa,Сент-Етьєнн-дю-Буа,Сент-Этьен-дю-Буа,Սենտ Էտիեն դյու Բուա,سان-أيتيان-دو-بوا، أين,سینٹ-ایٹیینے-دو-بوس، این,圣艾蒂安迪布瓦', '46.2880600', '5.2933300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01350', 2432, 0, 246, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01370'),
(6424662, 'Saint-Étienne-sur-Chalaronne', 'Saint-Etienne-sur-Chalaronne', 'Sent Etien syur Salaron,Sent-Eht\'en-sjur-Shalaron,Sent-Et\'enn-sjur-Shalaronn,san-aytyan-swr-shalarwn  ayn,sha la long en he pan sheng ai di an,sn-atyn-swr-shalarwn,Сент-Етьєнн-сюр-Шаларонн,Сент-Этьен-сюр-Шаларон,Սենտ Էտիեն սյուր Շալարոն,سان-أيتيان-سور-شالارون، أين,سن-اتین-سور-شالارون,سینٹ-ایٹیینے-سر-چلاروں نے,沙拉龙恩河畔圣艾蒂安', '46.1469400', '4.8669400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01351', 1457, 0, 195, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424663, 'Saint-Étienne-sur-Reyssouze', 'Saint-Etienne-sur-Reyssouze', 'Sent Etien syur Resuz,Sent-Eht\'en-sjur-Resuz,Sent-Et\'enn-sjur-Rejssuz,lei su ci he pan sheng ai di an,san-aytyan-swr-ryswz  ayn,Сент-Етьєнн-сюр-Рейссуз,Сент-Этьен-сюр-Ресуз,Սենտ Էտիեն սյուր Ռեսուզ,سان-أيتيان-سور-ريسوز، أين,سینٹ-ایٹیینے-سر-ریسسووزے,雷苏兹河畔圣艾蒂安', '46.4130000', '5.0012000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01352', 524, 0, 193, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424664, 'Saint-Genis-Pouilly', 'Saint-Genis-Pouilly', '', '46.2433300', '6.0213900', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01354', 8627, 0, 452, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01630'),
(6424665, 'Saint-Genis-sur-Menthon', 'Saint-Genis-sur-Menthon', 'Sen Zeni syur Manton,Sen-Zheni-sjur-Manton,mang tong he pan mang tong sheng re ni,san-jyny-swr-myntw  ayn,sn-zhny-swr-mantwn,Сен-Жени-сюр-Мантон,Сен-Жені-сюр-Мантон,Սեն Ժենի սյուր Մանտոն,سان-جيني-سور-مينتو، أين,سن-ژنی-سور-مانتون,سینٹ-گینس-سر-منتھوں,芒通河畔芒通圣热尼', '46.2822200', '5.0088900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01355', 389, 0, 204, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01380'),
(6424666, 'Saint-Georges-sur-Renon', 'Saint-Georges-sur-Renon', 'Sen Zorz syur Renon,Sen-Zhorzh-sjur-Renon,lei nong he pan sheng qiao zhi,san-jwrj-swr-rynw  ayn,sn-zhrzh-swr-rnwn,Сен-Жорж-сюр-Ренон,Սեն Ժորժ սյուր Ռենոն,سان-جورج-سور-رينو، أين,سن-ژرژ-سور-رنون,سینٹ-گیورگس-سر-رنوں,勒农河畔圣乔治', '46.1055600', '5.0319400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01356', 198, 0, 263, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01400'),
(6424667, 'Saint-Germain-de-Joux', 'Saint-Germain-de-Joux', 'Sen Zermen de Zu,Sen-Zhermen-de-Zhu,san-jrman-dw-jw  ayn,sheng ri er man de ru,Сен-Жермен-де-Жу,Սեն Ժերմեն դե Ժու,سان-جرمان-دو-جو، أين,سینٹ-گرمین-دے-ظوش,圣日耳曼德茹', '46.1777800', '5.7383300', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01357', 487, 0, 505, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01130'),
(6424668, 'Saint-Germain-les-Paroisses', 'Saint-Germain-les-Paroisses', 'Sen Zermen le Paruas,Sen-Zhermen-le-Paruas,Sen-Zhermen-le-Paruass,san-jrman-lyh-barwas  ayn,sheng ri er man lai pa lu wa si,Сен-Жермен-ле-Паруас,Сен-Жермен-ле-Паруасс,Սեն Ժերմեն լե Պարուաս,سان-جرمان-ليه-بارواس، أين,سینٹ-گرمین-لیس-پرویسسس,圣日耳曼莱帕鲁瓦斯', '45.7736100', '5.6180600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01358', 377, 0, 392, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424669, 'Saint-Germain-sur-Renon', 'Saint-Germain-sur-Renon', 'Sen Zermen syur Renon,Sen-Zhermen-sjur-Renon,lei nong he pan sheng ri er man,san-jrman-swr-rynw  ayn,Сен-Жермен-сюр-Ренон,Սեն Ժերմեն սյուր Ռենոն,سان-جرمان-سور-رينو، أين,سینٹ-گرمین-سر-رنوں,勒农河畔圣日耳曼', '46.0805600', '5.0575000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01359', 238, 0, 264, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01240'),
(6424670, 'Saint-Jean-de-Gonville', 'Saint-Jean-de-Gonville', 'Sen Zan de Gonvil,Sen-Zhan-de-Gonvil\',san-jwn-dw-ghwnfyl  ayn,sheng yue han de rong wei ye,Сен-Жан-де-Гонвиль,Сен-Жан-де-Гонвіль,Սեն Ժան դե Գոնվիլ,سان-جون-دو-غونفيل، أين,سینٹ-ژاں -دے-گونولے,圣约翰德容维耶', '46.2127800', '5.9519400', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01360', 1493, 0, 516, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01630'),
(6424671, 'Saint-Jean-de-Thurigneux', 'Saint-Jean-de-Thurigneux', 'Sen Zan de Tyurinyo,Sen-Zhan-de-Tjurin\'e,Sen-Zhan-de-Tjurin\'jo,san-jwn-dw-twrynyw  ayn,sheng yue han de di li ni e,Сен-Жан-де-Тюриньё,Сен-Жан-де-Тюриньє,Սեն Ժան դե Տյուրինյո,سان-جون-دو-تورينيو، أين,سینٹ-ژاں -دے-ٹہڑگنےش,圣约翰德蒂里尼厄', '45.9522200', '4.8822200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01362', 662, 0, 286, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01390'),
(6424672, 'Saint-Jean-sur-Reyssouze', 'Saint-Jean-sur-Reyssouze', 'Sen Zan syur Resuz,Sen-Zhan-sjur-Rejssuz,Sen-Zhan-sjur-Resuz,lei su ci he pan sheng yue han,san-jwn-swr-ryswz  ayn,Сен-Жан-сюр-Рейссуз,Сен-Жан-сюр-Ресуз,Սեն Ժան սյուր Ռեսուզ,سان-جون-سور-ريسوز، أين,سینٹ-ژاں -سر-ریسسووزے,雷苏兹河畔圣约翰', '46.3961100', '5.0627800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01364', 720, 0, 210, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424673, 'Saint-Jean-sur-Veyle', 'Saint-Jean-sur-Veyle', 'Sen Zan syur Vel,Sen-Zhan-sjur-Vejl\',Sen-Zhan-sjur-Vel\',san-jwm-swr-fyl  ayn,wei er he pan sheng yue han,Сен-Жан-сюр-Вейль,Сен-Жан-сюр-Вель,Սեն Ժան սյուր Վել,سان-جوم-سور-فيل، أين,سینٹ-ژاں -سر-ویلے,韦尔河畔圣约翰', '46.2580600', '4.9155600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01365', 1077, 0, 180, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01290'),
(6424674, 'Sainte-Julie', 'Sainte-Julie', 'Sent Zyuli,Sent-Zhjuli,Sent-Zhuli,sant-jwly  ayn,sheng zhu li ya,Сент-Жулі,Сент-Жюли,Սենտ Ժյուլի,سانت-جولي، أين,سین-جلے، این,圣茱利亚', '45.8900000', '5.2783300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01366', 867, 0, 227, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01150'),
(6424675, 'Saint-Julien-sur-Reyssouze', 'Saint-Julien-sur-Reyssouze', 'Sen Zyulen syur Resuz,Sen-Zhjul\'en-sjur-Resuz,Sen-Zhul\'en-sjur-Rejssuz,lei su ci he pan sheng you li an,san-jwlyyn-swr-ryswz  ayn,Сен-Жульєн-сюр-Рейссуз,Сен-Жюльен-сюр-Ресуз,Սեն Ժյուլեն սյուր Ռեսուզ,سان-جوليين-سور-ريسوز، أين,سینٹ-جلیں -سر-ریسسووزے,雷苏兹河畔圣尤利安', '46.4016700', '5.1113900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01367', 627, 0, 189, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424676, 'Saint-Julien-sur-Veyle', 'Saint-Julien-sur-Veyle', 'Sen Zyulen syur Vel,Sen-Zhjul\'en-sjur-Vel\',Sen-Zhul\'en-sjur-Vejl\',san-jwlyyn-swr-fyl  ayn,sn-zhwlyn-swr-wyl,wei er he pan sheng you li an,Сен-Жульєн-сюр-Вейль,Сен-Жюльен-сюр-Вель,Սեն Ժյուլեն սյուր Վել,سان-جوليين-سور-فيل، أين,سن-ژولین-سور-ویل,سینٹ-جلیں -سر-ویلے,韦尔河畔圣尤利安', '46.2022200', '4.9541700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01368', 704, 0, 211, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01540'),
(6424677, 'Saint-Laurent-sur-Saône', 'Saint-Laurent-sur-Saone', 'Sen Loran syur Son,Sen-Loran-sjur-Son,san-lwrwn-swr-swn  ayn,suo en he pan sheng lao lun si,Сен-Лоран-сюр-Сон,Սեն Լորան սյուր Սոն,سان-لورون-سور-سون، أين,سینٹ-لارنٹ-سر-سونے,索恩河畔圣劳伦斯', '46.3052800', '4.8394400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01370', 1737, 0, 176, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01750'),
(6424678, 'Saint-Martin-de-Bavel', 'Saint-Martin-de-Bavel', 'Sen Marten de Bavel,Sen-Marten-de-Bavel\',san-martan-dw-bafyl  ayn,sheng ma ding de ba wei er,Сен-Мартен-де-Бавель,Սեն Մարտեն դե Բավել,سان-مارتان-دو-بافيل، أين,سینٹ-مارٹن-دے-بول,圣马丁德巴韦尔', '45.8491700', '5.6775000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01372', 449, 0, 334, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01510'),
(6424679, 'Saint-Martin-du-Frêne', 'Saint-Martin-du-Frene', 'Sen Marten dyu Fren,Sen-Marten-dju-Fren,san-martan-dw-fryn  ayn,sheng ma ding fu lei en,Сен-Мартен-дю-Френ,Սեն Մարտեն դյու Ֆրեն,سان-مارتان-دو-فرين، أين,سینٹ-مارٹن-دو-فڑنے,圣马丁夫雷恩', '46.1388900', '5.5525000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01373', 1073, 0, 517, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424680, 'Saint-Martin-du-Mont', 'Saint-Martin-du-Mont', 'Sen Marten dyu Mon,Sen-Marten-dju-Mon,san-martan-dw-mwn  ayn,sheng ma ding di meng,sn-martn-dw-mwn  an,Сен-Мартен-дю-Мон,Սեն Մարտեն դյու Մոն,سان-مارتان-دو-مون، أين,سن-مارتن-دو-مون، ان,سینٹ-مارٹن-دو-مونٹ، این,圣马丁迪蒙', '46.1016700', '5.3283300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01374', 1615, 0, 366, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01160'),
(6424681, 'Saint-Martin-le-Châtel', 'Saint-Martin-le-Chatel', 'Sen Marten le Satel,Sen-Marten-le-Shatel\',san-martan-lw-shatyl  ayn,sheng ma ding lei sha tai er,sn-martn-lw-shatl,Сен-Мартен-ле-Шатель,Սեն Մարտեն լե Շատել,سان-مارتان-لو-شاتيل، أين,سن-مارتن-لو-شاتل,سینٹ-مارٹن-لے-چٹیل,圣马丁勒沙泰尔', '46.2819400', '5.1158300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01375', 778, 0, 220, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01310'),
(6424682, 'Saint-Maurice-de-Beynost', 'Saint-Maurice-de-Beynost', 'Sen-Moris-de-Bejno,san-mwrys-dw-bynws  ayn,sheng mo li si de bei nuo si te,Сен-Морис-де-Бейно,سان-موريس-دو-بينوس، أين,圣莫里斯德贝诺斯特', '45.8302800', '4.9752800', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01376', 3868, 0, 184, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01700'),
(6424683, 'Saint-Maurice-de-Gourdans', 'Saint-Maurice-de-Gourdans', 'Sen Moris de Gurdan,Sen-Moris-de-Gurdan,san-mwrys-dw-ghwrdan  ayn,sheng mo li si de gu er dang,Сен-Морис-де-Гурдан,Սեն Մորիս դե Գուրդան,سان-موريس-دو-غوردان، أين,سینٹ-موریس-دے-گورڈانس,圣莫里斯德古尔当', '45.8213900', '5.1955600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01378', 2436, 0, 205, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01800'),
(6424684, 'Saint-Maurice-de-Rémens', 'Saint-Maurice-de-Remens', 'Sen Moris de Reman,Sen-Moris-de-Reman,san-mwrys-dw-rymwn  ayn,sheng mo li si de lei mang,Сен-Морис-де-Реман,Սեն Մորիս դե Ռեման,سان-موريس-دو-ريمون، أين,سینٹ-موریس-دے-ریمنس,圣莫里斯德雷芒', '45.9586100', '5.2755600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01379', 696, 0, 227, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01500'),
(6424685, 'Saint-Nizier-le-Bouchoux', 'Saint-Nizier-le-Bouchoux', 'Sen Nizie le Busu,Sen-Niz\'e-le-Bushu,san-nytsyyh-lw-bwshw  ayn,sheng ni qi ai lei bu shu,Сен-Низье-ле-Бушу,Сен-Нізьє-ле-Бушу,Սեն Նիզիե լե Բուշու,سان-نيتسييه-لو-بوشو، أين,سینٹ-نظیر-لے-وچوش,圣尼齐埃勒布舒', '46.4597200', '5.1508300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01380', 715, 0, 214, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424686, 'Saint-Nizier-le-Désert', 'Saint-Nizier-le-Desert', 'Sen Nizie le Dezer,Sen-Niz\'e-le-Dezer,san-nytsyyh-lw-dyzyr  ayn,sheng ni qi ai lei dai ze er,Сен-Низье-ле-Дезер,Сен-Нізьє-ле-Дезер,Սեն Նիզիե լե Դեզեր,سان-نيتسييه-لو-ديزير، أين,سینٹ-نظیر-لے-ڈیزرٹ,圣尼齐埃勒代泽尔', '46.0558300', '5.1483300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01381', 875, 0, 282, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01320'),
(6424687, 'Sainte-Olive', 'Sainte-Olive', 'Sent Oliv,Sent-Oliv,Sente-Olivo,sant-awlyf  ayn,sheng ao li fu,syn-wlw,Сент-Олив,Сент-Олів,Սենտ Օլիվ,سانت-أوليف، أين,سین-ولو,圣奥利夫', '46.0186100', '4.9336100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01382', 306, 0, 298, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01330'),
(6424688, 'Saint-Paul-de-Varax', 'Saint-Paul-de-Varax', 'Sen Pol de Vara,Sen-Pol\'-de-Vara,san-bwl-dw-faraks  ayn,sheng bao luo de la ke si,sn-pl-dw-wara,Сен-Поль-де-Вара,Սեն Պոլ դե Վարա,سان-بول-دو-فاراكس، أين,سن-پل-دو-وارا,سین-پال-دے-ورا,圣保罗德拉克斯', '46.0988900', '5.1283300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01383', 1510, 0, 271, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01240'),
(6424689, 'Saint-Rambert-en-Bugey', 'Saint-Rambert-en-Bugey', '', '45.9486100', '5.4380600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01384', 2166, 0, 296, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424690, 'Saint-Sorlin-en-Bugey', 'Saint-Sorlin-en-Bugey', 'Sant-Sorlin,Sen Sorlen an Byuze,Sen-Sorlen-an-Bjuzhe,bi re de qu ang sheng suo er lan,san-swrlan-awn-bwghyy  ayn,Сен-Сорлен-ан-Бюже,Սեն Սորլեն ան Բյուժե,سان-سورلان-أون-بوغيي، أين,比热地区昂圣索尔兰', '45.8850000', '5.3705600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01386', 1064, 0, 203, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01150'),
(6424691, 'Saint-Trivier-de-Courtes', 'Saint-Trivier-de-Courtes', 'Sen Trivie de Kurt,Sen-Triv\'e-de-Kurt,Sen-Trive-de-Kurt,san-tryfyyh-dw-kwrt  ayn,sheng te li wei ai de ku er te,Сен-Тривье-де-Курт,Сен-Тривє-де-Курт,Սեն Տրիվիե դե Կուրտ,سان-تريفييه-دو-كورت، أين,圣特里维埃德库尔特', '46.4597200', '5.0813900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01388', 980, 0, 215, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424692, 'Saint-Trivier-sur-Moignans', 'Saint-Trivier-sur-Moignans', 'Sen-Trive-sjur-Muan\'jan,mu wa ni ang he pan sheng te li wei ai,san-tryfyyh-swr-mwanyan  ayn,Сен-Тривє-сюр-Муаньян,سان-تريفييه-سور-موانيان، أين,穆瓦尼昂河畔圣特里维埃', '46.0733300', '4.8983300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01389', 1907, 0, 255, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01990'),
(6424694, 'Salavre', 'Salavre', 'Salavr,Salavro,Salâvro,sa la fu er,salafr  ayn,salawr,Салавр,Սալավր,سالافر، أين,سالاور,萨拉夫尔', '46.3638900', '5.3461100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01391', 281, 0, 242, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01270'),
(6424695, 'Samognat', 'Samognat', '', '46.2577800', '5.5761100', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01392', 712, 0, 436, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01580'),
(6424696, 'Sandrans', 'Sandrans', 'Sandran,sandran  ayn,sang de lang,Сандран,Սանդրան,ساندران، أين,桑德朗', '46.0638900', '4.9808300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01393', 527, 0, 284, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01400'),
(6424697, 'Sault-Brénaz', 'Sault-Brenaz', 'So Brena,So-Brena,suo-bu lei na,swl-brynaz  ayn,Со-Брена,Սո Բրենա,سول-بريناز، أين,索－布雷纳', '45.8552800', '5.4100000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01396', 1047, 0, 204, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01150'),
(6424698, 'Sauverny', 'Sauverny', 'Soverni,suo wei er ni,swfyrny  ayn,Соверни,Соверні,Սովերնի,سوفيرني، أين,索韦尔尼', '46.3152800', '6.1147200', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01397', 1083, 0, 481, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01220'),
(6424699, 'Ségny', 'Segny', 'Segny,Sen\'i,Seni,se ni,synyy,Сеньї,Սենի,سينيي,瑟尼', '46.2969400', '6.0733300', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01399', 1593, 0, 485, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01170'),
(6424700, 'Seillonnaz', 'Seillonnaz', 'Sejonna,Seyona,sai luo na ci,sylwna,Сейонна,Սեյոնա,سيلونا,塞洛纳兹', '45.8066700', '5.4902800', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01400', 136, 0, 536, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01470'),
(6424701, 'Sergy', 'Sergy', 'Serzhi,Serzi,sai er ri,syrjy  ayn,Сержи,Сержі,Սերժի,سيرجي، أين,塞尔日', '46.2530600', '6.0000000', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01401', 1842, 0, 477, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01630'),
(6424702, 'Sermoyer', 'Sermoyer', 'Sermuae,Sermuaje,Sermuaye,sai er mu wa ye,syrmwyyh  ayn,Сермуайе,Сермуає,Սերմուայե,سيرموييه، أين,塞尔穆瓦耶', '46.4997200', '4.9808300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01402', 668, 0, 197, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01190'),
(6424703, 'Serrières-sur-Ain', 'Serrieres-sur-Ain', '', '46.1527800', '5.4511100', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01404', 116, 0, 318, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01450'),
(6424704, 'Servignat', 'Servignat', 'Servin\'ja,Servinya,sai er wei ni ya,syrfynya  ayn,Сервинья,Сервінья,Սերվինյա,سيرفينيا، أين,塞尔维尼亚', '46.4336100', '5.0694400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01406', 159, 0, 207, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424705, 'Simandre-sur-Suran', 'Simandre-sur-Suran', 'Simandr syur Syuran,Simandr-sjur-Sjuran,symandr-swr-swra,xu lang he pan xi mang de er,Симандр-сюр-Сюран,Сімандр-сюр-Сюран,Սիմանդր սյուր Սյուրան,سيماندر-سور-سورا,叙朗河畔西芒德尔', '46.2252800', '5.4169400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01408', 649, 0, 308, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424707, 'Sonthonnax-la-Montagne', 'Sonthonnax-la-Montagne', '', '46.2330600', '5.5241700', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01410', 329, 0, 679, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01580,01580'),
(6424708, 'Souclin', 'Souclin', 'Socllin,Suklen,su ke lan,swkla  ayn,swkln,Суклен,Սուկլեն,سوكلا، أين,سوکلن,苏克兰', '45.8761100', '5.4183300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01411', 259, 0, 575, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01150'),
(6424709, 'Sulignat', 'Sulignat', 'Sjulin\'ja,Syulinya,swlynya  ayn,xu li ni ya,Сюлинья,Сюлінья,Սյուլինյա,سولينيا، أين,叙利尼亚', '46.1772000', '4.9634000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01412', 575, 0, 262, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01400'),
(6424710, 'Surjoux', 'Surjoux', 'Sjurzhu,Sorjœx,Syurzu,swrjw  ayn,xu er ru,Сюржу,Սյուրժու,سورجو، أين,叙尔茹', '46.0241700', '5.8027800', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01413', 73, 0, 371, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01420'),
(6424711, 'Sutrieu', 'Sutrieu', '', '45.9513900', '5.6588900', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01414', 233, 0, 622, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01260,01260,01260'),
(6424712, 'Talissieu', 'Talissieu', '', '45.8658300', '5.7250000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01415', 439, 0, 253, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01510'),
(6424713, 'Tenay', 'Tenay', 'Tene,te nai,tynay  ayn,Тене,تيناي، أين,特奈', '45.9200000', '5.5083300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01416', 1117, 0, 348, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424714, 'Thézillieu', 'Thezillieu', 'Tezijjo,Tezil\'e,Teziyio,tai qi yue,tyzylyw,Тезийё,Тезільє,Տեզիյիո,تيزيليو,泰齐约', '45.8927800', '5.6008300', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01417', 319, 0, 876, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01110'),
(6424716, 'Thoissey', 'Thoissey', '', '46.1725000', '4.8019400', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01420', 1519, 0, 176, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424717, 'Torcieu', 'Torcieu', 'Torciœ,Tors\'e,Tors\'jo,Torsio,tuo er xi e,twrsyw,Торсьё,Торсьє,Տորսիո,تورسيو,托尔西厄', '45.9225000', '5.3952800', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01421', 696, 0, 268, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01230'),
(6424718, 'Tossiat', 'Tossiat', 'Tos\'ja,Tosia,tuo xi ya,twsya,Тосья,Տոսիա,توسيا,托西亚', '46.1411100', '5.3150000', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01422', 1390, 0, 266, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424719, 'Toussieux', 'Toussieux', 'Tus\'e,Tus\'jo,Tusio,tu xi e,twsyw,Тусьё,Тусьє,Տուսիո,توسيو,图西厄', '45.9605600', '4.8286100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01423', 756, 0, 237, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01600'),
(6424720, 'Tramoyes', 'Tramoyes', '', '45.8763900', '4.9655600', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01424', 1658, 0, 300, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01390'),
(6424722, 'Valeins', 'Valeins', 'Valen,falyynz,wa lan si,Вален,Վալեն,فاليينز,瓦兰斯', '46.1125000', '4.8716700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01428', 88, 0, 263, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01140'),
(6424723, 'Vandeins', 'Vandeins', 'Vanden,fandyyn,wa dan si,wndyns,Ванден,Վանդեն,فانديين,وندینس,瓦丹斯', '46.2175000', '5.0791700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01429', 607, 0, 241, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01660'),
(6424724, 'Varambon', 'Varambon', 'Varambon,farambw,wa lang bang,wrmbn,Варамбон,Վարամբոն,فارامبو,ورمبن,瓦朗邦', '46.0402800', '5.3163900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01430', 529, 0, 242, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01160'),
(6424725, 'Vaux-en-Bugey', 'Vaux-en-Bugey', '', '45.9279000', '5.3540000', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01431', 1148, 0, 281, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01150'),
(6424726, 'Verjon', 'Verjon', 'Verzhon,Verzon,fu er rong,fyrjw,wrzhn,Вержон,Վերժոն,فيرجو,ورژن,弗尔容', '46.3458300', '5.3511100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01432', 248, 0, 226, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01270'),
(6424727, 'Versailleux', 'Versailleux', 'Versae,Versajjo,Versayyo,fu er sa yue,fyrsayw,Версайё,Версає,Վերսայյո,فيرسايو,弗尔萨约', '45.9802800', '5.1038900', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01434', 331, 0, 287, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01330'),
(6424728, 'Vesancy', 'Vesancy', '', '46.3486100', '6.0908300', 'A', 'ADM4', 'FR', '', '84', '01', '013', '01436', 523, 0, 669, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01170'),
(6424729, 'Vescours', 'Vescours', 'Veskur,fyskwr,wei si ku er,Вескур,Վեսկուր,فيسكور,韦斯库尔', '46.4750000', '5.0247200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01437', 199, 0, 208, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01560'),
(6424730, 'Vésines', 'Vesines', 'Vezin,fysyn,wei qi en,Везин,Везін,Վեզին,فيسين,韦齐恩', '46.3591700', '4.8672200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01439', 88, 0, 173, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01570'),
(6424731, 'Vieu-d\'Izenave', 'Vieu-d\'Izenave', '', '46.0808300', '5.5291700', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01441', 697, 0, 653, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01430'),
(6424732, 'Villars-les-Dombes', 'Villars-les-Dombes', 'Vilar le Domb,Villar-le-Domb,fylar-lyh-dwmb,wei la er lai dong bu,wyar-l-dmb,Виллар-ле-Домб,Віллар-ле-Домб,Վիլար լե Դոմբ,فيلار-ليه-دومب,ویار-ل-دمب,维拉尔莱东布', '46.0025000', '5.0297200', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01443', 4328, 0, 280, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01330'),
(6424733, 'Villemotier', 'Villemotier', 'Vil\'mot\'e,Vilmote,fylmwtyyh,wei ye mo di ai,Вильмотье,Вільмотьє,Վիլմոտե,فيلموتييه,维耶莫蒂埃', '46.3461100', '5.3211100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01445', 629, 0, 242, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01270'),
(6424734, 'Villereversure', 'Villereversure', 'Vil\'reversjur,Vilreversyur,fylryfyrswr,wei ye lei wei er xu er,Вильреверсюр,Вільреверсюр,Վիլրևերսյուր,فيلريفيرسور,维耶勒韦尔叙尔', '46.1919400', '5.3961100', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01447', 1198, 0, 299, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01250'),
(6424735, 'Villes', 'Villes', 'Vil,Vil\',fyl,wei ye,Виль,Віль,Վիլ,فيل,维耶', '46.0883300', '5.7850000', 'A', 'ADM4', 'FR', '', '84', '01', '014', '01448', 367, 0, 548, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01200'),
(6424736, 'Viriat', 'Viriat', '', '46.2536100', '5.2166700', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01451', 5924, 0, 228, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01440'),
(6424737, 'Virieu-le-Grand', 'Virieu-le-Grand', 'Vir\'jo-le-Gran,Vire-le-Gran,Virio le Gran,da wei li e,fyryw-lw-ghran,Вирьё-ле-Гран,Вірє-ле-Гран,Վիրիո լե Գրան,فيريو-لو-غران,大维里厄', '45.8491700', '5.6516700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01452', 1105, 0, 271, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01510'),
(6424738, 'Virieu-le-Petit', 'Virieu-le-Petit', 'Vir\'jo-le-Peti,Vire-le-Peti,Virio le Peti,fyryw-lw-bwty,xiao wei li e,Вирьё-ле-Пети,Вірє-ле-Петі,Վիրիո լե Պետի,فيريو-لو-بوتي,小维里厄', '45.9086100', '5.7244400', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01453', 311, 0, 621, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01260'),
(6424739, 'Virignin', 'Virignin', 'Virin\'en,Virinen,fyrynyyn,wei li nian,Вириньен,Віриньєн,Վիրինեն,فيرينيين,维里年', '45.7172200', '5.7130600', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01454', 835, 0, 226, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01300'),
(6424740, 'Vongnes', 'Vongnes', 'Von,Von\',Vonn\',fwnnyh,weng ni,Воннь,Вонь,Վոն,فوننيه,翁尼', '45.8147200', '5.7241700', 'A', 'ADM4', 'FR', '', '84', '01', '011', '01456', 73, 0, 320, 'Europe/Paris', '2016-02-18', 11071625, 3038422, NULL, '01350'),
(6424741, 'Vonnas', 'Vonnas', '', '46.2191700', '4.9908300', 'A', 'ADM4', 'FR', '', '84', '01', '012', '01457', 2735, 0, 193, 'Europe/Paris', '2017-04-18', 11071625, 3038422, NULL, '01540'),
(6424742, 'Bony', 'Bony', 'Boni,bo ni,Бони,Боні,Բոնի,博尼', '49.9880600', '3.2227800', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02100', 132, 0, 134, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02420'),
(6424743, 'Bosmont-sur-Serre', 'Bosmont-sur-Serre', 'Bomon sir Ser,Bomon syur Ser,Bomon-sjur-Ser,Bosmon-sjur-Serr,sai er he pan bo si meng,Бомон сир Сер,Бомон-сюр-Сер,Босмон-сюр-Серр,Բոմոն սյուր Սեր,塞尔河畔博斯蒙', '49.7316700', '3.8594400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02101', 206, 0, 98, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02250'),
(6424744, 'Boué', 'Boue', '', '50.0119400', '3.6986100', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02103', 1255, 0, 146, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02450'),
(6424745, 'Bouffignereux', 'Bouffignereux', 'Buffin\'ere,Buffin\'erjo,Bufinere,Bufinieryo,bu fei nie lei,Буфињере,Буффиньерё,Буффіньєре,Բուֆինիերյո,布菲涅勒', '49.3736100', '3.8452800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02104', 105, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424746, 'Bouresches', 'Bouresches', '', '49.0636100', '3.3094400', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02105', 204, 0, 130, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424747, 'Bourg-et-Comin', 'Bourg-et-Comin', 'Bourg e Comin,Bur-e-Komen,Burg e Komen,Burk e Komen,Burk-eh-Komen,bu er ke man,Бур-е-Комен,Бург е Комен,Бурк-э-Комен,Բուրկ է Կոմեն,布尔科曼', '49.3966700', '3.6541700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02106', 721, 0, 67, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424748, 'Bourguignon-sous-Coucy', 'Bourguignon-sous-Coucy', 'Burgin\'on-su-Kusi,Burginion su Kusi,Burginon su Kusi,bu ji ni weng su ku xi,Бургиньон-су-Куси,Бургињон су Куси,Бургіньон-су-Кусі,Բուրգինիոն սու Կուսի,布吉尼翁苏库西', '49.5438900', '3.1586100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02107', 90, 0, 56, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02300'),
(6424749, 'Bourguignon-sous-Montbavin', 'Bourguignon-sous-Montbavin', 'Burgin\'on-su-Monbaven,Burginion su Monbaven,Burginon su Monbaven,bu ji ni weng su meng ba wan,Бургиньон-су-Монбавен,Бургињон су Монбавен,Бургіньон-су-Монбавен,Բուրգինիոն սու Մոնբավեն,布吉尼翁苏蒙巴万', '49.5280600', '3.5413900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02108', 126, 0, 106, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424750, 'Braine', 'Braine', 'Bren,bu lai ne,burenu,Брен,Բրեն,ブレーヌ,布赖讷', '49.3416700', '3.5319400', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02110', 2127, 0, 53, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424751, 'Brancourt-en-Laonnois', 'Brancourt-en-Laonnois', 'Brankur an Lannua,Brankur-an-Lannua,Brankurt an Lanoa,bu lang ku er-ang luo nu wa,Бранкур-ан-Ланнуа,Бранкурт ан Ланоа,Բրանկուր ան Լաննուա,布朗库尔-昂洛努瓦', '49.5144400', '3.4186100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02111', 659, 0, 86, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02320'),
(6424752, 'Brancourt-le-Grand', 'Brancourt-le-Grand', '', '49.9770000', '3.3821000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02112', 617, 0, 143, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424753, 'Brasles', 'Brasles', '', '49.0491700', '3.4277800', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02114', 1283, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424754, 'Braye-en-Laonnois', 'Braye-en-Laonnois', 'Bre-an-Lannua,Brej an Lanoa,Brej-an-Lannua,Brey an Lannua,bu lai ang luo nu wa,Бре-ан-Ланнуа,Брей-ан-Ланнуа,Бреј ан Ланоа,Բրեյ ան Լաննուա,布赖昂洛努瓦', '49.4411100', '3.6080600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02115', 219, 0, 94, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424755, 'Braye-en-Thiérache', 'Braye-en-Thierache', 'Bre-an-T\'erash,Brej an Tjerash,Brej-an-T\'erash,Brey an Tieras,bu lai ang di ye la shen,Бре-ан-Тьєраш,Брей-ан-Тьераш,Бреј ан Тјераш,Բրեյ ան Տիերաշ,布赖昂蒂耶拉什', '49.7794400', '3.9586100', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02116', 147, 0, 151, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424756, 'Bray-Saint-Christophe', 'Bray-Saint-Christophe', 'Bre-Sen-Kristof,Brej Sen Kristof,bu lai sheng ke li si tuo fu,Бре-Сен-Кристоф,Бреј Сен Кристоф,Բրե Սեն Քրիստոֆ,布赖圣克里斯托夫', '49.7708300', '3.1438900', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02117', 80, 0, 70, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02480'),
(6424757, 'Brécy', 'Brecy', 'Bresi,bu lei xi,Бреси,Бресі,Բրեսի,布雷西', '49.1477800', '3.4294400', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02119', 347, 0, 127, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424758, 'Brenelle', 'Brenelle', 'Branel,Brenel,Brenel\',bu lei nei lei,Бранел,Бренель,Բրենել,布勒内勒', '49.3658300', '3.5430600', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02120', 194, 0, 144, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424759, 'Brissay-Choigny', 'Brissay-Choigny', 'Brise Shoani,Brise Suani,Brissay e Choigny,Brisse-Shuan\'i,bu li sai shu wa ni,Брисе Шоањи,Бриссе-Шуаньи,Бриссе-Шуаньї,Բրիսե Շուանի,布里赛舒瓦尼', '49.7205600', '3.3780600', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02123', 326, 0, 58, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02240'),
(6424761, 'Brunehamel', 'Brunehamel', 'Brinamel,Brjunamel\',bu lu ne a mei lei,Бринамел,Брюнамель,布吕讷阿梅勒', '49.7697200', '4.1819400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02126', 539, 0, 241, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02360'),
(6424762, 'Bruyères-sur-Fère', 'Bruyeres-sur-Fere', 'Brijer sir Fer,Brjuer-sjur-Fer,Brjujer-sjur-Fer,Bryuyer syur Fer,fei er he pan bu lu ye er,Бријер сир Фер,Брюйер-сюр-Фер,Брюєр-сюр-Фер,Բրյույեր սյուր Ֆեր,费尔河畔布吕耶尔', '49.1894400', '3.4425000', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02127', 208, 0, 135, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424763, 'Bruyères-et-Montbérault', 'Bruyeres-et-Montberault', 'Brijer e Monbero,Brjuer-e-Monbero,Brjujer-eh-Monbero,Bruyeres e Montberault,Bruyères e Montbérault,bu lu ye er he meng bei luo,Бријер е Монберо,Брюйер-э-Монберо,Брюєр-е-Монберо,布吕耶尔和蒙贝罗', '49.5244400', '3.6636100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02128', 1581, 0, 87, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6424764, 'Bruys', 'Bruys', 'Bri,Brjui,Bryui,bu lu yi,Бри,Брюи,Брюї,Բրյուի,布吕伊', '49.2705600', '3.5630600', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02129', 20, 0, 94, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424765, 'Bucilly', 'Bucilly', 'Bisiji,Bjusii,Bjusiji,Byusiyi,bi xi yi,Бисији,Бюсийи,Бюсії,Բյուսիյի,比西伊', '49.8769400', '4.0930600', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02130', 198, 0, 164, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02500'),
(6424766, 'Bucy-le-Long', 'Bucy-le-Long', 'Bisi le Lon,Bjusi-le-Lon,Byusi le Lon,bi xi lei long,Биси ле Лон,Бюси-ле-Лон,Бюсі-ле-Лон,Բյուսի լե Լոն,比西勒隆', '49.3905600', '3.3938900', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02131', 1962, 0, 51, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424767, 'Bucy-lès-Cerny', 'Bucy-les-Cerny', '', '49.5822200', '3.5172200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02132', 186, 0, 117, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02870'),
(6424768, 'Bucy-lès-Pierrepont', 'Bucy-les-Pierrepont', 'Bisi le Pjerpon,Bjusi-le-P\'erpon,Bjusi-le-Perrpon,Byusi le Pierpon,bi xi lai pi ai er peng,Биси ле Пјерпон,Бюси-ле-Пьерпон,Бюсі-ле-Пєррпон,Բյուսի լե Պիերպոն,比西莱皮埃尔蓬', '49.6469400', '3.9025000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02133', 419, 0, 100, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02350'),
(6424769, 'Buironfosse', 'Buironfosse', '', '49.9652800', '3.8347200', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02135', 1189, 0, 205, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02620'),
(6424770, 'Burelles', 'Burelles', '', '49.7819400', '3.8977800', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02136', 141, 0, 129, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424771, 'Bussiares', 'Bussiares', 'Bisjar,Bjus\'jar,Byusiar,bi xi ya er,Бисјар,Бюсьяр,Բյուսիար,比西亚尔', '49.0908300', '3.2572200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02137', 119, 0, 99, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02810'),
(6424772, 'Buzancy', 'Buzancy', '', '49.3136100', '3.3477800', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02138', 186, 0, 116, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02200'),
(6424773, 'Caillouël-Crépigny', 'Caillouel-Crepigny', 'Kajuehl\'-Krepin\'i,Kajuel Krepini,Kajuel\'-Krepin\'i,ka you ai lei-ke lei pi ni,Кайуэль-Крепиньи,Каюель-Крепіньї,Кајуел Крепињи,卡尤埃勒-克雷皮尼', '49.6216700', '3.1277800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02139', 412, 0, 109, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02300'),
(6424774, 'Castres', 'Castres', 'Kastr,ka si te er,kaseuteuleu,Кастр,卡斯特尔,카스트르', '49.8041700', '3.2375000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02142', 227, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02680'),
(6424775, 'Caulaincourt', 'Caulaincourt', 'Kolenkur,ke lan ku er,Коленкур,科兰库尔', '49.8644400', '3.1061100', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02144', 130, 0, 78, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02490'),
(6424776, 'Celles-lès-Condé', 'Celles-les-Conde', 'Sel le Konde,Sel\'-le-Konde,sai lei lai kong dai,Сел ле Конде,Сель-ле-Конде,塞勒莱孔代', '49.0119400', '3.5713900', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02146', 75, 0, 88, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02330'),
(6424777, 'Celles-sur-Aisne', 'Celles-sur-Aisne', 'Sel sir En,Sel\'-sjur-Ehn,Sel\'-sjur-En,ai na he pan sai lei,Сел сир Ен,Сель-сюр-Ен,Сель-сюр-Эн,埃纳河畔塞勒', '49.4064000', '3.4820000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02148', 255, 0, 90, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02370'),
(6424778, 'Cerizy', 'Cerizy', 'Serizi,sai li ji,Серизи,Серизі,塞里济', '49.7601000', '3.3272000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02149', 58, 0, 105, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02240'),
(6424779, 'Cerny-en-Laonnois', 'Cerny-en-Laonnois', 'Serni an Lanoa,Serni-an-Lannua,sai ni ang luo nu wa,Серни ан Ланоа,Серни-ан-Ланнуа,Серні-ан-Ланнуа,塞尼昂洛努瓦', '49.4433300', '3.6677800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02150', 71, 0, 181, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6424780, 'Cerny-lès-Bucy', 'Cerny-les-Bucy', 'Serni le Bisi,Serni-le-Bjusi,sai ni lai bi xi,Серни ле Биси,Серни-ле-Бюси,Серні-ле-Бюсі,塞尼莱比西', '49.5777800', '3.5486100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02151', 118, 0, 86, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02870'),
(6424781, 'Cerseuil', 'Cerseuil', 'Sersej,Sersjoj,sai er se yi,Серсей,Серсеј,Серсёй,塞尔瑟伊', '49.3236100', '3.5213900', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02152', 89, 0, 85, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424782, 'Cessières', 'Cessieres', 'Ses\'er,Sesjer,sai xi ye er,Сесьер,Сесьєр,Сесјер,塞西耶尔', '49.5583300', '3.4963900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02153', 459, 0, 105, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02320'),
(6424783, 'Chacrise', 'Chacrise', 'Shakriz,sha ke li si,Шакриз,沙克里斯', '49.3055600', '3.4033300', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02154', 313, 0, 78, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02200'),
(6424784, 'Chaillevois', 'Chaillevois', '', '49.5125000', '3.5250000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02155', 191, 0, 100, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424785, 'Chalandry', 'Chalandry', 'Shalandri,sha lang de li,Шаландри,Шаландрі,沙朗德里', '49.6769400', '3.6425000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02156', 207, 0, 71, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424786, 'Chambry', 'Chambry', 'Shambri,shang bu li,Шамбри,Шамбрі,尚布里', '49.5913900', '3.6552800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02157', 733, 0, 68, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424787, 'Chamouille', 'Chamouille', '', '49.4741700', '3.6655600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02158', 256, 0, 103, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6424788, 'Champs', 'Champs', 'Sham,Shan,shang pu,Шам,Шан,尚普', '49.5408300', '3.2533300', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02159', 291, 0, 53, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02670'),
(6424789, 'Chaourse', 'Chaourse', 'Shaurs,shao er si,Шаурс,绍尔斯', '49.7041700', '3.9975000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02160', 544, 0, 109, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02340'),
(6424790, 'Charmes', 'Charmes', 'Sharm,sha er mu,Шарм,沙尔姆', '49.6511100', '3.3777800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02165', 1676, 0, 65, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02800'),
(6424791, 'Chartèves', 'Charteves', 'Shartev,sha er tai fu,Шартев,沙尔泰弗', '49.0750000', '3.5047200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02166', 375, 0, 80, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424792, 'Chassemy', 'Chassemy', 'Shasemi,Shasmi,Shassemi,sha sai mi,Шасеми,Шасми,Шассемі,沙塞米', '49.3791700', '3.5069400', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02167', 799, 0, 67, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02370'),
(6424793, 'Château-Thierry', 'Chateau-Thierry', '', '49.0463900', '3.4030600', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02168', 14683, 0, 88, 'Europe/Paris', '2017-04-18', 11071624, 3013793, NULL, '02400'),
(6424794, 'Châtillon-lès-Sons', 'Chatillon-les-Sons', 'Shatijon le Son,Shatijon-le-Son,sha di yong lai song,Шатийон-ле-Сон,Шатијон ле Сон,Шатійон-ле-Сон,沙蒂永莱松', '49.7588900', '3.6841700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02169', 78, 0, 144, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424795, 'Châtillon-sur-Oise', 'Chatillon-sur-Oise', 'Shatijon sir Oaz,Shatijon-sjur-Uaz,wa ci he pan sha di yong,Шатийон-сюр-Уаз,Шатијон сир Оаз,Шатійон-сюр-Уаз,瓦兹河畔沙蒂永', '49.7916700', '3.4200000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02170', 133, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02240'),
(6424796, 'Chaudun', 'Chaudun', 'Shoden,Shodjon,shao dan,Шоден,Шодён,绍丹', '49.3177800', '3.2644400', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02172', 261, 0, 146, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02200'),
(6424797, 'Chauny', 'Chauny', '', '49.6155600', '3.2191700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02173', 11952, 0, 51, 'Europe/Paris', '2017-04-18', 11071624, 3013793, NULL, '02300'),
(6424798, 'Chavignon', 'Chavignon', 'Shavin\'on,Shavinon,sha wei ni weng,Шавиньон,Шавињон,Шавіньон,沙维尼翁', '49.4788900', '3.5211100', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02174', 751, 0, 95, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424799, 'Chavigny', 'Chavigny', 'Shavin\'i,Shavini,sha wei ni,Шавиньи,Шавињи,Шавіньї,沙维尼', '49.4250000', '3.3047200', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02175', 153, 0, 129, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424800, 'Chavonne', 'Chavonne', 'Shavon,Shavonn,sha wo ne,Шавон,Шавонн,沙沃讷', '49.4044400', '3.5700000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02176', 194, 0, 61, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02370'),
(6424801, 'Chermizy-Ailles', 'Chermizy-Ailles', 'Shermizi Aj,Shermizi-Aj,xie er mi ji ya ye,Шермизи Ај,Шермизи-Ай,Шермізі-Ай,谢尔米济亚耶', '49.4683300', '3.7255600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02178', 90, 0, 115, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6424802, 'Chéry-Chartreuve', 'Chery-Chartreuve', 'Sheri Shartrev,Sheri-Shartrev,Sheri-Shartrjov,xie li sha te lei fu,Шери Шартрев,Шери-Шартрёв,Шері-Шартрев,谢里沙特勒弗', '49.2627800', '3.6136100', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02179', 335, 0, 141, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424803, 'Chéry-lès-Pouilly', 'Chery-les-Pouilly', 'Chry-les-Pouille,Chry-lès-Pouillé,Sheri le Puji,Sheri-le-Pui,Sheri-le-Puji,xie li lai pu yi,Шери ле Пуји,Шери-ле-Пуйи,Шері-ле-Пуї,谢里莱普伊', '49.6575000', '3.6052800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02180', 669, 0, 62, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424804, 'Chéry-lès-Rozoy', 'Chery-les-Rozoy', 'Sheri-le-Rozua,xie li lai luo zu wa,Шери-ле-Розуа,Шері-ле-Розуа,谢里莱罗祖瓦', '49.7202800', '4.0911100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02181', 102, 0, 144, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02360'),
(6424805, 'Chevennes', 'Chevennes', '', '49.8152800', '3.7325000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02182', 142, 0, 123, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02250'),
(6424806, 'Chevregny', 'Chevregny', 'Shevren\'i,Shevreni,xie fu lei ni,Шевреньи,Шевреньї,Шеврењи,谢夫雷尼', '49.4727800', '3.5913900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02183', 194, 0, 94, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424807, 'Chevresis-Monceau', 'Chevresis-Monceau', 'Shevrezi Monso,Shevrezi-Monso,xie fu lei xi meng suo,Шеврези Монсо,Шеврези-Монсо,Шеврезі-Монсо,谢夫雷西蒙索', '49.7538900', '3.5716700', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02184', 349, 0, 70, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424808, 'Chézy-en-Orxois', 'Chezy-en-Orxois', 'Shezi an Orksoa,Shezi-an-Orksua,xie ji ang ao ke su wa,Шези ан Орксоа,Шези-ан-Орксуа,Шезі-ан-Орксуа,谢济昂奥克苏瓦', '49.1238900', '3.1816700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02185', 360, 0, 128, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02810'),
(6424809, 'Chézy-sur-Marne', 'Chezy-sur-Marne', '', '48.9877800', '3.3672200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02186', 1334, 0, 63, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02570'),
(6424810, 'Chierry', 'Chierry', 'Sh\'erri,Sherri,Shjeri,xie li,Шьерри,Шєррі,Шјери,谢里', '49.0388900', '3.4294400', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02187', 1062, 0, 80, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424811, 'Chigny', 'Chigny', 'Shin\'i,Shini,Шиньи,Шиньї,Шињи', '49.9177800', '3.7708300', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02188', 165, 0, 161, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424812, 'Chivres-en-Laonnois', 'Chivres-en-Laonnois', '', '49.6330600', '3.8425000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02189', 363, 0, 74, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02350'),
(6424813, 'Chivres-Val', 'Chivres-Val', 'Shivr Val,Shivr-Val\',xi fu er wa lei,Шивр Вал,Шивр-Валь,希夫尔瓦勒', '49.3952800', '3.4352800', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02190', 586, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424814, 'Chivy-lès-Étouvelles', 'Chivy-les-Etouvelles', 'Chivy-les-Etouvelles,Chivy-lès-Etouvelles,Shivi lez Etuvel,Shivi-lez-Ehtuvel\',Shivi-lez-Etuvel\',xi wei lai sai tu wei lei,Шиви лез Етувел,Шиви-лез-Этувель,Шиві-лез-Етувель,希维莱塞图韦勒', '49.5279000', '3.5855000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02191', 503, 0, 66, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424815, 'Chouy', 'Chouy', 'Shu,Shui,shu yi,Шу,Шуи,Шуї,舒伊', '49.2058300', '3.2480600', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02192', 391, 0, 143, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424816, 'Cierges', 'Cierges', 'S\'erzh,Sjerzh,xie er ri,Сьерж,Сьєрж,Сјерж,谢尔日', '49.1680600', '3.5986100', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02193', 74, 0, 149, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424817, 'Cilly', 'Cilly', 'Sii,Siji,xi li,Сийи,Сији,Сії,西利', '49.7380600', '3.8319400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02194', 222, 0, 93, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02250'),
(6424818, 'Ciry-Salsogne', 'Ciry-Salsogne', 'Siri Salson,Siri-Sal\'son\',xi li sa er suo nie,Сири Салсоњ,Сири-Сальсонь,Сірі-Сальсонь,西利萨尔索涅', '49.3619400', '3.4619400', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02195', 833, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220');
INSERT INTO `villes` (`id`, `name`, `asciiname`, `alternatenames`, `latitude`, `longitude`, `feature class`, `feature code`, `country code`, `cc2`, `admin1 code`, `admin2 code`, `admin3 code`, `admin4 code`, `population`, `elevation`, `gtopo30`, `timezone`, `modification date`, `adm1`, `adm2`, `adm4`, `zip`) VALUES
(6424819, 'Clacy-et-Thierret', 'Clacy-et-Thierret', 'Clacy e Thierret,Klasi et Tjere,Klasi-e-T\'erre,Klasi-eh-T\'erre,ke la xi di ye lei,Класи ет Тјере,Класи-э-Тьерре,Класі-е-Тьєрре,克拉西蒂耶雷', '49.5444400', '3.5702800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02196', 352, 0, 68, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424820, 'Clairfontaine', 'Clairfontaine', 'Klerfonten,ke lai er fang dan,Клерфонтен,克莱尔方丹', '49.9800000', '3.9852800', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02197', 565, 0, 225, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02260'),
(6424821, 'Clamecy', 'Clamecy', 'Klamsi,ke la mu xi,Кламси,Кламсі,克拉姆西', '49.4280600', '3.3611100', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02198', 223, 0, 141, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424822, 'Clastres', 'Clastres', 'Klastr,ke la si te,Кластр,克拉斯特', '49.7457000', '3.2327000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02199', 607, 0, 76, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02440'),
(6424823, 'Clermont-les-Fermes', 'Clermont-les-Fermes', 'Klermon le Ferm,Klermon-le-Ferm,ke lai meng lai fei mu,Клермон ле Ферм,Клермон-ле-Ферм,克莱蒙莱费姆', '49.6672200', '3.9383300', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02200', 121, 0, 143, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02340'),
(6424824, 'Coincy', 'Coincy', 'Koansi,Kuehnsi,Kuensi,kuan xi,Коанси,Куенсі,Куэнси,宽西', '49.1611100', '3.4216700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02203', 1295, 0, 103, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424825, 'Coingt', 'Coingt', 'Koen,Kuehn,Kuen,ke an,Коен,Куен,Куэн,科安', '49.7934000', '4.0922000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02204', 78, 0, 198, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02360'),
(6424826, 'Colligis-Crandelain', 'Colligis-Crandelain', '', '49.4758300', '3.6402800', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02205', 171, 0, 104, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6424827, 'Colonfay', 'Colonfay', 'Kolonfe,ke long fei,Колонфе,科隆费', '49.8580600', '3.7127800', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02206', 65, 0, 150, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424828, 'Commenchon', 'Commenchon', 'Komanshon,Kommanshon,ke mang xiong,Команшон,Комманшон,科芒雄', '49.6402800', '3.1580600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02207', 183, 0, 90, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02300'),
(6424829, 'Concevreux', 'Concevreux', 'Konsevre,Konsevrjo,kong sai fu lei,Консевре,Консеврё,孔塞夫勒', '49.3766700', '3.7891700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02208', 262, 0, 54, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424830, 'Condé-en-Brie', 'Conde-en-Brie', 'Konde an Bri,Konde-an-Bri,Konte-an-Bri,konde=an=buri,kong dai ang bu li,Κοντέ-αν-Μπρι,Конде ан Бри,Конде-ан-Бри,Конде-ан-Брі,コンデ＝アン＝ブリー,孔代昂布里', '49.0041700', '3.5613900', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02209', 653, 0, 82, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02330'),
(6424831, 'Condé-sur-Aisne', 'Conde-sur-Aisne', 'Konde sir En,Konde-sjur-Ehn,Konde-sjur-En,ai na he pan kong dai,konde=shuru=enu,Конде сир Ен,Конде-сюр-Ен,Конде-сюр-Эн,コンデ＝シュル＝エーヌ,埃纳河畔孔代', '49.3983300', '3.4688900', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02210', 403, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02370'),
(6424832, 'Condé-sur-Suippe', 'Conde-sur-Suippe', 'Konde sir Sip,Konde-sjur-Sjuip,Konde-sjur-Sjuipp,xu pu he pan kong dai,Конде сир Сип,Конде-сюр-Сюип,Конде-сюр-Сюїпп,叙普河畔孔代', '49.4200000', '3.9500000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02211', 236, 0, 55, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02190'),
(6424833, 'Condren', 'Condren', 'Kondran,kong de lang,Кондран,孔德朗', '49.6314000', '3.2813000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02212', 703, 0, 45, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02700'),
(6424834, 'Connigis', 'Connigis', 'Konizhi,Konnizhi,ke ni ji,Конижи,Коннижи,Конніжі,科尼吉', '49.0313900', '3.5308300', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02213', 329, 0, 84, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02330'),
(6424835, 'Contescourt', 'Contescourt', 'Kontkur,kong tai si ku er,Конткур,孔泰斯库尔', '49.7925000', '3.2308300', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02214', 69, 0, 94, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02680'),
(6424836, 'Corbeny', 'Corbeny', '', '49.4622200', '3.8236100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02215', 740, 0, 91, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02820'),
(6424837, 'Corcy', 'Corcy', 'Korsi,ke er xi,Корси,Корсі,科尔西', '49.2538900', '3.2116700', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02216', 304, 0, 91, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424838, 'Coucy-le-Château-Auffrique', 'Coucy-le-Chateau-Auffrique', '', '49.5202800', '3.3225000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02217', 1053, 0, 123, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02380'),
(6424839, 'Coucy-lès-Eppes', 'Coucy-les-Eppes', '', '49.5525000', '3.7700000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02218', 574, 0, 102, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02840'),
(6424840, 'Coucy-la-Ville', 'Coucy-la-Ville', 'Kusi-la-Vil\',ku xi cheng,Куси-ла-Виль,Кусі-ла-Віль,库西城', '49.5333300', '3.3294400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02219', 205, 0, 82, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02380'),
(6424841, 'Coupru', 'Coupru', '', '49.0308300', '3.2722200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02221', 180, 0, 155, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02310'),
(6424842, 'Courbes', 'Courbes', 'Kurb,ku er bo,Курб,库尔伯', '49.6844400', '3.4511100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02222', 34, 0, 56, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02800'),
(6424843, 'Courboin', 'Courboin', 'Kurbuehn,Kurbuen,ku er bu an,Курбуен,Курбуэн,库尔布安', '48.9938900', '3.5047200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02223', 293, 0, 197, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02330'),
(6424844, 'Courchamps', 'Courchamps', 'Kursham,Kurshan,ku er shang pu,Куршам,Куршан,库尔尚普', '49.1133300', '3.2650000', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02225', 89, 0, 158, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02810'),
(6424845, 'Courmelles', 'Courmelles', 'Kurmel,Kurmel\',ku er mei lei,Курмел,Курмель,库尔梅勒', '49.3447200', '3.3125000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02226', 1691, 0, 63, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02200'),
(6424846, 'Courmont', 'Courmont', 'Kurmon,ku er meng,Курмон,库尔蒙', '49.1486100', '3.5758300', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02227', 111, 0, 171, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424847, 'Courtemont-Varennes', 'Courtemont-Varennes', 'Kurtmon Varan,Kurtmon-Varen,Kurtmon-Varenn,ku er te meng-wa lei ne,Куртмон Варан,Куртмон-Варен,Куртмон-Варенн,库尔特蒙-瓦雷讷', '49.0738900', '3.5416700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02228', 303, 0, 76, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02850'),
(6424848, 'Courtrizy-et-Fussigny', 'Courtrizy-et-Fussigny', 'Courtrizy e Fussigny,Kurtrizi e Fisini,Kurtrizi-e-Fjussin\'i,Kurtrizi-eh-Fjussin\'i,ku te li ji he fei xi ni,Куртризи е Фисињи,Куртризи-э-Фюссиньи,Куртризі-е-Фюссіньї,库特里济和菲西尼', '49.5200000', '3.7880600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02229', 70, 0, 122, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02820'),
(6424849, 'Couvrelles', 'Couvrelles', 'Kuvrel,Kuvrel\',ku fu lei lei,Куврел,Куврель,库夫雷勒', '49.3380000', '3.4883000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02230', 187, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424850, 'Couvron-et-Aumencourt', 'Couvron-et-Aumencourt', 'Couvron e Aumencourt,Kuvron e Omankur,Kuvron-eh-Omankur,Kuvron-et-Omankur,ku fu long he ou mang ku er,Куврон е Оманкур,Куврон-ет-Оманкур,Куврон-э-Оманкур,库夫龙和欧芒库尔', '49.6430600', '3.5169400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02231', 1392, 0, 76, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424851, 'Coyolles', 'Coyolles', 'Koajol,Kuajol\',kua yue lei,Коајол,Куайоль,夸约勒', '49.2342500', '3.0428700', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02232', 370, 0, 109, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424852, 'Cramaille', 'Cramaille', '', '49.2294400', '3.4547200', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02233', 130, 0, 151, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424853, 'Craonne', 'Craonne', '', '49.4400000', '3.7866700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02234', 72, 0, 87, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424854, 'Craonnelle', 'Craonnelle', '', '49.4311100', '3.7705600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02235', 107, 0, 92, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424855, 'Crécy-au-Mont', 'Crecy-au-Mont', 'Kresi o Mon,Kresi-o-Mon,ke lei xi ou meng,Креси о Мон,Креси-о-Мон,Кресі-о-Мон,克雷西欧蒙', '49.4880600', '3.3247200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02236', 294, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02380'),
(6424856, 'Crécy-sur-Serre', 'Crecy-sur-Serre', 'Kresi sir Ser,Kresi-sjur-Ser,Kresi-sjur-Serr,sai er he pan ke lei xi,Креси сир Сер,Креси-сюр-Сер,Кресі-сюр-Серр,塞尔河畔克雷西', '49.6969400', '3.6225000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02237', 1454, 0, 70, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424857, 'Crézancy', 'Crezancy', 'Krezansi,ke lei cang xi,Крезанси,Крезансі,克雷藏西', '49.0480600', '3.5108300', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02239', 1113, 0, 77, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02650'),
(6424858, 'Croix-Fonsomme', 'Croix-Fonsomme', '', '49.9208300', '3.4022200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02240', 227, 0, 99, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424859, 'Crupilly', 'Crupilly', 'Kripiji,Krjupii,Krjupiji,ke lu pi yi,Крипији,Крюпийи,Крюпії,克吕皮伊', '49.9255600', '3.7552800', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02244', 61, 0, 157, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424860, 'Cuffies', 'Cuffies', 'Kifi,Kjuffi,qu fei ye,Кифи,Кюффи,Кюффі,屈菲耶', '49.4055000', '3.3200000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02245', 1632, 0, 65, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424861, 'Cuirieux', 'Cuirieux', 'Kirje,Kjuir\'jo,Kjuire,qu li yue,Кирје,Кюирьё,Кюїрє,屈里约', '49.6808300', '3.8147200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02248', 164, 0, 81, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02350'),
(6424862, 'Cuiry-Housse', 'Cuiry-Housse', 'Kiri Us,Kjuiri-Us,Kjuiri-Uss,qu li wu si,Кири Ус,Кюири-Ус,Кюїрі-Усс,屈里乌斯', '49.2947200', '3.4922200', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02249', 102, 0, 97, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424863, 'Cuiry-lès-Chaudardes', 'Cuiry-les-Chaudardes', 'Kiri le Shodard,Kjuiri-le-Shodard,qu li lai shao da de,Кири ле Шодард,Кюири-ле-Шодард,Кюїрі-ле-Шодард,屈里莱绍达德', '49.3861100', '3.7697200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02250', 88, 0, 51, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424864, 'Cuissy-et-Geny', 'Cuissy-et-Geny', 'Cuissy e Geny,Kisi et Zheni,Kjuissi-e-Zheni,Kjuissi-eh-Zheni,qu xi re ni,Киси ет Жени,Кюисси-э-Жени,Кюїссі-е-Жені,屈西热尼', '49.4108300', '3.7019400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02252', 68, 0, 153, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424865, 'Cuisy-en-Almont', 'Cuisy-en-Almont', 'Kizi an Almon,Kjuizi-an-Al\'mon,qu xi ang a er meng,Кизи ан Алмон,Кюизи-ан-Альмон,Кюїзі-ан-Альмон,屈西昂阿尔蒙', '49.4175000', '3.2458300', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02253', 323, 0, 129, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02200'),
(6424866, 'Cutry', 'Cutry', 'Kitri,Kjutri,qu te li,Китри,Кютри,Кютрі,屈特里', '49.3472200', '3.1816700', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02254', 114, 0, 81, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424867, 'Cys-la-Commune', 'Cys-la-Commune', 'Si la Komin,Si-la-Kommjun,Sis-la-Kommjun,xi la ke mi ne,Си ла Комин,Си-ла-Коммюн,Сіс-ла-Коммюн,西拉科米讷', '49.3919400', '3.5722200', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02255', 150, 0, 54, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424868, 'Dagny-Lambercy', 'Dagny-Lambercy', 'Dan\'i-Lambersi,Dani Lambersi,da ni lang bei xi,Даньи-Ламберси,Даньї-Ламберсі,Дањи Ламберси,达尼朗贝西', '49.7711100', '4.0436100', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02256', 129, 0, 167, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424869, 'Dallon', 'Dallon', 'Dallon,Dalon,da long,Даллон,Далон,Դալլոն,达隆', '49.8211100', '3.2413900', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02257', 372, 0, 74, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02680'),
(6424870, 'Dammard', 'Dammard', 'Damar,Dammar,da ma er,Дамар,Даммар,达马尔', '49.1447200', '3.1977800', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02258', 417, 0, 142, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02470'),
(6424871, 'Dampleux', 'Dampleux', 'Dample,Dampljo,dang pu lei,Дампле,Дамплё,当普勒', '49.2433300', '3.1541700', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02259', 433, 0, 152, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424872, 'Danizy', 'Danizy', 'Danizi,da ni ji,Данизи,Данізі,Դանիզի,达尼济', '49.6647000', '3.3929000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02260', 558, 0, 77, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02800'),
(6424873, 'Dercy', 'Dercy', 'Dersi,de er xi,Дерси,Дерсі,Դերսի,德尔西', '49.7036100', '3.6850000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02261', 368, 0, 72, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424874, 'Deuillet', 'Deuillet', 'Dee,Deje,Djoje,de ye,Деє,Деје,Дёйе,德耶', '49.6302800', '3.3613900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02262', 217, 0, 52, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02700'),
(6424875, 'Dhuizel', 'Dhuizel', 'Dizel,Djuizel\',di ze lei,Дизел,Дюизель,Дюїзель,迪泽勒', '49.3655600', '3.6183300', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02263', 111, 0, 92, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424876, 'Dizy-le-Gros', 'Dizy-le-Gros', '', '49.6294400', '4.0222200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02264', 793, 0, 137, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02340'),
(6424877, 'Dohis', 'Dohis', 'Doi,duo yi,Дои,Дої,Դոի,多伊', '49.7619000', '4.1363000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02265', 85, 0, 204, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02360'),
(6424878, 'Dolignon', 'Dolignon', 'Dolin\'on,Dolinon,duo li ni weng,Долиньон,Долињон,Доліньон,Դոլինոն,多利尼翁', '49.7313000', '4.0850000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02266', 61, 0, 162, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02360'),
(6424879, 'Dommiers', 'Dommiers', 'Dom\'er,Domje,Domme,duo mi ye,Доммє,Домьер,Домје,多米耶', '49.3269400', '3.2091700', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02267', 288, 0, 103, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424880, 'Domptin', 'Domptin', 'Dompten,Donten,dong pu tan,Домптен,Донтен,栋普坦', '49.0163900', '3.2769400', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02268', 660, 0, 116, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02310'),
(6424881, 'Douchy', 'Douchy', 'Dushi,Dusi,du xi,Души,Душі,Դուշի,杜希', '49.7961000', '3.1355000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02270', 147, 0, 92, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02590'),
(6424882, 'Dravegny', 'Dravegny', 'Draven\'i,Draveni,de la wei ni,Дравеньи,Дравеньї,Дравењи,Դրավենի,德拉韦尼', '49.2302800', '3.6380600', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02271', 142, 0, 148, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424883, 'Droizy', 'Droizy', 'Druazi,de lu wa ji,Друази,Друазі,Դրուազի,德鲁瓦济', '49.2772200', '3.3927800', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02272', 77, 0, 129, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424884, 'Ébouleau', 'Ebouleau', 'Ebulo,Ehbulo,ai bu luo,Ебуло,Эбуло,埃布洛', '49.6730600', '3.8747200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02274', 203, 0, 109, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02350'),
(6424885, 'Effry', 'Effry', 'Effri,Ehfri,ai fu li,Еффрі,Эфри,埃夫里', '49.9250000', '3.9844400', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02275', 353, 0, 147, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02500'),
(6424886, 'Englancourt', 'Englancourt', 'Anglankur,ang ge lang ku er,Англанкур,Անգլանկուր,昂格朗库尔', '49.9166700', '3.8000000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02276', 111, 0, 164, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02260'),
(6424887, 'Éparcy', 'Eparcy', 'Ehparsi,Eparsi,ai pa er xi,Епарсі,Эпарси,埃帕尔西', '49.8733300', '4.0605600', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02278', 45, 0, 156, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02500'),
(6424888, 'Épaux-Bézu', 'Epaux-Bezu', 'Ehpo-Bezju,Epo-Bezju,ai bo bei ju,Епо-Безю,Эпо-Безю,埃波贝聚', '49.1086100', '3.3475000', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02279', 579, 0, 121, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424889, 'Épieds', 'Epieds', 'Ehp\'e,Epe,ai pi ye de,Епє,Эпье,埃皮耶德', '49.1063900', '3.4447200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02280', 386, 0, 153, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424890, 'Erlon', 'Erlon', 'Ehrlon,Erlon,ai er long,Ерлон,Эрлон,埃尔隆', '49.7295000', '3.7142000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02283', 291, 0, 85, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02250'),
(6424891, 'Erloy', 'Erloy', 'Ehrlua,Erlua,ai er lu wa,Ерлуа,Эрлуа,埃尔卢瓦', '49.9131000', '3.8303000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02284', 93, 0, 125, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02260'),
(6424892, 'Esquéhéries', 'Esqueheries', 'Ehskeehri,Eskeeri,Eskeri,ai si kai ai li,Ескеері,Ескери,Эскеэри,埃斯凯埃里', '49.9838900', '3.7463900', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02286', 851, 0, 166, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02170'),
(6424893, 'Essigny-le-Grand', 'Essigny-le-Grand', 'Ehssin\'i-le-Gran,Esini le Gran,Essin\'i-le-Gran,da ai xi ni,Есињи ле Гран,Ессіньї-ле-Гран,Эссиньи-ле-Гран,大埃西尼', '49.7772000', '3.2777000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02287', 1120, 0, 109, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02690'),
(6424894, 'Essigny-le-Petit', 'Essigny-le-Petit', 'Ehssin\'i-le-Peti,Esini le Pti,Essin\'i-le-Peti,xiao ai xi ni,Есињи ле Пти,Ессіньї-ле-Петі,Эссиньи-ле-Пети,小埃西尼', '49.9000000', '3.3666700', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02288', 368, 0, 84, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02100'),
(6424895, 'Essises', 'Essises', 'Ehssiz,Esiz,Essiz,ai xi si,Есиз,Ессіз,Эссиз,埃西斯', '48.9622200', '3.4197200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02289', 429, 0, 139, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02570'),
(6424896, 'Essômes-sur-Marne', 'Essomes-sur-Marne', 'Ehssom-sjur-Marn,Esom na Marni,Essom-sjur-Marn,ma en he pan ai suo mu,Есом на Марни,Ессом-сюр-Марн,Эссом-сюр-Марн,马恩河畔埃索姆', '49.0294400', '3.3741700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02290', 2695, 0, 69, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424897, 'Étampes-sur-Marne', 'Etampes-sur-Marne', 'Ehtamp-sjur-Marn,Etamp-sjur-Marn,Etampes-sur-Marne,Etan na Marni,ma en he pan ai tang pu,Етамп-сюр-Марн,Етан на Марни,Этамп-сюр-Марн,马恩河畔埃唐普', '49.0341700', '3.4191700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02292', 1185, 0, 82, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424898, 'Étaves-et-Bocquiaux', 'Etaves-et-Bocquiaux', 'Ehtav-eh-Bok\'o,Etav et Bokjo,Etav-e-Bokjo,Etaves e Bocquiaux,Etaves-et-Bocquiaux,ai ta fu he bo qu yi ou,Étaves e Bocquiaux,Етав ет Бокјо,Етав-е-Бокйо,Этав-э-Бокьо,埃塔夫和博屈伊欧', '49.9386100', '3.4538900', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02293', 542, 0, 150, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424899, 'Étréaupont', 'Etreaupont', '', '49.9033300', '3.9158300', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02295', 874, 0, 126, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02580'),
(6424900, 'Étreillers', 'Etreillers', 'Ehtreje,Etree,Etreillers,Etreje,ai te lei ye,Етреє,Етреје,Этрейе,埃特雷耶', '49.8294000', '3.1607000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02296', 1198, 0, 98, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02590'),
(6424901, 'Étrépilly', 'Etrepilly', 'Ehtrepiji,Etrepii,Etrepiji,ai te lei pi yi,Етрепији,Етрепії,Этрепийи,埃特雷皮伊', '49.0850000', '3.3388900', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02297', 83, 0, 168, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424902, 'Évergnicourt', 'Evergnicourt', 'Ehvern\'ikur,Evergnicourt,Evern\'ikur,Evernikur,ai wei ni ku er,Еверньїкур,Еверњикур,Эверньикур,埃韦尼库尔', '49.4433300', '4.0413900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02299', 557, 0, 59, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02190'),
(6424903, 'Faucoucourt', 'Faucoucourt', '', '49.5319400', '3.4650000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02301', 314, 0, 88, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02320'),
(6424904, 'Fayet', 'Fayet', 'Fae,Faiellum,Faje,fa ye,Файе,Фає,法耶', '49.8680600', '3.2522200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02303', 547, 0, 118, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02100'),
(6424905, 'Fère-en-Tardenois', 'Fere-en-Tardenois', '', '49.2000000', '3.5166700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02305', 3311, 0, 123, 'Europe/Paris', '2017-04-18', 11071624, 3013793, NULL, '02130'),
(6424906, 'Festieux', 'Festieux', 'Fest\'e,Fest\'jo,Festjo,fei si di e,Фестьё,Фестьє,Фестё,费斯蒂厄', '49.5222200', '3.7538900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02309', 568, 0, 110, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02840'),
(6424907, 'Fieulaine', 'Fieulaine', 'F\'jolen,Felen,fei e lan,Фьёлен,Фєлен,菲厄兰', '49.8996000', '3.4496000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02310', 284, 0, 140, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424908, 'Flavigny-le-Grand-et-Beaurain', 'Flavigny-le-Grand-et-Beaurain', 'Flavigny-le-Grand e Beaurain,Flavin\'i-le-Grand-e-Boren,Flavin\'i-le-Grand-eh-Boren,da fu la wei ni he bo lan,Флавиньи-ле-Гранд-э-Борен,Флавіньї-ле-Гранд-е-Борен,大弗拉维尼和博兰', '49.8908300', '3.6647200', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02313', 466, 0, 100, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424909, 'Flavy-le-Martel', 'Flavy-le-Martel', 'Flavi-le-Martel\',fu la wei lei ma tai lei,Флави-ле-Мартель,Флаві-ле-Мартель,弗拉维勒马泰勒', '49.7133300', '3.1930600', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02315', 1632, 0, 71, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02520'),
(6424910, 'Fluquières', 'Fluquieres', 'Fljuk\'er,Fljuker,fu lu ji ye er,Флюкьер,Флюкєр,弗吕基耶尔', '49.8033300', '3.1527800', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02317', 213, 0, 95, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02590'),
(6424911, 'Folembray', 'Folembray', 'Folambre,fu lang bu lai,Фоламбре,福朗布赖', '49.5419400', '3.2888900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02318', 1543, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02670'),
(6424912, 'Fontaine-lès-Clercs', 'Fontaine-les-Clercs', 'Fonten le Klerk,Fonten-le-Kler,fang dan lai ke lai er,Фонтен ле Клерк,Фонтен-ле-Клер,方丹莱克莱尔', '49.8058300', '3.2227800', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02320', 290, 0, 83, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02680'),
(6424913, 'Fontaine-lès-Vervins', 'Fontaine-les-Vervins', 'Fonten le Verven,Fonten-le-Verven,fang dan lai wei er wan,Фонтен ле Вервен,Фонтен-ле-Вервен,方丹莱韦尔万', '49.8533300', '3.9016700', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02321', 969, 0, 183, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424914, 'Fontaine-Notre-Dame', 'Fontaine-Notre-Dame', 'Fonten-Notr-Dam,fang dan sheng mu cun,Фонтен-Нотр-Дам,方丹圣母村', '49.8841700', '3.4286100', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02322', 386, 0, 139, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424915, 'Fontaine-Uterte', 'Fontaine-Uterte', 'Fonten-Jutert,fang dan yu tai er te,Фонтен-Ютерт,方丹于泰尔特', '49.9219400', '3.3700000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02323', 122, 0, 141, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424917, 'Fontenoy', 'Fontenoy', 'Fontenua,Fontnoa,feng te nu wa,Фонтенуа,Фонтноа,丰特努瓦', '49.4072200', '3.1986100', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02326', 501, 0, 65, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02290'),
(6424918, 'Foreste', 'Foreste', 'Forest,fu lai si te,Форест,福莱斯特', '49.8088900', '3.0986100', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02327', 187, 0, 84, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02590'),
(6424919, 'Fossoy', 'Fossoy', 'Fosoa,Fossua,fu su wa,Фосоа,Фоссуа,福苏瓦', '49.0483300', '3.4825000', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02328', 584, 0, 99, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02650'),
(6424920, 'Fourdrain', 'Fourdrain', 'Furdren,fu er de lan,Фурдрен,富尔德兰', '49.6107000', '3.4721000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02329', 402, 0, 86, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02870'),
(6424921, 'Francilly-Selency', 'Francilly-Selency', 'Fransii-Selansi,Fransiji Selansi,Fransiji-Selansi,fu lang xi yi-sai lang xi,Франсийи-Селанси,Франсији Селанси,Франсії-Селансі,弗朗西伊-塞朗西', '49.8527800', '3.2236100', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02330', 458, 0, 117, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02760'),
(6424922, 'Fresnes-en-Tardenois', 'Fresnes-en-Tardenois', 'Fren-an-Tardenua,fu lei ne ang ta de nu wa,Френ-ан-Тарденуа,弗雷讷昂塔德努瓦', '49.1458300', '3.5558300', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02332', 254, 0, 167, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424923, 'Fresnoy-le-Grand', 'Fresnoy-le-Grand', '', '49.9475000', '3.4172200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02334', 3072, 0, 120, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02230'),
(6424924, 'Fressancourt', 'Fressancourt', 'Fressankur,fu lei sang ku er,Фрессанкур,弗雷桑库尔', '49.6323000', '3.4262000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02335', 215, 0, 69, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02800'),
(6424925, 'Frières-Faillouël', 'Frieres-Faillouel', '', '49.6872000', '3.2426000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02336', 963, 0, 72, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02700'),
(6424926, 'Froidestrées', 'Froidestrees', 'Fruadestre,fu lu wa dai si te lei,Фруадестре,弗鲁瓦代斯特雷', '49.9411100', '3.9058300', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02337', 208, 0, 199, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02260'),
(6424927, 'Froidmont-Cohartille', 'Froidmont-Cohartille', 'Fruadmon-Koartij,Fruamon-Koartij,fu lu wa meng-ke a di ye,Фруадмон-Коартій,Фруамон-Коартий,弗鲁瓦蒙-科阿蒂耶', '49.6863900', '3.7091700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02338', 235, 0, 74, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02270'),
(6424928, 'Gandelu', 'Gandelu', '', '49.0947200', '3.1830600', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02339', 675, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02810'),
(6424929, 'Gauchy', 'Gauchy', 'Goshi,ge xi,Гоши,Гоші,戈希', '49.8244400', '3.2697200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02340', 5518, 0, 81, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02430'),
(6424930, 'Gercy', 'Gercy', 'Zhersi,re er xi,Жерси,Жерсі,热尔西', '49.8138900', '3.8683300', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02341', 298, 0, 122, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424931, 'Gergny', 'Gergny', 'Zhern\'i,re er ni,Жерньи,Жерньї,热尔尼', '49.9144400', '3.9341700', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02342', 154, 0, 142, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02260'),
(6424932, 'Germaine', 'Germaine', '', '49.8114000', '3.1157000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02343', 67, 0, 84, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02590'),
(6424934, 'Gibercourt', 'Gibercourt', 'Zhiberkur,ji bei ku er,Жиберкур,吉贝库尔', '49.7366700', '3.2847200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02345', 43, 0, 88, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02440'),
(6424935, 'Gizy', 'Gizy', 'Zhizi,ji ji,Жизи,Жизі,吉济', '49.6005600', '3.7744400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02346', 688, 0, 77, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02350'),
(6424936, 'Gland', 'Gland', 'Glan,ge lang,Глан,格朗', '49.0480600', '3.4622200', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02347', 488, 0, 83, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02400'),
(6424938, 'Goussancourt', 'Goussancourt', 'Gussankur,gu sang ku er,Гуссанкур,古桑库尔', '49.1666700', '3.6666700', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02351', 106, 0, 195, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02130'),
(6424939, 'Grandlup-et-Fay', 'Grandlup-et-Fay', 'Grandlup e Fay,Granlju-e-Fe,Granlju-eh-Fe,ge lang lu pu fei,Гранлю-е-Фе,Гранлю-э-Фе,格朗吕普费', '49.6577800', '3.7369400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02353', 322, 0, 101, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02350'),
(6424940, 'Grandrieux', 'Grandrieux', 'Granrie,Granrijo,ge lang e,Гранриё,Гранріє,格朗略', '49.7302800', '4.1847200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02354', 88, 0, 206, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02360'),
(6424941, 'Gricourt', 'Gricourt', 'Grikur,ge li ku er,Грикур,格里库尔', '49.8888900', '3.2444400', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02355', 852, 0, 93, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02100'),
(6424942, 'Grisolles', 'Grisolles', 'Grizol\',ge li suo lei,Гризоль,格里索勒', '49.1408300', '3.3575000', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02356', 195, 0, 162, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424943, 'Gronard', 'Gronard', 'Gronar,ge luo na er,Гронар,格罗纳尔', '49.7934000', '3.8843000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02357', 72, 0, 145, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424944, 'Grougis', 'Grougis', 'Gruzhi,ge lu ji,Гружи,Гружі,格鲁吉', '49.9437000', '3.5324000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02358', 377, 0, 162, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02110'),
(6424945, 'Grugies', 'Grugies', 'Grjuzhi,ge lu ji,Грюжи,Грюжі,格吕吉', '49.8132000', '3.2669000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02359', 1038, 0, 84, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02680'),
(6424946, 'Guignicourt', 'Guignicourt', '', '49.4352800', '3.9658300', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02360', 2131, 0, 62, 'Europe/Paris', '2017-04-18', 11071624, 3013793, NULL, '02190'),
(6424947, 'Guivry', 'Guivry', 'Givri,ji fu li,Гиври,Гіврі,吉夫里', '49.6466700', '3.1191700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02362', 261, 0, 100, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02300'),
(6424948, 'Guny', 'Guny', 'Gjuni,ju ni,Гюни,Гюні,居尼', '49.5188900', '3.2675000', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02363', 442, 0, 54, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02300'),
(6424949, 'Hannapes', 'Hannapes', 'Anap,Annap,a na pu,Анап,Аннап,Աննապ,阿纳普', '49.9722200', '3.6252800', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02366', 285, 0, 111, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02510'),
(6424950, 'Happencourt', 'Happencourt', 'Apankur,Appankur,a pang ku er,Апанкур,Аппанкур,Ափանկուր,阿庞库尔', '49.7777800', '3.1872200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02367', 152, 0, 82, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02480'),
(6424951, 'Haramont', 'Haramont', 'Aramon,a la meng,Арамон,Արամոն,阿拉蒙', '49.2783600', '3.0614500', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02368', 603, 0, 136, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424952, 'Harcigny', 'Harcigny', 'Arsin\'i,Arsini,Arsinyi,a er xi ni,Арсиньи,Арсињи,Арсіньї,Արսինյի,阿尔西尼', '49.7961100', '3.9813900', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02369', 250, 0, 159, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424953, 'Harly', 'Harly', 'Arli,a er li,Арли,Арлі,Արլի,阿尔利', '49.8425000', '3.3211100', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02371', 1729, 0, 94, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02100'),
(6424954, 'Hartennes-et-Taux', 'Hartennes-et-Taux', 'Arten e To,Arten-eh-To,Artenn-e-To,Hartennes e Taux,a te ne tuo,Артен е То,Артен-э-То,Артенн-е-То,Արտեն է Տո,阿特讷托', '49.2716700', '3.3530600', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02372', 335, 0, 153, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424955, 'Hary', 'Hary', 'Ari,a li,Ари,Арі,Արի,阿里', '49.7880600', '3.9330600', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02373', 223, 0, 112, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424956, 'Hautevesnes', 'Hautevesnes', '', '49.1091700', '3.2319400', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02375', 152, 0, 174, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02810'),
(6424957, 'Hauteville', 'Hauteville', 'Otvil,Otvil\',otovu~iru,ou te wei er,Отвил,Отвиль,Отвіль,オートヴィル,欧特维尔', '49.8780000', '3.5225000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02376', 168, 0, 86, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424958, 'Haution', 'Haution', 'Ot\'on,Otion,ou di weng,Отион,Отьон,欧蒂翁', '49.8663000', '3.8411000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02377', 146, 0, 176, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424959, 'Hinacourt', 'Hinacourt', 'Inakur,yi na ku er,Інакур,Инакур,伊纳库尔', '49.7448000', '3.2966000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02380', 33, 0, 95, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02440'),
(6424960, 'Hirson', 'Hirson', '', '49.9216700', '4.0838900', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02381', 9463, 0, 177, 'Europe/Paris', '2017-04-18', 11071624, 3013793, NULL, '02500'),
(6424961, 'Holnon', 'Holnon', 'Ol\'non,ao er nong,Ольнон,奥尔农', '49.8586100', '3.2125000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02382', 1426, 0, 114, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02760'),
(6424962, 'Homblières', 'Homblieres', 'Ombl\'er,Omblier,weng bu li ye er,Омблиер,Омбльєр,翁布利耶尔', '49.8500000', '3.3650000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02383', 1442, 0, 83, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02720'),
(6424963, 'Houry', 'Houry', 'Uri,wu li,Ури,Урі,乌里', '49.7833300', '3.8500000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02384', 63, 0, 117, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424964, 'Iron', 'Iron', 'Iron,yi long,Ірон,Ирон,伊龙', '49.9544400', '3.6600000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02386', 220, 0, 137, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02510'),
(6424965, 'Itancourt', 'Itancourt', 'Itankur,yi tang ku er,Ітанкур,Итанкур,伊唐库尔', '49.8066700', '3.3450000', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02387', 1129, 0, 118, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02240'),
(6424966, 'Jaulgonne', 'Jaulgonne', 'Zhol\'gon,Zhol\'gonn,ruo er ge ne,Жольгон,Жольгонн,若尔戈讷', '49.0883300', '3.5336100', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02389', 659, 0, 76, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02850'),
(6424967, 'Jeancourt', 'Jeancourt', '', '49.9275000', '3.1466700', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02390', 239, 0, 90, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02490'),
(6424968, 'Jeantes', 'Jeantes', 'Jeantes-la-Ville,Zhant,rang te,Жант,让特', '49.8038900', '4.0552800', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02391', 213, 0, 180, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424969, 'Joncourt', 'Joncourt', '', '49.9558300', '3.2994400', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02392', 324, 0, 142, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02420'),
(6424970, 'Jouaignes', 'Jouaignes', 'Zhuehn\',Zhuen\',ru ai nie,Жуень,Жуэнь,茹埃涅', '49.2986100', '3.5358300', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02393', 168, 0, 84, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424971, 'Jumencourt', 'Jumencourt', 'Zhjumankur,Zhumankur,rui mang ku er,Жуманкур,Жюманкур,瑞芒库尔', '49.5086100', '3.3538900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02395', 154, 0, 74, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02380'),
(6424972, 'Jumigny', 'Jumigny', 'Zhjumin\'i,Zhumin\'i,rui mi ni,Жуміньї,Жюминьи,瑞米尼', '49.4113900', '3.7172200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02396', 71, 0, 106, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02160'),
(6424973, 'Jussy', 'Jussy', 'Zhjussi,Zhussi,rui xi,Жуссі,Жюсси,瑞西', '49.7202800', '3.2313900', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02397', 1250, 0, 70, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02480'),
(6424974, 'Juvigny', 'Juvigny', 'Zhjuvin\'i,Zhuvin\'i,rui wei ni,Жувіньї,Жювиньи,瑞维尼', '49.4475000', '3.3183300', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02398', 278, 0, 134, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424975, 'Juvincourt-et-Damary', 'Juvincourt-et-Damary', 'Juvincourt e Damary,Zhjuvenkur-eh-Damari,Zhuvenkur-e-Damari,rui wan ku er-da ma li,Жувенкур-е-Дамарі,Жювенкур-э-Дамари,瑞万库尔-达马里', '49.4463900', '3.8922200', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02399', 469, 0, 59, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02190'),
(6424976, 'Laffaux', 'Laffaux', '', '49.4486100', '3.4252800', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02400', 148, 0, 152, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6424977, 'Laigny', 'Laigny', 'Len\'i,lai ni,Леньи,Леньї,莱尼', '49.8580600', '3.8530600', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02401', 218, 0, 174, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424978, 'Lanchy', 'Lanchy', '', '49.8266700', '3.0755600', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02402', 53, 0, 91, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02590'),
(6424979, 'Landifay-et-Bertaignemont', 'Landifay-et-Bertaignemont', 'Landifay e Bertaignemont,Landife-e-Berten\'emon,Landife-eh-Berten\'mon,lang di fei he bei tai nie meng,Ландифе-э-Бертеньмон,Ландіфе-е-Бертеньємон,朗迪费和贝泰涅蒙', '49.8169400', '3.6063900', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02403', 294, 0, 116, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424980, 'Landouzy-la-Cour', 'Landouzy-la-Cour', 'Landuzi-la-Kur,lang du ji la ku er,Ландузи-ла-Кур,Ландузі-ла-Кур,朗杜济拉库尔', '49.8475000', '3.9836100', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02404', 155, 0, 183, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424981, 'Landouzy-la-Ville', 'Landouzy-la-Ville', '', '49.8611100', '4.0486100', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02405', 506, 0, 179, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424982, 'Landricourt', 'Landricourt', 'Landrikur,lang de li ku er,Ландрикур,لانڈریکورٹ، ایسنی,朗德里库尔', '49.5083300', '3.3666700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02406', 126, 0, 73, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02380'),
(6424983, 'Laniscourt', 'Laniscourt', 'Lanikur,Laniskur,la ni si ku er,Ланикур,Ланіскур,拉尼斯库尔', '49.5488900', '3.5430600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02407', 178, 0, 82, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02000'),
(6424984, 'Lappion', 'Lappion', '', '49.6075000', '3.9633300', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02409', 292, 0, 94, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02150'),
(6424986, 'Latilly', 'Latilly', 'Latii,Latiji,la di li,Латийи,Латії,拉蒂利', '49.1541700', '3.3102800', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02411', 216, 0, 131, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424987, 'Launoy', 'Launoy', '', '49.2638900', '3.4005600', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02412', 99, 0, 109, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02210'),
(6424988, 'Laval-en-Laonnois', 'Laval-en-Laonnois', 'Laval\'-an-Lannua,la wa lei ang luo nu wa,Лаваль-ан-Ланнуа,拉瓦勒昂洛努瓦', '49.5008300', '3.5955600', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02413', 255, 0, 75, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6424990, 'Laversine', 'Laversine', 'Laversin,la wei er sang,Лаверсин,Лаверсін,拉韦尔桑', '49.3511100', '3.1700000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02415', 145, 0, 69, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02600'),
(6424991, 'Lemé', 'Leme', 'Elme,Leme,lei mei,Élmé,Леме,勒梅', '49.8377800', '3.7638900', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02416', 448, 0, 167, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02140'),
(6424993, 'Lerzy', 'Lerzy', 'Lerzi,lai er ji,Лерзи,Лерзі,莱尔济', '49.9455000', '3.8888000', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02418', 217, 0, 197, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02260'),
(6424994, 'Leschelle', 'Leschelle', '', '49.9586100', '3.7705600', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02419', 293, 0, 166, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02170'),
(6424995, 'Lesdins', 'Lesdins', 'Leden,lei dan,Леден,勒丹', '49.8969400', '3.3272200', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02420', 853, 0, 90, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02100'),
(6424996, 'Lesges', 'Lesges', 'Lezh,lai si ri,Леж,莱斯日', '49.3066700', '3.5072200', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02421', 83, 0, 107, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6424997, 'Lesquielles-Saint-Germain', 'Lesquielles-Saint-Germain', 'Lek\'el\'-Sen-Zhermen,Lekel\'-Sen-Zhermen,lai si ji ye lei-sheng ri er man,Лекьель-Сен-Жермен,Лекєль-Сен-Жермен,莱斯基耶勒-圣日尔曼', '49.9313900', '3.6208300', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02422', 864, 0, 137, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02120'),
(6424998, 'Leuilly-sous-Coucy', 'Leuilly-sous-Coucy', 'Lei-su-Kusi,Ljoji-su-Kusi,lei yi su ku xi,Леї-су-Кусі,Лёйи-су-Куси,勒伊苏库西', '49.4788900', '3.3583300', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02423', 422, 0, 82, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02380'),
(6424999, 'Leury', 'Leury', 'Leri,Ljori,lei li,Лері,Лёри,勒里', '49.4308300', '3.3366700', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02424', 104, 0, 139, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02880'),
(6425000, 'Leuze', 'Leuze', 'Lez,Ljoz,lei ci,Лез,Лёз,勒兹', '49.8513900', '4.1616700', 'A', 'ADM4', 'FR', '', '32', '02', '025', '02425', 159, 0, 172, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02500'),
(6425001, 'Levergies', 'Levergies', 'Leverzhi,lei wei er ri,Левержи,Левержі,勒韦尔日', '49.9272200', '3.3127800', 'A', 'ADM4', 'FR', '', '32', '02', '023', '02426', 593, 0, 108, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02420'),
(6425002, 'Lhuys', 'Lhuys', 'Ljui,lu cun,Люи,Люї,吕村', '49.2805600', '3.5550000', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02427', 146, 0, 72, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6425003, 'Licy-Clignon', 'Licy-Clignon', 'Lisi-Klin\'on,li xi ke li ni weng,Лиси-Клиньон,Лісі-Кліньон,利西克利尼翁', '49.1002800', '3.2738900', 'A', 'ADM4', 'FR', '', '32', '02', '021', '02428', 88, 0, 98, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02810'),
(6425004, 'Lierval', 'Lierval', '', '49.4833300', '3.6166700', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02429', 116, 0, 105, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02860'),
(6425005, 'Liez', 'Liez', 'L\'e,li ye,Лье,Льє,利耶', '49.6908300', '3.2908300', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02431', 442, 0, 57, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02700'),
(6425006, 'Limé', 'Lime', 'Lime,li mei,Лиме,Ліме,利梅', '49.3216700', '3.5480600', 'A', 'ADM4', 'FR', '', '32', '02', '024', '02432', 188, 0, 63, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02220'),
(6425007, 'Lislet', 'Lislet', '', '49.6863900', '4.0213900', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02433', 242, 0, 113, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02340'),
(6425008, 'Lizy', 'Lizy', 'Lizi,li ji,Лизи,Лізі,利济', '49.5130600', '3.4819400', 'A', 'ADM4', 'FR', '', '32', '02', '022', '02434', 254, 0, 83, 'Europe/Paris', '2016-02-18', 11071624, 3013793, NULL, '02320'),
(6425009, 'Logny-lès-Aubenton', 'Logny-les-Aubenton', 'Lon\'i-lez-Obanton,luo ni lai ou bang tong,Лоньи-лез-Обантон,Лоньї-лез-Обантон,洛尼莱欧邦通', '49.8283300', '4.2108300', 'A', 'ADM4', 'FR', '', '32', '02