create database reserva;
use reserva;
create table item(
    id int auto_increment primary key,
    nome varchar(45),
    descricao varchar(255),
    patrimonio varchar(6)
);
create table servidor(
    id int auto_increment primary key,
    nome varchar(45),
    matricula varchar(20),
    cpf varchar(14),
    telefone varchar(20),
    email varchar(100),
    endereco varchar(255),
    dataNascimento date
);
create table emprestimo(
    id int auto_increment primary key,
    id_item int,
    id_servidor int,
    foreign key (id_item) references item (id),
    foreign key (id_servidor) references servidor (id),
    data_emprestimo datetime,
    data_devolucao datetime
); 
