-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 04-Maio-2019 às 04:29
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpf`
--

CREATE TABLE `cpf` (
  `cpf` varchar(11) DEFAULT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking`
--

CREATE TABLE `ranking` (
  `votos` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ranking`
--

INSERT INTO `ranking` (`votos`, `numero`, `codigo`, `nome`) VALUES
(1, 13, 38, 'Regina Penati - 13'),
(3, 15, 39, 'Agripino Lima - 15'),
(1, 10, 40, 'JosÃ© Lemes - 10'),
(1, 0, 43, ''),
(1, 77, 44, 'Daniel Grandolfo - 77');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpf`
--
ALTER TABLE `cpf`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpf`
--
ALTER TABLE `cpf`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
