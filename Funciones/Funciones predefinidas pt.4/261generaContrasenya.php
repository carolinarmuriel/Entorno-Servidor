<!-- 261generaContrasenya.php: Crea una función que a partir de un tamaño, genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria -->
<?php
include '260generador.php';

function generaContrasenya($tamano) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $max = strlen($caracteres) - 1;
    $contrasenya = '';

    for ($i = 0; $i < $tamano; $i++) {
        $contrasenya .= $caracteres[mt_rand(0, $max)];
    }

    return $contrasenya;
}

// Ejemplo de uso
echo generaContrasenya(10);
?>