<?php

if(isset($_GET['cadena_numeros'])){
    $cadena_numeros = $_GET['cadena_numeros'];

    $arreglo_numeros = explode(", ", $cadena_numeros);
    $cantidad_num = count($arreglo_numeros);
    $positivos = array();
    $negativos = array();
    $ceros = array();
    $pares = array();
    $impares = array();

    for($i=0 ; $i < $cantidad_num ; $i++){
        if($arreglo_numeros[$i] < 0){
            array_push($negativos, $arreglo_numeros[$i]);
        } else if($arreglo_numeros[$i] > 0){
            array_push($positivos, $arreglo_numeros[$i]);
        } else{
            array_push($ceros, $arreglo_numeros[$i]);
        }

        if($arreglo_numeros[$i] % 2 == 0){
            array_push($pares, $arreglo_numeros[$i]);
        } else{
            array_push($impares, $arreglo_numeros[$i]);
        }
    }

    echo"<h2>Numeros Pares</h2>";
    if((count($pares)) != 0){
        foreach($pares as $numero){
        echo"<li>$numero</li>";
    }
    } else{
        echo"<h2>La categoria está vacia</h2>";
    }
    echo"<p>Total de numeros pares:" . count($pares) . "</p>";
    echo"<hr>";



    echo"<h2>Numeros Impares</h2>";
    if((count($impares)) != 0){
        foreach($impares as $numero){
        echo"<li>$numero</li>";
    }
    } else{
        echo"<h2>La categoria está vacia</h2>";
    }
    echo"<p>Total de numeros impares:" . count($impares) . "</p>";
    echo"<hr>";



    echo"<h2>Numeros Positivos</h2>";
    if((count($positivos)) != 0){
        foreach($positivos as $numero){
        echo"<li>$numero</li>";
    }
    } else{
        echo"<h2>La categoria está vacia</h2>";
    }
    echo"<p>Total de numeros positivos:" . count($positivos) . "</p>";
    echo"<hr>";



    echo"<h2>Numeros Negativos</h2>";
    if((count($negativos)) != 0){
        foreach($negativos as $numero){
        echo"<li>$numero</li>";
    }
    } else{
        echo"<h2>La categoria está vacia</h2>";
    }
    echo"<p>Total de numeros negativos:" . count($negativos) . "</p>";
    echo"<hr>";



    echo"<h2>Ceros</h2>";
    if((count($ceros)) != 0){
        foreach($ceros as $numero){
        echo"<li>$numero</li>";
    }
    } else{
        echo"<h2>La categoria está vacia</h2>";
    }
    echo"<p>Total de ceros:" . count($ceros) . "</p>";
    echo"<hr>";
    




}

?>