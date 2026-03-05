<?php

if(isset($_GET['frase']) && isset($_GET['palabra'])){
    $frase = $_GET['frase'];
    $palabra = $_GET['palabra'];

    $veces_palabra = substr_count(strtolower($frase), strtolower($palabra));

    // c) Resaltar en negritas
    $frase_negritas = str_ireplace($palabra,"<strong>$palabra</strong>",$frase);

    echo"<h2>Frase: $frase</h2>";
    echo"<h2>Palabra: $palabra</h2>";

    if(stripos($frase, $palabra) !== false){
        echo"<p>La palabra se encuentra dentro de la frase.</p><br>";
        echo"<p>La cantidad de veces que aparece la palabra en la frase: $veces_palabra</p><br>";
        echo"<p>Frase con la palabra '$palabra' en negritas: $frase_negritas</p>";
    } else{
        echo"<p>La palabra NO se encuentra dentro de la frase.</p><br>";
    }
    
}

?>