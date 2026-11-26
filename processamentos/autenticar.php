<?php
   require_once "../conexao.php";
   require_once "../src/usuario_crud.php";
   require_once "../src/auth.php";

// Verificar se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Receber os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verificar se os campos estão vazios
    if (empty($email) || empty($senha)) {

        header("location:../login.php");
        exit;
    }

    // Verificar se o e-mail é válido
       elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("location:../index.php");
        exit;
    }

    else {

        // Buscar o usuário pelo e-mail
        $usuario = buscarUsuarioPorEmail($conexao, $email);

        // Verificar se o usuário existe e se a senha está correta
        if ($usuario && (password_verify($senha, $usuario["senha"]) ||
            $senha === $usuario["senha"]
        )) {
        
        login($usuario['id'], $usuario['nomeCompleto'], $usuario['email'], $usuario['telefone'], $usuario['tipoUsuario']);
        header("location:../index.php");
        exit;
        } else {

            header("location:../login.php");
            exit;
        }
    }

} else {

    // Impedir acesso direto ao processamento
    header("location:../index.php");
    exit;
}

?>
