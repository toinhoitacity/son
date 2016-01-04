<?php
namespace SON\Conta\Type;

use SON\Conta\ContaAbstract;

class Conta extends ContaAbstract
{

    protected function calculoDeposito($valor)
    {
        return $valor = $valor + 10;
    }
}