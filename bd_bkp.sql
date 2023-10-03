-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.epizy.com
-- Tempo de geração: 09/06/2023 às 14:53
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_30292132_caopaixaobd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animais`
--

CREATE TABLE `animais` (
  `id_animal` int(11) NOT NULL,
  `nome_animal` varchar(30) DEFAULT NULL,
  `cor` varchar(15) DEFAULT NULL,
  `raca` varchar(25) DEFAULT NULL,
  `idade` varchar(55) DEFAULT NULL,
  `especie` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `porte` varchar(8) DEFAULT NULL,
  `comentarios` varchar(100) DEFAULT NULL,
  `arquivo` tinytext DEFAULT NULL,
  `datacadastro` text DEFAULT NULL,
  `situacao` int(1) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `animais`
--

INSERT INTO `animais` (`id_animal`, `nome_animal`, `cor`, `raca`, `idade`, `especie`, `sexo`, `porte`, `comentarios`, `arquivo`, `datacadastro`, `situacao`, `id_user`) VALUES
(121, 'Thor', 'Misto', 'preto e branco', '1', 'gato', 'macho', 'medio', 'gato fofo', 'imgAnimal/imagem-09-11-2021-18-21-30-56622727893.jpg', '2021-11-09', 1, 12378),
(124, 'Toninho', 'Amarelo', 'Vira-Lata', '1', 'gato', 'macho', 'grande', 'toninho Ã© grandÃ£o e fofo', 'imgAnimal/imagem-09-11-2021-18-29-05-31665802426.jpg', '2021-11-09', 1, 12378),
(125, 'Mika', 'Preto', 'Vira-Lata', '1', 'gato', 'femea', 'pequeno', 'mika Ã© mt amiga', 'imgAnimal/imagem-09-11-2021-18-30-47-44288337654.jpg', '2021-11-09', 1, 12378),
(126, 'Costelinha', 'Preto', 'Vira-Lata', '2', 'cao', 'macho', 'grande', 'ele tem costelinha, mesmo sendo gordinho', 'imgAnimal/imagem-09-11-2021-18-32-00-3574644614.jpg', '2021-11-09', 1, 12378),
(128, 'Epaminondas', 'Amarelo', 'Golden com Labrador', '9', 'cao', 'macho', 'grande', 'Epaminondas estÃ¡ velhinho mas cheio de energia', 'imgAnimal/imagem-09-11-2021-18-35-39-60917243852.jpg', '2021-11-09', 1, 12378),
(130, 'Acerola', 'Cinza', 'SiamÃªs', '4', 'gato', 'femea', 'medio', 'olhos bonitos', 'imgAnimal/imagem-09-11-2021-18-39-30-7776195680.jpg', '2021-11-09', 1, 12378),
(131, 'Bigodinho', 'Preto', 'Vira-Lata', '2', 'gato', 'macho', 'medio', 'Ele tem uma marquinha de bigode', 'imgAnimal/imagem-09-11-2021-18-40-56-96287444942.jpg', '2021-11-09', 1, 12378),
(132, 'Marcos Paulo', 'Marrom', 'Pug', '1', 'cao', 'macho', 'pequeno', 'pugzinho', 'imgAnimal/imagem-09-11-2021-18-43-31-40000472914.jpg', '2021-11-09', 1, 12378),
(133, 'Brad Pit', 'Marrom', 'Pitbull', '1', 'cao', 'macho', 'grande', 'pit Ã© uma fofura', 'imgAnimal/imagem-09-11-2021-18-46-53-76752136230.jpg', '2021-11-09', 1, 12378),
(134, 'Singapura', 'Cinza', 'Persa', '2', 'gato', 'femea', 'medio', 'Carinha de brava mas Ã© um doce', 'imgAnimal/imagem-09-11-2021-18-50-59-69231250671.jpg', '2021-11-09', 1, 12378),
(141, ' Fredinho', ' Misto', ' Ciames', ' 2', 'gato', 'macho', 'medio', 'Fofo', 'imgAnimal/imagem-17-11-2021-10-52-48-59745082383.jpg', '2021-11-17', 1, 12370);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `senha` text DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `cidade` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `nascimento` text DEFAULT NULL,
  `situacao` int(1) DEFAULT NULL,
  `datacadastro` tinytext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `senha`, `email`, `cidade`, `telefone`, `nascimento`, `situacao`, `datacadastro`) VALUES
(12364, 'andreadm', '$2y$10$0MGGHKvob6vAHa/etXrL4eNA8QbKHh8mYky3aVQnTJRQLzfwBriQ.', 'andrelrossatti@gmail.com', 'DivinolÃ¢ndia', '19983396078', '2004-05-24', 0, '2021-11-06'),
(12382, 'bruno', '$2y$10$VkrZvO0mrTVYhGbt4frUo.zMY9NL16W9zT21OHKoYAqi2YUucW/na', 'bruno@reidelas.com', 'Mococa', 'bruno', '2001-01-01', 0, '2021-12-01'),
(12361, 'Diego', '$2y$10$03XBEAPiwWnWDTKSjG7ZJ.1x6nLj/UbFA2T3f4ZZJMq1NpF0gF1j.', 'DiegoADM@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '1936816638', '2004-02-17', 0, '2021-11-06'),
(12381, 'Diego', '$2y$10$eWupBhL7kmhxCcJ7xH7Pq.l7M6Fc9CdHwYhfp4n86XZe.q5Gub2DO', 'diego@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '19995641661', '2004-02-02', 1, '2021-11-17'),
(12370, 'Gabriela', '$2y$10$s0WRpMCqlNrMJPOuZeIhSusSXBijnz1BPnfKkavrA.2bKMsBX.q/y', 'gabibaptista89@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '991324616', '2004-07-16', 1, '2021-11-08'),
(12363, 'andre_userr', '$2y$10$5Ytr5XdERF4PIwbtawj6BuKXO.fhjqUn0VNhQ5Fjpw8daajKFobym', 'andrelrossattiuser@gmail.com', 'Mococa', '19983396078', '24052004', 1, '2021-11-06'),
(12371, 'Gabriela', '$2y$10$TvHA2TdyI5IZTtV/sum1NuKBrtdU1tO72bHcUA08OpelN.LlJ3Jly', 'gabibaptista89@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '991324616', '2004-07-16', 1, '2021-11-08'),
(12372, 'Gabriela', '$2y$10$6KNSP4f5aTv7/1KEvFyvT.T.TvsGJ31gyZOax90u6rO8Z7f4TV6zW', 'gabibaptista89@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '991324616', '2004-07-16', 1, '2021-11-08'),
(12373, 'Gabriela', '$2y$10$FvgQRZiH8YJE2798YzTw6egS6iJkAYd/O/vMAI.c5I.ZKdSLJO.TS', 'gabibaptista89@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '991324616', '2004-07-16', 1, '2021-11-08'),
(12374, 'Gabriela', '$2y$10$/JWj7nmxkaeAtx5SXbOrjetFO2AVHTjTSOF3Vc0MKq9G1aCTmqiXG', 'gabibaptista89@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '991324616', '2004-07-16', 1, '2021-11-08'),
(12378, 'augusto o brabo', '$2y$10$mKOXSiqcj4mqyQQcg3NWiuIh303XaIuxkjLjRAmaKemmudqnPLTE6', 'augustodepauliduartesjrp@gmail.com', 'SÃ£o JosÃ© do Rio Pardo', '123456789', '2004-02-27', 1, '2021-11-09'),
(12379, 'Gabriel Ballarin', '$2y$10$738ausQNXHSiJJ0zHnE51urtXRnY8JKRP6wYIEqF5v7Lgc23SDNmy', 'gabrielballarin@outlook.com', 'Nenhuma selecionada', '1936083731', '2003-05-16', 1, '2021-11-12'),
(12385, 'eduardo', '$2y$10$n6V6Iw.7YAdLUid/YstSfuA2X/21slDCM3N79Jl/X8ab9JRo1w7DC', 'andre@lealdutra.com.br', 'DivinolÃ¢ndia', '123', '2004-05-24', 1, '2022-10-04'),
(12380, 'artur', '$2y$10$2Q6PyHiERSutfUO3XupzDO13MF7wXkir.5G7SYyh6mApMrPN9FK4q', 'artur@gmail.com', 'DivinolÃ¢ndia', '123', '1999-06-07', 1, '2021-11-13'),
(12383, 'andre', '$2y$10$0MGGHKvob6vAHa/etXrL4eNA8QbKHh8mYky3aVQnTJRQLzfwBriQ.', 'andrelrossatti@gmail.com', 'DivinolÃ¢ndia', '19983396078', '2004-05-24', 1, '2022-03-16'),
(12384, 'andre', '$2y$10$sW6zROBdPtkHxXHhmH838urmyzzg3T23rj38ng8kG8uFtPQEUuUPW', 'andre.rossatti@lcmaxsolution.com.br', 'DivinolÃ¢ndia', '123', '2003-05-24', 1, '2022-03-16'),
(12386, 'Pedro Henrique', '$2y$10$bbHTEYxDLx.3MDtvpe4N9.4KI376z7cGcNfbXlKk6v89hwR7ITgau', 'silverio011103@gmail.com', 'Mococa', '19995991488', '2003-11-01', 1, '2022-10-11'),
(12387, 'Andre', '$2y$10$9Pucn1tFMJm8wPZJHLw6JO/j8MwfzRC9lXmSc/nIjMEYlnh0dVsYy', 'andrelrossatti@gmail.com', 'DivinolÃ¢ndia', '(19) 98339-', '2004-05-24', 1, '2023-06-02');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id_animal`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12388;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
