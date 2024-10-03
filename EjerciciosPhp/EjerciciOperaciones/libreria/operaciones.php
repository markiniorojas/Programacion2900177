<?php


class ControlOperaciones {

    private $numUno;
    private $numDos;
    public  $suma;
    public  $resta;
    public  $multiplicacion;
    public  $division;

    public function __construct(Numero $numUno, Numero $numDos){
           $this->numUno = $numUno->getNumero();
           $this->numDos = $numDos->getNumero();
    }

    public function sumar() {
        $this->suma = $this->numUno + $this->numDos;
        return $this->suma;
    }

    public function restar() {
        $this->resta = $this->numUno - $this->numDos;
        return $this->resta;
    }

    public function multiplicar() {
        $this->multiplicacion = $this->numUno * $this->numDos;
        return $this->multiplicacion;
    }

    public function dividir() {
        if ($this->numDos != 0) {
            $this->division = $this->numUno / $this->numDos;
            return $this->division;
        } else {
            return "No se puede dividir por 0";
        }
    }
}
?>