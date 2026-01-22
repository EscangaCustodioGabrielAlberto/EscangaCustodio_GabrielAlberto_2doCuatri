<?php 
    #Ejercicios 1: Craer un programa en PHP que calcule el area de un rectangulo (base * altura) y el perimetro
    #(2 * (base + altura)). Mostrar los resultados en pantalla.

    $base = 12;
    $altura = 4;

    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);

    echo "<p> <b> Ejercicio 1: </b> </p>";
    echo "<p> base: $base <br> altura: $altura <br> Area: $area <br> Perimetro: $perimetro <br> </p>";

    #Ejercicio 2: Crear un programa en PHP que realice las siguientes conversiones de monedas: de peso a dolar, de dolar a euro,
    #de euro a libra esterlina, y de peso a euro.

    $valor_peso = 15;
    $valor_dolar = 5;
    $valor_euro = 9;

    $peso_dolar = $valor_peso * 0.05;
    $dolar_euro = $valor_dolar * 0.91;
    $euro_libra = $valor_euro * 0.8682;
    $peso_euro = $valor_euro * 0.048;

    echo "<p> <b> Ejercicio 3: </b> <br> </p>";
    echo "<p> peso a dolar: $peso_dolar <br> dolar a euro: $dolar_euro <br> euro a libra: $euro_libra <br> Peso a euro: $peso_euro <br> </p>";

    #Ejercicio 3: calcula imc (peso (kg) / altura(m * m))

    $peso_persona = 80;
    $altura_persona = 1.85;
    $imc = ($peso_persona / ($altura_persona ** 2) );

    echo "<p> <b> Ejercicio 3: </b> </p>";
    echo "<p> peso: $peso_persona <br> altura: $altura_persona <br> IMC: $imc <br> </p>";

    #Ejercicio 4: De grados celcious a Farenheit y kelvin. Farenheit = (celcious * 9/5) +32 y kelvin = celcious + 275.15

    $cel = 23;
    $cel_fa = ($cel * (9/5));
    $cel_ke = $cel + 275.15;

    echo "<p> <b> Ejercicio 4: </b> </p>";
    echo "<p> celciuos: $cel <br> Farenheit: $cel_fa <br> Kelvin: $cel_ke <br> </p>";
    ?>