<?php
require_once "Cliente.php";

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN

} catch( \PDOException $e){
    die("Não foi possível estabelecer a conexão com o banco de dados. Erro: {$e->getMessage()}");
}


$cliente = new Cliente($conexao);
/*Inserir uma linha*/
//$cliente->setNome("Antonio")
//        ->setEmail("antonio@email.com.br");
//
//$cliente->inserir();

/*Alterar uma linha*/
//$cliente->setId(8)
//    ->setNome("Richard")
//    ->setEmail("richard@email.com.br");
//
//$cliente->alterar();

/*Remover uma linha*/
//$cliente->setId(10);
//$cliente->deletar();

/*Busca um só registro*/
$resultado = $cliente->find(7);
echo $resultado["nome"] . " - " . $resultado["email"] . "<br />";

foreach($cliente->listar() as $c){
    echo $c["nome"] . "<br />";
}