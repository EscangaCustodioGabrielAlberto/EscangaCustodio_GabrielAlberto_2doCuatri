<?php

if(isset($_GET['nombre']) && isset($_GET['salario_hora']) && isset($_GET['horas_trabajadas'])){
    $nombre = $_GET['nombre'];
    $salario_hora = $_GET['salario_hora'];
    $horas_trabajadas = $_GET['horas_trabajadas'];

    $salario_base =0;
    $horas_extras =0;

    if($horas_trabajadas <= 40){
        $salario_base = $horas_trabajadas * $salario_hora;
    }else{
        $salario_base = 40 * $salario_hora;
        $horas_extras = ($horas_trabajadas - 40) * ($salario_hora * 2);
    }

    $total_bruto = $salario_base + $horas_extras;
    $deducciones = $total_bruto * 0.15;
    $salario_neto = $total_bruto - $deducciones;

    echo"<h2>Hola $nombre, Aqui está tu salario desglozado:</h2>";
    echo"<h3>Tu salario base es de: 💲$salario_base</h3>";
    echo"<h3>Tu salario por horas extra es de: 💲$horas_extras</h3>";
    echo"<h3>Tu total bruto es de: 💲$total_bruto</h3>";
    echo"<h3>Tus deducciones son de: 💲$deducciones</h3>";
    echo"<h3>Tu salario neto es de: 💲$salario_neto</h3>";


}

?>