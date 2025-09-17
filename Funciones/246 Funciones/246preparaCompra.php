<!-- A partir de los archivos creados en el ejercicio anterior, crea una plantilla mediante includes:
246preparaCompra.php: similar a 245preparaTiquetCompra.php, pero separando el encabezado ( Supermercado Severo en h1) 
y el pie (Tu supermercado de confianza) en ficheros externos y referenciando a ellos mediante include.-->
<?php include 'encabezado.php'; ?>

<h2>Preparar Ticket de Compra</h2>
<form action="246listaCompra.php" method="GET">
    <label for="cantidad">Cantidad de productos:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required>
    <input type="submit" value="Enviar">
</form>

<?php include 'footer.php'; ?>