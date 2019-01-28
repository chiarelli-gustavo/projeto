/*banco.sql*/
CREATE DATABASE IF NOT EXISTS banco;
/*show databases, serve para verificar bancos existentes*/
USE banco;
CREATE TABLE IF NOT EXISTS cliente(
	idCliente INT AUTO_INCREMENT PRYMARY KEY,
	nomeCliente VARCHAR(60) NOT NULL,
	emailCliente VARCHAR(60) NOT NULL,
	dataNascCliente VARCHAR(22) NOT NULL,
	usuario VARCHAR(40) NOT NULL,
	senha VARCHAR(40) NOT NULL,
	telefone VARCHAR(40) NOT NULL
	/*enderecoEntrega*/
);
 CREATE TABLE IF NOT EXISTS produtos(
 	idProduto INT AUTO_INCREMENT PRYMARY KEY,
 	descricaoProduto VARCHAR(255) NOT NULL,
 	quantProduto VARCHAR(40) NOT NULL,
 	precoProduto FLOAT NOT NULL
 	);
 /*não tem virgula na ultima linha antes do parênteses*/


  CREATE TABLE IF NOT EXISTS venda(
 	idProduto INT AUTO_INCREMENT PRIMARY KEY,
 	idCliente INT NOT NULL,
 	valorTotal FLOAT NOT NULL,
 	FOREIGN KEY(idCliente) REFERENCES cliente(idCliente)
 	);


 CREATE TABLE IF NOT EXISTS itemVenda(
 	id INT AUTO_INCREMENT PRIMARY KEY,
 	idProduto INT NOT NULL,
 	quant INT NOT NULL,
 	preco FLOAT NOT NULL,
 	itemVenda INT NOT NULL,
 	FOREIGN KEY(idProduto) REFERENCES PRODUTOS(idProduto)
 	);

