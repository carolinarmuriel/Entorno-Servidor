<!-- 256filtrado.html: Crea un programa que permita al usuario leer un conjunto de números separados por espacios.
256filtrado.php: El programa filtrará los números leídos para volver a mostrar únicamente los números pares e indicará la cantidad existente.
Dame números: 1 4 7 9 23 10 8
Los 3 números pares son: 4 10 8

257investiga.php: Investiga las siguientes funciones de cadena (explica para qué sirven mediante comentarios, y programa un  pequeño ejemplo de cada una de ellas): ucwords, strrev, str_repeat y md5. -->
<?php
function filtrarNumerosPares($numeros) {
    $numerosArray = explode(' ', $numeros);
    $numerosPares = array_filter($numerosArray, function($numero) {
        return $numero % 2 == 0;
    });
    return $numerosPares;
}

// Recibimos los números y los filtramos
$numeros = isset($_POST['numeros']) ? $_POST['numeros'] : '';
$numerosPares = filtrarNumerosPares($numeros);
$cantidadPares = count($numerosPares);

echo "Los $cantidadPares números pares son: " . implode(' ', $numerosPares);
?>