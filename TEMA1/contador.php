<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/info_basica.css">
</head>
<body>
    <?php
        $cont1 = 100;
        $cont2 = 10;
    ?>

    <h1>Probando bucles:</h1>
    <p>Vamos a hacer un contador del 0 a el 100 usando un FOR </p>
    <span><?php 
        for ($i= 1; $i <= $cont1 ; $i++) { 
            if ($i < $cont1 ) {
                echo $i . ", ";
            }else{
                echo $i . ".";
            }
        }
    ?></span>
    
    <p>Vamos a hacer un contador del 10 a el 0 usando un FOR </p>
    <span><?php 
        while ($cont2>=0) {
            if($cont2 > 0){
                echo $cont2 . " - ";
            }else{
                echo $cont2;
            }
            $cont2--;
        }
    ?></span>


</body>
</html>