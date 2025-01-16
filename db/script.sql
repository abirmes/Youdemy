SHOW DATABASES;

CREATE DATABASE youdemy;

USE youdemy;

CREATE Table roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(30),
    description TEXT
) ENGINE = INNODB;

CREATE TABLE utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    email VARCHAR(50) UNIQUE,
    password VARCHAR(50),
    phone VARCHAR(20),
    etat varchar(50),
    role_id INT,
    Foreign Key (role_id) REFERENCES roles (id)
) ENGINE = INNODB;

CREATE Table tags (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    description TEXT
) ENGINE = INNODB;

CREATE Table categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    description TEXT
) ENGINE = INNODB;

CREATE TABLE cours (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100),
    description TEXT,
    enseignant VARCHAR(50),
    contenu TEXT,
    categorie_id INT,
    Foreign Key (categorie_id) REFERENCES categories (id)
) ENGINE = INNODB;

CREATE Table tag_cour (
    cour_id INT,
    FOREIGN KEY (cour_id) REFERENCES cours (id),
    tag_id INT,
    FOREIGN KEY (tag_id) REFERENCES tags (id),
    PRIMARY KEY (cour_id, tag_id)
) ENGINE = INNODB;


CREATE Table utilisateur_cour (
    cour_id INT,
    FOREIGN KEY (cour_id) REFERENCES cours (id),
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id),
    PRIMARY KEY (cour_id, utilisateur_id)
) ENGINE = INNODB;


INSERT INTO categories(name , description) VALUES ("philosophy" , "u think then u exist");
ALTER TABLE utilisateurs ADD photo VARCHAR(200);


