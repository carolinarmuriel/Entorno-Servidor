<!-- 252analizadorWC.php: Investiga que hace la función str_word_count, y vuelve a hacer el ejercicio.-->
<?php
function analizarFraseWC($frase) {
    $palabras = str_word_count($frase, 1);
    $totalLetras = strlen(str_replace(' ', '', $frase));
    $analisis = [];

    foreach ($palabras as $palabra) {
        $longitud = strlen($palabra);
        $analisis[] = ['palabra' => $palabra, 'longitud' => $longitud];
    }

    return [
        'totalLetras' => $totalLetras,
        'cantidadPalabras' => count($palabras),
        'analisis' => $analisis
    ];
}


$frase = "Esta es una prueba";
$resultado = analizarFraseWC($frase);
echo "Frase: $frase<br>";
echo "Letras totales: " . $resultado['totalLetras'] . "<br>";
echo "Cantidad de palabras: " . $resultado['cantidadPalabras'] . "<br>";
foreach ($resultado['analisis'] as $palabra) {
    echo "Palabra: " . $palabra['palabra'] . " - Tamaño: " . $palabra['longitud'] . "<br>";
}
?>