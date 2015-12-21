<?php require_once "Aluno.php"?>

<?php if(isset($_SESSION["logado"])):?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conexao    = conectar_banco();
    $aluno      = new Aluno($conexao);
    $aluno  ->setId($_POST["id"])
            ->setNome($_POST["nome"])
            ->setNota($_POST["nota"]);
    $aluno->alterar();
    header("location: index.php?page=home");
}

if( isset($_GET["id"]) ){
    $conexao    = conectar_banco();
    $aluno      = new Aluno($conexao);
    $aluno  ->setId($_GET["id"]);

    $student = $aluno->find($_GET["id"]);
    header("location index.php?page=home");
}
?>
<?php if( isset($_GET["id"]) ): ?>
<form action="index.php?page=editar-aluno" method="post">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <div>
        <label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?=$student["nome"]?>" />
            </div>
            <div>
                <label for="nota">Nota: </label><input type="number" name="nota" id="nota" value="<?=$student["nota"]?>" />
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    <?php else:?>
        Algo de errado ocorreu na chamada da página de edição de alunos
    <?php endif; ?>

<?php else: ?>
    Você não tem permissão de acessar essa página!!
<?php endif;?>
