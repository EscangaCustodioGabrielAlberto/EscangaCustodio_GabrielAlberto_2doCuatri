<?php

$arreglo_numeros = array(18, 24, 193, 35, 103, 290, 75);
$contador_pares = 0;
$contador_impares = 0;

foreach ($arreglo_numeros as $numero){
    if ($numero % 2 == 0){
        $contador_pares++;
    } else if ($numero % 2 != 0){
        $contador_impares++;
    }
}

echo"Cantidad de numeros pares: $contador_pares<br>";
echo"Cantidad de numeros impares: $contador_impares";

?>