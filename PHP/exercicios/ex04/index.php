<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <title>Arquivos</title>
</head>
<body>

<!--OPÇÃO DE ENVIAR, RENOMEAR, COPIAR E MOVER ARQUIVOS -->
<h1>Envio de Arquivos do tipo Imagens (png, jpeg, jpg, bmp)</h1>

<form method ="POST" action = "upload.php" enctype="multipart/form-data">
    <input type="file" name="arquivo" />
    <input type="submit" value="Enviar" />
</form>
     
</body>
</html>