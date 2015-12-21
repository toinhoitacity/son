<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 08/12/15
 * Time: 17:09
 */
class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;

    public function __construct($nome= null, $descricao= null, $valor= null, $estoque= null)
    {
        $this->nome     = $nome;
        $this->descricao= $descricao;
        $this->valor    = $valor;
        $this->estoque  = $estoque;
    }

    public function baixaEstoque()
    {
        $this->estoque= $this->estoque - 1;
    }
}