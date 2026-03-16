<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["nombre"]) && isset($_POST["pater"]) && isset($_POST["mater"]) && isset($_POST["nacimiento"])){
        $nombre1 = $_POST["nombre"];
        $pater1 = $_POST["pater"];
        $mater1 = $_POST["mater"];
        $nacimiento1 = $_POST["nacimiento"];

        //limpios
        $nombre = str_replace(" ", "", strtolower($nombre1));
        $pater = str_replace(" ", "", strtolower($pater1));
        $mater = str_replace(" ", "", strtolower($mater1));
        $nacimiento = str_replace(" ", "", strtolower($nacimiento1));
        
        echo"<h2>Sugerencias de nombre de usuario</h2>";
        echo"<p>Sugerencia 1: " . $nombre[0] . $pater . " </p>";
        echo"<p>Sugerencia 2: " . $nombre . $nacimiento[2] . $nacimiento[3] ." </p>";
        echo"<p>Sugerencia 3: " . $pater . $mater . $nombre[0] . " </p>";
        echo"<p>Sugerencia 4: " . $nombre[0] . $pater[0] . $mater[0] . $nacimiento . " </p>";
        echo"<p>Sugerencia 5: " . strrev($pater) . strlen($nombre . $pater . $mater) . " </p>";
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>