-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 mai 2023 à 13:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_site_eunice`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion_admin`
--

DROP TABLE IF EXISTS `connexion_admin`;
CREATE TABLE IF NOT EXISTS `connexion_admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connexion_admin`
--

INSERT INTO `connexion_admin` (`id`, `email`, `mdp`) VALUES
(4, 'donatienboni10@gmail.com', 'admin'),
(2, 'donatienboni10@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `produit` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `produit`, `message`) VALUES
(1, 'Donatien BONOUKPO ANANI', 'Donatienboni10@gmail.com', 'on', 'ttoto'),
(3, 'Donatien BONOUKPO ANANI', 'Donatienboni10@gmail.com', 'Souris', 'ttt');

-- --------------------------------------------------------

--
-- Structure de la table `produit_index`
--

DROP TABLE IF EXISTS `produit_index`;
CREATE TABLE IF NOT EXISTS `produit_index` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `nom` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit_index`
--

INSERT INTO `produit_index` (`id`, `image`, `description`, `nom`) VALUES
(13, 'unitecentale.jpg', 'AWD-IT UnitÃ© Centrale Ordinateur de Bureau Intel  Core i7-11700KF 8X 3,60GHz â€¢ Nvidia GeForce RTX3060 â€¢ 16 Go RAM â€¢ 500 Go M.2 SSD â€¢ 2To HDD â€¢ WiFi 600 Mbps â€¢ Windows 11', 'AWD-IT UnitÃ© Centrale '),
(14, 'dell.jpg', 'L\'ordinateur portable est devenu un outil de                  travail indispensable dans le cadre de la scolaritÃ© d\'un Ã©tudiant.                  Rapport qualitÃ©-prix, performance, autonomie: tour d\'horizon des meilleures rÃ©fÃ©rences.  Avec la rentrÃ©e scolaire, il s\'agit pour les Ã©tudiants de  trouver un ordinateur . ', 'L\'ordinateur portable'),
(15, 'Moniteur-de-surveillance-V6-1-14.jpg', 'Le moniteur de surveillance V6, est un moniteur patient idÃ©al pour les cabinets mÃ©dicaux et maison d\'accueil spÃ©cialisÃ© ( EHPAD, MAS, IME) LÃ©ger, autonome, fiable et facile dâ€™utilisation, le moniteur de surveillance V6 permet au personnel de soins de rÃ©aliser des examens rapidement, en assurant la surveillance, lâ€™affichage le stockage et lâ€™alarme de plusieurs paramÃ¨tres physiologiques du patient.', 'Moniteur-de-surveillance'),
(16, 'Apple-macbook-air-m1-1492251.jpg', 'L\'ordinateur portable est devenu un outil de travail indispensable dans le cadre de la scolaritÃ© d\'un Ã©tudiant. Rapport qualitÃ©-prix, performance, autonomie: tour d\'horizon des meilleures rÃ©fÃ©rences. Avec la rentrÃ©e scolaire, il s\'agit pour les Ã©tudiants de trouver un ordinateur .', 'L\'ordinateur portable '),
(17, 'iphone.jpg', 'Apple iPhone 11 64 Go Noir Smartphone 4G-LTE Advanced IP68 Dual SIM - Apple A13 Bionic Hexa-Core - RAM 4 Go - Ecran 6.1\" 828 x 1792 - 64 Go - NFC/Bluetooth 5.0 - iOS 13', 'Apple iPhone 11 64 Go Noir Smartphone 4G-LTE'),
(18, 'Capture.jpg', 'ROUTEUR 4G INDUSTRIEL COMPACT AVEC HOTSPOT WIFI LUn routeur 4G industriel est bien souvent essentiel dans la mise en place dâ€™une application IoT (Internet of things) pour remonter les donnÃ©es terrain sur un Cloud. Il peut aussi servir de connexion de secours quand les accÃ¨s Internet plus classiques viennent Ã  tomber en panne.', 'ROUTEUR 4G INDUSTRIEL COMPACT AVEC HOTSPOT WIFI '),
(19, '1.jpg', 'ClÃ© WiFi Adaptateur USB longue portÃ©e sans fil N 150Mbps Avec Antennes 5 dBi WF2119S L\'adaptateur USB sans fil N Netis WF2119S 150Mbps est conÃ§u pour connecter un ordinateur de bureau ou portable Ã  un rÃ©seau sans fil et accÃ©der Ã  une connexion Internet haut dÃ©bit.', 'ClÃ© WiFi Adaptateur USB longue portÃ©e sans fil N 150Mbps Avec Antennes 5 dBi WF2119S '),
(20, 'souri1.jpg', ' Ã€ propos de cet article Souris Ã  rÃ©troÃ©clairage RVB : souris sans fil avec rÃ©troÃ©clairage LED RVB 7 couleurs changeantes par respiration automatique. Indicateur clignotant lorsque le commutateur DPI (conseils : ne peut pas dÃ©finir dans une couleur spÃ©cifique) ; appuyez sur le bouton avant/arriÃ¨re + DPI pour Ã©teindre la lumiÃ¨re. 3 DPI rÃ©glables : souris sans fil DPI : 800/1200/1600, changez facilement la sensibilitÃ© du curseur pour rÃ©pondre Ã  tous vos besoins. Souris optique sans fil pour ordinateur portable, ordinateur, PC.', 'SOURIS ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
