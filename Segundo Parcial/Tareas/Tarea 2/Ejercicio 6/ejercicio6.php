<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["monto_pesos"]) && isset($_POST["cambio_dolares"]) && isset($_POST["cambio_euros"])){
        $monto_pesos = $_POST["monto_pesos"];
        $cambio_dolares = $_POST["cambio_dolares"];
        $cambio_euros = $_POST["cambio_euros"];
        $peso_dolar = $monto_pesos / $cambio_dolares;
        $peso_euro = $monto_pesos / $cambio_euros;


        echo"<h2>Cambios</h2>";
        echo"<p><strong>Monto Original: </strong> 💲$monto_pesos </p>";
        echo"<p><strong>Conversion a Dolares: </strong> 💲" . round($peso_dolar, 2) . "</p>";
        echo"<p><strong>Conversion a Euros: </strong> €" . round($peso_euro, 2) . "</p>";
        echo"<p><strong>Cantidad de dolares que podrias obtener con 100 pesos mexicanos: </strong> 💲" . round((100/$cambio_dolares), 2) . " dolares.</p>";
        echo"<p><strong>Cantidad de euros que podrias obtener con 100 pesos mexicanos: </strong> €" . round((100/$cambio_euros), 2) . " euros.</p>";
        
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>