<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, 'id');

//Verifica se o id não esta vazio
if($id)
{
    $usuario = $usuarioDAO->findById($id);
}

if($usuario === false)
{
    header("Location: index.php");
    exit;
}

?>

<h2>Editando Usuarios</h2> <br><br>

<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?=$usuario->getId();?>" />

    <label>
    Nome:<br>
        <input type="text" name="name" value="<?=$usuario->getName();?>" /> 
    </label><br><br>
    
    <label>
        Email:<br>
        <input type="email" name="email" value="<?=$usuario->getEmail();?>"/><br><br>
    </label>
    <button type="submit">Salvar</button>

</form>