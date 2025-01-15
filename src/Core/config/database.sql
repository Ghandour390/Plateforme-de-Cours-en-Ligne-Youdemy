CREATE TABLE cours(
    id int AUTO_INCREMENT PRIMARY KEY,
	description VARCHAR(255) NOT NULL,
    id_catigorie int not null,
    id_tage int not null,
    id_ensignant int not null,
    PRIMARY KEY(id_catigorie),
	PRIMARY key(id_ensignant));
    
    CREATE TABLE catigories(
        id_catigorie int AUTO_INCREMENT PRIMARY KEY,
        catigorie_name VARCHAR(30) not null
        );
        CREATE TABLE tags(
            id_tag int AUTO_INCREMENT PRIMARY key,
            tag_name VARCHAR(30) not null
            );
            
    CREATE TABLE utilisateur(
        id int AUTO_INCREMENT PRIMARY KEY,
         lastname VARCHAR(30) NOT NULL,
         firsttname VARCHAR(30) NOT NULL,
         email VARCHAR(255) NOT NULL,
         PASSWORD VARCHAR(30) NOT NULL);
         
         CREATE TABLE ensignant(
             id_ensignant int AUTO_INCREMENT PRIMARY key,
             id_cours int,
             id_utilisateur int PRIMARY key
         );
         
         
             
             