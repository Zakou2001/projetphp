-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 jan. 2020 à 21:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bu`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_livre`
--

DROP TABLE IF EXISTS `etudiant_livre`;
CREATE TABLE IF NOT EXISTS `etudiant_livre` (
  `id_email` varchar(200) NOT NULL,
  `id_livre_1` varchar(100) NOT NULL,
  `livre_1` varchar(100) NOT NULL,
  `debut_pret_1` varchar(100) NOT NULL,
  `retour_pret_1` varchar(100) NOT NULL,
  `id_livre_2` varchar(100) DEFAULT NULL,
  `livre_2` varchar(100) DEFAULT NULL,
  `debut_pret_2` varchar(100) DEFAULT NULL,
  `retour_pret_2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant_livre`
--

INSERT INTO `etudiant_livre` (`id_email`, `id_livre_1`, `livre_1`, `debut_pret_1`, `retour_pret_1`, `id_livre_2`, `livre_2`, `debut_pret_2`, `retour_pret_2`) VALUES
('a.zakoudjibo@epsi.fr', '6', 'PROGRAMMATION JAVA', '25-01-2020', '30-01-2020', '5', 'BASE_DE_DONNEES', '25-01-2020', '30-01-2020'),
('S.Bouanga@epsi.fr', '7', 'HTML5_CSS3', '25-01-2020', '30-01-2020', '4', 'SQL_AVANCE', '25-01-2020', '30-01-2020'),
('mathieu.mendy@epsi.fr', '12', 'SECURITE_INFORMATIQUE', '25-01-2020', '30-01-2020', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `niveau_etudes` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `genre`, `type`, `niveau_etudes`, `email`, `mdp`) VALUES
(1, 'admin', '', 'm', 'admin', '', 'admin', 'kemet'),
(12, 'BOUANGA', 'Brel', 'm', 'Etudiant', 'B1', 'S.Bouanga@epsi.fr', 'brel04'),
(11, 'MENDY', 'Mathieu', 'm', 'Etudiant', 'B1', 'mathieu.mendy@epsi.fr', 'Nabassa'),
(13, 'Zakou-Djibo', 'Aboubacar', 'm', 'Etudiant', 'B1', 'a.zakoudjibo@epsi.fr', 'sidik'),
(14, 'Nguesso', 'Daniel', 'm', 'Etudiant', 'B1', 'd.nguesso@epsi.fr', 'mignon');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id_livre` varchar(255) NOT NULL,
  `titre_livre` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `nombre_exemplaire` varchar(20) NOT NULL,
  `exemplaire_dispo` int(100) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `annee_publication` varchar(50) NOT NULL,
  PRIMARY KEY (`id_livre`),
  UNIQUE KEY `id_livre` (`id_livre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id_livre`, `titre_livre`, `auteur`, `nombre_exemplaire`, `exemplaire_dispo`, `categorie`, `annee_publication`) VALUES
('15', 'WIFI_RESEAU', 'ATELIN PHILIPPE', '30', 27, 'reseau', '2018'),
('14', 'TP_SUR_CISCO', 'ROUX AURELIEN', '15', 5, 'reseau', '2018'),
('13', 'TELEPHONIE_SUR_IP', 'LEDRU PIERRE', '10', 1, 'reseau', '2018'),
('12', 'SECURITE_INFORMATIQUE', 'ACISSI FABRINA', '15', 4, 'reseau', '2018'),
('11', 'RESEAU_INFORMATIQUE', 'DORDOIGNE JOSE', '30', 21, 'reseau', '2011'),
('10', 'C++:LES BASES', 'OLIVIER MARGUIN', '20', 9, 'devops', '2003'),
('9', 'COURS_PHP', 'SEBASTIEN ROHAUT', '18', 12, 'devops', '2014'),
('8', 'COURS_PYTHON', 'PATRICK FUCHS', '10', 8, 'devops', '2009'),
('7', 'HTML5_CSS3', 'ZELDMAN JEFFREY', '20', 18, 'devops', '2018'),
('6', 'PROGRAMMATION JAVA', 'GANET VINCENT', '20', 14, 'devops', '2018'),
('5', 'BASE_DE_DONNEES', 'GEORGES GARDARIN', '20', 14, 'bdd', '2003'),
('4', 'SQL_AVANCE', 'JOE CELKO', '10', 8, 'bdd', '2000'),
('3', 'OPTIMISER_SQL_SERVER', 'BRUCHEZ RUDI', '30', 27, 'bdd', '2017'),
('2', 'APPRENDRE_MYSQL', 'SOUTOU CHRISTIAN', '20', 9, 'bdd', '2018'),
('1', 'ORACLE', 'BRIARD GILLES', '30', 21, 'bdd', '2018');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
