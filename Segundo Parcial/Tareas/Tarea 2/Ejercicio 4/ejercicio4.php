<?php
//Ejemplo 4

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["nombre"]) && isset($_POST["sexo"]) && isset($_POST["peso"]) && isset($_POST["altura"]) && isset($_POST["edad"]) && isset($_POST["actividad"])){
        

        $nombre = $_POST["nombre"];
        $sexo = $_POST["sexo"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $edad = $_POST["edad"];
        $actividad = (float)$_POST["actividad"];
        $tmb = 0;

        //Calcular TMB
        if($sexo == "hombre"){
            $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
        } else{
            $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
        }
        
        //Calcular calorias diarias recomendadas
        $calo_reco = $tmb * $actividad;

        //Mostrar datos
        echo"<h2>Datos del Usuario</h2>";
        echo"<p><strong>Nombre: </strong> $nombre </p>";
        echo"<p><strong>Sexo: </strong> $sexo </p>";
        echo"<p><strong>Altura: </strong> $altura cm</p>";
        echo"<p><strong>Peso: </strong> $peso Kg</p>";
        echo"<p><strong>Edad: </strong> $edad Años</p>";
        echo"<hr>";
        echo"<h2>TMB</h2>";
        echo"<p><strong>TMB del usuario: </strong> $tmb </p>";
        echo"<p><strong>Calorias diarias recomendadas: </strong> " . round($calo_reco, 2) . "</p>";

    } else{
        echo"<h2>Error en el envio del formulario</h2>";
    }
}else{
        echo"<h2>Error en el envio del formulario</h2>";
    }

?>