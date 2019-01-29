-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Jan-2019 às 14:06
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marcacao`
--
CREATE DATABASE IF NOT EXISTS `marcacao` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `marcacao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora`
--

DROP TABLE IF EXISTS `hora`;
CREATE TABLE IF NOT EXISTS `hora` (
  `id_hora` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hora` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_hora`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hora`
--

INSERT INTO `hora` (`id_hora`, `hora`) VALUES
(1, '07h 00'),
(2, '07h 15'),
(3, '07h 30'),
(4, '07h 45'),
(5, '07h 50'),
(6, '08h 00'),
(7, '08h 15'),
(8, '08h 30'),
(9, '08h 40'),
(10, '08h 45'),
(11, '09h 00'),
(12, '09h 15'),
(13, '09h 30'),
(14, '09h 45'),
(15, '10h 00'),
(16, '10h 15'),
(17, '10h 30'),
(18, '10h 45'),
(19, '10h 50'),
(20, '11h 00'),
(21, '11h 15'),
(22, '11h 30'),
(23, '11h 40'),
(24, '11h 45'),
(25, '12h 00'),
(26, '12h 15'),
(27, '12h 30'),
(28, '12h 45'),
(29, '13h 00'),
(30, '13h 15'),
(31, '13h 30'),
(32, '13h 45'),
(33, '14h 00'),
(34, '14h 15'),
(35, '14h 30'),
(36, '14h 45'),
(37, '15h 00'),
(38, '15h 15'),
(39, '15h 30'),
(40, '15h 45'),
(41, '16h 00'),
(42, '16h 15'),
(43, '16h 30'),
(44, '16h 45'),
(45, '17h 00'),
(46, '17h 15'),
(47, '17h 30'),
(48, '17h 45'),
(49, '18h 00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora_termino`
--

DROP TABLE IF EXISTS `hora_termino`;
CREATE TABLE IF NOT EXISTS `hora_termino` (
  `id_hora_termino` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hora_termino` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_hora_termino`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hora_termino`
--

INSERT INTO `hora_termino` (`id_hora_termino`, `hora_termino`) VALUES
(1, '07h 00'),
(2, '07h 15'),
(3, '07h 30'),
(4, '07h 45'),
(5, '07h 50'),
(6, '08h 00'),
(7, '08h 15'),
(8, '08h 30'),
(9, '08h 40'),
(10, '08h 45'),
(11, '09h 00'),
(12, '09h 15'),
(13, '09h 30'),
(14, '09h 45'),
(15, '10h 00'),
(16, '10h 15'),
(17, '10h 30'),
(18, '10h 45'),
(19, '10h 50'),
(20, '11h 00'),
(21, '11h 15'),
(22, '11h 30'),
(23, '11h 40'),
(24, '11h 45'),
(25, '12h 00'),
(26, '12h 15'),
(27, '12h 30'),
(28, '12h 45'),
(29, '13h 00'),
(30, '13h 15'),
(31, '13h 30'),
(32, '13h 45'),
(33, '14h 00'),
(34, '14h 15'),
(35, '14h 30'),
(36, '14h 45'),
(37, '15h 00'),
(38, '15h 15'),
(39, '15h 30'),
(40, '15h 45'),
(41, '16h 00'),
(42, '16h 15'),
(43, '16h 30'),
(44, '16h 45'),
(45, '17h 00'),
(46, '17h 15'),
(47, '17h 30'),
(48, '17h 45'),
(49, '18h 00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcacoes`
--

DROP TABLE IF EXISTS `marcacoes`;
CREATE TABLE IF NOT EXISTS `marcacoes` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `requisitante` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_hora` int(6) DEFAULT NULL,
  `id_hora_termino` int(6) DEFAULT NULL,
  `lab_01` int(1) DEFAULT NULL,
  `lab_02` int(1) DEFAULT NULL,
  `finalizado` int(1) DEFAULT NULL,
  `obs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hora` (`id_hora`),
  KEY `id_hora_termino` (`id_hora_termino`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `marcacoes`
--

INSERT INTO `marcacoes` (`id`, `requisitante`, `dia`, `id_hora`, `id_hora_termino`, `lab_01`, `lab_02`, `finalizado`, `obs`) VALUES
(24, 'Diego', '2011-08-08', 1, 27, 1, 1, 1, 'Usará os dois labs, para o APP prova.'),
(28, 'Fernanda (Espanhol)', '2011-08-08', 15, 27, 1, 1, 1, 'Fones de ouvido. Usará os 2 labs.'),
(79, 'teste', '2011-08-08', 15, 19, 1, 0, 1, 'teste'),
(80, 'Patrícia Souza', '2011-08-08', 15, 27, 1, 0, 1, 'Tatiana'),
(81, 'Patrícia Souza', '2011-08-08', 15, 27, 1, 0, 1, 'Tatiana'),
(82, 'Patricia Souza vvv', '2011-08-08', 7, 23, 1, 0, 1, 'Teste'),
(83, 'teste', '2011-08-08', 6, 9, 1, 0, 1, 'teste'),
(84, 'teste', '2011-08-08', 1, 19, 0, 1, 1, 'teste'),
(85, 'guilherme', '2011-08-08', 10, 15, 0, 1, 1, 'teste'),
(86, 'teste', '2011-08-08', 5, 14, 0, 1, 1, 'teste'),
(87, 'julio', '2011-08-08', 3, 17, 0, 0, 1, 'teste'),
(88, 'Renata Torres', '2011-08-08', 1, 13, 0, 1, 1, ''),
(89, 'Renata Torres', '2011-08-08', 1, 13, 1, 0, 1, ''),
(90, 'Vinícius', '2011-08-08', 15, 27, 1, 0, 1, ''),
(91, 'julio', '2011-08-08', 19, 47, 1, 0, 1, 'teste'),
(92, 'Cristiane', '2011-08-08', 1, 9, 1, 0, 1, 'Aula de Robótica - 7o ano - Catapulta'),
(93, 'Fernanda', '2011-08-08', 15, 23, 1, 1, 1, 'AppProva'),
(94, 'Cristiane', '2011-08-08', 15, 23, 1, 0, 1, 'Robótica - 7o ano - Catapulta'),
(95, 'Vinícius', '2011-08-08', 15, 19, 0, 1, 1, 'Conclusão do trabalho anterior'),
(96, 'julio', '2011-08-08', 10, 15, 0, 0, 1, ''),
(97, 'Danuse', '2011-08-08', 1, 27, 0, 1, 1, 'Uso dos computadores com  pasta para salvar documentos do professor'),
(98, 'Patricia Guimarães', '2011-08-08', 1, 13, 0, 1, 1, 'Criação de cartaz crítico no Word, sobre a Olimpíada, mostrando as vantagens e desvantagens de ter um evento como esse no RJ. '),
(99, 'Patrícia Guimarães', '2011-08-08', 1, 13, 0, 1, 1, 'Criação de um cartaz crítico no Word, sobre a Olimpíada, mostrando as vantagens e desvantagens de ter um evento como esse no RJ. '),
(100, 'Rita', '2011-08-08', 1, 13, 1, 0, 1, '7º ano'),
(101, 'walter', '2011-08-08', 17, 46, 1, 0, 1, 'teste'),
(102, 'Fernanda(Geografia)', '2011-08-08', 1, 27, 0, 1, 1, ''),
(103, 'Mônica Cyriaco', '2011-08-08', 1, 49, 1, 0, 1, 'Filme'),
(104, 'Monica Cyriaco', '2011-08-08', 1, 49, 1, 0, 1, 'Filme'),
(105, 'Mônica Cyriaco', '2011-08-08', 15, 49, 1, 0, 1, '10h - até final da manhã\r\nTarde - os dois últimos tempos\r\nFilme'),
(106, 'Vinícius - Geografia', '2011-08-08', 1, 25, 1, 0, 1, 'Necessita de 3 iPad'),
(107, 'Fernanda(Geografia)', '2011-08-08', 11, 27, 0, 1, 1, 'Verificar'),
(108, 'teste', '2011-08-08', 5, 2, 1, 0, 1, 'ste'),
(109, 'Rodrigo Teste', '2011-08-08', 12, 18, 1, 0, 1, ''),
(110, 'Cristiane(História)', '2011-08-08', 25, 31, 1, 0, 1, 'Só o espaço(Aula de Recuperação)'),
(111, 'Vitor - Física', '2011-08-08', 15, 27, 0, 1, 1, 'internet'),
(112, 'Vinícius', '2011-08-08', 15, 27, 0, 1, 1, 'Criação de um jornal on line'),
(113, 'Vinícius', '2011-08-08', 15, 27, 0, 1, 1, 'Jornal on line'),
(114, 'Vinícius', '2011-08-08', 15, 27, 0, 1, 1, 'Jornal on line'),
(115, 'Vinícius', '2011-08-08', 15, 27, 0, 1, 1, 'Jornal on line'),
(116, 'Vinícius', '2011-08-08', 1, 27, 1, 0, 1, ''),
(117, 'teste', '2011-08-08', 8, 14, 1, 1, 1, 'teste'),
(118, '', '11/11/2016', 13, 3, 1, 0, 1, 'ws'),
(119, 'Danuse', '23/09/2016', 1, 25, 1, 0, 1, ''),
(120, 'Renata Torres', '22/09/2016', 15, 27, 0, 1, 1, ''),
(121, 'Renata Torres', '29/09/2016', 15, 27, 1, 0, 1, ''),
(122, 'Marcela', '29/09/2016', 15, 27, 0, 1, 1, 'usar fones de ouvido'),
(123, 'hiuyiy877oio', '16/11/2016', 19, 46, 0, 0, 1, 'weew5w'),
(124, 'ad', '21/12/2016', 18, 17, 1, 0, 1, 'th'),
(125, 'tests', '', 2, 13, 1, 0, 1, 'thh'),
(126, '', '16/05/2017', 18, 19, 1, 0, 1, 'fvj'),
(127, '', '15/09/2018', 17, 11, 1, 0, 1, 'fnxfgjxjxjg'),
(128, 'bnaeYJY4JQQYJJYAJAJY4JQ446T64', '25/10/2018', 18, 16, 0, 0, 1, 'ADFehe'),
(129, 'julio', '12/02/2019', 7, 18, 1, 0, 0, 'ddsfhgjk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logado` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `logado`, `nivel`) VALUES
(7, 'admin', 'b5f1fc389b56bd3287373b2f12eb26385888ea02', NULL, 1),
(8, 'alex', 'fe703d258c7ef5f50b71e06565a65aa07194907f', NULL, 1),
(10, 'Raquel', '43e616358e6c30d3be6f4cca5a3cb9ce6457f770', NULL, 1),
(14, 'raquel', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL),
(15, 'marcela', '98bf6c987ab8ace2ba00f01ce7bc17783372f33a', NULL, NULL),
(16, 'marcela', 'adcd7048512e64b48da55b027577886ee5a36350', NULL, NULL),
(17, 'zac', 'adcd7048512e64b48da55b027577886ee5a36350', NULL, NULL),
(18, 'julio.santos@cambauba.org.br', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', NULL, NULL),
(19, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
