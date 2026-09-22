<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
<h1>Página de prueba en PHP</h1>
<?php
// Variables para almacenar el nombre y el año actual
$nombre = "Diego De Leon";
$anyo = 2007;
?>
<p>El autor de esta página es <span><?php echo $nombre; ?></span> y está
realizada en el año <span><?php echo $anyo; ?></span>.</p>