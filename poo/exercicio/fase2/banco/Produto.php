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

    /**
     * @return null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param null $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param null $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return null
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param null $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return null
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param null $estoque
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }


    public function baixaEstoque()
    {
        $this->estoque= $this->estoque - 1;
    }
}