-- Para criar um banco de dados o comando é 
CREATE DATABASE db_escola;

--Selecionar o banco de dados--
USE db_escola;

--CRIAR TABELA--
CREATE TABLE tb_professor(
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
);
CREATE TABLE tb_aluno(
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    matricula CHAR(11) NOT NULL
);

--INSERIR DADOS

INSERT INTO tb_professor ( nome, email, cpf)
VALUES (
    'Vinicius', 'vinny@lindo.com', '12312312311'
);

INSERT INTO tb_professor ( nome, email, cpf)
VALUES (
    'Bruno', 'bruno@house.com','88888888899'
);