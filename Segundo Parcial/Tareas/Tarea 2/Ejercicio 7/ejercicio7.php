<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["gaso_cargado"]) && isset($_POST["precio_litro"]) && isset($_POST["kilo_recorrido"]) && isset($_POST["presu_adi"])){
        $gaso_cargado = $_POST["gaso_cargado"];
        $precio_litro = $_POST["precio_litro"];
        $kilo_recorrido = $_POST["kilo_recorrido"];
        $presu_adi = $_POST["presu_adi"];

        $costo_gaso_actual = $gaso_cargado * $precio_litro;
        $kilo_litro = $kilo_recorrido / $gaso_cargado;
        $costo_kilo = $costo_gaso_actual / $kilo_recorrido;
        $litros_extra = $presu_adi / $precio_litro;
        $kilo_extra = $litros_extra * $kilo_litro;

        echo"<h2>Gastos</h2>";
        echo"<p><strong>Costo total de la carga actual: </strong> 💲$costo_gaso_actual </p>";
        echo"<p><strong>Rendimiento del vehiculo Km/Litro: </strong> " . round($kilo_litro, 2) . " kilometros por litro.</p>";
        echo"<p><strong>Costo por kilometro recorrido: </strong> 💲" . round($costo_kilo, 2) . "</p>";
        echo"<p><strong>Cuantos litros adicionales se pueden compar: </strong> $litros_extra litros.</p>";
        echo"<p><strong>Cuantos kilometros adicionales se pueden recorrer: </strong> $kilo_extra kilometros.</p>";
        
        
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>