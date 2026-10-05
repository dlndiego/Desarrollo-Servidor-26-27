<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="css/stylees.css">
</head>
<body>
   <section>
        <header>
            <h1>Datos del Cliente</h1>
        </header>
        <main>
            <p>
                Aqui vamos a mostrarte tus datos: 
            </p>
            <?php
            //var_dump($_POST);
                $aux ="";
                $nombres = $_POST["nomCompl"];
                $mail = $_POST["email"];
                $url = $_POST["url"];
                $sexo = $_POST["radioDefault1"];
                $numConv = $_POST["number"];
                $check = $_POST["check"];
                $lengaue = $_POST["eleccion"];

                foreach($check as $valor){
                    $aux .= $valor . " ";
                }    # code...
                

                echo"<table>
                <tr>
                    <td class='datos'>INFO </td>
                    <td class='datos'>DATO </td>
                </tr>
                <tr>
                    <td class='datos'>NOMBRE</td>
                    <td class='datos'>$nombres</td>
                </tr>
                <tr>
                    <td class='datos'>MAIL</td>
                    <td class='datos'>$mail</td>
                </tr>
                <tr>
                    <td class='datos'>URL</td>
                    <td class='datos'>$url</td>
                </tr>
                <tr>
                    <td class='datos'>SEXO</td>
                    <td class='datos'>$sexo</td>
                </tr>
                <tr>
                    <td class='datos'>NUMERO DE CONVIVIENTES</td>
                    <td class='datos'>$numConv</td>
                </tr>
                <tr>
                    <td class='datos'>HOBBIES</td>
                    <td class='datos'>$aux</td>
                </tr>
                <tr>
                    <td class='datos'>LENGUAJES</td>
                    <td class='datos'>$lengaue</td>
                </tr>
                </table>"; 
            ?>
        </main>
    </section>
</body>
</html>