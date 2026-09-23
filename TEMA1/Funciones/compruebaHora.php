<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprueba_hora.php</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>comprueba_hora.php</h1>
    <p>
        Crea una variable de texto con una hora en ella (por ejemplo, “21:30:12”), y luego procésala
        para extraer por separado la hora, el minuto y el segundo, y comprobar si es una hora válida.
        Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos “12:63:11” no debería serlo,
        porque 63 no es un minuto válido.
    </p>
    <div>
          <?php
                $fecha = date("10:59:20");
                $fechaSeparada = explode(":", $fecha);
                echo"<table>";
                echo "<tr>";
                echo "<td class='INFO'>FECHA PRESENTADA</td>";
                echo "</tr>";

                if ($fechaSeparada[0] <= 23 and $fechaSeparada[0] <= 00  or $fechaSeparada[1] >= 00 and $fechaSeparada[1] <= 59 and $fechaSeparada[1] >= 00 and $fechaSeparada[2] <= 59 and $fechaSeparada[2] >= 00) {
                    echo "<tr>";
                    echo "<td class='PHP'> $fecha </td>";
                    echo "</tr>";
                }else{
                    echo "<tr>";
                    echo "<td class='PHP'>EL FORMATO DE LA HORA ES INCORRECTA: (HORA 00 a 23)(MINUTOS 00 a 59)(SEGUNDOS 00 a 59)</td>";
                    echo "</tr>";
                }
                echo"</table>";
            ?>

    </div>
</body>
</html>