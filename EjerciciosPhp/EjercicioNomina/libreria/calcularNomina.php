<?php
class Nomina {
  
    private $diasTrabajados;
    private $valorDia;
    private $sueldo;
    private $arl;
    private $pension;
    private $salud;
    private $totalDescuentos;

  
    public function __construct($diasTrabajados, $valorDia) {
        $this->diasTrabajados = $diasTrabajados;
        $this->valorDia = $valorDia;
        $this->calcularSueldo();
        $this->calcularDescuentos();
    }

    
    private function calcularSueldo() {
        $this->sueldo = $this->diasTrabajados * $this->valorDia;
    }

   
    private function calcularDescuentos() {
        $this->arl = $this->sueldo * 0.0052;
        $this->pension = $this->sueldo * 0.16;
        $this->salud = $this->sueldo * 0.12;
        $this->totalDescuentos = $this->arl + $this->pension + $this->salud;
    }

    
    public function getSueldo() {
        return $this->sueldo;
    }

    public function getArl() {
        return $this->arl;
    }

    public function getPension() {
        return $this->pension;
    }

    public function getSalud() {
        return $this->salud;
    }

    public function getTotalDescuentos() {
        return $this->totalDescuentos;
    }
}
?>
