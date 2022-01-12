-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 12 jan. 2022 à 15:34
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
-- Base de données : `alumni`
--

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'eleve'),
(2, 'moderateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pseudo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `campus` varchar(100) CHARACTER SET latin1 NOT NULL,
  `promo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `github_link` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `profile_picture` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `anecdote` text CHARACTER SET latin1,
  `role` int(11) NOT NULL,
  `is_actif` tinyint(1) NOT NULL,
  `is_update` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  KEY `foreign_key_role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `pseudo`, `mail`, `password`, `campus`, `promo`, `date_debut`, `date_fin`, `github_link`, `profile_picture`, `anecdote`, `role`, `is_actif`, `is_update`) VALUES
(51, 'Ingram', 'Petra', NULL, 'nec@icloud.edu', 'DXW43BXT0QH', 'Khanpur', 'Ac Arcu Nunc Incorporated', '2017-09-09', '2020-09-07', NULL, NULL, NULL, 1, 1, 0),
(52, 'Jacobson', 'Courtney', NULL, 'in.ornare@outlook.couk', 'DKK33PHI8CH', 'Galway', 'Tristique Corp.', '2018-03-04', '2020-11-27', NULL, NULL, NULL, 1, 0, 0),
(53, 'Duke', 'Mary', NULL, 'enim.commodo@aol.ca', 'AOR38GOJ3HR', 'Los Vilos', 'Aliquet Diam Sed LLC', '2018-10-06', '2020-06-02', NULL, NULL, NULL, 1, 1, 0),
(54, 'Frost', 'Lucas', NULL, 'justo@protonmail.com', 'KTL32JBN1TD', 'Trollhättan', 'Magna A Tortor Inc.', '2017-04-20', '2019-09-13', NULL, NULL, NULL, 1, 0, 0),
(55, 'Whitney', 'Zenaida', NULL, 'vitae.dolor@google.couk', 'XDB60KWG9HR', 'Turgutlu', 'Ipsum Non Associates', '2018-03-10', '2019-11-27', NULL, NULL, NULL, 1, 0, 0),
(56, 'Mercado', 'Maryam', NULL, 'risus.odio@outlook.org', 'LCC83NTI1RG', 'San Cristóbal de la Laguna', 'Leo Industries', '2017-03-09', '2019-08-15', NULL, NULL, NULL, 2, 1, 0),
(57, 'Avila', 'Germane', NULL, 'magnis.dis@hotmail.net', 'QCC71BSU3IH', 'Dublin', 'Pretium Neque Inc.', '2018-10-05', '2019-11-16', NULL, NULL, NULL, 1, 0, 0),
(58, 'Lowe', 'Colby', NULL, 'non@yahoo.ca', 'CMD42FIW0PW', 'Villahermosa', 'Quisque PC', '2018-06-03', '2020-10-26', NULL, NULL, NULL, 2, 1, 0),
(59, 'Barrera', 'Ulric', NULL, 'mauris@hotmail.ca', 'XLT55JBW3NO', 'Villa del Rosario', 'Montes Nascetur Company', '2018-12-31', '2019-05-11', NULL, NULL, NULL, 1, 0, 0),
(60, 'Case', 'Brooke', NULL, 'augue@yahoo.net', 'RBJ68IGN4GJ', 'Fairbanks', 'Sit LLC', '2017-06-21', '2019-06-16', NULL, NULL, NULL, 1, 0, 0),
(61, 'Cantu', 'George', NULL, 'et@protonmail.ca', 'UMN92XYW2VL', 'Morpeth', 'Adipiscing Ligula Aenean Inc.', '2017-09-25', '2020-08-12', NULL, NULL, NULL, 1, 0, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
