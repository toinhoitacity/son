<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto 2 Exercício 2</title>
</head>
<body>
<?php
function informacaoAluno($array, $nome){
    return "Matrícula: " . $array[$nome]["matricula"] . ". Altura: " . $array[$nome]["altura"];
}

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
    <li><?=informacaoAluno($aluno,"Roberto")?></li>
    <li><?=informacaoAluno($aluno,"Sávio")?></li>
    <li><?=informacaoAluno($aluno,"Tatiana")?></li>
    <li><?=informacaoAluno($aluno,"Uesley")?></li>
    <li><?=informacaoAluno($aluno,"Valdemar")?></li>
</ol>

</body>
</html>
