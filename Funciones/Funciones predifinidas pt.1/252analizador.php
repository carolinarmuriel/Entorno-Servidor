<!-- 252analizador.php: A partir de una frase con palabras sólo separadas por espacios, devolver
Letras totales y cantidad de palabras
Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count -->
<?php
function analizarFrase($frase) {
    $palabras = explode(' ', $frase);
    $totalLetras = 0;
    $analisis = [];

    foreach ($palabras as $palabra) {
        $longitud = strlen($palabra);
        $totalLetras += $longitud;
        $analisis[] = ['palabra' => $palabra, 'longitud' => $longitud];
    }

    return [
        'totalLetras' => $totalLetras,
        'cantidadPalabras' => count($palabras),
        'analisis' => $analisis
    ];
}

$frase = "Ejercicio 252 de php";
$resultado = analizarFrase($frase);
echo "Frase: $frase<br>";
echo "Letras totales: " . $resultado['totalLetras'] . "<br>";
echo "Cantidad de palabras: " . $resultado['cantidadPalabras'] . "<br>";
foreach ($resultado['analisis'] as $palabra) {
    echo "Palabra: " . $palabra['palabra'] . " - Tamaño: " . $palabra['longitud'] . "<br>";
}
?>