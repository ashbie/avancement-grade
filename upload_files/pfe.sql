-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 12:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie_b1`
--

CREATE TABLE `categorie_b1` (
  `id` int(5) NOT NULL,
  `b11` int(1) NOT NULL DEFAULT 0,
  `b12` int(1) NOT NULL DEFAULT 0,
  `b13` int(1) NOT NULL DEFAULT 0,
  `b14` int(1) NOT NULL DEFAULT 0,
  `b15` int(1) NOT NULL DEFAULT 0,
  `b16` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categorie_b2`
--

CREATE TABLE `categorie_b2` (
  `id` int(5) NOT NULL,
  `b21` int(1) NOT NULL DEFAULT 0,
  `b22` int(1) NOT NULL DEFAULT 0,
  `b23` int(1) NOT NULL DEFAULT 0,
  `b24` int(1) NOT NULL DEFAULT 0,
  `b25` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categorie_b3`
--

CREATE TABLE `categorie_b3` (
  `id` int(5) NOT NULL,
  `b31` int(1) NOT NULL DEFAULT 0 COMMENT 'if 0, then not selected \r\nif 1, then selected\r\n(applies to the other columns)',
  `b32` int(1) NOT NULL DEFAULT 0,
  `b33` int(1) NOT NULL DEFAULT 0,
  `b34` int(1) NOT NULL DEFAULT 0,
  `b35` int(1) NOT NULL DEFAULT 0,
  `b36` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catégori`
--

CREATE TABLE `catégori` (
  `id_sous_rubrique` varchar(4) NOT NULL,
  `id_catégori` varchar(4) NOT NULL,
  `catégori` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catégori`
--

INSERT INTO `catégori` (`id_sous_rubrique`, `id_catégori`, `catégori`) VALUES
('A1', 'A11', 'Edition d’ouvrage, chapitres, polycopiés cours/TD, nouvelle manipulation de TP'),
('A1', 'A12', 'Utilisation des NTIC: (Didacticiel, pages web à caractère pédagogique)'),
('A1', 'A13', 'Autre'),
('A2', 'A21', 'Volume horaire annuel d’enseignement cours/TD/TP (non inclus PFE, SFE et Visites)'),
('A2', 'A22', 'Encadrement des projets et stages de fin d’études, mémoires de fin d’année et travaux de réalisation'),
('A2', 'A23', 'Encadrement de ressources humaines: formations de formateurs, personnel administratif et technique.'),
('A2', 'A24', 'Participation dans des formations universitaires publiques (DUT, DEUG/DEUT, L, Maîtrise, DESS, DESA, M, D) dans d’autres établissements'),
('A2', 'A25', 'Stages de formation pédagogique'),
('A2', 'A26', 'Autre'),
('A3', 'A31', 'Responsabilités administratives (directeur, vice directeur, chargé de mission)'),
('A3', 'A32', 'Responsabilités pédagogiques (chef de département, coordonnateur de filière, responsable de module)'),
('A3', 'A33', 'Elaboration de filière, module'),
('A3', 'A34', 'Organisation de concours'),
('A3', 'A35', 'Responsabilité d’une formation continue diplômante ou qualifiante'),
('A3', 'A36', 'Membre d&#39;une structure universitaire (conseil d’établissement, conseil d’université, commission paritaire,commission scientifique)'),
('A3', 'A37', 'Autre'),
('B1', 'B11', 'Livres, chapitres '),
('B1', 'B12', 'Articles dans des revues spécialisées'),
('B1', 'B13', 'Editions de travaux de recherche (Thèses, dissertations, mémoires) '),
('B1', 'B14', 'Communications dans des actes de congrès '),
('B1', 'B15', 'Mission et participation à une manifestation scientifique '),
('B1', 'B16', 'Autre'),
('B2', 'B21', 'Encadrement et co-encadrement de thèses de doctorat ou d’habilitation'),
('B2', 'B22', 'Encadrement et co-encadrement de travaux de recherche de Master, DESA. et de DESS'),
('B2', 'B23', 'Participation à des jurys de thèses'),
('B2', 'B24', 'Recrutement des enseignants'),
('B2', 'B25', 'Autre'),
('B3', 'B31', 'Responsabilité ou participation à la gestion de laboratoire, unité de recherche, réseau, pôle de compétences, UFR-Doctorat ou UFR- DESA/ DESS'),
('B3', 'B32', 'Projets et contrats de recherche financés'),
('B3', 'B33', 'Expertise et évaluation scientifique nationale et internationale'),
('B3', 'B34', 'Organisation de manifestations scientifiques et techniques en tant que président'),
('B3', 'B35', 'Brevet, prototype, incubation de projet et projet recherche & développement'),
('B3', 'B36', 'Autre');

-- --------------------------------------------------------

--
-- Table structure for table `completer_informations`
--

CREATE TABLE `completer_informations` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `som` varchar(255) NOT NULL,
  `grade` varchar(1) NOT NULL,
  `titre` varchar(4) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completer_informations`
--

INSERT INTO `completer_informations` (`id`, `nom`, `prenom`, `email`, `som`, `grade`, `titre`, `periode`, `nature`) VALUES
(1, 'how', 'are', 'you@gmail.com', 'a som', 'B', 'PH', '2020-2020', 'good nature'),
(2, 'shroude', 'dwight', 'dwight@yahoo.com', 'the som', 'B', 'PH', '2020-2021', 'good nature'),
(3, 'HALBERT', 'Pam Besley', 'pam@yahoo.info', 'Assez', 'D', 'PES', '2009-Pres', 'Tres Lent'),
(4, 'BAD', 'Mclovin', 'Mclovin@yahoo.net', 'Assez Bien', 'B', 'PESA', '1998-2021', 'Lent');

-- --------------------------------------------------------

--
-- Table structure for table `deposer_dossier`
--

CREATE TABLE `deposer_dossier` (
  `id` int(9) NOT NULL,
  `rubrique` varchar(255) NOT NULL,
  `sous_rubrique` varchar(255) NOT NULL,
  `element` varchar(255) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `type_formation` varchar(255) NOT NULL,
  `beneficiares_formation` varchar(255) NOT NULL,
  `annee` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposer_dossier`
--

INSERT INTO `deposer_dossier` (`id`, `rubrique`, `sous_rubrique`, `element`, `intitule`, `type_formation`, `beneficiares_formation`, `annee`) VALUES
(1, 'A-Activités Pedagogiques', 'A3', 'A12', 'my intitule', 'the first type', 'you and you and you', '0000-00-00'),
(2, 'B-Activité de recherche', 'B1', 'B14', 'your intitule', 'the first type', 'him and her', '2020-2021');

-- --------------------------------------------------------

--
-- Table structure for table `dossier`
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
-- Dumping data for table `dossier`
--

INSERT INTO `dossier` (`id`, `email`, `rubrique`, `sous_rubrique`, `catégori`, `element`) VALUES
(24, 'pam@yahoo.info', 'Production pédagogique', 'Encadrement pédagogique', 'Encadrement de ressources humaines: formations de formateurs, personnel administratif et technique.', 'Formation / Encadrement du personnel technique'),
(25, 'mclovin@yahoo.net', 'Production scientifique', 'Encadrement scientifique', 'Participation à des jurys de thèses', 'Membre de jury d’une thèse de Doctorat ou d’Habilitation');

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(2) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `email`, `pdf_file`) VALUES
(18, 'pam@yahoo.info', 'xyz.sql'),
(19, 'pam@yahoo.info', 'page5index.php'),
(20, 'pam@yahoo.info', 'navbar (1).php'),
(21, 'mclovin@yahoo.net', 'xyz.sql');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `rubrique`
--

CREATE TABLE `rubrique` (
  `id_rubrique` int(3) NOT NULL,
  `rubrique` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rubrique`
--

INSERT INTO `rubrique` (`id_rubrique`, `rubrique`) VALUES
(1, 'Activité pédagogique'),
(2, 'Activité de recherche');

-- --------------------------------------------------------

--
-- Table structure for table `sous_rubrique`
--

CREATE TABLE `sous_rubrique` (
  `id_rubrique` int(3) NOT NULL,
  `id_sous_rubrique` varchar(4) NOT NULL,
  `sous_rubrique` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sous_rubrique`
--

INSERT INTO `sous_rubrique` (`id_rubrique`, `id_sous_rubrique`, `sous_rubrique`) VALUES
(1, 'A1', 'Production pédagogique'),
(1, 'A2', 'Encadrement pédagogique'),
(1, 'A3', 'Responsabilités pédagogiques et administratives'),
(2, 'B1', 'Production scientifique'),
(2, 'B2', 'Encadrement scientifique'),
(2, 'B3', 'Responsabilit&eacutes scientifiques');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `nom_utilisateur`, `email`, `mot_de_passe`) VALUES
(6, 'shroude', 'dwight', 'dwight@yahoo.com', 'dwight@yahoo.com', '2dce80ad3ad60a3d3025ecb76b3fbdb7'),
(1, 'halbert', 'jim', 'jimmy', 'jim@yahoo.com', 'iamjim'),
(4, 'rogan', 'jo', 'jojo', 'jo@yahoo.com', 'd0bafb7185f2acfd371c566cbae25af9'),
(0, 'BAD', 'Mclovin', 'mclovin@yahoo.net', 'mclovin@yahoo.net', 'f568935d01347d8ef247082d686bd374'),
(7, 'micheal', 'scott', 'micheal@yahoo.com', 'micheal@yahoo.com', 'ba690d1bf69e86f707a1733094e09c4f'),
(5, 'HALBERT', 'Pam Besley', 'pam', 'pam@yahoo.info', '8dabeee6dd5c9aa24d4323c456c5c0f8'),
(8, 'mimi', 'toto', 'toto@yahoo.com', 'toto@yahoo.com', '5773e3ec8a3079a6765c91499d7b3d53');

-- --------------------------------------------------------

--
-- Table structure for table `élément`
--

CREATE TABLE `élément` (
  `id_catégori` varchar(4) NOT NULL,
  `élément` varchar(300) NOT NULL,
  `code` varchar(4) NOT NULL,
  `point` float NOT NULL,
  `plafond` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `élément`
--

INSERT INTO `élément` (`id_catégori`, `élément`, `code`, `point`, `plafond`) VALUES
('B35', 'Brevet d’invention exploité', 'B351', 4, NULL),
('B35', 'Brevet d’invention non exploité', 'B352', 1, NULL),
('A11', 'Chapitre dans un livre', 'A112', 3, 24),
('B11', 'Chapitre dans un livre [B112]', 'B112', 3, NULL),
('A32', 'Chef de Département', 'A321', 4, 8),
('A36', 'Commission d’étude d’appel d’offres', 'A367', 0.25, 8),
('A36', 'Commission d’évaluation, de réforme ou d’expertise pédagogique, d’équivalence de diplôme ou assimilé', 'A365', 0.5, 8),
('B14', 'Communication dans un congrès international avec comité de lecture et publication d’actes', 'B141', 2, 10),
('B14', 'Communication dans un congrès international avec comité de lecture sans publication d’actes', 'B142', 1.5, 10),
('B14', 'Communication dans un congrès national avec comité de lecture avec publication d’actes', 'B143', 1.5, 10),
('B14', 'Communication dans un congrès national avec comité de lecture sans publication d’actes', 'B144', 1, 10),
('B14', 'Communication par affiche (poster) dans une manifestation internationale', 'B145', 1.5, 10),
('B14', 'Communication par affiche (poster) dans une manifestation nationale', 'B146', 1, 10),
('B14', 'Conférence scientifique dans un cadre autre que congrès, colloque et séminaire', 'B147', 0.5, 10),
('A36', 'Conseil de l’établissement', 'A362', 1, 8),
('A36', 'Conseil de l’université', 'A361', 2, 8),
('A36', 'Coordonnateur de Commissions\r\ndu conseil d\'université', 'A363', 0.5, 8),
('A36', 'Coordonnateur de Commissions du conseil d\'établissement', 'A364', 0.5, 8),
('A35', 'Cycle de formation continue', 'A351', 0.5, 4),
('A33', 'Département', 'A331', 2, 8),
('A12', 'Didacticiels', 'A121', 2, 6),
('A31', 'Directeur Adjoint /Vice-Doyen/ chargé de mission', 'A312', 6, 16),
('A31', 'Directeur ou Doyen', 'A311', 8, 16),
('B21', 'Encadrement de DES', 'B212', 1.25, 10),
('B22', 'Encadrement de DESA, DESS, Master, CEA', 'B221', 1, 8),
('B21', 'Encadrement de Doctorat ou d’habilitation', 'B211', 1.5, 10),
('B33', 'Evaluation de projets de recherche à l’échelle', 'B331', 0.5, 4),
('A36', 'Expertise de dossiers\r\nd’équivalence ou d\'accréditation', 'A366', 0.5, 8),
('A33', 'Filière', 'A332', 2, 8),
('A23', 'Formation / Encadrement du\r\npersonnel administratif', 'A232', 1, 2),
('A23', 'Formation / Encadrement du personnel technique', 'A233', 1, 2),
('A23', 'Formation des formateurs', 'A231', 1, 2),
('B11', 'Livre édité', 'B111', 10, NULL),
('A11', 'Livre entier, auteur unique', 'A111', 10, 24),
('B31', 'Membre actif d’une structure officiellement reconnue', 'B313', 0.5, 10),
('B14', 'Membre de comité de lecture des contributions à une manifestation scientifique', 'B148', 1.5, 10),
('B12', 'Membre de comité de lecture d’une revue', 'B124', 1, 16),
('B31', 'Membre de comité d’organisation d’une structure officiellement reconnue', 'B312', 1, 10),
('B24', 'Membre de jury de recrutement des professeurs assistants', 'B241', 1, 6),
('B23', 'Membre de jury d’une thèse de Doctorat ou d’Habilitation', 'B232', 0.5, 6),
('B14', 'Membre du comité scientifique ou d’organisation d’une manifestation scientifique', 'B149', 1, 10),
('B32', 'Membre d’une équipe d’un projet ou contrat de recherche', 'B322', 0.5, 6),
('B31', 'Membre d’une structure non officielle', 'B315', 0.25, 10),
('B31', 'Membre d’une UFR', 'B316', 1, 10),
('B13', 'Mémoire de Master', 'B132', 1, 4),
('B15', 'Mission de recherche dans un laboratoire de recherche étranger', 'B152', 1, 4),
('A33', 'Module', 'A333', 0.25, 8),
('A11', 'Nouveau polycopié de cours', 'A113', 3, 24),
('A11', 'Nouveau polycopié de TD,TP', 'A114', 2, 2),
('A11', 'Nouvelle manipulation de TP', 'A115', 3, 24),
('B13', 'Obtention de certificat de qualification dans une nouvelle discipline', 'B133', 0.5, 4),
('A34', 'Organisation / réalisation du concours d’entrée à l’ESTC', 'A341', 1, 4),
('A34', 'Organisation / réalisation d’examen de promotion ou concours de recrutement des cadres de l’enseignement', 'A342', 0.25, 4),
('A12', 'Pages web pédagogiques', 'A122', 2, 6),
('B15', 'Participation à un congrès ou séminaire', 'B153', 0.25, 4),
('A22', 'PFE\r\n', 'A221', 0.5, 8),
('B34', 'Président de conférence, colloque ou séminaire', 'B341', 4, 8),
('B15', 'Rapport d’activité de laboratoire ou équipe de recherche', 'B151', 1, 4),
('B23', 'Rapporteur d’une thèse de Doctorat ou de travaux', 'B231', 1, 6),
('B35', 'Réalisation de prototype ou Incubation d’un projet d’invention', 'B353', 4, NULL),
('A32', 'Responsable d’un module', 'A323', 0.25, 8),
('A32', 'Responsable d’un projet ou contrat de recherche financé', 'B321', 1.5, 6),
('A32', 'Responsable d’une Filière', 'A322', 3, 8),
('B31', 'Responsable ou coordonnateur d’une structure non officielle', 'B314', 1, 10),
('B31', 'Responsable ou coordonnateur d’une structure officiellement reconnue', 'B311', 2.5, 10),
('B12', 'Revue internationale spécialisée', 'B121', 4, 16),
('B12', 'Revue nationale à comité de lecture (referees)', 'B122', 1.5, 16),
('B12', 'Revue nationale sans comité de lecture', 'B123', 1, 16),
('A22', 'SFE', 'A222', 0.25, 4),
('A25', 'Stage de perfectionnement à l’étranger', 'A251', 0.5, 4),
('A25', 'Stage ou séminaires de perfectionnement', 'A252', 1, 4),
('B13', 'Thèse de doctorat', 'B131', 2, 4),
('A22', 'Visite', 'A223', 0.5, 4),
('A21', 'Volume horaire annuel moyen équivalent TP,DT de présence de l’enseignant', 'A211', 0.5, NULL),
('A24', 'Volume horaire total', 'A241', 0.25, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie_b1`
--
ALTER TABLE `categorie_b1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_b2`
--
ALTER TABLE `categorie_b2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_b3`
--
ALTER TABLE `categorie_b3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catégori`
--
ALTER TABLE `catégori`
  ADD PRIMARY KEY (`id_catégori`),
  ADD KEY `fk_id_sous_rubrique` (`id_sous_rubrique`);

--
-- Indexes for table `completer_informations`
--
ALTER TABLE `completer_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposer_dossier`
--
ALTER TABLE `deposer_dossier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_email_dossier` (`email`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_email` (`email`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`id_rubrique`);

--
-- Indexes for table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  ADD PRIMARY KEY (`id_sous_rubrique`),
  ADD KEY `fk_id_rubrique` (`id_rubrique`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `nom_utilisateur` (`nom_utilisateur`);

--
-- Indexes for table `élément`
--
ALTER TABLE `élément`
  ADD PRIMARY KEY (`élément`),
  ADD KEY `fk_id_catégorie` (`id_catégori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie_b1`
--
ALTER TABLE `categorie_b1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie_b2`
--
ALTER TABLE `categorie_b2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie_b3`
--
ALTER TABLE `categorie_b3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `completer_informations`
--
ALTER TABLE `completer_informations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deposer_dossier`
--
ALTER TABLE `deposer_dossier`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catégori`
--
ALTER TABLE `catégori`
  ADD CONSTRAINT `fk_id_sous_rubrique` FOREIGN KEY (`id_sous_rubrique`) REFERENCES `sous_rubrique` (`id_sous_rubrique`);

--
-- Constraints for table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  ADD CONSTRAINT `fk_id_rubrique` FOREIGN KEY (`id_rubrique`) REFERENCES `rubrique` (`id_rubrique`);

--
-- Constraints for table `élément`
--
ALTER TABLE `élément`
  ADD CONSTRAINT `fk_id_catégorie` FOREIGN KEY (`id_catégori`) REFERENCES `catégori` (`id_catégori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
