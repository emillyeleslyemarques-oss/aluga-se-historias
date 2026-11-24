<?php

function buscarCategorias($conexao): array {
    $query = "SELECT * FROM categorias";
    $consulta = $conexao->query($query);
    return $consulta->fetchAll();
}

