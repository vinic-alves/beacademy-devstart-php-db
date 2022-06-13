-- Para criar um banco de dados o comando é 
CREATE DATABASE db_escola;

--Selecionar o banco de dados--
USE db_escola;

--CRIAR TABELA--
CREATE TABLE tb_professor(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
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
    'Alessandra', 'aless@email.com','18805558890'
);

-- Excluir tabela --
DROP TABLE tb_professor;


INSERT INTO tb_aluno ( nome, email, cpf, matricula)
VALUES (
    'Maria', 'mai@emailquente.com','00700700770', '9090909090'
);
INSERT INTO tb_aluno ( nome, email, cpf, matricula)
VALUES (
    'John', 'john@outlook.com','19119119193','3232323232'
);

-- Selecionar od dados --
SELECT * FROM tb_aluno; --Exemplo--
