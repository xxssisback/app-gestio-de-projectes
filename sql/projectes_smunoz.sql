/*

██╗░░██╗██╗░░██╗░██████╗░██████╗
╚██╗██╔╝╚██╗██╔╝██╔════╝██╔════╝
░╚███╔╝░░╚███╔╝░╚█████╗░╚█████╗░
░██╔██╗░░██╔██╗░░╚═══██╗░╚═══██╗
██╔╝╚██╗██╔╝╚██╗██████╔╝██████╔╝
╚═╝░░╚═╝╚═╝░░╚═╝╚═════╝░╚═════╝░

    Projecte: Gestió de projectes
    Versió: 1.0 (M2_AE10)
    Desenvolupador: Sergio Muñoz
    Repositori: https://github.com/xxssisback/Gestio-de-projectes/
    
*/

DROP DATABASE IF EXISTS projectes_smunoz;
CREATE DATABASE projectes_smunoz;
USE projectes_smunoz;

/* TAULA ADMINS */
CREATE TABLE tb_admins (
    id_admin INT PRIMARY KEY AUTO_INCREMENT,
    usuari VARCHAR(20),
    contrasenya VARCHAR(20)
);

INSERT INTO tb_admins VALUES
(1, 'smunoz', 'P@ssw0rd'),
(2, 'mmoles', 'P@ssw0rd');


/* TAULA RANGS */
CREATE TABLE tb_rangs(
    id_rang INT PRIMARY KEY AUTO_INCREMENT,
    rang  VARCHAR(25)
);

INSERT INTO tb_rangs VALUES
(1,"Becari"),
(2,"Programador"),
(3,"Dissenyador"),
(4,"Supervisor de codi"),
(5,"Administrador"),
(6,"Cap de projecte");

/* TAULA USUARIS */
CREATE TABLE tb_usuaris (
    id_usuari INT PRIMARY KEY AUTO_INCREMENT,
    usuari VARCHAR(30),
    correu VARCHAR(40),
    telefon INT,
    id_rang INT,
    FOREIGN KEY (id_rang) REFERENCES tb_rangs(id_rang)
);

INSERT INTO tb_usuaris VALUES 
(1,'Sergio Muñoz','smunoz@xexus.cat','629392840',6),
(2,'Carlos Martinez','cmart@xexus.cat','635837503',6),
(3,'David Cots','dcots@xexus.cat','628947396',4),
(4,'Isaac Perez','iperez@xexus.cat','672384634',1),
(5,'Daniel Rovira','drovira@xexus.cat','739843586',5),
(6,'Joel García','jgarci@xexus.cat','666932953',1),
(7,'Alejandro Nieto','anieto@xexus.cat','608503343',2),
(8,'Adría Aranda','aarand@xexus.cat','612654876',2),
(9,'Manuel Alcantara','malcant@xexus.cat','678234987',3),
(10,'Ricardo Diaz','rdiaz@xexus.cat','600445575',3);

/* TAULA ACTIVITATS */
CREATE TABLE tb_activitats (
    id_activitat INT PRIMARY KEY AUTO_INCREMENT, 
    activitat VARCHAR(50)
);

INSERT INTO tb_activitats VALUES
(1,'Programant una aplicació'),
(2,'Dissenyant back-end'),
(3,'Dissenyant front-end'),
(4,'Reparant codi'),
(5,'Fent proves');


/* TAULA FASES */
CREATE TABLE tb_fases (
    id_fase INT PRIMARY KEY AUTO_INCREMENT, 
    fase VARCHAR(50)
);

INSERT INTO tb_fases VALUES
(1,'Anàlisi'),
(2,'Disseny'),
(3,'Implementació'),
(4,'Proves'),
(5,'Producció'),
(6,'Manteniment');

/* TAULA PROJECTES */
CREATE TABLE tb_projectes (
    id_projecte INT PRIMARY KEY AUTO_INCREMENT,
    nom_projecte VARCHAR(50),
    data_inici DATE,
    data_fi_estimat DATE,
    data_fi_real DATE,
    hores_estimades INT
);

INSERT INTO tb_projectes VALUES
(1, 'Bilbioteca Blanxart', '2021-01-01', '2021-03-01', '2021-02-28', 1400),
(2, 'Aso café', '2020-11-01', '2020-12-01', '2020-12-20', 1200),
(3, 'XXSS Incidencies', '2021-02-14', '2021-03-10', '2021-03-28', 400);


/* TAULA TASQUES */
CREATE TABLE tb_tasques (
    id_tasca INT PRIMARY KEY AUTO_INCREMENT,
    id_usuari INT,
    id_activitat INT,
    id_projecte INT,
    id_fase INT,
    data_inici DATE,
    data_fi_estimat DATE,
    data_fi_real DATE,
    hores_estimades INT,
    FOREIGN KEY (id_usuari) REFERENCES tb_usuaris(id_usuari),
    FOREIGN KEY (id_activitat) REFERENCES tb_activitats(id_activitat),
    FOREIGN KEY (id_fase) REFERENCES tb_fases(id_fase),
    FOREIGN KEY (id_fase) REFERENCES tb_projectes(id_projecte)
);

INSERT INTO tb_tasques VALUES
(1, 1, 1, 1, 1, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(2, 1, 2, 2, 2, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(3, 1, 3, 3, 3, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(4, 2, 4, 4, 1, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(5, 2, 5, 5, 2, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(6, 2, 1, 6, 3, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(7, 3, 2, 1, 1, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(8, 3, 3, 2, 2, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(9, 3, 4, 3, 3, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(10, 4, 5, 4, 1, '2021-01-15', '2021-02-22', '2021-02-25', 25),
(11, 4, 1, 5, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(12, 4, 2, 6, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(13, 5, 3, 1, 1, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(14, 5, 4, 2, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(15, 5, 5, 3, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(16, 6, 1, 4, 1, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(17, 6, 2, 5, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(18, 6, 3, 6, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(19, 7, 4, 1, 1, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(20, 7, 5, 2, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(21, 7, 1, 3, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(22, 8, 2, 4, 1, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(23, 8, 3, 5, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(24, 8, 4, 6, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(25, 9, 5, 1, 1, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(26, 9, 1, 2, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(27, 9, 2, 3, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(28, 10, 3, 4, 1, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(29, 10, 4, 5, 2, '2021-02-15', '2021-02-22', '2021-02-25', 25),
(30, 10, 5, 6, 3, '2021-02-15', '2021-02-22', '2021-02-25', 25);


/* TAULA REGISTRE HORES */
CREATE TABLE tb_registre_hores (
    id_registre_hores INT PRIMARY KEY AUTO_INCREMENT,
    id_tasca INT, FOREIGN KEY (id_tasca) REFERENCES tb_tasques(id_tasca),
    id_projecte INT, FOREIGN KEY (id_projecte) REFERENCES tb_projectes(id_projecte),
    id_usuari INT, FOREIGN KEY (id_usuari) REFERENCES tb_usuaris(id_usuari),
    id_activitat INT, FOREIGN KEY (id_activitat) REFERENCES tb_activitats(id_activitat),
    data DATE,
    hores TIME,
    descripcio VARCHAR(100)
);

INSERT INTO tb_registre_hores VALUES
(1,1,1,1,'2021-05-10','19:30:10','prueba'),
(2,2,2,1,'2021-05-10','19:30:10','prueba'),
(3,3,3,1,'2021-05-10','19:30:10','prueba'),
(4,4,1,1,'2021-05-10','19:30:10','prueba'),
(5,5,2,1,'2021-05-10','19:30:10','prueba');