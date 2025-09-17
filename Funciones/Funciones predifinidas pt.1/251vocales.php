<!-- 251vocales.php: A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas. -->
<?php
function contarVocales($frase) {
    $vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
    $total = 0;
    $frase = strtolower($frase);

    for ($i = 0; $i < strlen($frase); $i++) {
        if (array_key_exists($frase[$i], $vocales)) {
            $vocales[$frase[$i]]++;
            $total++;
        }
    }

    $vocales['total'] = $total;
    return $vocales;
}


$frase = "Este es el ejercicio 251";
$vocales = contarVocales($frase);
echo "Frase: $frase<br>";
foreach ($vocales as $vocal => $cantidad) {
    echo "Vocal $vocal: $cantidad<br>";
}
?>