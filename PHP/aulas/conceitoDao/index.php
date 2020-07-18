<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);
$list = $usuarioDAO->findAll();

?>


<h1>Lista de Usuarios do Sistema</h1>
<h3>Conceito de CRUD usando o DAO</h3>
<br>
<a href="adicionar.php">Adicionar Novo Usuario</a>
<br>
<br>
<table border="1" width="100%">
    <tr>
        <th> ID</th>
        <th> NOME</th>
        <th> EMAIL</th>
        <th> AÇÕES</th>
    </tr>
    <?php foreach($list as $users):?>
        <tr>
            <td> <?=$users->getId(); ?> </td>
            <td> <?=$users->getName(); ?> </td>
            <td> <?=$users->getEmail(); ?> </td>
            <td> 
                <a href="editar.php?id=<?=$users->getId();?>"> [Editar] </a>
            <a href="excluir.php?id=<?=$users->getId();?>" onclick="return confirm('Tem certeza que desja excluir?')"> [Excluir] </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>