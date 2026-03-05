<?php

if(isset($_GET['nombres_cadena'])){
    $nombres_cadena = $_GET['nombres_cadena'];

    $nombres_arreglo = explode(", ", $nombres_cadena);
    sort($nombres_arreglo);
    $arreglo_ordenado = $nombres_arreglo;
    $numero_nombres = count($arreglo_ordenado);
    $no_duplicados = array_unique($arreglo_ordenado);
    $numero_nombres_sin_repetir = count($no_duplicados);


    echo"<h3>Lista de nombres en orden:</h3>";
    foreach($arreglo_ordenado as $nombre){
        echo"<li>$nombre</li>";
    }
    echo"<p>Cantidad de nombres en la lista: $numero_nombres</p>";
    
    if($numero_nombres != $numero_nombres_sin_repetir){
        echo"Hay nombres repetidos.";
    } else{
        echo"No hay nombres repetidos.";
    }

}

?>