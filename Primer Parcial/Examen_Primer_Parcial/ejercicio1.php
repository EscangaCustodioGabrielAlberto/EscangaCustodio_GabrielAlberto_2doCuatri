<?php

$frase = "una frase cualquiera";
echo"La frase es: $frase <br>";

$frase_separada = explode(" ", $frase);
$palabra_larga = " ";
$ultima_longitud = 0;
foreach ($frase_separada as $palabra){
    $longitud = strlen($palabra);
    if ($longitud > $ultima_longitud){
        $palabra_larga = $palabra;
    }
}
echo"La palabra mas larga de la frase es: $palabra_larga<br>";

?>