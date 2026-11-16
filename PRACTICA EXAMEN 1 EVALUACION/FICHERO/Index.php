<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV</title>
    <link rel="stylesheet" href="CSS/total.css">
</head>

<body>
    <header>
        <h1>PEDIDOS</h1>
        <nav>
            <a href="">HOME</a>
            <a href="">PEDIDOS</a>
            <a href="">VOLVER</a>
        </nav>
    </header>
    <main>
        <article>
            <div>
                <?php
                $fichero = "CSV/pedidos_techmarket.csv";
                $filas = file($fichero);
                $columnas = [];
                ?>
                <table>
                    <?php
                    for ($i = 0; $i < count($filas); $i++) {
                        $columnas = explode(",", $filas[$i]);

                        echo "<tr>";
                        for ($j = 0; $j < count($columnas); $j++) {
                            if ($j == 0 || $j == 2 || $j == 4 || $j == 5) {
                                echo "<td>" . $columnas[$j] . "</td>";
                            }
                        }
                        echo "<tr>";
                    }
                    ?>
                </table>

            </div>
        </article>
    </main>
</body>

</html>