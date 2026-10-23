<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
</head>
<body>
    <header>
        <h1>Insertar Juegos</h1>
        <nav>
            <form action="icrud.php" method="POST">
                <label for="tit">Titulo:</label>
                <input type="text" name="titulo" id="titJuego">
                <label for="nom">Genero:</label>
                <input type="text" name="genero" id="nomJuego">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precJuego">
                <input type="submit" value="Enviar" name="insertar">
            </form>
        </nav>
    </header>
</body>
</html>
<?php

?>