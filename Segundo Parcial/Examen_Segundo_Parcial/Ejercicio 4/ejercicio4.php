<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["palabras"])){
        $cadena_palabras = $_POST["palabras"];
        $palabras_sin_limpiar = explode(",", $cadena_palabras);
        $palabras = array();
        $num = 1;
        $numa = 1;
        foreach($palabras_sin_limpiar as $palabra){
            array_push($palabras, trim($palabra));
        }
        
        echo"<p>La cantidad de palabras ingresadas es de: " . count($palabras) . "</p>";

        echo"<h3>Lista de productos</h3>";
        foreach ($palabras as $palabra){
            echo"<p>$num- " . $palabra . "</p>";
            $num++;
        }

        echo"<h3>Lista de productos en orden alfabetico</h3>";
        sort($palabras);
        foreach ($palabras as $palabra){
            echo"<p>$numa- " . $palabra . "</p>";
            $numa++;
        }
            
        
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
} else{
    echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
}

?>