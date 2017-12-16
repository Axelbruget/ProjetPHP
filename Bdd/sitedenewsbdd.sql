-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 déc. 2017 à 19:07
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sitedenewsbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `client2`
--

DROP TABLE IF EXISTS `client2`;
CREATE TABLE IF NOT EXISTS `client2` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client2`
--

INSERT INTO `client2` (`id`, `login`, `password`, `statut`) VALUES
(1, 'root', 'ents', 'admin'),
(2, 'juguigon', 'lumiere', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(50) NOT NULL,
  `date` datetime NOT NULL,
  `nomSite` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `date`, `nomSite`, `url`, `description`, `image`) VALUES
(0, '2017-12-16 19:00:34', 'Gameblog', 'http://feedproxy.google.com/~r/phoenixjp/~3/eG50E0OTPOo/71997-l-image-du-jour-la-meilleure-station-de-radio-de-tous-les-te', 'L\'image du jour : La meilleure station de radio de tous les temps', 'http://www.phoenixjp.net/news/fr/logos/logoGBLOG.gif'),
(1, '2017-12-16 18:41:14', 'Generation-NT', 'http://feedproxy.google.com/~r/phoenixjp/~3/zDQPShzM3Bw/oneplus-5-smartphone-android-oreo-beta-actualite-1949184.html', 'OnePlus 5 : la deuxième beta ouverte d\'Android Oreo disponible', 'http://www.phoenixjp.net/news/fr/logos/logoGENNT.gif'),
(2, '2017-12-16 18:40:19', 'FredZone', 'http://feedproxy.google.com/~r/phoenixjp/~3/I-CphLsO_YU/la-lenovo-tab-4-8-plus-est-a-204-e-665', 'La Lenovo Tab 4 8 Plus est à 204 €', 'http://www.phoenixjp.net/news/fr/logos/logoFREDZONE.gif'),
(3, '2017-12-16 18:21:40', 'Le comptoir du hardware', 'http://feedproxy.google.com/~r/phoenixjp/~3/R1LG8Q4GUbg/35400-un-premier-test-pour-la-sapphire-rx-vega-56-nitro-forcement-meilleure-que-la-carte-de-reference-et-cest-tant-mieux-.html', 'Un premier test pour la Sapphire RX Vega 56 Nitro+, forcément meilleure que la carte de référence et c\'est tant mieux !', 'http://www.phoenixjp.net/news/fr/logos/logoPUISSPC.gif'),
(4, '2017-12-16 18:21:37', 'AlloCine', 'http://feedproxy.google.com/~r/phoenixjp/~3/o6pFwBQlBJo/fichearticle_gen_carticle=18669547.html', 'X-Files : un making of révèle de nouvelles images de la saison 11', 'http://www.phoenixjp.net/news/fr/logos/logoALLOCINE.gif'),
(5, '2017-12-16 18:21:37', 'AlloCine', 'http://feedproxy.google.com/~r/phoenixjp/~3/8xOjLyyNCrM/fichearticle_gen_carticle=18669532.html', 'Andy Serkis : rencontre avec le roi de la motion capture', 'http://www.phoenixjp.net/news/fr/logos/logoALLOCINE.gif'),
(6, '2017-12-16 18:21:00', 'Journal du Japon', 'http://feedproxy.google.com/~r/phoenixjp/~3/TUrQlQiuwfk/', 'Gaming Memories #05 : Spécial RPG de Noël (Final Fantasy/Phantasy Star)', 'http://www.phoenixjp.net/news/fr/logos/logoJDJAPON.gif'),
(7, '2017-12-16 18:20:18', 'FredZone', 'http://feedproxy.google.com/~r/phoenixjp/~3/Y_AlOBGPpUI/asgardia-a-lance-son-premier-satellite-dans-lespace-554', 'Asgardia a lancé son premier satellite dans l’espace', 'http://www.phoenixjp.net/news/fr/logos/logoFREDZONE.gif'),
(8, '2017-12-16 18:20:14', 'Numerama', 'http://feedproxy.google.com/~r/phoenixjp/~3/GChw5xn8fV0/314127-frigos-smartphones-compteurs-lanfr-veut-rassurer-sur-lexposition-aux-ondes-dans-la-vie-courante.html', 'Frigos, smartphones, compteurs : un site pour apaiser le débat sur l’exposition aux ondes', 'http://www.phoenixjp.net/news/fr/logos/logoNUMERAMA.gif'),
(9, '2017-12-16 18:01:53', 'GinjFo', 'http://feedproxy.google.com/~r/phoenixjp/~3/R__qS-aKO-M/far-cry-5-un-trailer-100-bourrin-debarque-20171216', 'Far Cry 5, un trailer 100% bourrin débarque', 'http://www.phoenixjp.net/news/fr/logos/logoGINJFO.gif'),
(10, '2017-12-16 18:01:51', 'AlloCine', 'http://feedproxy.google.com/~r/phoenixjp/~3/sSzWBngz5Ec/fichearticle_gen_carticle=18669546.html', 'George Clooney arrive sur Netflix avec une mini-série sur le scandale du Watergate', 'http://www.phoenixjp.net/news/fr/logos/logoALLOCINE.gif'),
(11, '2017-12-16 18:01:50', 'AlloCine', 'http://feedproxy.google.com/~r/phoenixjp/~3/IojhPLpEe28/', 'Best-of 2017 : le meilleur et le pire des séries', 'http://www.phoenixjp.net/news/fr/logos/logoALLOCINE.gif'),
(12, '2017-12-16 18:01:39', 'Ere Numerique', 'http://feedproxy.google.com/~r/phoenixjp/~3/WV_aU2Z4W2M/samsung-galaxy-note-9-concept-video-devoile-ecran-borderless-article-35823-16.html', 'Samsung Galaxy Note 9 : un concept vidéo dévoile son écran borderless', 'http://www.phoenixjp.net/news/fr/logos/logoERENUM.gif'),
(13, '2017-12-16 17:41:41', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/qE5cVrQOZEk/nintendo-chercher-partenaires-jeux-mobiles-894219', 'Nintendo cherche d\'autres partenaires pour développer ses futurs jeux mobiles', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(14, '2017-12-16 17:41:14', 'Clubic.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/wJ_COZjLQUE/article-839966-1-imprimante-3d-laquelle-acheter-2017-2018.html', 'Idée pour Noël : et si vous offriez... une imprimante 3D ?!', 'http://www.phoenixjp.net/news/fr/logos/logoCLUBIC.gif'),
(15, '2017-12-16 17:41:13', 'Generation-NT', 'http://feedproxy.google.com/~r/phoenixjp/~3/Ctg-bPJT1cs/enceintes-connectees-objets-securite-faille-actualite-1949119.html', 'Enceintes connectées : une histoire de confiance mal placée', 'http://www.phoenixjp.net/news/fr/logos/logoGENNT.gif'),
(16, '2017-12-16 17:40:30', 'Gameblog', 'http://feedproxy.google.com/~r/phoenixjp/~3/O_8iRktjA1I/72483-vivez-l-enregistrement-du-podcast-441-sur-gameblog-tv-lundi-', 'Vivez l\'enregistrement du Podcast 441 sur Gameblog TV lundi à 18h30 : L\'année PS4', 'http://www.phoenixjp.net/news/fr/logos/logoGBLOG.gif'),
(17, '2017-12-16 17:40:18', 'FredZone', 'http://feedproxy.google.com/~r/phoenixjp/~3/IzeIVToobxk/lumidigi-z-pro-est-a-14966-e-554', 'L’Umidigi Z Pro est à 149,66 € (HK)', 'http://www.phoenixjp.net/news/fr/logos/logoFREDZONE.gif'),
(18, '2017-12-16 17:21:28', 'JeuxOnLine', 'http://feedproxy.google.com/~r/phoenixjp/~3/lhm9MfRRT_E/tournois-mode-spectateur-eve-valkyrie', 'EVE Valkyrie : Des tournois et un mode spectateur pour EVE : Valkyrie', 'http://www.phoenixjp.net/news/fr/logos/logoJOLINE.gif'),
(19, '2017-12-16 17:21:26', 'MacGeneration.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/OT151gYs58A/appel-temoins-pourquoi-avez-vous-achete-ou-comptez-acheter-un-imac-pro-100782', 'Appel à témoins : pourquoi avez-vous acheté (ou comptez acheter) un iMac Pro ?', 'http://www.phoenixjp.net/news/fr/logos/logoMACGEN.gif'),
(20, '2017-12-16 17:20:23', 'Von Guru', 'http://feedproxy.google.com/~r/phoenixjp/~3/g1N-Q_75zf0/', '#HardwarePorn : quatres TITAN V et deux Xeon E5-2699 !', 'http://www.phoenixjp.net/news/fr/logos/logoVONGURU.gif'),
(21, '2017-12-16 17:20:18', 'LesNumeriques', 'http://feedproxy.google.com/~r/phoenixjp/~3/dVoIwq-FWnA/huawei-vraie-alternative-a-samsung-apple-a3435.html', 'Entretien - ?Huawei : \'Une vraie alternative à Samsung et Apple\'', 'http://www.phoenixjp.net/news/fr/logos/logoLNUMERIQ.gif'),
(22, '2017-12-16 17:09:47', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/yrXLgfAhQuU/gorgoa-jeu-enigme-images-iphone-ipad-894338', 'Les dessins faits main de Gorogoa s\'animent sur iPhone et iPad, pour une histoire envoutante', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(23, '2017-12-16 17:09:47', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/iaCNQ_-Yq9g/bon-plan-reduction-philips-hue-lampe-ampoule-iphone-894385', 'Promos du jour : ampoules et kits Hue et autres bons plans accessoires iPhone, juste avant Noël', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(24, '2017-12-16 17:09:47', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/d2H7ww4brwE/youtube-service-streaming-musical-2018-893915', 'YouTube pourrait lancer son service de streaming musical dès mars prochain', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(25, '2017-12-16 17:09:47', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/Ez2olpmMdPA/ou-acheter-airpods-disponible-894386', 'Où trouver des AirPods pour les glisser sous le sapin à Noël ?', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(26, '2017-12-16 17:09:47', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/6TSsO9AwCmw/apple-music-production-serie-moore-space-drama-894380', 'Apple poursuit ses efforts dans la vidéo et s\'offre le scénariste des séries télévisées Star Trek et Battlestar Galactica', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(27, '2017-12-16 17:09:47', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/ftcS6Vkxa10/itunes-windows-10-store-repousse-894377', 'L\'arrivée d’iTunes dans le Windows Store repoussée', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(28, '2017-12-16 17:09:44', 'Nautiljon', 'http://feedproxy.google.com/~r/phoenixjp/~3/j8qsxaBDmJI/hideo+yamamoto+de+retour+en+france+chez+delcourt-tonkam+avec+hikari-man-8625.html', 'Hideo Yamamoto de retour en France chez Delcourt/Tonkam avec Hikari-Man', 'http://www.phoenixjp.net/news/fr/logos/logoNAUTILJON.gif'),
(29, '2017-12-16 17:09:44', 'Ecran Large', 'http://feedproxy.google.com/~r/phoenixjp/~3/iQfBjwOSeYc/1005317-brian-de-palma-tous-les-secrets-du-grand-cineaste-reunis-dans-un-grand-livre-indispensable-pour-noel', 'Brian De Palma : tous les secrets du grand cinéaste réunis dans un grand livre indispensable (pour Noël)', 'http://www.phoenixjp.net/news/fr/logos/logoECRANLARGE.gif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
