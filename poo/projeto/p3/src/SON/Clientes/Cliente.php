<?php
namespace SON\Clientes;

use SON\Util\ImportanciaInterface;
use SON\Util\EnderecoCobrancaInterface;

abstract class Cliente implements ImportanciaInterface,EnderecoCobrancaInterface
{
    private $nome;
    private $idade;
    private $endereco;
    private $num_telefone;

    /**
     * Cliente constructor.
     * @param $nome
     * @param $idade
     * @param $endereco
     * @param $num_telefone
     */
    public function __construct($nome, $idade, $endereco, $num_telefone)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->num_telefone = $num_telefone;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNumTelefone()
    {
        return $this->num_telefone;
    }

    /**
     * @param mixed $num_telefone
     */
    public function setNumTelefone($num_telefone)
    {
        $this->num_telefone = $num_telefone;
    }



}