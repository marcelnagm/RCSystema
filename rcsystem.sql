-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 21-Ago-2014 às 16:53
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `rcsystem`
--
CREATE DATABASE IF NOT EXISTS `rcsystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rcsystem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cart`
--

CREATE TABLE IF NOT EXISTS `tb_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` float NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_shop` (`id_shop`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tb_cart`
--

INSERT INTO `tb_cart` (`id`, `id_shop`, `id_product`, `quantity`, `subtotal`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(14, 18, 1, 3, 0, '2014-08-20 02:26:18', 1, NULL, NULL, NULL, NULL),
(15, 19, 1, 7, 0, '2014-08-20 15:52:24', 1, '2014-08-20 15:52:30', 1, NULL, NULL),
(16, 19, 2, 34, 0, '2014-08-20 15:52:46', 1, NULL, NULL, NULL, NULL),
(17, 30, 1, 2, 0, '2014-08-20 16:04:51', 1, NULL, NULL, NULL, NULL),
(18, 30, 2, 2, 0, '2014-08-20 16:05:09', 1, NULL, NULL, NULL, NULL),
(19, 39, 2, 12, 960, '2014-08-21 01:14:47', 1, '2014-08-21 01:16:37', 1, NULL, NULL),
(20, 39, 1, 5, 25, '2014-08-21 01:14:54', 1, '2014-08-21 01:16:25', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_category`
--

INSERT INTO `tb_category` (`id`, `description`) VALUES
(3, 'BLUSA'),
(4, 'CALCA2'),
(5, 'MEIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_client`
--

CREATE TABLE IF NOT EXISTS `tb_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cellphone` int(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_client`
--

INSERT INTO `tb_client` (`id`, `document_id`, `name`, `cellphone`, `address`, `email`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(2, 4342, 'MAA', 32131, 'LAaaaaaa Vai2', 'Maaa2', '0000-00-00 00:00:00', 0, '2014-08-14 01:37:21', 1, '0000-00-00 00:00:00', 0),
(3, 1232, 'dsafsd', 42342, 'dsfds', 'fgfd', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, 4353453, 'rnbvnbvnv', 53453, 'sdfsdfs', 'sdffdssdf', '2014-08-14 01:37:55', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_deliver`
--

CREATE TABLE IF NOT EXISTS `tb_deliver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `document_number` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `document_number` (`document_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_deliver`
--

INSERT INTO `tb_deliver` (`id`, `description`, `document_number`, `contact`, `location`) VALUES
(3, 'LEE', 12344, 'JOMAR - 81193738 E EMAIL - M@M.COM', 'RUA LOCAL BAIRRO DOIDO'),
(4, 'MICROSOFT', 4533, 'BILL GATES', 'MAAAAA'),
(5, 'APPLE', 2333, 'STEEVE - 8822--', 'LA'),
(6, 'GOOGLE', 342111, 'DOC MOOO', 'LA - SAO FRANCISCO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entry`
--

CREATE TABLE IF NOT EXISTS `tb_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_deliver` int(11) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_deliver` (`id_deliver`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_entry`
--

INSERT INTO `tb_entry` (`id`, `id_deliver`, `description`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(1, 4, 'Aquisicao de produtos da informatica', '2014-08-19 19:57:00', 1, NULL, NULL, NULL, NULL),
(2, 3, 'COmpra de outros detalhes', '2014-08-13 17:34:20', NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Compra da Alessandra', '2014-08-09 13:40:46', NULL, NULL, NULL, NULL, NULL),
(5, 5, 'vsdfsd', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 5, '341fd4', '2014-08-14 01:02:48', 1, '2014-08-14 01:08:59', 1, '2014-08-14 01:08:59', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_installment`
--

CREATE TABLE IF NOT EXISTS `tb_installment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_payment` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `value` float NOT NULL,
  `value_paid` float DEFAULT NULL,
  `due_date` date NOT NULL,
  `type` int(11) NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_payment` (`id_payment`,`id_client`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Extraindo dados da tabela `tb_installment`
--

INSERT INTO `tb_installment` (`id`, `id_payment`, `id_client`, `value`, `value_paid`, `due_date`, `type`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(100, 142, 4, 10.75, NULL, '2014-09-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 142, 4, 10.75, NULL, '2014-10-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 142, 4, 10.75, NULL, '2014-11-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 142, 4, 10.75, NULL, '2014-12-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 142, 4, 10.75, NULL, '2015-01-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 143, 4, 3957, NULL, '2014-09-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 143, 4, 3957, NULL, '2014-10-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 144, 3, 800, NULL, '2014-09-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 144, 3, 800, NULL, '2014-10-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 144, 3, 800, NULL, '2014-11-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 144, 3, 800, NULL, '2014-12-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 144, 3, 800, NULL, '2015-01-20', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 144, 3, 800, NULL, '2015-02-20', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_method_payment`
--

CREATE TABLE IF NOT EXISTS `tb_method_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_method_payment`
--

INSERT INTO `tb_method_payment` (`id`, `description`, `type`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(1, 'Cartao maestro', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'cartao mastercard', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'cartao visa', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Cartao visaeletron', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Dinheiro', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'CREDIARIO', 3, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'CHEQUE A VISTA', 4, '2014-08-14 15:59:31', 1, NULL, NULL, NULL, NULL),
(8, 'CHEQUE A PRE-DATADO', 4, '2014-08-14 15:59:48', 1, NULL, NULL, NULL, NULL),
(9, 'CORTESIA', 5, '2014-08-14 16:00:00', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_payment`
--

CREATE TABLE IF NOT EXISTS `tb_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `id_shop` int(11) DEFAULT NULL,
  `id_method` int(11) DEFAULT NULL,
  `value` float NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_shop` (`id_shop`),
  KEY `id_method` (`id_method`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Extraindo dados da tabela `tb_payment`
--

INSERT INTO `tb_payment` (`id`, `id_client`, `id_shop`, `id_method`, `value`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(142, 4, 17, 4, 43, '2014-08-20 01:55:52', 1, NULL, NULL, NULL, NULL),
(143, 4, 17, 1, 3957, '2014-08-20 02:05:47', 1, NULL, NULL, NULL, NULL),
(144, 3, 18, 1, 4000, '2014-08-20 02:26:41', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `barcode` int(32) NOT NULL,
  `info` varchar(100) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_subcategory` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price_cost` float DEFAULT NULL,
  `price_sell` float DEFAULT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  KEY `id_subcategory` (`id_subcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_product`
--

INSERT INTO `tb_product` (`id`, `barcode`, `info`, `id_category`, `id_subcategory`, `quantity`, `price_cost`, `price_sell`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(1, 342324, 'Calca Brim listradas com cores', 4, 8, 2, 4, 5, '2014-08-21 01:20:42', NULL, '2014-08-21 01:19:17', 1, NULL, NULL),
(2, 342423, 'sdasda', 3, 8, 65, 8, 80, '2014-08-21 01:20:42', NULL, '2014-08-21 01:19:42', 1, NULL, NULL),
(3, 53535, 'PC COM 2 GHZ', 4, 7, 0, NULL, NULL, '2014-08-13 16:24:59', NULL, NULL, NULL, NULL, NULL),
(5, 53453, 'PC COM 4GHX', 4, 7, 1, 400, 2000, '2014-08-20 15:47:19', NULL, '2014-08-20 02:25:57', 1, NULL, NULL),
(6, 654664, 'MEMORIA 4GB - 133MHZ', 4, 6, 0, 0, 0, '2014-08-13 16:32:00', NULL, NULL, NULL, NULL, NULL),
(7, 342342, 'MEMORIA 2GB - 133MHZ', 4, 7, 0, 0, 0, '2014-08-13 16:32:16', NULL, NULL, NULL, NULL, NULL),
(8, 5345353, 'FGBVNBVNV', 4, 7, 0, 0, 0, '2014-08-13 18:54:30', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_promotion`
--

CREATE TABLE IF NOT EXISTS `tb_promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `dt_start` date NOT NULL,
  `dt_end` date NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `price_promotion` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_shop`
--

CREATE TABLE IF NOT EXISTS `tb_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) DEFAULT NULL,
  `total` float NOT NULL,
  `pending` int(11) NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `removed_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  KEY `id_client_2` (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `tb_shop`
--

INSERT INTO `tb_shop` (`id`, `id_client`, `total`, `pending`, `date_in`, `user_in`, `updated_date`, `updated_user`, `removed`, `removed_user`) VALUES
(1, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 154.62, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 2, 13.29, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, 33.36, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 3, 0, 0, '2014-08-14 00:59:00', 1, NULL, NULL, NULL, NULL),
(17, 4, 4000, 0, '2014-08-20 02:08:49', 1, NULL, NULL, NULL, NULL),
(18, 3, 4000, 0, '2014-08-20 02:26:44', 1, NULL, NULL, NULL, NULL),
(19, 2, 0, 0, '2014-08-20 15:52:59', 1, NULL, NULL, NULL, NULL),
(20, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 2, 985, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 2, 420, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_stock`
--

CREATE TABLE IF NOT EXISTS `tb_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) DEFAULT NULL,
  `id_entry` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price_cost` float NOT NULL,
  `price_sell` float NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `user_in` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `removed` datetime DEFAULT NULL,
  `user_removed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_entry` (`id_entry`),
  KEY `id_entry_2` (`id_entry`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `tb_stock`
--

INSERT INTO `tb_stock` (`id`, `id_product`, `id_entry`, `quantity`, `price_cost`, `price_sell`, `date_in`, `user_in`, `date_updated`, `user_updated`, `removed`, `user_removed`) VALUES
(1, 1, 1, 3, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 2, 5, 2.221, 3.3232, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2, 2, 32, 32.56, 323.2, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, 1, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2, 4, 3, 3.78, 3.45, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 5, 1, 5, 400, 2000, '2014-08-19 19:56:55', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_subcategory`
--

CREATE TABLE IF NOT EXISTS `tb_subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_subcategory`
--

INSERT INTO `tb_subcategory` (`id`, `id_category`, `description`) VALUES
(6, 3, 'COMPRIDA'),
(7, 3, 'CURTA1'),
(8, 4, 'JEANS'),
(9, 4, 'NADA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D6E3D45892FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_D6E3D458A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'marcel', 'marcel', 'marcel.nagm@gmail.com', 'marcel.nagm@gmail.com', 1, 'hvmjm839ag0g8404gkgkk4s4s440ogs', 'QC2KIrc6bzZXrtsbg5hhDneOFWfSEe1Jn3ULdbBCA4OrpPMb3vtb4fO6hMImV8s5QHF9ryZJJL5VAzmcdhra+Q==', '2014-08-21 15:16:12', 0, 0, NULL, NULL, NULL, 'a:3:{i:0;s:5:"admin";i:1;s:3:"bug";i:2;s:3:"tug";}', 0, NULL),
(3, 'mx', 'mx', 'marcel2.nagm@gmail.com', 'marcel2.nagm@gmail.com', 1, 'pyryhwof040c8scscc0o8s8og0ck0c8', 'A7iXEG8wogXmJ+5nkiF6bX5hNhJ9nASG9vOnplPHlF8sJrFRukZzPn3xSG3n6T/vfXeU7HeyOxkKBg9yCmH2Hg==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user_permission`
--

CREATE TABLE IF NOT EXISTS `tb_user_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `module` varchar(30) NOT NULL,
  `permission` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD CONSTRAINT `tb_cart_ibfk_1` FOREIGN KEY (`id_shop`) REFERENCES `tb_shop` (`id`),
  ADD CONSTRAINT `tb_cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id`);

--
-- Limitadores para a tabela `tb_entry`
--
ALTER TABLE `tb_entry`
  ADD CONSTRAINT `tb_entry_ibfk_1` FOREIGN KEY (`id_deliver`) REFERENCES `tb_deliver` (`id`);

--
-- Limitadores para a tabela `tb_installment`
--
ALTER TABLE `tb_installment`
  ADD CONSTRAINT `tb_installment_ibfk_1` FOREIGN KEY (`id_payment`) REFERENCES `tb_payment` (`id`),
  ADD CONSTRAINT `tb_installment_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id`);

--
-- Limitadores para a tabela `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD CONSTRAINT `tb_payment_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id`),
  ADD CONSTRAINT `tb_payment_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `tb_shop` (`id`),
  ADD CONSTRAINT `tb_payment_ibfk_3` FOREIGN KEY (`id_method`) REFERENCES `tb_method_payment` (`id`);

--
-- Limitadores para a tabela `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id`),
  ADD CONSTRAINT `tb_product_ibfk_2` FOREIGN KEY (`id_subcategory`) REFERENCES `tb_subcategory` (`id`);

--
-- Limitadores para a tabela `tb_promotion`
--
ALTER TABLE `tb_promotion`
  ADD CONSTRAINT `tb_promotion_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id`);

--
-- Limitadores para a tabela `tb_shop`
--
ALTER TABLE `tb_shop`
  ADD CONSTRAINT `tb_shop_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id`);

--
-- Limitadores para a tabela `tb_stock`
--
ALTER TABLE `tb_stock`
  ADD CONSTRAINT `tb_stock_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id`),
  ADD CONSTRAINT `tb_stock_ibfk_2` FOREIGN KEY (`id_entry`) REFERENCES `tb_entry` (`id`);

--
-- Limitadores para a tabela `tb_subcategory`
--
ALTER TABLE `tb_subcategory`
  ADD CONSTRAINT `tb_subcategory_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id`);

--
-- Limitadores para a tabela `tb_user_permission`
--
ALTER TABLE `tb_user_permission`
  ADD CONSTRAINT `tb_user_permission_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
