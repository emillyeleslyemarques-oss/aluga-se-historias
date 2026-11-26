<?php

// Função para cadastrar um usuário
function cadastrarUsuario(PDO $conexao, string $nome, string $email, string $senha, string $dataDeNascimento): void {

    $query = "INSERT INTO usuarios (nomeCompleto, email, senha, dataDeNascimento, tipoUsuario)
    VALUES (:nome, :email, :senha, :dataDeNascimento, :tipoUsuario)";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':email', $email);
    $consulta->bindValue(':senha', $senha);
    $consulta->bindValue(':dataDeNascimento', $dataDeNascimento);
    $consulta->bindValue(':tipoUsuario', 'cliente');
    $consulta->execute();
}


// Função para buscar um usuário pelo e-mail
function buscarUsuarioPorEmail(PDO $conexao, string $email): ?array {

    $query = "SELECT * FROM usuarios WHERE email = :email";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':email', $email);
    $consulta->execute();

    return $consulta->fetch(PDO::FETCH_ASSOC) ?: null;
}


// Função para atualizar uma conta
function atualizarConta(PDO $conexao, int $id, string $nome, string $email, string $senha, string $dataDeNascimento): void {

    $query = "UPDATE usuarios SET nomeCompleto = :nome, email = :email, senha = :senha, dataDeNascimento = :dataDeNascimento WHERE id = :id";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':email', $email);
    $consulta->bindValue(':senha', $senha);
    $consulta->bindValue(':dataDeNascimento', $dataDeNascimento);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}


// Função para excluir uma conta
function excluirConta(PDO $conexao, int $id): void {

    $query = "DELETE FROM usuarios WHERE id = :id";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}
