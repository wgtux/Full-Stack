<?php
require 'config.php';
$list = [];

$sql = $pdo->query("SELECT * FROM usuarios");

if ($sql->rowCount() > 0){
    $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<h1>Lista de Usuarios do Sistema</h1>
<h3>Conceito de CRUD</h3>
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
            <td> <?=$users['id']; ?> </td>
            <td> <?=$users['name']; ?> </td>
            <td> <?=$users['email']; ?> </td>
            <td> 
                <a href="editar.php?id=<?=$users['id'];?>"> [Editar] </a>
            <a href="excluir.php?id=<?=$users['id'];?>" onclick="return confirm('Tem certeza que desja excluir?')"> [Excluir] </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>