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

INSERT INTO tb_product (name, description, photo, valor, categoria_id, quantity, created_at )
VALUES
('Camisa do Galo', 'Camisa do Atlético MG', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQdn0EMveV0tKVo9N6QuRdcWc4ctqsYH1Ysd-PW83gNW_pxB1aXSDa97Ofyr0F0o4ecDiZXLadxFig&usqp=CAc',127.90, 2, 4, '2021-11-11 06:00:23'),
('Detergente finish', 'Sabão em pó', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTMSf0V-ImPU5QSe_6snIumkt9a-TNvDUfeR7Nu5zjpnXA66xhWRhpQsojVQ5IRQaoDI4IfZyhgZN0&usqp=CAc',33.33, 3, 2, '2021-04-30 09:00:00'),
('Boneco tranformers', 'Boneco do desenho transformers','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQycCamXGXJcebtH7UJBo9FCUXeagzPlG-6Q5DvsTMOjqkoN6h203NTEmKKiBQREMVu697MikdzIQ&usqp=CAc', 123.23, 4, 5, '2019-01-27 18:50:51');


