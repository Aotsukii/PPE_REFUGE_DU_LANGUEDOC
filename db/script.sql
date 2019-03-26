#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: GERANT
#------------------------------------------------------------

CREATE TABLE GERANT(
        id_gerant Int  Auto_increment  NOT NULL
	,CONSTRAINT GERANT_PK PRIMARY KEY (id_gerant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: USER
#------------------------------------------------------------

CREATE TABLE USER(
        id_gerant   Int NOT NULL ,
        id_user     Int NOT NULL ,
        login       Varchar (50) NOT NULL ,
        password    Varchar (50) NOT NULL ,
        mail        Varchar (50) NOT NULL ,
        nom_user    Varchar (50) NOT NULL ,
        prenom_user Varchar (50) NOT NULL
	,CONSTRAINT USER_PK PRIMARY KEY (id_gerant,id_user)

	,CONSTRAINT USER_GERANT_FK FOREIGN KEY (id_gerant) REFERENCES GERANT(id_gerant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FA
#------------------------------------------------------------

CREATE TABLE FA(
        id_gerant      Int NOT NULL ,
        id_fa          Int NOT NULL ,
        type_Logement  Varchar (50) NOT NULL ,
        aChien         Bool NOT NULL ,
        aChat          Bool NOT NULL ,
        aEnfant        Bool NOT NULL ,
        ok_Quarantaine Bool NOT NULL ,
        espace_Dispo   Int NOT NULL ,
        adresse_fa     Varchar (50) NOT NULL ,
        ville_fa       Varchar (50) NOT NULL
	,CONSTRAINT FA_PK PRIMARY KEY (id_gerant,id_fa)

	,CONSTRAINT FA_GERANT_FK FOREIGN KEY (id_gerant) REFERENCES GERANT(id_gerant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MEMBRE
#------------------------------------------------------------

CREATE TABLE MEMBRE(
        id_gerant      Int NOT NULL ,
        id_membre      Int NOT NULL ,
        adresse_membre Varchar (50) NOT NULL ,
        ville_membre   Varchar (50) NOT NULL ,
        Tel            Varchar (50) NOT NULL
	,CONSTRAINT MEMBRE_PK PRIMARY KEY (id_gerant,id_membre)

	,CONSTRAINT MEMBRE_GERANT_FK FOREIGN KEY (id_gerant) REFERENCES GERANT(id_gerant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DON
#------------------------------------------------------------

CREATE TABLE DON(
        id_don      Int  Auto_increment  NOT NULL ,
        montant_don Int NOT NULL ,
        date_don    Date NOT NULL ,
        id_gerant   Int NOT NULL ,
        id_membre   Int NOT NULL
	,CONSTRAINT DON_PK PRIMARY KEY (id_don)

	,CONSTRAINT DON_MEMBRE_FK FOREIGN KEY (id_gerant,id_membre) REFERENCES MEMBRE(id_gerant,id_membre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COLLECTE
#------------------------------------------------------------

CREATE TABLE COLLECTE(
        id_collecte   Int  Auto_increment  NOT NULL ,
        date_collecte Date NOT NULL ,
        lieu_collecte Varchar (300) NOT NULL
	,CONSTRAINT COLLECTE_PK PRIMARY KEY (id_collecte)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: RACE
#------------------------------------------------------------

CREATE TABLE RACE(
        id_race  Int  Auto_increment  NOT NULL ,
        lib_race Varchar (50) NOT NULL
	,CONSTRAINT RACE_PK PRIMARY KEY (id_race)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ANIMAL
#------------------------------------------------------------

CREATE TABLE ANIMAL(
        id_animal          Int  Auto_increment  NOT NULL ,
        nom_animal         Varchar (50) NOT NULL ,
        age_animal         Varchar (50) NOT NULL ,
        sexe_animal        Varchar (50) NOT NULL ,
        description_animal Varchar (300) NOT NULL ,
        ok_chien           Bool NOT NULL ,
        ok_chat            Bool NOT NULL ,
        ok_kids            Bool NOT NULL ,
        prix_adoption      Int NOT NULL ,
        date_creation      Date NOT NULL ,
        race_animal        Varchar (50) NOT NULL ,
        pelage_animal      Varchar (50) NOT NULL ,
        besoinTraitement   Bool NOT NULL ,
        est_chat           Bool NOT NULL ,
        id_gerant          Int NOT NULL ,
        id_gerant_FA       Int ,
        id_fa              Int ,
        id_gerant_MEMBRE   Int NOT NULL ,
        id_membre          Int NOT NULL ,
        id_race            Int NOT NULL
	,CONSTRAINT ANIMAL_PK PRIMARY KEY (id_animal)

	,CONSTRAINT ANIMAL_GERANT_FK FOREIGN KEY (id_gerant) REFERENCES GERANT(id_gerant)
	,CONSTRAINT ANIMAL_FA0_FK FOREIGN KEY (id_gerant_FA,id_fa) REFERENCES FA(id_gerant,id_fa)
	,CONSTRAINT ANIMAL_MEMBRE1_FK FOREIGN KEY (id_gerant_MEMBRE,id_membre) REFERENCES MEMBRE(id_gerant,id_membre)
	,CONSTRAINT ANIMAL_RACE2_FK FOREIGN KEY (id_race) REFERENCES RACE(id_race)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ORGANISER
#------------------------------------------------------------

CREATE TABLE ORGANISER(
        id_collecte Int NOT NULL ,
        id_gerant   Int NOT NULL
	,CONSTRAINT ORGANISER_PK PRIMARY KEY (id_collecte,id_gerant)

	,CONSTRAINT ORGANISER_COLLECTE_FK FOREIGN KEY (id_collecte) REFERENCES COLLECTE(id_collecte)
	,CONSTRAINT ORGANISER_GERANT0_FK FOREIGN KEY (id_gerant) REFERENCES GERANT(id_gerant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PARTICIPER
#------------------------------------------------------------

CREATE TABLE PARTICIPER(
        id_collecte Int NOT NULL ,
        id_gerant   Int NOT NULL ,
        id_membre   Int NOT NULL
	,CONSTRAINT PARTICIPER_PK PRIMARY KEY (id_collecte,id_gerant,id_membre)

	,CONSTRAINT PARTICIPER_COLLECTE_FK FOREIGN KEY (id_collecte) REFERENCES COLLECTE(id_collecte)
	,CONSTRAINT PARTICIPER_MEMBRE0_FK FOREIGN KEY (id_gerant,id_membre) REFERENCES MEMBRE(id_gerant,id_membre)
)ENGINE=InnoDB;

