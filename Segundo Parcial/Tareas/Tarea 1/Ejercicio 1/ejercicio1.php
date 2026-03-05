<?php

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];

    echo"<h4>El numero elegido fue: $numero</h4><br>";

    if($numero % 2 == 0){
        echo"<p>El numero es par</p><br>";
    } else{
        echo"<p>El numero es impar</p><br>";
    }

    if($numero > 0){
        echo"<p>El numero es positivo</p><br>";
    } else if($numero < 0){
        echo"<p>El numero es negativo</p><br>";
    } else{
        echo"<p>El numero es cero</p><br>";
    }
}

?>