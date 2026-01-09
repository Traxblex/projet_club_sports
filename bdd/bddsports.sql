CREATE DATABASE clubsports;
USE clubsports;

CREATE TABLE sports (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    prenom varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE
);