-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 18-Jun-2017 às 14:08
-- Versão do servidor: 5.7.15-1
-- PHP Version: 5.6.26-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `integres_testeis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_empresa`
--

CREATE TABLE `cad_empresa` (
  `COD` int(255) NOT NULL,
  `TIPO` int(255) DEFAULT NULL,
  `R_SOCIAL` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CNPJ` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ENDERECO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `NUMERO` int(11) NOT NULL,
  `BAIRRO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CIDADE` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ESTADO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CEP` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `FONE` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `RESP_LEGAL` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL_RESP_LEGAL` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cad_empresa`
--

INSERT INTO `cad_empresa` (`COD`, `TIPO`, `R_SOCIAL`, `CNPJ`, `ENDERECO`, `NUMERO`, `BAIRRO`, `CIDADE`, `ESTADO`, `CEP`, `FONE`, `RESP_LEGAL`, `EMAIL_RESP_LEGAL`) VALUES
(1, 1, 'razão', '12.345.678/9123-45', 'rua ççç', 0, 'ááá', 'êêê', 'RJ', '12.345-678', '(12) 3456-7891', 'eu', 'ivctor@'),
(6, 2, 'asd', '44.444.444/4444-44', 'kj', 54, 'ad', 'sd', 'RS', '44.444-444', '(55) 5555-5555', NULL, 'victordesouzaabreu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_empresa`
--
ALTER TABLE `cad_empresa`
  ADD PRIMARY KEY (`COD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_empresa`
--
ALTER TABLE `cad_empresa`
  MODIFY `COD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
