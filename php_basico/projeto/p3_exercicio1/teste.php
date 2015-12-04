<?php session_start(); ?>
<h2>Escolha uma das acoes abaixo</h2>
<ul>
    <li><a href="teste.php?acao=criar_vet_cookie">criar_vet_cookie</a></li>
    <li><a href="teste.php?acao=destruir_vet_cookie">destruir_vet_cookie</a></li>
    <li><a href="teste.php?acao=ver_vet_cookie">ver_vet_cookie</a></li>
    <li><a href="teste.php?acao=criar_vet_admin">criar_vet_admin</a></li>
    <li><a href="teste.php?acao=destruir_vet_admin">destruir_vet_admin</a></li>
    <li><a href="teste.php?acao=ver_vet_admin">ver_vet_admin</a></li>
    <li><a href="teste.php?acao=verifica_logado">verifica_logado</a></li>
</ul>
<?php if(isset($_GET["acao"]) && $_GET["acao"] == "criar_vet_cookie"):?>
    <?php
    $vet_clientes = [
        0 => ["nome" => "Augusto", "email" => "augusto@email.com.br"],
        1 => ["nome" => "Bianca", "email" => "bianca@email.com.br"],
        2 => ["nome" => "Cinara", "email" => "cinara@email.com.br"]];
    setcookie("clientes", serialize($vet_clientes));
    ?>
    <h3>Vetor de clientes destruido no cookie</h3>
    <pre>
        <?php print_r(unserialize($_COOKIE["clientes"]));?>
    </pre>

<?php elseif(isset($_GET["acao"]) && $_GET["acao"] == "destruir_vet_cookie"): ?>
    <?php unset($_COOKIE["clientes"]);?>
    <h3>Vetor de clientes destruido no cookie</h3>

<?php elseif(isset($_GET["acao"]) && $_GET["acao"] == "ver_vet_cookie"): ?>
    <pre>
        <?php print_r(unserialize($_COOKIE["clientes"]));?>
    </pre>

<?php elseif(isset($_GET["acao"]) && $_GET["acao"] == "criar_vet_admin"): ?>
    <?php
    $vet_admin = [
        0 => ["usuario" => "admin1", "senha" => "123456"],
        1 => ["usuario" => "admin2", "senha" => "654321"],
        2 => ["usuario" => "admin3", "senha" => "123456"]
    ];
    setcookie("admin", serialize($vet_admin));
    ?>
    <h3>Vetor de administrados criado no cookie</h3>
    <pre>
        <?php print_r(unserialize($_COOKIE["admin"]));?>
    </pre>

<?php elseif(isset($_GET["acao"]) && $_GET["acao"] == "destruir_vet_admin"): ?>
    <?php unset($_COOKIE["admin"]);?>
    <h3>Vetor de administradores destruido no cookie</h3>

<?php elseif(isset($_GET["acao"]) && $_GET["acao"] == "ver_vet_admin"): ?>
    <pre>
        <?php print_r(unserialize($_COOKIE["admin"]));?>
    </pre>

<?php elseif(isset($_GET["acao"]) && $_GET["acao"] == "verifica_logado"): ?>
    <h3>Você <?php echo (isset($_SESSION["logado"]) && $_SESSION["logado"])?"" : "não"?> esta logado</h3>
    <pre>
        <?php print_r($_SESSION);?>
    </pre>

<?php endif;?>