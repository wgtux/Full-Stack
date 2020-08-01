<?php
//data atual
$day = new DateTime();

//data que vem do usuario
$birth = new DateTime($_POST['date']);

if($birth < $day)
{
    //diff (função que calcula a diferença de tempo entre datas)
    $age = $birth->diff($day);

    echo $age->format('%y anos, %m meses e %d dias');
}
else
{
    echo "Data digitada esta maior que a data atual";
}


?>
