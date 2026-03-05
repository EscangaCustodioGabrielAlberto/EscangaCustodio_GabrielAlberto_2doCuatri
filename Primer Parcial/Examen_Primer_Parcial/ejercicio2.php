<?php

$frase = "esta es una cadena con vocales";
$cantidad_vocales = 0;
$longitud_frase = strlen($frase);
for ($i = 0; $i < $longitud_frase; $i++){
    switch ($frase[$i]){
        case "a";
        $cantidad_vocales++;
        break;

        case "e";
        $cantidad_vocales++;
        break;

        case "i";
        $cantidad_vocales++;
        break;

        case "o";
        $cantidad_vocales++;
        break;

        case "u";
        $cantidad_vocales++;
        break;

        default;
        break;
}
}
echo"La frase es: $frase<br>";
echo"La cantidad de vocales en la frase es de: $cantidad_vocales";

?>