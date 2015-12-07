<?php require_once "Aluno.php"?>

<?php if(isset($_SESSION["logado"])):?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexao    = conectar_banco();
        $aluno      = new Aluno($conexao);
        $aluno  ->setNome($_POST["nome"])
            ->setNota($_POST["nota"]);
        $aluno->inserir();
        header("location: index.php?page=home");
    }
    ?>
    <form action="index.php?page=adicionar-aluno" method="post">
        <div>
            <label for="nome">Nome: </label><input type="text" name="nome" id="nome" />
        </div>
        <div>
            <label for="nota">Nota: </label><input type="number" name="nota" id="nota" />
        </div>
        <div>
            <input type="submit">
        </div>
    </form>

<?php else: ?>
    Você não tem permissão de acessar essa página!!
<?php endif;?>
