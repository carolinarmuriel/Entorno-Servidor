<?php
class Soporte {
    public $titulo;
    public $numero;
    public $precio;

    public function __construct($titulo, $numero, $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getPrecioConIva() {
        return $this->precio * 1.21;
    }

    public function muestraResumen() {
        echo "<br>Título: " . $this->titulo;
        echo "<br>Número: " . $this->numero;
        echo "<br>Precio: " . $this->precio . " euros";
    }
}

class CintaVideo extends Soporte {
    public $duracion;

    public function __construct($titulo, $numero, $precio, $duracion) {
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    public function muestraResumen() {
        parent::muestraResumen();
        echo "<br>Duración: " . $this->duracion . " minutos";
    }
}
?>