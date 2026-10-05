<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <title>calculadora.php</title>
</head>
<body>
    <section>
        <header>
             <h1>calculadora.php</h1>
        </header>
        <main>
            <p>
                Escribe un programa calculadora.php que acepte por la dirección las variables $x y $y y que:
                Muestra por pantalla:
                • El valor del array $_GET (utiliza la función print_r())
                • La suma, resto, multiplicación y división de x e y.
                • El valores de la variable $_SERVER.
                • ¿Cual es el ordenador que hace la petición?
                • En qué variable están los parámetros de la petición.
                • ¿Qué es la ruta del sitio web en el ordenador local ?
                • Utilitza una vista para mostrar el resultado. calculadora.view.php
            </p>
        </main>
        
        <article class= "form1">
            <div>
                <form method="get" action="calculadora_view.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">X</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="x">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Y</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="y">
                    </div>
                    <div class="mb-3 form-check">
                        <div id="emailHelp" class="form-text">Porfavor, esciba X y Y</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </article>
        
    </section>

    

</body>
</html>
