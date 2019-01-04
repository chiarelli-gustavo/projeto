-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2018 às 00:55
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
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `ano`, `editora`, `genero`, `preco`, `foto`) VALUES
(1, 'Um Químico na Cozinha', 'Raphael Haumont', 2018, 'Editora Moderna', 'Realidade Virtual', '55.88', 'livro1.jpg'),
(2, 'A Revolução dos Bichos', 'George Orwell', 2016, 'Companhia das Letras', 'Romance', '35.00', 'livro2.jpg'),
(3, 'O Alquimista', 'Paulo Coelho', 1995, 'Editora Pensamento', 'Auto Ajuda', '40.00', 'livro3.jpg'),
(4, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 2016, 'Nova Fronteira', 'Literatura clássica', '31.00', 'livro4.jpg'),
(5, 'Pérola na Areia', 'Sandra Querin', 2017, 'Moderna', 'Romance', '25.20', 'livro5.jpg'),
(6, 'Textos Cruéis Demais Para Serem Lidos Rapidamente', 'Vários autores', 2014, 'Globo Livros', 'Literatura', '23.90', 'livro6.jpg'),
(7, 'Poesia Que Transforma', 'Bráulio Bessa', 2014, 'Sextante / Gmt', 'Poesia', '23.90', 'livro7.jpg'),
(8, 'Os Segredos da Mente Milionária - Aprenda a Enriquecer Mudando Seus Conceitos Sobre o Dinheiro', 'T. Harv Eker', 2018, 'Sextante / Gmt', 'Auto Ajuda', '25.50', 'livro8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
