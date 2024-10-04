<?php
    include('operaciones.php');

    class controlOperaciones extends operaciones{
       
        private $suma;
        private $reste;
        private $multiplicacion;
        private $divicion;

      
        public function sumar(){

            $this-> suma = $this->getNumero1() + $this->getNumero2();
            return $this->suma;

        }

        public function restar(){
            
            $this-> resta = $this->getNumero1() - $this->getNumero2();
            return $this->resta;

        }

        public function multiplicar(){
            
            $this-> multiplicacion = $this->getNumero1() * $this->getNumero2();
            return $this->multiplicacion;

        }

        public function dividir(){
            
            $this-> division = $this->getNumero1() / $this->getNumero2();
            return $this->division;

        }
    }
?>