<?php

$calificaciones = array(
    "Espanol"=> 10,
    "Ingles"=> 9,
    "Matematicas"=> 6,
    "Biologia"=> 10,
    "Historia"=> 7
);

$suma_calificaciones = 0;
$cantidad_materias = 0;

foreach($calificaciones as $materia => $cali){
    $suma_calificaciones += $cali;
    $cantidad_materias ++;
}

$promedio = $suma_calificaciones / $cantidad_materias;

echo"El promedio de calificacion final fue de: $promedio";

?>