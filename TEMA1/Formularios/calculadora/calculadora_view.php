<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA</title>
    <link rel="stylesheet" href="css/stylees.css">
</head>
<body>
    <section>
        <header>
            <h1>VISTA</h1>
        </header>
        <main>
            <p>
                Aqui vamos a mostrarte las operaciones de los datos suministrados: 
            </p>
            <?php
                include("logica.php"); 
                echo"<table>
                <tr>
                    <td class='datos'>DATO 1 </td>
                    <td class='datos'>DATO 2 </td>
                </tr>
                <tr>
                    <td class='datos'>$x</td>
                    <td class='datos'>$y</td>
                </tr>
                </table>" 
            ?>
        </main>
        <article class="server">           
            <h2>DATOS DE [$SERVIDOR]</h2>
            <P>Aqui mostraremos todos los valores de SERVER</P>
            <?php
                include("logica.php");
                //Mostramos todos los datos del array $_SERVER.
                echo "<table>";
                echo "<tr><th>Instruccion</th><th>Resultado</th></tr>";
                foreach ($_SERVER as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </article>  
        <article>
            <div>
                <?php
                    include("logica.php");
                    echo "<h3>DATOS DE LA PETICION</h3>";
                    echo "<p>El ordenador que hace la peticion es: ".$_SERVER['REMOTE_ADDR']."</p>";
                    echo "<p>Los parametros de la peticion estan en la variable: ".$_SERVER['QUERY_STRING']."</p>";
                    echo "<p>La ruta del sitio web en el ordenador local es: ".$_SERVER['DOCUMENT_ROOT']."</p>";
                ?>
            </div>
        </article>
        <article>
            <div>
                <?php
                    include("logica.php");
                    //CREAMOS UNA TABLA CON LOS RESULTADOS DE LA OPERACIONES
                    echo "<h3>OPERACIONES</h3>";
                    echo "<table>";
                    echo "<tr><th>Operación</th><th>Resultado</th></tr>";
                    echo "<tr>";
                    echo "<td>Suma</td>";
                    echo "<td>".$x." + ".$y." = ".($x+$y)."</td>";
                    echo "<tr>";
                    echo "<td> Resta</td>";
                    echo "<td>".$x." - ".$y." = ".($x-$y)."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> Multiplicacion</td>";
                    echo "<td>".$x." * ".$y."=".($x*$y)."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> Division</td>";
                    echo "<td>".$x." / ".$y."=".($x/$y)."</td>";
                    echo "</tr>";
                ?>
            </div>
        </article>
    </section>
</body>
</html>
