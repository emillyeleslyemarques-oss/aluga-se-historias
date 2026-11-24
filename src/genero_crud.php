<?php

function buscarGeneros(PDO $conexao): array {
    $query = "SELECT * FROM generos ORDER BY id ASC";
    $consulta = $conexao->query($query);
    return $consulta->fetchAll();
}

function inserirGenero(PDO $conexao, string $nome): void {
    $query = "INSERT INTO generos (nome) VALUES (:nome)";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':nome', $nome);
    $consulta->execute();
}

function buscarGeneroPorId(PDO $conexao, int $id): ?array {
    $query = "SELECT * FROM generos WHERE id = :id";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
    return $consulta->fetch() ?: null;
}

function atualizarGenero(PDO $conexao, int $id, string $nome): void {
    $query = "UPDATE generos SET nome = :nome WHERE id = :id";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}

function deletarGenero(PDO $conexao, int $id): void {
    $query = "DELETE FROM generos WHERE id = :id";
    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}