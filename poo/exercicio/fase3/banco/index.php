<?php

require_once "Conta.php";
require_once "ContaPremium.php";

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);
//$conta->saldo = 55555;

$conta->getSaldo();

echo $conta->getSaldo();