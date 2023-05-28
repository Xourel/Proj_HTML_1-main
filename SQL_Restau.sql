-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 28 mai 2023 à 20:28
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
-- Base de données : `my_database`
--
CREATE DATABASE IF NOT EXISTS `my_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `my_database`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`) VALUES
(1, 'leboprojet2.si@gmail.com'),
(4, 'pignouferie@wanadoo.fr');
--
-- Base de données : `restau`
--
CREATE DATABASE IF NOT EXISTS `restau` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `restau`;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`client_id`, `email`, `password`) VALUES
(14, 'mat@au.fr', '356a192b7913b04c54574d18c28d46e6395428ab'),
(15, 'mat@au.fr', '356a192b7913b04c54574d18c28d46e6395428ab'),
(16, '2@kk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(17, '2@kk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(18, 'jj@jj.jj', '7323a5431d1c31072983a6a5bf23745b655ddf59'),
(19, 'atlas@tg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(20, 'atlas@tg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(21, 'atlas@tg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(22, 'rrr@r', '444528fc68f99ea0f4fe027cb6cbd262f2a707fe'),
(23, 'rrr@r', '444528fc68f99ea0f4fe027cb6cbd262f2a707fe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
