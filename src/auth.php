<?php

function iniciarSessao(): void
{
    // Se o status da sessão NÃO FOR ativa (ou, se a sessão está inativa)
    if(session_status() !== PHP_SESSION_ACTIVE){
        // Então, iniciamos a sessão
        session_start();
    }
}

function encerrarSessao(): void
{
    $_SESSION = []; // limpar os dados do usuário armazenados na sessão
    session_destroy(); // destrói/remove quaisquer dados da sessão no navegador
}


function exigirLogin(): void
{
    iniciarSessao();

    // Se NÃO EXISTIR na sessão uma variável chamada id,
    // significa que o usuário NÃO ESTÁ logado
    if(!isset($_SESSION['id'])){
        // encerrar a sessão
        encerrarSessao();

        // redirecionar para a página de login
        header("location:../login.php?");
        exit;
    }
}

function login(int $id, string $nome, string $email, string $telefone, string $tipo): void
{
    iniciarSessao();

    // Cria as variáveis de sessão com alguns dados de quem está logando
    $_SESSION['id'] = $id;
    $_SESSION['nomeCompleto'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['tipoUsuario'] = $tipo;
}

function logout(): void
{
    iniciarSessao();
    encerrarSessao();
    header("location:../login.php?logout");
    exit;
}