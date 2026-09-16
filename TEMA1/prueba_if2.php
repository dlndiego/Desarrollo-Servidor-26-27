<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h3>Nota mas alta del examen: </h3>
    <span>
        <?php
            $nota1 = 7.5;
            $nota2 = 7.3;
            $nota3 = 7.4;
            
            if ($nota1 == $nota2 and $nota2 == $nota3) {
               echo("Ambos tienen la misma nota, la nota es de: ".$nota1." .");
            }elseif ($nota1 > $nota2 and $nota1 > $nota3) {
                if($nota2 > $nota3){
                    echo("La nota mas alta es: ". $nota1 . ". Y la otra nota es un: ".$nota2. ". Y por ultima nota es un: " . $nota3);

                }else{
                    echo("La nota mas alta es: ". $nota1 . ". Y la otra nota es un: ".$nota3. ". Y por ultima nota es un: " . $nota2);
                }
            }elseif ($nota2 > $nota1 and $nota2 > $nota3) {
                if($nota1 > $nota3){
                    echo("La nota mas alta es: ". $nota2 . ". Y la otra nota es un: ".$nota1. ". Y por ultima nota es un: " . $nota3);

                }else{
                    echo("La nota mas alta es: ". $nota2 . ". Y la otra nota es un: ".$nota3. ". Y por ultima nota es un: " . $nota1);
                }
            }elseif ($nota3 > $nota1 and $nota3 > $nota2) {
                if($nota1 > $nota2){
                    echo("La nota mas alta es: ". $nota3 . ". Y la otra nota es un: ".$nota1. ". Y por ultima nota es un: " . $nota2);

                }else{
                    echo("La nota mas alta es: ". $nota3 . ". Y la otra nota es un: ".$nota2. ". Y por ultima nota es un: " . $nota1);
                }
            }  
        ?>
    </span>
</body>
</html>