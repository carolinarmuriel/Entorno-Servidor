<!-- 246listaCompra.php: recibe los datos del anterior, y reutiliza parte de 245imprimeTiquetCompra.php 
cambiando la tabla por una lista desordenada de los productos junto a su precio. -->
<?php include 'encabezado.php'; ?>

<h2>Lista de Compra</h2>
<?php
// Recuperar el número de productos del parámetro GET
$cantidad = isset($_GET['cantidad']) ? intval($_GET['cantidad']) : 0;

if ($cantidad > 0) {
    echo '<ul>';

    // Bucle a través del número de productos
    for ($i = 1; $i <= $cantidad; $i++) {
        $nombre = isset($_GET["nombre$i"]) ? htmlspecialchars($_GET["nombre$i"]) : "Producto $i";
        $costeEuros = isset($_GET["coste$i"]) ? floatval($_GET["coste$i"]) : 0.0;

        echo "<li>$nombre - $costeEuros €</li>";
    }

    echo '</ul>';
} else {
    echo '<p>No se ha especificado una cantidad válida de productos.</p>';
}
?>

<form action="246preparaCompra.php">
    <input type="submit" value="Volver">
</form>

<?php include 'footer.php'; ?>