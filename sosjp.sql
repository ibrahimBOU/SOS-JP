-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 avr. 2022 à 07:35
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sosjp`
--

-- --------------------------------------------------------

--
-- Structure de la table `all_etapes`
--

DROP TABLE IF EXISTS `all_etapes`;
CREATE TABLE IF NOT EXISTS `all_etapes` (
  `id_table` int NOT NULL AUTO_INCREMENT,
  `etape 1` int NOT NULL,
  `etape 2` int NOT NULL,
  `etape 3` int NOT NULL,
  `etape 4` int NOT NULL,
  `etape 5` int NOT NULL,
  `etape 6` int NOT NULL,
  PRIMARY KEY (`id_table`),
  KEY `etape 1` (`etape 1`),
  KEY `etape 2` (`etape 2`),
  KEY `etape 3` (`etape 3`),
  KEY `etape 4` (`etape 4`),
  KEY `etape 5` (`etape 5`),
  KEY `etape 6` (`etape 6`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etape1`
--

DROP TABLE IF EXISTS `etape1`;
CREATE TABLE IF NOT EXISTS `etape1` (
  `id_formu` int NOT NULL AUTO_INCREMENT,
  `q1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q6` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_formu`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etape2`
--

DROP TABLE IF EXISTS `etape2`;
CREATE TABLE IF NOT EXISTS `etape2` (
  `id_formu2` int NOT NULL AUTO_INCREMENT,
  `q1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_formu2`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etape3`
--

DROP TABLE IF EXISTS `etape3`;
CREATE TABLE IF NOT EXISTS `etape3` (
  `id_formu3` int NOT NULL AUTO_INCREMENT,
  `q1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q6` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `q7` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_formu3`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etape4`
--

DROP TABLE IF EXISTS `etape4`;
CREATE TABLE IF NOT EXISTS `etape4` (
  `id_formu4` int NOT NULL AUTO_INCREMENT,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_formu4`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etape5`
--

DROP TABLE IF EXISTS `etape5`;
CREATE TABLE IF NOT EXISTS `etape5` (
  `id_formu5` int NOT NULL AUTO_INCREMENT,
  `champ1` varchar(255) NOT NULL,
  `champ2` varchar(255) NOT NULL,
  `champ3` varchar(255) NOT NULL,
  `champ4` varchar(255) NOT NULL,
  `champ5` varchar(255) NOT NULL,
  `champ6` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_formu5`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etape6`
--

DROP TABLE IF EXISTS `etape6`;
CREATE TABLE IF NOT EXISTS `etape6` (
  `id_formu6` int NOT NULL AUTO_INCREMENT,
  `t1q1` varchar(255) NOT NULL,
  `t1q2` varchar(255) NOT NULL,
  `t1q3` varchar(255) NOT NULL,
  `t2q1` varchar(255) NOT NULL,
  `t2q2` varchar(255) NOT NULL,
  `t2q3` varchar(255) NOT NULL,
  `t3q1` varchar(255) NOT NULL,
  `t3q2` varchar(255) NOT NULL,
  `t3q3` varchar(255) NOT NULL,
  `t4q1` varchar(255) NOT NULL,
  `t4q2` varchar(255) NOT NULL,
  `t4q3` varchar(255) NOT NULL,
  `t5q1` varchar(255) NOT NULL,
  `t5q2` varchar(255) NOT NULL,
  `t5q3` varchar(255) NOT NULL,
  `t6q1` varchar(255) NOT NULL,
  `t6q2` varchar(255) NOT NULL,
  `t6q3` varchar(255) NOT NULL,
  `t7q1` varchar(255) NOT NULL,
  `t7q2` varchar(255) NOT NULL,
  `t7q3` varchar(255) NOT NULL,
  `t8q1` varchar(255) NOT NULL,
  `t8q2` varchar(255) NOT NULL,
  `t8q3` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_formu6`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `mobile` int NOT NULL,
  `formu_id` int NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `Nom` (`Nom`),
  KEY `Prenom` (`Prenom`),
  KEY `email` (`email`),
  KEY `formu_id` (`formu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `all_etapes`
--
ALTER TABLE `all_etapes`
  ADD CONSTRAINT `all_etapes_ibfk_1` FOREIGN KEY (`etape 1`) REFERENCES `etape1` (`id_formu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `all_etapes_ibfk_2` FOREIGN KEY (`etape 2`) REFERENCES `etape2` (`id_formu2`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `all_etapes_ibfk_3` FOREIGN KEY (`etape 3`) REFERENCES `etape3` (`id_formu3`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etape1`
--
ALTER TABLE `etape1`
  ADD CONSTRAINT `etape1_ibfk_1` FOREIGN KEY (`id_formu`) REFERENCES `all_etapes` (`etape 1`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `etape1_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `etape2`
--
ALTER TABLE `etape2`
  ADD CONSTRAINT `etape2_ibfk_1` FOREIGN KEY (`id_formu2`) REFERENCES `all_etapes` (`etape 2`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etape2_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etape3`
--
ALTER TABLE `etape3`
  ADD CONSTRAINT `etape3_ibfk_1` FOREIGN KEY (`id_formu3`) REFERENCES `all_etapes` (`etape 3`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etape3_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etape4`
--
ALTER TABLE `etape4`
  ADD CONSTRAINT `etape4_ibfk_1` FOREIGN KEY (`id_formu4`) REFERENCES `all_etapes` (`etape 4`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etape4_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etape5`
--
ALTER TABLE `etape5`
  ADD CONSTRAINT `etape5_ibfk_1` FOREIGN KEY (`id_formu5`) REFERENCES `all_etapes` (`etape 5`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etape5_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etape6`
--
ALTER TABLE `etape6`
  ADD CONSTRAINT `etape6_ibfk_1` FOREIGN KEY (`id_formu6`) REFERENCES `all_etapes` (`etape 6`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etape6_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`formu_id`) REFERENCES `all_etapes` (`id_table`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
