<?php

class Operaciones {
  
    private function suma($num1, $num2) {
        return $num1 + $num2;
    }

    private function resta($num1, $num2) {
        return $num1 - $num2;
    }

    private function multiplicacion($num1, $num2) {
        return $num1 * $num2;
    }

    private function division($num1, $num2) {
        if ($num2 == 0) {
            return "Error: División por cero no permitida.";
        }
        return $num1 / $num2;
    }


    public function calcularSuma($num1, $num2) {
        return $this->suma($num1, $num2);
    }

    public function calcularResta($num1, $num2) {
        return $this->resta($num1, $num2);
    }

    public function calcularMultiplicacion($num1, $num2) {
        return $this->multiplicacion($num1, $num2);
    }

    public function calcularDivision($num1, $num2) {
        return $this->division($num1, $num2);
    }
}
