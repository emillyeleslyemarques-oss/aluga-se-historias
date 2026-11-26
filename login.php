<!DOCTYPE html>
<html lang="pt-br">
<?php 
    $tituloPagina = "Aluga-se Histórias | Login";
    $linksCSS = ['assets/css/style.css'];

    include_once __DIR__ . "/includes/cabeca.php";
?>

<body>
    <main class="login-container">
        <section class="login-card">

            <h1>Aluga-se Histórias</h1>
            <p class="login-subtitulo">Entre na sua conta e continue sua leitura.</p>

            <form action="processamentos/autenticar.php" method="POST">

                <div class="campo-login">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                        placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo-login">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha"
                        placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="botao-login">Entrar</button>

            </form>

            <p class="login-cadastro">
                Ainda não tem uma conta?
                <a href="cadastro.php">Cadastre-se</a>
            </p>

            <a href="index.php" class="voltar-inicio">Voltar para o início</a>
        </section>
    </main>
</body>
</html>