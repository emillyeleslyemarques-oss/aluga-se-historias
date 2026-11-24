
<?php

// Função para buscar um livro pelo ID
function buscarLivros(PDO $conexao): array{
   $query = "SELECT * FROM livros ORDER BY titulo ASC";
   
   $consulta = $conexao->query($query);
   return $consulta->fetchAll();
}


function buscarLivroPorId(PDO $conexao, int $id) {

    $query = "SELECT * FROM livros WHERE id = :id";

    $consulta = $conexao->prepare($query);
    $consulta->bindValue(':id', $id);
    $consulta->execute();

    return $consulta->fetch(PDO::FETCH_ASSOC) ?: null;
}
