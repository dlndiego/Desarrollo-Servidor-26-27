<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="CSS/total.css">
</head>
<body>
    <head><h1>Inicio de sesion</h1></head>
    <form action="procesar.php" method="post">
        <label for="">Email:</label>
        <?php 
            if(isset($_COOKIE["email_guardado"])){
                $value = $_COOKIE["email_guardado"];
            }else{
                $value = "";
            } 
        ?>
        <input type="text" name="mail" value=<?= $value?>> 
        <label for="">Recordar Email?</label>
        <input type="checkbox" name="recordar">
        <label for="">Contraseña:</label>
        <input type="password" name="passw" >
        <input type="submit">
    </form>
</body>
</html>