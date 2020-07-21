<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//verifico se o nome e email estão preenchidos
if($name && $email){

    //Verifica se o email não existe
    if($usuarioDAO->findByEmail($email) == false)
    {
        $novoUsuario = new Usuario();
        $novoUsuario->setName($name);
        $novoUsuario->setEmail($email);

        $usuarioDAO->add($novoUsuario);

        header("Location: index.php");
        exit;
    }
    else
    {
        header("Location: adicionar.php");
        exit;
    }
}
//Caso nome e email não estiverem preeenchidos, volto para tela de adicionar
else{
    header("Location: adicionar.php");
    exit;
}

