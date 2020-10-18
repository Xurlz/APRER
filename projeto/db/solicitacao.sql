-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2019 às 21:15
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aprer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `cod_solicitacao` int(11) NOT NULL,
  `data_solicitacao` datetime NOT NULL,
  `descricao_solicitacao` varchar(500) NOT NULL,
  `status_solicitacao` varchar(30) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_profissional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`cod_solicitacao`),
  ADD KEY `FK_CLIENTE` (`cod_cliente`),
  ADD KEY `FK_PROFISSIONAL` (`cod_profissional`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `cod_solicitacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD CONSTRAINT `FK_CLIENTE` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`),
  ADD CONSTRAINT `FK_PROFISSIONAL` FOREIGN KEY (`cod_profissional`) REFERENCES `profissional` (`cod_profissional`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
