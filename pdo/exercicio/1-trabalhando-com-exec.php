<?php
/*Para fazer funcionar o web server embutido do PHP digite o comando abaixo
php -S localhost:8087*/



/*Trabalhando com try e catch*/
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN
    $query = "insert into clientes(nome,email) values ('pedro', 'pedro@email.com.br');";


    /* Se o comando abaixo retornar 1 quer dizer que o comando executou com sucesso*/
    $resultado = $conexao->exec($query);//executar para comandos SQL tipo INSERT, DELETE, ALTER TABLE, etc. Não usar com SELECT,
    print_r($resultado);
} catch( \PDOException $e){ //Caso não consiga executar o catch vai capturar a exceção
    //echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getCode()}";
    echo "Não foi possível estabelecer a conexão com o banco de dados. Código do Erro: {$e->getMessage()}";
}



