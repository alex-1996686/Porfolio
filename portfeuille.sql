DROP DATABASE IF EXISTS portfeuille;
CREATE DATABASE portfeuille;
use portfeuille;


DROP TABLE IF EXISTS admins;
CREATE TABLE admins (
  id int(11) NOT NULL AUTO_INCREMENT,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  hashed_password varchar(255) NOT NULL,
  PRIMARY KEY (id),
  KEY index_username (username)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO admins VALUES (1,'Giscard','Nasalan','giscardnasalan@gmail.com','cargis',
  'Alexandre.1996!');

DROP TABLE IF EXISTS category;
CREATE TABLE category (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO category VALUES (1,'logiciel');

DROP TABLE IF EXISTS reseau;
CREATE TABLE reseau (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  descriptif text,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO reseau VALUES (1,'reseau','le reseau des reseaux');

DROP TABLE IF EXISTS systeme;
CREATE TABLE systeme (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  descriptif text,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO systeme VALUES (1,'logiciel','le systeme des systemes');

DROP TABLE IF EXISTS web;
CREATE TABLE web (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  descriptif text,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO web VALUES (1,'logiciel','le site des sites');

DROP TABLE IF EXISTS programmation;
CREATE TABLE programmation (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  descriptif text,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO programmation VALUES (1,'logiciel','le programme des programmes');