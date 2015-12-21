<?php
require_once "Admin.php";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $conexao = conectar_banco();
    $admin = new Admin($conexao);

    $admin  ->setUsuario($_POST["usuario"])
            ->setSenha($_POST["senha"]);

    if($admin->isAdmin()){
        $_SESSION["logado"]= true;
        header("location: index.php?page=home");
    } else {
        header("location: index.php?page=login-invalido");
    }
}
?>
<h2>Digite o login e a senha</h2>
<p>Login: admin</p>
<p>Senha: admin</p>
<form method="post" action="index.php?page=login">
    <label for="usuario">Usuario: </label><input type="text" id="usuario" name="usuario" />
    <label for="senha">Senha: </label><input type="password" id="senha" name="senha" />
    <input type="submit">
</form>