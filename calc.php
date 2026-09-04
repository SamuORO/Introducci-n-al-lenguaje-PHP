<?php

if (isset($_POST['num1']) && isset($_POST['op'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    if ($op == "sumar") {
        $res = $num1 + $num2;
        echo "El resultado de la suma es: " . $res;
    } 
    
    elseif ($op == "restar") {
        $res = $num1 - $num2;
        echo "El resultado de la resta es: " . $res;
    } 
    
    elseif ($op == "multiplicar") {
        $res = $num1 * $num2;
        echo "El resultado de la multiplicación es: " . $res;
    } 
    
    elseif ($op == "redondear") {
        $res = round($num1);
        echo "El numero redondeado es: " . $res;
    }

}

?>