-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Set-2016 às 01:23
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `votacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpf`
--

CREATE TABLE IF NOT EXISTS `cpf` (
  `cpf` varchar(11) DEFAULT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cpf`
--

INSERT INTO `cpf` (`cpf`, `codigo`) VALUES
('28591383944', 3),
('46680889850', 1),
('62726377772', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `votos` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Extraindo dados da tabela `ranking`
--

INSERT INTO `ranking` (`votos`, `numero`, `codigo`, `nome`) VALUES
(1, 13, 38, 'Regina Penati - 13'),
(3, 15, 39, 'Agripino Lima - 15'),
(1, 10, 40, 'JosÃ© Lemes - 10'),
(1, 0, 43, ''),
(1, 77, 44, 'Daniel Grandolfo - 77');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
