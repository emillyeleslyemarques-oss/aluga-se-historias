<?php include __DIR__ . '/includes/cabecalho.php'; ?>

<section class="hero">
    <div class="hero-texto">
        <span class="etiqueta">UM NOVO JEITO DE LER</span>
        <h1>Sua próxima história começa aqui.</h1>
        <p>Descubra novos mundos, conheça diferentes autores e encontre seu próximo livro favorito.</p>

        <div class="botoes">
            <a href="catalogo.php" class="botao-principal">Explorar livros</a>
            <a href="#como-funciona" class="botao-secundario">Como funciona?</a>
        </div>
    </div>

    <div class="hero-imagem">
        <img src="assets/img/banner.jpg" alt="Livros em uma livraria aconchegante">
    </div>
</section>

<section class="pesquisa">
    <h2>Encontre sua próxima leitura</h2>
    <p>Explore nosso catálogo de histórias.</p>

    <form action="catalogo.php" method="get">
        <input type="search" name="busca" placeholder="Digite o título ou autor...">
        <button type="submit">Pesquisar</button>
    </form>
</section>

<section class="secao" id="categorias">
    <div class="titulo-secao">
        <div>
            <span class="etiqueta">EXPLORE</span>
            <h2>Encontre seu gênero favorito</h2>
            <p>Histórias para todos os momentos.</p>
        </div>
        <a href="catalogo.php">Ver catálogo completo →</a>
    </div>

    <div class="categorias">
        <a href="catalogo.php?categoria=Romance" class="categoria rosa">
            <span>01</span>
            <h3>Romance</h3>
            <p>Histórias que emocionam.</p>
        </a>

        <a href="catalogo.php?categoria=Suspense" class="categoria azul">
            <span>02</span>
            <h3>Suspense</h3>
            <p>Mistérios e descobertas.</p>
        </a>

        <a href="catalogo.php?categoria=Fantasia" class="categoria oliva">
            <span>03</span>
            <h3>Fantasia</h3>
            <p>Novos mundos para explorar.</p>
        </a>

        <a href="catalogo.php?categoria=Drama" class="categoria vinho">
            <span>04</span>
            <h3>Drama</h3>
            <p>Histórias inesquecíveis.</p>
        </a>
    </div>
</section>

<section class="secao">
    <div class="titulo-secao">
        <div>
            <span class="etiqueta">NOSSO ACERVO</span>
            <h2>Livros em destaque</h2>
            <p>Descubra algumas histórias disponíveis.</p>
        </div>
        <a href="catalogo.php">Ver todos →</a>
    </div>

    <div class="livros">
        <article class="livro-card">
            <img src="assets/img/livro1.jpg" alt="Capa ilustrada do livro 1">
            <div class="livro-info">
                <span class="genero-romance">Romance</span>
                <h3>Jardim de Memórias</h3>
                <p>Uma história sobre recomeços.</p>
                <a href="livro.php">Ver detalhes →</a>
            </div>
        </article>

        <article class="livro-card">
            <img src="assets/img/livro2.jpg" alt="Capa ilustrada do livro 2">
            <div class="livro-info">
                <span class="genero-suspense">Suspense</span>
                <h3>O Último Segredo</h3>
                <p>Nem tudo é o que parece.</p>
                <a href="livro.php">Ver detalhes →</a>
            </div>
        </article>

        <article class="livro-card">
            <img src="assets/img/livro3.jpg" alt="Capa ilustrada do livro 3">
            <div class="livro-info">
                <span class="genero-fantasia">Fantasia</span>
                <h3>O Reino Esquecido</h3>
                <p>Uma aventura por novos mundos.</p>
                <a href="livro.php">Ver detalhes →</a>
            </div>
        </article>
    </div>
</section>

<section class="como-funciona" id="como-funciona">
    <div>
        <span class="etiqueta">SIMPLES ASSIM</span>
        <h2>Como funciona?</h2>
        <p>Uma nova história em poucos passos.</p>
    </div>

    <div class="passos">
        <div class="passo">
            <span>01</span>
            <h3>Escolha seu livro</h3>
            <p>Explore nosso catálogo e encontre sua próxima leitura.</p>
        </div>

        <div class="passo">
            <span>02</span>
            <h3>Solicite o aluguel</h3>
            <p>Preencha seus dados e escolha o livro desejado.</p>
        </div>

        <div class="passo">
            <span>03</span>
            <h3>Aproveite a leitura</h3>
            <p>Receba seu livro e aproveite essa nova história.</p>
        </div>
    </div>
</section>

<section class="chamada-final">
    <h2>Todo livro guarda um mundo.</h2>
    <p>Qual você vai descobrir?</p>
    <a href="catalogo.php" class="botao-principal">Descobrir livros</a>
</section>

<?php include __DIR__ . '/includes/rodape.php'; ?>