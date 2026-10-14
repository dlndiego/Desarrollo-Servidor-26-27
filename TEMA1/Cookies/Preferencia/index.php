<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/web.css">
</head>
<body>
    <header>
        <?php
            echo "<h1>Bienvenido ".$_COOKIE["usuario"]."</h1>";
        ?>
        <nav>
            <ul>
                <li><a href="preferencias.php">Preferencias</a></li>
                <li><a href="index.php">Index</a></li>
                <?php
                    if(setcookie("usuario", time() + 300) && setcookie("color",time() + 300)){
                        echo "<li><a href='borrar_prefs.php'>Borrar cookies</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
   
    


    <style>
        body{
            background-color: <?php echo $_COOKIE["color"]; ?>;
        }
    </style>
</body>
</html>