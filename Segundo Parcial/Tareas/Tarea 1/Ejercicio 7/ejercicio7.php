<?php

if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num_mayor = 0;
    $num_menor = 0;
    $num_medio = 0;
    $arreglo_num = array();
    array_push($arreglo_num, $num1, $num2, $num3);
    sort($arreglo_num);


    echo"<h2>Numeros ordenados</h2><br>";
    echo"<br>";
    echo"<h3>Numero menor: " . $arreglo_num[0] . "</h3><br>";
    echo"<h3>Numero medio: " . $arreglo_num[1] . "</h3><br>";
    echo"<h3>Numero mayor: " . $arreglo_num[2] . "</h3><br>";

    if((count($arreglo_num)) != (count(array_unique($arreglo_num)))){
        echo"<h4>Hay numeros repetidos</h4><br>";
    }
}

?>