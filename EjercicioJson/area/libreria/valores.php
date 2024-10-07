<?php
class valores{
    private $lado;
    private $baser;
    private $alturar;
    private $baset;
    private $alturat;

    public function __construct(){
        $this->lado = 0;
        $this->baser = 0;
        $this->alturar = 0;
        $this->baset = 0;
        $this->alturat = 0;
    }

    public function setLado($lado){
        $this->lado = $lado;
    }

    public function getLado(){
        return $this->lado;
    }


    public function setBaser($baser){
        $this->baser = $baser;
    }

    public function getBaser(){
        return $this->baser;
    }

    public function setAlturar($alturar){
        $this->alturar = $alturar;
    }

    public function getAlturar(){
        return $this->alturar;
    }

    public function setBaset($baset){
        $this->baset = $baset;
    }

    public function getBaset(){
        return $this->baset;
    }

    
    public function setAlturat($alturat){
        $this->alturat = $alturat;
    }

    public function getAlturat(){
        return $this->alturat;
    }
}
?>