-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/08/2020 às 14:37
-- Versão do servidor: 5.6.41-84.1
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `amador94_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `nome_medico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_paciente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idade_paciente` int(2) NOT NULL,
  `cartao_sus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `nome_medico`, `especialidade`, `nome_paciente`, `idade_paciente`, `cartao_sus`, `cpf`, `data`, `hora`) VALUES
(16, 'Julyeti da Silva Pereira', 'Pediatria', 'Margarete Maria', 8, '74185296346', '03345678952', '20/07/2020', '13:45:07'),
(17, 'Marlene da Silva ', 'Cardilogia', 'Marlene da Silva ', 56, '36925814778', '74185296364', '20/05/35', ' 13:15:15'),
(18, 'Marcolino Santana Silva ', 'Oncologista', 'Marcos Caetano Vilanova', 78, '32165498791', '78945612379', '20/12/2021', '13:45:56'),
(19, 'Julyeti da Silva Pereira', 'Cardilogia', 'Marcos Caetano Vilanova', 45, '36925814778', '74185296364', '20/03/2022', '14:35:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idade` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cartao_sus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` int(10) NOT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `email`, `idade`, `telefone`, `cpf`, `cartao_sus`, `cep`, `rua`, `bairro`, `cidade`, `estado`) VALUES
(27, 'Margarete Maria', 'ronashippuuden2@hotmail.com', '37', '86998154545', '03345678952', '74185296346', 64034155, 'Oeste', 'Dirceu Arcoverde I', 'TERESINA', 'Piauí'),
(25, 'Marlene da Silva ', 'rona2@hotmail.co', '34', '86998181544', '74185296364', '36925814778', 64077230, 'Desenbargador Berilo Mota', 'Dirceu Arcoverde I', 'TERESINA', 'Piauí'),
(26, 'Marcos Caetano Vilanova', 'ronashippuu@hotmail.com', '31', '8699815141052', '78945612379', '32165498791', 64006220, 'Oeste', 'Gurupi', 'TERESINA', 'Piauí'),
(17, 'Julyeti da Silva Pereira', 'jujuznha@gmail.com', '28', '86998181448', '15915995165', '35735765452', 64077230, 'Vinte e tres', 'Alto da Ressulreicão', 'Teresina', 'PI');

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissionais`
--

CREATE TABLE `profissionais` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `profissao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `profissionais`
--

INSERT INTO `profissionais` (`id`, `nome`, `email`, `telefone`, `cpf`, `profissao`, `especialidade`) VALUES
(1, 'Marcolino Santana Silva ', 'Marcolino@gmail.com', '86998487556', '73191364852', 'Médico', 'Cardilogia'),
(6, 'Marlene da Silva ', 'ronashippuuden2@hotmail.com', '86845127856', '14925736849', 'Médico', 'Pediatria'),
(7, 'Julyeti da Silva Pereira', 'ronash@hotmail.com', '86945457878', '45678912349', 'Médico', 'Oncologista');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `profissionais`
--
ALTER TABLE `profissionais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `profissionais`
--
ALTER TABLE `profissionais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
