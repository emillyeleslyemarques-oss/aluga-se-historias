<?php 
include __DIR__ . '/includes/cabecalho.php';
require_once __DIR__ . '/src/genero_crud.php';
require_once __DIR__ . '/conexao.php'; 

$id = $_GET['id'];
$genero = buscarGeneroPorId($conexao, $id);
 
?>

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
                <img src="imagens-bd/Entre Mentiras e Desejos.png" alt="Capa do livro 1">
                <div class="livro-info">
                    <span class="genero-romance">Romance</span>
                    <h3>Entre Mentiras e desejos</h3>
                    <p>Autora: Laura Mendes</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="imagens-bd/O peso das minhas escolhas.png" alt="Capa do livro 2">
                <div class="livro-info">
                    <span class="genero-suspense">Drama</span>
                    <h3>O Peso das Minhas Escolhas</h3>
                    <p>Autor: Rafel Monteiro</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="imagens-bd/livro1-fantasia.png" alt="Capa do livro 3">
                <div class="livro-info">
                    <span class="genero-fantasia">Fantasia</span>
                    <h3>O Reino das Sombras Perdidas</h3>
                    <p>Autor: Thiago Martins</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="imagens-bd/livro-suspense2.png" alt="Capa do livro 4">
                <div class="livro-info">
                    <span class="genero-romance">Suspense</span>
                    <h3>O Segredo da Casa Sombria</h3>
                    <p>Autora: Clara Monteiro</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/rodape.php'; ?>