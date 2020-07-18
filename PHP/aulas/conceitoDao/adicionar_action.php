<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//verifico se o nome e email estão preenchidos
if($name && $email){
    //consulta o banco para verificar se tem email igual
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    //se o email não existir então realizo o cadastro
    if($sql->rowCount() === 0){
        //Cria um template para segurança do banco de dados
        $sql = $pdo->prepare("INSERT INTO usuarios (name, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header("Location: index.php");
        exit;
    }
    //Caso email exista, volto para a tela de adicionar
    else{
        header("Location: adicionar.php");
        exit;
    }
}
//Caso nome e email não estiverem preeenchidos, volto para tela de adicionar
else{
    header("Location: adicionar.php");
    exit;
}

