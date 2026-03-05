<?php

$palabra = "ana";
$longitud_palabra = strlen( $palabra );
$palabra_palindromo = array();
$control= 0;
$palindromo = true;

for ( $i = $longitud_palabra; $i < 0; $i-- ){
        if($palabra[$i] == $control){
            $palindromo = true;
        }
        $control ++;
}

?>