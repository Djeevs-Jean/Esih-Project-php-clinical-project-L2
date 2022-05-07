
CREATE DATABASE esiHopital;
use esiHopital;

CREATE TABLE IF NOT EXISTS Patient (
    idPatient INT AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    sexe VARCHAR(8),
    telephone VARCHAR(20),
    adresse VARCHAR(100),
    PRIMARY KEY (idPatient)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Medecin (
    idMedecin INT AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(50),
    sexe VARCHAR(8),
    telephone VARCHAR(255),
    adresse VARCHAR(100),
    email VARCHAR(50),
    specialite VARCHAR(50),
    PRIMARY KEY (idMedecin)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Consultation(
	idconsultation INT AUTO_INCREMENT PRIMARY KEY,
    idMedecin INT,
    idPatient INT,
    poids FLOAT,
    hauteur INT,
    diagnostique TEXT,
    date_Consultation DATE, 

	CONSTRAINT fk_medecin FOREIGN KEY (idMedecin)
	REFERENCES Medecin (idMedecin),
    CONSTRAINT fk_patient FOREIGN KEY (idPatient)
	REFERENCES Patient (idPatient),
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Prescription(
	idPrescription INT AUTO_INCREMENT PRIMARY KEY,
	idConsultation INT,
	prescrire TEXT,

	CONSTRAINT fk_consultationId FOREIGN KEY (IdConsultation)
	REFERENCES Consultation (IdConsultation),
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Dossier(
	code INT AUTO_INCREMENT PRIMARY KEY,
	idConsultation INT,
    Date_enregistrement DATE, 

	CONSTRAINT fk_consultation FOREIGN KEY (IdConsultation)
	REFERENCES Consultation (IdConsultation),
) ENGINE = INNODB;
