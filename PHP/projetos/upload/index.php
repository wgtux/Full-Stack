<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload de Arquivos</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data" action="recebedor.php">
    
    <label>Arquivo</label><br />
     
    <!-- ****MANDA APENAS 1 ARQUIVO ***
    <input type="file" name="arquivo"><br /> <br />
    -->
    
    <!--ENVIA MULTIPLOS ARQUIVOS (arquivo[])-->
    <input type="file" name="arquivo[]" multiple /> <br /><br />
    <input type="submit" value="Enviar">
         
</form>

</body>
</html>