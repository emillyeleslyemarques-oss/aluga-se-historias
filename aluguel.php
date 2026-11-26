<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once __DIR__ . "/conexao.php";
    require_once __DIR__ . "/src/livro_crud.php";
    require_once __DIR__ . "/src/usuario_crud.php";
    require_once __DIR__ . "/src/auth.php";
    
    exigirLogin();

    $tituloPagina = "Aluga-se Histórias | Aluguel";
    $linksCSS = ['assets/css/style.css'];
    $linkIcone = __DIR__ . "/assets/img/icone.svg";

    $livros = buscarLivros($conexao);
    $nomeComplete = $_SESSION['nomeCompleto'] ?? '';
    $email = $_SESSION['email'] ?? '';
    $telefone = $_SESSION['telefone'] ?? '';

    include_once __DIR__ . "/includes/cabeca.php";
    include_once __DIR__ . "/includes/cabecalho.php";
?>

<section class="titulo-pagina">
    <span class="etiqueta">SUA PRÓXIMA LEITURA</span>
    <h1>Solicitar aluguel</h1>
    <p>Preencha os dados para solicitar seu livro.</p>
</section>

<section class="formulario-container">
    <form class="formulario" action="#" method="post">

        <h2>Seus dados</h2>
        <p class="formulario-descricao">Preencha os campos abaixo para continuar.</p>

        <div class="campos-formulario">
            <div class="campo">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="<?= htmlspecialchars($nomeComplete) ?>" required disabled>
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="<?= htmlspecialchars($email) ?>" required disabled>
            </div>

            <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="<?= !empty($telefone) ? htmlspecialchars($telefone) : "Telefone não foi informado" ?>" required disabled>
            </div>

            <div class="campo">
                <label for="livro">Livro desejado</label>
                <select id="livro" name="livro" required <?= isset($_GET['id']) ? 'disabled' : '' ?>>
                    <option value="">Selecione um livro</option>
                    <?php foreach ($livros as $livro): ?>
                        <option value="<?= $livro['id'] ?>" <?= isset($_GET['id']) == $livro['id'] ? 'selected' : '' ?>>
                            <?= $livro['titulo'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="campo">
                <label for="prazo">Prazo de aluguel</label>
                <select id="prazo" name="prazo" required>
                    <option value="7">7 dias</option>
                    <option value="14">14 dias</option>
                    <option value="30">30 dias</option>
                </select>
            </div>
        </div>

        <label class="termos">
            <input type="checkbox" name="termos" required>
            <span>Li e aceito os termos de aluguel.</span>
        </label>

        <button type="submit" class="botao-principal">Enviar solicitação</button>
    </form>
</section>

<?php include __DIR__ . '/includes/rodape.php'; ?>
</html>