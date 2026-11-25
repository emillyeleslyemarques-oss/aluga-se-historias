
<?php

// Função para buscar um livro pelo ID
function buscarLivros(PDO $conexao): array {

    $query = "SELECT livros.*, generos.titulo AS nome_genero
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

// Função para buscar livros por gênero
function buscarLivrosPorGenero(PDO $conexao, int $id): array {

    $query = "SELECT livros.*, generos.titulo AS nome_genero
              FROM livros
              INNER JOIN generos
              ON livros.genero_id = generos.id
              WHERE generos.id = :id
              ORDER BY livros.titulo ASC";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

// Função para filtrar livros
function filtrarLivros(PDO $conexao, string $busca, string $categoria, string $id = ''): array {

    $query = "SELECT livros.*, generos.titulo AS nome_genero
              FROM livros
              INNER JOIN generos
              ON livros.genero_id = generos.id
              WHERE (livros.titulo LIKE :buscaTitulo
              OR livros.autoria LIKE :buscaAutoria)
              AND (:categoriaVazia = '' OR generos.titulo = :categoriaFiltro)
              AND (:idVazio = '' OR generos.id = :idFiltro)
              ORDER BY livros.titulo ASC";

    $consulta = $conexao->prepare($query);

    $consulta->bindValue(':buscaTitulo', '%' . $busca . '%');
    $consulta->bindValue(':buscaAutoria', '%' . $busca . '%');
    $consulta->bindValue(':categoriaVazia', $categoria);
    $consulta->bindValue(':categoriaFiltro', $categoria);
    $consulta->bindValue(':idVazio', $id);
    $consulta->bindValue(':idFiltro', $id);

    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
