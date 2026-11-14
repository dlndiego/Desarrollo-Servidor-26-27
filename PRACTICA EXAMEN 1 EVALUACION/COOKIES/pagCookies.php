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
</head>
<body>
    <header>
        <h1>Bienvenido <?php echo $_COOKIE["acceso"]?></h1>
    </header>
</body>
</html>