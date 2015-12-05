<?php
if(isset($_SESSION["logado"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $cliente =[
        "nome"  => $_POST["nome"],
        "email" => $_POST["email"]
    ];
    $lista_clientes = unserialize($_COOKIE["clientes"]);
    $lista_clientes[$_POST["id"]] = $cliente;

    setcookie("clientes", serialize($lista_clientes));

    header("location: index.php?page=home");
}
?>
<h1>Comecei esse crud para aquecer o cérebro depois percebi que o exercício não pedia o editar cliente</h1>
<h1>Mas como o senhor instrutor pediu para criar o editar bora fazer. Heeheehehehehe vamos nós ;)</h1>
<?php if(isset($_SESSION["logado"])): ?>
    <?php $lista_clientes = unserialize($_COOKIE["clientes"]); ?>
    <form action="index.php?page=editar-cliente" method="post">
        <input name="id" id="id" type="hidden" value="<?=$_GET["id"]?>" />
        <label for="nome">Nome: </label><input name="nome" id="nome" type="text" value="<?=$lista_clientes[$_GET["id"]]["nome"]?>" />
        <label for="email">Email:</label><input name="email" id="email" type="email" value="<?=$lista_clientes[$_GET["id"]]["email"]?>" />
        <input type="submit">
    </form>
<?php else: ?>
    <h2>Você não tem autorização de acessar essa página</h2>
<?php endif;?>
