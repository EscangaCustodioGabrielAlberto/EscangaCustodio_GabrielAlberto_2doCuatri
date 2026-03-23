<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["anio"])){
    $anio = $_GET["anio"];  
        
    if($anio > 0 && trim($anio) != ""){

        if((($anio % 4 == 0) && ($anio % 100 != 0)) || (($anio % 100 == 0) && ($anio % 400 == 0))){
            echo "<p style='color:green;'>¡El año es bisiesto!</p>";
        } else{
            echo "<p style='color:red;'>¡El año no es bisiesto!</p>";
        }
        
    } else{
        echo "<p style='color:red;'>¡El año debe ser mayor a cero y el campo no debe estar vacio!</p>";
    }

    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
} else{
    echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
}

?>