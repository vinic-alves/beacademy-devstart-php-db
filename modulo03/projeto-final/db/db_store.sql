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
    value FLOAT(5,2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);





INSERT INTO tb_category (name, description)
VALUES
('informática', 'Produtos de informática e acessórios para computador'),
('Escritório', 'Canetas, Cadernos, Folhas, etc'),
('Eletrônicos', 'Tvs, Som Portátil, caixas de Som etc');

INSERT INTO tb_product (name, description, photo, value, category_id, quantity, created_at )
VALUES
('teclado2', 'teclado Bla Bla','https://images.kabum.com.br/produtos/fotos/105009/teclado-mecanico-gamer-hyperx-alloy-origins-core-rgb-hx-kb7rdx-br_1574693479_g.jpg', 199.89, 1, 50, '2022-05-10 09:30:34'),
('teclado3', 'teclado Bla Bla','https://images.kabum.com.br/produtos/fotos/105009/teclado-mecanico-gamer-hyperx-alloy-origins-core-rgb-hx-kb7rdx-br_1574693479_g.jpg', 199.89, 1, 50, '2022-05-10 09:30:34');



