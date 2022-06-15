-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 juin 2022 à 06:40
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `verse`
--
CREATE DATABASE IF NOT EXISTS `verse` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `verse`;

-- --------------------------------------------------------

--
-- Structure de la table `aimer`
--

DROP TABLE IF EXISTS `aimer`;
CREATE TABLE IF NOT EXISTS `aimer` (
  `id_utilisateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_categorie`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `texte_article` varchar(255) DEFAULT NULL,
  `date_article` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_articles_users` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `texte_article`, `date_article`, `id_utilisateur`) VALUES
(1, 'Hello world !', '2022-05-21 16:54:37', 3);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(1, 'FPS'),
(2, 'Just chatting'),
(3, 'roleplaying game'),
(4, 'Roguelike');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `contenu_commentaire` varchar(255) DEFAULT NULL,
  `date_commentaire` datetime DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `fk_commentaires_articles` (`id_article`),
  KEY `fk_commentaires_users` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id_droit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_droit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id_droit`, `nom_droit`) VALUES
(1, 'Utilisateur'),
(2, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genre`, `nom_genre`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Licorne');

-- --------------------------------------------------------

--
-- Structure de la table `liste_amis`
--

DROP TABLE IF EXISTS `liste_amis`;
CREATE TABLE IF NOT EXISTS `liste_amis` (
  `id_ami` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_ami`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salons`
--

DROP TABLE IF EXISTS `salons`;
CREATE TABLE IF NOT EXISTS `salons` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salon` varchar(50) DEFAULT NULL,
  `password_salon` varchar(50) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_salon`),
  KEY `fk_salons_users` (`id_utilisateur`),
  KEY `fk_salons_categorie` (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(30) DEFAULT NULL,
  `prenom_utilisateur` varchar(30) DEFAULT NULL,
  `age_utilisateur` date DEFAULT NULL,
  `mail_utilisateur` varchar(50) DEFAULT NULL,
  `login_utilisateur` varchar(50) DEFAULT NULL,
  `mdp_utilisateur` varchar(100) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL,
  `id_droit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `fk_compuser_genres` (`id_genre`),
  KEY `fk_compuser_droits` (`id_droit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `age_utilisateur`, `mail_utilisateur`, `login_utilisateur`, `mdp_utilisateur`, `id_genre`, `id_droit`) VALUES
(1, 'chassaing', 'quentin', '1991-10-31', 'quentin.chassaing@outlook.com', 'mads', '$2y$10$mW2LuNJzfiG.uMSRC6eEiO4djnamfRDwHiH/HiqUopc5zn6kwa8li', 3, 1),
(2, 'trois', 'deux', '1999-12-10', 'unmail@fr.com', 'suppa', '$2y$10$oFqWQq5WrZvbDI4CuzllLe9vaBXSMh7y3D7RbnujrJ7x1lgVRjMla', 1, 1),
(3, 'quentin', 'chassaing', '2021-11-01', 'unmail@oui.com', 'maddz', '$2y$10$kHEYSuAhiqJIW9we6C0SNe9FZKFPK62YHz/v.KRnpwmvpsmoGk0Pm', 1, 1),
(4, 'chas', 'quen', '1994-02-10', 'quch@uu.com', 'madds', '$2y$10$MsdZhChSoWGQwPdgmzWsxOyPOxxHZOk3iMD0.UGU1CNEmmHjI6xFe', 3, 1),
(5, 'bonjour', 'bonsoir', '1994-02-10', 'unmaile@fef.com', 'bbadp', '$2y$10$nqoPn.x569xFnBlTaboliOBNv/127i.Wt.gD0V9qGY3d4u2DRGOtq', 3, 1),
(6, 'UnSuperNom', 'UnBeauPrenom', '1991-10-31', 'monmail@smtg.com', 'UnPseudo123', '$2y$10$7FjbsxICpppOnpznB3/85eOm3XB7FYuiIvYGI5zV4/NySz0LceuNO', 1, 1),
(7, 'unSuperNom', 'unPrénomDeFou', '2001-07-06', 'abcde@smthg.com', 'abcd', '$2y$10$GNztXN/f10hnH3YY1.L/yuX0dj2PCmD22z0UhLpMPRsQ7LQLuin3u', 3, 1),
(8, 'dedea', 'dada', '2022-06-10', 'haaa@deda.com', 'bonjour', '$2y$10$69R1IOkR/bLbPH3wc7m6Ueinf0RcQHHcEtH.5uTqvsEu62tM7Pgfe', 3, 1),
(9, 'de', 'dede', '2021-06-02', 'afaefae@feaef.com', 'afaefae@feaef.com', '$2y$10$eqijEJEwL3V.eNSP2DEq2.M4WtuZgFloBxqtPF6TfsS83ZQ7557Z6', 3, 1),
(10, 'grr', 'fefe', '2022-05-30', 'themail@fou.com', 'supertopcoolp', '$2y$10$3MWy/XPeijoWf8RWiq7axOTnDqh20VTb4j1xq4FCotYJV9hJcQzL.', 1, 1),
(11, 'nomnim', 'sarah', '2018-02-02', 'unchat@doo.com', 'superchat', '$2y$10$4w4yMJV.tbH6ZrR5bm2cZ.jJnItGb/QFZHGOauZz3f1NlDPDfBfny', 2, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aimer`
--
ALTER TABLE `aimer`
  ADD CONSTRAINT `aimer_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `aimer_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_users` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_commentaires_articles` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `fk_commentaires_users` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `salons`
--
ALTER TABLE `salons`
  ADD CONSTRAINT `fk_salons_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `fk_salons_users` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_compuser_droits` FOREIGN KEY (`id_droit`) REFERENCES `droits` (`id_droit`),
  ADD CONSTRAINT `fk_compuser_genres` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
