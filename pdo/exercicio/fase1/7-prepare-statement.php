<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN

    /*
     * Caso escreva a seguinte url abaixo vou apagar todas as tabelas do banco
     * http://localhost:8087/?id=1;delete from clientes
     * */
    $query = "select * from clientes where id = :id";

    $stmt = $conexao->prepare($query);//prepare statement
    $stmt->bindValue(":id",$_GET["id"], PDO::PARAM_INT); //SQL injection não funciona mais quando passado na url
    $stmt->execute();
    $resultado = $stmt->fetch();

    echo "<pre>";
    print_r($resultado);


} catch( \PDOException $e){
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}