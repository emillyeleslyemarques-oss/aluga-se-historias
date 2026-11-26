<!DOCTYPE html>
<html lang="pt-br">
<?php 
    require_once __DIR__ . '/src/genero_crud.php';
    require_once __DIR__ . '/src/livro_crud.php';
    require_once __DIR__ . '/conexao.php';

    $tituloPagina = "Aluga-se Histórias | Início";
    $linksCSS = ['assets/css/style.css'];

    $livros = buscarLivros($conexao);
    $generos = buscarGeneros($conexao);

    include_once "./includes/cabeca.php";
    include_once "./includes/cabecalho.php";
?>

<section class="hero">
    <div class="hero-conteudo">
        <span class="etiqueta">UM NOVO JEITO DE LER</span>
        <h1>Sua próxima história começa aqui.</h1>
        <p>Descubra novos mundos, conheça diferentes autores e encontre seu próximo livro favorito.</p>

        <div class="hero-botoes">
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

<section class="secao">
    <div class="titulo-secao">
        <div>
            <span class="etiqueta">EXPLORE</span>
            <h2>Encontre seu gênero favorito</h2>
            <p>Histórias para todos os momentos.</p>
        </div>
        <a href="catalogo.php" class="link-secao">Ver catálogo completo →</a>
    </div>

    <div class="categorias">
        <?php
            $classes = ['rosa', 'azul', 'verde', 'vinho'];
            $contador = 0;

            foreach ($generos as $genero): ?>
                <a href="catalogo.php?id=<?= $genero['id'] ?>" class="categoria categoria-<?= $classes[$contador] ?>">
                <span>0<?= $contador = $contador + 1 ?></span>
                <h3><?= $genero['titulo'] ?></h3>
                <p><?= $genero['descricao'] ?></p>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="secao">
    <div class="titulo-secao">
        <div>
            <span class="etiqueta">NOSSO ACERVO</span>
            <h2>Livros em destaque</h2>
            <p>Descubra algumas histórias disponíveis.</p>
        </div>
        <a href="catalogo.php" class="link-secao">Ver todos →</a>
    </div>

    <div class="livros">

        <?php
        $contador = 0;

        foreach ($livros as $livro):

            if ($contador == 3) {
                break;
            }
        ?>

            <article class="livro-card">

                <img
                    src="<?= htmlspecialchars($livro['caminhoImagem']) ?>"
                    alt="Capa de <?= htmlspecialchars($livro['titulo']) ?>"
                >

                <div class="livro-info">

                    <span class="genero-romance">
                        <?= htmlspecialchars($livro['nome_genero']) ?>
                    </span>

                    <h3>
                        <?= htmlspecialchars($livro['titulo']) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars(mb_substr($livro['descricao'], 0, 20)) ?>...
                    </p>

                    <a href="livro.php?id=<?= $livro['id'] ?>">
                        Ver detalhes →
                    </a>

                </div>

            </article>

        <?php
            $contador++;
        endforeach;
        ?>

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

<?php 
include __DIR__ . '/includes/rodape.php'; ?>
</html>