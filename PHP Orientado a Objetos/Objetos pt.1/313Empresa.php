 <!-- Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade para (for) el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona $p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al método calcularSueldo().-->
<?php
require_once '313Empleado.php';
require_once '313Gerente.php';

class Empresa {
    private $nombre;
    private $direccion;
    private $trabajadores = [];

    // Constructor
    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    // Añadir trabajador
    public function anyadirTrabajador(Trabajador $t) {
        $this->trabajadores[] = $t;
    }

    // Listar trabajadores en HTML
    public function listarTrabajadoresHtml(): string {
        $html = "<h2>Trabajadores de " . $this->nombre . "</h2>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= $trabajador->toHtml();
        }
        return $html;
    }

    // Obtener el coste total en nóminas
    public function getCosteNominas(): float {
        $costeTotal = 0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }
}

// Ejemplo de uso
$empresa = new Empresa("Tech Solutions", "123 Calle Principal");
$empleado1 = new Empleado("Carolina", "Muriel", 30, 160, 20);
$gerente1 = new Gerente("José", "Rodríguez", 45, 5000);

$empresa->anyadirTrabajador($empleado1);
$empresa->anyadirTrabajador($gerente1);

echo $empresa->listarTrabajadoresHtml();
echo "<p>Coste total en nóminas: " . $empresa->getCosteNominas() . "€</p>";
?>