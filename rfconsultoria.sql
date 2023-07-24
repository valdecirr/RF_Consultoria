-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/07/2023 às 01:46
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
-- Banco de dados: `rfconsultoria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rf_consultoria`
--

CREATE TABLE `rf_consultoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `dias` int(11) DEFAULT NULL,
  `datainicio` date DEFAULT NULL,
  `checkinicio` varchar(1) DEFAULT NULL,
  `inicioreal` date DEFAULT NULL,
  `termino` date DEFAULT NULL,
  `checkfinal` varchar(1) DEFAULT NULL,
  `finalreal` date DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `rf_consultoria`
--

INSERT INTO `rf_consultoria` (`id`, `nome`, `dias`, `datainicio`, `checkinicio`, `inicioreal`, `termino`, `checkfinal`, `finalreal`, `situacao`, `obs`, `empresa`) VALUES
(1, 'teste', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Valdecir', 10, '2023-07-20', 'X', '2023-07-21', '2023-07-22', 'X', '2023-07-24', 'status', 'onbff', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rf_consultoria`
--
ALTER TABLE `rf_consultoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rf_consultoria`
--
ALTER TABLE `rf_consultoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
