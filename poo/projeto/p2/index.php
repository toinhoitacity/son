<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<?php
include "Cliente.php";
include "ClientePF.php";
include "ClientePJ.php";
$clientes = [
    0 => new ClientePF("Antonio", 30, "R1", "981677667", 5, "Rua Endereco"),
    1 => new ClientePJ("Beatriz", 30, "R1", "981677667", 4, "Rua Endereco"),
    2 => new ClientePF("Caio", 30, "R1", "981677667", 3, "Rua Endereco"),
    3 => new ClientePJ("Damiana", 30, "R1", "981677667", 2, "Rua Endereco"),
    4 => new ClientePF("Estevan", 30, "R1", "981677667", 1, "Rua Endereco"),
    5 => new ClientePJ("Fabiana", 30, "R1", "981677667", 5, "Rua Endereco"),
    6 => new ClientePF("Gabriela", 30, "R1", "981677667", 4, "Rua Endereco"),
    7 => new ClientePJ("Hélcio", 30, "R1", "981677667", 3, "Rua Endereco"),
    8 => new ClientePF("Irineia", 30, "R1", "981677667", 2, "Rua Endereco"),
    9 => new ClientePJ("João", 30, "R1", "981677667", 1, "Rua Endereco")
];

$_SESSION["clientes"] = serialize($clientes);
?>

<div class="container">
    <h2>Tabela de Clientes</h2>
    <table class="table">
        <thead>
        <tr>
            <th><a href="<?=( isset($_GET["id"]) )?"index.php":"index.php?id=reverso"?>">ID</a></th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Endereco</th>
            <th>Telefone</th>
            <th>Importância</th>
            <th>Endereço de Cobrança</th>
            <th>Tipo de Cliente</th>
        </tr>
        </thead>
        <tbody>
<?php if( isset($_GET["id"]) ):?>
    <?php for($i=count($clientes)-1; $i>0; $i--):?>
        <tr>
            <td><a href="cliente-front.php?id=<?=$i?>"><?=$i;?></a></td>
            <td><?=$clientes[$i]->getNome();?></td>
            <td><?=$clientes[$i]->getIdade();?></td>
            <td><?=$clientes[$i]->getEndereco();?></td>
            <td><?=$clientes[$i]->getNumTelefone();?></td>
            <td><?=$clientes[$i]->getImportancia();?></td>
            <td><?=$clientes[$i]->getEnderecoCobranca();?></td>
            <td><?=( $clientes[$i] instanceof ClientePF )?"Pessoa Físita":"Pessoa Jurídica"?></td>
        </tr>
    <?php endfor;?>
<?php else: ?>
    <?php for($i=0; $i<count($clientes)-1; $i++):?>
        <tr>
            <td><a href="cliente-front.php?id=<?=$i?>"><?=$i;?></a></td>
            <td><?=$clientes[$i]->getNome();?></td>
            <td><?=$clientes[$i]->getIdade();?></td>
            <td><?=$clientes[$i]->getEndereco();?></td>
            <td><?=$clientes[$i]->getNumTelefone();?></td>
            <td><?=$clientes[$i]->getImportancia();?></td>
            <td><?=$clientes[$i]->getEnderecoCobranca();?></td>
            <td><?=( $clientes[$i] instanceof ClientePF )?"Pessoa Físita":"Pessoa Jurídica"?></td>
        </tr>
    <?php endfor;?>
<?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>