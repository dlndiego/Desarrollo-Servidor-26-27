<?php
    $nombre = $_GET["nom"];

    setcookie('acceso',$nombre,time() +520);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="CSS POLIVALENTE/total.css">

</head>
<body>
    <header>
        <h1>Bienvenido <?=  $_COOKIE["acceso"]?></h1>
    </header>
</body>
</html>