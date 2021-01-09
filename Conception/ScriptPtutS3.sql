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

	CREATE TABLE `calendrier` (
	  `dateDon` date PRIMARY KEY NOT NULL
	);
	
	
	CREATE TABLE `don` (
	  `idDon` int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	  `forme` text NOT NULL,
	  `nature` text NOT NULL,
	  `prix` varchar(200) NOT NULL DEFAULT 'Aucune Mention',
	  `typeDon` varchar(25) NOT NULL,
	  `dateDon` date DEFAULT NULL,
	  `idAuteur` int(10) NOT NULL,
	  `idBeneficiaire` int(10) NOT NULL,
	  `emplacement` varchar(25) NOT NULL,
	  `sourceDon` varchar(150) NOT NULL,
	  `idPoids` int(10) NOT NULL
	);

	CREATE TABLE `intermediaire` (
	  `idDon` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	  `idIntermediaire` int(10) NOT NULL
	) ;


	CREATE TABLE `lieu` (
	  `emplacement` varchar(25) PRIMARY KEY NOT NULL DEFAULT 'Aucune Mention'
	) ;
	
	CREATE TABLE `personne` (
	  `idPersonne` int(10) PRIMARY KEY NOT NULL,
	  `nom` varchar(100) NOT NULL,
	  `fonction` varchar(255) NOT NULL
	) ;
	
	
	CREATE TABLE `poids` (
	  `idPoids` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	  `masse` text NOT NULL
	) ;
	
	
	CREATE TABLE `sourcedon` (
	  `recherche` varchar(150) PRIMARY KEY NOT NULL
	) ;
	
	CREATE TABLE `statut` (
	  `fonction` varchar(255) PRYMARY KEY NOT NULL
	);
	
	
	CREATE TABLE `typedon` (
	  `typedon` varchar(25) PRIMARY KEY NOT NULL
	);
	
-- Clef étrangères


	-- DON
	ALTER TABLE `don`
	  ADD FOREIGN KEY (`typeDon`) REFERENCES `typedon` (`typedon`),
	  ADD FOREIGN KEY (`dateDon`) REFERENCES `calendrier` (`dateDon`),
	  ADD FOREIGN KEY (`idAuteur`) REFERENCES `personne` (`idPersonne`),
	  ADD FOREIGN KEY (`idBeneficiaire`) REFERENCES `personne` (`idPersonne`),
	  ADD FOREIGN KEY (`emplacement`) REFERENCES `lieu` (`emplacement`),
	  ADD FOREIGN KEY (`sourceDon`) REFERENCES `sourcedon` (`recherche`),
	  ADD FOREIGN KEY (`idPoids`) REFERENCES `poids` (`idPoids`);

	-- INTERMEDIAIRE
	ALTER TABLE `intermediaire`
	  ADD FOREIGN KEY (`idDon`) REFERENCES `don` (`idDon`),
	  ADD FOREIGN KEY (`idIntermediaire`) REFERENCES `personne` (`idPersonne`);

	--PERSONNE
	ALTER TABLE `personne`
	  ADD FOREIGN KEY (`fonction`) REFERENCES `statut` (`fonction`);
