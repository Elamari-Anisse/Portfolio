CREATE DATABASE portfolio;
USE portfolio;

CREATE TABLE IF NOT EXISTS utilisateur (
    id_user int(3) NOT NULL AUTO_INCREMENT,
    mail varchar(30) DEFAULT NULL,
    mdp varchar(255) DEFAULT NULL,
    PRIMARY KEY (id_user)
)  ENGINE=InnoDB  DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS inscription (
    id_user int(3) NOT NULL AUTO_INCREMENT,
    mail varchar(30) DEFAULT NULL,
    mdp varchar(10) DEFAULT NULL,
    PRIMARY KEY (id_user)
)  ENGINE=InnoDB  DEFAULT CHARSET=latin1;