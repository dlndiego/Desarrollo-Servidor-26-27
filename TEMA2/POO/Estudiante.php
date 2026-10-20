<?php
include("Persona.php");
class Estudiante extends Persona {
    
    private $numExp= 0;

    public function __construct($num,$d, $n, $m){
        $this->numExp= $num;
        parent::__construct($d, $n, $m);
    }
    public function getNumExp(){
        return $this->numExp;
    }
    public function setNumExp($numExp){
        $this->numExp=$numExp;
    }

    public function mostrar(){
        return "Nº EXPEDIENTE: " . $this ->numExp ." ".parent::mostrar();

    }


}

?>