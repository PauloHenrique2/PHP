CREATE DATABASE loja;

USE loja;

CREATE TABLE Usuarios
(
 idUsuario INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(80),
 login VARCHAR(50),
 senha VARCHAR(30)
);

SELECT * FROM Usuarios;

CREATE TABLE Produtos
(
 idProduto INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(80),
 precoCompra DECIMAL(10,2),
 precoVenda DECIMAL(10,2),
 descricao VARCHAR(100),
 qtdeEstoque INT
);

SELECT * FROM Produtos;

CREATE TABLE Fornecedores
(
 idFornecedor INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(80),
 cnpj CHAR(14),
 inscricaoEstadual CHAR(12),
 contato VARCHAR(50),
 endereco VARCHAR(100)
);