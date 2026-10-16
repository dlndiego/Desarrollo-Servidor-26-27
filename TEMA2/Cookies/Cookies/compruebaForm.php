<?php
$usuario = $_GET['usuario'];
$contraseña = $_GET['passw'];
$usuarios = array(
    "Pepe" => "Pepe1",
    "Diego" => "Diego1",
    "Dani" => "Dani1"
);
    foreach ($usuarios as $user => $pass) {
        if ($usuario == $user && $contraseña == $pass) {
            setcookie("user", $usuario, time() + 1000);
            header("Refresh: 3; url=web.php");
            echo "Bienvenido $usuario, seras redirigido en 3 segundos";
            exit();
        }
    }
?>