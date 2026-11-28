<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once __DIR__ . '/conexao.php';
    require_once __DIR__ . '/src/genero_crud.php';
    require_once __DIR__ . '/src/livro_crud.php';

    $tituloPagina = "Aluga-se Histórias | Catalogo";
    $linksCSS = ['assets/css/style.css'];
    $linkIcone = "assets/img/icone.svg";
    $livros = null;

    if ($_SERVER['REQUEST_METHOD'] === "GET"){
        // Recebemos os dados da pesquisa
        $busca = $_GET['busca'] ?? '';
        $categoria = $_GET['categoria'] ?? '';
        $id = $_GET['id'] ?? '';

        // Verificamos qual busca será realizada
        if ($busca != '' || $categoria != '') {

            $livros = filtrarLivros($conexao, $busca, $categoria);

        } elseif ($id != '') {

            $livros = buscarLivrosPorGenero($conexao, (int) $id);

        } else {

            $livros = buscarLivros($conexao);

        }
    }

    include_once __DIR__ . "/includes/cabeca.php";
    include_once __DIR__ . "/includes/cabecalho.php";
?>

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
            placeholder="Pesquisar por título ou autor..."
            value="<?= htmlspecialchars($busca) ?>">

        <select name="categoria">

            <option value="">Todas as categorias</option>

            <option value="Romance" <?= $categoria == 'Romance' ? 'selected' : '' ?>>
                Romance
            </option>

            <option value="Suspense" <?= $categoria == 'Suspense' ? 'selected' : '' ?>>
                Suspense
            </option>

            <option value="Fantasia" <?= $categoria == 'Fantasia' ? 'selected' : '' ?>>
                Fantasia
            </option>

            <option value="Drama" <?= $categoria == 'Drama' ? 'selected' : '' ?>>
                Drama
            </option>

        </select>

        <button type="submit">Pesquisar</button>

    </form>

    <div class="livros">

        <?php if (count($livros) > 0): ?>

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

        <?php else: ?>

            <p>Nenhum livro encontrado.</p>

        <?php endif; ?>

    </div>

</section>

<?php include __DIR__ . '/includes/rodape.php'; ?>
</html>