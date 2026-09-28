<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analizador.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>analizador.php</h1>
    <p>A partir de una frase con palabras sólo separadas por espacios, devolver:
• Letras totales y cantidad de palabras
• Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count</p>

<div>
    <?php
        $frase = "LA VACA LOLA";
        echo"<table>";
        echo"<tr>";
        echo"<td class='INFO'>FRASE PRESENTADA</td>";
        echo "</tr>";
        echo "<tr>";
        echo"<td class='PHP'>$frase</td>";
        echo"</table>";
        letrasTotales($frase);
        cantidadPalabras($frase);
        tamañoPalabras($frase);
    ?>
</div>
</body>
</html>
<?php
    function letrasTotales($frase){
        $letrasTotales= 0;
        for($i=0;$i<strlen($frase);$i++){
            if($frase[$i] != " "){
                $letrasTotales++;
            }
        }
        echo"<table>";
        echo"<tr>";
        echo"<td class='INFO'>LETRAS TOTALES</td>";
        echo "</tr>";
        echo "<tr>";
        echo"<td class='PHP'>$letrasTotales</td>";
        echo "</tr>";
        echo "</table>";
    }

    function cantidadPalabras($frase){
        $cantidadPalabras= 0;
        for($i=0;$i<strlen($frase);$i++){
            if($frase[$i] == " "){
                $cantidadPalabras++;
            }
        }
        $cantidadPalabras++;
        echo "<table>";
        echo"<tr>";
        echo"<td class='INFO'>CANTIDAD DE PALABRAS</td>";
        echo "</tr>";
        echo "<tr>";
        echo"<td class='PHP'>$cantidadPalabras</td>";
        echo "</tr>";
        echo "</table>"; 
    }

    function tamañoPalabras($frase){
        $palabras= explode(" ",$frase);
        echo "<table>";
        echo"<tr>";
        echo"<td class='INFO'>PALABRA</td>";
        echo"<td class='INFO'>TAMAÑO</td>";
        echo "</tr>";
        for($i=0;$i<count($palabras);$i++){
            $tamaño= strlen($palabras[$i]);
            echo"<tr>";
            echo"<td class='PHP'>$palabras[$i]</td>";
            echo"<td class='PHP'>$tamaño</td>";
            echo "</tr>";
        }
        echo "</table>"; 
    }

?>