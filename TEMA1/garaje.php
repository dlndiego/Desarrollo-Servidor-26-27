<!DOCTYPE html>
<html lang="es">
<head>
    <title>garaje.php</title>
        <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>garaje.php</h1>
    <p>
        Crea una página llamada coches.php. Define dentro un array bidimensional mixto donde:
        La primera dimensión sea asociativa. Aquí pondremos matrículas de coches. La segunda dimensión
        será numérica. En cada casilla guardaremos la marca, modelo y número de puertas del coche en
        cuestión. Por ejemplo, el coche con matrícula “111BCD” puede ser un “Ford” (casilla 0), modelo “Focus” (casilla 1) de 5 puertas (casilla 2). Rellena el array con al menos 3 o 4 coches, y después utiliza las
        estructuras adecuadas para recorrerlo mostrando los datos de los coches ordenados por matrícula
    </p>
    <div>
        <?php
            $asociativo = array("111BCD" => array("Ford","Focus","4"),"334XLM" => array("Nissan","Micra","4"),"421DBZ"=> array("Lamborgini","Urus","4"));
            ksort($asociativo);
            $claves = array_keys($asociativo);
            echo"<table>";
                echo "<tr>";
                echo"<td class='INFO'>MATRICULA </td>";
                echo"<td class='INFO'>MARCA </td>";
                echo"<td class='INFO'>MODELO</td>";
                echo"<td class='INFO'>NUMERO DE PUERTAS</td>";
                echo"</tr>";
                foreach ($claves as $key) {  
                echo "<tr>";
                echo "<td class='PHP'>" .$key . "</td>";
                
                for ($i=0; $i < count($asociativo[$key]); $i++) { 
                    
                    echo"<td class='PHP'>" . $asociativo[$key][$i] ."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
              
        ?>
    </div>
    
</body>
</html>