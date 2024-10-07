<?php
class valores{
    private $totalDias;
    private $valorDia;

    public function __construct(){
        $this->totalDias = 0;
        $this->valorDia = 0;
    }

    public function setTotalDias($totalDias){
        $this->totalDias = $totalDias;
    }
    
    public function getTotalDias(){
        return $this->totalDias;
    }
    
    public function setValorDia($valorDia){
        $this->valorDia = $valorDia;
    }
    
    public function getValorDia(){
        return $this->valorDia;
    }
}
?>