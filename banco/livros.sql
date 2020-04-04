-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Abr-2020 às 20:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `amadicas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

drop table livros;

CREATE TABLE `livros` (
  `livroID` int(10) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descricao_resumida` varchar(190) NOT NULL,
  `descricao_completa` text NOT NULL,
  `autorID` varchar(40) NOT NULL,
  `editoraID` varchar(10) DEFAULT NULL,
  `data_leitura` date DEFAULT NULL,
  `estiloID` varchar(10) DEFAULT NULL,
  `notarecomendacao` int(11) DEFAULT NULL,
  `situacaoID` varchar(10) DEFAULT NULL,
  `caminho_download` varchar(40) DEFAULT NULL,
  `imagem_pequena` varchar(50) DEFAULT NULL,
  `imagem_grande` varchar(50) DEFAULT NULL,
  `comentario1` text DEFAULT NULL,
  `fraseID` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD UNIQUE KEY `livroID` (`livroID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `livroID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;
--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` 
  (`livroID`, 
   `titulo`, 
   `descricao_completa`, 
   `descricao_resumida`, 
   `autorID`, 
   `editoraID`, 
   `data_leitura`, 
   `estiloID`, 
   `notarecomendacao`, 
   `situacaoID`, 
   `caminho_download`, 
   `imagem_pequena`, 
   `imagem_grande`, 
   `comentario1`, 
   `fraseID`) 
VALUES
  (
   '', 
   'Vidas Secas', 
   'O que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada (...)', 
   'O que impulsiona os personagens é a seca, áspera e cruel, e paradoxalmente a ligação telúrica, afetiva, que expõe naqueles seres em retirada (...)', 
   'Graciliano Ramos', 
   '', 
   '2020-01-01', 
   '', 
   8, 
   'lido', 
   'livros/vidas_secas.epub', 
   'img/livros/VIDAS_SECAS_pequena1.jpg', 
   '', 
   '', 
   ''
   );

INSERT INTO `livros` 
  (`livroID`, 
   `titulo`, 
   `descricao_completa`, 
   `descricao_resumida`, 
   `autorID`, 
   `editoraID`, 
   `data_leitura`, 
   `estiloID`, 
   `notarecomendacao`, 
   `situacaoID`, 
   `caminho_download`, 
   `imagem_pequena`, 
   `imagem_grande`, 
   `comentario1`, 
   `fraseID`) 
VALUES
  (
   '', 
   'No ar Rarefeito', 
   'Contratado por uma revista para escrever sobre a crescente comercialização da escalada do monte Everest, Jon Krakauer participou de uma expedição guiada ao topo do mundo (...)', 
   'Contratado por uma revista para escrever sobre a crescente comercialização da escalada do monte Everest, Jon Krakauer participou de uma expedição guiada ao topo do mundo (...)', 
   'Jon Krakauer', 
   '', 
   '2020-02-01', 
   '', 
   8, 
   'lido', 
   'livros/no_ar_rarefeito.epub', 
   'img/livros/no_ar_rarefeito_pequena.jpg', 
   '', 
   '', 
   ''
   );

INSERT INTO `livros` 
  (`livroID`, 
   `titulo`, 
   `descricao_completa`, 
   `descricao_resumida`, 
   `autorID`, 
   `editoraID`, 
   `data_leitura`, 
   `estiloID`, 
   `notarecomendacao`, 
   `situacaoID`, 
   `caminho_download`, 
   `imagem_pequena`, 
   `imagem_grande`, 
   `comentario1`, 
   `fraseID`) 
VALUES
  (
   '', 
   'A Morte de Ivan Ilitch', 
   'Esta obra mostra a história de um burocrata medíocre, Ivan Ilitch, um juiz respeitado que depois de conseguir uma oferta para ser juiz em uma outra cidade, compra um apartamento lá, (...)', 
   'Esta obra mostra a história de um burocrata medíocre, Ivan Ilitch, um juiz respeitado que depois de conseguir uma oferta para ser juiz em uma outra cidade, compra um apartamento lá, (...)', 
   'Lev Tolstoi', 
   '', 
   '2020-03-01', 
   '', 
   8, 
   'lido', 
   'livros/a_morte_de_ivan_ilitch.epub', 
   'img/livros/a_morte_de_ivan_ilitch_pequena.jpg', 
   '', 
   '', 
   ''
   );
