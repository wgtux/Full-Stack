<h1>Manipulação de Arquivo</h1><br>

<a href="index.php">Voltar</a><br><br>

<?php

//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';

//Armazenado o Arquivo na Pasta Padrão
//Verifica se tem arquivo e se não tem erro
if($_FILES['arquivo']['type'] != '' && $_FILES['arquivo']['error'] == 0){
    $arqpermitidos = ['image/jpeg', 'image/jpg', 'image/png', 'image/bmp'];
    
    //verifica se o arquivo recebido é do tipo imagem
    if(in_array($_FILES['arquivo']['type'], $arqpermitidos)){
        $nome = md5(time().rand(1,100)).'.jpg';
        move_uploaded_file($_FILES['arquivo']['tmp_name'],'./imagens/'.$nome);
        //var_dump(move_uploaded_file($_FILES['arquivo']['tmp_name'],'./imagens/'.$nome));
        echo "Arquivo Carregado com sucesso!!!";
    }
   else{
       echo "Arquivo enviado não é do tipo permitido!";
   }
}   
else{
    echo "Não foi carregado nenhum arquivo ou teve algum erro, favor enviar novamente.";
}

?>