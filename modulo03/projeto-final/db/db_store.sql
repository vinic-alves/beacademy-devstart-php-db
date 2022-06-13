CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR (100) NOT NULL
);

CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    valor FLOAT(5,2) NOT NULL,
    categoria_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);





INSERT INTO tb_category (name, description)
VALUES
('informática', 'Produtos de informática e acessórios para computador'),
('Escritório', 'Canetas, Cadernos, Folhas, etc'),
('Eletrônicos', 'Tvs, Som Portátil, caixas de Som etc');


