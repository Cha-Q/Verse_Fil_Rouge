-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 17 mai 2022 à 07:29
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+02:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_verse`
--

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
) ENGINE=InnoDB DEFAULT CHARSET='utf8';

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `texte_article` varchar(255),
  `date_article` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_articles_users` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET='utf8';


--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET='utf8';

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
) ENGINE=InnoDB DEFAULT CHARSET='utf8';

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id_droit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_droit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB DEFAULT CHARSET='utf8';

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id_droit`, `nom_droit`) VALUES
(1, 'Admin'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET='utf8';

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
) ENGINE=InnoDB DEFAULT CHARSET='utf8';

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
) ENGINE=InnoDB DEFAULT CHARSET='utf8';


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
) ENGINE=InnoDB DEFAULT CHARSET='utf8';
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
