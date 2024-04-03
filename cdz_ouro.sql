-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2023 às 14:45
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cdz_ouro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cad` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `confirmarEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroadm`
--

CREATE TABLE `cadastroadm` (
  `id_cad` int(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` longtext NOT NULL,
  `cpf` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cadastroadm`
--

INSERT INTO `cadastroadm` (`id_cad`, `nomeCompleto`, `telefone`, `estado`, `cidade`, `email`, `senha`, `cpf`) VALUES
(1, 'Sarah Rafaela Vargas de Andrades Moreira', 51993181562, 'Rio Grande do Sul', 'Porto alegre', 'sarinha.v@gmail.com', '8dee0b8b2d8779d4f7a64d77b5d0aa68', 86574564231),
(2, 'Bella Paz', 51993245678, 'Rio Grande do Sul', 'Canoas', 'bella@gmail.com', '9a3510430150275ed0f39d016c977074', 54761245987);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_cont` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `confirmarEmail` varchar(50) NOT NULL,
  `assunto` varchar(19) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_cont`, `nome`, `sobrenome`, `email`, `confirmarEmail`, `assunto`, `mensagem`) VALUES
(1, 'Bella', 'Paz', 'bella.p@outlook.com', 'bella.p@outlook.com', 'elogios', 'Bom, dia a animação com os cards ficou muito legal.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cad`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `cadastroadm`
--
ALTER TABLE `cadastroadm`
  ADD PRIMARY KEY (`id_cad`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_cont`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastroadm`
--
ALTER TABLE `cadastroadm`
  MODIFY `id_cad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
