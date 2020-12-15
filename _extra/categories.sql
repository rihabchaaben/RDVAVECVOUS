-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 déc. 2019 à 16:06
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rdv_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
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
-- Déchargement des données de la table `categories`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
