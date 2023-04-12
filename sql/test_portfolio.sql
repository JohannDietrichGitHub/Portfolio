-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 06 déc. 2022 à 07:13
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` tinytext NOT NULL,
  `contenu` longtext NOT NULL,
  `auteur` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `auteur`) VALUES
(1, 'Titre article de base', 'Contenu article de base assez long en vrai e hfsek fjhfj hsefhsejkhsejfhes ejf e f e  fhsj fhsekfejsfhse  e sejhfkjsehfjhhefg sf gnes fseyb fesyf behfg  esg fhjkeg fjhsegfh gsej fgseh ghsjk fsegf\r\n gkjse ghfgs kjhdfghsdjkgfhjsgef hsdf gsd g sdg fhsdgf fsghfhfhgdsh fgsgdhf gsdf gsgdhfgshdf ghsdfghj gs fghjg sd ghjf gh ghfsdhg jfghjsdf gsdh gfsjghfd g g', 'Johann Dietrich'),
(3, 'titre d\'article normal test 1', 'contenu article normal test 1', 'admin'),
(4, 'Article pour installer Wampserv', 'Dans cet article nous allons voir comment tÃ©lÃ©charger et utiliser du mieux possible ....', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` text NOT NULL,
  `mail` text NOT NULL,
  `raison` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `sujet`, `mail`, `raison`) VALUES
(1, 'Grand fan', 'jodiet@hotmail.Fr', ' Bonjour, je suis un grand fan, au revoir');

-- --------------------------------------------------------

--
-- Structure de la table `datacv`
--

DROP TABLE IF EXISTS `datacv`;
CREATE TABLE IF NOT EXISTS `datacv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `experiences` text NOT NULL,
  `presentation` text NOT NULL,
  `competences` text NOT NULL,
  `diplomes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `datacv`
--

INSERT INTO `datacv` (`id`, `experiences`, `presentation`, `competences`, `diplomes`) VALUES
(1, '3 mois en entreprise...', 'Bonjour, je m\'appelle... ', 'PHP;80 CSS;40 JavaScript;20', 'BaccalaurÃ©at STI2D');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `actions` tinytext NOT NULL,
  `pages` tinytext NOT NULL,
  `date_temps` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`id`, `username`, `actions`, `pages`, `date_temps`) VALUES
(55, 'zer', 'Logout/Changement de compte', 'connection.php', '2002-05-23 23:59:59'),
(56, 'admin', 'Logout/Changement de compte', 'connection.php', '2022-12-04 19:00:47'),
(57, 'admin', 'Login', 'login.php', '2022-12-04 19:00:47'),
(58, 'admin', 'Logout/Changement de compte', 'connection.php', '2022-12-04 19:01:41'),
(59, 'admin', 'Login', 'login.php', '2022-12-05 00:08:50'),
(60, 'admin', 'Logout/Changement de compte', 'connection.php', '2022-12-05 16:13:56'),
(61, 'admin', 'Login', 'login.php', '2022-12-05 19:30:36'),
(62, 'admin', 'Logout/Changement de compte', 'connection.php', '2022-12-05 22:24:31'),
(63, 'zer', 'Login', 'login.php', '2022-12-05 22:25:11'),
(64, 'zer', 'Logout/Changement de compte', 'connection.php', '2022-12-05 22:25:40'),
(65, 'admin', 'Login', 'login.php', '2022-12-05 22:25:43'),
(66, 'admin', 'Logout/Changement de compte', 'connection.php', '2022-12-06 08:07:24'),
(67, 'zer', 'Login', 'login.php', '2022-12-06 08:07:30'),
(68, 'zer', 'Logout/Changement de compte', 'connection.php', '2022-12-06 08:11:19'),
(69, 'admin', 'Login', 'login.php', '2022-12-06 08:11:28'),
(70, 'admin', 'Logout/Changement de compte', 'connection.php', '2022-12-06 08:13:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `droits` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`, `droits`) VALUES
(14, 'z', 'z', '$2y$10$qxBzNhfKlyLjLCE7GQM1FuZyPAZwJI/WVNu.5xSbjAE8LSEoppZqi', NULL),
(7, 'ezreth', 'ergtfh', '$2y$10$8sSDCDtYGI.T26vSWT/PSOo/BxV5LqkGz10fCXUsaw4MGO4a1MSVa', NULL),
(8, 'admin', 'admin', '$2y$10$kYNCbEOWy5v1yDIpaAnHAu/XJVd1ZVNju3XmpaZwUNKCkoIaLR6n6', 1),
(13, 'ezrt', 'rhyerzthyh', '$2y$10$m2aGIeZIFJJzHUnDjXZ7eOSstRvhfriudaQzzMltZQUPWc6sYXNeS', NULL),
(12, 'uti', 'jodiet@hotmail.Fr', '$2y$10$dDVfzu37I6gQX6U6j17Eq.5Pg.zRPR7sryAp8ddp7DniRX4B5JlwO', NULL),
(15, 'zer', 'zer', '$2y$10$0/yDVONO/7FXRZ3.27Y74uTPhht0JwnjM1WWx7WRrWlfavlNi/TWO', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(128),
  `article_id` int UNSIGNED,
  `user_id` int UNSIGNED,
  PRIMARY KEY (`id`),
  Foreign Key(`article_id`) REFERENCES articles(id),
  Foreign Key(`user_id`) REFERENCES users(id)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;