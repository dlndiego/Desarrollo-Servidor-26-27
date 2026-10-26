<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="insertar-juegos">Insertar Juegos</h1>
    </header>
    <main>
        <!-- Formulario tumbado (en línea horizontal) -->
        <article class="art-Insertar">
            <form action="icrud.php" method="POST" class="horizontal-form">
                <div class="input-group">
                    <label for="titJuego">Titulo:</label>
                    <input type="text" name="titulo" id="titJuego" required>
                </div>
                <div class="input-group">
                    <label for="nomJuego">Genero:</label>
                    <input type="text" name="genero" id="nomJuego" required>
                </div>
                <div class="input-group">
                    <label for="precJuego">Precio:</label>
                    <input type="number" name="precio" id="precJuego" step="0.01" required>
                </div>
                <input type="submit" value="Enviar" name="insertar" class="submit-btn">
            </form>
        </article>

        <div class="game-table-container">
            <table class="game-table">
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Título</th>
                        <th>Género</th>
                        <th class="text-right">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("db.php");
                    $consulta = $pdo->query("SELECT * FROM videojuego");
                    $consulta->execute();
                    while ($registro = $consulta->fetch()) {
                        echo "<tr>";
                        echo "<td>
                                <form action='icrud.php' method='POST' style='display:inline;'>
                                    <input type='hidden' name='borrar' value='" . $registro["id"] . "'>
                                    <button type='submit' class='img-btn'>
                                    <img src='img/eliminar.png' alt='Icono'>
                                    </button>
                                </form>
                                <form action='index.php' method='POST' style='display:inline;'>
                                   <input type='hidden' name='ID' value='" . $registro["id"] . "'>
                                   <input type='hidden' name='titulo' value='" . $registro["titulo"] . "'>
                                   <input type='hidden' name='genero' value='" . $registro["genero"] . "'>
                                   <input type='hidden' name='precio' value='" . $registro["precio"] . "'>
                                    <input type='hidden' name='flag' value='true'>
                                    <button type='submit' class='img-btn'>
                                    <img src='img/editar.png' alt='Icono'>
                                    </button>
                                </form>
                            </td>";
                        echo "<td class='game-title'>" . htmlspecialchars($registro["titulo"]) . "</td>";
                        echo "<td><span class='genre-badge'>" . htmlspecialchars($registro["genero"]) . "</span></td>";
                        echo "<td class='game-price text-right'>$" . number_format($registro["precio"], 2) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                    <?php
                        $flag = $_REQUEST["flag"];
                        if($flag){
                            echo "<article class='art-Insertar2'>";
                            echo "<form action='icrud.php' method='POST' class='horizontal-form2'>";
                            echo "<label for='titJuego2'class='update-form-title'>ACTUALIZAR</label>";
                            echo "<input type='hidden' name='flag' value='false'>";
                            echo "<input type='hidden' name='editar' value='" . $_REQUEST["ID"] . "'>";
                            echo "<input type='text' name='titulo2' class='update-input2' value='" . $_REQUEST["titulo"] . "'>";
                            echo "<input type='text' name='genero2' class='update-input2' value='" . $_REQUEST["genero"] . "'>";
                            echo "<input type='text' name='precio2' class='update-input2' value='" . $_REQUEST["precio"] . "'>";
                            echo "<button type='submit' class='img-btn2'>";
                            echo "<img src='img/actualizar.png' alt='Icono' class='update-img2'>";
                            echo "</button>";
                            echo "</form>";
                            echo "</article>";
                        }
                    ?>
                
            </table>
        </div>
    </main>
</body>

</html>
<?php

?>