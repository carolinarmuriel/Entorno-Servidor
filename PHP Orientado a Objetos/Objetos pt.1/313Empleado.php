<?php
require_once '313Trabajador.php';

class Empleado extends Trabajador {
    private $horasTrabajadas;
    private $precioPorHora;

    // Constructor
    public function __construct($nombre, $apellidos, $edad, $horasTrabajadas, $precioPorHora) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }

    // Getters y Setters
    public function getHorasTrabajadas() {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas($horasTrabajadas) {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function getPrecioPorHora() {
        return $this->precioPorHora;
    }

    public function setPrecioPorHora($precioPorHora) {
        $this->precioPorHora = $precioPorHora;
    }

    // Calcular sueldo
    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    // Método mágico __toString
    public function __toString(): string {
        return parent::__toString() .
               "Horas trabajadas: " . $this->getHorasTrabajadas() . "<br>" .
               "Precio por hora: " . $this->getPrecioPorHora() . "<br>" .
               "Sueldo: " . $this->calcularSueldo() . "<br>";
    }

    // Método para mostrar datos del empleado en HTML
    public function toHtml(): string {
        $html = parent::__toString();
        $html .= "<p>Horas trabajadas: " . $this->getHorasTrabajadas() . "<br>";
        $html .= "Precio por hora: " . $this->getPrecioPorHora() . "<br>";
        $html .= "Sueldo: " . $this->calcularSueldo() . "</p>";
        return $html;
    }
}
?>