<?php
//1.- Haz un programa que declare una cadena y la muestre en mayúsculas.
$cadena1 = "Soy una cadena";
echo("<p>La cadena original: $cadena1</p><br>");
echo("<p>La cadena en mayusculas: " . strtoupper($cadena1) . "</p><br>");

//2.- Haz un programa que declare un arreglo de edades y muestre la edad mayor.
$arreglo_edades = array(13, 45, 28, 98, 23, 56);
$edad_mayor = 0;
foreach($arreglo_edades as $edad){
    if($edad > $edad_mayor){
        $edad_mayor = $edad;
    }
}
echo("<p>La edad mayor es de $edad_mayor años.</p><br>");

//3.- Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
$arreglo_palabras = array("comer", "salsa", "cuatrimestre", "saltillo", "tardes", "pelota");
echo("<p>Lista de palabras mayores a 5 letras: <br>");
foreach($arreglo_palabras as $palabra){
    $longitud_palabra = strlen($palabra);
    if($longitud_palabra > 5){
        echo("- $palabra<br>");
    }
}

//4.- Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
$cadena_2 = "p a p a";
$contador_p = 0;
$contador_a = 0;
$arreglo_cadena2 = explode(" ", $cadena_2);
foreach($arreglo_cadena2 as $letra){
    if($letra == "p"){
        $contador_p += 1;
    }else{
        $contador_a += 1;
    }
}
echo("Cantidad de veces que aparecio 'p': $contador_p<br>");
echo("Cantidad de veces que aparecio 'a': $contador_a<br>");

//5.- Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.
$arreglo_numeros = array(12, 23, 67, 34, 8, 30, 65, 39);
$arreglo_pares = array();
$arreglo_impares = array();
foreach($arreglo_numeros as $numero){
    if($numero % 2 == 0){
    array_push($arreglo_pares, $numero);
    }else{
        array_push($arreglo_impares, $numero);
    }
}
echo("<br>");
echo("Numeros pares:<br>");
foreach($arreglo_pares as $numero){
    echo("<li> $numero </li>");
}
echo("<br>");
echo("Numeros impares:<br>");
foreach($arreglo_impares as $numero){
    echo("<li> $numero </li>");
}
echo("<br>");

//6.- Haz un programa que declare una cadena y cuente cuántas vocales tiene.
$cadena3 = "a y d u o d e c s h u e i a o";
$contador_vocal = 0;
$arreglo_cadena3 = explode(" ", $cadena3);
foreach($arreglo_cadena3 as $letra){
    if($letra == "a"){
    }else if($letra == "e"){
        $contador_vocal += 1;
    }else if($letra == "i"){
        $contador_vocal += 1;
    }else if($letra == "o"){
        $contador_vocal += 1;
    }else if($letra == "u"){
        $contador_vocal += 1;
    }
}
echo("Cantidad de vocales que tiene la cadena es de: $contador_vocal<br>");
echo("<br>");

//7.- Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
$productos = array(
    array(
        "nombre" => "crema",
        "cantidad" => 12
        ),
    array(
        "nombre" => "galleta", 
        "cantidad" => 4
        ),
    array(
        "nombre" => "sabrita", 
        "cantidad" => 1
        ),
    array(
        "nombre" => "paleta", 
        "cantidad" => 24
        )
);

echo("Productos bajos (menores a 5): <br>");

foreach($productos as $producto){
    if($producto["cantidad"] < 5){
        echo "Nombre: " . $producto["nombre"] . "<br>";
        echo "Cantidad restante: " . $producto["cantidad"] . "<br>";
        echo("<br>");
    }
}

echo("<br>");

//8.- Haz un programa que declare una frase y reemplace una palabra por otra.
$frase = "Solo soy una cadena de python";
$frase_modificada = str_replace("python", "PHP", $frase); //Esta funcion reemplaza todas las apariciones
echo("<p> Frase orginal: '$frase'</p>");
echo("<p> Frase modificada : '$frase_modificada'</p>");
echo("<br>");

//9.- Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
$alumnos = array(
    array(
        "nombre" => "javier",
        "cali mate" => 8,
        "cali espa" => 10,
        "cali ingl" => 7
        ),
    array(
        "nombre" => "susana", 
        "cali mate" => 10,
        "cali espa" => 10,
        "cali ingl" => 9
        ),
    array(
        "nombre" => "leon", 
        "cali mate" => 5,
        "cali espa" => 6,
        "cali ingl" => 10
        ),
    array(
        "nombre" => "carmen", 
        "cali mate" => 7,
        "cali espa" => 6,
        "cali ingl" => 9
        )
);

echo("Promedios de alumnos: <br>");

foreach($alumnos as $alumno){
    $promedio = ($alumno["cali mate"] + $alumno["cali espa"] + $alumno["cali ingl"]) / 3 ;
    echo "Nombre: " . $alumno["nombre"] . "<br>";
    echo "Promedio: " . $promedio . "<br>";
    echo("<br>");
}
echo("<br>");

//10.- Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.
$arreglo_nombres = array("jorge", "mario", "ana", "enrique", "jason", "oscar", "uriel", "isabel");
echo("Lista de nombres que inician con una vocal: <br>");
foreach($arreglo_nombres as $nombre){
    if($nombre[0] == "a"){
        echo("-$nombre<br>");
    }else if($nombre[0] == "e"){
        echo("-$nombre<br>");
    }else if($nombre[0] == "i"){
        echo("-$nombre<br>");
    }else if($nombre[0] == "o"){
        echo("-$nombre<br>");
    }else if($nombre[0] == "u"){
        echo("-$nombre<br>");
    }
}

?>