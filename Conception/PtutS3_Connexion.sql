
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
    Prenom varchar(50) not null,
    TypeCompte varchar(50) not null);

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`IdCompte`, `Email`, `HashPassword`, `Nom`, `Prenom`, `TypeCompte`) VALUES
(1, 'admin@example.com', '$2y$10$szLhFty5C87V8ACSScacUuH.gNWNd3Xw1s/gTVhJ5SD2oV7oS8wZ2', 'Admin', 'Admin', 'Administrateur'),
(2, 'user@example.com', '$2y$10$l05OoNRlUeNDSvSHSDID0uwzB3cxufKSLWZqZWHC9/WqEAC5.fofi', 'User', 'User', 'Utilisateur');