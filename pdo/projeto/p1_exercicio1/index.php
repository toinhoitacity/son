<?php
require_once "header.php";
$result=[];
try{
    $con = new \PDO("mysql:host=localhost;dbname=pdo", "root", "");
    $query = "select * from alunos order by nota desc limit 3";
    $stmt = $con->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);
} catch(PDOException $e){
    echo "<h2>Não foi possível estabelecer a conexão com o banco. Erro: {$e->getMessage()} </h2>";
}
?>

<?php if(count($result) > 2):?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $aluno):?>
                <tr>
                    <td><?=$aluno->nome?></td>
                    <td><?=$aluno->nota?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
<?php endif; ?>

<?php require_once "footer.php";?>