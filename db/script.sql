#------------------------------------------------------------
#        Script MySQL.
#----------------------------------------------------------


#------------------------------------------------------------
# Table: USER
#------------------------------------------------------------

CREATE TABLE USER(
        id_user      Int  Auto_increment  NOT NULL ,
        mail         Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        nom_user     Varchar (50) NOT NULL ,
        prenom_user  Varchar (50) NOT NULL ,
        adresse_user Varchar (50) NOT NULL ,
        ville_user   Varchar (50) NOT NULL ,
        tel_user     Varchar (50) NOT NULL
	,CONSTRAINT USER_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: GERANT
#------------------------------------------------------------

CREATE TABLE GERANT(
        id_user      Int NOT NULL ,
        mail         Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        nom_user     Varchar (50) NOT NULL ,
        prenom_user  Varchar (50) NOT NULL ,
        adresse_user Varchar (50) NOT NULL ,
        ville_user   Varchar (50) NOT NULL ,
        tel_user     Varchar (50) NOT NULL
	,CONSTRAINT GERANT_PK PRIMARY KEY (id_user)

	,CONSTRAINT GERANT_USER_FK FOREIGN KEY (id_user) REFERENCES USER(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FA
#------------------------------------------------------------

CREATE TABLE FA(
        id_user        Int NOT NULL ,
        type_Logement  Varchar (50) NOT NULL ,
        aChien         Bool NOT NULL ,
        aChat          Bool NOT NULL ,
        aEnfant        Bool NOT NULL ,
        ok_Quarantaine Bool NOT NULL ,
        espace_Dispo   Int NOT NULL ,
        mail           Varchar (50) NOT NULL ,
        password       Varchar (50) NOT NULL ,
        nom_user       Varchar (50) NOT NULL ,
        prenom_user    Varchar (50) NOT NULL ,
        adresse_user   Varchar (50) NOT NULL ,
        ville_user     Varchar (50) NOT NULL ,
        tel_user       Varchar (50) NOT NULL
	,CONSTRAINT FA_PK PRIMARY KEY (id_user)

	,CONSTRAINT FA_USER_FK FOREIGN KEY (id_user) REFERENCES USER(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MEMBRE
#------------------------------------------------------------

CREATE TABLE MEMBRE(
        id_user      Int NOT NULL ,
        mail         Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        nom_user     Varchar (50) NOT NULL ,
        prenom_user  Varchar (50) NOT NULL ,
        adresse_user Varchar (50) NOT NULL ,
        ville_user   Varchar (50) NOT NULL ,
        tel_user     Varchar (50) NOT NULL
	,CONSTRAINT MEMBRE_PK PRIMARY KEY (id_user)

	,CONSTRAINT MEMBRE_USER_FK FOREIGN KEY (id_user) REFERENCES USER(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DON
#------------------------------------------------------------

CREATE TABLE DON(
        id_don      Int  Auto_increment  NOT NULL ,
        montant_don Int NOT NULL ,
        date_don    Date NOT NULL ,
        id_user     Int NOT NULL
	,CONSTRAINT DON_PK PRIMARY KEY (id_don)

	,CONSTRAINT DON_MEMBRE_FK FOREIGN KEY (id_user) REFERENCES MEMBRE(id_user)
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
        id_fa            Int ,
        id_membre     Int ,
        id_race            Int NOT NULL
	,CONSTRAINT ANIMAL_PK PRIMARY KEY (id_animal)

	,CONSTRAINT ANIMAL_FA_FK FOREIGN KEY (id_fa) REFERENCES FA(id_user)
	,CONSTRAINT ANIMAL_MEMBRE0_FK FOREIGN KEY (id_membre) REFERENCES MEMBRE(id_user)
	,CONSTRAINT ANIMAL_RACE1_FK FOREIGN KEY (id_race) REFERENCES RACE(id_race)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PARTICIPER
#------------------------------------------------------------

CREATE TABLE PARTICIPER(
        id_collecte Int NOT NULL ,
        id_user     Int NOT NULL
	,CONSTRAINT PARTICIPER_PK PRIMARY KEY (id_collecte,id_user)

	,CONSTRAINT PARTICIPER_COLLECTE_FK FOREIGN KEY (id_collecte) REFERENCES COLLECTE(id_collecte)
	,CONSTRAINT PARTICIPER_MEMBRE0_FK FOREIGN KEY (id_user) REFERENCES MEMBRE(id_user)
)ENGINE=InnoDB;

