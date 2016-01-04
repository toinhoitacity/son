<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//echo get_include_path();
//exit();
spl_autoload_register(function ($class){
    require_once(str_replace('\\','/',$class .'.php'));
});


$x = new SON\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();