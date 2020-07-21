<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email)
{
    //$usuario = $usuarioDAO->findById($id);
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setName($name);
    $usuario->setEmail($email);

    $usuarioDAO->update($usuario);

    header("Location: index.php");
    exit;
}
else
{
    header("Location: editar.php?id=".$id);
    exit;
}

?>
