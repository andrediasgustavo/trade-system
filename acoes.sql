-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 20/06/2016 às 00:15
-- Versão do servidor: 5.5.49-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.36-1+donate.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `acoes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acoes`
--

CREATE TABLE IF NOT EXISTS `acoes` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `tipo_negocio` varchar(6) DEFAULT NULL,
  `quantidade` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Fazendo dump de dados para tabela `acoes`
--

INSERT INTO `acoes` (`id`, `nome`, `preco`, `tipo_negocio`, `quantidade`) VALUES
(1, 'AMBEV_ON', 18.20, NULL, NULL),
(2, 'BRADESCO_PN', 24.20, NULL, NULL),
(3, 'BRF_FOODS_ON', 45.10, NULL, NULL),
(4, 'BMF_BOVESPA_ON', 16.00, NULL, NULL),
(5, 'CIELO_ON', 33.05, NULL, NULL),
(6, 'EMBRAER_ON', 18.00, NULL, NULL),
(7, 'ITAUSA_PN', 7.20, NULL, NULL),
(8, 'ITAUBANCO_PN', 28.84, NULL, NULL),
(9, 'JBS_ON', 9.62, NULL, NULL),
(10, 'PETROBRAS_ON', 11.40, NULL, NULL),
(11, 'PETROBRAS_PN', 8.91, NULL, NULL),
(12, 'ULTRAPAR_ON', 70.80, NULL, NULL),
(13, 'VALE_R_DOCE_ON', 15.28, NULL, NULL),
(14, 'TELEF_BRASIL_PN', 40.25, NULL, NULL),
(15, 'LOJAS_AMERIC', 14.70, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carteira_acoes`
--

CREATE TABLE IF NOT EXISTS `carteira_acoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `total_valor` decimal(20,0) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(3, 'andre dias', 'andrediasgustavo@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
