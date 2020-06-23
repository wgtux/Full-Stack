<?php

//verifica se os paramentros passados não estão vazios
if(!empty($_GET['numberone']) && !empty($_GET['numbertwo']) && !empty($_GET['op'])){

    $valueone = floatval($_GET['numberone']);
    $valuetwo = floatval($_GET['numbertwo']);
    $r = 0;

    $op = $_GET['op'];

    switch ($op){
        case"+":
            $r = $valueone + $valuetwo;
        break;

        case"-":
            $r = $valueone - $valuetwo;
        break;

        case"*":
            $r = $valueone * $valuetwo;
        break;

        case"/":
            $r = $valueone / $valuetwo;
        break;
    }

    echo "O RESULTADO DE ".$valueone." ".$op." ".$valuetwo." = ".$r;
}
else{
    header("Location: index_calculadora.php");
}
?>
