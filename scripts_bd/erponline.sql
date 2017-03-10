-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2016 às 18:23
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erponline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(6) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `nasc` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `ddd_tel` int(2) NOT NULL,
  `tel` varchar(9) NOT NULL,
  `ddd_cel` int(2) NOT NULL,
  `cel` varchar(10) NOT NULL,
  `logra` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nivel` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `email`, `senha`, `nome`, `sobrenome`, `nasc`, `sexo`, `ddd_tel`, `tel`, `ddd_cel`, `cel`, `logra`, `cep`, `cid`, `uf`, `nivel`, `status`) VALUES
(22, 'luis2306', 'luis@mercograos.com.br', 'luis2306', 'Luis Claudio ', 'Birck Beskow', '1994-06-23', 'Masculino', 11, '3638-8900', 11, '95806-1519', 'Estrada do capao bonito, 228 - Jardim Maria de Lourdes', '07263-010', 'Guarulhos', 'sp', 1, 1),
(21, 'luisbeskow', 'luisbeskow@gmail.com', 'luis2306', 'Luis Claudio ', 'Birck Beskow', '1994-06-23', 'Masculino', 11, '3638-8900', 11, '95806-1519', 'Estrada do capao bonito, 228 - Jardim Maria de Lourdes', '07263-010', 'Guarulhos', 'sp', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
