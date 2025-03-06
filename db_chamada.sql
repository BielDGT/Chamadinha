-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/03/2025 às 15:49
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_chamada`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id`, `nome`) VALUES
(1, 'Antônio Gabriel Santos Godoy Carneiro'),
(2, 'Caua Canale Ferreira'),
(3, 'Daniel Camargo de Lima\r\n'),
(4, 'David Gabriel Tarley\r\n'),
(7, 'Josue Orellana Montenegro\r\n'),
(8, 'Kenya Banach Chrominski Jaques\r\n'),
(9, 'Leandro Piai Barreto\r\n'),
(10, 'Marcia Gisseli Mamani Condarco\r\n'),
(11, 'Matheus Dantas de Sousa\r\n'),
(12, 'Matheus David\r\n'),
(13, 'Matheus Guida\r\n'),
(14, 'Matheus Leonardo Ismarsi\r\n'),
(15, 'Ryan Lima Germano\r\n'),
(16, 'Thiago Bispo Souza\r\n'),
(17, 'Victor Huggo Lima da Silva\r\n'),
(18, 'Vítor Frazatto Barduco\r\n'),
(19, 'Walmir Antonio de Sousa Ribeiro'),
(20, 'teste up 2'),
(66, 'teste up 1'),
(67, 'update 2 teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_info_alunos`
--

CREATE TABLE `tb_info_alunos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `frequente` tinyint(1) NOT NULL,
  `id_alunos` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_info_alunos`
--

INSERT INTO `tb_info_alunos` (`id`, `telefone`, `email`, `nascimento`, `frequente`, `id_alunos`, `img`) VALUES
(1, '12950617242', 'Antonio@gmail.com', '1999-05-07', 1, 1, 'antonio.png'),
(2, '11698041858', 'Caua@gmail.com', '2007-11-23', 1, 2, 'caua.png'),
(3, '19495991393', 'Daniel@gmail.com', '2008-01-10', 1, 3, 'daniel.png'),
(4, '16109028285', 'David@gmail.com', '2000-09-08', 1, 4, 'david.png'),
(5, '14413046245', 'Gabriel@gmail.com', '2007-05-05', 0, 5, ''),
(7, '12632477002', 'Josue @gmail.com', '2006-01-19', 1, 7, 'josue.png'),
(8, '16773431839', 'Kenya@gmail.com', '1994-02-17', 1, 8, 'kenya.png'),
(9, '11440797994', 'Leandro@gmail.com', '2006-05-04', 1, 9, 'leandro.png'),
(10, '14073968091', 'Marcia@gmail.com', '2000-05-07', 1, 10, 'marcia.png'),
(11, '13974976536', 'MatheusDantas@gmail.com', '1980-07-06', 1, 11, 'matheus-dantas.png'),
(12, '12143616002', 'MatheusDavid@gmail.com', '2007-04-27', 1, 12, 'matheus-david.png'),
(13, '18898381340', 'MatheusGuida@gmail.com', '2004-01-02', 1, 13, 'matheus-guida.png'),
(14, '18262215541', 'MatheusIsmarsi@gmail.com', '2007-02-22', 1, 14, 'matheus-ismarsi.png'),
(15, '12620419470', 'Ryan@gmail.com', '2008-03-02', 1, 15, 'ryan.png'),
(16, '19627729143', 'Thiago@gmail.com', '2007-03-24', 1, 16, 'thiago.png'),
(17, '19103526611', 'Victor@gmail.com', '2007-01-18', 1, 17, 'victor.png'),
(18, '13409792391', 'Vítor@gmail.com', '2005-08-22', 1, 18, 'vitor.png'),
(19, '13157565466', 'Walmir@gmail.com', '1994-04-29', 1, 19, 'walmir.png'),
(20, '19984546546', 'rick@gmail.com', '2025-01-15', 0, 0, 'user.jpg'),
(21, '19984546546', 'rick@gmail.com', '2025-01-15', 0, 0, 'user.jpg'),
(25, '19987171918', 'david.tarleyy@gmail.com', '2000-09-08', 0, 66, 'teste_form.png'),
(26, '2222222222', 'teste2@gmail.com', '2222-02-22', 0, 67, 'Mídia.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_info_alunos`
--
ALTER TABLE `tb_info_alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `tb_info_alunos`
--
ALTER TABLE `tb_info_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
