<?php

if(isset($_GET['monto']) && isset($_GET['propina'])){
    $monto = $_GET['monto'];
    $propina = $_GET['propina'];
    $monto_propina = ($propina / 100) * $monto;
    $monto_total = $monto_propina + $monto;


    echo"<h2>Total de cuenta</h2>";
    echo"<p>Subtotal de cuenta: $monto";
    echo"<br>";
    echo"<p>Monto de propina ($propina%): $monto_propina";
    echo"<br>";
    echo"<p>Monto total (Propina incluida): $monto_total";
    echo"<br>";

}

?>