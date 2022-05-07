
create database esih_hopital;

CREATE TABLE IF NOT EXISTS Patient (
    idPatient INT AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    sexe VARCHAR(255),
    telephone VARCHAR(255),
    addresse VARCHAR(255),
    PRIMARY KEY (idPatient)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Medecin (
    idMedecin INT AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    sexe VARCHAR(255),
    telephone VARCHAR(255),
    addresse VARCHAR(255),
    email VARCHAR(255),
    specialite VARCHAR(255),
    PRIMARY KEY (idMedecin)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Consultation(
	idconsultation int auto_increment primary key,
    idmedecin int(55),
    idPatient int(55),
    poids float(55),
    hauteur float(55),
    Diagnostique float(55),
    date_consultation timestamp DEFAULT CURRENT_TIMESTAMP, 

	CONSTRAINT fk_medecin FOREIGN KEY (idmedecin)
	REFERENCES Medecin (idmedecin),
    CONSTRAINT fk_patient FOREIGN KEY (idPatient)
	REFERENCES Patient (idPatient),
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Prescription(
	id int auto_increment primary key,
	idConsultation int,
    DateEnregistrement Date, 

	CONSTRAINT fk_consultationId FOREIGN KEY (IdConsultation)
	REFERENCES Consultation (IdConsultation),
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Dossier(
	code int auto_increment primary key,
	idConsultation int,
    DateEnregistrement Date, 

	CONSTRAINT fk_consultation FOREIGN KEY (IdConsultation)
	REFERENCES Consultation (IdConsultation),
) ENGINE = INNODB;

CREATE TABLE Consultation (
    Idconsultation int auto_increment primary key,
    IdPatient int(55),
    Idmedecin int(55),
    poids float(55),
    hauteur float(55),
    DiagnostiqueText float(55),
    date_consultation timestamp DEFAULT CURRENT_TIMESTAMP, 
    CONSTRAINT fk_no_dossier
FOREIGN KEY (no_dossier) 
    REFERENCES IdMedecin(Idedecin),
    REFERENCES Patient(IdPatient),

    CONSTRAINT Idmedecin
FOREIGN KEY (Idmedecin) 
    REFERENCES Medecin(Idmedecin)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Consultation (
    idConsultation INT AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    sexe VARCHAR(255),
    telephone VARCHAR(255),
    addresse VARCHAR(255),
    email VARCHAR(255),
    specialite VARCHAR(255),
    PRIMARY KEY (idConsultation)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS entraineur (
    idEntraineur INT AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    dateNaissance DATE,
    PRIMARY KEY (idEntraineur)
) ENGINE = INNODB;


CREATE TABLE Patient (
    idpatient int auto_increment primary key,
    nom
    Prenom
    Sexe
    Tel
    Address
    nom varchar(55),
    prenom varchar(55),
    sexe varchar(55),
    date_naissance DATE,
    telephone varchar(55),
    adresse varchar(55),
    age int(10),
    nomjeunefillemere varchar(55)
)ENGINE=INNODB;

CREATE TABLE Medecin (
    Idmedecin int auto_increment primary key,
    nom varchar(55),
    prenom varchar(55),
    sexe varchar(55),
    adresse varchar(55),
    telephone varchar(55),
    email varchar(55),
    specialisation varchar(55)
)ENGINE=INNODB;

CREATE TABLE Dossier(
    no_dossier int auto_increment primary key,
    Idpatient int,
    IdConsultation int,
    DateEnregistrement date
FOREIGN KEY (Idpatient) 
    REFERENCES Patient(Idpatient)
    REFERENCES Consultation(IdConsultation)
)ENGINE=INNODB;

CREATE TABLE Consultation (
    Idconsultation int auto_increment primary key,
    no_dossier int, 
    IdPatient int(55),
    Idmedecin int(55),
    symptome varchar(55),
    date_consultation timestamp DEFAULT CURRENT_TIMESTAMP, 
    CONSTRAINT fk_no_dossier
FOREIGN KEY (no_dossier) 
    REFERENCES IdMedecin(Idedecin),
    REFERENCES Patient(IdPatient),

    CONSTRAINT Idmedecin
FOREIGN KEY (Idmedecin) 
    REFERENCES Medecin(Idmedecin)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS participer(
	idMatch INT,
	idListe INT,
	possesionBalle FLOAT,
	idEquipement INT,
	CONSTRAINT fk_matchh FOREIGN KEY (idMatch)
	REFERENCES matchs (idMatch),
	CONSTRAINT fk_lste FOREIGN KEY (idListe)
	REFERENCES liste (idListe),
    CONSTRAINT fk_equipmnt FOREIGN KEY (idEquipement)
	REFERENCES equipement (idEquipement),
    PRIMARY KEY (idMatch,idListe)
) ENGINE = INNODB;

CREATE TABLE Prescription (
    Idconsultation int auto_increment primary key,
    no_dossier int, 
    PrescriptionText Text,
    Idmedecin int(55),
    symptome varchar(55),
    date_consultation timestamp DEFAULT CURRENT_TIMESTAMP, 
    CONSTRAINT fk_no_dossier
FOREIGN KEY (no_dossier) 
    REFERENCES IdMedecin(Idedecin),
    REFERENCES Patient(IdPatient),

    CONSTRAINT Idmedecin
FOREIGN KEY (Idmedecin) 
    REFERENCES Medecin(Idmedecin)
)ENGINE=INNODB;





