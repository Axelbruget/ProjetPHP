-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Décembre 2017 à 00:29
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sitedenewsbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `client2`
--

CREATE TABLE IF NOT EXISTS `client2` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client2`
--

INSERT INTO `client2` (`id`, `login`, `password`, `statut`) VALUES
(1, 'root', 'ents', 'admin'),
(2, 'juguigon', 'lumiere', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `nomSite` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `date`, `nomSite`, `url`, `description`) VALUES
(1, '2017-12-14 22:12:07', 'jeuxvideo.com', 'http://www.jeuxvideo.com/news/765777/les-etats-unis-en-passe-d-abroger-la-neutralite-d-internet.htm', 'Les Etats-Unis en passe d''abroger la neutralité d''Internet');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
