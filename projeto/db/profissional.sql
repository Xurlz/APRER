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
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `cod_profissional` int(11) NOT NULL,
  `email_profissional` varchar(30) NOT NULL,
  `nome_profissional` varchar(50) NOT NULL,
  `cpf_profissional` varchar(15) NOT NULL,
  `cep_profissional` varchar(9) NOT NULL,
  `rua_profissional` varchar(30) NOT NULL,
  `numero_profissional` varchar(6) NOT NULL,
  `complemento_profissional` varchar(20) NOT NULL,
  `bairro_profissional` varchar(30) NOT NULL,
  `cidade_profissional` varchar(30) NOT NULL,
  `uf_profissional` varchar(2) NOT NULL,
  `tel_profissional` varchar(15) NOT NULL,
  `regiao_atendimento` varchar(30) NOT NULL,
  `ramo_profissional` varchar(30) NOT NULL,
  `senha_profissional` varchar(40) NOT NULL,
  `lat_profissional` varchar(12) DEFAULT NULL,
  `lng_profissional` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`cod_profissional`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `cod_profissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
