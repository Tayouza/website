-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Fev-2022 às 19:48
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `main`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `nome_cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nome_cargo`) VALUES
(1, 'administrador'),
(2, 'gerente'),
(3, 'usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadospessoais`
--

CREATE TABLE `dadospessoais` (
  `id_dadospessoais` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `idade` varchar(2) DEFAULT NULL,
  `id_login` int(11) DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadospessoais`
--

INSERT INTO `dadospessoais` (`id_dadospessoais`, `nome`, `idade`, `id_login`, `cargo`) VALUES
(1, 'Admin', '99', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `mensagem` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(1, 'Não informado', 'Tayouza@gmail.com', 'Não informado', 'Não informado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logins`
--

INSERT INTO `logins` (`id`, `user`, `pass`) VALUES
(1, 'admin', '$2y$10$V5jhWit3AMrmHLm7/UmaF.Lmu/kRUy0AgvUZ4qDW.VeOxliBoIgVK');

--senha padrão 'admin'

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosonline`
--

CREATE TABLE `usuariosonline` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `ultima_acao` datetime DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `navegador` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas`
--

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `dia` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices para tabela `dadospessoais`
--
ALTER TABLE `dadospessoais`
  ADD PRIMARY KEY (`id_dadospessoais`),
  ADD KEY `id_login` (`id_login`),
  ADD KEY `cargo` (`cargo`);

--
-- Índices para tabela `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Índices para tabela `usuariosonline`
--
ALTER TABLE `usuariosonline`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `dadospessoais`
--
ALTER TABLE `dadospessoais`
  MODIFY `id_dadospessoais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuariosonline`
--
ALTER TABLE `usuariosonline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT de tabela `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dadospessoais`
--
ALTER TABLE `dadospessoais`
  ADD CONSTRAINT `dadospessoais_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `logins` (`id`),
  ADD CONSTRAINT `dadospessoais_ibfk_2` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
