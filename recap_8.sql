-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Juillet 2019 à 16:04
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
  `Libelle` varchar(50) NOT NULL,
  `Diplome` varchar(50) NOT NULL,
  `Salle` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `Libelle`, `Diplome`, `Salle`) VALUES
(1, 'reseau', 'BTS SIO SISR', 'salle 1'),
(2, 'developpement', 'BTS SIO SLAM', 'salle 2');

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

--
-- Contenu de la table `emprunter`
--

INSERT INTO `emprunter` (`id_etudiant`, `id_transport`) VALUES
(1, 2),
(1, 4),
(1, 7);

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `Nom`, `Prenom`, `Date_naiss`, `Email`, `login`, `mdp`, `adresse`, `Roles`, `id_classe`) VALUES
(1, 'ALLALA ', 'Ilyes', '1997-07-16', 'ALLALA.Ilyes@gmail.com', 'Ilyes.A', '1234', '21 Avenue de l?Op?ra 75001 PARIS ', 'Role_Stud', 1),
(2, 'ALMEIDA ', 'Dany', '1996-12-02', 'ALMEIDA.Dany@gmail.com', 'Dany.A', '1234', '95 Boulevard S?bastopol 75002 PARIS ', 'Role_Stud', 1),
(3, 'AMMARI ', 'Adam', '1998-08-06', 'AMMARI.Adam@gmail.com', 'Adam.A', '1234', '15 Boulevard Saint-Denis 75002 PARIS ', 'Role_Stud', 1),
(4, 'AMRAM ', 'Kevin', '1996-07-31', 'AMRAM.Kevin@gmail.com', 'Kevin.A', '1234', '164 rue du Templel  75003 PARIS ', 'Role_Stud', 1),
(5, 'BABA AISSA ', 'Samy', '1999-11-21', 'BABAAISSA.Samy@gmail.com', 'Samy.B', '1234', '71 rue Saint-Antoine 75004 PARIS ', 'Role_Stud', 1),
(6, 'BAROZ ', 'Erwan', '1997-05-07', 'BAROZ.Erwan@gmail.com', 'Erwan.B', '1234', '15 avenue des Gobelins 75005 PARIS ', 'Role_Stud', 1),
(7, 'BASEILY ', 'Mathieu', '1996-08-14', 'BASEILY.Mathieu@gmail.com', 'Mathieu.B', '1234', '24 boulevard Saint-Michel 75006 PARIS ', 'Role_Stud', 1),
(8, 'BERTRAND ', 'Rayane', '1997-10-03', 'BERTRAND.Rayane@gmail.com', 'Rayane.B', '1234', '50 rue de Rennes 75006 PARIS ', 'Role_Stud', 1),
(9, 'BORICAUD ', 'Steeve David', '1999-03-21', 'BORICAUD.Steeve@gmail.com', 'Steeve.B', '1234', '37 rue du Bac 75007 PARIS ', 'Role_Stud', 1),
(10, 'CAROTINE ', 'Thomas', '1997-01-17', 'CAROTINE.Thomas@gmail.com', 'Thomas.C', '1234', '47 boulevard Malesherbes 75008 PARIS ', 'Role_Stud', 1),
(11, 'CHEVREUIL', ' Kevin', '1996-10-09', 'CHEVREUIL.Kevin@gmail.com', 'Kevin.C', '1234', '52 avenue des Champs Elys?es 75008 PARIS ', 'Role_Stud', 1),
(12, 'CIMO ', 'Jean-Baptiste', '1999-12-15', 'CIMO.JB@gmail.com', 'JeanBatiste.C', '1234', '107 rue de la Bo?tie 75008 PARIS ', 'Role_Stud', 1),
(13, 'COHEN ', 'Julien', '1997-04-27', 'COHEN.Julien@gmail.com', 'Julien.C', '1234', '24 boulevard des Italiens 75009 PARIS ', 'Role_Stud', 1),
(14, 'DAIF ', 'Samir', '1996-11-02', 'DAIF.Samir@gmail.com', 'Samir.D', '1234', '52 rue Fontaine 75009 PARIS ', 'Role_Stud', 1),
(15, 'DANIEL ', 'Lukas', '1998-03-09', 'DANIEL?.Lukas@gmail.com', 'Lukas.D', '1234', '56 rue de Caumartin 75009 PARIS ', 'Role_Stud', 1),
(16, 'ETIENNE ', 'Merwan', '1996-09-03', 'ETIENNE.Erwan@gmail.com', 'Merwan.E', '1234', '91 rue du faubourg Saint-Denis 75010 PARIS ', 'Role_Stud', 1),
(17, 'FONSECA ', 'Florian', '1999-05-25', 'FONSECA.Florian@gmail.com', 'Florian.F', '1234', '99 FBG SAINT ANTOINE 75011 PARIS ', 'Role_Stud', 1),
(18, 'GARDELLA', 'Jean Baptiste', '1998-04-12', 'GARDELLA.JB@gmail.com', 'JeanBatiste.G', '1234', '70 fbg du Temple 75011 PARIS ', 'Role_Stud', 1),
(19, 'GOBALAKRISHNAN', 'Sugeven', '1997-08-07', 'GOBALAKRISHNAN.Sugeven@gmail.com', 'Sugeven.G', '1234', '166 avenue Ledru Rollin 75011 PARIS ', 'Role_Stud', 1),
(20, 'HASSANI ', 'Omar', '1999-10-01', 'HASSANI.Omar@gmail.com', 'Omar.H', '1234', '215 rue de Charenton 75012 PARIS ', 'Role_Stud', 1),
(21, 'JORDIER', ' Mikael', '1998-09-21', 'JORDIER.Mikael@gmail.com', 'Mikael.J', '1234', '237 avenue Daumesnil 75012 PARIS ', 'Role_Stud', 1),
(22, 'KEITA ', 'Aboubacar', '0199-08-20', 'KEITA.Aboubacar@gmail.com', 'Aboubacar.K', '1234', '55 rue de Reuilly 75012 PARIS ', 'Role_Stud', 1),
(23, 'LAHEURTE ', 'Cl?ment', '1996-06-17', 'LAHEURTE.Clement@gmail.com', 'Clement.L', '1234', '104 avenue de France 75013 PARIS ', 'Role_Stud', 1),
(24, 'LAURENT', ' Kevin', '1996-04-16', 'LAURENT.Kevin@gmail.com', 'Kevin.L', '1234', '42 rue Daviel 75013 PARIS ', 'Role_Stud', 1),
(25, 'LAZARE ', 'Sofiane', '1997-10-26', 'LAZARE.Sofiane@gmail.com', 'Sofiane.L', '1234', '54 bd de l?H?pital 75013 PARIS ', 'Role_Stud', 1),
(26, 'LESCHIERA ', 'Vincent', '1998-06-03', 'LESCHIERA.Vincent@gmail.com', 'Vincent.L', '1234', '83 av d?Italie 75013 PARIS ', 'Role_Stud', 1),
(27, 'MANAA', ' BahaEddine', '1999-12-05', 'MANAA.BahaEddine@gmail.com', 'BabaEddine.M', '1234', '125, boulevard Vincent Auriol 75013 PARIS ', 'Role_Stud', 1),
(28, 'MECHARLE  ', 'Matthis ', '1996-10-30', 'MECHARLE.Matthis@gmail.com', 'Matthis.M', '1234', '31 rue du D?part 75014 PARIS', 'Role_Stud', 1),
(29, 'MOHAMED ', 'Nawir', '2019-02-12', 'MOHAMED.Nawir@gmail.com', 'Nawir.M', '1234', '92 rue d?Al?sia 75014 PARIS ', 'Role_Stud', 1),
(30, 'MOUSSA ', ' Abdoulhamid', '1999-06-08', 'MOUSSA.Abdoulhamid@gmail.com', 'Abdoulhamid.M', '1234', '117 rue de Losserand 75014 PARIS ', 'Role_Stud', 1),
(31, 'NASRI ', 'Amin', '1996-10-09', 'NASRI.Amin@gmail.com', 'Amin.N', '1234', '129 rue d?Al?sia 75014 PARIS ', 'Role_Stud', 1),
(32, 'PERCHET', 'Nathan', '1998-03-01', 'PERCHET.Nathan@gmail.com', 'Nathan.P', '1234', '8 av du G?n?ral Leclerc 75014 PARIS ', 'Role_Stud', 1),
(33, 'PRIEUX', 'Kevin', '1996-10-04', 'PRIEUX.Kevin@gmail.com', 'Kevin.P', '1234', '19 rue Linois 75015 PARIS ', 'Role_Stud', 1),
(34, 'RODRIGUES ', 'Maxime', '1997-09-06', 'RODRIGUES.Maxime@gmail.com', 'Maxime.R', '1234', '2 rue du Commerce 75015 PARIS ', 'Role_Stud', 1),
(35, 'ROSSI', 'Alexandre', '1996-11-05', 'ROSSI.Alexandre@gmail.com', 'Alexandre.R', '1234', '105 rue de la Convention 75015 PARIS', 'Role_Stud', 1),
(36, 'SAHRAOUI', 'Jawed', '1997-08-17', 'SAHRAOUI.Jawed@gmail.com', 'Jawed.S', '1234', '76 rue Lecourbe 75015 PARIS ', 'Role_Stud', 1),
(37, 'SONNEVILLE VOLTZ ', 'Quentin', '1996-03-15', 'SONNEVILLEVOLTZ.Quentin@gmail.com', 'Quentin.S', '1234', '340 rue Vaugirard 75015 PARIS ', 'Role_Stud', 1),
(38, 'THEVON ', 'Rudy-Paul', '1997-03-19', 'THEVON.Rudy@gmail.com', 'Rudy.T', '1234', '24 Rue des Belles Feuilles 75016 Paris ', 'Role_Stud', 1),
(39, 'AMEGAN ', 'Ruben', '1997-07-16', 'AMEGAN.Ruben@gmail.com', 'Ruben.A', '1234', '18 rue de Passy 75016 PARIS ', 'Role_Stud', 2),
(40, 'AMZIL ', 'Noureddine', '1996-12-02', 'AMZIL.Nourddine@gmail.com', 'Nourdinne.A', '1234', '49 Rue d?Auteuil 75016 PARIS ', 'Role_Stud', 2),
(41, 'ATILGAN ', 'Anais', '1998-08-06', 'ATILGAN.Anais@gmail.com', 'Anais.A', '1234', '15 rue de L?vis 75017 PARIS', ' Role_Stud', 2),
(42, 'AYDOGAN ', 'Lokman', '1996-07-31', 'AYDOGAN.Lokman@gmail.com', 'Lokman.A', '1234', '129 rue des Dames 75017 PARIS ', 'Role_Stud', 2),
(43, 'BEDOT ', 'Brice', '1999-11-21', 'BEDOT.Brice@gmail.com', 'Brice.B', '1234', '43 av de Clichy 75017 PARIS ', 'Role_Stud', 2),
(44, 'BENKHALED ', 'Walid', '1997-05-07', 'BENKHALED.Walid@gmail.com', 'Walid.B', '1234', '25 av des Ternes 75017 PARIS ', 'Role_Stud', 2),
(45, 'BLAT', 'Louis', '1996-08-14', 'BLAT.Louis@gmail.com', 'Louis.B', '1234', '159 rue de Courcelles 75017 PARIS ', 'Role_Stud', 2),
(46, 'BOURIA ', 'Hadia', '1997-10-03', 'BOURIA.Hadia@gmail.com', 'Hadia.B', '1234', '60 BIS rue Marx Dormoy 75018 PARIS ', 'Role_Stud', 2),
(47, 'BRATT ', 'Elio', '1999-03-21', 'BRATT.Eliot@gmail.com', 'Eliot.B', '1234', '32 rue du Poteau 75018 PARIS ', 'Role_Stud', 2),
(48, 'CHAVANNE', 'Marie Camille', '1996-10-02', 'CHAVANNE.MarieCamille@gmail.com', 'Marie.C', '1234', '203 rue Ordener 75018 PARIS ', 'Role_Stud', 2),
(49, 'DA SILVA', 'Brian', '1996-10-09', 'DASILVA.Brian@gmail.com', 'Brian.D', '1234', '119 rue de Flandres 75019 PARIS ', 'Role_Stud', 2),
(50, 'DAGO ', 'Thomas', '1999-12-15', 'DAGO.Thomas@gmail.com', 'Thomas.D', '1234', '118 rue Jean Jaur?s 75019 PARIS', 'Role_Stud', 2),
(51, 'DIALLO', 'Alpha Oumar', '1997-04-27', 'DIALLO.AlphaOumar@gmail.com', 'Alpha.D', '1234', '15 av de Secr?tan 75019 PARIS ', 'Role_Stud', 2),
(52, 'DIAME ', 'Lamine', '1996-11-02', 'DIAME.Lamine@gmail.com', 'Lamine.D', '1234', '9 rue Louise Thuliez 75019 PARIS ', 'Role_Stud', 2),
(53, 'GONCALVES DOS SANTOS ', 'Miguel', '1998-03-09', 'GONCALVES.Miguel@gmail.com', 'Miguel.G', '1234', '133 rue de Belleville 75019 PARIS ', 'Role_Stud', 2),
(54, 'GRIMALDI ', 'Balthazar', '1996-09-03', 'GRIMALDI.Balthazar@gmail.com', 'Balthazar.G', '1234', '131 av Gambetta 75020 PARIS ', 'Role_Stud', 2),
(55, 'KEDDOUH ', 'Salim', '1999-05-25', 'KEDDOUH.Salim@gmail.com', 'Salim.K', '1234', '20 bd de Charonne 75020 PARIS ', 'Role_Stud', 2),
(56, 'LAVIGNE MARBACH ', 'Francois', '1998-04-12', 'LAVIGNE.Francois@gmail.com', 'Francois.L', '1234', '17 rue Scribe 75009 Paris ', 'Role_Stud', 2),
(57, 'LEFEVBRE', 'Kevin', '1997-08-07', 'LEFEVRE.Kevin@gmail.com', 'Kevin.L', '12345', '54 bd de l?H?pital 75013 PARIS ', 'Role_Stud', 2),
(58, 'LUCAZEAU ', 'Josselin', '1999-10-01', 'LACAZEAU.Josselin@gmail.com', 'Josselin.L', '1234', '83 av d?Italie 75013 PARIS ', 'Role_Stud', 2),
(59, 'MARDAY', 'Sendinee', '1998-09-21', 'MARDAY.Sendinee@gmail.com', 'Sendinne.M', '1234', '125, boulevard Vincent Auriol 75013 PARIS ', 'Role_Stud', 2),
(60, 'MARIA ', 'Raphael', '1997-08-20', 'MARIA.Raphael@gmail.com', 'Raphael.M', '1234', '31 rue du D?part 75014 PARIS', 'Role_Stud', 2),
(61, 'MESSACI ', 'Nacim', '1996-06-17', 'MESSACI.Nacim@gmail.com', 'Nacim.M', '1234', '92 rue d?Al?sia 75014 PARIS ', 'Role_Stud', 2),
(62, 'MESSIBAH ', 'Yanis', '1996-04-16', 'MESSIBAH.Yanis@gmail.com', 'Yanis.M', '1234', '117 rue de Losserand 75014 PARIS ', 'Role_Stud', 2),
(63, 'NASRI ', 'Soukaina', '1997-10-26', 'NASRI.Soukaina@gmail.com', 'Soukaina.N', '1234', '129 rue d?Al?sia 75014 PARIS ', 'Role_Stud', 2),
(64, 'NKOUKA FILA MATONDO ', 'Alain', '1998-06-03', 'NKOUKA.Alain@gmail.com', 'Alain.N', '1234', '8 av du G?n?ral Leclerc 75014 PARIS ', 'Role_Stud', 2),
(65, 'PEIXOTO DUARTE ', 'Guillaume', '1999-12-05', 'PEIXOTO.Guillaume@gmail.com', 'Guillaume.P', '1234', '19 rue Linois 75015 PARIS ', 'Role_Stud', 2),
(66, 'PODESTA ', 'Nathan', '1996-10-30', 'PODESTA.Nathan@gmail.com', 'Nathan.P', '1234', '2 rue du Commerce 75015 PARIS ', 'Role_Stud', 2),
(67, 'POMART ', 'Thomas', '2019-02-12', 'POMART.Thomas@gmail.com', 'Thomas.P', '1234', '105 rue de la Convention 75015 PARIS', 'Role_Stud', 2),
(68, 'RADWAN ', 'Ahmed', '1999-06-08', 'RADWAN.Ahmed@gmail.com', 'Ahmed.R', '1234', '76 rue Lecourbe 75015 PARIS ', 'Role_Stud', 2),
(69, 'RAKOTOMALALA ', 'Jennifer', '1996-10-09', 'RAKOTOMALALA.Jennifer@gmail.com', 'Jennifer.R', '1234', '340 rue Vaugirard 75015 PARIS ', 'Role_Stud', 2),
(70, 'REFAI ', 'Mohamed', '1998-03-01', 'REFAI.Mohamed@gmail.com', 'Mohamed.R', '1234', '24 Rue des Belles Feuilles 75016 Paris ', 'Role_Stud', 2),
(71, 'ROBINS ', 'Athira', '1996-10-04', 'ROBINS.Athira@gmail.com', 'Athira.R', '1234', '15 Boulevard Saint-Denis, 75002 PARIS ', 'Role_Stud', 2),
(72, 'SAGNA ', 'Ibrahima', '1997-09-06', 'SAGNA.Ibrahima@gmail.com', 'Ibrahima.S', '1234', '164 rue du Templel, 75003 PARIS ', 'Role_Stud', 2),
(73, 'SIAZON ', 'Joshua', '1996-11-05', 'SIAZON.Joshua@gmail.com', 'Joshua.S', '1234', '71 rue Saint-Antoine, 75004 PARIS ', 'Role_Stud', 2),
(74, 'TANG ', 'Veasna Laurent', '1997-08-17', 'TANG.Veasna@gmail.com', 'Veasna.T', '1234', '15 avenue des Gobelins, 75005 PARIS ', 'Role_Stud', 2),
(75, 'VAZ ', 'Julien', '1996-03-15', 'VAZ.Julien@gmail.com', 'Julien.V', '1234', '24 boulevard Saint-Michel, 75006 PARIS ', 'Role_Stud', 2),
(76, 'WILPERT ', 'Melvin', '1997-03-19', 'WILPERT.Melvin@gmail.com', 'Melvin.W', '1234', '50 rue de Rennes, 75006 PARIS ', 'Role_Stud', 2),
(77, 'ZAIDI ', 'Rayane', '1996-07-03', 'ZAIDI.Rayane@gmail.com', 'Rayane.Z', '1234', '37 rue du Bac, 75007 PARIS ', 'Role_Stud', 2),
(78, 'okacha', 'ben ahmed', '1979-07-10', 'admin@admin.com', 'admin', 'admin', '12 rue clery', 'admin', 2);

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
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL,
  `Valeur` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

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
  `id_transport` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `retard`
