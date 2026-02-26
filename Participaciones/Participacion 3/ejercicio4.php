<?php

if(isset($_GET['fecha_nacimiento'])){
    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    $fecha_actual = date("d-m-y");
    $y_nac = date("y", strtotime($fecha_nacimiento));
    $y_act = date("y");

    $edad = $y_act - $y_nac;

    echo"<h2>Edad</h2>";
    echo"<p>Tu edad actaul aproimada es: $edad";
    echo"<br>";

}

?>