USE db_escola;

-- inserir 1 registro --
INSERT INTO tb_professor(nome,email, cpf)
VALUES('Chiqquim das Tapiocas', 'chiquim@email.com', '55599988800'); 

-- Mais de um registro / Inserir muitos registros--
INSERT INTO tb_professor (nome, email, cpf)
VALUES 
('Zezim das Rapaduras', 'zezim@email.com', '33344533200'),
('Maria das Rapaduras', 'maria@email.com', '11011011011'),
('Luiza das Rapaduras', 'Luiza@email.com', '22122122122'); --  ultimo deve ter um ponto e virgulo ; --


-- Excluir um Registro

DELETE FROM tb_professor WHERE id='1';
-- Excluir todos --
DELETE FROM tb_professor;

--Editar dados de um registro --
UPDATE tb_professor SET nome='Luiza da Caucaia' WHERE cpf='22122122122';

--Editar dados de todos os registros --
UPDATE tb_professor SET nome='Francisco';

-- SELECIONAR TODOS OS DADOS DE TODOS OS PROFESSORES --
SELECT * FROM tb_professor;

--SELECIONAR TODOS OS DADOS DE PROFESSOR DE ID = 5 --
SELECT * FROM tb_professor WHERE id='5';

-- SELECIONAR ALGUNS DADOS DE TODOS OS PROFESSORES --
SELECT nome, cpf FROM tb_professor WHERE id > 5; 