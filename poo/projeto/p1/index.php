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
$clientes = [
    0 => new Cliente("Antonio", 30, "R1", "981677667"),
    1 => new Cliente("Beatriz", 30, "R1", "981677667"),
    2 => new Cliente("Caio", 30, "R1", "981677667"),
    3 => new Cliente("Damiana", 30, "R1", "981677667"),
    4 => new Cliente("Estevan", 30, "R1", "981677667"),
    5 => new Cliente("Fabiana", 30, "R1", "981677667"),
    6 => new Cliente("Gabriela", 30, "R1", "981677667"),
    7 => new Cliente("Hélcio", 30, "R1", "981677667"),
    8 => new Cliente("Irineia", 30, "R1", "981677667"),
    9 => new Cliente("João", 30, "R1", "981677667")
];
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
        </tr>
        </thead>
        <tbody>
<?php if( isset($_GET["id"]) ):?>
    <?php for($i=count($clientes)-1; $i>0; $i--):?>
        <tr>
            <td><?=$i;?></td>
            <td><?=$clientes[$i]->getNome();?></td>
            <td><?=$clientes[$i]->getIdade();?></td>
            <td><?=$clientes[$i]->getEndereco();?></td>
            <td><?=$clientes[$i]->getNumTelefone();?></td>
        </tr>
    <?php endfor;?>
<?php else: ?>
    <?php for($i=0; $i<count($clientes)-1; $i++):?>
        <tr>
            <td><?=$i;?></td>
            <td><?=$clientes[$i]->getNome();?></td>
            <td><?=$clientes[$i]->getIdade();?></td>
            <td><?=$clientes[$i]->getEndereco();?></td>
            <td><?=$clientes[$i]->getNumTelefone();?></td>
        </tr>
    <?php endfor;?>
<?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>