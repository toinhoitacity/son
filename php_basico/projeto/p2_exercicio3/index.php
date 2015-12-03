<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto 2 Exercício 2</title>
</head>
<body>
<?php
$aluno = [
            "Antonio" => [
                "matricula" => "0123456789",
                "altura" => 1.75
            ],
            "Beatriz" => [
                "matricula" => "9876543210",
                "altura" => 1.74
            ],
            "Caio" => [
                "matricula" => "5678901234",
                "altura" => 1.73
            ],
            "Daniele" => [
                "matricula" => "0123456789",
                "altura" => 1.72
            ],
            "Esthefany" => [
                "matricula" => "9876543210",
                "altura" => 1.71
            ],
            "Fabiana" => [
                "matricula" => "5678901234",
                "altura" => 1.80
            ],
            "Gustavo" => [
                "matricula" => "0123456789",
                "altura" => 1.79
            ],
            "Hélio" => [
                "matricula" => "9876543210",
                "altura" => 1.88
            ],
            "Iris" => [
                "matricula" => "5678901234",
                "altura" => 1.87
            ],
            "José" => [
                "matricula" => "0123456789",
                "altura" => 1.86
            ],
            "Luana" => [
                "matricula" => "9876543210",
                "altura" => 1.85
            ],
            "Mário" => [
                "matricula" => "5678901234",
                "altura" => 1.84
            ],
            "Novack" => [
                "matricula" => "0123456789",
                "altura" => 1.83
            ],
            "Otávio" => [
                "matricula" => "9876543210",
                "altura" => 1.82
            ],
            "Poliana" => [
                "matricula" => "5678901234",
                "altura" => 1.81
            ],
            "Quintino" => [
                "matricula" => "0123456789",
                "altura" => 1.80
            ],
            "Roberto" => [
                "matricula" => "9876543210",
                "altura" => 1.99
            ],
            "Sávio" => [
                "matricula" => "5678901234",
                "altura" => 1.98
            ],
            "Tatiana" => [
                "matricula" => "0123456789",
                "altura" => 1.97
            ],
            "Uesley" => [
                "matricula" => "9876543210",
                "altura" => 1.96
            ],
            "Valdemar" => [
                "matricula" => "5678901234",
                "altura" => 1.95
            ]
         ];
?>
<p>Segue a lista dos alunos mais altos:</p>
<ol>
    <li>Matrícula: <?=$aluno["Roberto"]["matricula"];?>. Altura <?=$aluno["Roberto"]["altura"]?></li>
    <li>Matrícula: <?=$aluno["Sávio"]["matricula"];?>. Altura <?=$aluno["Sávio"]["altura"]?></li>
    <li>Matrícula: <?=$aluno["Tatiana"]["matricula"];?>. Altura <?=$aluno["Tatiana"]["altura"]?></li>
    <li>Matrícula: <?=$aluno["Uesley"]["matricula"];?>. Altura <?=$aluno["Uesley"]["altura"]?></li>
    <li>Matrícula: <?=$aluno["Valdemar"]["matricula"];?>. Altura <?=$aluno["Valdemar"]["altura"]?></li>
</ol>

</body>
</html>
