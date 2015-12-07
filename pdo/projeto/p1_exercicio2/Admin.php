<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 07/12/15
 * Time: 19:13
 */
class Admin
{
    private $db;
    private $id;
    private $usuario;
    private $senha;

    public function __construct(\PDO $db)
    {
        $this->db= $db;
    }

    public function isAdmin()
    {
        $query = "SELECT * FROM admin WHERE usuario= :usuario AND senha= md5(:senha)";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":usuario", $this->getUsuario(), \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $this->getSenha(), \PDO::PARAM_STR);

        $admin= $stmt->fetch(\PDO::FETCH_ASSOC);

        if(count($admin) > 0){
            return true;
        }else{
            return false;
        }
    }

    public function find($id)
    {
        $query = "SELECT * FROM admin WHERE id = :id";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_CLASS);
    }

    public function listar($ordem)
    {
        if(isset($ordem))
        {
            $query= "SELECT * FROM admin ORDER BY {$ordem}";
        }
        else
        {
            $query= "SELECT * FROM admin";
        }

        $stmt= $this->db->query($query);

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    public function inserir()
    {
        $query= "INSERT FROM admin (usuario, senha) VALUES (:usuario, md5(:senha))";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":usuario", $this->getUsuario(), \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $this->getSenha(), \PDO::PARAM_STR);

        if( $stmt->execute() )
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function alterar()
    {
        $query= "UPDATE admin SET usuario= :usuario, senha= md5(:senha)";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":usuario", $this->getUsuario(), \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $this->getSenha(), \PDO::PARAM_STR);

        if( $stmt->execute() )
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
        $query= "DELETE FROM admin WHERE id= :id";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":id", $this->id, \PDO::PARAM_INT);

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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }


}