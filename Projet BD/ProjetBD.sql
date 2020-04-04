USE test;
Drop table if exists Realise;
Drop table if exists EstMechant;
Drop table if exists EstGentil;
Drop table if exists Personne;
Drop table if exists Exploit;
Drop table if exists MECHANT;
Drop table if exists GENTIL;

Create Table Personne (
		idPersonne integer primary key,
        Nom varchar(80),
        Prenom varchar(80)
);

Create Table Exploit(
		idEpx integer primary key,
        Titre varchar(80),
        Detail text
);

Create Table MECHANT(
		idMechant integer primary key,
        NomM varchar(80)
);

Create Table GENTIL(
		idHero integer primary key,
        NomG varchar(80)
);

Create Table Realise(
		idPersonne integer,
        idExp integer,
        DateEvenement date,
		PRIMARY KEY (idPersonne,idExp),
        CONSTRAINT FK_PersonneToExploit FOREIGN KEY (idPersonne)
		REFERENCES Personne(idPersonne),
        CONSTRAINT FK_ExploitToPersonne FOREIGN KEY (idEpx)
		REFERENCES Exploit(idEpx)
);

Create Table EstMechant (
		idMechant integer,
        idPersonne integer,
        PRIMARY KEY (idMechant,idPersonne),
        CONSTRAINT FK_MechantToPersonne FOREIGN KEY (idMechant)
		REFERENCES MECHANT(idMechant),
        CONSTRAINT FK_PersonneToMechant FOREIGN KEY (idPersonne)
		REFERENCES Personne(idPersonne)
        
);

Create Table EstGentil (
		idHero integer,
        idPersonne integer,
        PRIMARY KEY (idHero,idPersonne),
        CONSTRAINT FK_GentilToPersonne FOREIGN KEY (idHero)
		REFERENCES GENTIl(idHero),
        CONSTRAINT FK_PersonneToGentil FOREIGN KEY (idPersonne)
		REFERENCES Personne(idPersonne)
)

