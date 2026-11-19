
<?php

// Verificar se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Receber os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    // Verificar se os campos estão vazios
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmar_senha)) {

        header("Location: ../cadastro.php");
        exit;
    }

    // Verificar se o e-mail é válido
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../cadastro.php");
        exit;
    }

    // Verificar se as senhas são iguais
    elseif ($senha !== $confirmar_senha) {

        header("Location: ../cadastro.php");
        exit;
    }

    // Verificar se a senha possui pelo menos 8 caracteres
    elseif (strlen($senha) < 8) {

        header("Location: ../cadastro.php");
        exit;
    }

    else {

        // Criptografar a senha
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Futuramente vamos inserir os dados no banco de dados
        
        header("Location: ../login.php");
        exit;
    }

}
else {

    // Impedir acesso direto ao processamento
    header("Location: ../cadastro.php");
    exit;
}

?>


