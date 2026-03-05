<?php

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
    $suma = 0;
    $suma_par = 0;
    $suma_impar = 0;

    echo"<h2>El numero elegido fue: $numero</h2><br>";

    for($i=1 ; $i < $numero + 1 ; $i++){
        $suma = $suma + $i;

        if($i % 2 == 0){
            $suma_par = $suma_par + $i;
        } else{
            $suma_impar = $suma_impar + $i;
        }
    }

    echo"<h3>La suma de todos los numeros es: $suma</h3><br>";
    echo"<h3>La suma de todos los numeros pares es: $suma_par</h3><br>";
    echo"<h3>La suma de todos los numeros impares es: $suma_impar</h3><br>";


}

?>