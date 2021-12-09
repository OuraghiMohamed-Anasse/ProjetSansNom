-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 09 déc. 2021 à 14:55
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitepardefautdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(6) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `dateajout` datetime NOT NULL,
  `idinscrit` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `commentaire`, `dateajout`, `idinscrit`) VALUES
(1, 'test\r\n', '2021-12-09 10:50:36', 9),
(2, 'test\r\n', '2021-12-09 10:50:39', 9),
(3, 'anasse\r\n', '2021-12-09 10:54:52', 9),
(4, 'test565', '2021-12-09 10:55:01', 9),
(5, 'j aime la peinture\r\nla caligraphie\r\nla poesie \r\net ainsi\r\nje vie\r\n', '2021-12-09 12:36:47', 8),
(6, 'nsm\r\n', '2021-12-09 14:43:42', 8),
(7, 'uhghzrugh', '2021-12-09 14:44:06', 8);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `nom`, `prenom`, `email`, `mot_de_passe`, `date_inscription`, `profil`) VALUES
(3, 'killua', 'Ouraghi', 'Dehlia', 'dehlia.bouaoune@outlook.fr', '$2y$10$9czx9NPIzcb0VyNjGBALXeGB1xDXXYACkg52UVjUthx2bJPShe2pa', '2021-12-07 14:30:22', ''),
(8, 'jotaro', 'ouraghi', 'mohamed', 'obsasew972@gmail.com', '$2y$10$UHP6pVLvn4taE0P64cmJ9OpNMsZovkiM.7SokoSuEU5q63OwBEgCa', '2021-12-08 09:58:14', ''),
(9, 'mohamedanasse', 'Mohamed-Anasse', 'Ouraghi', 'mohamedanasse.ouraghi@gmail.com', '$2y$10$0SHp2.TKJWbWciT77f80guY7oDPLDaAamTlpNr42alrocHW1XiTFC', '2021-12-08 10:59:42', './Images/day1-ipod.png'),
(10, 'mohamedanasse', 'Mohamed-Anasse', 'Ouraghi', 'mohamedanasse.ouraghi@gmail.com', '$2y$10$ipeImohT5U8Zf1KaIRfoMej6QDs79CZCasqowB1IZz0qrOihegBU2', '2021-12-08 11:03:08', './Images/day1-ipod.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
