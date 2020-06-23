<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Ordenar</title>
</head>
<body>

<?php
    //CONEXÃO COM O BANCO DE DADOS
try{
    $pdo = new PDO("mysql:dbname=blog;dbhost=localhost", "root", "");


}
catch(PDOException $e){
    $e -> getMessage();
}

if(isset($_GET['ordenar']) && !empty($_GET['ordenar'])){
    $ordenar = addslashes($_GET['ordenar']);
    $sql = "SELECT * FROM usuarios ORDER BY $ordenar";

}
else {
    $ordenar='';
    $sql="SELECT * FROM usuarios";
}
?>

<!--SELECIONAR PARA ORDENAR-->
<form method="GET">
  <label>Selecione para Ordenar</label>
  <select name="ordenar" onchange="this.form.submit()">
    <option></option>
    <option value="nome" <?php echo ($ordenar=="nome")?'selected="selected"':''; ?>>Nome</option>
    <option value="idade" <?php echo ($ordenar=="idade")?'selected="selected"':''; ?>>Idade</option>
  </select>
</form>
    
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    <?php
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $users){
                echo '<tr>';
                echo '<td>'.$users['nome']. '</td>';
                echo '<td>'.$users['idade']. '</td>';
                echo '<td>'.$users['email']. '</td>';
                echo '</tr>';
            }
        }

    ?>
    </tbody>
</table>

</body>
</html>

<?php


?>

