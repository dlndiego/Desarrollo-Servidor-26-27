<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> arrayAsociativo.php</title>
</head>
<body>
    <h1>arrayAsociativo.php</h1>
    <p>
        Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo [“M”, “M”, “F”,
        “M”, …]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo [‘M’ => 44, ‘F’ => 66] (no utilices variables
        para contar las M o las F). Finalmente, muestra el resultado por pantalla
    </p>

    <span>
        <?php
            #CREAMOS EL ARRAY CON LAS M Y F
            $numRandom = 0;
            $vectAlea = array();
            for ($i = 0; $i <= 100; $i++) {
               $numRandom = rand(1,0);
               if ($numRandom == 1) {
                $vectAlea[$i]= "M";
               }else {
                 $vectAlea[$i]= "F";
               }
            }

            #CREAMOS UN ARRAY ASOCIATIVO Y LE METEMOS LAS M Y LAS F .
            $mYf=["M" => 0,"F" => 0];
            
            for ($i = 0; $i <= count($vectAlea); $i++){
                $totalM = array_filter($vectAlea[$i],'hayM');
                $totalF = array_filter($vectAlea[$i],'hayF');
            }

            $mYf["M"]=count($totalM);
            $mYf["F"]=count($totalF);
            #Funcion que nos dice si es una M o no.
            function hayM($letra){
                if($letra == "M"){
                    return $letra;
                }else{
                    return "";
                }
            }
            function hayF($letra){
                if($letra == "F"){
                    return $letra;
                }else{
                    return "";
                }
            }
        ?>
    </span>

</body>
</html>