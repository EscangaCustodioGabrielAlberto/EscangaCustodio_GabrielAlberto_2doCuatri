<?php

if(isset($_GET['temp_cel'])){
    $celcius = $_GET['temp_cel'];

    $temp_fa = ($celcius * 1.8) + 32;
    $temp_ke = $celcius * 1.8 + 273.15;

    echo"<h2>Conversion</h2>";
    echo"<p>Grados en Celcius: $celcius";
    echo"<br>";
    echo"<p>Grados en Fahrenheit: $temp_fa";
    echo"<br>";
    echo"<p>Grados en Kelvin: $temp_ke";
    echo"<br>";

}

?>