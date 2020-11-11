
-- Création BDD
	-- drop if exist
		DROP SCHEMA IF EXISTS PtutS3_Connexion;
		
	-- Création schema
		Create Schema PtutS3_Connexion;

	-- Use Schema
	Use PtutS3_Connexion; 
	
-- Supression TABLE if EXISTS
	
	DROP TABLE If Exists Compte;
    
-- Création des tables	
    CREATE TABLE Compte (
    IdCompte integer(10) primary key not null auto_increment,
    Email varchar(255) not null unique,
    HashPassword varchar(255) not null,
    Nom varchar(50) not null,
    Prénom varchar(50) not null,
    TypeCompte varchar(50) not null);