-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25/11/2026 às 19:42
-- Versão do servidor: 8.0.46
-- Versão do PHP: 8.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluga-se-historias`
--
CREATE DATABASE IF NOT EXISTS `aluga-se-historias` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `aluga-se-historias`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `generos`
--

CREATE TABLE `generos` (
  `id` int NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `generos`
--

INSERT INTO `generos` (`id`, `titulo`, `descricao`) VALUES
(1, 'Romance', 'Histórias que emocionam.'),
(2, 'Suspense', 'Mistérios e descobertas.'),
(3, 'Fantasia', 'Novos mundos para explorar.'),
(4, 'Drama', 'Histórias inesquecíveis.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int NOT NULL,
  `titulo` varchar(180) NOT NULL,
  `descricao` text,
  `anoPublicacao` int DEFAULT NULL,
  `autoria` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `editora` varchar(180) NOT NULL,
  `quantPaginas` int DEFAULT NULL,
  `faixaEtaria` int DEFAULT NULL,
  `caminhoPdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `caminhoImagem` varchar(255) NOT NULL,
  `genero_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `descricao`, `anoPublicacao`, `autoria`, `editora`, `quantPaginas`, `faixaEtaria`, `caminhoPdf`, `caminhoImagem`, `genero_id`) VALUES
(1, 'Entre Mentiras e Desejos', 'Um romance envolvente sobre segredos, paixão e escolhas difíceis. Em meio a sentimentos intensos e verdades escondidas, duas pessoas descobrem que nem tudo é o que parece. Entre mentiras que machucam e desejos que desafiam a razão, será que o amor conseguirá superar os segredos do passado?', 2025, 'Laura Mendes', 'Aurora Livros', NULL, 18, NULL, 'imagens-bd/Entre Mentiras e Desejos.png', 1),
(2, 'O Peso das Minhas Escolhas', 'Uma história emocionante sobre decisões, arrependimentos e descobertas. Após tomar decisões que mudam completamente o rumo de sua vida, uma jovem precisa enfrentar as consequências de suas escolhas e aprender que nem sempre é possível voltar atrás. Entre desafios, sentimentos e novos caminhos, ela descobrirá que amadurecer também significa assumir responsabilidades e encontrar coragem para recomeçar.', 2023, 'Rafael Monteiro', 'Aurora Livros', NULL, 18, NULL, 'imagens-bd/O peso das minhas escolhas.png', 3),
(3, 'Entre Cartas e Promessas', 'Entre páginas escritas à mão e promessas feitas em silêncio, uma jovem encontra cartas antigas que revelam sentimentos, lembranças e segredos de uma história que parecia esquecida. Ao descobrir a ligação entre essas mensagens e sua própria vida, ela precisará decidir se deve seguir o que está escrito ou construir seu próprio destino. Uma narrativa delicada sobre amor, saudade e a força das palavras.', 2021, 'Laura Mendes', 'Coração Literário', NULL, 15, NULL, 'imagens-bd/livro1-romance.png', 1),
(4, 'Quando o Destino nos Encontrou', 'Alguns encontros acontecem quando menos esperamos. Em meio a caminhos inesperados, duas pessoas se conhecem e descobrem uma conexão capaz de transformar suas vidas. Entre momentos especiais, desafios e sentimentos inesperados, elas perceberão que algumas histórias não acontecem por acaso. Uma narrativa sobre amor, reencontros e as surpresas que o destino reserva.', 2022, 'Beatriz Carvalho', 'Horizonte', NULL, 18, NULL, 'imagens-bd/livro2-romance.png', 1),
(5, 'O Mapa das Coisas Esquecidas', 'Após encontrar um mapa misterioso entre os pertences de sua família, uma jovem começa a investigar os lugares e acontecimentos registrados nele. Porém, cada descoberta traz novas perguntas e revela segredos que alguém tentou esconder por muito tempo. Quanto mais ela avança, mais percebe que o mapa guarda uma verdade capaz de mudar tudo o que acredita. Uma história cheia de mistérios, pistas e reviravoltas.', 2023, 'Rafael Souza', 'Lumiar ', NULL, 14, NULL, 'imagens-bd/livro-suspense.png', 2),
(6, 'O Último Trem da Meia-noite', 'Em uma noite marcada por uma forte tempestade, uma jovem embarca no último trem da meia-noite. Durante a viagem, ela percebe que alguns passageiros parecem esconder segredos e que cada estação revela uma pista sobre um misterioso acontecimento. Quanto mais tenta descobrir a verdade, mais percebe que aquela viagem não é tão comum quanto imaginava.', 2021, 'Helena Martins', 'Noite Enterna', NULL, 18, NULL, 'imagens-bd/livro-suspense1.png', 2),
(7, 'O Segredo da Casa Sombria', 'Após se mudar para uma antiga mansão herdada de sua família, uma jovem começa a encontrar objetos escondidos e bilhetes misteriosos pelos cômodos da casa. Enquanto investiga o passado daquele lugar, descobre que sua família guarda segredos que foram escondidos durante muitos anos. Cada descoberta revela uma nova peça de um mistério', 2025, 'Clara Monteiro', 'Lua Negra', NULL, 18, NULL, 'imagens-bd/livro-suspense2.png', 2),
(8, 'O Reino das Sombras Perdidas', 'Em um reino onde a luz está desaparecendo misteriosamente, uma jovem descobre um antigo segredo capaz de mudar o destino de todos. Ao iniciar uma jornada por florestas encantadas e lugares esquecidos, ela encontra criaturas misteriosas, desafios inesperados e pistas sobre seu próprio passado. Para salvar o reino, precisará descobrir o que está escondido nas sombras', 2020, 'Thiago Martins', 'Editora Fantasia', NULL, 10, NULL, 'imagens-bd/livro1-fantasia.png', 4),
(9, 'A Lenda dos Sete Reinos', 'Há muitos séculos, sete reinos foram unidos por uma antiga magia que mantinha a paz entre seus povos. Porém, quando uma força misteriosa ameaça destruir essa união, uma jovem descobre que está ligada a uma profecia esquecida. Ao lado de novos aliados, ela precisará atravessar os sete territórios e desvendar os segredos de cada reino antes que seja tarde.', 2019, 'Helena Valença', 'Editora Aurora', NULL, 12, NULL, 'imagens-bd/livro2-fantasia.png', 4),
(10, 'O Guardião das Estrelas Esquecidas', 'Em um universo onde as estrelas começam a desaparecer do céu, um jovem descobre que é o último descendente de uma antiga linhagem de guardiões. Com a missão de proteger os segredos celestiais, ele embarca em uma jornada por mundos desconhecidos, enfrentando desafios e descobrindo o verdadeiro significado de coragem, amizade e esperança.', 2020, 'Rafel Monteiro', 'Eclipse', NULL, 11, NULL, 'imagens-bd/livro3-fantasia.png', 4),
(11, 'A Melodia dos Dias Perdidos', 'Após encontrar uma antiga caixa de música pertencente à sua avó, uma jovem começa a ouvir melodias que despertam lembranças de momentos que nunca viveu. Intrigada, ela decide investigar a história de sua família e descobre cartas, amores antigos e promessas que ficaram esquecidas com o passar dos anos. Uma história emocionante sobre memória, amor e recomeços.', 2019, 'Marina Oliveira', 'Páginas de outono', NULL, 18, NULL, 'imagens-bd/livro3-romance.png', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `locacoes`
--

CREATE TABLE `locacoes` (
  `id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `livro_id` int NOT NULL,
  `disponibilidade` enum('sim','nao') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `valorLivro` decimal(4,2) NOT NULL,
  `quantDiasDevolucao` int NOT NULL,
  `livroDestaque` enum('sim','nao') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nomeCompleto` varchar(90) NOT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(180) NOT NULL,
  `dataDeNascimento` date NOT NULL,
  `tipoUsuario` enum('admin','editor','cliente') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sexo` enum('masculino','feminino') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomeCompleto`, `email`, `senha`, `dataDeNascimento`, `tipoUsuario`, `sexo`, `telefone`) VALUES
(1, 'Thiago Cauã', 'thiagocaua@email.com', 'admin@2026', '2000-01-01', 'admin', 'masculino', NULL),
(2, 'Emillye Leslye', 'emillyeleslye@email.com', 'admin@2026', '2000-01-01', 'admin', 'feminino', NULL),
(3, 'Juliene Lilian', 'julienelilian@email.com', 'admin2026', '2000-01-01', 'admin', 'feminino', NULL),
(4, 'Enzo Martins', 'enzomartins@email.com', '12345', '2006-12-31', 'editor', 'masculino', NULL),
(5, 'Alfredo de Sousa', 'alfredosousa@email.com', '12345', '2010-11-30', 'cliente', 'masculino', NULL),
(6, 'Beltrano de Oliveira', 'beltranooliveira@email.com', '12345', '2009-11-30', 'cliente', 'masculino', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genero_id` (`genero_id`);

--
-- Índices de tabela `locacoes`
--
ALTER TABLE `locacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `livro_id` (`livro_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `locacoes`
--
ALTER TABLE `locacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`);

--
-- Restrições para tabelas `locacoes`
--
ALTER TABLE `locacoes`
  ADD CONSTRAINT `locacoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `locacoes_ibfk_2` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
