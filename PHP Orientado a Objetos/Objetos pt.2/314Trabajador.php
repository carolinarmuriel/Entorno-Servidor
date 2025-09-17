<?php
abstract class Trabajador {
    protected $nombre;
    protected $apellidos;
    protected $edad;
    protected $sueldo;

    public function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    abstract public function calcularSueldo(): float;

    abstract public function toHtml(): string;
}
?>