<?php

if(isset($_GET['nombre_producto']) && isset($_GET['precio_base']) && isset($_GET['descuento'])){
    $nombre_producto = $_GET['nombre_producto'];
    $precio_base = $_GET['precio_base'];
    $descuento = $_GET['descuento'];
    $monto_descuento = $precio_base * ($descuento / 100);
    $precio_total = $precio_base - $monto_descuento;


    echo"<h3>Calculo del descuento del producto: $nombre_producto</h3>";
    echo"<p>Monto de descuento($descuento%): $monto_descuento</p>";
    echo"<p>Precio total aplicando el descuento: $precio_total </p>";

    if($descuento < 10){
        echo"<p>Descuento bajo :c</p>";
    } else if(($descuento >= 10) && ($descuento < 30)){
        echo"<p>Descuento moderado :p </p>";
    } else{
        echo"<p>Descuento alto :D </p>";
    }

}

?>