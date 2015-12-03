<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto 2 Exercício 2</title>
</head>
<body>
<?php
$aluno = [
            "Antonio" => 10.0,
            "Beatriz" => 9.0,
            "Caio" => 8.0,
            "Daniele" => 7.0,
            "Esthefany" => 6.0,
            "Fabiana" => 5.0,
            "Gustavo" => 4.0,
            "Hélio" => 3.0,
            "Iris" => 2.0,
            "José" => 1.0,
            "Luana" => 2.0,
            "Mário" => 3.0,
            "Novack" => 4.0,
            "Otávio" => 5.0,
            "Poliana" => 6.0,
            "Quintino" => 7.0,
            "Roberto" => 8.0,
            "Sávio" => 9.0,
            "Tatiana" => 10.0,
            "Uesley" => 9.0,
            "Valdemar" => 8.0
         ];
?>
<ul>
<?php foreach($aluno as $nome => $nota): ?>
    <?php if($nota < 7):?>
        <li style="background-color: #F00">O aluno <?= $nome?> foi reprovado com a média: <?= $nota?>.</li>
    <?php else: ?>
        <li style="background-color: #00F">O aluno <?= $nome?> foi aprovado com a média: <?= $nota?>.</li>
    <?php endif;?>
<?php endforeach;?>
</ul>
</body>
</html>
