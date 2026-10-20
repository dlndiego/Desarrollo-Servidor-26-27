<?php
class Persona {
    private $DNI = "";
    private $nombre = "";
    private $mail = "";

    public function __construct($d, $n, $m ){
        $this->DNI = $d;
        $this->nombre = $n;
        $this->mail = $m;
    }

    public function getDNI(){
        if($this->DNI == ""){
            return "Debes completar el campo DNI.";
        }else{
            return $this->DNI;
        }
    }
    public function getNom(){
        if($this->nombre == ""){
            return "Debes completar el campo Nombre.";
        }else{
            return $this->nombre;
        }
    }
    public function getMail(){
        if($this->mail == ""){
            return "Debes completar el campo Mail.";
        }else{
            return $this->mail;
        }
    }

    public function setDNI($d){
        $this->DNI = $d;
    }

    public function setNombre($n){
        $this->nombre = $n;
    }

    public function setMail($m){
        $this->mail = $m;
    }

    public function mostrar(){
        return "DNI: ".$this ->DNI ." NOMBRE: ". $this ->nombre . " MAIL: " . $this ->mail ;
    }
}
?>