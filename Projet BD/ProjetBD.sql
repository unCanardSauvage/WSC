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

/*remplissage table personne*/
insert into Personne values (1,'Parker', 'Peter',1);
insert into Personne values (2,'White', 'Jack',NULL);
insert into Personne values (3,'Lehnsher', 'Erik',2);
insert into Personne values (4,'Stark','Tony',NULL);
insert into Personne values (5,'Rogers','Steve',3);
insert into Personne values (6,'Kyle','Selia',NULL);
insert into Personne values (7,'Fischer','Rhonda',5);
insert into Personne values (8,'Jetton','Jason',4);
insert into Personne values (9,'Dias Sousa','Gilhermes',7);
insert into Personne values (10,'Azevedo Barbosa','Maria',9);
insert into Personne values (11,'Fernandes Cavalcanti','Davi',10);
insert into Personne values (12,'Minami','Hoshiko',8);
insert into Personne values (13,'Gatou','Nijiyo',12);
insert into Personne values (14,'Kazakova','Hedwig',9);
insert into Personne values (15,'Michalski','Janek',4);
insert into Personne values (16,'Zielinska','Jowita',11);
insert into Personne values (17,'Olsezewska','Waleria',9);
insert into Personne values (18,'Pogrovski','Ivan',6);
insert into Personne values (19,'Kalinin','Josef',13);
insert into Personne values (20,'Girard','Hedwig',5);
insert into Personne values (21,'Nazirah Najjar','Yafiah',6);

/*remplissage table superpouvoir*/
insert into SuperPouvoir values (1,'Pouvoir de l araignée');
insert into SuperPouvoir values (2,'Contrôle des champs magnétique');
insert into SuperPouvoir values (3,'super sérum');
insert into SuperPouvoir values (4,'Vitesse super sonique');
insert into SuperPouvoir values (5,'Force de baleine bleue');
insert into SuperPouvoir values (6,'voler (mais que des sacs à main)');
insert into SuperPouvoir values (7,'Super bond');
insert into SuperPouvoir values (8,'Vision atypique (myopie sévère)');
insert into SuperPouvoir values (9,'Invisibilité');
insert into SuperPouvoir values (10,'Regénération');
insert into SuperPouvoir values (11,'Camouflage');
insert into SuperPouvoir values (12,'Résistance ultra-résistante');
insert into SuperPouvoir values (13,'Intelligence Hippopotomonstrosesquippedaliophobique');

/*remplissage table exploit*/
insert into Exploit values (1,'A troué ses chaussettes pendant son enfance à l\' âge de 9 ans.','Rien à ajouter');
insert into Exploit values (2,'A mangé sa ratatouille pas bonne de la cantine.','Satisfait ou remboursé. Dans ce cas, plutot satisfait.');
insert into Exploit values (3,'A sauvé 500 personnes.','A épargné 486 personnes du concert d\'Aya Nakamura en sabotant la sono.');
insert into Exploit values (4,'A arrêté Ivan Pogrovski à temps.','En effet, Pogrovski allait mettre de l\'ananas sur sa pizza.');
insert into Exploit values (5,'A détruit la tour Eiffel car Jowita Zielinska a acheté l\'intégralité des terrains en Allemagne.','Après que Jowita ait construit un hotel sur Kurfünrstendamm ainsi que quatre maisons sur Königsallee au Monopoly. Le pauvre pion représentant la tour Eiffel fut malheureusement écrasé violemment sous une chaussure.');
insert into Exploit values (6,'A réduit en bouillie son pire ennemi.','En effet, le frommage commençait à avoir une odeur pestilentielle. La situation devenait insupportable.');
insert into Exploit values (7,'Est allé plus vite que la lumière.','La lumière étant le surnom de son chien.');
insert into Exploit values (8,'A traversé l\'Atlantique à pied.','L\'Atlantique est en fait le surnom donné à la rivière non loin de son village en l\'honneur des plages fraîches des étés bretons...');
insert into Exploit values (9,'Est allé cinéma pour rétablir la justice.','En effet, cet anarchique à caché sa bouteille de solution aqueuse pétillante au fond de son sac. A bas le capitalisme.');
insert into Exploit values (10,'A écrasé entre ses doigts l\'animal le plus dangereux de la planète Terre.','En effet, il est connu que le moustique est l\'animal le plus dangeureux de la planète avec des milliers de victimes par ans, beaucoup plus que les noix de coco et les chats.');
insert into Exploit values (11,' A percuté la planète à plus de 100 km/h.','Cet exploit, malgré lui, l\'a mené à un decès tragique car son parachute ne s\'est pas ouvert.');
insert into Exploit values (12,' A détruit l\'Empire State building.','N\'a-t-il pas été détruit le 11 septembre 2002 ? Mensonges ! Conspiration ! Complot ! Illuminatis !!!!!');
insert into Exploit values (13,'Sauvetage de Félix','Sauvetage du chat de Madame jacline');

