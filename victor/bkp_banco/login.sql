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
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `USER` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `SENHA` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `COD_EMPRESA` int(255) DEFAULT NULL,
  `EMAIL` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `FONE` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ENDERECO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `NUMERO` int(11) NOT NULL,
  `BAIRRO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CIDADE` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ESTADO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CEP` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `NOME` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID`, `USER`, `SENHA`, `COD_EMPRESA`, `EMAIL`, `FONE`, `ENDERECO`, `NUMERO`, `BAIRRO`, `CIDADE`, `ESTADO`, `CEP`, `NOME`) VALUES
(1, 'admin', 'admin', 1, 'czvdsvsdv', '(12) 3456-7891', 'xzcsc', 0, 'zxc', 'dvzxvx', 'RS', '12.345-678', 'sdavdc'),
(3, 'victordesouzaabreu@gmail.com', 'admin', 6, '', '(55) 5555-5555', 'sd', 56, 'sd', 'sd', 'RS', '55.555-555', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
