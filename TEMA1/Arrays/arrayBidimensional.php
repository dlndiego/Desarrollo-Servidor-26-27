<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrayBidimensional.php</title>
     <link rel="stylesheet" href="css/info_basica.css">

</head>
<body>
    <H1>arrayBidimensional.php</H1>
    <P>
        Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre
        100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir
        ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que:
            • La columna del máximo debe aparecer en azul.
            • La fila del mínimo debe aparecer en verde.
            • El resto de números deben aparecer en negro
    </P>
    <div>
        <?php
            $numRand = 0;
            $numeros = array();
            $guardarMax = 0; 
            $guardarColumna = 0;
            $guardarMin = 0; 
            $guardarFila = 0;
                for ($i=0; $i < 6; $i++) { 
                    for ($j=0; $j < 9 ; $j++) { 
                        $numRand =rand(100,999);
                        if(!in_array($numRand,$numeros)){
                            $numeros[$i][$j]= $numRand;

                        }else{
                            $j--;
                        }
                    }
                }
            for ($i=0; $i <count($numeros) ; $i++) { 
                
                for ($j=0; $j < count($numeros[$i]); $j++) { 
                    if ($i == 0 and $j == 0) {
                        $guardarMax = $numeros[$i][$j];
                        $guardarColumna = $j;
                    }    
                    if( $numeros[$i][$j] > $guardarMax){
                        $guardarMax = $numeros[$i][$j];
                        $guardarColumna = $j;
                    }
                    if ($i == 0 and $j == 0) {
                        $guardarMin = $numeros[$i][$j];
                        $guardarFila = $i;
                    }    
                    if( $numeros[$i][$j] < $guardarMin){
                        $guardarMin = $numeros[$i][$j];
                        $guardarFila = $i;
                    }

                }
            }
            
            echo "<table>";
            
            for ($i=0; $i <count($numeros) ; $i++) { 
                if ($i == $guardarFila) {
                    echo "<tr style = 'background-color : green'>";    
                }else {
                    echo "<tr>";
                }
                
                for ($j=0; $j <count($numeros[$i]) ; $j++) { 
                    if ($j == $guardarColumna) {
                    echo "<td style = 'background-color : blue'> " . $numeros[$i][$j]. "</td>";
                }else {
                    echo "<td> " . $numeros[$i][$j]. "</td>";
                }
                    
                }
                echo "</tr>";
            }
            echo "</table>";

        ?>
    </div>
    
</body>
</html>