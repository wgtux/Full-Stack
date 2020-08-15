<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

/*
sudo /opt/lampp/lampp start     ## starts xampp server
sudo /opt/lampp/lampp stop      ## stops xampp server
sudo /opt/lampp/lampp restart   ## restarts xampp server
*/


    $cartao = true;
    $valor_compra = 50;
    $frete = 50;
    $desconto_frete = false;

    if ($cartao == true && $valor_compra >=100){
        $frete = 0;
        $desconto_frete = true;
    }
?>

<h1>Detalhes do Pedido</h1>

<p> possui cartão da loja?
        
    <?php
         // Operator ternario
        //  <? $cartao == true ? 'SIM' : 'NÃO'; 

        if($cartao == true){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
    ?>
</p>

<p> Valor da compra: <?= $valor_compra?></p>

<p> Recebeu desconto no frete?
    <?php
        if($desconto_frete == true){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
    ?>
</p>

<p>Valor do frete: <?= $frete ?></p>

?>

</body>
</html>
