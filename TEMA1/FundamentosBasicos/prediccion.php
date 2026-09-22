<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>Prediccion</h1>
    <Span>
        <?php
            $num1 = 3;
            $num2 = 5;
            $num3 = 8;
            $num1 *= 4;
            echo $num1 . " ";//12
            echo $num1 <= $num2;//false
            echo $num3 > $num1 and $num3 > $num2;//false
            echo $num3 > $num1 or $num3 > $num2;
            echo " ";//true
            echo $num1 > $num2 xor $num1 > $num3;//false, XOR = true + true = false
            $num3--;//7
            echo $num3." ";//7
            $num3 += $num1;
            echo $num3 . " ";//19
        ?>
    </Span>
    

</body>
</html>