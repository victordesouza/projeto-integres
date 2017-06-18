-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 18-Jun-2017 às 14:07
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `NIVEL` int(11) NOT NULL,
  `PAI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID`, `NOME`, `NIVEL`, `PAI`) VALUES
(1, 'Cozinhas', 1, 0),
(2, 'Mesas', 2, 1),
(3, 'Cozinhas moduladas', 2, 1),
(4, 'Mesa Metal', 3, 2),
(5, 'Armário Aéreo', 3, 3),
(6, 'Balcão', 3, 3),
(7, 'Bancada', 3, 3),
(8, 'Kit Fornos', 3, 3),
(9, 'Mesa Madeira', 3, 3),
(10, 'Nicho', 3, 3),
(11, 'Armário Paneleiro', 3, 3),
(12, 'Tampo', 3, 3);

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
-- Indexes for table `cad_empresa`
--
ALTER TABLE `cad_empresa`
  ADD PRIMARY KEY (`COD`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_empresa`
--
ALTER TABLE `cad_empresa`
  MODIFY `COD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
