-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Juillet 2019 à 15:22
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `recap`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(11) NOT NULL,
  `Diplome` varchar(50) NOT NULL,
  `Salle` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `Diplome`, `Salle`) VALUES
(1, 'SISR', 'salle 1'),
(2, 'SLAM', 'salle 2');

-- --------------------------------------------------------

--
-- Structure de la table `emplois_du_temps`
--

CREATE TABLE IF NOT EXISTS `emplois_du_temps` (
  `Id_Edt` int(11) NOT NULL,
  `Libelle` varchar(4) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emplois_du_temps`
--

INSERT INTO `emplois_du_temps` (`Id_Edt`, `Libelle`, `id_classe`) VALUES
(1, 'Empl', 2),
(2, 'Empl', 1);

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE IF NOT EXISTS `emprunter` (
  `id_etudiant` int(11) NOT NULL,
  `id_transport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Date_naiss` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `Roles` varchar(50) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

CREATE TABLE IF NOT EXISTS `incident` (
  `id_incident` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_transport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE IF NOT EXISTS `jours` (
  `Id_jours` int(11) NOT NULL,
  `Libelle` varchar(50) NOT NULL,
  `Heure_debut` time NOT NULL,
  `Heure_Fin` time NOT NULL,
  `Id_Edt` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jours`
--

INSERT INTO `jours` (`Id_jours`, `Libelle`, `Heure_debut`, `Heure_Fin`, `Id_Edt`) VALUES
(1, 'Lundi', '00:00:09', '00:00:18', 1),
(2, 'Lundi', '00:00:09', '00:00:18', 2),
(3, 'Mardi', '00:00:09', '00:00:18', 1),
(4, 'Mardi', '00:00:09', '00:00:18', 2);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `coef` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `libelle`, `coef`) VALUES
(1, 'PFSI', 5),
(2, 'ECO', 2),
(3, 'Culture G', 2),
(4, 'Maths', 4),
(5, 'Anglais', 3);

-- --------------------------------------------------------

--
-- Structure de la table `moy_de_transport`
--

CREATE TABLE IF NOT EXISTS `moy_de_transport` (
  `id_transport` int(11) NOT NULL,
  `Type_transport` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_societe` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `moy_de_transport`
--

INSERT INTO `moy_de_transport` (`id_transport`, `Type_transport`, `libelle`, `id_societe`) VALUES
(1, 'RER', 'A', 2),
(2, 'RER', 'B', 2),
(3, 'RER', 'C', 2),
(4, 'METRO', 'Ligne 3', 1),
(5, 'METRO', 'Ligne 1', 1),
(6, 'METRO', 'Ligne 4', 1),
(7, 'BUS', '26', 1),
(8, 'BUS', '46', 1),
(9, 'BUS', '227', 1);

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

CREATE TABLE IF NOT EXISTS `posseder` (
  `id_matiere` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `Annee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `retard`
--

CREATE TABLE IF NOT EXISTS `retard` (
  `Id_retard` int(11) NOT NULL,
  `date` date NOT NULL,
  `duree` float NOT NULL,
  `description` varchar(50) NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `id_incident` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE IF NOT EXISTS `societe` (
  `id_societe` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`id_societe`, `nom`) VALUES
(1, 'RATP'),
(2, 'SNCF');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `emplois_du_temps`
--
ALTER TABLE `emplois_du_temps`
  ADD PRIMARY KEY (`Id_Edt`),
  ADD UNIQUE KEY `Emplois_du_temps_Classe_AK` (`id_classe`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_etudiant`,`id_transport`),
  ADD KEY `Emprunter_Moy_de_Transport_FK` (`id_transport`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `Etudiant_Classe_FK` (`id_classe`);

--
-- Index pour la table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id_incident`),
  ADD KEY `Incident_Moy_de_Transport_FK` (`id_transport`);

--
-- Index pour la table `jours`
--
ALTER TABLE `jours`
  ADD PRIMARY KEY (`Id_jours`),
  ADD KEY `Jours_Emplois_du_temps_FK` (`Id_Edt`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`);

--
-- Index pour la table `moy_de_transport`
--
ALTER TABLE `moy_de_transport`
  ADD PRIMARY KEY (`id_transport`),
  ADD KEY `Moy_de_Transport_Societe_FK` (`id_societe`);

--
-- Index pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD PRIMARY KEY (`id_matiere`,`id_classe`);

--
-- Index pour la table `retard`
--
ALTER TABLE `retard`
  ADD PRIMARY KEY (`Id_retard`),
  ADD KEY `Retard_Incident_FK` (`id_incident`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id_societe`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `emplois_du_temps`
--
ALTER TABLE `emplois_du_temps`
  MODIFY `Id_Edt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `incident`
--
ALTER TABLE `incident`
  MODIFY `id_incident` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `jours`
--
ALTER TABLE `jours`
  MODIFY `Id_jours` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `moy_de_transport`
--
ALTER TABLE `moy_de_transport`
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `retard`
--
ALTER TABLE `retard`
  MODIFY `Id_retard` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id_societe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `emplois_du_temps`
--
ALTER TABLE `emplois_du_temps`
  ADD CONSTRAINT `Emplois_du_temps_Classe_FK` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`);

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `Emprunter_Etudiant_FK` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`),
  ADD CONSTRAINT `Emprunter_Moy_de_Transport_FK` FOREIGN KEY (`id_transport`) REFERENCES `moy_de_transport` (`id_transport`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `Etudiant_Classe_FK` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`);

--
-- Contraintes pour la table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `Incident_Moy_de_Transport_FK` FOREIGN KEY (`id_transport`) REFERENCES `moy_de_transport` (`id_transport`);

--
-- Contraintes pour la table `jours`
--
ALTER TABLE `jours`
  ADD CONSTRAINT `Jours_Emplois_du_temps_FK` FOREIGN KEY (`Id_Edt`) REFERENCES `emplois_du_temps` (`Id_Edt`);

--
-- Contraintes pour la table `moy_de_transport`
--
ALTER TABLE `moy_de_transport`
  ADD CONSTRAINT `Moy_de_Transport_Societe_FK` FOREIGN KEY (`id_societe`) REFERENCES `societe` (`id_societe`);

--
-- Contraintes pour la table `retard`
--
ALTER TABLE `retard`
  ADD CONSTRAINT `Retard_Incident_FK` FOREIGN KEY (`id_incident`) REFERENCES `incident` (`id_incident`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
