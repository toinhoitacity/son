<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fibbonaci</title>
</head>
<body>
<?php
function fib($n){
    if($n == 1){
        return 1;
    } elseif($n == 2){
        return 1;
    } else {
        return fib($n - 1) + fib($n - 2);
    }
}
$n = 1;
do{
    $f = fib($n);
    echo $f . "<br />";
    $n++;
}while($f <= 100);
?>
</body>
</html>
