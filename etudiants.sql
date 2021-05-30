-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 30 mai 2021 à 00:25
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `Numero` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) NOT NULL,
  `Prenom` varchar(70) NOT NULL,
  `Filiere` varchar(70) NOT NULL,
  `DateNaissance` datetime NOT NULL,
  `Email` varchar(220) NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `Serie` varchar(5) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`Numero`, `Nom`, `Prenom`, `Filiere`, `DateNaissance`, `Email`, `Sexe`, `Serie`, `tel`) VALUES
(4, 'SAWADOGO', 'Moussa', 'RIT', '1922-02-02 00:00:00', 'sdramane413@gmail.com', 'M', 'A', NULL),
(5, 'SAWADOGO', 'Moussa', 'RIT', '1922-02-02 00:00:00', 'sdramane413@gmail.com', 'M', 'A', NULL),
(6, 'SAWADOGO', 'Moussa', 'RIT', '1922-02-02 00:00:00', 'sdramane413@gmail.com', 'M', 'A', NULL),
(7, 'SAWADOGO', 'Moussa', 'RIT', '1922-02-02 00:00:00', 'sdramane413@gmail.com', 'M', 'A', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
