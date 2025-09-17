<!-- 250fraseImpares.php: Introduce y  Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares. -->
<?php
function fraseImpares($frase) {
    $resultado = '';
    for ($i = 1; $i < strlen($frase); $i += 2) {
        $resultado .= $frase[$i];
    }
    return $resultado;
}


$frase = "Esto es el ejercicio 250 de php";
echo "Frase original: $frase<br>";
echo "Frase con caracteres en posiciones impares: " . fraseImpares($frase);
?>



 <!-- isset si la variable esta creada, tiene un valor distinto a null -->