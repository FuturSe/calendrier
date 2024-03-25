-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 25 mars 2024 à 13:42
-- Version du serveur : 10.6.16-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tutocalendar`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `start`, `end`) VALUES
(1, 'evenement de test', NULL, '2024-02-24 17:09:17', '2024-02-24 18:09:17'),
(2, 'evenement de test 2', '', '2024-02-25 17:09:17', '2024-02-25 18:09:17'),
(3, 'evenement de test 3', NULL, '2024-02-24 16:09:17', '2024-02-24 18:09:17'),
(5, ' hey', 'maman rentre', '2024-03-18 08:12:00', '2024-03-18 09:12:00'),
(6, ' anniversaire ', 'l\'anniversaire de ton pere fils de pute ', '2024-03-19 09:26:00', '2024-03-19 21:26:00'),
(7, ' anniversaire3  ', 'eevd', '2024-03-17 09:56:00', '2024-03-17 21:55:00'),
(8, ' anniversaire   20', 'eevd', '2024-03-20 01:30:00', '2024-03-20 03:30:00'),
(9, 'conduite', 'maman', '2024-03-24 09:31:00', '2024-03-24 23:32:00'),
(10, ' grfdc', 'rgrvd', '2024-03-28 09:34:00', '2024-03-28 20:36:00'),
(11, 'gvdvvdvd ', 'rgrgrgzer', '2024-03-26 11:37:00', '2024-03-26 13:37:00'),
(12, ' fbfbfb', 'dvdsvsdvdv', '2024-03-23 09:40:00', '2024-03-23 20:40:00'),
(13, ' fbfbfb', 'dvdsvsdvdv', '2024-03-23 09:40:00', '2024-03-23 20:40:00'),
(14, ' fbfbfb', 'dvdsvsdvdv', '2024-03-23 09:40:00', '2024-03-23 20:40:00'),
(15, ' vvdfvs', 'bfbfbfdbfd', '2024-03-24 02:46:00', '2024-03-24 10:46:00'),
(16, ' ', 'rhfdbf', '2024-03-28 08:49:00', '2024-03-28 09:49:00'),
(17, 'fbfbdbfdbfdbfbfdbf ', 'fbbrerbe', '2024-03-26 08:54:00', '2024-03-26 22:50:00'),
(18, ' vsfd fd d   fbfbfdbbfdb', 'fbfbdbfdbfd', '2024-03-30 11:51:00', '2024-03-30 13:51:00'),
(19, ' demo', 'rfvfdvfd', '2024-03-31 00:52:00', '2024-03-31 20:53:00'),
(20, ' fbbfebf', 'fbfb', '2024-03-19 02:17:00', '2024-03-19 21:17:00'),
(21, ' salut', 'hh', '2024-04-05 01:26:00', '2024-04-05 02:26:00'),
(22, 'salut', 'ffv', '2024-03-16 03:30:00', '2024-03-16 18:30:00'),
(23, ' demo', 'hfhfdbfd', '2024-03-07 03:32:00', '2024-03-07 04:32:00'),
(24, ' FIBI  ', 'CE ci est mon dernier insert', '2024-03-18 09:34:00', '2024-03-18 16:34:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
