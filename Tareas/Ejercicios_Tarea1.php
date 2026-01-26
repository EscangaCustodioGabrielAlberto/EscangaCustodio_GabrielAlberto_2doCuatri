<?php

// 1.- Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un 
// buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.
$ventas_dia = 7450;
if($ventas_dia >= 5000){
    echo"Buen dia de ventas!<br>";
}else{
    echo"Mal dia de ventas :c<br>";
}


// 2.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y
//  muestre también el promedio semanal.
$gastos_semanales = array(120, 140, 90, 150, 210, 320, 340);
$total_semana = 0;
foreach($gastos_semanales as $dia){
    $total_semana += $dia;
}
$promedio_semanal = $total_semana/7;
echo"El total de gastos a la semana fue de: $total_semana, y el promedio semanal de gastos fue de: $promedio_semanal.<br>";

// 3.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y 
// muestre también el promedio semanal.
$gastos_semanales2 = array(1220, 1440, 430, 4750, 60, 120, 390);
$total_semana2 = 0;
foreach($gastos_semanales2 as $dia){
    $total_semana2 += $dia;
}
$promedio_semanal2 = $total_semana2/7;
echo"El total de gastos a la semana fue de: $total_semana2, y el promedio semanal de gastos fue de: $promedio_semanal2.<br>";

// 4.- Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado y muestre el nombre de cada cliente utilizando un 
// ciclo.
$clientes = array("Jose", "Ramon", "Estela", "Marina", "Marta");
echo"Lista de clientes:<br>";
foreach($clientes as $cliente){
    echo "-$cliente<br>";
}

// 5.- Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida 
// y calcule el total de productos vendidos.
$total_ventas = 0;
$productos = array(
    array(
        "producto" => "galleta",
        "ventas" => 9, 
        ),
    array(
        "producto" => "refresco",
        "ventas" => 23, 
        ),
    array(
        "producto" => "chicle",
        "ventas" => 38, 
        ),
    array(
        "producto" => "paleta", 
        "ventas" => 21,
        )
);
foreach($productos as $producto){
    echo "Producto: " . $producto["producto"] . "<br>";
    echo "Ventas del producto: " . $producto["ventas"] . "<br>";
    $total_ventas += $producto["ventas"];
}
echo"Total de ventas: $total_ventas.<br>";

// 6.- Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.
$total_precios = 0;
$productos_precios = array(34, 23, 98, 28, 67, 118);
foreach($productos_precios as $producto){
    $total_precios += $producto;
}
echo"El total de los precios de los productos es: $total_precios.<br>";

// 7.- Haz un programa que almacene los nombres de varios empleados en un arreglo y muestre cuántos empleados hay registrados.
$lista_empleados = array("Javier", "Vanesa", "Trina", "Joel", "Dafne");
$total_empleados = count ($lista_empleados);
echo "El total de empleados es de: $total_empleados <br>";


// 8.- Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.
$numeros = array(20, 23, 49, 50, 87, 47, 78, 90, 128, 328);
foreach($numeros as $numero){
    if($numero > 50){
        echo"-$numero<br>";
    }
}

// 9.- Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.
$dias_meta = 0;
$semana_venta = array(2890, 4098, 6780, 1200, 2789, 6789, 4389);
foreach($semana_venta as $dia){
    if($dia > 3000){
        $dias_meta += 1;
    }
}
echo"La cantidad de dias en la que las ventas fueron mayores a 3,000 fue de: $dias_meta<br>";

// 10.- Haz un programa que almacene el total de ventas de varios vendedores y determine cuál obtuvo la mayor venta.
$mayor_venta = "ninguno";
$venta_anterior = 0;
$vendedores = array(
    array(
        "vendedor" => "Samuel",
        "ventas" => 45, 
        ),
    array(
        "vendedor" => "Carlos",
        "ventas" => 89, 
        ),
    array(
        "vendedor" => "Gabriel",
        "ventas" => 56, 
        ),
    array(
        "vendedor" => "Santiago", 
        "ventas" => 89,
        )
);
foreach($vendedores as $vendedor){
    if($vendedor["ventas"] > $venta_anterior){
        $mayor_venta = $vendedor["vendedor"];
        $venta_anterior = $vendedor["ventas"];
} else if($vendedor["ventas"] == $venta_anterior){
    $mayor_venta = $mayor_venta . ", " . $vendedor["vendedor"];
} 
};
echo"El vendedor con mejor venta fue: $mayor_venta.<br>";

?>