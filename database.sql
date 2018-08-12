
create database projeto;

use projeto;

create table usuario(
id int auto_increment primary key,
nomecompleto varchar(30) not null,
data varchar(20) not null,
email varchar(30) not null,
rg varchar(30) not null,
cpf varchar(11) not null,
nomepai varchar(30) not null,
nomemae varchar(30) not null,
user varchar(30) not null,
senha varchar(30) not null
);