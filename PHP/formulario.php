<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //verifica se a variavél existe e se ela contem algum valor
        //função isset verifica se a variavél POST existe (POST = variavél padrão para envio do php)
        //empty retorna true ou false para verificar se o campo esta vazio

        if(isset($_POST['email']) && !empty($_POST['password'])){

            $email = $_POST['email'];
            echo 'o email digitado foi: ' .$email;

            $senha = $_POST['password'];
            echo '<br/>a senha digitada foi: ' .$senha;
        }

    ?>
    <br/> <br/><hr/>

    <form method="POST"> 
    
        Email <br/>
        <input type="email" name="email" placeholder="Digite seu e-mail"><br/><br/>

        Senha <br/>
        <input type="password" name="password" placeholder="Digite sua senha"><br/><br/>

        <input type="submit" name="submit" value="send">

</form>

    
</body>
</html>