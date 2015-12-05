<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN

    /*
     * Caso escreva a seguinte url abaixo vou apagar todas as tabelas do banco
     * http://localhost:8087/?id=1;delete from clientes
     * */
    $query = "select * from clientes where id = {$_GET['id']}";

    /*Retorno o resultado sem precisar do statement*/
    foreach($conexao->query($query) as $cliente){
        echo $cliente["nome"] . "<br>";
    }


} catch( \PDOException $e){
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}