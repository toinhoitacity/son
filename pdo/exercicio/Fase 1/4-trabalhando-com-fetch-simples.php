<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN
    $query = "select * from clientes where = 1;";

    $stmt = $conexao->query($query);

    /*
     * Caso o retorno seja apenas uma linha utilize o metodo fetch, caso contrário utilize o método fetchAll
     * Caso a consulta venha mais de uma linha o fetch irá retornar o primeiro elemento
     * */
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($resultado);
} catch( \PDOException $e){
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}