<?php
    $usuario = $_POST["usuario"] ?? "";
    $contraseña = $_POST["contrasena"]?? "";
    if(strlen($usuario) < 5 or strlen($contraseña) < 8){
        header("Location: ko.php");
        exit;
    }else{                
        header("Location: ok.php");
        exit;
    }
?>


