
<?php

    require_once "../conexao.php";
    require_once "../src/usuario_crud.php";
// Verificar se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Receber os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];
    $dataDeNascimento = $_POST["dataDeNascimento"];

    // Verificar se os campos estão vazios
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmar_senha) || empty($dataDeNascimento)) {

        header("location:../cadastro.php");
        exit;
    }

    // Verificar se o e-mail é válido
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("location:../cadastro.php");
        exit;
    }

    // Verificar se as senhas são iguais
    elseif ($senha !== $confirmar_senha) {

        header("location:../cadastro.php");
        exit;
    }

    // Verificar se a senha possui pelo menos 5 caracteres
    elseif (strlen($senha) < 5) {

        header("location:../cadastro.php");
        exit;
    }

    else {

        // Importar os arquivos necessários
       

        // Criptografar a senha
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Chamar a função para cadastrar o usuário
        cadastrarUsuario($conexao, $nome, $email, $senha_criptografada, $dataDeNascimento);

        // Redirecionar para a página de login após o cadastro
        header("location:../login.php");
        exit;
    }

} else {

    // Impedir acesso direto ao processamento
    header("location:../cadastro.php");
    exit;
}

?>
