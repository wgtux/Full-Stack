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
    function calculoImposto($salario){
        $imposto = 0;
        
        if($salario <= 1903.98){
           // echo 'Você esta INSENTO';
        } 
        else if(($salario >= 1903.99) && $salario <=2826.65){
            $imposto = ($salario * 0.075);
           // echo "Seu SALARIO é $salario e o seu IMPOSTO é de $imposto";
        }
        else if(($salario >= 2826.66) && $salario <=3751.05){
            $imposto = ($salario * 0.15);
           // echo "Seu SALARIO é $salario e o seu IMPOSTO é de $imposto";
        }
        else if(($salario >= 3751.06) && $salario <=4664.68){
            $imposto = ($salario * 0.225);
           // echo "Seu SALARIO é $salario e o seu IMPOSTO é de $imposto";
        }else {
            $imposto = ($salario * 0.275);
            //echo "Seu SALARIO é $salario e o seu IMPOSTO é de $imposto";
        }

        echo "Seu SALARIO é $salario e o seu IMPOSTO é de $imposto";

    }

    calculoImposto(5000);

?>

</body>
</html>