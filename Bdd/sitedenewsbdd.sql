-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Décembre 2017 à 18:21
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
(1, 'Hello', '123', 'client'),
(0, 'superadmin', 'super', 'superadmin'),
(2, 'root', 'ents', 'client'),
(3, 'juguigon', 'lumiere', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(50) NOT NULL,
  `date` datetime NOT NULL,
  `nomSite` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `date`, `nomSite`, `url`, `description`, `image`) VALUES
(0, '2017-12-18 18:02:12', 'Le Journal du Geek', 'http://feedproxy.google.com/~r/phoenixjp/~3/TXsBkT8r6js/', '[Critique] Jumanji : Bienvenue dans la Jungle', 'http://www.phoenixjp.net/news/fr/logos/logoJDGEEK.gif'),
(1, '2017-12-18 18:02:05', 'Numerama', 'http://feedproxy.google.com/~r/phoenixjp/~3/o42EgtrZUGo/315617-bruno-le-maire-attaque-amazon-en-justice-pour-des-clauses-abusives.html', 'Bruno Le Maire attaque Amazon en justice pour des clauses abusives', 'http://www.phoenixjp.net/news/fr/logos/logoNUMERAMA.gif'),
(2, '2017-12-18 18:01:58', 'Premiere Series', 'http://feedproxy.google.com/~r/phoenixjp/~3/Lo3YmSFeu_I/Les-5-meilleurs-jeux-de-Noel', 'Les 5 meilleurs jeux de Noël', 'http://www.phoenixjp.net/news/fr/logos/logoPREMIERE.gif'),
(3, '2017-12-18 18:01:44', 'Ecran Large', 'http://feedproxy.google.com/~r/phoenixjp/~3/fd66NG0zZLQ/1007897-avengers-infinity-war-kevin-feige-promet-que-le-debut-du-film-sera-violent-avec-un-thanos-surpuissant', 'Avengers : Infinity War - Kevin Feige promet que le début du film sera violent, avec un Thanos surpuissant', 'http://www.phoenixjp.net/news/fr/logos/logoECRANLARGE.gif'),
(4, '2017-12-18 18:01:42', 'AlloCine', 'http://feedproxy.google.com/~r/phoenixjp/~3/_-sKw8IljIU/fichearticle_gen_carticle=18669574.html', 'The OA : tournage imminent pour la saison 2', 'http://www.phoenixjp.net/news/fr/logos/logoALLOCINE.gif'),
(5, '2017-12-18 18:01:36', 'AVCESAR.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/04deZ11YeUk/rush-de-noel-chargeur-5-ports-usb-a-63-soit-3750-deconomie.html', 'Rush de Noël, chargeur 5 ports USB à -63%, soit 37,50 € d''économie', 'http://www.phoenixjp.net/news/fr/logos/logoAVCESAR.gif'),
(6, '2017-12-18 18:01:36', 'AVCESAR.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/mQpIEATjWbg/rush-de-noel-casque-sony-mdr-a1-a-55-soit-121-deconomie.html', 'Rush de Noël, casque Sony MDR-A1 à -55%, soit 121 € d''économie', 'http://www.phoenixjp.net/news/fr/logos/logoAVCESAR.gif'),
(7, '2017-12-18 18:01:30', 'Ere Numerique', 'http://feedproxy.google.com/~r/phoenixjp/~3/HAhKvKvChkA/rainbrow-le-jeu-pour-iphone-x-qui-se-joue-avec-les-sourcils-article-36006-18.html', 'Rainbrow : le jeu pour iPhone X qui se joue avec… les sourcils !', 'http://www.phoenixjp.net/news/fr/logos/logoERENUM.gif'),
(8, '2017-12-18 18:01:29', 'Jeux Expo', 'http://feedproxy.google.com/~r/phoenixjp/~3/lWWEoHl7_Hs/afficher_news-62773.html', 'RIFT : L''abonnement annuel à 99 dollars', 'http://www.phoenixjp.net/news/fr/logos/logoJEUXPO.gif'),
(9, '2017-12-18 18:01:29', 'Jeux Expo', 'http://feedproxy.google.com/~r/phoenixjp/~3/4Jjw0TeB5k8/afficher_news-62772.html', 'Trove : Des concours en cours', 'http://www.phoenixjp.net/news/fr/logos/logoJEUXPO.gif'),
(10, '2017-12-18 18:01:29', 'Jeux Expo', 'http://feedproxy.google.com/~r/phoenixjp/~3/POuFOYM8vUY/afficher_news-62771.html', 'ArcheAge : L''abonnement en promotion', 'http://www.phoenixjp.net/news/fr/logos/logoJEUXPO.gif'),
(11, '2017-12-18 18:01:29', 'Jeux Expo', 'http://feedproxy.google.com/~r/phoenixjp/~3/FjL9lBybQt4/afficher_news-62770.html', 'Defiance : Une loterie spéciale', 'http://www.phoenixjp.net/news/fr/logos/logoJEUXPO.gif'),
(12, '2017-12-18 18:01:29', 'Jeux Expo', 'http://feedproxy.google.com/~r/phoenixjp/~3/gT4Rh8I_Fnc/afficher_news-62769.html', 'TT Isle of Man : Passion et Légende', 'http://www.phoenixjp.net/news/fr/logos/logoJEUXPO.gif'),
(13, '2017-12-18 18:01:29', 'Jeux Expo', 'http://feedproxy.google.com/~r/phoenixjp/~3/thIOCKMUOvc/afficher_news-62774.html', 'Dissidia Final Fantasy NT  : Nouvelle bande annonce', 'http://www.phoenixjp.net/news/fr/logos/logoJEUXPO.gif'),
(14, '2017-12-18 18:01:23', 'Clubic.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/iFvYEhp_5l0/actualite-840570-extension-firefox-provoque-colere-internautes.html', 'L''extension de trop : Firefox provoque la colère des internautes', 'http://www.phoenixjp.net/news/fr/logos/logoCLUBIC.gif'),
(15, '2017-12-18 18:01:22', 'Generation-NT', 'http://feedproxy.google.com/~r/phoenixjp/~3/JGSf005PsRQ/jailbreak-ios-iphone-x-alibaba-actualite-1949203.html', 'Jailbreak untethered d''iOS 11.2.1 sur iPhone X', 'http://www.phoenixjp.net/news/fr/logos/logoGENNT.gif'),
(16, '2017-12-18 18:01:20', '01Net', 'http://feedproxy.google.com/~r/phoenixjp/~3/x5If9QNgkE4/tengami-waterminder-colorzzle-les-promos-du-jour-pour-iphone-ipad-et-android-1330390.html', 'Tengami, WaterMinder, Colorzzle : les promos du jour pour iPhone, iPad et Android', 'http://www.phoenixjp.net/news/fr/logos/logo01NET.gif'),
(17, '2017-12-18 18:01:14', 'LesMobiles.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/Xa1zt7DgiJk/24869-synaptics-clear-id-le-premier-mobile-equipe-sera-signe-vivo.html', 'Synaptics Clear ID : le premier mobile équipé sera signé Vivo', 'http://www.phoenixjp.net/news/fr/logos/logoLMOBILES.gif'),
(18, '2017-12-18 18:00:57', 'Tom''s Guide', 'http://feedproxy.google.com/~r/phoenixjp/~3/cU9XmWtxUeM/casque-annulation-bruit,51032.html', 'Guide d''achat : quel est le meilleur casque à annulation de bruit ?', 'http://www.phoenixjp.net/news/fr/logos/logoTOMSG.gif'),
(19, '2017-12-18 18:00:43', 'JeuxVideo.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/lyV9QjzMabc/mario-the-lapins-cretins-kingdom-battle-propose-desormais-de-la-capture-video.htm', 'Mario + The Lapins Crétins Kingdom Battle propose désormais de la capture vidéo', 'http://www.phoenixjp.net/news/fr/logos/logoJVIDEO.gif'),
(20, '2017-12-18 18:00:43', 'JeuxVideo.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/2a8qm7-lBOA/pubg-sur-xbox-one-desactiver-la-fonction-d-enregistrement-fait-gagner-des-fps.htm', 'PUBG sur Xbox One : Désactiver la fonction d''enregistrement fait gagner des fps', 'http://www.phoenixjp.net/news/fr/logos/logoJVIDEO.gif'),
(21, '2017-12-18 18:00:38', 'Next Inpact', 'http://feedproxy.google.com/~r/phoenixjp/~3/CLecorW9Zt8/105840-ipv6-33-a-35-dutilisation-chez-free-et-orange-bouygues-et-sfr-a-moins-1.htm', 'IPv6 : 33 à 35 % d''utilisation chez Free et Orange, Bouygues et SFR à moins de 1 %', 'http://www.phoenixjp.net/news/fr/logos/logoNEXTINPACT.gif'),
(22, '2017-12-18 18:00:34', 'GameKult.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/qgu-9KIvbtw/episode-ignis-toutes-les-bonnes-choses-ont-une-faim-3050800835.html', 'Episode Ignis, toutes les bonnes choses ont une faim', 'http://www.phoenixjp.net/news/fr/logos/logoGAMEKULT.gif'),
(23, '2017-12-18 18:00:25', 'Gameblog', 'http://feedproxy.google.com/~r/phoenixjp/~3/UGVNDqpOnMc/72508-dragon-quest-builders-trouve-enfin-sa-sortie-sur-switch-et-p', 'Dragon Quest Builders trouve enfin sa sortie sur Switch et présente ses bonus', 'http://www.phoenixjp.net/news/fr/logos/logoGBLOG.gif'),
(24, '2017-12-18 17:41:55', 'Le Journal du Geek', 'http://feedproxy.google.com/~r/phoenixjp/~3/BH6phVxwe1s/', '[Impressions] Un mois avant sa sortie, on vous dit si Dragon Ball FighterZ peut tout exploser', 'http://www.phoenixjp.net/news/fr/logos/logoJDGEEK.gif'),
(25, '2017-12-18 17:41:51', 'LesNumeriques', 'http://feedproxy.google.com/~r/phoenixjp/~3/dL6stC6ATeo/bon-plan-clavier-mecanique-corsair-k70-lux-a-86-euros-n69547.html', 'Bon plan – Clavier mécanique Corsair K70 Lux à 86 €', 'http://www.phoenixjp.net/news/fr/logos/logoLNUMERIQ.gif'),
(26, '2017-12-18 17:41:32', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/Q6nMuosr3ig/test-avis-oddworld-new-n-tasty-bon-jeu-plateforme-iphone-ipad-894399', 'Test ''Oddworld: New ''n'' Tasty'': 20 après sa première aventure sur console, l’attachante créature Abe réussit son arrivée sur iPhone et iPad', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(27, '2017-12-18 17:41:32', 'IPhon.fr', 'http://feedproxy.google.com/~r/phoenixjp/~3/Ur-xP5fLajI/jai-mal-ma-route-app-iphone-citoyenne-routes-abimees-894521', 'J''ai mal à ma route:  l''app citoyenne pour signaler routes abimées et mal entretenues, depuis son smartphone !', 'http://www.phoenixjp.net/news/fr/logos/logoIPHON.gif'),
(28, '2017-12-18 17:41:28', 'Ecran Large', 'http://feedproxy.google.com/~r/phoenixjp/~3/BHUw41mhpOk/1007860-cro-man-rend-la-pate-a-modeler-epique-dans-sa-nouvelle-bande-annonce-rejouissante', 'Cro Man rend la pâte à modeler épique dans sa nouvelle bande-annonce réjouissante', 'http://www.phoenixjp.net/news/fr/logos/logoECRANLARGE.gif'),
(29, '2017-12-18 17:41:18', 'AVCESAR.com', 'http://feedproxy.google.com/~r/phoenixjp/~3/hJuvlUkEDh8/cozmo-le-petit-robot-programmable-par-tous.html', 'Cozmo, le petit robot programmable par tous', 'http://www.phoenixjp.net/news/fr/logos/logoAVCESAR.gif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
