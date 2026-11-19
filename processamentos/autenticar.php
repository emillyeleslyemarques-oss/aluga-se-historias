
<?php
// Verificar se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Receber os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verificar se os campos estão vazios
    if (empty($email) || empty($senha)) {

        header("Location: ../login.php");
        exit;
    }

    // Verificar se o e-mail é válido
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../login.php");
        exit;
    }

    else {

        // Futuramente vamos consultar o usuário no banco de dados
        // e verificar a senha com password_verify()
        header("Location: ../login.php");
        exit;
    }

}
else {

    // Impedir acesso direto ao processamento
    header("Location: ../login.php");
    exit;
}

?>
