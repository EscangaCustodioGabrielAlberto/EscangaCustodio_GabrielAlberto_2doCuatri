<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["base"]) && isset($_POST["exponente"])){
        $base = $_POST["base"];
        $exponente = $_POST["exponente"];
        
        $suma_potencias = 0;

        echo"<h2>Tabla de potencias</h2>";

        for($i = 1;$i <= $exponente;$i++){
            $potencia = $base ** $i;
            $suma_potencias = $suma_potencias + $potencia;

            if($potencia % 2 == 0){
                echo"<p>$base^$i = $potencia - par</p>";
            } else{
                echo"<p>$base^$i = $potencia - impar</p>";
            }
        }

        echo"<p>La suma de todas las potencias es: $suma_potencias</p>";
        
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>