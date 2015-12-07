<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 07/12/15
 * Time: 18:30
 */
class Aluno
{
    private $db;
    private $id;
    private $nome;
    private $nota;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function find($id)
    {
        $query = "SELECT * FROM alunos WHERE id= :id";

        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function listar($order)
    {
        if(isset($order))
        {
            $query = "SELECT * FROM alunos ORDER BY {$order}";
        } else
        {
            $query = "SELECT * FROM alunos";
        }

        $stmt= $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    public function inserir()
    {
        $query = "INSERT INTO alunos (nome, nota) VALUES (:nome, :nota)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":nota", $this->getNota(),PDO::PARAM_INT);

        if($stmt->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function alterar()
    {
        $query = "UPDATE alunos SET nome= :nome, nota= :nota WHERE id= :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":nota", $this->getNota(), PDO::PARAM_INT);
        $stmt->bindValue(":id", $this->getId(), PDO::PARAM_INT);

        if($stmt->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deletar()
    {
        $query = "DELETE FROM alunos WHERE id= :id";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":id", $this->getId(), PDO::PARAM_INT);
        if( $stmt->execute() )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
        return $this;
    }
}