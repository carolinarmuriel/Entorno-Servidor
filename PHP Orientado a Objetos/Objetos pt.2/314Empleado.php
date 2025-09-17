<?php
require_once '314Trabajador.php';
require_once 'JSerializable.php';

class Empleado extends Trabajador implements JSerializable {
    private $sueldo;

    public function __construct($nombre, $apellidos, $edad, $sueldo) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function calcularSueldo(): float {
        return $this->sueldo;
    }

    public function toHtml(): string {
        return "<p>Nombre: $this->nombre, Apellidos: $this->apellidos, Edad: $this->edad, Sueldo: $this->sueldo</p>";
    }

    public function toJSON(): string {
        //Internet y chatgpt
        $mapa = [];
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}
?>