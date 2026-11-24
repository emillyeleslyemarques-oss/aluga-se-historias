
<?php

// Função para buscar um livro pelo ID
function buscarLivros(PDO $conexao): array {

    $query = "SELECT livros.*, generos.nome AS nome_genero
              FROM livros
              INNER JOIN generos 
              ON livros.genero_id = generos.id
              ORDER BY livros.titulo ASC";

    $consulta = $conexao->query($query);

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}


function buscarLivroPorId(PDO $conexao, int $id) {

    $query = "SELECT * FROM livros WHERE id = :id";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();

    return $consulta->fetch(PDO::FETCH_ASSOC) ?: null;
}
