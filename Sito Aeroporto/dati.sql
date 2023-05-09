drop database if exists aeroporto;
create database aeroporto;

use aeroporto;

create table Passeggero
(documento varchar(45) not null primary key,
nome varchar(45)not null,
cognome varchar(45)not null,
nazionalita varchar(45) not null,
aeroportoDest varchar(45),
aereoportoProv varchar(45),
stato varchar(30),
motivoViaggio varchar(45)not null);

create table Merce_passegero
(Id_merce int not null auto_increment primary key ,
 documento_passeggero varchar(45)not null,
 categoria varchar(45)not null, 
 descrizione varchar(45) not null,
quantità int not null,
stato varchar(30) not null,
FOREIGN KEY (documento_passeggero) REFERENCES Passeggero(documento));
 
create table Tessera
 (codice_tes int primary key not null,
datacreazione date not null);

 create table Funzionario
 (cf varchar(16) primary key not null ,
 nome varchar(45) not null, 
 cognome varchar(45) not null,
 stipendio int not null,
 pass varchar(45) not null,
codice_tes int not null,
FOREIGN KEY (codice_tes) REFERENCES Tessera(codice_tes));

 create table Controllore
 (username varchar(45) primary key not null ,
 nome varchar(45) not null, 
 cognome varchar(45) not null,
  cf varchar(16) not null, 
cf_funzionario varchar(16) not null,
 stipendio int not null,
 pass varchar(45) not null,
codice_tes int not null,
FOREIGN KEY (codice_tes) REFERENCES Tessera(codice_tes),
FOREIGN KEY (cf_funzionario) REFERENCES Funzionario(cf));


create table check_in(
id_check int auto_increment primary key not null,
codice_tes int not null,
data_check date not null,
FOREIGN KEY (codice_tes) REFERENCES Tessera(codice_tes));


create table Punto_controllo
(nome_PDC varchar(45) not null primary key,
 posizione varchar(45) not null);
 
create table Controllo(
 username varchar(16) not null,
 nome_PDC varchar(45) not null,  
 datazione date not null, 
 importo double not null,
 contestazione boolean not null,
 documento_passeggero varchar(45) not null,
 tempo time not null,
 durata double not null,
 esito varchar(45) not null, 
 note varchar(45)not null,
 primary key(nome_PDC, datazione, documento_passeggero, username),
 FOREIGN KEY (nome_PDC) REFERENCES Punto_controllo(nome_PDC),
 FOREIGN KEY (documento_passeggero) REFERENCES Passeggero(documento),
 FOREIGN KEY (username) REFERENCES Controllore(username));


 


Query:

1)SELECT p.documento, p.nome, p.cognome, p.nazonalita, p.aeroportoDest, p.aeroportProv, p.motivoViaggio FROM Passeggero AS p 
INNER JOIN Controllo AS c  ON p.documento=c.documento_passeggero 
WHERE c.datazione = curdate(); 

2)SELECT  c.nome_PDC, sum(c.importo) FROM controllo AS c
GROUP BY c.nome_PDC;

3)SELECT m.categoria, count(m.id_merce) FROM merce_passeggero AS m
INNER JOIN Passeggero AS p ON p.documento=m.documento_passeggero 
INNER JOIN Controllo AS c p.documento=c.documento_passeggero 
WHERE year(c.datazione)=”2022”
AND m.stato=”respinta”
GROUP BY (m.categoria);

4)SELECT c.username, count(c.contestazione) FROM controllo  AS c
GROUP BY c.username;

5)SELECT c.nome_PDC, AVG(c.tempo) FROM Controllo AS c
WHERE c.datazione = curdate()
GROUP BY (c.nome_PDC);

6)SELECT distinct p.* FROM Passeggero AS p
INNER JOIN Controllo as c ON p.documento=c.documento_passeggero
WHERE p.stato=”fermo”
AND c.datazione=”2022-mm-dd”
GROUP BY p.nazionalità
ORDER BY  cognome ASC;

7)SELECT c.username, c.nome, c.cognome, f.cf_funzionario FROM Controllore as c 
INNER JOIN Tessera AS t ON t.codice_tes=c.codice_tes
INNER JOIN check-in AS i ON t.codice_tes=i.codice_tes
WHERE i.data_check = curdate()
GROUP BY (f.cf_funzionario); 



 



