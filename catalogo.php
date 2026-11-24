<!DOCTYPE html>
<html lang="pt-br">
<?php
$titulo = "Aluga-se Histórias | Sobre";
include_once __DIR__ . "/includes/head.php";
include_once __DIR__ . '/includes/header.php';
?>

<body>
    <main>
        <section class="titulo-pagina">
            <span class="etiqueta">NOSSO ACERVO</span>
            <h1>Nosso Catálogo</h1>
            <p>Descubra sua próxima história.</p>
        </section>

        <section class="secao">
            <form class="filtros" action="catalogo.php" method="get">
                <input type="search" name="busca" placeholder="Pesquisar por título ou autor...">

                <select name="categoria">
                    <option value="">Todas as categorias</option>
                    <option>Romance</option>
                    <option>Suspense</option>
                    <option>Fantasia</option>
                    <option>Drama</option>
                </select>

                <button type="submit">Pesquisar</button>
            </form>

            <div class="livros">
                <article class="livro-card">
                    <img src="assets/img/livro1.jpg" alt="Capa do livro 1">
                    <div class="livro-info">
                        <span class="genero-romance">Romance</span>
                        <h3>Jardim de Memórias</h3>
                        <p>Autora: Ana Martins</p>
                        <p>Disponibilidade: Disponível</p>
                        <a href="livro.php">Ver detalhes →</a>
                    </div>
                </article>

                <article class="livro-card">
                    <img src="assets/img/livro2.jpg" alt="Capa do livro 2">
                    <div class="livro-info">
                        <span class="genero-suspense">Suspense</span>
                        <h3>O Último Segredo</h3>
                        <p>Autor: Lucas Almeida</p>
                        <p>Disponibilidade: Disponível</p>
                        <a href="livro.php">Ver detalhes →</a>
                    </div>
                </article>

                <article class="livro-card">
                    <img src="assets/img/livro3.jpg" alt="Capa do livro 3">
                    <div class="livro-info">
                        <span class="genero-fantasia">Fantasia</span>
                        <h3>O Reino Esquecido</h3>
                        <p>Autora: Sofia Costa</p>
                        <p>Disponibilidade: Disponível</p>
                        <a href="livro.php">Ver detalhes →</a>
                    </div>
                </article>

                <article class="livro-card">
                    <img src="assets/img/livro4.jpg" alt="Capa do livro 4">
                    <div class="livro-info">
                        <span class="genero-romance">Romance</span>
                        <h3>Cartas para o Amanhã</h3>
                        <p>Autora: Marina Lopes</p>
                        <p>Disponibilidade: Disponível</p>
                        <a href="livro.php">Ver detalhes →</a>
                    </div>
                </article>
            </div>
        </section>
    </main>        
    <?php include_once __DIR__ . '/includes/footer.php' ?>;     
</body>
</html>