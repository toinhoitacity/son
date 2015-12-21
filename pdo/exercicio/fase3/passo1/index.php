<?php
require_once "Cliente.php";
require_once "ServiceDb.php";

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN

} catch( \PDOException $e){
    die("Não foi possível estabelecer a conexão com o banco de dados. Erro: {$e->getMessage()}");
}


$cliente = new Cliente();
$cliente    ->setNome("Maria")
            ->setEmail("maria@email.com.br");

$serviceDb= new ServiceDb($conexao, $cliente);
$serviceDb->inserir();