<?php
class Soporte {
    public $titulo;
    public $numero;
    public $precio;
    private static $IVA = 0.21;

    public function __construct($titulo, $numero, $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getPrecioConIVA() {
        return $this->precio * (1 + self::$IVA);
    }

    public function muestraResumen() {
        echo "<br><strong>Título:</strong> " . $this->titulo;
        echo "<br><strong>Número:</strong> " . $this->numero;
        echo "<br><strong>Precio:</strong> " . $this->precio . " euros";
        echo "<br><strong>Precio con IVA:</strong> " . $this->getPrecioConIVA() . " euros";
    }
}
?>