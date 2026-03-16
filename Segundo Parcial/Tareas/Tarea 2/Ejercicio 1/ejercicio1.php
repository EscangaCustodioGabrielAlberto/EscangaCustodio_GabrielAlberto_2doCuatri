<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["frase"])){
        $frase = $_POST["frase"];
        $frase_palindromo = str_replace(" ", "", strtolower($frase));
        $frase_palindromo_reversa = strrev($frase_palindromo);

        if($frase_palindromo == $frase_palindromo_reversa){
            echo"<p>La frase/palabra: $frase.</p>";
            echo"<p>Es un palindromo.</p>";
        } else{
            echo"<p>La frase/palabra: $frase.</p>";
            echo"<p>NO es un palindromo.</p>";
        }
        
    }else{
        echo "<p style='color:red;'>¡El formulario no se mandó correctamente!</p>";
    }
}

?>