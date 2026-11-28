<?php

$servidor = "localhost";

$banco = "aluga-se-historias";

$usuario = "root";

$senha = "resiliencia";
 
try {

    $conexao = new PDO(

        "mysql:host=$servidor;dbname=$banco;charset=utf8mb4",

        $usuario,

        $senha

    );
   
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    

    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 
} catch (PDOException $erro) {

    

    error_log($erro->getMessage());

    

    exit("Não foi possível conectar ao banco.");

}
 

 