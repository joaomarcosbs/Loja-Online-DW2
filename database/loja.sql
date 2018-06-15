-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2018 at 12:20 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(100) NOT NULL,
  `produto_descricao` varchar(1000) NOT NULL,
  `produto_valor` int(11) NOT NULL,
  `produto_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`produto_id`, `produto_nome`, `produto_descricao`, `produto_valor`, `produto_img`) VALUES
(1, 'iPhone X', 'Apple iPhone X Prata 256GB Tela 5.8\" iOS 11 4G Wi-Fi Câmera 12MP', 669900, 'iphone-x-gray-select-2017.jpeg'),
(2, 'ASUS Strix H270F', 'Placa Mãe Gamer Asus, suporta 6/7ª Geração Intel', 49900, '172152255-700x400.jpeg'),
(3, 'Galaxy Tab A', 'Samsung Galaxy Tab A SM-P585M 16GB Wi-Fi 4G Tela 10.1\" Android', 129900, 'unnamed-222-700x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `usuario_sobrenome` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `usuario_telefone` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `usuario_cpf` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `usuario_email` varchar(256) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `usuario_senha` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`, `usuario_sobrenome`, `usuario_telefone`, `usuario_cpf`, `usuario_email`, `usuario_senha`) VALUES
(6, 'Guilherme', 'Silva', '123456789', '111222333444555', 'a@a.com', '$2y$10$XvXloKh.JtwrVtdkNqeTn./1J8j3edqQhliZGF7QzWhOa6BOjjcHG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`,`usuario_cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
