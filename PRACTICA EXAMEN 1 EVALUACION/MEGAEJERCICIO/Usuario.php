<?php
class Usuario{
    private $nombre = "";
    private $email = "";

    private $passw = "";

    public function __construct($nombre, $email, $passw) {
        if($nombre != ""){
            $this->nombre = $nombre;
        }
        if($email != ""){
            $this->email = $email;
        }
        if($passw != ""){
            $this->passw = $passw;
        }
    }

    public function __get($nombre){
        if($nombre == 'nom'){
            return $this->nombre;
        }elseif ($nombre == 'email') {
            return $this->email;
        }elseif ($nombre == 'passw') {
            return $this->passw;
        }
    }

    public function comprobarPassword($passw){
        if($this->passw == $passw){
            return true;
        }else{
            return false;
        }
    }

    public function __toString(){
        return "Nombre : ". $this->nombre . " Email : " . $this->email . " Contraseña : " . $this->passw;
    }

}

?>