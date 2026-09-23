<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arametrosVariables.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>parametrosVariables.php</h1>
    <p>
        Crea las siguientes funciones:
        Una función que devuelva el mayor de todos los números recibidos como parámetro variables:
        function mayor(): int. Utiliza las funciones func_get_args(), etc…
        No puedes usar la función max().
    </p>
    <div>
        <?php 
         echo sacarNumMayor(2,3,5,7,10,50,4,12,21);
        
        ?>
    </div>

</body>
</html>
<?php
    function sacarNumMayor(...$numeros){
        $mayor = 0; 
        $conjuntoNumeros = "";
        echo "<table>";
        echo"<tr>";
        echo "<td class ='INFO'>NUMEROS ARRAY</td>";
        echo "<td class ='INFO'>NUMEROS MAYOR</td>";
        echo "</tr>";
        for($i = 0; $i < count($numeros);$i++){
            if($numeros[$i] == 0){
                $mayor = $numeros[$i];
            }
            if ($numeros[$i] > $mayor and $numeros[$i] != $mayor) {
                $mayor = $numeros[$i];
            }
            $conjuntoNumeros .= " " . $numeros[$i] . " ";
        }
        echo "<tr>";
        echo "<td class ='PHP'> $conjuntoNumeros </td>";
        echo "<td class ='PHP'> $mayor </td>";
        echo "</tr>";
        echo "</table>";
    }

?>