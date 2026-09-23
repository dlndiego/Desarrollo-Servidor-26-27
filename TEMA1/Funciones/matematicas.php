<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matematicas.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>matematicas.php</h1>
    <p>
        Añade las siguientes funciones:
        • digitos(int $num): int → devuelve la cantidad de dígitos de un número.
        • digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando
        por la izquierda, la posición $pos.
        • quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha)
        $cant dígitos.
        • quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda)
        $cant dígitos.
    </p>
    <span>
        <?php 
            $num1 = 43878;
            $pos1 = 1;           
            $cantNumeros = digitos( $num1);
            echo "CANTIDAD DE DIGITOS: ".$cantNumeros. "<br>";
            echo "NUMERO DE LA POSICION $pos1: ".digitoN($num1,$pos1)."<br>";
            echo "QUITAR NUMEROS POR DETRAS: ".quitaPorDetras($num1,1)."<br>";
            echo "QUITAR NUMEROS POR DELANTE: ".quitaPorDelante($num1,2)."<br>";
        ?>
    </span>
</body>
</html>
<?php
    function digitos(int $num): int {
        $stringNumeros =strval($num);
        return strlen($stringNumeros); 
    }

    function digitoN (int $num , int $pos): int {
        $stringDeNumeros = strval($num);
        $stringPos = ord($stringDeNumeros[$pos]);
        $stringNum= chr($stringPos); 
        return $numDeLaPosi = intval($stringNum);

    }

    function quitaPorDetras (int $num , int $cant): int {
        $stringDeNumeros = strval($num);
        $pos= strlen($stringDeNumeros) - $cant;
        $stringNuevo = substr_replace($stringDeNumeros,"", $pos, $cant);
        return $numFinal = intval($stringNuevo);
    }

    function quitaPorDelante (int $num , int $cant): int {
        $stringDeNumeros = strval($num);
        $stringNuevo = substr_replace($stringDeNumeros,"",0,$cant);
        return $numFinal = intval($stringNuevo);
    }


?>