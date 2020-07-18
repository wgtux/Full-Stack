<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

//Verifica se o id não esta vazio
if($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    //verifica se o usuario existe no banco
    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
    //
    else{
        header("Location: index.php");
        exit;
    }
}
//Caso não encontre id, volta para index
else{
    header("Location: index.php");
    exit;
}

?>

<h2>Editando Usuarios</h2> <br><br>
<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?=$info['id'];?>" />

    <label>
    Nome:<br>
        <input type="text" name="name" value="<?=$info['name'];?>" /> 
    </label><br><br>
    
    <label>
        Email:<br>
        <input type="email" name="email" value="<?=$info['email'];?>"/><br><br>
    </label>
    <button type="submit">Salvar</button>

</form>