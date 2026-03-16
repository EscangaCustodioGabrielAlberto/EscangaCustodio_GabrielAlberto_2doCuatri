<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        
        if($numero < 1 || $numero > 10){
            echo "<p style='color:red;'>¡El numero debe estar entre 1 y 10!</p>";
        } else{

            echo"<h2>Piramide de asteriscos</h2>";

            for($i = 1;$i <= $numero;$i++){
                $espacio = str_repeat(" ", $numero - $i);
                $signos = str_repeat("*", (2 * $i) - 1);

                echo"<pre><p>" . $espacio . $signos . "</p></pre>";
            }

            $total_asteriscos = $numero ** 2;
            echo"<p>El total de asteriscos es de: $total_asteriscos</p>";
        }
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>