<?php

if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    $centi = $numero * 2.54;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado</title>

    <link rel="stylesheet" href="pulg(lab1).css">
</head>

<body>

    <div class="resultado">

        <h1>Resultado</h1>

        <p class="conversion">
            <?php echo $numero; ?> pulgadas son:
        </p>

        <p class="numero">
            <?php echo $centi; ?> centímetros
        </p>

        <a href="laboratorio1(pulg).php">Convertir nuevamente</a>

    </div>

</body>
</html>