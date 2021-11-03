-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2021 às 23:01
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etecgames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriasjogos_tb`
--

CREATE TABLE `categoriasjogos_tb` (
  `codcatjogo` int(4) NOT NULL,
  `nomeCatjogo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_tb`
--

CREATE TABLE `cliente_tb` (
  `CpfCli` int(11) NOT NULL,
  `codusu_FK` int(4) NOT NULL,
  `nomeCli` varchar(100) NOT NULL,
  `foneCli` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor_tb`
--

CREATE TABLE `fornecedor_tb` (
  `codForn` int(4) NOT NULL,
  `nomeForn` varchar(100) NOT NULL,
  `emailForn` varchar(100) NOT NULL,
  `foneForn` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_tb`
--

CREATE TABLE `funcionario_tb` (
  `codFun` int(4) NOT NULL,
  `codusu_FK` int(4) NOT NULL,
  `nomeFun` varchar(100) NOT NULL,
  `foneFun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario_tb`
--

INSERT INTO `funcionario_tb` (`codFun`, `codusu_FK`, `nomeFun`, `foneFun`) VALUES
(1, 3, 'Danilo de Souza Soares', '90903-8845');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos_tb`
--

CREATE TABLE `jogos_tb` (
  `codJogo` int(4) NOT NULL,
  `nomeJogo` varchar(100) NOT NULL,
  `codcatjogo_Fk` int(4) NOT NULL,
  `codFonecedor_FK` int(4) NOT NULL,
  `valorJogo` float NOT NULL,
  `classificacaoJogo` int(2) NOT NULL,
  `avaliacaoJogo` int(1) NOT NULL,
  `dataLancamentoJogo` date NOT NULL,
  `imgJogo1` varchar(250) NOT NULL,
  `imgJogo2` varchar(250) NOT NULL,
  `imgJogo3` varchar(250) NOT NULL,
  `tamanhoJogo` int(11) NOT NULL,
  `descricaoJogo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_tb`
--

CREATE TABLE `usuario_tb` (
  `codusu` int(4) NOT NULL,
  `emailUsu` varchar(100) NOT NULL,
  `SenhaUsu` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_tb`
--

INSERT INTO `usuario_tb` (`codusu`, `emailUsu`, `SenhaUsu`) VALUES
(1, 'Rodrigo.tarcis@gmail.com', '$2y$08$EGbqd/ktBguQGBGZboD4PetEiGslE8hvc.DNrkp/ehcWAg0IuP.Qq'),
(2, 'Fe.fe@gmail.com', '$2y$08$C2uRTTVLkXZAaxUtqkYg9elMUUxUMqxb3as3DaEU9RQ2q4vehYELS'),
(3, 'danilo.souza@yahoo.com.br', '$2y$08$ujd6Ew4IbOwpBdC7/qV/R.DTnzdkdEHxUNECipmB/D0JL2z/nhWve'),
(4, 'biel333@gmail.com', '$2y$08$hHrYu4FaIdLLz11U2RxFDOg6u.G0mpf16pbOeltKE.ppqJxj7Rz.O'),
(5, 'Naruto.Konoha@Uzumaki.com.br', '$2y$08$tC21SEpiJG3o.Cn3tMkLO.lECl7lBQMRGmtoV7197LslzdGgK1aSC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_tb`
--

CREATE TABLE `venda_tb` (
  `codVenda` int(4) NOT NULL,
  `codjogo_FK` int(4) NOT NULL,
  `codFun_FK` int(4) NOT NULL,
  `CpfCli_FK` int(11) NOT NULL,
  `qtdVenda` int(3) NOT NULL,
  `dataVenda` int(11) NOT NULL,
  `vlVenda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoriasjogos_tb`
--
ALTER TABLE `categoriasjogos_tb`
  ADD PRIMARY KEY (`codcatjogo`);

--
-- Indexes for table `cliente_tb`
--
ALTER TABLE `cliente_tb`
  ADD PRIMARY KEY (`CpfCli`),
  ADD KEY `FK_ClienteUsuario` (`codusu_FK`);

--
-- Indexes for table `fornecedor_tb`
--
ALTER TABLE `fornecedor_tb`
  ADD PRIMARY KEY (`codForn`);

--
-- Indexes for table `funcionario_tb`
--
ALTER TABLE `funcionario_tb`
  ADD PRIMARY KEY (`codFun`),
  ADD KEY `FK_FuncionarioUsuario` (`codusu_FK`);

--
-- Indexes for table `jogos_tb`
--
ALTER TABLE `jogos_tb`
  ADD PRIMARY KEY (`codJogo`),
  ADD KEY `FK_Categoria_Jogo` (`codcatjogo_Fk`),
  ADD KEY `FK_CodigoFornecedor` (`codFonecedor_FK`);

--
-- Indexes for table `usuario_tb`
--
ALTER TABLE `usuario_tb`
  ADD PRIMARY KEY (`codusu`);

--
-- Indexes for table `venda_tb`
--
ALTER TABLE `venda_tb`
  ADD PRIMARY KEY (`codVenda`),
  ADD KEY `FK_CodigoFuncionario` (`codFun_FK`),
  ADD KEY `FK_CodigoJogo` (`codjogo_FK`),
  ADD KEY `FK_CodigoClienteCPF` (`CpfCli_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoriasjogos_tb`
--
ALTER TABLE `categoriasjogos_tb`
  MODIFY `codcatjogo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedor_tb`
--
ALTER TABLE `fornecedor_tb`
  MODIFY `codForn` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario_tb`
--
ALTER TABLE `funcionario_tb`
  MODIFY `codFun` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jogos_tb`
--
ALTER TABLE `jogos_tb`
  MODIFY `codJogo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario_tb`
--
ALTER TABLE `usuario_tb`
  MODIFY `codusu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venda_tb`
--
ALTER TABLE `venda_tb`
  MODIFY `codVenda` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente_tb`
--
ALTER TABLE `cliente_tb`
  ADD CONSTRAINT `FK_ClienteUsuario` FOREIGN KEY (`codusu_FK`) REFERENCES `usuario_tb` (`codusu`);

--
-- Limitadores para a tabela `funcionario_tb`
--
ALTER TABLE `funcionario_tb`
  ADD CONSTRAINT `FK_FuncionarioUsuario` FOREIGN KEY (`codusu_FK`) REFERENCES `usuario_tb` (`codusu`);

--
-- Limitadores para a tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  ADD CONSTRAINT `FK_Categoria_Jogo` FOREIGN KEY (`codcatjogo_Fk`) REFERENCES `categoriasjogos_tb` (`codcatjogo`),
  ADD CONSTRAINT `FK_CodigoFornecedor` FOREIGN KEY (`codFonecedor_FK`) REFERENCES `fornecedor_tb` (`codForn`);

--
-- Limitadores para a tabela `venda_tb`
--
ALTER TABLE `venda_tb`
  ADD CONSTRAINT `FK_CodigoClienteCPF` FOREIGN KEY (`CpfCli_FK`) REFERENCES `cliente_tb` (`CpfCli`),
  ADD CONSTRAINT `FK_CodigoFuncionario` FOREIGN KEY (`codFun_FK`) REFERENCES `funcionario_tb` (`codFun`),
  ADD CONSTRAINT `FK_CodigoJogo` FOREIGN KEY (`codjogo_FK`) REFERENCES `jogos_tb` (`codJogo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
