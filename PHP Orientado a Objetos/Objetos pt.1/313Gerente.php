<?php
require_once '313Trabajador.php';

class Gerente extends Trabajador {
    private $salarioBase;

    // Constructor
    public function __construct($nombre, $apellidos, $edad, $salarioBase) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->salarioBase = $salarioBase;
    }

    // Getters y Setters
    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    // Calcular sueldo
    public function calcularSueldo(): float {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
    }

    // Método mágico __toString
    public function __toString(): string {
        return parent::__toString() .
               "Salario base: " . $this->getSalarioBase() . "<br>" .
               "Sueldo: " . $this->calcularSueldo() . "<br>";
    }

    // Método para mostrar datos del gerente en HTML
    public function toHtml(): string {
        $html = parent::__toString();
        $html .= "<p>Salario base: " . $this->getSalarioBase() . "<br>";
        $html .= "Sueldo: " . $this->calcularSueldo() . "</p>";
        return $html;
    }
}
?>