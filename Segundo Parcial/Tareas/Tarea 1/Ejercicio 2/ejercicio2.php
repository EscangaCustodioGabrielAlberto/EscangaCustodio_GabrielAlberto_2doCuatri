<?php

if(isset($_GET['nombre_producto']) && isset($_GET['precio_sin_iva'])){
    $nombre_producto = $_GET['nombre_producto'];
    $precio_sin_iva = $_GET['precio_sin_iva'];
    $monto_iva = $precio_sin_iva * 0.16;
    $precio_total = $precio_sin_iva + $monto_iva;


    echo"<h3>Calculo de IVA del producto: $nombre_producto</h3>";
    echo"<p>Monto del IVA(16%): $monto_iva</p>";
    echo"<p>Precio total con IVA: $precio_total </p>";

}

?>