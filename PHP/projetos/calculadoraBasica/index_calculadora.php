<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <h1>Calculadora</h1>
    </br></br>
    <form method="GET" action="calc.php">
        <input type="number" placeholder="Numero 1" name="numberone" />

        <select name="op">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option vlaue="*"> * </option>
            <option value="/"> / </option>
        </select>

        <input type="number" placeholder="Numero 2" name="numbertwo" />
        <input type="submit" value="Calcular" />
    </form>
 </body>
</html>