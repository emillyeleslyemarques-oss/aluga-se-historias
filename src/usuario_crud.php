<?php
// Função para cadastrar um usuário
function cadastrarUsuario($conexao, $nome, $email, $senha, $dataDeNascimento) {

    // Comando SQL para inserir os dados
    $sql = "INSERT INTO usuarios
    (nomeCompleto, email, senha, dataDeNascimento, tipoUsuario)
    VALUES
    (:nome, :email, :senha, :dataDeNascimento, :tipoUsuario)";

    // Preparar o comando
    $comando = $conexao->prepare($sql);

    // Executar o cadastro
    $comando->execute([
        ":nome" => $nome,
        ":email" => $email,
        ":senha" => $senha,
        ":dataDeNascimento" => $dataDeNascimento,
        ":tipoUsuario" => "cliente"
    ]);
}

    // Função para buscar um usuário pelo e-mail
    function buscarUsuarioPorEmail($conexao, $email) {

    $sql = "SELECT * FROM usuarios WHERE email = :email";

    $comando = $conexao->prepare($sql);

    $comando->execute([
        ":email" => $email
    ]);

    return $comando->fetch(PDO::FETCH_ASSOC);
}
