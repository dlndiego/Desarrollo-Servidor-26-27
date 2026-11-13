<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario + array.</title>
    <link rel="stylesheet" href="css/prueba2.css">
</head>
<body>
    <header>
        <h1 class="tit">TRABAJADORES</h1>
        <nav>
            <a href="">Home</a>
            <a href="">Salarios</a>
            <a href="">Seguros</a>
        </nav>
        
    </header>
    <article class="contForm1">
        <form action="prueba2.php" method="get" class="form1">
            <label for="" >Nombre:</label>
            <input type="text" placeholder="Ej : Diego" name="nom" class="text">
            <label for="">Profesion:</label>
            <input type="text" placeholder="Ej : Informatico" name="prof" class="text">
            <input type="submit" class="enviarForm1">
        </form>
    </article>
    
    <?php 
        if(!isset($_SESSION["personas"])){
            $_SESSION["personas"] = [];
        }
        if(isset($_GET["nom"]) && isset($_GET["prof"])){
            $_SESSION["personas"]+=array($_REQUEST["nom"] => $_REQUEST["prof"]);
        }
    ?>

    <table>
        <tr class="trInfo">
            <td class="info">NOMBRE</td>
            <td class="info">PROFESION</td>
        </tr>
        <?php
            foreach ($_SESSION["personas"] as $nom => $prof){
            echo "<tr>";
                echo "<td class='dato'>".htmlspecialchars($nom)."</td>";
                echo "<td class='dato'>".htmlspecialchars($prof)."</td>";
            echo "</tr>";
            }
        ?>
    </table>
    
    <form action="prueba2.php" method="post" class="form2">
        <input type="submit" value="Cerrar Sesion" name="borrar" class="borrar">
    </form>
    <?php
        if(isset($_POST["borrar"])){
            session_unset();
            session_destroy();
            header("Location: prueba2.php");
            exit();
        }
    ?>
</body>
</html>