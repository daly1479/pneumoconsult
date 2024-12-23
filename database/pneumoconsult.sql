-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 déc. 2024 à 19:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pneumoconsult`
--

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `name`, `email`, `date`, `heure`) VALUES
(2, 'DOUNIA', 'douniagdyhsbc@gmail.com]', '2024-12-23', '16:23:00'),
(3, 'dounai', 'douniarzzimou@gmail.com', '2025-01-03', '19:39:00'),
(4, 'laial', 'dubiohe@gmail.com', '2024-12-27', '15:40:00'),
(5, 'dounai', 'douniarzzimou@gmail.com', '2024-12-08', '16:14:00'),
(6, 'mohammed hibaoui', 'dubiohe@gmail.com', '2024-12-27', '16:36:00'),
(7, 'JOJO', 'jojo@gmail.com', '2024-12-25', '17:17:00'),
(8, 'laial', 'emykely23@gmail.com', '2024-12-28', '19:15:00'),
(9, 'Dounia', 'douniarzzimou@gmail.com', '2024-12-28', '20:53:00'),
(10, 'RZIMOU', 'Btissam.rzimou@gmail.com', '2024-12-28', '20:53:00'),
(11, 'Dounia', 'douniarzzimou@gmail.com', '2024-12-28', '18:19:00'),
(12, 'RZIMOU', 'Btissam.rzimou@gmail.com', '2024-12-28', '20:53:00'),
(13, 'RZIMOU', 'Btissam.rzimou@gmail.com', '2024-12-18', '18:28:00'),
(14, 'RZIMOUfref', 'Btissam.rzimou@gmail.com', '2024-12-18', '18:28:00'),
(15, 'DOUNIA RZIMOU', 'douniarzzimou@gmail.com', '2024-12-24', '11:00:00'),
(16, 'RZIMOU', 'Btissam.rzimou@gmail.com', '2024-12-26', '00:39:00'),
(17, 'RZIMOU', 'Btissam.rzimou@gmail.com', '2024-12-26', '00:39:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
