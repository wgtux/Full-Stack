<?php

//Criando os dados para conexão
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

/*
//Conexão com o Banco
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    //selecionando os dados da tabela usuarios
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    
    //Exibindo dados inseridos
    //verificando se existe dados na tabela, caso existe exibe os dados solicitados
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario){
            echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]. "<br />";
        }
    } else{
        echo "Não há usuarios cadastrados!!!";
    }
} 
catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}
*/

/*
//INSERINDO DADOS NO BANCO
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Tim02";
    $email = "timtim@gmail.com";
    $senha = md5("125234");
    
    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);
    
    echo "Usuario inserido foi o numero: ".$pdo->lastInsertId();
} 
catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}
*/

/*
//ATUALIZANDO DADOS NO BANCO
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $novaSenha = md5("teste558");

    $sql = "UPDATE usuarios SET senha = '$novaSenha' WHERE id = 2";
    $pdo->query($sql);
    
    echo "Email atualizado com sucesso";
} 
catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}
*/

/*
//DELETANDO DADOS NO BANCO
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "DELETE FROM usuarios WHERE id = 5";
    $pdo->query($sql);
    
    echo "Usuario deltado com sucesso";
} 
catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}
*/

//ATUALIZANDO DADOS COM METODO MAIS SEGURO NO BANCO
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
$nome = "Arthur Rodrigues";
$id = 2;

    $sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':novonome', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    echo "Usuario atualizado com sucesso";
} 
catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();
}



?>