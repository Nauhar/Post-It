-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 07 Mai 2015 à 11:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `postit_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `designevenement`
--

CREATE TABLE IF NOT EXISTS `designevenement` (
  `IDEvenement` int(10) unsigned NOT NULL,
  `Logo` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TexteBandeau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CouleurFondBandeau` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `CouleurTexteBandeau` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `CouleurFondPage` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `CouleurMessage` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `CouleurPseudo` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `ImageDeFond` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogosPartenaires` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TaillePoliceMessage` tinyint(3) unsigned NOT NULL,
  `TaillePolicePseudo` tinyint(3) unsigned NOT NULL,
  `Police` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `AfficherImages` tinyint(1) NOT NULL,
  `DelaiRafraichissement` smallint(5) unsigned NOT NULL,
  KEY `IDEvenement` (`IDEvenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `designevenement`
--

INSERT INTO `designevenement` (`IDEvenement`, `Logo`, `TexteBandeau`, `CouleurFondBandeau`, `CouleurTexteBandeau`, `CouleurFondPage`, `CouleurMessage`, `CouleurPseudo`, `ImageDeFond`, `LogosPartenaires`, `TaillePoliceMessage`, `TaillePolicePseudo`, `Police`, `AfficherImages`, `DelaiRafraichissement`) VALUES
(5, NULL, 'Gala Miage Bordeaux', '#ffffff', '#ff0000', '#000000', '#ff0000', '#ff0000', NULL, NULL, 26, 16, 'Arial', 1, 6),
(6, NULL, 'Soirée d''intégration 2015', '#ff0000', '#ff0000', '#ffffff', '#804000', '#0000ff', NULL, NULL, 26, 16, 'Arial', 1, 6),
(7, NULL, 'examen', '#0000ff', '#ff0000', '#000000', '#ff0000', '#ff0000', NULL, NULL, 26, 16, 'Arial', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `IDEvenement` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomEvenement` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `URLEvenement` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Lieu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `VilleEvenement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PaysEvenement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NbParticipants` int(11) NOT NULL,
  `TypeEvenement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `IDUtilisateur` int(10) unsigned NOT NULL,
  `DateEvenement` date NOT NULL,
  PRIMARY KEY (`IDEvenement`),
  UNIQUE KEY `IDEvenement` (`IDEvenement`),
  UNIQUE KEY `URLEvenement` (`URLEvenement`),
  KEY `IDUtilisateur` (`IDUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`IDEvenement`, `NomEvenement`, `URLEvenement`, `Lieu`, `VilleEvenement`, `PaysEvenement`, `NbParticipants`, `TypeEvenement`, `IDUtilisateur`, `DateEvenement`) VALUES
(5, 'Gala', 'GalaMiage', 'Chateau Lafitte', 'Bordeaux', 'France', 350, 'Gala', 2, '2015-05-16'),
(6, 'Soirée d''inté', 'integration2015', 'Thouars', 'Talence', 'France', 200, 'soirée', 2, '2015-05-30'),
(7, 'Examen', 'exam', 'Université', 'Talence', 'France', 45, 'examen', 3, '2015-06-05');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `IDMessage` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Auteur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Message` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `URLPhoto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `DateMessage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MessageModere` tinyint(1) NOT NULL,
  `ValidationMessage` tinyint(1) NOT NULL,
  `IDEvenement` int(10) unsigned NOT NULL,
  `IDTwitter` bigint(128) NOT NULL,
  PRIMARY KEY (`IDMessage`),
  KEY `IDEvenement` (`IDEvenement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`IDMessage`, `Auteur`, `Message`, `URLPhoto`, `DateMessage`, `MessageModere`, `ValidationMessage`, `IDEvenement`, `IDTwitter`) VALUES
(1, 'Caro', 'Belle soirée ! Merci beaucoup ', '', '2015-05-07 09:28:03', 0, 0, 5, 0),
(2, 'Popy', 'Merci pour ce super gala !!! je reviendrai l''an prochain :) ', '', '2015-05-07 09:28:54', 0, 0, 5, 0),
(3, 'Chris ', 'Trop coooool', '', '2015-05-07 09:29:13', 0, 0, 5, 0),
(4, 'Caro', 'Merci pour la soirée', '', '2015-05-07 09:30:08', 0, 0, 6, 0),
(5, 'Xavier', 'Bien intégré :) ', '', '2015-05-07 09:30:44', 0, 0, 6, 0),
(6, 'M. l''inconnu', 'Trop nul on s''amuse pas ', '', '2015-05-07 09:31:07', 0, 0, 6, 0),
(7, 'XXXXX', 'voulez vous m''épouser ?', '', '2015-05-07 09:31:25', 0, 0, 6, 0),
(8, 'Paul', 'Trop dure cet examen', '', '2015-05-07 09:35:59', 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `parametresevenement`
--

CREATE TABLE IF NOT EXISTS `parametresevenement` (
  `IDEvenement` int(10) unsigned NOT NULL,
  `HashtagASuivre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ModerationTexte` tinyint(1) DEFAULT NULL,
  `ModerationImage` tinyint(1) DEFAULT NULL,
  `PasswordModeration` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `FiltreObscenite` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `IDEvenement` (`IDEvenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `parametresevenement`
--

INSERT INTO `parametresevenement` (`IDEvenement`, `HashtagASuivre`, `ModerationTexte`, `ModerationImage`, `PasswordModeration`, `FiltreObscenite`) VALUES
(5, 'GalaMiageBdx', 1, NULL, '52a43bc4333b63e5cd9e952357795054', NULL),
(6, 'integration2015', 0, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(7, 'exam', 1, NULL, 'd53a223dbb966570966c8b171c0adc1b', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDUtilisateur` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomUtilisateur` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PrenomUtilisateur` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DateNaissance` date NOT NULL,
  `Organisation` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PasswordUtilisateur` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `VilleUtilisateur` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PaysUtilisateur` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DateInscription` datetime NOT NULL,
  PRIMARY KEY (`IDUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IDUtilisateur`, `NomUtilisateur`, `PrenomUtilisateur`, `DateNaissance`, `Organisation`, `Mail`, `PasswordUtilisateur`, `VilleUtilisateur`, `PaysUtilisateur`, `DateInscription`) VALUES
(2, 'saudo', 'caroline', '1992-12-22', 'AMB', 'caroline.saudo@gmail.com', 'e1c565c5b1da2a3b81712427d06f5b34', 'bordeaux', 'france', '0000-00-00 00:00:00'),
(3, 'Nicolas', 'Henri', '1980-02-05', 'Miage', 'henri.nicolas@gmail.com', 'd53a223dbb966570966c8b171c0adc1b', 'Bordeaux', 'France', '0000-00-00 00:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `designevenement`
--
ALTER TABLE `designevenement`
  ADD CONSTRAINT `DesignEvenement_ibfk_1` FOREIGN KEY (`IDEvenement`) REFERENCES `evenements` (`IDEvenement`);

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `Evenements_ibfk_1` FOREIGN KEY (`IDUtilisateur`) REFERENCES `utilisateurs` (`IDUtilisateur`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `Messages_ibfk_1` FOREIGN KEY (`IDEvenement`) REFERENCES `evenements` (`IDEvenement`);

--
-- Contraintes pour la table `parametresevenement`
--
ALTER TABLE `parametresevenement`
  ADD CONSTRAINT `ParametresEvenement_ibfk_1` FOREIGN KEY (`IDEvenement`) REFERENCES `evenements` (`IDEvenement`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
