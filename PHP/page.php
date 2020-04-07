<?php
/* 
NUMEROS IMPARES

$numeros=[01,2,3,4,5,6,7,8,9];

$impar = array_filter($numeros, function($item){
    if($item % 2 != 0){
        return true;
    }
    else{
        return false;
    }
});

print_r($impar);
*/

//LENDO E ESCREVENDO ARQUIVO TXT 
$textodois = filter_input(INPUT_POST, 'texto');

//inserindo o texto
$texto = file_get_contents ('texto.txt');

$texto .= "\n".$textodois;
//inserindo o texto
file_put_contents ('texto.txt', $texto);

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    
    
    <form method="POST">
        <label>Digite seu texto aqui</label>
        <input type="text" name="texto" />
        <input type="submit" />
    </form>

</body>
</html>
