<!-- 255codificar.php: Utilizando las funciones para trabajar con caracteres, a partir de una cadena y un desplazamiento:
Si el desplazamiento es 1, sustituye la A por B, la B por C, etc.
El desplazamiento no puede ser negativo
Si se sale del abecedario, debe volver a empezar
Hay que respetar los espacios, puntos y comas. -->
<?php
function codificar($cadena, $desplazamiento) {
    if ($desplazamiento < 0) {
        return "El desplazamiento no puede ser negativo.";
    }

    $resultado = '';
    $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];

        if (ctype_alpha($caracter)) {
            $codigoAscii = ord($caracter);
            $esMayuscula = ctype_upper($caracter);
            $base = $esMayuscula ? ord('A') : ord('a');
            $nuevoCodigoAscii = $base + (($codigoAscii - $base + $desplazamiento) % 26);
            $resultado .= chr($nuevoCodigoAscii);
        } else {
            $resultado .= $caracter;
        }
    }

    return $resultado;
}

// Test the function
$cadena = "Este es el ejercicio 255";
$desplazamiento = 1;
echo "Cadena original: $cadena<br>";
echo "Cadena codificada con desplazamiento $desplazamiento: " . codificar($cadena, $desplazamiento);
?>