<?php

//Ejercicio 1:
$cadena1 = "Soy una cadena en php";
$arreglo_cadena1 = explode(" ", $cadena1);
$arreglo_invertido = array_reverse($arreglo_cadena1);
$cadena_invertida = implode(" ", $arreglo_invertido);
echo("<p> Cadena original: $cadena1 </p>");
echo("<p>La cadena con las palabras en orden inverso: " . $cadena_invertida . "</p><br>");

//Ejercicio 2:
$cadena2 = "3, 5, 98, 34, 27, 67";
$suma = 0;
$arreglo_cadena2 = explode(", ", $cadena2);
foreach ($arreglo_cadena2 as $numero){
    $suma += $numero;
}
echo("<p> La suma de los numeros de la cadenas es: $suma </p><br>");

//Ejercicio 3:
$cadena3 = "Tengo muchas veces la palabra muchas la verdad muchas muchas muchas";
$numero_de_veces = substr_count( $cadena3,"muchas");
echo("<p>La cantidad de vesces que la palabra 'muchas' aparece en la frase '$cadena3' es de: $numero_de_veces </p><br>");

?>