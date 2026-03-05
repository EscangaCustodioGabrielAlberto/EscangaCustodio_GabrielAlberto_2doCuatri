<?php

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    $arreglo_nombre = explode(" ", $nombre);
    $siglas = "";

    foreach($arreglo_nombre as $nombre){
        $siglas = $siglas . $nombre[0] . ".";
    }

    echo"<h3>Hola $nombre, las siglas de tu nombre son:</h3><br>";
    echo"<br>";
    echo"<h1>$siglas</h1><br>";

}

?>