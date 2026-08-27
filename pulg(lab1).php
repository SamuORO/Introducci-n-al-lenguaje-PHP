<?php
if (isset($_POST['radio'])) {

    $radio = $_POST['radio'];
    $area = 3.1416 * $radio * $radio;

    echo "El área de la circunferencia es: " . $area;
}

?>