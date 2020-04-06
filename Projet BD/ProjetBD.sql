USE test;
Drop table if exists Realise;
Drop table if exists EstMechant;
Drop table if exists EstGentil;
Drop table if exists Personne;
Drop table if exists Exploit;
Drop table if exists MECHANT;
Drop table if exists GENTIL;
Drop table if exists SuperPouvoir;

Create Table Personne (
		idPersonne integer primary key,
        Nom varchar(80),
        Prenom varchar(80),
        idPouvoir integer references SuperPouvoir(idPouvoir)
);

Create Table Exploit(
		idExp integer primary key,
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

Create Table SuperPouvoir(
		idPouvoir integer primary key,
        NomP varchar(250)
);

Create Table Realise(
		idPersonne integer,
        idExp integer,
        DateEvenement date,
		PRIMARY KEY (idPersonne,idExp),
        CONSTRAINT FK_PersonneToExploit FOREIGN KEY (idPersonne)
		REFERENCES Personne(idPersonne),
        CONSTRAINT FK_ExploitToPersonne FOREIGN KEY (idExp)
		REFERENCES Exploit(idExp)
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
);


insert into Personne values (1,'Parker', 'Peter',1);
insert into Personne values (2,'White', 'Jack',0);
insert into Personne values (3,'Lehnsher', 'Erik',2);

insert into Gentil values (1,'Spider-Man');

insert into EstGentil values (1,1);

insert into Mechant values (1,'Le Joker');
insert into Mechant values (2,'Magneto');

insert into EstMechant values (1,2);
insert into EstMechant values (2,3);

insert into SuperPouvoir values (0,' ');
insert into SuperPouvoir values (1,'Pouvoir de l araignée');
insert into SuperPouvoir values (2,'Contrôle des champs magnétique');

insert into Exploit values (1,'Destruction de l empire state building','texte descriptif');

insert into Realise values (3,1,23/02/1972);


