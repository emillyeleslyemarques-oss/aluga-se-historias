<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar aluguel | Aluga-se Histórias</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>

<header class="cabecalho">
    <a href="index.php" class="logo">📖 Aluga-se Histórias.</a>
    <nav>
        <a href="index.php">Início</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="sobre.php">Sobre</a>
        <a href="aluguel.php">Aluguel</a>
        <a href="login.php">Login</a>
    </nav>
    <a href="catalogo.php" class="botao-header">Encontrar livros</a>
</header>

<main>
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
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                </div>

                <div class="campo">
                    <label for="livro">Livro desejado</label>
                    <select id="livro" name="livro" required>
                        <option value="">Selecione um livro</option>
                        <option>Jardim de Memórias</option>
                        <option>O Último Segredo</option>
                        <option>O Reino Esquecido</option>
                        <option>Cartas para o Amanhã</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="prazo">Prazo de aluguel</label>
                    <select id="prazo" name="prazo" required>
                        <option value="">Selecione o prazo</option>
                        <option>7 dias</option>
                        <option>14 dias</option>
                        <option>30 dias</option>
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
</main>

<footer class="rodape">
    <div class="rodape-conteudo">
        <a href="index.php" class="logo logo-rodape">📖 Aluga-se Histórias.</a>
        <p>Mais que livros, novas histórias.</p>
    </div>
    <p class="copyright">© 2026 Aluga-se Histórias. Projeto Integrador.</p>
</footer>

</body>
</html>