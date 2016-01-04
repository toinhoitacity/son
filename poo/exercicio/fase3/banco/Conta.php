<?php

class Conta extends ContaAbstract
{

    protected function calculoDeposito($valor)
    {
        return $valor = $valor + 10;
    }
}