<!-- 313Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona $p)

Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al método calcularSueldo(). -->
<?php

abstract class Trabajador {
    protected $nombre;
    protected $apellidos;
    protected $edad;
    protected $telefonos = [];

    // Constructor
    public function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    // Getters y Setters
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getTelefonos() {
        return $this->telefonos;
    }

    // Añadir teléfono
    public function anyadirTelefono($telefono) {
        $this->telefonos[] = $telefono;
    }

    // Listar teléfonos
    public function listarTelefonos() {
        return implode(', ', $this->telefonos);
    }

    // Vaciar teléfonos
    public function vaciarTelefonos() {
        $this->telefonos = [];
    }

    // Obtener nombre completo
    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    // Establecer nombre completo
    public function setNombreCompleto($nombreCompleto) {
        $partes = explode(' ', $nombreCompleto);
        $this->nombre = array_shift($partes);
        $this->apellidos = implode(' ', $partes);
    }

    // Método mágico __toString
    public function __toString(): string {
        return "Nombre: " . $this->getNombreCompleto() . "<br>" .
               "Edad: " . $this->getEdad() . "<br>" .
               "Teléfonos: " . $this->listarTelefonos() . "<br>";
    }

    // Método abstracto para calcular el sueldo
    abstract public function calcularSueldo(): float;

    // Método abstracto para mostrar datos en HTML
    abstract public function toHtml(): string;
}
?>