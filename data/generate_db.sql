CREATE DATABASE kyselysofta CHARACTER SET utf8mb4;

CREATE TABLE kysymys (
    kys_id int AUTO_INCREMENT PRIMARY KEY,
    kysymyslause varchar(500) NOT NULL,
    tyyppi varchar(10) NOT NULL
);

CREATE TABLE vastausvaihtoehto (
    vve_id int AUTO_INCREMENT PRIMARY KEY,
    teksti varchar(100) NOT NULL,
    luonne varchar(20) NOT NULL
);

CREATE TABLE kys_vve (
    kys_id int NOT NULL,
    vve_id int NOT NULL,
    FOREIGN KEY (kys_id) REFERENCES kysymys(kys_id),
    FOREIGN KEY (vve_id) REFERENCES vastausvaihtoehto(vve_id)
);

CREATE TABLE vastaus (
    vast_id int AUTO_INCREMENT,
    ajankohta timestamp NOT NULL,
    vastaaja varchar(100) NOT NULL,
    vastaaja_email varchar(100) NOT NULL,
    kys_id int NOT NULL,
    vve_id int NOT NULL,
    PRIMARY KEY (vast_id),
    FOREIGN KEY (kys_id) REFERENCES kysymys(kys_id),
    FOREIGN KEY (vve_id) REFERENCES vastausvaihtoehto(vve_id)
);