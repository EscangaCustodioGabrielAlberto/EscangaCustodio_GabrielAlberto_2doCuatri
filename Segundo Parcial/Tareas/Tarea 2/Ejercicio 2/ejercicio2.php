<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["parrafo"])){
        $parrafo = $_POST["parrafo"];
        $parrafo_sin_puntos = str_replace(".", "", strtolower($parrafo));
        $parrafo_sin_comas = str_replace(",", "", strtolower($parrafo_sin_puntos));
        $arreglo_palabras = explode(" ", $parrafo_sin_comas);
        $arreglo_oraciones = explode(".", $parrafo);

        $mayor = "";
        $ultimo_mayor = 0;
        $suma_caracter = 0;
        
        foreach($arreglo_palabras as $palabra){

            if(strlen($palabra) > $ultimo_mayor){
                $mayor = $palabra;
            }

            $suma_caracter = $suma_caracter + strlen($palabra);
        }

        $promedio_caracter = $suma_caracter / count($arreglo_palabras);

        echo"<p>El numero total de palabras en el parrafo es de: " . count($arreglo_palabras) . "</p>";
        echo"<p>El numero total de oraciones en el parrafo es de: " . count($arreglo_oraciones) . "</p>";
        echo"<p>La palabra más larga en el parrafo es : " . $mayor . "</p>";
        echo"<p>El promedio de caracteres por palabra en el parrafo es : " . round($promedio_caracter, 2) . "</p>";


        
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>