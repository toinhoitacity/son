<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN
    $query = "select * from clientes";

    /*Retorno o resultado sem precisar do statement*/
    foreach($conexao->query($query) as $cliente){
        echo $cliente["nome"] . "<br>";
    }


} catch( \PDOException $e){
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}