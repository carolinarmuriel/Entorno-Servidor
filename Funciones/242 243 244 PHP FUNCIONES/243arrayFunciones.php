<!-- 243arrayFunciones.php: haciendo uso de un array que almacene el nombre de las funciones del archivo anterior, a partir de dos números
recibidos por URL, recorre el array e invoca a las funciones de manera dinámica haciendo uso de funciones variable. -->
<?php
include '244euros.php';

// Define an array with the function names
$funciones = ['peseta2euros', 'euros2pesetas'];

// Retrieve the numbers from the URL parameters
$cantidad = isset($_GET['cantidad']) ? floatval($_GET['cantidad']) : 0;
$cotizacion = isset($_GET['cotizacion']) ? floatval($_GET['cotizacion']) : 166.386;

echo "Cantidad: $cantidad<br>";
echo "Cotización: $cotizacion<br><br>";

// Loop through the array and invoke each function dynamically
foreach ($funciones as $funcion) {
    if (function_exists($funcion)) {
        $resultado = $funcion($cantidad, $cotizacion);
        echo "Resultado de $funcion($cantidad, $cotizacion): $resultado<br>";
    } else {
        echo "La función $funcion no existe.<br>";
    }
}
?>