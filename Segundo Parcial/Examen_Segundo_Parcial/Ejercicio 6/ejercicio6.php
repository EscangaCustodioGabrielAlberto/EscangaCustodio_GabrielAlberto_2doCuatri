<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["productos"])){
        $cadena_productos = $_POST["productos"];
        $productos_sin_limpiar = explode(",", $cadena_productos);
        $productos = array(); 
        $num = 1;

        foreach($productos_sin_limpiar as $producto){
            array_push($productos, trim($producto));
        }
        
        echo"<h3>Lista de productos</h3>";
        sort($productos);
        foreach ($productos as $producto){
            echo"<p>$num- " . $producto . "</p>";
            $num++;
        }
            
        
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
} else{
    echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
}

?>