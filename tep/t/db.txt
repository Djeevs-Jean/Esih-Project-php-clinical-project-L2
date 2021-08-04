
create database esih;

CREATE TABLE Patient (
Idpatient int auto_increment primary key,
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

CREATE TABLE dossier(
no_dossier int auto_increment primary key,
Idpatient int,
FOREIGN KEY (Idpatient) 
    REFERENCES Patient(Idpatient)
)ENGINE=INNODB;

CREATE TABLE Consultation (
Idconsultation int auto_increment primary key,
no_dossier int, 
Idmedecin int(55),
symptome varchar(55),
date_consultation timestamp DEFAULT CURRENT_TIMESTAMP, 
    CONSTRAINT fk_no_dossier
FOREIGN KEY (no_dossier) 
    REFERENCES Dossier(no_dossier),

    CONSTRAINT Idmedecin
FOREIGN KEY (Idmedecin) 
    REFERENCES Medecin(Idmedecin)
)ENGINE=INNODB;

CREATE TABLE Prescription (Idconsultation int,
ordonnance varchar(55), 
    CONSTRAINT fk_Idconsultation
FOREIGN KEY (Idconsultation) 
    REFERENCES Consultation(Idconsultation)
)ENGINE=INNODB;



