<!-- 247login.php: el formulario de entrada, que solicita el usuario y contraseña. -->
<html>
<head>
    <title>247login.php</title>
    <style>
        h1{
            text-align: center;
        }
        form{
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background: #f9f9f9;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        input{
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body> 
    <h1>Bienvenido</h1>
    <form action="247compruebaLogin.php" method="POST">   <!-- formulario de entrada que solicita el usuario y la contraseña -->
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <input type="submit" value="Acceder">
    </form>
</body>
</html> 