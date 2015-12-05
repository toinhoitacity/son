<?php
if(isset($_SESSION["logado"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $cliente =[
        "nome"  => $_POST["nome"],
        "email" => $_POST["email"]
    ];
    $lista_clientes = unserialize($_COOKIE["clientes"]);
    $lista_clientes[] = $cliente;
    setcookie("clientes", serialize($lista_clientes));

    header("location: index.php?page=home");
}
?>
<?php if(isset($_SESSION["logado"])): ?>
    <form action="index.php?page=cadastra-cliente" method="post">
        <label for="nome">Nome: </label><input name="nome" id="nome" type="text" />
        <label for="email">Email:</label><input name="email" id="email" type="email" />
        <input type="submit">
    </form>
<?php else: ?>
    <h2>Você não tem autorização de acessar essa página</h2>
<?php endif;?>
