<?php
function conectar_banco(){
    try
    {
        $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "");
    }
    catch(\PDOException $e)
    {
        die("Não foi possível estabelecer conexão com o banco de dados. Erro: " . $e->getMessage());
    }

    return $conexao;
}