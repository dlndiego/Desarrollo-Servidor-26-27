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
            <h1>ejcookies.php</h1>
        </header>
        <main>
            <p>
                Realizar una aplicación que compruebe si existe la cookie “user” tiene datos, vuestro
                nombre, en caso de estar vacia que la cree con una caducidad de 1000. En la siguiente
                ejecución debe de aparecer vuetros nombre en el navegador.
            </p>
        </main>

        <article class="form1">
            <div>
                <form method="get" action="compruebaForm.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">USUARIO</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">CONTRASEÑA</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="passw">
                    </div>
                    <div class="mb-3 form-check">
                        <div id="emailHelp" class="form-text">Porfavor, esciba el USUARIO y la CONTRASEÑA </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </article>

    </section>



</body>

</html>