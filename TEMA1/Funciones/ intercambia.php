<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> intercambia.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>intercambia.php</h1>
    <p>
        Crea una página llamada intercambia.php. Añade dentro una función llamada intercambia que reciba 2 parámetros numéricos por referencia, y lo que haga sea intercambiar sus valores. Es decir, si recibe el parámetro $a y el valor de $b , y $b tome el valor
        de $a
    </p>

    <div>
        <span>
            <?php
                $num1 = 4;
                $num2 = 3;
                echo intercambiaValorPorReferencia($num1,$num2);
                function intercambiaValorPorReferencia(&$a, &$b) {
                    /*
                    $aux = $a;
                    $a = $b;
                    $b = $aux;
                    */            
                    [$a, $b] = [$b, $a];
                    echo $a . " ";
                    echo $b;
                }
            
            
            ?>
        </span>
    </div>
</body>
</html>