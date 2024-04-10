#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: aga_promo
#------------------------------------------------------------

CREATE TABLE aga_promo(
        id_promo        Int  Auto_increment  NOT NULL ,
        nom_promo       Varchar (255) NOT NULL ,
        dateDebut_promo Date NOT NULL ,
        dateFin_promo   Date NOT NULL ,
        nombre_promo    Int NOT NULL
	,CONSTRAINT aga_promo_PK PRIMARY KEY (id_promo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aga_cours
#------------------------------------------------------------

CREATE TABLE aga_cours(
        id_cours         Int  Auto_increment  NOT NULL ,
        nom_cours        Varchar (255) NOT NULL ,
        date_cours       Date NOT NULL ,
        heureDebut_cours Time NOT NULL ,
        heureFin_cours   Time NOT NULL ,
        code_cours       Int NOT NULL ,
        id_promo         Int NOT NULL
	,CONSTRAINT aga_cours_PK PRIMARY KEY (id_cours)

	,CONSTRAINT aga_cours_aga_promo_FK FOREIGN KEY (id_promo) REFERENCES aga_promo(id_promo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aga_role
#------------------------------------------------------------

CREATE TABLE aga_role(
        id_role  Int  Auto_increment  NOT NULL ,
        nom_role Varchar (255) NOT NULL
	,CONSTRAINT aga_role_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aga_utilisateur
#------------------------------------------------------------

CREATE TABLE aga_utilisateur(
        id_utilisateur             Int  Auto_increment  NOT NULL ,
        nom_utilisateur            Varchar (255) NOT NULL ,
        prenom_utilisateur         Varchar (255) NOT NULL ,
        email_utilisateur          Varchar (255) NOT NULL ,
        mdp_utilisateur            Varchar (255) NOT NULL ,
        activiteCompte_utilisateur Bool NOT NULL ,
        id_role                    Int NOT NULL
	,CONSTRAINT aga_utilisateur_PK PRIMARY KEY (id_utilisateur)

	,CONSTRAINT aga_utilisateur_aga_role_FK FOREIGN KEY (id_role) REFERENCES aga_role(id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aga_appartenir
#------------------------------------------------------------

CREATE TABLE aga_appartenir(
        id_promo       Int NOT NULL ,
        id_utilisateur Int NOT NULL
	,CONSTRAINT aga_appartenir_PK PRIMARY KEY (id_promo,id_utilisateur)

	,CONSTRAINT aga_appartenir_aga_promo_FK FOREIGN KEY (id_promo) REFERENCES aga_promo(id_promo)
	,CONSTRAINT aga_appartenir_aga_utilisateur0_FK FOREIGN KEY (id_utilisateur) REFERENCES aga_utilisateur(id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aga_present
#------------------------------------------------------------

CREATE TABLE aga_present(
        id_utilisateur Int NOT NULL ,
        id_cours       Int NOT NULL ,
        absence        Bool NOT NULL ,
        retard         Bool NOT NULL
	,CONSTRAINT aga_present_PK PRIMARY KEY (id_utilisateur,id_cours)

	,CONSTRAINT aga_present_aga_utilisateur_FK FOREIGN KEY (id_utilisateur) REFERENCES aga_utilisateur(id_utilisateur)
	,CONSTRAINT aga_present_aga_cours0_FK FOREIGN KEY (id_cours) REFERENCES aga_cours(id_cours)
)ENGINE=InnoDB;

