-- Supréssion TABLEs if EXISTS
	
	DROP TABLE If Exists Personne;
	DROP TABLE If Exists Auteur;
	DROP TABLE If Exists Intermediaire;
	DROP TABLE If Exists Beneficiaire;
	DROP TABLE If Exists Don;
	DROP TABLE If Exists Joyaux_vaiselle;
	DROP TABLE If Exists Pension;
	DROP TABLE If Exists Vetement_Drap;
	DROP TABLE If Exists Animaux;

-- Création TABLEs

	CREATE TABLE Personne (
		idPersonne Integer PRIMARY KEY,
		nom Varchar(100) not null,
		statut blob );
		
	CREATE TABLE Auteur (
		idAuteur Integer PRIMARY KEY,
		idPersonne Integer not null );
		
	CREATE TABLE Intermediaire (
		idIntermediaire Integer PRIMARY KEY,
		idPersonne Integer not null );
		
	CREATE TABLE Beneficiaire (
		idBeneficiaire Integer PRIMARY KEY,
		idPersonne Integer not null );
		
	CREATE TABLE Don (
		idDon Integer PRIMARY KEY,
		idAuteur Integer not null,
		idIntermediaire Integer,
		idBeneficiaire Integer not null );
		
	CREATE TABLE Pension (
		idP Integer PRIMARY KEY,
		nature blob not null default "Aucune Mention Particulière",
		lieu Varchar(50) not null default "Aucune Mention",
		formes blob not null,
		prix Varchar(200) not null default "Aucune Mention",
		informations Varchar(50) not null,
		sources Varchar(150) not null ) ;
		
	CREATE TABLE Joyaux_vaiselle (
		idJV Integer PRIMARY KEY,
		nature blob not null default "Aucune Mention Particulière",
		lieu Varchar(50) not null default "Aucune Mention",
		poids Varchar(200),
		formes blob not null,
		prix Varchar(200) not null default "Aucune Mention",
		informations Varchar(50) not null,
		sources Varchar(150) not null ) ;
		
	CREATE TABLE Vetement_Drap (
		idVD Integer PRIMARY KEY,
		nature blob not null default "Aucune Mention Particulière",
		lieu Varchar(50) not null default "Aucune Mention",
		formes blob not null,
		prix Varchar(200) not null default "Aucune Mention",
		informations Varchar(50) not null,
		sources Varchar(150) not null ) ;
		
	CREATE TABLE Animaux (
		idA Integer PRIMARY KEY,
		nature blob not null default "Aucune Mention Particulière",
		lieu Varchar(50) not null default "Aucune Mention",
		formes blob not null,
		prix Varchar(200) not null default "Aucune Mention",
		informations Varchar(50) not null,
		sources Varchar(150) not null ) ;
	
	
	
-- Contraintes
	
	-- Clef Etrangères
	
		-- Personnes 
		ALTER TABLE Auteur
		ADD FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne); 
	
		ALTER TABLE Intermediaire
		ADD FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne); 
		
		ALTER TABLE Beneficiaire
		ADD FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne); 
		
		-- Dons
		ALTER TABLE Don
		ADD FOREIGN KEY (idAuteur) REFERENCES Auteur(idAuteur); 
		
		ALTER TABLE Don
		ADD FOREIGN KEY (idIntermediaire) REFERENCES Intermediaire(idIntermediaire);
		
		ALTER TABLE Don
		ADD FOREIGN KEY (idBeneficiaire) REFERENCES Beneficiaire(idBeneficiaire);
		
		ALTER TABLE Pension
		ADD FOREIGN KEY (idP) REFERENCES DOn(idDon);
		
		ALTER TABLE Joyaux_vaiselle
		ADD FOREIGN KEY (idJV) REFERENCES DOn(idDon);
		
		ALTER TABLE Vetement_Drap
		ADD FOREIGN KEY (idVD) REFERENCES DOn(idDon);
		
		ALTER TABLE Animaux
		ADD FOREIGN KEY (idA) REFERENCES DOn(idDon);