--

INSERT INTO `retard` (`Id_retard`, `date`, `duree`, `description`, `id_transport`) VALUES
(10, '2019-07-08', 15, 'Retard de 12 minutes', 3),
(11, '2019-07-08', 20, 'Retard de 15 minutes', 6),
(12, '2019-07-09', 8, 'Retard de 8 minutes', 4),
(13, '2019-07-09', 5, 'Retard de 5 minutes', 5),
(14, '2019-07-08', 18, 'Retard de 18 minutes', 1),
(15, '2019-07-08', 11, 'Retard de 11 minutes', 2),
(16, '2019-07-09', 9, 'Retard de 9 minutes', 7),
(17, '2019-07-08', 13, 'Retard de 13 minutes', 8),
(18, '2019-07-09', 2, 'Retard de 2 minutes', 9);

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
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `NOTE_MATIERE_FK` (`id_matiere`),
  ADD KEY `NOTE_ETUDIANT_FK` (`id_etudiant`);

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
  ADD KEY `fk_moy_de_transport` (`id_transport`);

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
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
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
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `retard`
--
ALTER TABLE `retard`
  MODIFY `Id_retard` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
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
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `NOTE_ETUDIANT_FK` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`),
  ADD CONSTRAINT `NOTE_MATIERE_FK` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`);

--
-- Contraintes pour la table `retard`
--
ALTER TABLE `retard`
  ADD CONSTRAINT `fk_moy_de_transport` FOREIGN KEY (`id_transport`) REFERENCES `moy_de_transport` (`id_transport`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
