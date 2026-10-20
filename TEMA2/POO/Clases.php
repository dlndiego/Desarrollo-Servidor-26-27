<?PHP
include("Estudiante.php");

$alu1 = new Estudiante(5, "56322754G","Diego","fhwfwf@gmail.com");
$alu2 = new Estudiante(4, "59313440D","Noemi","noemi@gmail.com");
$alu3 = new Estudiante(3, "56391491L","Caterine","caterine@gmail.com");

$per1 = new Persona("55330718D","Pepe","pepdev3@gmail.com");
$per2 = new Persona("44581759G","Miranda","mirandaw@gmail.com");
$per3 = new Persona("56391491L","Caterine","Caterine@gmail.com");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <header>
            <h1>Clase.php</h1>
            <nav>
                <a href="Clases.php">SMR</a>
                <a href="Clases.php">DAW</a>
                <a href="Clases.php">DAM</a>
                <a href="Clases.php">ASIR</a>
                <a href="Clases.php">ETEC</a>
            </nav>
        </header>
        <article>
            <table>
                <tr>
                    <td>TIPO DE CLASE</td>
                    <td>CLASE ESTANCIADA</td>
                </tr>
                <tr>
                    <td rowspan="3" >ESTUDIANTE</td>
                    <td>$alu1 = new Estudiante(5, "56322754G","Diego","fhwfwf@gmail.com");</td>
                </tr>
                <tr>

                    <td>$alu2 = new Estudiante(4, "59313440D","Noemi","noemi@gmail.com");</td>
                </tr>
                <tr>

                    <td>$alu3 = new Estudiante(3, "56391491L","Caterine","caterine@gmail.com");</td>
                </tr>
                 <tr>
                    <td rowspan="3" >PERSONA</td>
                    <td>$per1 = new Persona("55330718D","Pepe","pepdev3@gmail.com");</td>
                </tr>
                <tr>

                    <td>$per2 = new Persona("44581759G","Miranda","mirandaw@gmail.com");</td>
                </tr>
                <tr>

                    <td>$alu3 = new Estudiante(3, "56391491L","Caterine","caterine@gmail.com");</td>
                </tr>
            </table>
        </article>
        <article>
            <div>
                <table>
                    <tr>
                        <td>CLASE</td>
                        <td>FUNCION</td>
                        <TD>RESULTADO</TD>
                    </tr>
                    <tr>
                        <td>ESTUDIANTE</td>
                        <td>GET</td>
                        <td><?php echo "GETNUM: " .$alu1 ->getNumExp() . " GETDNI: " . $alu1 -> getDNI() . " GETNOMBRE: " .  $alu1 ->getNom() . " GETMAIL: " . $alu1 -> getMail();?></td>
                    </tr>
                    <tr>
                        <td>ESTUDIANTE</td>
                        <td>MOSTRAR</td>
                        <td><?php echo $alu3->mostrar()?></td>
                    </tr>
                      <tr>
                        <td>ESTUDIANTE</td>
                        <td>SETTERS</td>
                        <td><?php  echo "NOMBRE PRINCIPAL: ". $alu2->getNom(); $alu2->setNombre("CARLOS");echo " Ahora hemos cambiado el nombre a Carlos. "; echo " NOMBRE CAMBIADO: ". $alu2->getNom() ?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>CLASE</td>
                        <td>FUNCION</td>
                        <TD>RESULTADO</TD>
                    </tr>
                    <tr>
                        <td>Persona</td>
                        <td>GET</td>
                        <td><?php echo "GETDNI: " .$per1 ->getDNI() . " GETNOMBRE: " . $per1 -> getNom() . " GETMAIL: " .  $per1 ->getMail();?></td>
                    </tr>
                    <tr>
                        <td>PERSONA</td>
                        <td>MOSTRAR</td>
                        <td><?php echo $per1->mostrar()?></td>
                    </tr>
                      <tr>
                        <td>PERSONA</td>
                        <td>SETTERS</td>
                        <td><?php  echo "NOMBRE PRINCIPAL: ". $per2->getNom(); $per2->setNombre("Africa");echo " Ahora hemos cambiado el nombre a Africa. "; echo " NOMBRE CAMBIADO: ". $per2->getNom() ?></td>
                    </tr>
                </table>
            </div>
        </article>
        
    </section>
    
</body>
</html>