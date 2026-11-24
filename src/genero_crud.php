<?php

function buscarGeneros(PDO $conexao): array {
    $query = "SELECT * FROM generos ORDER BY id ASC";
    $consulta = $conexao->query($query);
    return $consulta->fetchAll();
}

function inserirGenero(PDO $conexao, string $nome, string $descricao): void {
    $query = "INSERT INTO generos (nome, descricao) VALUES (:nome, :descricao)";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':descricao', $descricao);
    $consulta->execute();
}

function buscarGeneroPorId(PDO $conexao, int $id): ?array {
    $query = "SELECT * FROM generos WHERE id = :id";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
    return $consulta->fetch() ?: null;
}

function atualizarGenero(PDO $conexao, int $id, string $nome, string $descricao): void {
    $query = "UPDATE generos SET nome = :nome, descricao = :descricao WHERE id = :id";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':descricao', $descricao);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}

function deletarGenero(PDO $conexao, int $id): void {
    $query = "DELETE FROM generos WHERE id = :id";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}