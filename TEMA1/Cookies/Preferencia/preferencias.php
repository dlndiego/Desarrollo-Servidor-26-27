<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <title>ejcookies.php</title>
</head>

<body>
    <section>
        <header>
            <h1>preferencias.php</h1>
        </header>
        <main>
            <p>
                • preferencias.php con un formulario que le pida al usuario su nombre y su color
                favorito (a elegir de una lista desplegable, o con el control input type=”color” de
                HTML5). El formulario deberá enviarse a guarda_prefs.php.
                • guarda_prefs.php que recogerá los datos del formulario anterior, y los guardará
                en dos cookies llamadas nombreusu y colorusu, con 5 minutos de duración. Esta
                página redirigirá (con header) a la página index.php una vez almacenadas las
                cookies.
                • index.php que, si hay cookies guardadas del usuario, mostrará una página con el
                color de fondo preferido y un mensaje personalizado de bienvenida (por ejemplo,
                “Bienvenido, Pepe”). Si no hay cookies guardadas, mostrará una página confondo
                blanco y el mensaje “Página de inicio”. En cualquiera de los dos casos, habrá un
                enlace para ir al formulario preferencias.php.
                • Añade una página borrar_prefs.php que elimine las preferencias (cookies) del
                usuario actual, y redirija a index.php. Pon un enlace "Borrar preferencias
                " en el index.php que llame a esta página, pero que se muestre sólo cuando el
                usuario actual tenga preferencias guardadas
            </p>
        </main>

        <article class="form1">
            <div>
                <form method="get" action="guarda_prefs.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">USUARIO</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
                    </div>
                    <div class="form-field">
                        <label for="fieldSelect" class="form-label">COLOR</label>
                        <br>
                        <input type="color" name="color">
                    </div>
                    <div class="mb-3 form-check">
                        <div id="emailHelp" class="form-text">Porfavor, esciba el USUARIO y elija el color </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </article>

    </section>



</body>

</html>