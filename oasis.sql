-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 jan. 2023 à 20:17
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `oasis`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pieces` int NOT NULL,
  `description` text NOT NULL,
  `capacite` int NOT NULL,
  `disponible` varchar(255) NOT NULL DEFAULT 'oui',
  `reserve` varchar(255) NOT NULL DEFAULT 'non',
  `prix` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `numero`, `Image`, `categorie`, `Pieces`, `description`, `capacite`, `disponible`, `reserve`, `prix`) VALUES
(1, 'F77', 'image17.jpg', 'Chambre junior', 3, 'Joli chambre à louer. Pas d\'adja. Dispo 24h/24 7j/7. Si vous avez plus d\'argent on sort celui qui était dedans Merci.', 5, 'oui', 'oui', 5000),
(2, 'B58', 'image17.jpg', 'chambre pro max', 4, 'Le luxe, accessible à tous. Une suite junior est l\'option idéale pour un séjour luxueux à un prix compétitif. Les suites junior sont des chambres spacieuses de 100 mètres carrés qui vous permettront de passer un agréable séjour et de profiter d\'une vue imprenable sur la ville.', 3, 'oui', 'non', 3500);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Date inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `Nom`, `Email`, `Telephone`, `password`, `Date inscription`) VALUES
(1, 'Merfrand lokonon', 'gratiaslokonon19@gmail.com', '68825153', 'Gratias', '2023-01-27 23:43:21'),
(2, 'Ahmal Seidou', 'ahmalseidou@gmail.com', '68714468', 'Ahmal', '2023-01-27 23:43:28'),
(3, 'Adonis Kleaton', 'ahmalseidou@gmail.com', '68825153', 'Ahmal', '2023-01-28 00:43:52'),
(4, 'Porro', 'focyz@mailinator.com', '114513346', 'Pa$$w0rd!', '2023-01-28 11:12:49'),
(6, 'Ulysse GUCK', 'ulysse@gmail.com', '68845592', 'pjwppdgj', '2023-01-28 11:39:17'),
(7, 'Qui voluptas', 'vatisolu@mailinator.com', '62745656', 'Pa$$w0rd!', '2023-01-28 14:28:28'),
(8, 'Haad Moussa', 'haad@monmail.com', '53556885', 'moussa', '2023-01-28 14:30:49'),
(9, 'deo24', 'haad@monmail.com', '89875456', '1234567', '2023-01-28 14:33:37'),
(19, 'Tempor exercitatione', 'hixe@mailinator.com', '46482646', 'azerty', '2023-01-28 14:50:25'),
(32, 'Rem sed quis ratione', 'zucypikimu@mailinator.com', '37777517', 'Pa$$w0rd!', '2023-01-28 20:55:12'),
(33, 'Omnis eos', 'wupx@mailinator.com', '86864382', 'Pa$$w0rd!', '2023-01-29 00:16:41'),
(15, '14LOKONON', 'lokonon19@gmail.com', '54550132', '254pppui', '2023-01-28 14:43:35'),
(20, 'Ahmal SD', 'ahmal@yahoo.org', '54550132', 'yahoo', '2023-01-28 14:52:14'),
(21, 'Quia alias aperiam v', 'xezifu@mailinator.com', '2296882', 'Pa$$w0rd!', '2023-01-28 14:57:56'),
(23, 'Fuga Modi voluptate', 'livam@mailinator.com', '19056469', '47opass', '2023-01-28 16:25:22'),
(24, 'Occaecat Nam invento', 'jefa@mailinator.com', '53931854', 'mtdePasse', '2023-01-28 18:53:00'),
(25, 'Occaecat Nam invento', 'lea@mailinator.com', '53853666', '475442', '2023-01-28 18:58:23'),
(26, 'Consequuntur', 'tunocixe@mailinator.com', '5649911', 'popipp', '2023-01-28 19:03:11'),
(27, 'Rerum fugiat optio', 'pymoxiv@mailinator.com', '10426037', '78945612', '2023-01-28 19:05:06'),
(28, 'Inventore ad dolorem', 'potetyzaze@mailinator.com', '109129858', 'aqwzsxedc', '2023-01-28 19:22:13'),
(30, 'Nam beatae cillum mi', 'lurap@mailinator.com', '35867099', 'wednesday', '2023-01-28 20:37:43'),
(36, 'Corporis necessitati', 'cobopo@mailinator.com', '287250302', 'hiuhkgnyfhgbg', '2023-01-29 01:36:11'),
(37, 'Et dolore ', 'moubin@mailinator.com', '1689768', 'Pa$$w0rd!', '2023-01-29 01:37:13'),
(38, 'Mario Bosco', 'Bosco@mail.com', '97875480', 'Mario123', '2023-01-29 02:07:09'),
(39, 'Sit dolorem ex solut', 'hinabyze@mailinator.com', '421259774', 'inljk', '2023-01-29 15:33:26');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Telephone` int NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `nbreDePersonne` int NOT NULL,
  `numeroReserver` varchar(255) NOT NULL,
  `Arriver` date NOT NULL,
  `Depart` date NOT NULL,
  `Montant` int NOT NULL,
  `Status` varchar(250) NOT NULL,
  `DateCommande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `Nom`, `Telephone`, `Email`, `Type`, `nbreDePersonne`, `numeroReserver`, `Arriver`, `Depart`, `Montant`, `Status`, `DateCommande`) VALUES
(2, 'Ahmal Seidou', 68714468, 'ahmalseidou@gmail.com', 'Chambre', 2, 'B58', '2023-01-30', '2023-02-03', 14000, 'En cours', '2023-01-30 21:04:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
