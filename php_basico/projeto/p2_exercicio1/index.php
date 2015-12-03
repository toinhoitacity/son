<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto 2 Exercício 1</title>
</head>
<body>
<?php
$vetor = array();

for($i=1; $i<=100; $i++){
    $vetor[$i] = $i;
}
?>

<ul>
    <?php for($i=1; $i<=100; $i++): ?>
        <?php if($vetor[$i] %2 == 0):?>
            O número <?=$vetor[$i] ?> é par <br />
        <?php else: ?>
            O número <?=$vetor[$i] ?> é ímpar <br />
        <?php endif;?>
    <?php endfor;?>
</ul>

</body>
</html>
