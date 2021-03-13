DROP SCHEMA IF EXISTS webshop;
CREATE SCHEMA webshop;

CREATE TABLE webshop.merce (
  idmerce INT NOT NULL AUTO_INCREMENT,
  nomeProdotto VARCHAR(45) NOT NULL,
  descrizione VARCHAR(45) NOT NULL,
  prezzo FLOAT NOT NULL,
  quantita INT NOT NULL,
  pathImmagine VARCHAR(255) NOT NULL,
  idCategoria VARCHAR(45) NOT NULL,
  PRIMARY KEY (idmerce),
  UNIQUE INDEX idmerce_UNIQUE (idmerce ASC));

CREATE TABLE webshop.categorie (
  nomeCategorie VARCHAR(45) NOT NULL,
  PRIMARY KEY (nomeCategorie),
  UNIQUE INDEX nomeCategorie_UNIQUE (nomeCategorie ASC));

CREATE TABLE webshop.utenti (
  email VARCHAR(255) NOT NULL,
  password LONGTEXT NOT NULL,
  nome VARCHAR(70) NOT NULL,
  cognome VARCHAR(70) NOT NULL,
  dataDiNascita DATE NOT NULL,
  indirizzoSpedizione VARCHAR(100) NOT NULL,
  PRIMARY KEY (email));
