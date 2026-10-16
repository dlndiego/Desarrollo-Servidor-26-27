<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>plantillas.php</h1>
    <p>
        Con el fichero plantillas.csv muestra en un tabla HTML la plantilla del Atlético de Madrid
        ordenada por dorsal.
    </p>
    <div>
        <?php
            $jugadores = obtenerJugadores();
            ordenarDorsales($jugadores);
            
        
        ?>
    </div>
</body>
</html>
<?php 
    function obtenerJugadores(){
        $fichero = file("csv/plantillas.csv");
        $filaFichero = array();
        $jugadores = array();
        $cont = 0;
        for ($i=0; $i < count($fichero); $i++) { 
            $filaFichero= explode(",", $fichero[$i]);
            for ($j=0; $j < count($filaFichero); $j++) { 
                if ($j == 1) {
                    if ($filaFichero[$j] == "Atlético de Madrid") {
                            $jugadores[$cont] = $fichero[$i];
                            $cont++; 
                    }
                }
            }
        }
        return $jugadores;
    }
    function ordenarDorsales($jugadores){
        $filas = array();
        $filas2 = array();
        $filas3 = array();
        $dorsal = array();
        $jugadoresOrdenados = array();
        for ($i=0; $i < count($jugadores); $i++) { // sacamos los dorsales de los jugadores
            $filas = explode(",", $jugadores[$i]);    
            $dorsal[$i] = $filas[11];
        }
        // los ordenamos de menor a mayor
        sort($dorsal);
        
        // ahora queremos que $jugadores este ordenado por dorsal, para ello recorremos el array de dorsales y buscamos en $jugadores el jugador con ese dorsal
        for ($i=0; $i < count($dorsal); $i++) { 
            for ($j=0; $j < count($jugadores); $j++) { 
                $filas2 = explode(",", $jugadores[$j]);
                if ($dorsal[$i] == $filas2[11]) {
                    $jugadoresOrdenados[$i] = $jugadores[$j];
                }
            }  
        }
        // CREAMOS LA TABLA HTML CON LOS JUGADORES ORDENADOS POR DORSAL
        echo "<table>";
        echo "<tr><th class='INFO'>Dorsal</th><th class='INFO'>Nombre</th><th class='INFO'>Posición</th><th class='INFO'>Edad</th><th class='INFO'>Nacionalidad</th></tr>";
        for ($i=0; $i < count($jugadoresOrdenados); $i++) { 
            $filas3 = explode(",", $jugadoresOrdenados[$i]);
            echo "<tr>";
            echo "<td class='PHP'>".$filas3[11]."</td>";
            echo "<td class='PHP'>".$filas3[2]."</td>";
            echo "<td class='PHP'>".$filas3[3]."</td>";
            echo "<td class='PHP'>".$filas3[4]."</td>";
            echo "<td class='PHP'>".$filas3[5]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

?>