<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>contador.php</h1>
    <p>
        Crea una página llamada contador.php. Crea una función llamada cuenta($a, $b
        ) que reciba dos parámetros y vaya contando de un número al otro, separando los
        números por comas. Después, pruébala en el código PHP haciendo que cuente del 10
        al 20.
    </p>
    <div>
        <span>
        <?php
            echo contar(10,20);
            function contar($inicio,$fin) {
                for ($i=$inicio; $i <= $fin ; $i++) { 
                    if ($i < $fin) {
                        echo "".$i. " , ";
                    }else{
                        echo "".$i. " .";
                    }    
                
                }


            }

        ?>
        </span>
    </div>
    
</body>
</html>