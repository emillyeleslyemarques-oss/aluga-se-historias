<?php
include __DIR__ . '/includes/cabecalho.php';

require_once __DIR__ . '/conexao.php';
require_once __DIR__ . '/src/genero_crud.php';
require_once __DIR__ . '/src/livro_crud.php';

$livros = buscarLivros($conexao);

?>

<main>

    <section class="titulo-pagina">

        <span class="etiqueta">NOSSO ACERVO</span>

        <h1>Nosso Catálogo</h1>

        <p>Descubra sua próxima história.</p>

    </section>

    <section class="secao">

        <form class="filtros" action="catalogo.php" method="get">

            <input
                type="search"
                name="busca"
                placeholder="Pesquisar por título ou autor...">

            <select name="categoria">

                <option value="">Todas as categorias</option>
                <option value="Romance">Romance</option>
                <option value="Suspense">Suspense</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Drama">Drama</option>

            </select>

            <button type="submit">Pesquisar</button>

        </form>

        <div class="livros">

            <?php foreach ($livros as $livro): ?>

                <article class="livro-card">

                    <img
                        src="<?= $livro['caminhoImagem'] ?>"
                        alt="Capa do livro <?= $livro['titulo'] ?>">

                    <div class="livro-info">

                        <span>
                            <?= $livro['nome_genero'] ?>
                        </span>

                        <h3>
                            <?= $livro['titulo'] ?>
                        </h3>

                        <p>
                            Autoria: <?= $livro['autoria'] ?>
                        </p>

                        <a href="livro.php?id=<?= $livro['id'] ?>">
                            Veja detalhes →
                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </section>

</main>

<?php include __DIR__ . '/includes/rodape.php'; ?>