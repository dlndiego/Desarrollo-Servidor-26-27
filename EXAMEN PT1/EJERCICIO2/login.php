<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/total.css">
</head>
<body>
    <article>
        <h6>AYUDAS</h6>
        <p>USUARIOS: DC Comics o Marvel Comics</p>
    </article>
    <br><br>
        <form action="login.php" method="post">
            <div>
                <label for="">Nombre</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label for="">Contraseña</label>
                <input type="password" name = "pass">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
        <?php
            if ($_POST["nom"] == "DC Comics" && $_POST["pass"] == "1234") {
                session_start();
                $_SESSION["usuario"]=$_POST["nom"];
                header("Location:dc.php");
                exit();
            }
            if ($_POST["nom"] == "Marvel Comics" && $_POST["pass"] == "1234") {
                session_start();
                $_SESSION["usuario"]=$_POST["nom"];
                header("Location:dc.php");
                exit();    
            }else{
                if($_POST["nom"] != ""){
                    header("Location:error.php");
                    exit();   
                }
            }
        ?>

</body>
</html>