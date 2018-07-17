-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Dez-2017 às 04:24
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batman`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hq`
--

CREATE TABLE `hq` (
  `idHq` int(11) NOT NULL,
  `hqtitle` varchar(255) NOT NULL,
  `linkhq` varchar(255) NOT NULL,
  `image_idimage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `image`
--

CREATE TABLE `image` (
  `idimage` int(11) NOT NULL,
  `localimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `image`
--

INSERT INTO `image` (`idimage`, `localimage`) VALUES
(17, 'dkr.jpg'),
(18, 'tdkr.jpg'),
(19, 'legiao_SJk4RFcBgZxnK5V20e_9jIuE6ayX3DPo1OCGzUl7Ld.jpg'),
(20, 'joker.jpg'),
(21, 'jtdk.jpg'),
(23, 'Planeta-dos-Macacos-a-Guerra-agosto-cinemacao.jpg'),
(24, 'Penguins.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mail`
--

INSERT INTO `mail` (`id`, `mail`) VALUES
(1, 'mikabs@hotmail.com.br'),
(3, 'mickael.souza.if@gmail.com'),
(4, 'mickaelbraz17@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `titlenews` varchar(255) NOT NULL,
  `articlenews` longtext NOT NULL,
  `datenews` date NOT NULL,
  `mainarticle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`idnews`, `titlenews`, `articlenews`, `datenews`, `mainarticle`) VALUES
(1, 'Novo Filme do Batman tem novo diretor', 'No gun? I&#39;m insulted.\r\n\r\nI had a vision of a world without Batman. The Mob ground out a little profit and the police tried to shut them down one block at a time. And it was so boring. I&#39;ve had a change of heart. I don&#39;t want Mr Reese spoiling everything but why should I have all the fun? Let&#39;s give someone else a chance. If Coleman Reese isn&#39;t dead in 60 minutes then I blow up a hospital.\r\n\r\nCitizens, take control. Take control of your city!\r\n\r\nJust you, sir? Don&#39;t worry, Master Wayne. It takes a little time to get back in the swing of things.\r\n\r\nBruce Wayne, eccentric billionaire.\r\n\r\nYou are in hell, little man. And I am the devil.\r\n\r\nMy anger outweights my guilt.\r\n\r\nYou can swapnot sleeping in a penthouse... for not sleeping in a mansion. Whenever you stitch yourself up, you do make a bloody mess.\r\n\r\nIt&#39;s simple. We, uh, kill the Batman.\r\n\r\nYou have inspired good. But you spat in the faces of Gotham&#39;s criminals. Didn&#39;t you think there might be casualties? Things always get worse before they get better.\r\n\r\nSearch him. Then I will kill you.\r\n\r\nSpeak of the devil, and he shall appear.\r\n\r\nThere is a prison in a more ancient part of the world. A pit where men are thrown to suffer and die. But sometimes a man rises from the darkness. Sometimes, the pit sends something back.\r\n\r\nI just want my phone call.', '2017-06-22', 'Filme terá diretor de planeta dos macacos.'),
(20, 'Warner Planeja Filme Solo do Coringa,aaaaaaaaaaaaa', 'Um filme detalhando as origens do maior inimigo do Batman, o Coringa, está em fases iniciais de desenvolvimento, com Todd Philipps, de Se Beber, Não Case, vai roteirizar e dirigir o longa-metragem.\r\n\r\nFontes disseram ao IGN que, assim como o site Deadline reportou originalmente, a produção de Coringa será co-escrita por Scott Silver, responsável por 8 Mile, o filme de Eminem. Martin Scorsese seria o produtor, junto com Philips, apesar de uma fonte afirmar que seu envolvimento não foi oficialmente acertado ainda.\r\n\r\nO IGN pode confirmar que o filme não será uma história de origem de uma versão já existente do personagem. Ao invés disso, este seria o início de uma leva de filmes da DC que contará histórias únicas sobre heróis e vilões amados da DC. Então, por exemplo, com a chegada deste filme, o Coringa de Jared Leto continuaria a existir em outras produções da DC, como Esquadrão Suicida 2. Não fica claro se os longa-metragens dentro dessa nova série vão interagir com o restante do Universo Estendido da DC, mas a intenção é introduzir abordagens inesperadas de personagens aclamados.\r\n\r\nNo estágio atual, o filme está focado em uma Gotham City dos anos 80, tomada pelo crime. O Coringa já foi interpretado por Leto, Jack Nicholson e Heath Ledger, este último ganhando um Oscar póstumo por sua atuação em Batman: O Cavaleiro das Trevas, dirigido por Christopher Nolan.\r\n\r\nPhillips, além de trabalhar na série de filmes de Se Beber, Não Case, dirigiu Cães de Guerra, com Jonah Hill e Miles Teller.\r\n\r\nA Warner Bros. não emitiu declaração sobre o rumor.', '2222-02-22', 'Filme solo do coringa de Martin Scorsese e sem Jared Leto!'),
(58, 'Possível novo ator para novo filme do Batman.', 'Ben Affleck da indícios que não voltará a interpretar o Batman nos cinemas, e um antigo amigo com quem já teria contracenado junto em outro filme, teria demonstrado interesse em interpretar o Batman nos cinemas no seu próximo filme. Mais informações em breve.', '2017-12-10', 'Ben Affleck pode não voltar a interpretar o Batman, mas um possível substituto já foi encontrado.'),
(59, 'adsssssssssssss', 'sadsadasasda', '2002-02-22', 'adsdasdas'),
(60, 'EAEEEEEEE', 'EAEEEEE', '2077-12-22', 'AAAAAAAAAAAAAAA'),
(61, 'AAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAA', '2001-01-01', 'AAAAAAAAAAAAAA'),
(62, 'Teste', 'Teste', '2002-02-22', 'TESTE'),
(63, 'Teste', 'Teste', '2002-02-22', 'TESTE'),
(64, 'Testeeeeeeeeeeeeeeeeee', 'eeeeasffffffffffffffffff', '2898-02-22', 'afdddddddddddddd'),
(66, 'Teste', 'Teste', '3333-03-23', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_has_image`
--

CREATE TABLE `noticias_has_image` (
  `news_idnews` int(11) NOT NULL,
  `image_idimage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias_has_image`
--

INSERT INTO `noticias_has_image` (`news_idnews`, `image_idimage`) VALUES
(1, 23),
(20, 19),
(20, 20),
(20, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `login`, `username`, `senha`) VALUES
(1, 'adminMk', 'Mickael Souza', '23da31bb197eed075f0139321728a29b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `idvideos` int(11) NOT NULL,
  `linkvideo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`idvideos`, `linkvideo`) VALUES
(1, 'Kfhg_D-z4fs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos_has_noticias`
--

CREATE TABLE `videos_has_noticias` (
  `videos_idvideos` int(11) NOT NULL,
  `news_idnews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos_has_noticias`
--

INSERT INTO `videos_has_noticias` (`videos_idvideos`, `news_idnews`) VALUES
(1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hq`
--
ALTER TABLE `hq`
  ADD PRIMARY KEY (`idHq`),
  ADD KEY `fk_Hq_image1_idx` (`image_idimage`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idimage`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`);

--
-- Indexes for table `noticias_has_image`
--
ALTER TABLE `noticias_has_image`
  ADD PRIMARY KEY (`news_idnews`,`image_idimage`),
  ADD KEY `fk_noticias_has_image_image1_idx` (`image_idimage`),
  ADD KEY `fk_noticias_has_image_noticias_idx` (`news_idnews`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`idvideos`);

--
-- Indexes for table `videos_has_noticias`
--
ALTER TABLE `videos_has_noticias`
  ADD PRIMARY KEY (`videos_idvideos`,`news_idnews`),
  ADD KEY `fk_videos_has_noticias_noticias1_idx` (`news_idnews`),
  ADD KEY `fk_videos_has_noticias_videos1_idx` (`videos_idvideos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hq`
--
ALTER TABLE `hq`
  MODIFY `idHq` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `idimage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idnews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `idvideos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `hq`
--
ALTER TABLE `hq`
  ADD CONSTRAINT `fk_Hq_image1` FOREIGN KEY (`image_idimage`) REFERENCES `image` (`idimage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `noticias_has_image`
--
ALTER TABLE `noticias_has_image`
  ADD CONSTRAINT `fk_noticias_has_image_image1` FOREIGN KEY (`image_idimage`) REFERENCES `image` (`idimage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_noticias_has_image_noticias` FOREIGN KEY (`news_idnews`) REFERENCES `news` (`idnews`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `videos_has_noticias`
--
ALTER TABLE `videos_has_noticias`
  ADD CONSTRAINT `fk_videos_has_noticias_noticias1` FOREIGN KEY (`news_idnews`) REFERENCES `news` (`idnews`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_videos_has_noticias_videos1` FOREIGN KEY (`videos_idvideos`) REFERENCES `videos` (`idvideos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
