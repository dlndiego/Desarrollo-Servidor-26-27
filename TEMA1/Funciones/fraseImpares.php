<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impares</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>fraseImpares.php</h1>
    <p>Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.</p>
    <div>
        <?php
            $textoCompleto= "La casa de mi tio esta a tope";
            $textImpares = impares($textoCompleto);
            echo"<table>";
            echo"<tr>";
            echo"<td class='INFO'>FRASE PRESENTADA</td>";
            echo"<td class='INFO'>FRASE CON INPARES</td>";
            echo"</tr>"; 
            
            echo"<tr>";
            echo"<td class='PHP'>$textoCompleto</td>";
            echo"<td class='PHP'>$textImpares</td>";
            echo"</tr>";
            echo"</table>";
        ?>
    </div>
</body>
</html>

<?php
    function impares($textoCompleto){
        $textImpar= " ";
        for($i=0;$i < strlen($textoCompleto);$i++){ 
            if($i % 2 != 0){
                $textImpar.=$textoCompleto[$i];
            }
        }
        return $textImpar;
    }

?>