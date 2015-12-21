<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN
    $query = "select * from clientes;";

    $stmt = $conexao->query($query);

    /*Como atributos para o método fetchAll temos várias constantes na classe estatica PDO*/
    $resultado = $stmt->fetchAll(PDO::FETCH_BOTH);//É o padrão. Retorna um array de keys e associativo
    $resultado = $stmt->fetchAll(PDO::FETCH_COLUMN);//Retorna como um array de numerativo
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);//Retorna como um array associativo
    $resultado = $stmt->fetchAll(PDO::FETCH_CLASS);//Retorna como um array de objetos

    echo "<pre>";
    print_r($resultado);
} catch( \PDOException $e){
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}