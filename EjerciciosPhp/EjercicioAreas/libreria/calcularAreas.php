<?php

class Figura {
    public function calcularArea() {
        return 0;
    }
}


class Cuadrado extends Figura {
    private $lado; 

    public function __construct($lado) {
        $this->lado = $lado; 
    }

    public function calcularArea() {
        return $this->lado * $this->lado; 
    }
}


class Rectangulo extends Figura {
    private $baser;
    private $alturar; 

    public function __construct($baser, $alturar) {
        $this->baser = $baser;
        $this->alturar = $alturar; 
    }

    public function calcularArea() {
        return $this->baser * $this->alturar;
    }
}


class Triangulo extends Figura {
    private $baset; 
    private $alturat; 

    public function __construct($baset, $alturat) {
        $this->baset = $baset;
        $this->alturat = $alturat; 
    }

    public function calcularArea() {
        return ($this->baset * $this->alturat) / 2;
    }
}
?>
