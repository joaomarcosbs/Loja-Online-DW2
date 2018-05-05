-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2018 at 10:51 AM
-- Server version: 5.7.21-1ubuntu1
-- PHP Version: 7.2.3-1ubuntu1

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
(1, 'Guilherme', 'Silva', '212121', '90180128', 'asd@asd.com', '$2y$10$52JazqnCg9.1ZRYqtWWc.uFfZpMQ756HIguGqDe/DBGFK4Tt9bMIW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`,`usuario_cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
