<?php

if (isset($_POST['radio'])) {
    $radio = $_POST['radio'];

    $area = 3.1416 * $radio * $radio;      // Obtenemos al area
    $perimetro = 2 * 3.1416 * $radio;      // Obtenemos el perimetro

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado</title>

    <link rel="stylesheet" href="circun(lab1).css">
</head>

<body>

    <div class="resultado">

        <h1>Resultados</h1>

        <p>Radio ingresado: <strong><?php echo $radio; ?></strong></p>

        <div class="dato">
            <h2>Área</h2>
            <p><?php echo $area; ?></p>
        </div>

        <div class="dato">
            <h2>Perímetro</h2>
            <p><?php echo $perimetro; ?></p>
        </div>

        <a href="Laboratorio1(circun).php">Calcular nuevamente</a>

    </div>

</body>
</html>

<?php
}
?>