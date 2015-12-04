<ul>
    <li><a href="index.php?page=home">Home</a></li>
    <li><a href="index.php?page=login">Login</a></li>
    <?php if(isset($_SESSION["logado"])):?>
        <li><a href="index.php?page=logout">Logout</a></li>
    <?php endif;?>
    <?php if(isset($_SESSION["logado"])):?>
        <li><a href="index.php?page=cadastra-cliente">Cadastrar Clientes</a></li>
    <?php endif;?>
</ul>