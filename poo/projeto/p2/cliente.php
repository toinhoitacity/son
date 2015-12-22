<?php
session_start();
require_once "Cliente.php";
require_once "ClientePJ.php";
require_once "ClientePF.php";

$clientes = unserialize($_SESSION["clientes"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visualização do Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <?php if( !isset($_GET["id"]) ):?>
        <div class="alert alert-danger">
            <strong>Erro!</strong> Página sem referência de cliente.
        </div>
    <?php else:?>
        <h3 class="alert alert-success">
            Visualização do cliente: <strong><?=$clientes[$_GET["id"]]->getNome();?></strong>
        </h3>
        <form>
            <fieldset disabled>
                <div class="form-group">
                    <label for="disabledTextInput">ID</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$_GET["id"];?>">
                    <label for="disabledTextInput">Nome</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$clientes[$_GET["id"]]->getNome();?>">
                    <label for="disabledTextInput">Idade</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$clientes[$_GET["id"]]->getIdade();?>">
                    <label for="disabledTextInput">Endereço</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$clientes[$_GET["id"]]->getEndereco();?>">
                    <label for="disabledTextInput">Telefone</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$clientes[$_GET["id"]]->getNumTelefone();?>">
                    <label for="disabledTextInput">Importância</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$clientes[$_GET["id"]]->getImportancia();?>">
                    <label for="disabledTextInput">Endereço de Cobrança</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$clientes[$_GET["id"]]->getEnderecoCobranca();?>">
                </div>
            </fieldset>
        </form>
    <?php endif;?>
    <a href="index.php">Voltar para a página inicial</a>
</div>
</body>
</html>