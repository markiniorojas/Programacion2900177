<?php
    include('valores.php');

class areas extends valores {
    public $areaCuadrado;
    public $areaRectangulo;
    public $areaTriangulo;

    public function areaCuadrados(){
        $this->areaCuadrado = $this->getLado() * $this->getLado();
        return $this->areaCuadrado;
    }

    public function areaRectangulos(){
        $this->areaRectangulo = $this->getBaser() * $this->getAlturar();
        return $this->areaRectangulo;
    }

    public function areaTriangulos(){
        $this->areaTriangulo = $this->getBaset() * $this->getAlturat() / 2;
        return $this->areaTriangulo;
    }
}
?>