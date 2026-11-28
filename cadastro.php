<!DOCTYPE html>
<html lang="pt-br">
<?php 
    $tituloPagina = "Aluga-se Histórias | Cadastro";
    $linksCSS = ['assets/css/style.css'];
    $linkIcone = "assets/img/icone.svg";

    include_once __DIR__ . "/includes/cabeca.php";
?>

<body>
    <main class="login-container">
        <section class="login-card">

            <h1>Aluga-se Histórias</h1>
            <p class="login-subtitulo">Crie sua conta para começar a ler!</p>

            <form action="processamentos/cadastrar.php" method="POST">

                <div class="campo-login">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome"
                        placeholder="Digite seu nome" required>
                </div>

                <div class="campo-login">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                        placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo-login">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha"
                        placeholder="Crie uma senha" required>
                </div>

                <div class="campo-login">
                    <label for="confirmar_senha">Confirmar senha</label>
                    <input type="password" id="confirmar_senha"
                        name="confirmar_senha"
                        placeholder="Digite a senha novamente" required>
                </div>

                <div class="campo-login">
                    <label for="dataDeNascimento">Data de nascimento</label>
                    <input type="date"
                        id="dataDeNascimento"
                        name="dataDeNascimento"
                        required>
                </div>

                <button type="submit" class="botao-login">
                    Criar conta
                </button>

            </form>

            <a href="index.php" class="voltar-inicio">
                Voltar para o início
            </a>

        </section>
    </main>
</body>
</html>