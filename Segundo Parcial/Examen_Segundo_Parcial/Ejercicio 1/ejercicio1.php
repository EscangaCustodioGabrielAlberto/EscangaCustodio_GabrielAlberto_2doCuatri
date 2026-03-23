<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operacion"])){
    $num1 = $_GET["num1"];  
    $num2 = $_GET["num2"];  
    $operacion = $_GET["operacion"];  
        
    if(trim($num1) != "" && trim($num2) != ""){
        if($operacion == "suma"){
            echo"<p>$num1 + $num2 = " . $num1 + $num2 . "</p>";
        } else if($operacion == "resta"){
            echo"<p>$num1 - $num2 = " . $num1 - $num2 . "</p>";
        } else if($operacion == "multi"){
            echo"<p>$num1 X $num2 = " . $num1 * $num2 . "</p>";
        } else if($operacion == "divi"){

            if($num2 != 0){
                echo"<p>$num1 / $num2 = " . $num1 / $num2 . "</p>";
            } else{
                echo "<p style='color:red;'>¡ERROR: No es posible dividir entre 0!</p>";
            }
            
        } 
    }

    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
} else{
    echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
}

?>