<?php
/*Para fazer funcionar o web server embutido do PHP digite o comando abaixo
php -S localhost:8087*/

$conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", ""); //Conexao com o banco de dados usando o DSN
