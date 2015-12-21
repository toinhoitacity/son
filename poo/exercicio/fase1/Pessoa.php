<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 08/12/15
 * Time: 15:50
 */
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome     = $nome;
        $this->idade    = $idade;
    }

    public function correr($km)
    {
        echo "{$this->nome} esta correndo !";
        for($i=0; $km > $i; $i++){
            echo ".";
        }
        echo "{$this->nome} Terminou de correr!";
    }
}

