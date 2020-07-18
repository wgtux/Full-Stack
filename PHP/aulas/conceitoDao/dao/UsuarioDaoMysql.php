<?php

require_once 'models/Usuarios.php';

class UsuarioDaoMysql implements UsuarioDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }
    
    //Cria o usuario
    public function create(Usuario $u)
    {

    }

    //Busca por todos usuarios
    public function findAll()
    {
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $u = new Usuario;
                $u->setId($item['id']);
                $u->setName($item['name']);
                $u->setEmail($item['email']);

                $array[] = $u;
            }
        }

        return $array;
    }

    //Busca usuario por ID
    public function findById($id)
    {

    }

    //Atualiza dados dos usuarios
    public function update(Usuario $u)
    {

    }

    //Deleta usuarios
    public function delete($id)
    {

    }
}