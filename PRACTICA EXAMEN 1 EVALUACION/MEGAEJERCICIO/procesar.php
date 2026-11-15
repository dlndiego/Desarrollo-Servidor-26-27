<?php
require_once("Usuario.php");


if($_POST["mail"] != "" && $_POST["passw"] != ""){
    $mail = $_POST["mail"];
    $password = $_POST["passw"];
}



$nombre = obtenerNombre($mail);

$usuario = new Usuario($nombre,$mail,$password);

echo $usuario->__toString();

if($usuario->comprobarPassword($password) == true){
    session_start();
    $_SESSION["persona"]=$usuario; 
    header("Location:bienvenida.php");
    exit();
}/*else{
    header("");
}
*/
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