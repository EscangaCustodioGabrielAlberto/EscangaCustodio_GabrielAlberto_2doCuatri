<?php

if(isset($_GET['frase'])){
    $frase = $_GET['frase'];
    $frase_min = strtolower($frase);
    $num_caracteres = strlen($frase);
    $vocales = 0;

    for($i = 0; $i <= $num_caracteres; $i ++){
        if(($frase_min[$i]) == "a"){
            $vocales ++;
        } else if(($frase_min[$i]) == "e"){
            $vocales ++;
        } else if(($frase_min[$i]) == "i"){
            $vocales ++;
        } else if(($frase_min[$i]) == "o"){
            $vocales ++;
        } else if(($frase_min[$i]) == "u"){
            $vocales ++;
        }
    }

    echo"<h2>Total de caracteres</h2>";
    echo"<p>frase/palabra: $frase";
    echo"<br>";
    echo"<p>Cantidad de caracteres: $num_caracteres";
    echo"<br>";
    echo"<p>Numero de vocales: $vocales";
    echo"<br>";

}

?>