DROP DATABASE IF EXISTS agenda;
CREATE DATABASE agenda;
USE agenda;

CREATE TABLE agenda(
id_agenda int not null auto_increment,
nome varchar(50) not null,
apelido varchar(40) not null,
endereco varchar(70) not null,
bairro varchar(50) not null,
cidade varchar(50) not null,
estado varchar(02) not null,
telefone varchar(15) not null,
celular varchar(15) not null,
email varchar(70) not null,
dt_cadastro date not null,
foto varchar(100) not null,
PRIMARY KEY (id_agenda)
);

UPDATE	agenda SET nome = "Felipe",
email = "felipedborges2@gmail.com"
WHERE id_agenda = 1