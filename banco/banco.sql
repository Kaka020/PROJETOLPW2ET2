CREATE DATABASE projeto;
USE projeto;
CREATE TABLE usuarios(
    id_usuarios INT auto_increment PRIMARY KEY,
    nome VARCHAR(25),
    email VARCHAR(60),
    senha varchar(45),
    img_usuario varchar(100),
    descricao varchar(300)
);
CREATE TABLE categorias(
    id_categorias INT auto_increment PRIMARY KEY,
    nome_categorias varchar(30)
);
CREATE TABLE conteudos(
    id_conteudos INT auto_increment PRIMARY KEY,
    nome_conteudos varchar(75),
    img_conteudos varchar(100),
    id_cat INT,
    id_usu INT,
    foreign key (id_cat) references categorias(id_categorias),
    foreign key (id_usu) references usuarios(id_usuarios)
)