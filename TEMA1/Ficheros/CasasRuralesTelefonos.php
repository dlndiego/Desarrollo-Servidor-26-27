<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CasasRuralesTelefonos.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>CasasRuralesTelefonos.php</h1>
    <p>
        Crea un programa llamado CasasRuralesTelefonos.php que cargue los datos de este
        archivo CSV de casas rurales de la provincia de Castellón.
        Queremos quedarnos con el id, localidad, nombre y telefono de las casas rurales que tengan un
        teléfono definido, descartando el resto.
        El programa debe mostrar por pantalla el listado final procesado, y cuántas casas rurales se
        han descartado por tener datos nulos.
    </p>
    <div>
        <?php  
            cargandoDatos();
        ?>
    </div>
</body>
</html>
<?php 
    function cargandoDatos(){
        $casaRularesDescartadas= 0;
        if(file_exists("csv/casas_rurales.csv")){
            $fichero = file("csv/casas_rurales.csv");
            $linea ="";
            $lineaSinVacios = "";
            echo "<table>";
            echo"<tr>";
                echo "<td class='INFO'>ID</td>";
                echo "<td class='INFO'>LOCALIDAD</td>";
                echo "<td class='INFO'>NOMBRE</td>";
                echo "<td class='INFO'>TELEFONO</td>";
            echo"</tr>";
            for($i= 1;$i<count($fichero);$i++){
                $linea = explode(";",$fichero[$i]);
                $lineaSinVacios = array_filter($linea);
                echo"<tr>";
                for($j= 0;$j<count($linea);$j++){
                    if (trim($linea[9]) !== '') {
                        if ($j == 0 or $j == 1 or $j ==3 or $j == 9) {
                            echo "<td class='PHP'>$linea[$j]</td>";
                        }
                    }else{
                        $casaRularesDescartadas++;                    
                    }    
                }
                echo"</tr>"; 
            }
            echo "</table>";
            echo "<table>";
            echo "<tr>";
            echo "<td class='INFO'> CASAS DESCARTADAS </td>";
            echo "</tr>";   
            echo "<tr>";
            echo "<td class='PHP'> $casaRularesDescartadas </td>";
            echo "</tr>";
            echo "</table>";
            }else{
            echo "NO EXISTE";
        }
        

        
    }


?>