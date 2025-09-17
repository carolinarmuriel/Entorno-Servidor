<!-- 247compruebaLogin.php: recibe los datos y comprueba si son correctos (los usuarios se guardan en un array asociativo) pasando el control mediante el uso de include a -->
<?php
// Definir un array asociativo con nombres de usuario y contraseñas
$usuarios = [
    'carol' => '1234',
];

// Recuperar el nombre de usuario y la contraseña enviados
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

if (array_key_exists($usuario, $usuarios)) {
    if ($usuarios[$usuario] === $contrasena) {
        include '247ok.php';
    } else {
        $error = 'Contraseña incorrecta.';
        include '247ko.php';
    }
} else {
    $error = 'Usuario incorrecto.';
    include '247ko.php';
}
?>
