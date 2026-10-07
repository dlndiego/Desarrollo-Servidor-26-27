<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubidaImagen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <section>
        <header>
            <h1>
                Subida Imagen
            </h1>
        </header>
        <main>
            <form method="post" action="vista.php">
                <div class="mb-3" >
                    <button type="submit"  class="btn btn-primary" >Ver todas las imagenes</button> 
                </div>
            </form>
            <p>
                Crea un formulario que permita subir unicamente imágenes (comprueba la propiedad type del
                archivo subido). Si el usuario selecciona otro tipo de archivos, se le debe informar del error y
                permitir que suba un nuevo archivo.
                En el caso de subir el tipo correcto, visualizar la imagen durante 5 segundos,con la ruta y nombre, tamaño de anchura y altura y redirecciona al formulario. También hay que crear un enlace
                para mostrar el listado de todas las imagenes subidas.(analiza/estudia el método scandir()).
            </p>
        </main>
        <article>
            <form method="post" action="logica.php" enctype="multipart/form-data">
                <div class="mb-3" >
                    <label for="exampleInputEmail1" class="form-label">Selecciona una imagen:</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <input type="file" name="imagen">
                    <BR></BR>
                    <button type="submit"  class="btn btn-primary" >Subir foto</button>
                </div>
            </form>    
        </article>
    </section>
</body>

</html>