-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Host: rdvavecvbk182.mysql.db
-- Generation Time: Dec 06, 2019 at 03:24 PM
-- Server version: 5.6.39-log
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdvavecvbk182`
--

-- --------------------------------------------------------

--
-- Table structure for table `hmw5h_rdv_categories`
--

CREATE TABLE `hmw5h_rdv_categories` (
  `rdv_category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hmw5h_rdv_categories`
--

INSERT INTO `hmw5h_rdv_categories` (`rdv_category_id`, `name`, `parent_id`, `ordering`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hmw5h_rdv_categories`
--
ALTER TABLE `hmw5h_rdv_categories`
  ADD KEY `rdv_category_id` (`rdv_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hmw5h_rdv_categories`
--
ALTER TABLE `hmw5h_rdv_categories`
  MODIFY `rdv_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
