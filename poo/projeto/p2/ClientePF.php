<?php

class ClientePF extends Cliente
{
    private $importancia;
    private $enderecoCobranca;

    public function __construct($nome, $idade, $endereco, $num_telefone, $importancia, $enderecoCobranca)
    {
        parent::__construct($nome, $idade, $endereco, $num_telefone);
        $this->importancia = $importancia;
        $this->enderecoCobranca = $enderecoCobranca;
    }


    public function getImportancia()
    {
        return $this->importancia;
    }

    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }


}