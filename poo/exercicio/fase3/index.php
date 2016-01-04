<?php
define('CLASS_DIR', 'poo/exercicio/fase3/src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
echo get_include_path();
//exit();
spl_autoload_register();

$x = new SON\Conta\Type\Conta();
$x->depositar(10);
echo $x->getSaldo();