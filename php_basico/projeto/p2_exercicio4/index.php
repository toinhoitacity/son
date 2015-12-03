<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto 2 Exercício 1</title>
</head>
<body>
<?php
function is_even($numero){
    if($numero % 2 == 0){
        return true;
    } else {
        return false;
    }
}

$vetor = array();

for($i=1; $i<=100; $i++){
    $vetor[$i] = $i;
}
?>

<ul>
    <?php for($i=1; $i<=100; $i++): ?>
        <?php if(is_even($vetor[$i])):?>
            O número <?=$vetor[$i] ?> é par <br />
        <?php else: ?>
            O número <?=$vetor[$i] ?> é ímpar <br />
        <?php endif;?>
    <?php endfor;?>
</ul>

</body>
</html>
