<?php
$usuario = $_GET["usuario"];
$color = $_GET["color"];

//hacemos un array de nombres de usuarios
$usuarios= array("Pepe", "Diego", "Dani");


setcookie("usuario", $usuario, time() + 300);
setcookie("color", $color, time() + 300);
//usamos header para redirigir a index.php
header("Location:index.php");
echo "Bienvenido $usuario, seras redirigido en 3 segundos";
exit();
    

?> 