-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 août 2024 à 13:39
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
-- Base de données : `ma_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte1`
--

CREATE TABLE `compte1` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `nom_utilisateur` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `confirmer_mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compte1`
--

INSERT INTO `compte1` (`id`, `nom`, `prenom`, `age`, `telephone`, `nom_utilisateur`, `photo`, `mot_de_passe`, `confirmer_mot_de_passe`) VALUES
(1, 'Traoré', 'Mama', 23, 58434857, 'MT', '', '182be0c5cdcd5072bb1864cdee4d3d6e', ''),
(2, 'Touré', 'Oumou', 28, 98463510, 'AO', '', '96a3be3cf272e017046d1b2674a52bd3', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte1`
--
ALTER TABLE `compte1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte1`
--
ALTER TABLE `compte1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
