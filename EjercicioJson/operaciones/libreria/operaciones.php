<?php
class operaciones {
    private $numero1;
    private $numero2;

    public function __construct() { 
        $this->numero1 = 0;
        $this->numero2 = 0;
    }

    public function setNumero1($numero1) {
        $this->numero1 = $numero1; 
    }

    public function getNumero1() { 
        return $this->numero1; 
    }

    public function setNumero2($numero2) {
        $this->numero2 = $numero2; 
    }

    public function getNumero2() { 
        return $this->numero2;
    }
}
?>