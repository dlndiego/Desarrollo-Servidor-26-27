<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>personas.php</h1>
    <P>
        Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea
        un array de personas, siendo cada persona un array asociativo: [ [‘nombre’=>‘Aitor’, ‘altura’=>182,
        ‘email’=>‘aitor@correo.com’],[…],… ] Posteriormente, recorre el array y muéstralo en una tabla
        HTML
    </P>
    <?php
        $personas = array(array('Diego','1.80cm','diedelnav2@alu.edu.gva.es'),
        array('Dani','1.75cm','danmor5@alu.edu.gva.es'),
        array('Santiago','1.75cm','sanurb@alu.edu.gva.es'),
        array('Jose','1.70cm','jossen@alu.edu.gva.es'),
        array('Marti','1.60cm','martpeña@alu.edu.gva.es'));
    ?>
    <div>
        <table>
              <tr>
                <td class="INFO">NOMBRE</td>
                <td class="INFO">ALTURA</td>
                <td class="INFO">CORREO ELECTRONICO</td>
            </tr>
            <tr>
                <td class="PHP"><?php echo($personas[0][0]); ?></td>
                <td class="PHP"><?php echo($personas[0][1]) ?></td>
                <td class="PHP"><?php echo($personas[0][2]) ?></td>
            </tr>
            <tr>
                <td class="PHP"><?php echo($personas[1][0]) ?></td>
                <td class="PHP"><?php echo($personas[1][1]) ?></td>
                <td class="PHP"><?php echo($personas[1][2]) ?></td>
            </tr>
            <tr>
                <td class="PHP"><?php echo($personas[2][0]) ?></td>
                <td class="PHP"><?php echo($personas[2][1]) ?></td>
                <td class="PHP"><?php echo($personas[2][2]) ?></td>
            </tr>
            <tr>
                <td class="PHP"><?php echo($personas[3][0]) ?></td>
                <td class="PHP"><?php echo($personas[3][1]) ?></td>
                <td class="PHP"><?php echo($personas[3][2]) ?></td>
            </tr>
            <tr>
                <td class="PHP"><?php echo($personas[4][0]) ?></td>
                <td class="PHP"><?php echo($personas[4][1]) ?></td>
                <td class="PHP"><?php echo($personas[4][2]) ?></td>
            </tr>
        </table>
    </div>
</body>
</html>