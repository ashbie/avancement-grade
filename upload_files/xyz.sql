-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 avr. 2021 à 12:11
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE `dossier` (
  `id` int(2) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `rubrique` varchar(255) NOT NULL,
  `sous_rubrique` varchar(255) NOT NULL,
  `catégori` varchar(255) NOT NULL,
  `element` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `email`, `rubrique`, `sous_rubrique`, `catégori`, `element`) VALUES
(22, 'yassin2021@gmail.com', 'Production pédagogique', 'Responsabilités pédagogiques et administratives', 'Responsabilités administratives (directeur, vice directeur, chargé de mission)', 'Directeur Adjoint /Vice-Doyen/ chargé de mission'),
(23, 'yassin2021@gmail.com', 'Production scientifique', 'Production scientifique', 'Communications dans des actes de congrès ', 'Membre du comité scientifique ou d’organisation d’une manifestation scientifique');

-- --------------------------------------------------------

--
-- Structure de la table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(2) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `file_upload`
--

INSERT INTO `file_upload` (`id`, `email`, `pdf_file`) VALUES
(8, 'yassin2021@gmail.com', 'Screenshot_7.png'),
(9, 'yassin2021@gmail.com', 'Screenshot_7.png'),
(10, 'yassin2021@gmail.com', 'card_download (2).png'),
(11, 'yassin2021@gmail.com', 'card_download (2).png'),
(12, 'yassin2021@gmail.com', 'card_download (3).png'),
(13, 'yassin2021@gmail.com', 'card_download (2).png'),
(14, 'yassin2021@gmail.com', 'silverFis1.png'),
(15, 'yassin2021@gmail.com', 'card_download (2).png'),
(16, 'yassin2021@gmail.com', 'card_download (2).png'),
(17, 'yassin2021@gmail.com', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_email_dossier` (`email`);

--
-- Index pour la table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD CONSTRAINT `fk_email_dossier` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Contraintes pour la table `file_upload`
--
ALTER TABLE `file_upload`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
