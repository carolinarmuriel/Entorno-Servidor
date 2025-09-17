<!-- El usuario es incorrecto. Informar si ambos están mal o solo la contraseña. Volver a mostrar el formulario de acceso.  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Incorrecto</title>
</head>
<body>
    <h1>Error de Acceso</h1>
    <p><?php echo htmlspecialchars($error); ?></p>
    <form action="247login.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <input type="submit" value="Inténtalo de nuevo">
    </form>
</body>
</html>