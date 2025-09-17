<?php
require_once '314Empleado.php';
require_once '314Gerente.php';
require_once 'JSerializable.php';

class Empresa implements JSerializable {
    private $nombre;
    private $direccion;
    private $trabajadores = array();

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function anyadirTrabajador(Trabajador $t) {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string {
        $html = '';
        foreach ($this->trabajadores as $t) {
            $html .= $t->toHtml();
        }
        return $html;
    }

    public function getCosteNominas(): float {
        $coste = 0;
        foreach ($this->trabajadores as $t) {
            $coste += $t->calcularSueldo();
        }
        return $coste;
    }

    public function toJSON(): string {
        $mapa = new stdClass();
        foreach ($this as $clave => $valor) {
            $mapa->$clave = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}
?>