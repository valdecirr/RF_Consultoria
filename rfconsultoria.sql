-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2023 at 09:13 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfconsultoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `nome`) VALUES
(1, 'Autopack'),
(2, 'Teste'),
(3, 'TesteA'),
(7, 'Teste1');

-- --------------------------------------------------------

--
-- Table structure for table `rf_consultoria`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rf_consultoria`
--

INSERT INTO `rf_consultoria` (`id`, `nome`, `dias`, `datainicio`, `checkinicio`, `inicioreal`, `termino`, `checkfinal`, `finalreal`, `situacao`, `obs`, `empresa`) VALUES
(1, 'AUTOPACK', 45, '2023-01-16', 'X', '2023-01-16', '0000-00-00', 'X', '2023-03-06', '100%', '', 'Autopack'),
(2, 'Aprova', 1, '2023-01-12', 'X', '2023-01-13', '0000-00-00', 'X', '2023-01-13', '100%', '', 'Autopack'),
(3, 'Projeto Modulos Movimenta', 5, '2023-01-16', 'X', '2023-01-16', '0000-00-00', 'X', '2023-01-21', '100%', '', 'Autopack'),
(4, 'Projeto Dispensador Pallets', 10, '2023-01-22', 'X', '2022-12-26', '0000-00-00', 'X', '2023-02-01', '100%', '', 'Autopack'),
(5, 'Projeto Esteiras de Alimenta', 3, '2023-01-30', 'X', '2022-12-26', '0000-00-00', 'X', '2023-02-02', '100%', '', 'Autopack'),
(6, 'Projeto Plataforma', 2, '2023-02-02', 'X', '2023-02-02', '0000-00-00', 'X', '2023-02-04', '100%', '', 'Autopack'),
(7, 'Projeto Elevador Pallets', 12, '2023-02-02', 'X', '2023-02-02', '0000-00-00', 'X', '2023-02-14', '100%', '', 'Autopack'),
(8, 'Projeto Grades Prote', 7, '2023-03-03', 'X', '2023-03-06', '0000-00-00', '', NULL, '0%', '', 'Autopack'),
(9, 'Projeto Esteira de coleta', 2, '2023-02-05', 'X', '2023-02-05', '0000-00-00', 'X', '2023-02-07', '100%', '', 'Autopack'),
(10, 'Projeto Sistema Cartesiano (Manipulador)', 10, '2023-02-05', 'X', '2023-02-05', '0000-00-00', 'X', '2023-02-23', '100%', '', 'Autopack'),
(11, 'Detalhamento Modulos Movimenta', 1, '2023-02-14', 'X', NULL, NULL, 'X', NULL, '100%', '', 'Autopack'),
(12, 'Detalhamento Dispensador Pallets', 2, '2023-02-15', 'X', NULL, '0000-00-00', 'X', NULL, '100%', '', 'Autopack'),
(13, 'Detalhamento Esteiras de Alimenta', 1, '2023-02-15', 'X', '2023-02-14', '0000-00-00', 'X', '2023-02-23', '100%', '', 'Autopack'),
(14, 'Detalhamento Grades de Prote', 1, '2023-03-13', '', NULL, '0000-00-00', '', NULL, '', '', 'Autopack'),
(15, 'Detalhamento Plataforma', 1, '2023-02-17', 'X', '2023-02-23', '0000-00-00', 'X', '2023-02-23', '100%', '', 'Autopack'),
(16, 'Detalhamento Elevador de Pallets', 4, '2023-02-20', 'X', '2023-02-23', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(17, 'Detalhamento Esteira de Coleta ', 4, '2023-02-20', 'X', '2023-02-23', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(18, 'Detalhamento Sistema Cartesiano (Manipulador)', 3, '2023-02-21', 'X', '2023-02-23', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(19, 'Cadastro Modulos de Movimenta', 1, '2023-02-24', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(20, 'Cadastro Dispensador Pallets', 2, '2023-02-25', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(21, 'Cadastro Esteiras de Alimenta', 1, '2023-02-24', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(22, 'Cadastro Grades Prote', 1, '2023-02-27', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(23, 'Cadastro Plataforma', 1, '2023-02-25', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(24, 'Cadastro Elevador de Pallets', 2, '2023-02-28', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(25, 'Cadsastro Esteira de Coleta', 1, '2023-02-26', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(26, 'Cadastro Sistema Cartesiano (Manipulador)', 2, '2023-02-27', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-06', '100%', '', 'Autopack'),
(27, 'Layout Final / Detalhamento', 1, '2023-03-01', 'X', '2023-03-01', '0000-00-00', 'X', '2023-03-06', '100%', '', 'Autopack'),
(28, 'Projeto El', 10, '2023-02-21', 'X', '2023-02-23', '0000-00-00', 'X', '2023-03-01', '100%', '', 'Autopack'),
(29, 'Cadastro Itens El', 3, '2023-03-03', 'X', '2023-03-01', '0000-00-00', '', NULL, '0%', '', 'Autopack'),
(30, 'Software', 10, '2023-03-03', 'X', '2023-03-01', '0000-00-00', '', NULL, '0%', '', 'Autopack'),
(31, 'Entrega Projeto El', 1, '2023-03-14', 'X', '2023-03-01', '0000-00-00', '', NULL, '0%', '', 'Autopack'),
(32, 'Finaliza', 60, '2023-01-16', 'X', '2023-03-06', '0000-00-00', '', NULL, '40%', '', 'Autopack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rf_consultoria`
--
ALTER TABLE `rf_consultoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rf_consultoria`
--
ALTER TABLE `rf_consultoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
