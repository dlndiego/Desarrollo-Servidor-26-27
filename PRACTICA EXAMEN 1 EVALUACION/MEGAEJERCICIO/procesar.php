<?php
require_once("Usuario.php");


if($_POST["mail"] != "" && $_POST["passw"] != ""){
    $mail = $_POST["mail"];
    $password = $_POST["passw"];
}


$nombre = obtenerNombre($mail);

$usuario = new Usuario($nombre,$mail,$password);


if($usuario->comprobarPassword($password) == true){
    session_start();
    $_SESSION["persona"]=$usuario;
    if(isset($_POST["recordar"])){
        setcookie("email_guardado",$mail, time()+ 500);
    }else{
        setcookie("email_guardado","",1);
    }
    header("Location:bienvenida.php");
    exit();
}else{
    header("Location:login.php");
    exit();
}

function obtenerNombre($mail){
    $usuario = "";
    for ($i=0; $i < strlen($mail) ; $i++) { 
        if($mail[$i] != "@"){
            $usuario .= $mail[$i];
        }else{
            break;
        }
    }
    return $usuario;
}
?>