<?php
require_once "Aluno.php";
if(isset($_SESSION["logado"])){
    if( isset($_GET["id"]) ){
        $conexao= conectar_banco();

        $aluno = new Aluno($conexao);
        $aluno->setId($_GET["id"]);

        $aluno->deletar();

        header("location: index.php?page=home");
    } else {
        echo "Algo de errado com a chamada de remoção do aluno";
    }
} else {
    echo "Você não tem permissão de acessar essa página!!";
}
