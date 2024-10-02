<?php

class Nomina {
    private $nombre;
    private $sueldo;
    private $arlRate = 0.0052;
    private $pensionRate = 0.16;
    private $saludRate = 0.12;
    private $subsidio = 114000;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function calcularARL() {
        return $this->sueldo * $this->arlRate;
    }

    public function calcularPension() {
        return $this->sueldo * $this->pensionRate;
    }

    public function calcularSalud() {
        return $this->sueldo * $this->saludRate;
    }

    public function calcularTotalDescuentos() {
        return $this->calcularARL() + $this->calcularPension() + $this->calcularSalud();
    }

    public function calcularSubsidio() {
        return ($this->sueldo < 2600000) ? $this->subsidio : 0;
    }

    public function calcularRetencion() {
        return ($this->sueldo > 5200000) ? $this->sueldo * 0.004 : 0;
    }

    public function obtenerResumen() {
        return [
            "nombre" => $this->nombre,
            "sueldo" => $this->sueldo,
            "arl" => $this->calcularARL(),
            "pension" => $this->calcularPension(),
            "salud" => $this->calcularSalud(),
            "totalDescuentos" => $this->calcularTotalDescuentos(),
            "subsidio" => $this->calcularSubsidio(),
            "retencion" => $this->calcularRetencion(),
            "neto" => $this->sueldo - $this->calcularTotalDescuentos() + $this->calcularSubsidio() - $this->calcularRetencion()
        ];
    }
}
