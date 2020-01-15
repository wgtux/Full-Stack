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
    //ARRAY MULTIDIMENCIONAL

    $teste = [];
    $teste['carros'] = ['Audi 50', 'Gol','Palio', 'Corsa'];
    $teste['moto'] = ['cg 150', '300','cb500'];
    //$teste  = array('carro','casa');
    //echo "Este Array contém os seguintes dados: {$teste[0} </br>";
    
    echo '<pre>';
    print_r($teste);
    echo '</pre>';
    //echo $teste[0]

    */

    //TESTANDO O FOREACH
    /*
    $aluno = array(
        "nome" => "Weslen",
        "idade" => "31",
        "estado" => "SP",
        "pais" => "Brasil"
    );
    
    foreach($aluno as $chave => $valor){
        echo $chave. ":".$valor."<br/>";
    }
    */

    //TABUADA COM FOR
/*
    for($x=1; $x<=10; $x++){

        echo "Tabuada do ".$x. "<br/>";

        for($y=1; $y<=10; $y++){
            $r = $x*$y;
            echo $x. ' * ' .$y. " = " .$r. "<br/>";
        }
        echo "<br/><br/>";
    }
    */
    
    //LISTA DE SORTEIO

    $alunos = array("Weslen", 'Flavia', 'Alanna', 'Tim', 'Aline');
    $sorteio = rand(0,4);
    echo 'O aluno sorteado foi: '.$alunos[$sorteio];

?>
    
</body>
</html>