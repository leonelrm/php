DROP DATABASE IF EXISTS DB_MONUMENT;

CREATE DATABASE DB_MONUMENT;

USE DB_MONUMENT;

CREATE TABLE Monument (
    ID_Monument INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Nom_Monument VARCHAR(30) NOT NULL unique,
    Arrondissement_Monument INT(2) NOT NULL,
    Adresse_Monument VARCHAR(150) NOT NULL,
    Site_Web_Monument VARCHAR(100) NOT NULL,
    date_creation date not null,    
    FK_ID_TYPE_MONUMENT INT(5)
)ENGINE=InnoDB;


CREATE TABLE TYPE_Monument (
    ID_TYPE_Monument INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Libelle_TYPE_Monument VARCHAR(50) unique NOT NULL check(Libelle_TYPE_Monument<>"")
)ENGINE=InnoDB;


CREATE TABLE Station (
    ID_Station INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Nom_Station VARCHAR(50) NOT NULL unique
)ENGINE=InnoDB;


CREATE TABLE LIGNE_METRO (
    ID_LIGNE_METRO INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Numero_LIGNE_METRO INT(2),
    Nom_LIGNE_METRO VARCHAR(50)
)ENGINE=InnoDB;


CREATE TABLE DESSERVIR (
    ID_DESSERVIR INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FK_ID_Monument INT(5),
    FK_ID_Station INT(5)
)ENGINE=InnoDB;
 
 
CREATE TABLE AVOIR (
    ID_AVOIR INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FK_ID_Station INT(5),
    FK_ID_LIGNE_METRO INT(5)
)ENGINE=InnoDB;


CREATE TABLE UTILISATEURS (
    ID_UTILISATEUR INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    EMAIL_UTILIZATEUR VARCHAR(255) not null unique,
     mdp_utilisateur VARCHAR(255) not null,
     type_utilisateur CHAR(03) NOT NULL
)ENGINE=InnoDB;
 
 
ALTER TABLE Monument
ADD CONSTRAINT FK_TYPE_MONUMENT
FOREIGN KEY (FK_ID_TYPE_MONUMENT) REFERENCES TYPE_MONUMENT(ID_TYPE_Monument);

ALTER TABLE DESSERVIR
ADD CONSTRAINT FK_DESSERVIR_ID_MONUMENT
FOREIGN KEY (FK_ID_MONUMENT) REFERENCES Monument(ID_Monument);

ALTER TABLE DESSERVIR
ADD CONSTRAINT FK_DESSERVIR_ID_Station
FOREIGN KEY (FK_ID_Station) REFERENCES Station(ID_Station);

ALTER TABLE AVOIR
ADD CONSTRAINT FK_AVOIR_ID_Station 
FOREIGN KEY (FK_ID_Station) REFERENCES Station(ID_Station);

ALTER TABLE AVOIR 
ADD CONSTRAINT FK_AVOIR_ID_LIGNE_METRO
FOREIGN KEY (FK_ID_LIGNE_METRO) REFERENCES LIGNE_METRO(ID_LIGNE_METRO);

