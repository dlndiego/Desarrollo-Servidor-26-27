
<?php

$personas = array('Diego' => "Informatico",'Paco' => "Ingeniero",'Juan' => "Obrero");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <article>
        <div>
            <table>
                <tr>
                    <td>CLAVE</td>
                    <td>VALOR</td>
                </tr>
                <?php
                    foreach($personas as $persona => $estudios){
                        echo "<tr>";
                            echo "<td>";
                                echo $persona ;                        
                            echo "</td>";
                            echo "<td>";
                                echo $estudios ;
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </article>
</body>
</html>
