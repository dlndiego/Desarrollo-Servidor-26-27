<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <h6>El usuario o la contraseña son incorrectos.</h6>
        <p>Le redigiremos en 5 segundos ...</p>
    </article>
    <?php
        header("Refresh:5; url=login.php");
        exit();
    ?>
</body>
</html>