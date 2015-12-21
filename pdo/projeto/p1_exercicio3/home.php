<?php require_once "Aluno.php"?>
<?php
    $conexao = conectar_banco();

    $aluno= new Aluno($conexao);
    $listaAlunos= $aluno->listar("nome");
?>
<?php if( isset($_SESSION["logado"]) ):?>
    <h2>Lista de Alunos</h2>
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Nota</td>
            <td>Ação</td>
        </tr>
        </thead>
        <tbody>
        <?php if( count($listaAlunos) > 0): ?>
            <?php foreach($listaAlunos as $student): ?>
                <tr>
                    <td><a href="index.php?page=editar-aluno&id=<?=$student->id?>"><?=$student->id?></a></td>
                    <td><a href="index.php?page=editar-aluno&id=<?=$student->id?>"><?=$student->nome?></a></td>
                    <td><a href="index.php?page=editar-aluno&id=<?=$student->id?>"><?=$student->nota?></a></td>
                    <td><a href="index.php?page=remover-aluno&id=<?=$student->id?>">Remover</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <td>Nome</td>
            <td>Nota</td>
        </tr>
        </thead>
        <tbody>
        <?php if( count($listaAlunos) > 0): ?>
            <?php foreach($listaAlunos as $student): ?>
                <tr>
                    <td><?=$student->nome?></td>
                    <td><?=$student->nota?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
<?php endif;?>
