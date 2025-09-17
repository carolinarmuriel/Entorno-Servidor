<!--260generador.php: Crea una función que permite generar una letra aleatoria, mayúscula o minúscula. -->
<?php
function letraAleatoria() {
    $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $max = strlen($letras) - 1;
    $letraAleatoria = $letras[mt_rand(0, $max)];
    return $letraAleatoria;
}
?>