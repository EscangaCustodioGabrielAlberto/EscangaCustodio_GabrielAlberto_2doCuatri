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

$frase = "Esta es una cadena con vocales";
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

echo"La frase es: $frase<br>";
echo"La cantidad de vocales en la frase es de: $cantidad_vocales";

?>