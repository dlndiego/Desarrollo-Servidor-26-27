<?php
include("Player.php");
class Team
{
    private $name = "";
    private $players = [];
    private $matches = 0;
    private $won = 0;
    private $lost = 0;
    private $tie = 0;
    private $scoreGoals = 0;
    private $concededGoals = 0;

    public function __construct($name, $players, $matches, $won, $lost, $tie, $scoreGoals, $concededGoals)
    {
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }

    public function __toString(){
        echo "<br>";
        echo "Nombre: " . $this->name."<br>";
        echo "Partidos: " . $this->matches."<br>";
        echo "Ganados: " . $this->won."<br>";
        echo "Perdidos: " . $this->lost."<br>";
        echo "Empatados: " . $this->tie."<br>";
        echo "Goles Metidos: " . $this->scoreGoals."<br>";
        echo "Goles en Contra: " . $this->concededGoals."<br>";
        
        echo "<table border='1px solid black'>";
        echo "<tr>";
        echo "<td>name</td><td>birthday</td><td>country</td><td>posicion</td><td>dorsal</td><td>goles</td><td>partidos</td><td>minutos</td><td>amarillas</td><td>rojas</td>";
        echo "</tr>";

        for ($i = 0; $i < count($this->players); $i++) {
            echo "<tr>";
           echo $this->players[$i];

            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASES</title>
    <link rel="stylesheet" href="CSS/total.css">
</head>

<body>
    <h1>Jugadores</h1>
    <article>
        <?php
        $archivo = "CSV/plantillas.csv";
        $filas = file($archivo);
        $arrayaux = [];

        for ($i = 0; $i < count($filas); $i++) {

            $columnas = explode(",", $filas[$i]);
            if (trim($columnas[1]) == "Atlético de Madrid") {
                for ($j = 0; $j < count($columnas); $j++) {
                        if ($j == 4) {
                            $nombre = $columnas[$j];
                        }
                        if ($j == 6) {
                            $fecha = $columnas[$j];
                        }
                        if ($j == 9) {
                            $pais = $columnas[$j];
                        }
                        if ($j == 10) {
                            $dorsal = $columnas[$j];
                        }
                        if ($j == 11) {
                            $posicion = $columnas[$j];
                        }
                        if ($j == 12) {
                            $partidos = $columnas[$j];
                        }
                        if ($j == 16) {
                            $minutos = $columnas[$j];
                        }
                        if ($j == 17) {
                            $goles = $columnas[$j];
                        }
                        if ($j == 18) {
                            $amarillas = $columnas[$j];
                        }
                        if ($j == 19) {
                            $rojas = $columnas[$j];
                        }
                }
                $arrayaux[] = new Player($nombre, $fecha, $pais, $dorsal, $posicion, $goles, $partidos, $minutos, $amarillas, $rojas);
            }
        }




        echo "Jugadores guardados: " . count($arrayaux);

        $equipo = new Team("Equipo", $arrayaux, 34, 2, 30, 2, 100, 23);
        $equipo->__toString();
        ?>
    </article>
</body>

</html>