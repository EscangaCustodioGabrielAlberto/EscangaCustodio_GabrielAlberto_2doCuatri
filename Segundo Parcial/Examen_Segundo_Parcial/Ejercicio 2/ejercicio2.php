<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["numero"])){
    $numero = $_POST["numero"];  
        
    if((trim($numero) != "")){

        if($numero % 2 == 0){
            echo"<p>El numero $numero es par.</p>";
        } else{
            echo"<p>El numero $numero es impar.</p>";
        }
        
    } else{
        echo "<p style='color:red;'>¡El campo no debe estar vacio y debe ser un numero entero!</p>";
    }

    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
} else{
    echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
}

?>