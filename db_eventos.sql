-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/05/2023 às 21:49
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_eventos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cidades`
--

CREATE TABLE `tb_cidades` (
  `id_cidades` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_cidades`
--

INSERT INTO `tb_cidades` (`id_cidades`, `nome`, `estado`) VALUES
(1, 'asdfasdfdf', 'AC'),
(2, 'asdf', 'AC'),
(4, 'asdf', 'AC'),
(5, 'asdf', 'AC'),
(7, 'd', 'AC'),
(8, 'asd', 'AC'),
(9, 'asd', 'AC');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_nasc` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `num` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `nome`, `sobrenome`, `cpf`, `sexo`, `data_nasc`, `celular`, `cep`, `endereco`, `num`, `complemento`, `bairro`, `cidade`, `estado`, `email`) VALUES
(2, 'asd', 'asd', '123124', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'agsdg', 'AS', '23235235', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'asd', 'asd', '123', 'masculino', '', '', '', '', '', '', '', '', '', ''),
(7, 'sdfsdf', 'sdfsdf', '234234', 'masculino', '2343-04-23', '234234', '72220024', 'QNN 2 Conjunto D', '12dfdf', 'senac', 'Ceilândia Sul (Ceilândia)', 'Brasília', 'DF', 'sdfsdsd'),
(8, 'Carlos Eduardo Souza de Oliveira', 'Eduardo', '2147483647', 'masculino', '1232-03-12', '123', '213', '123', '123', '123', '123', '123', '123', '123@hotmail.com'),
(9, '123', '123', '12312', 'masculino', '1232-03-12', '123', '123', '123', '123', '123', '123', '123', '123', '123@hotmail.com'),
(10, 'Carlos Eduardo Souza de Oliveira', 'Eduardo', '2147483647', 'masculino', '1233-03-12', '123', '213', '123', '123', '123', '123', '123', '123', '123@hotmail.com'),
(11, 'Carlos Eduardo Souza de Oliveira', 'Eduardo', '234', 'masculino', '3333-02-12', 'r3', '213', '123', '2', '23', '23', '123', '123', '123@hotmail.com'),
(12, '123', '123', '222', 'masculino', '2222-02-12', '12', '', '', '', '', '', '', '', ''),
(13, 'Carlos Eduardo Souza de Oliveira', 'Eduardo', '32', 'masculino', '2222-02-22', '', '213', '123', '', '', '', '123', '123', '123@hotmail.com'),
(14, '3', '3', '234234', 'masculino', '3333-03-31', '', '', '', '', '', '', '', '', ''),
(15, 'Carlos Eduardo Souza de Oliveira', 'Eduardo', '920051', 'feminino', '2222-02-22', '', '213', '123', '', '', '', '123', '123', '123@hotmail.com'),
(16, 'sadf', 'dasdf', '885729', 'masculino', '3333-03-31', '', '', '', '', '', '', '', '', ''),
(17, 'awdf', 'safd', '652738', 'masculino', '3333-03-31', '', '', '', '', '', '', '', '', ''),
(18, 'qwe', 'qwe', '716580', 'masculino', '2222-02-22', '', '', '', '', '', '', '', '', ''),
(19, 'd', 'd', '716580', 'masculino', '2222-02-22', '', '', '', '', '', '', '', '', ''),
(20, 'asd', 'asd', '2147483647', 'masculino', '2222-02-22', '', '', '', '', '', '', '', '', ''),
(21, 'dd', 'dd', '2147483647', 'masculino', '2222-02-22', '', '', '', '', '', '', '', '', ''),
(22, 'ee', 'ee', '71658092104', 'masculino', '2222-02-22', '', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cidades`
--
ALTER TABLE `tb_cidades`
  ADD PRIMARY KEY (`id_cidades`);

--
-- Índices de tabela `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cidades`
--
ALTER TABLE `tb_cidades`
  MODIFY `id_cidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
