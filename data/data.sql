create database exams3;
use exams3;

create table exams3_variete(
    idVariete int auto_increment,
    nomVariete varchar(50),
    occupation decimal(10,2),
    rendement decimal(10,2),
    primary key(idVariete)
)ENGINE=InnoDB;

create table exams3_parcelle(
    idParcelle int auto_increment,
    surface decimal(10,2),
    idVariete int,
    primary key(idParcelle),
    foreign key (idVariete) references exams3_variete(idVariete)
) ENGINE=InnoDB ;

create table exams3_cueilleur(
    idCueilleur int auto_increment,
    nomCueilleur varchar(100),
    genre varchar(10),
    dateNaissance date,
    primary key(idCueilleur)
) ENGINE=InnoDB;

create table exams3_user(
    idUser int auto_increment,
    nomUser varchar(100),
    mdp varchar(40),
    primary key(idUser)
)ENGINE=InnoDB;

create table exams3_salaire(
    prix decimal(10,2)
)ENGINE=InnoDB;

create table exams3_categorie_depense(
    idCategorie int auto_increment,
    nomCategorie varchar(100),
    primary key(idCategorie)
)ENGINE=InnoDB;

create table exams3_cueillette(
    idCueillette int auto_increment,
    dateCueillette date,
    idCueilleur int,
    idParcelle int,
    poids decimal(10,2),
    primary key(idCueillette),
    foreign key (idCueilleur) references exams3_cueilleur(idCueilleur),
    foreign key (idParcelle) references exams3_parcelle(idParcelle)
)ENGINE=InnoDB;

create table exams3_depense(
    idDepense int auto_increment,
    dateDepense date,
    idCategorie int,
    montant decimal(10,2),
    primary key(idDepense),
    foreign key (idCategorie) references exams3_categorie_depense(idCategorie)
)ENGINE=InnoDB;


/* Vue */
create or replace view exams3_v_parcelle_variete as
select
parcelle.idParcelle,
parcelle.surface,
variete.*
from exams3_parcelle parcelle 
join exams3_variete variete on parcelle.idVariete = variete.idVariete;

create or replace view exams3_v_cueillette as
select
cueillette.*,
parcelle.surface,
parcelle.idVariete,
cueilleur.nomCueilleur,
cueilleur.genre,
cueilleur.dateNaissance
from exams3_cueillette cueillette 
join exams3_cueilleur cueilleur on cueillette.idCueilleur = cueilleur.idCueilleur
join exams3_parcelle parcelle on cueillette.idParcelle =  parcelle.idParcelle;


create or replace view exams3_v_depense as
select
depense.*,
categorie.nomCategorie
from exams3_depense depense 
join exams3_categorie_depense categorie on depense.idCategorie = categorie.idCategorie;



/* Data test */

INSERT INTO exams3_user VALUES(null,"Diary","Diary1"); /* admin */
INSERT INTO exams3_user VALUES(null,"Fihobiana","Fihobiana1");
INSERT INTO exams3_user VALUES(null,"Antema","Antema1");

INSERT INTO exams3_variete VALUES(null,"Tisane",1.8,5);
INSERT INTO exams3_variete VALUES(null,"vert",1.5,10);
INSERT INTO exams3_variete VALUES(null,"noir",1.8,5);

INSERT INTO exams3_parcelle VALUES(null,2,1);
INSERT INTO exams3_parcelle VALUES(null,3,2);
INSERT INTO exams3_parcelle VALUES(null,2.5,3);

INSERT INTO exams3_cueilleur VALUES(null,"Ryan","Masculin","2003-03-06");
INSERT INTO exams3_cueilleur VALUES(null,"Malko","Masculin","2004-09-15");
INSERT INTO exams3_cueilleur VALUES(null,"Miora","Feminin","2006-10-07");

INSERT INTO exams3_categorie_depense VALUES(null,"Carburant"); 
INSERT INTO exams3_categorie_depense VALUES(null,"engrais");
INSERT INTO exams3_categorie_depense VALUES(null,"logistique");

INSERT INTO exams3_salaire VALUES (25000);





