<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h3>Nota mas alta del examen: </h3>
    <span>
        <?php
            $nota1 = 7.5;
            $nota2 = 7.3;
            
            if ($nota1 == $nota2) {
               echo("Ambos tienen la misma nota, la nota es de: ".$nota1." .");
            }elseif ($nota1 > $nota2) {
                echo("La nota mas alta es: ". $nota1 . ". Y la otra nota es un: ".$nota2. ".");
            }else {
                echo("La nota mas alta es: ".$nota2 . ". Y la otra nota es un: ".$nota1. ".");
            }
        ?>
    </span>
    
</body>
</html>