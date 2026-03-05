<?php

$numeros_revueltos = array(13, 2, 4, 3, 8, 18, 1, 7);
$numeros_ordenados = array();
$numero_anterior_mayor = 0;
$longitud = 0;
$control = 0;

foreach($numeros_revueltos as $numero){
    if($numero > $numero_anterior_mayor){
        $numero_anterior_mayor = $numero;
        $longitud ++;
    }
}

while($numero_anterior_mayor != $control){
    for ($i = 0; $i != $numero_anterior_mayor ; $i++){
    $control = $i;
    if ($numeros_revueltos[$i] == $i){
        array_push($numeros_ordenados, $numeros_revueltos[$i] );
        }
}
}


echo"Lista de numeros ordenados: <br>";
foreach($numeros_ordenados as $numero){
    echo "-$numero<br>";
}

?>