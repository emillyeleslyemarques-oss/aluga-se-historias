<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once __DIR__ . '/conexao.php';
    require_once __DIR__ . '/src/livro_crud.php';
    require_once __DIR__ . '/src/genero_crud.php';

    $tituloPagina = "Aluga-se Histórias | Livro";
    $linksCSS = ['assets/css/style.css'];
    $livro = null;
    $genero = null;

    // Recebe o ID pela URL
    $id = $_GET['id'] ?? null;

    // Busca o livro selecionado
    if ($id !== null && is_numeric($id)) {
        $livro = buscarLivroPorId($conexao, (int) $id);
    }

    // Busca o gênero do livro
    if ($livro !== null) {
        $genero = buscarGeneroPorId($conexao, (int) $livro['genero_id']);
    }

    include_once "./includes/cabeca.php";
    include_once "./includes/cabecalho.php";
?>

<div class="secao">

    <a href="catalogo.php" class="voltar-inicio">
        ← Voltar para o catálogo
    </a>

    <?php if ($livro !== null): ?>
        <section>
            <div class="capa-detalhe">

                <img 
                    src="<?= htmlspecialchars($livro['caminhoImagem']) ?>"
                    alt="Capa de <?= htmlspecialchars($livro['titulo']) ?>"
                >

            </div>

            <div class="informacoes-livro">

                <span class="genero-romance">
                    <?= htmlspecialchars($genero['nome'] ?? 'Gênero não informado') ?>
                </span>

                <h1>
                    <?= htmlspecialchars($livro['titulo']) ?>
                </h1>

                <p>
                    <strong>Autoria:</strong> <?= htmlspecialchars($livro['autoria']) ?>
                </p>

                <p>
                    <?= htmlspecialchars($livro['descricao'] ?? 'Descrição não cadastrada.') ?>
                </p>

                <div class="informacoes-extra">

                    <p>
                        <strong>Gênero:</strong>
                        <?= htmlspecialchars($genero['nome'] ?? 'Não informado') ?>
                    </p>

                </div>

                <a href="aluguel.php?id=<?= $livro['id'] ?>" class="botao-principal">
                    Solicitar aluguel
                </a>

                <a href="catalogo.php" class="botao-secundario">
                    Voltar ao catálogo
                </a>

            </div>

        </section>

        <section>

            <h2>Sobre o livro</h2>

            <p>
                <?= htmlspecialchars($livro['descricao'] ?? 'Ainda não existe uma descrição cadastrada para este livro.') ?>
            </p>

        </section>

    <?php else: ?>

        <section class="descricao-livro">

            <h1>Livro não encontrado</h1>

            <p>Não foi possível encontrar esse livro no nosso acervo.</p>

            <a href="catalogo.php" class="botao-principal">
                Voltar ao catálogo
            </a>

        </section>

    <?php endif; ?>
</div>

<?php include __DIR__ . '/includes/rodape.php'; ?>
</html>