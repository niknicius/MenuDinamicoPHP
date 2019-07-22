-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jul-2019 às 13:06
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dropdown` int(11) NOT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`codigo`, `titulo`, `url`, `dropdown`, `ordem`) VALUES
(1, 'Usuário', '', 1, 1),
(2, 'Produto', '', 1, 2),
(7, 'Fornecedor', '', 1, 3),
(8, 'Sair', 'logout.php', 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `submenu`
--

CREATE TABLE `submenu` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_menu` int(11) NOT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `submenu`
--

INSERT INTO `submenu` (`codigo`, `titulo`, `url`, `codigo_menu`, `ordem`) VALUES
(8, 'Inserir', 'inserirusuario.php', 1, 1),
(9, 'Consultar', 'consultarusuario.php', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_codigo_menu` (`codigo_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `FK_codigo_menu` FOREIGN KEY (`codigo_menu`) REFERENCES `menu` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
