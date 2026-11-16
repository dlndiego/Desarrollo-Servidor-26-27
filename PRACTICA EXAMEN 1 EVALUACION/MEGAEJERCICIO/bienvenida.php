<?php
require_once "Usuario.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <header>
        <h1>Bienvenido <?php echo $_SESSION["persona"]-> __get("nom") ?></h1>
        <a href="login.php">Volver</a>
    </header>
    
    
    <div>
        <p>Bienvenido a el usuario: <?php echo $_SESSION["persona"] -> __get("nom") ?> con correo: <?php echo $_SESSION["persona"] -> __get("email") ?> .</p>
    </div>
</body>
</html>