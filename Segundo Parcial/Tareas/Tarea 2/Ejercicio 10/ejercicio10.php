<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["tarjeta"])){
        $tarjeta = $_POST["tarjeta"];
        
        if((strlen($tarjeta) == 16) && (ctype_digit($tarjeta))){
            $arreglo_separar = str_split($tarjeta, 4);
            $tarjeta_espacios = implode(" ", $arreglo_separar);
            $tarjeta_censura = "**** **** **** " . $tarjeta[12] . $tarjeta[13] . $tarjeta[14] . $tarjeta[15];

            echo"<h2>Tarjeta</h2>";
            echo"<p>Tarjeta: $tarjeta_espacios</p>";
            echo"<p>Tarjeta Censurada: $tarjeta_censura</p>";

        } else{
            echo "<p style='color:red;'>¡Error al introducir los digitos, debe tener 16 digitos!</p>";
        }
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>