<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 08/12/15
 * Time: 16:52
 */

require_once "Pessoa.php";

//$pessoa1 = new Pessoa();
//$pessoa1->nome  = "Antonio Gutierrez";
//$pessoa1->idade = 33;
//
//$pessoa2 = new Pessoa();
//$pessoa2->nome  = "Thais Gutierrez";
//$pessoa2->idade = 31;

//echo $pessoa1->correr(50);

//$pessoa1    = new Pessoa("Antonio Gutierrez", 33);
//$pessoa2    = new Pessoa("Thais Gutierrez", 31);
//
//$pessoa2->correr(50);

require_once "Produto.php";
require_once "Tenis.php";

$tenis = new Tenis();

if($tenis instanceof Tenis){
    echo "É um tipo de Tenis";
} else {
    echo "Não é um tipo de Tenis";
}

if($tenis instanceof Pessoa){
    echo "É um tipo de Tenis";
} else {
    echo "Não é um tipo de Tenis";
}
