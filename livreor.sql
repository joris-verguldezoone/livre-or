-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 nov. 2020 à 20:54
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(42, 'EN TANT QUE FUTUR TRESORIER DU BDD JE TROUVE CETTE VIDEO TOTALEMENT AU GOUT DU JOUR JE KIFF', 4, '2020-11-23 20:44:37'),
(41, 'KENSHI + BANNERLORD = VIE', 3, '2020-11-23 20:43:55'),
(40, 'Yesssssssssssssaiiiii gooo sur le dancefloor on va mettre le feuuu!', 3, '2020-11-23 20:43:38'),
(39, 'Je me caresse en Ã©coutant cette musique. Je caresse Ã©galement mon chien , ma maman et mon papa. Merci de votre attention', 2, '2020-11-23 20:42:49'),
(38, 'JE LIKE', 1, '2020-11-23 20:41:11'),
(37, '!!!!!!!!!!!!!!!!!!!!!!!First!!!!!!!!!!!!!!!!!!!!!!!!!LOL XD', 1, '2020-11-23 20:40:55'),
(43, 'encore une musique d\'islamiste', 5, '2020-11-23 20:45:22'),
(44, 'Il faut rendre le vaccin obligatoire pour ce chanteur! >:(', 6, '2020-11-23 20:47:09'),
(45, 'woaaah beau travail l\'Ã©quipe!', 7, '2020-11-23 20:48:07');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Jean-David', '$2y$10$.LPs0GWnzt85FCT0jz0S2upZWkNmRL0XCTQV2CWyPbFzUqD/RM2sa'),
(2, 'Jean-FranÃ§ois pilÃ¢tre de Rosier', '$2y$10$nNMUUGqsdkhgyo40Y1WDveh9GzYgBD/T.orqWn10EuNGXk5P3WmMy'),
(3, 'HARDJOJO', '$2y$10$EcK7HfEbmGJLxV962zx8ROOMENgDSwv5E4LWppw71mJtDVqJRmOOu'),
(4, 'Adrien', '$2y$10$swBObpeKRBiiZDnU2wovZuqnWwNU4IadcBVH1yo.2HcvsFKj.vhze'),
(5, 'amalgam200mg', '$2y$10$Qija2Vib4isSCxWGOU4c7uGVxvTQib9GIfCEQo3luDOv0ZEpvoGhC'),
(6, 'Karine Lacombe', '$2y$10$BVlW/IA4M3u7VncGPWluEeN0pc9yzIE.z5JH9spdhYRNPVpgW5OiC'),
(7, 'ruben', '$2y$10$DfQRvF0eOlYS8OEG2VgwXe0cVnySlpLXz.FoWOcaGWIhFjCiKqTkO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
