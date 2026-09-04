<?PHP
    if (isset($_REQUEST['nombre']) && isset($_POST['edad'])) {
        $Nombre = ucfirst(strtolower($_REQUEST['nombre']));         // Aquí es donde el texto queda normalizado de manera que no importa lo que se reciba del formulario
        
        echo "El nombre es: ".$Nombre."<br>";
        $Edad = $_POST["edad"];

        if(isset($Edad) and $Edad > 18){                             // Si la edad es mayor que 18 la persona puede votar en las elecciones del 2028
            echo "Usted puede votar en las próxims elecciones 2028";  
        } 
        
        else {
            echo "Usted no es mayor de edad";
        }

    } 
    
    else {
        echo "No se ha ingresado nombre ni edad.";
    }
?>