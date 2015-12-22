<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 22/12/15
 * Time: 16:38
 */

require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();
$produto->setNome("Produto 1")
        ->setDescricao("Essa é a descrição do produto")
        ->setEstoque(10)
        ->setEstoque(10)->setValor(1000)
;



