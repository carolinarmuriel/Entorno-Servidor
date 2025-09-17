<!-- 245preparaTiquetCompra.php: A partir de una cantidad de productos, leer el nombre y coste de la cantidad de productos indicados
(similar al ejercicio 237, pero esta vez no hace falta crear el formulario con la cantidad, se recibe mediante un parámetro GET via URL).
 -->
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ticket de Compra</title>
</head>
<body>
    <h1>Ticket de Compra</h1>
    <form method="GET" action="">
        <label for="cantidad">Número de productos:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required> <!--Se pide la cantidad de productos -->
        <button type="submit">Enviar</button>
    </form>
    <?php
    // Recuperamos la cantidad de productos del parámetro GET y validarla
    $cantidad = isset($_GET['cantidad']) ? filter_var($_GET['cantidad'], FILTER_VALIDATE_INT) : 0;

    if ($cantidad && $cantidad > 0) { // Si la cantidad es válida
        echo '<form method="GET" action="245imprimeTiquetCompra.php">';
        echo '<input type="hidden" name="cantidad" value="' . $cantidad . '">';
        echo '<table border="1">';
        echo '<tr><th>Nombre del Producto</th><th>Coste</th></tr>';

        // Bucle a través de la cantidad de productos
        for ($i = 1; $i <= $cantidad; $i++) {
            $nombre = isset($_GET["nombre$i"]) ? htmlspecialchars($_GET["nombre$i"]) : "";
            $coste = isset($_GET["coste$i"]) ? filter_var($_GET["coste$i"], FILTER_VALIDATE_FLOAT) : "";

            echo "<tr>";
            echo "<td><input type='text' name='nombre$i' value='$nombre' required></td>";
            echo "<td><input type='number' step='0.01' name='coste$i' value='$coste' required></td>";
            echo "</tr>";
        }
        echo '</table>';
        echo '<button type="submit">Generar Ticket</button>'; // Botón para enviar los datos
        echo '</form>';
    } elseif (isset($_GET['cantidad'])) { // Si se ha especificado una cantidad pero no es válida
        echo '<p>No se ha especificado una cantidad válida de productos.</p>';
    }
    ?>
</body>
</html>