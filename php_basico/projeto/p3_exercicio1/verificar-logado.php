<?php
session_start();
require_once ("util.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $lista_administradores = unserialize($_COOKIE["admin"]);
    $existe_admin = procura_administrador($lista_administradores, $_POST["usuario"], $_POST["senha"]);
    if($existe_admin != false){
        $_SESSION["logado"] = true;
        $_SESSION["id"] = true;
        header("location: index.php?page=home");
    } else {
        header("location: index.php?page=login-erro");
    }
}
