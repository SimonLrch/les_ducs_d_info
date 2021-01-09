/* 
-- Création BDD
	-- drop if exist
		DROP SCHEMA IF EXISTS PtutS3;
		
	-- Création schema
		Create Schema PtutS3;

	-- Use Schema
	Use PtutS3; */
	
-- Supression TABLES if EXISTS
	
	DROP TABLE If Exists Intermediaire;
    DROP TABLE If Exists Don;
    DROP TABLE If Exists Personne;
	DROP TABLE If Exists Statut;
	DROP TABLE If Exists Calendrier;
	DROP TABLE If Exists TypeDon;
	DROP TABLE If Exists Lieu;
	DROP TABLE If Exists Poids;
	DROP TABLE If Exists SourceDon;	

-- Création TABLES

	CREATE TABLE Personne (
	idPersonne integer(10) primary key not null auto_increment,
	nom varchar(100) not null,
	fonction varchar(255) not null);
	
	CREATE TABLE Statut (
	fonction varchar(255) primary key not null);
	
	CREATE TABLE Calendrier(
	dateDon date primary key not null);
	
	CREATE TABLE TypeDon (
	typedon varchar(25) primary key not null);
	
	CREATE TABLE Lieu (
	emplacement varchar(25) primary key not null default "Aucune Mention");
	
	CREATE TABLE Poids (
	idPoids integer(10) primary key not null auto_increment,
    masse text not null);
	
	CREATE TABLE SourceDon (
	recherche varchar(150) primary key not null);
	
	CREATE TABLE Don(
	idDon integer(10) primary key not null auto_increment,
	forme text not null,
	nature text not null,
	prix varchar(200) not null default "Aucune Mention",
	typeDon varchar(25) not null,
	dateDon date,
	idAuteur integer(10) not null,
	idBeneficiaire integer(10) not null,
	emplacement varchar(25) not null,
	sourceDon varchar(150) not null,
	idPoids integer(10) not null);
	
	
	CREATE TABLE Intermediaire (
	idDon integer(10) not null,
	idIntermediaire integer(10) not null);
	
-- Contraintes
	
	-- Clef Primaire
	
	ALTER TABLE Intermediaire
	ADD PRIMARY KEY (idDon, idIntermediaire); 
	
	-- Clef Etrangères
	
	-- Personne
	ALTER TABLE Personne
	ADD FOREIGN KEY (fonction) REFERENCES Statut(fonction); 
	
	-- Don
	ALTER TABLE Don
	ADD FOREIGN KEY (typeDon) REFERENCES TypeDon(typeDon); 
	
	ALTER TABLE Don
	ADD FOREIGN KEY (dateDon) REFERENCES Calendrier(dateDon);
	
	ALTER TABLE Don
	ADD FOREIGN KEY (idAuteur) REFERENCES Personne(idPersonne);
	
	ALTER TABLE Don
	ADD FOREIGN KEY (idBeneficiaire) REFERENCES Personne(idPersonne);
	
	ALTER TABLE Don
	ADD FOREIGN KEY (emplacement) REFERENCES Lieu(emplacement);
	
	ALTER TABLE Don
	ADD FOREIGN KEY (sourceDon) REFERENCES SourceDon(recherche);
	
	ALTER TABLE Don
    ADD FOREIGN KEY (idPoids) REFERENCES Poids(idPoids);
	
	
	-- Intermediaire
	ALTER TABLE Intermediaire
	ADD FOREIGN KEY (idDon) REFERENCES Don(idDon); 
	
	ALTER TABLE Intermediaire
	ADD FOREIGN KEY (idIntermediaire) REFERENCES Personne(idPersonne);
	
	