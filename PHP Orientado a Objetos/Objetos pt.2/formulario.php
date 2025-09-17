<?php
require_once '314Empresa.php';
require_once '314Empleado.php';
require_once '314Gerente.php';

// Crear una instancia de la empresa
$empresa = new Empresa("Nombre de la Empresa", "Dirección de la Empresa");

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$tipo = $_POST['tipo'];
$sueldo = $_POST['sueldo'];

// Crear el trabajador correspondiente
if ($tipo == 'empleado') {
    $trabajador = new Empleado($nombre, $apellidos, $edad, $sueldo);
} elseif ($tipo == 'gerente') {
    $trabajador = new Gerente($nombre, $apellidos, $edad, $sueldo);
}

// Añadir el trabajador a la empresa
$empresa->anyadirTrabajador($trabajador);

// Mostrar la lista de trabajadores
echo $empresa->listarTrabajadoresHtml();
?>