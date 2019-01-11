-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jan-2019 às 02:30
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(6) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `ano` int(4) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `estoque` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `ano`, `editora`, `genero`, `preco`, `foto`, `descricao`, `estoque`) VALUES
(1, 'Um Químico na cozinha', 'José das Couves', 2018, 'Editora Criativa', 'Realidade Virtual', '89.00', 'livro1.jpg', '', 0),
(2, 'A Revolução dos Bichos', 'Vários Autores - coleção', 1999, 'Editora Eldorado', 'Política', '50.00', 'livro2.jpg', '', 0),
(3, 'O Alquimista', 'Paulo Coelho', 1995, 'Editora Pensamento', 'Auto Ajuda', '40.00', 'livro3.jpg', '', 0),
(4, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 2016, 'Nova Fronteira', 'Literatura clássica', '31.00', 'livro4.jpg', '', 0),
(5, 'Pérola na Areia', 'Sandra Querin', 2017, 'Moderna', 'Romance', '25.20', 'foto5.jpg', '', 0),
(6, 'Textos Cruéis Demais Para Serem Lidos Rapidamente', 'Vários autores', 2014, 'Globo Livros', 'Literatura', '23.90', 'foto6.jpg', '', 0),
(7, 'Poesia Que Transforma', 'Bráulio Bessa', 2014, 'Sextante / Gmt', 'Poesia', '23.90', 'livro7.jpg', '', 0),
(8, 'Os Segredos da Mente Milionária - Aprenda a Enriquecer Mudando Seus Conceitos Sobre o Dinheiro', 'T. Harv Eker', 2018, 'Sextante / Gmt', 'Auto Ajuda', '25.50', 'livro8.jpg', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `numCartao` varchar(19) NOT NULL,
  `nomeCartao` varchar(50) NOT NULL,
  `validadeCartao` varchar(5) NOT NULL,
  `codigoCartao` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `celular`, `cpf`, `dataNascimento`, `cep`, `rua`, `numero`, `complemento`, `cidade`, `estado`, `numCartao`, `nomeCartao`, `validadeCartao`, `codigoCartao`) VALUES
(1, 'Rodrigo', 'rodrigo.dmferreira@gmail.com', '123456', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(2, 'Pedrinho', 'pedrinho@mail.com', '63ab910cb3a7bc89faae5a46aa337aa22f5f4d30', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `idCarrinho` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `boletoLinha` varchar(60) NOT NULL,
  `boletoVencimento` varchar(10) NOT NULL,
  `boletoValor` decimal(5,2) NOT NULL,
  `numCartao` varchar(19) NOT NULL,
  `nomeCartao` varchar(50) NOT NULL,
  `validadeCartao` varchar(5) NOT NULL,
  `codigoCartao` int(3) NOT NULL,
  `frete` decimal(5,2) NOT NULL,
  `precoTotal` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idCliente_2` (`idCliente`),
  ADD KEY `idCliente_3` (`idCliente`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCarrinho` (`idCarrinho`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
