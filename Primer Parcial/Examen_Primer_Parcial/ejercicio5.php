<?php

$productos = array(
    array(
        "nombre"=> "paleta",
        "precio"=> 6,
        "cantidad"=> 3
    ),
    array(
        "nombre"=> "sabrita",
        "precio"=> 16,
        "cantidad"=> 2
    ),
    array(
        "nombre"=> "refresco",
        "precio"=> 34,
        "cantidad"=> 1
    ),
    array(
        "nombre"=> "galleta",
        "precio"=> 18,
        "cantidad"=> 4
    )
);

$total_pagar = 0;
foreach( $productos as $producto ){
    $total_producto = $producto["precio"] * $producto["cantidad"];
    $total_pagar += $total_producto;
}

echo"El total de los productos seria: $total_pagar";

?>