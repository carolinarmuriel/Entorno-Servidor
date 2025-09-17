<!-- 245imprimeTiquetCompra.php: Tras leer los datos del tiquet de compra, enumera en una tabla los productos, con su precio en euros y
pesetas, y finalmente, en una última fila, totalizar en ambas monedas. -->
<!-- 245imprimeTiquetCompra.php: Tras leer los datos del tiquet de compra, enumera en una tabla los productos, con su precio en euros y
pesetas, y finalmente, en una última fila, totalizar en ambas monedas. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imprimir Ticket de Compra</title>
</head>
<body>
    <h1>Ticket de Compra</h1>
    <?php
    // Retrieve the number of products from the GET parameter
    $cantidad = isset($_GET['cantidad']) ? intval($_GET['cantidad']) : 0;
    $totalEuros = 0;
    $totalPesetas = 0;

    if ($cantidad > 0) {
        echo '<table border="1">';
        echo '<tr><th>Nombre del Producto</th><th>Coste (Euros)</th><th>Coste (Pesetas)</th></tr>';

        // Loop through the number of products
        for ($i = 1; $i <= $cantidad; $i++) {
            $nombre = isset($_GET["nombre$i"]) ? htmlspecialchars($_GET["nombre$i"]) : "Producto $i";
            $costeEuros = isset($_GET["coste$i"]) ? floatval($_GET["coste$i"]) : 0.0;
            $costePesetas = $costeEuros * 166.386;

            $totalEuros += $costeEuros;
            $totalPesetas += $costePesetas;

            echo "<tr><td>$nombre</td><td>$costeEuros €</td><td>$costePesetas Pts</td></tr>";
        }

        // Display the total row
        echo "<tr><td><strong>Total</strong></td><td><strong>$totalEuros €</strong></td><td><strong>$totalPesetas Pts</strong></td></tr>";
        echo '</table>';
    } else {
        echo '<p>No se ha especificado una cantidad válida de productos.</p>';
    }
    
    ?>
       <form action 245preparaTiquetCompra.php>
                    <input type="submit" value="Volver">
                </form>
</body>
</html>