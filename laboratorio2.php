<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <form action="form(lab2).php" method="post">
        Primer numero:<br>
        <input type="text" name="num1"><br><br>

        Segundo numero:<br>
        <input type="text" name="num2"><br><br>

        Seleccione una operacion:<br>
        <select name="op">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="redondear">Redondear</option>
        </select>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

</body>
</html>