/*remplissage table realise*/
insert into Realise values (9,1,08/03/14);
insert into Realise values (17,2,16/08/95);
insert into Realise values (12,3,05/02/19);
insert into Realise values (10,4,13/06/08);
insert into Realise values (20,5,24/12/16);
insert into Realise values (7,6,21/12/12);
insert into Realise values (8,7,11/01/03);
insert into Realise values (14,8,05/09/89);
insert into Realise values (13,9,19/04/13);
insert into Realise values (18,10,23/05/12);
insert into Realise values (15,11,27/06/14);
insert into Realise values (19,12,29/02/20);
insert into Realise values (3,12,23/02/1972);
insert into Realise values (1,13,14/3/2008);

/*remplissage table gentil*/
insert into Gentil values (1,'SuperOdeur');
insert into Gentil values (2,'SuperRapid');
insert into Gentil values (3,'SuperNutri');
insert into Gentil values (4,'SuperCamel');
insert into Gentil values (5,'SuperMyope');
insert into Gentil values (6,'SuperGatou');
insert into Gentil values (7,'Nageoiruss');
insert into Gentil values (8,'SuperSanté');
insert into Gentil values (9,'Spiderman');
insert into Gentil values (10,'Iron Man');
insert into Gentil values (11,'Captain America');

/*remplissage table estgentil*/
insert into EstGentil values (1,12);
insert into EstGentil values (2,8);
insert into EstGentil values (3,10);
insert into EstGentil values (4,11);
insert into EstGentil values (5,12);
insert into EstGentil values (6,13);
insert into EstGentil values (7,14);
insert into EstGentil values (8,17);
insert into EstGentil values (9,1);
insert into EstGentil values (10,4);
insert into EstGentil values (11,5);

/*remplissage table Mechant*/
insert into Mechant values (1,'Chaussettosaure');
insert into Mechant values (2,'Percuteurosorus');
insert into Mechant values (3,'HyperEcrazatorr');
insert into Mechant values (4,'VolataurDeSacus');
insert into Mechant values (5,'Anéantissefakus');
insert into Mechant values (6,'HyperDestructor');
insert into Mechant values (7,'Anarchissoidale');
insert into Mechant values (8,'Le Joker');
insert into Mechant values (9,'Magneto');
insert into Mechant values (10,'Catwoman');

/*remplissage table estMechant*/
insert into EstMechant values (1,9);
insert into EstMechant values (2,15);
insert into EstMechant values (3,16);
insert into EstMechant values (4,18);
insert into EstMechant values (5,19);
insert into EstMechant values (6,20);
insert into EstMechant values (7,21);
insert into EstMechant values (8,2);
insert into EstMechant values (9,3);
insert into EstMechant values (10,6);

#1:Requette qui affiche tout les surnoms des super-heros $
#select NomG from Gentil;

#2:Affiche les super heros $
#Select nom,Prenom from Personne Natural Join EstGentil;

#3:Affiche toute les personnes avec un pouvoir $
#Select prenom,nom,NomP from Personne Natural Join SuperPouvoir;

#Affiche tout les expoits d'une personne
#Select 

#Affiche tout les participants d'un exploit
#Select Nom,Prenom From Personne inner join Realise on Personne.idPersonne = 

#Affiche les nom et surnoms des supers vilain 
#Select nom,Prenom,NomM from personne inner join EstMechant on personne.idPersonne = EstMechant.idPersonne inner join Mechant on EstMechant.idMechant = Mechant.idMechant;