Drop Database if exists Recap ;
Create database Recap ;
Use Recap ;

#------------------------------------------------------------
# Table: Classe
#------------------------------------------------------------

CREATE TABLE Classe(
        id_classe Int  Auto_increment  NOT NULL ,
        Diplome   Varchar (50) NOT NULL ,
        Salle     Varchar (50) NOT NULL
	,CONSTRAINT Classe_PK PRIMARY KEY (id_classe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Etudiant
#------------------------------------------------------------

CREATE TABLE Etudiant(
        id_etudiant Int  Auto_increment  NOT NULL ,
        Nom         Varchar (50) NOT NULL ,
        Prenom      Varchar (50) NOT NULL ,
        Date_naiss  Datetime NOT NULL ,
        Email       Varchar (3) NOT NULL ,
        login       Varchar (50) NOT NULL ,
        mdp         Varchar (50) NOT NULL ,
        adresse     Varchar (50) NOT NULL ,
        moyenne     Float NOT NULL ,
        id_classe   Int NOT NULL
	,CONSTRAINT Etudiant_PK PRIMARY KEY (id_etudiant)

	,CONSTRAINT Etudiant_Classe_FK FOREIGN KEY (id_classe) REFERENCES Classe(id_classe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Société
#------------------------------------------------------------

CREATE TABLE Societe(
        id_societe Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL
	,CONSTRAINT Societe_PK PRIMARY KEY (id_societe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Moy de Transport
#------------------------------------------------------------

CREATE TABLE Moy_de_Transport(
        id_transport Int  Auto_increment  NOT NULL ,
        libelle      Varchar (50) NOT NULL ,
        id_societe   Int NOT NULL
	,CONSTRAINT Moy_de_Transport_PK PRIMARY KEY (id_transport)

	,CONSTRAINT Moy_de_Transport_Societe_FK FOREIGN KEY (id_societe) REFERENCES Societe(id_societe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Emplois du temps
#------------------------------------------------------------

CREATE TABLE Emplois_du_temps(
        Id_Edt    Int  Auto_increment  NOT NULL ,
        Libelle   Varchar (4) NOT NULL ,
        id_classe Int NOT NULL
	,CONSTRAINT Emplois_du_temps_PK PRIMARY KEY (Id_Edt)

	,CONSTRAINT Emplois_du_temps_Classe_FK FOREIGN KEY (id_classe) REFERENCES Classe(id_classe)
	,CONSTRAINT Emplois_du_temps_Classe_AK UNIQUE (id_classe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matière
#------------------------------------------------------------

CREATE TABLE Matiere(
        code    Int  Auto_increment  NOT NULL ,
        libelle Varchar (50) NOT NULL ,
        coef    Int NOT NULL
	,CONSTRAINT Matiere_PK PRIMARY KEY (code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Incident
#------------------------------------------------------------

CREATE TABLE Incident(
        id_incident  Int  Auto_increment  NOT NULL ,
        libelle      Varchar (50) NOT NULL ,
        id_transport Int NOT NULL
	,CONSTRAINT Incident_PK PRIMARY KEY (id_incident)

	,CONSTRAINT Incident_Moy_de_Transport_FK FOREIGN KEY (id_transport) REFERENCES Moy_de_Transport(id_transport)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Retard
#------------------------------------------------------------

CREATE TABLE Retard(
        Id_retard   Int  Auto_increment  NOT NULL ,
        date        Date NOT NULL ,
        duree       Float NOT NULL ,
        description Varchar (50) NOT NULL ,
        heure_debut Time NOT NULL ,
        heure_fin   Time NOT NULL ,
        id_incident Int NOT NULL
	,CONSTRAINT Retard_PK PRIMARY KEY (Id_retard)

	,CONSTRAINT Retard_Incident_FK FOREIGN KEY (id_incident) REFERENCES Incident(id_incident)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Jours
#------------------------------------------------------------

CREATE TABLE Jours(
        Id_jours    Int  Auto_increment  NOT NULL ,
        Libelle     Varchar (50) NOT NULL ,
        Heure_debut Time NOT NULL ,
        Heure_Fin   Time NOT NULL ,
        Id_Edt      Int NOT NULL
	,CONSTRAINT Jours_PK PRIMARY KEY (Id_jours)

	,CONSTRAINT Jours_Emplois_du_temps_FK FOREIGN KEY (Id_Edt) REFERENCES Emplois_du_temps(Id_Edt)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Emprunter
#------------------------------------------------------------

CREATE TABLE Emprunter(
        id_etudiant  Int NOT NULL ,
        id_transport Int NOT NULL
	,CONSTRAINT Emprunter_PK PRIMARY KEY (id_etudiant,id_transport)

	,CONSTRAINT Emprunter_Etudiant_FK FOREIGN KEY (id_etudiant) REFERENCES Etudiant(id_etudiant)
	,CONSTRAINT Emprunter_Moy_de_Transport0_FK FOREIGN KEY (id_transport) REFERENCES Moy_de_Transport(id_transport)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Posseder
#------------------------------------------------------------

CREATE TABLE Posseder(
        code      Int NOT NULL ,
        id_classe Int NOT NULL ,
        Annee     Varchar (50) NOT NULL
	,CONSTRAINT Posseder_PK PRIMARY KEY (code,id_classe)
	)ENGINE=InnoDB;