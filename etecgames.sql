-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 01-Dez-2021 às 22:36
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `etecgames`
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
  `CodCli` int(4) NOT NULL,
  `codusu_FK` int(4) NOT NULL,
  `nomeCli` varchar(100) NOT NULL,
  `foneCli` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente_tb`
--

INSERT INTO `cliente_tb` (`CodCli`, `codusu_FK`, `nomeCli`, `foneCli`) VALUES
(1, 7, 'Hugo Gabriel da Silva Cardoso', '96685-9699'),
(2, 11, 'Hugo Chaves', '96685-1234'),
(3, 5, 'Gabriel Alves Avelino', '98865-7445'),
(4, 5, 'Gabriel Alves Avelino', '98865-7445'),
(5, 9, 'Adriana Cláudia Santos de Oliveira', '8465-9987');

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

--
-- Extraindo dados da tabela `fornecedor_tb`
--

INSERT INTO `fornecedor_tb` (`codForn`, `nomeForn`, `emailForn`, `foneForn`) VALUES
(1, 'Bruno Guimarães da Fonseca', 'bruno.gf@yahoo.com.br', '6533-5589'),
(2, 'Game Station', 'game_station@gmail.com', '99065-7788');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_tb`
--

CREATE TABLE `funcionario_tb` (
  `codFun` int(4) NOT NULL,
  `codusu_FK` int(4) NOT NULL,
  `nomeFun` varchar(100) NOT NULL,
  `foneFun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario_tb`
--

INSERT INTO `funcionario_tb` (`codFun`, `codusu_FK`, `nomeFun`, `foneFun`) VALUES
(1, 2, 'João da Silva Casteliano', 98987),
(2, 10, 'Roberto Borges da Silva', 9090),
(3, 10, 'Roberto Borges da Silva', 9090),
(4, 4, 'Kaio da Silveira Souza', 9090);

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
  `SenhaUsu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_tb`
--

INSERT INTO `usuario_tb` (`codusu`, `emailUsu`, `SenhaUsu`) VALUES
(1, 'Rodrigo.tarcis2@gmail.com', '0102'),
(2, 'joao.silva321@yahoo.com.br', 'silvaJoao010101'),
(3, 'Fernanda.fe@gmail.com', '$2y$08$eO8bYu1UAqhdyZTlpVMvA.r5qnIMSdlwv1wLE60zg9CXk1Ecsn62a'),
(4, 'Naruto.Konoha@Uzumaki.com.br', '$2y$08$qRu7eW98df9bf1gYEyR3NuD5nQj0AJH1n5HbNwIIQgh0S7yG5kXgi'),
(5, 'biel333@gmail.com', '$2y$08$KIn1CA7yIqNpTuYHDugRQOeHZtcQf/MbFOXhmdot16fnlAjvJcRSC'),
(6, 'Hugo2Silva_cardoso@gmail.com', '$2y$08$7..C3Kx9NPRSrYvNbr2mwu3Lf1LfEm4etMGNzf1csRy/2sthhZYj6'),
(7, 'danilo.souza@yahoo.com.br', '$2y$08$YEA8H9ippOVIHqzWBpQ1jO8FmYNNNDuQ7yGiWKCZch/a0dQwU4/Ue'),
(9, 'Adriana.Claudia@gmail.com', '$2y$08$1aaGfDG1oOJQVVxIhyVQ6erwJoGIceryIQ2WyzNGcBPNxaujFGw0m'),
(10, 'Roberto_bd@hotmail.com.br', '$2y$08$UbefHZA1mGgxGOXZG5wo6utYbB1M0BxfoQo2CNkkbxafugKB/3Ram'),
(11, 'HugoChaves_Silveira@gmail.com', '$2y$08$vMa1JZhKgE4Ec9X1CsetmeR9XoqJ4/hd6P24XpW4IGWlCuZfbF4h.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_tb`
--

CREATE TABLE `venda_tb` (
  `codVenda` int(4) NOT NULL,
  `codjogo_FK` int(4) NOT NULL,
  `codFun_FK` int(4) NOT NULL,
  `CodCli_FK` int(4) NOT NULL,
  `qtdVenda` int(3) NOT NULL,
  `dataVenda` int(11) NOT NULL,
  `vlVenda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoriasjogos_tb`
--
ALTER TABLE `categoriasjogos_tb`
  ADD PRIMARY KEY (`codcatjogo`);

--
-- Índices para tabela `cliente_tb`
--
ALTER TABLE `cliente_tb`
  ADD PRIMARY KEY (`CodCli`),
  ADD KEY `FK_ClienteUsuario` (`codusu_FK`);

--
-- Índices para tabela `fornecedor_tb`
--
ALTER TABLE `fornecedor_tb`
  ADD PRIMARY KEY (`codForn`);

--
-- Índices para tabela `funcionario_tb`
--
ALTER TABLE `funcionario_tb`
  ADD PRIMARY KEY (`codFun`),
  ADD KEY `FK_FuncionarioUsuario` (`codusu_FK`);

--
-- Índices para tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  ADD PRIMARY KEY (`codJogo`),
  ADD KEY `FK_Categoria_Jogo` (`codcatjogo_Fk`),
  ADD KEY `FK_CodigoFornecedor` (`codFonecedor_FK`);

--
-- Índices para tabela `usuario_tb`
--
ALTER TABLE `usuario_tb`
  ADD PRIMARY KEY (`codusu`);

--
-- Índices para tabela `venda_tb`
--
ALTER TABLE `venda_tb`
  ADD PRIMARY KEY (`codVenda`),
  ADD KEY `FK_CodigoFuncionario` (`codFun_FK`),
  ADD KEY `FK_CodigoJogo` (`codjogo_FK`),
  ADD KEY `FK_CodigoClienteCPF` (`CodCli_FK`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoriasjogos_tb`
--
ALTER TABLE `categoriasjogos_tb`
  MODIFY `codcatjogo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente_tb`
--
ALTER TABLE `cliente_tb`
  MODIFY `CodCli` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `fornecedor_tb`
--
ALTER TABLE `fornecedor_tb`
  MODIFY `codForn` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario_tb`
--
ALTER TABLE `funcionario_tb`
  MODIFY `codFun` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  MODIFY `codJogo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario_tb`
--
ALTER TABLE `usuario_tb`
  MODIFY `codusu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `venda_tb`
--
ALTER TABLE `venda_tb`
  MODIFY `codVenda` int(4) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
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
  ADD CONSTRAINT `FK_CodigoFuncionario` FOREIGN KEY (`codFun_FK`) REFERENCES `funcionario_tb` (`codFun`),
  ADD CONSTRAINT `FK_CodigoJogo` FOREIGN KEY (`codjogo_FK`) REFERENCES `jogos_tb` (`codJogo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
