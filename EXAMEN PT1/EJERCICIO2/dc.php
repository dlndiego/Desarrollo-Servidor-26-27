<?php 
session_start();

$archivo= "CSV/heroes.csv";
$filas= file($archivo);
 
$columnas=[];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperHeroes</title>
    <link rel="stylesheet" href="css/total.css">
</head>
<body>
    <header>
        <h1>Listado de Imagenes</h1>
    </header>
    
        <?php
            for ($i=2; $i < count($filas) ; $i++) { 
                $columnas= explode(";",$filas[$i]);
                if($columnas[1] == $_SESSION["usuario"]){
                    echo "<article>";
                    echo "<img src='{$columnas[5]}' width='200'><br>";
                   echo $columnas[0] . "</br>";
                   echo $columnas[1] . "</br>";
                   echo "Alter Ego : ".$columnas[2] . "</br>";
                   echo "Aparicion : ".$columnas[3] . "</br>";
                   echo "Personaje : ".$columnas[4] . "</br>";
                   echo "</article>";
                   
                    
                }
                
               
            }
            
            session_destroy();
        ?>
 

    
</body>
</html>
<?php

?>