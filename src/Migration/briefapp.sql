-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 avr. 2024 à 12:35
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `briefapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `aga_appartenir`
--

DROP TABLE IF EXISTS `aga_appartenir`;
CREATE TABLE IF NOT EXISTS `aga_appartenir` (
  `id_promo` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  PRIMARY KEY (`id_promo`,`id_utilisateur`),
  KEY `aga_appartenir_aga_utilisateur0_FK` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `aga_cours`
--

DROP TABLE IF EXISTS `aga_cours`;
CREATE TABLE IF NOT EXISTS `aga_cours` (
  `id_cours` int NOT NULL AUTO_INCREMENT,
  `nom_cours` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_cours` date NOT NULL,
  `heureDebut_cours` time NOT NULL,
  `heureFin_cours` time NOT NULL,
  `code_cours` int NOT NULL,
  `id_promo` int NOT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `aga_cours_aga_promo_FK` (`id_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `aga_present`
--

DROP TABLE IF EXISTS `aga_present`;
CREATE TABLE IF NOT EXISTS `aga_present` (
  `id_utilisateur` int NOT NULL,
  `id_cours` int NOT NULL,
  `absence` tinyint(1) NOT NULL,
  `retard` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_cours`),
  KEY `aga_present_aga_cours0_FK` (`id_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `aga_promo`
--

DROP TABLE IF EXISTS `aga_promo`;
CREATE TABLE IF NOT EXISTS `aga_promo` (
  `id_promo` int NOT NULL AUTO_INCREMENT,
  `nom_promo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dateDebut_promo` date NOT NULL,
  `dateFin_promo` date NOT NULL,
  `nombre_promo` int NOT NULL,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `aga_promo`
--

INSERT INTO `aga_promo` (`id_promo`, `nom_promo`, `dateDebut_promo`, `dateFin_promo`, `nombre_promo`) VALUES
(1, 'DWWM 3', '2024-01-01', '2024-12-01', 15),
(2, 'DWWM 2', '2024-01-01', '2024-12-01', 15),
(3, 'CDA', '2024-01-01', '2024-12-01', 12),
(4, 'CDA dist', '2024-01-01', '2024-12-01', 12),
(5, 'DTI 1', '2024-01-01', '2024-12-01', 12),
(6, 'DTI 2', '2024-01-01', '2024-12-01', 12),
(7, 'CDA PSH OPS', '2024-01-01', '2024-12-01', 10);

-- --------------------------------------------------------

--
-- Structure de la table `aga_role`
--

DROP TABLE IF EXISTS `aga_role`;
CREATE TABLE IF NOT EXISTS `aga_role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `aga_role`
--

INSERT INTO `aga_role` (`id_role`, `nom_role`) VALUES
(1, 'CampusManager'),
(2, 'ResponsablePedagogique'),
(3, 'Formateur'),
(4, 'Delegue'),
(5, 'Apprenant');

-- --------------------------------------------------------

--
-- Structure de la table `aga_utilisateur`
--

DROP TABLE IF EXISTS `aga_utilisateur`;
CREATE TABLE IF NOT EXISTS `aga_utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom_utilisateur` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email_utilisateur` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp_utilisateur` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `activiteCompte_utilisateur` tinyint(1) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `aga_utilisateur_aga_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `aga_utilisateur`
--

INSERT INTO `aga_utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mdp_utilisateur`, `activiteCompte_utilisateur`, `id_role`) VALUES
(1, 'Camp', 'Louis', 'cl@gmail.com', '123456', 1, 1),
(2, 'Resp', 'Paul', 'rp@gmail.com', '123456', 1, 2),
(3, 'bou', 'bou', 'bou@gmail.com', '123456', 1, 3),
(4, 'li', 'li', 'li@gmail.com', '123456', 1, 4),
(5, 'gui', 'gui', 'gui@gmail.com', '123456', 1, 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aga_appartenir`
--
ALTER TABLE `aga_appartenir`
  ADD CONSTRAINT `aga_appartenir_aga_promo_FK` FOREIGN KEY (`id_promo`) REFERENCES `aga_promo` (`id_promo`),
  ADD CONSTRAINT `aga_appartenir_aga_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `aga_utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `aga_cours`
--
ALTER TABLE `aga_cours`
  ADD CONSTRAINT `aga_cours_aga_promo_FK` FOREIGN KEY (`id_promo`) REFERENCES `aga_promo` (`id_promo`);

--
-- Contraintes pour la table `aga_present`
--
ALTER TABLE `aga_present`
  ADD CONSTRAINT `aga_present_aga_cours0_FK` FOREIGN KEY (`id_cours`) REFERENCES `aga_cours` (`id_cours`),
  ADD CONSTRAINT `aga_present_aga_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `aga_utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `aga_utilisateur`
--
ALTER TABLE `aga_utilisateur`
  ADD CONSTRAINT `aga_utilisateur_aga_role_FK` FOREIGN KEY (`id_role`) REFERENCES `aga_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
