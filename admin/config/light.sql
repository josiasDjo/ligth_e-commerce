-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 mai 2024 à 15:31
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
-- Base de données : `light`
--

-- --------------------------------------------------------

--
-- Structure de la table `tadmin`
--

DROP TABLE IF EXISTS `tadmin`;
CREATE TABLE IF NOT EXISTS `tadmin` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tadmin`
--

INSERT INTO `tadmin` (`idAdmin`, `nom`, `prenom`, `email`, `phone`, `password`) VALUES
(1, 'djo', 'beso', 'beso@gmail.com', '0971766079', '$2y$10$K30KVAOoTzu9P94hcAP8fOeLzzwed6OAm.rJtCFYA4A');

-- --------------------------------------------------------

--
-- Structure de la table `tmessage`
--

DROP TABLE IF EXISTS `tmessage`;
CREATE TABLE IF NOT EXISTS `tmessage` (
  `idMessage` int NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) DEFAULT NULL,
  `idUserMsg` int NOT NULL,
  `idAdminMsg` int NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `foreignKey` (`idUserMsg`,`idAdminMsg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tproduit`
--

DROP TABLE IF EXISTS `tproduit`;
CREATE TABLE IF NOT EXISTS `tproduit` (
  `idProduit` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(80) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `nomCollection` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tproduit`
--

INSERT INTO `tproduit` (`idProduit`, `nom`, `prix`, `description`, `image`, `date`, `nomCollection`) VALUES
(1, 'chromeBook 14', 240, 'CPU 2GHz dual core 8Gb RAM ', 'chromeBook 14-1415890289.png', '2024-May-Sun 14:52:02', 'laptop'),
(2, 'airpod', 13, 'US couleur blanc', 'airpod-135333877.png', '2024-May-Sun 14:54:51', 'airPod'),
(3, 'dell', 120, 'CPU 1.2GHz dual core 4gb RAM', 'dell-1233267940.png', '2024-May-Sun 14:55:47', 'laptop'),
(4, 'iphone 11 pro', 480, '512Gb, couleur : blanc, noir, purple', 'iphone 11 pro-1695988647.png', '2024-May-Sun 14:57:09', 'phone'),
(5, 'iphone 12', 620, '256Gb, couleur : noir, rouge', 'iphone 12-568549801.png', '2024-May-Sun 14:58:25', 'phone'),
(6, 'iphone 13 pro max', 712, '512', 'iphone 13 pro max-874276815.png', '2024-May-Sun 15:12:54', 'phone'),
(7, 'jbl airpod', 25, 'couleur : noir', 'jbl airpod-219855130.png', '2024-May-Sun 15:19:09', 'airPod'),
(8, 'samsung s20', 170, 'couleur : noir', 'samsung s20-1126396635.png', '2024-May-Sun 15:35:42', 'phone'),
(9, 'samsung pliable', 200, 'c', 'samsung pliable-529811894.png', '2024-May-Sun 15:36:09', 'phone'),
(10, 'smart watch', 25, 'smart watch', 'smart watch-610654278.png', '2024-May-Sun 15:37:55', 'appleWatch'),
(11, 'smart watch br', 18, 'brown', 'smart watch br-1855189602.png', '2024-May-Sun 15:38:32', 'appleWatch');

-- --------------------------------------------------------

--
-- Structure de la table `tuser`
--

DROP TABLE IF EXISTS `tuser`;
CREATE TABLE IF NOT EXISTS `tuser` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
