<?php
//Ejemplo 3

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["primer_parcial"]) && isset($_POST["pp_porcentaje"]) && isset($_POST["segundo_parcial"]) && isset($_POST["sp_porcentaje"]) && isset($_POST["examen_final"]) && isset($_POST["ef_porcentaje"])){
        

        $primer_parcial = $_POST["primer_parcial"];
        $pp_porcentaje = $_POST["pp_porcentaje"];
        $segundo_parcial = $_POST["segundo_parcial"];
        $sp_porcentaje = $_POST["sp_porcentaje"];
        $examen_final = $_POST["examen_final"];
        $ef_porcentaje = $_POST["ef_porcentaje"];
        $verificar_porcentajes = $pp_porcentaje + $sp_porcentaje + $ef_porcentaje;

        //ponderaciones
        $pon_primer = $primer_parcial * ($pp_porcentaje / 100);
        $pon_segundo = $segundo_parcial * ($sp_porcentaje / 100);
        $pon_final = $examen_final * ($ef_porcentaje / 100);
        $prom_pon = $pon_primer + $pon_segundo + $pon_final;

        $arreglo_cali = [$primer_parcial, $segundo_parcial, $examen_final]; 
        sort($arreglo_cali);
        
        if((($primer_parcial < 0) || ($primer_parcial > 100)) || (($segundo_parcial < 0) || ($segundo_parcial > 100)) || (($examen_final < 0) || ($examen_final > 100))){
            echo"<h2>Error en el valor de las calificaciones, las calificaciones deben estar entre 0 y 100</h2>";
        } else if($verificar_porcentajes != 100) {
            echo"<h2>Error en el valor de los porcentajes, la suma de los porcentajes debe dar un 100%</h2>";
        } else {
            echo"<h2>Aportaciones Ponderadas</h2>";
            echo"<p><strong>Primer Parcial: </strong> $pon_primer </p>";
            echo"<p><strong>Segundo Parcial: </strong> $pon_segundo</p>";
            echo"<p><strong>Examen Final: </strong> $pon_final</p>";
            echo"<p><strong>Promedio Ponderado Final: </strong> $prom_pon</p>";
            echo"<hr>";
            echo"<h2>Evaluaciones</h2>";
            if($prom_pon >= 60){
                echo"<p><strong>Estado Del Alumno: </strong> Aprobado</p>";
            } else{
                echo"<p><strong>Estado Del Alumno: </strong> Reprobado</p>";
            }
            echo"<p><strong>Nota más alta: </strong>" . $arreglo_cali[2] . "</p>";
            echo"<p><strong>Nota más baja: </strong>" . $arreglo_cali[0] . "</p>";
            
        }
       
    } else{
        echo"<h2>Error en el envio del formulario</h2>";
    }
}else{
        echo"<h2>Error en el envio del formulario</h2>";
    }

?>