<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>analizador.php</h1>
    <p>EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.</p>
    <div>
        <?php
        $frase= "LA VACA LOLA NO MOLA NADA PERO ES MUY BONITA";
        convertirEnCani($frase);
        ?>
    </div>
</body>
</html>

<?php

function convertirEnCani($frase){
    $aleatorio = 0;   
    $fraseCani = ""; 
    for ($i=0; $i <strlen($frase); $i++) { 
        $aleatorio = rand(0,1);
        if($aleatorio == 0){
            $fraseCani .=strtolower($frase[$i]);
        }else{
            $fraseCani.= $frase[$i];
        }        
    }
    echo"<table>";
    echo "<tr>";
    echo "<td class='INFO'> FRASE NORMAL </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class='PHP'> $fraseCani </td>";
    echo "</tr>";
    echo "</table>";

} 

?>