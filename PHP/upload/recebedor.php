
<?php
/* <-----ARQUIVOS UNICOS----->

    $arquivo = $_FILES['arquivo'];

    if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){
        
        move_uploaded_file($arquivo['tmp_name'], 'files/'.$arquivo['name']);

        echo "Arquivo recebido com Sucesso!";

    }
*/


 //<-----ARQUIVOS MULTIPLOS----->
 if(isset($_FILES['arquivo'])){

    if(count($_FILES['arquivo']['tmp_name'])>0){

        for($q=0; $q < count($_FILES['arquivo']['tmp_name']);$q++){
            //Renomeando o arquivo
            //$nomearquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,99)).'jpg';
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'files/'.$_FILES['arquivo']['name'][$q]);
        }
    }
    echo "Arquivos enviados com sucesso";
}
?>

<a href="index.php">Voltar</a>

