<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN
    $query = "select * from clientes;";

    $stmt = $conexao->query($query);
    $resultado = $stmt->fetchAll(); //Retorna um array associativo e no formato de índices numéricos
    print_r($resultado);
} catch( \PDOException $e){
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}