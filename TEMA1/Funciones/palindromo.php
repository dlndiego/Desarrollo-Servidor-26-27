<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindromo.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>palindromo.php</h1>
    <p>Escribe una función que devuelva un booleano indicando si una palabra es palíndroma (se lee
igual de izquierda a derecha que de derecha a izquierda, por ejemplo, "ligar es ser agil
").</p>

<div>

    <?php
        $frase= "ligar es ser agil";
        $esOno =  esPalindromo($frase);
        echo"<table>";
        echo "<tr>";
        echo "<td class='INFO'> FRASE NORMAL </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='PHP'> $frase </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='INFO'> ES PALINDROMO </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='PHP'> ". print($esOno) ."</td>";
        echo "</tr>";
        echo "</table>";
    ?>

</div>
</body>
</html>
<?php 
 
    function esPalindromo($frase){
       $fraseInvertida ="";
       $esOno =FALSE;
        for($i = strlen($frase)-1;$i >= 0 ;$i--){
            $fraseInvertida .= $frase[$i];
        }
        if($fraseInvertida == $frase){ 
            
            return $esOno=TRUE;
       }else{
            return $esOno=FALSE;
       }
    }
 
 
 

?>