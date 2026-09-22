<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1</title>
     <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <H1> ARRAY1.PHP</H1>
    <p>
        Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una
        lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin) => $num = rand
        (0, 99)
    </p>
    <?php
        $numRandom = 0;
        $tabla=array();
        for ($i=0; $i < 50 ; $i++) { 
            $numRandom= rand(0,99);
            $tabla[$i]= $numRandom;
        }
        
         
          
        
        #QUITAMOS LOS REPETIDOS.
        $numGuardado = 0;
        $flag = FALSE;
        sort($tabla);
        $tabla2=array();
        for ($i=0; $i < count($tabla); $i++) { 
            if ($i == 0) {
                $tabla2[$i] = $tabla[$i];
            }
            for ($j=0; $j < count($tabla2); $j++) { 
                if ($tabla2[$j] == $tabla[$i]) {
                    $j--;
                    $flag = TRUE;
                    break;
                }
            }
            if ($flag == FALSE) {
                $tabla2[$j] = $tabla[$i];
            }
            $flag= FALSE;
        }
    ?>
    <span>
        <?php
            print("ARRAY COMPLET0: \n");
            for ($i=0; $i <count($tabla) ; $i++) { 
                print($tabla[$i] . " ");
            }
            echo "<br>"; 
        ?>
       
    </span>
    <br>
    <span>
        <?php
            print("ARRAY ORDENADO (<): \n");
            for ($i=0; $i <count($tabla2) ; $i++) { 
                print($tabla2[$i] . " ");
            }
            echo "<br>";        
        ?>
    </span>
    <br>
    <span>
        <?php
            print("\nNUMERO MENOR DENTRO DEL ARRAY: \n");
            sort($tabla);
            print($tabla[0] . ". \n");
        ?>
    </span>
    <br>
    <span>
        <?php
            print("\nNUMERO MAYOR DENTRO DEL ARRAY: \n");
            rsort($tabla);
            print($tabla[0] . ".");
        ?>
    </span>
</body>
</html>