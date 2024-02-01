-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 24 déc. 2023 à 18:46
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `getudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `CNE` varchar(12) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `LOGIN` varchar(30) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL,
  PRIMARY KEY (`CNE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CNE`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`) VALUES
('EM123456', 'AKIL', 'Safouane', 'SAKIL', '123'),
('EN123456', 'BARAKAT', 'Amina', 'ABARAKAT', '123'),
('EM223456', 'SALOUAN', 'Aymen', 'ASALOUAN', '123'),
('EM323456', 'BEHZAD', 'Nimar', 'NBEHZAD', '123'),
('EM423456', 'TIZNITINI', 'Fatine', 'FTIZNITI', '123');

-- --------------------------------------------------------

--
-- Structure de la table `matière`
--

DROP TABLE IF EXISTS `matière`;
CREATE TABLE IF NOT EXISTS `matière` (
  `IDM` varchar(12) NOT NULL,
  `TITRE` varchar(30) NOT NULL,
  `DEBUT` date NOT NULL,
  `FIN` date NOT NULL,
  PRIMARY KEY (`IDM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `matière`
--

INSERT INTO `matière` (`IDM`, `TITRE`, `DEBUT`, `FIN`) VALUES
('BD1', 'BD Relationnel', '2023-10-01', '2024-01-31'),
('PHP1', 'Web Dynamique', '2023-10-01', '2024-01-31'),
('C++', 'Langage C ++', '2023-11-01', '2024-01-31'),
('SE1', 'Système d\'exploitation', '2023-10-01', '2024-01-31'),
('Com1', 'Langues et communication', '2023-10-01', '2024-01-31'),
('RI', 'Réseaux informatiques', '2023-09-01', '2024-01-31');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `IDM` varchar(12) NOT NULL,
  `CNE` varchar(12) NOT NULL,
  `NOTE` decimal(2,0) NOT NULL,
  `APPRECIATION` varchar(100) NOT NULL,
  PRIMARY KEY (`IDM`,`CNE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`IDM`, `CNE`, `NOTE`, `APPRECIATION`) VALUES
('BD1', 'EM123456', '16', 'Résultats pertinents. '),
('BD1', 'EM223456', '20', 'Excellent. Félicitations'),
('BD1', 'EN123456', '18', 'Très bien. Féliciations'),
('C++', 'EM123456', '13', 'Points à améliorer . encouragement'),
('C++', 'EM223456', '16', 'Très bien'),
('C++', 'EN123456', '13', 'Assez Bien'),
('PHP1', 'EM123456', '18', 'Excellent travail'),
('RI', 'EM123456', '10', 'Résultats moyens'),
('PHP1', 'EN123456', '19', 'Bravo.Féliciattions'),
('Com1', 'EM123456', '13', 'Assez bien'),
('SE1', 'EM123456', '10', 'Résultats moyens');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
