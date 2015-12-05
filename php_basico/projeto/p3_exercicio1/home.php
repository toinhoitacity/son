<?php $lista_clientes = (isset($_COOKIE["clientes"]))? unserialize($_COOKIE["clientes"]) : "";?>

<?php if(isset($_SESSION["logado"])): ?>
    <h2>Lista de Clientes</h2>
    <table>
        <tr>
            <th><strong>ID</strong></th>
            <th><strong>NOME</strong></th>
            <th><strong>EMAIL</strong></th>
        </tr>

        <?php if(count($lista_clientes) > 0):?>
            <?php foreach($lista_clientes as $id => $cliente):?>
                <tr>
                    <td><a href="index.php?page=editar-cliente&id=<?=$id;?>"><?=$id;?></a></td>
                    <td><a href="index.php?page=editar-cliente&id=<?=$id;?>"><?=$cliente["nome"]?></a></td>
                    <td><a href="index.php?page=editar-cliente&id=<?=$id;?>"><?=$cliente["email"]?></a></td>
                </tr>
            <?php endforeach;?>
        <?php endif; ?>
    </table>
<?php else: ?>
    <table>
        <tr>
            <th><strong>ID</strong></th>
            <th><strong>NOME</strong></th>
            <th><strong>EMAIL</strong></th>
        </tr>

    <?php if(count($lista_clientes) > 0):?>
        <?php foreach($lista_clientes as $id => $cliente):?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$cliente["nome"]?></td>
                <td><?=$cliente["email"]?></td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
<?php endif;?>
