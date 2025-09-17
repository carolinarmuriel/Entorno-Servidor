
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Supermercado Severo</title>
	<style>
		body { font-family: Arial, sans-serif; background: #f8f8f8; margin: 0; }
		header { background: #2d7c2d; color: #fff; padding: 20px 0; text-align: center; }
		nav { background: #e0e0e0; padding: 10px 0; text-align: center; }
		nav a { color: #2d7c2d; text-decoration: none; margin: 0 15px; font-weight: bold; }
		nav a:hover { text-decoration: underline; }
	</style>
</head>
<body>
	<header>
		<h1>Supermercado Severo</h1>
	</header>
	<nav>
		<a href="#">Inicio</a>
		<a href="#">Productos</a>
		<a href="#">Ofertas</a>
		<a href="#">Contacto</a>
	</nav>
	<!-- El contenido principal irá aquí -->

	<?php
	// Ejemplo de vinculación de archivos PHP
	include_once 'encabezado.php'; // Encabezado común
	include_once 'footer.php';     // Pie de página común
	// Puedes vincular otros archivos PHP según lo necesites
	// include_once '../245 Funciones/245imprimeTicketCompra.php';
	// require_once '../246preparaCompra.php';
	?>

	<!-- Puedes añadir más secciones según lo necesites -->
</body>
</html>
