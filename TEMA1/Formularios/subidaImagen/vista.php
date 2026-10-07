<?php
$carpeta    = __DIR__ . "/imgSubidas";
$permitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

$imagenes = [];
foreach (scandir($carpeta) as $archivo) {
    $ext = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

    if (is_file("$carpeta/$archivo") && in_array($ext, $permitidas)) {
        $imagenes[] = $archivo;
    }
}
$total = count($imagenes);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/vista.css">
    <link rel="stylesheet" href="css/vista.css">
    <title>Galería</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg barra-nav">
            <div class="container">
                <a class="navbar-brand marca" href="vista.php">Galería</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link boton-subir" href="subidaImagen.php">Subir imagen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container contenido">
        <section class="cabecera">
            <h1>Tus imágenes</h1>
            <p><?= $total ?> <?= $total === 1 ? 'archivo' : 'archivos' ?> en la galería</p>
        </section>

        <?php if (empty($imagenes)): ?>
            <div class="vacio">
                <p class="vacio-titulo">Todavía no hay imágenes</p>
                <p>Sube tu primera imagen para verla aquí.</p>
                <a class="boton-subir" href="subidaImagen.php">Subir imagen</a>
            </div>
        <?php else: ?>
            <section class="row g-3 g-lg-4">
                <?php foreach ($imagenes as $img): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <a class="foto" href="imagenRapido.php?img=<?= urlencode($img) ?>">
                            <img src="imgSubidas/<?= rawurlencode($img) ?>"
                                alt="<?= htmlspecialchars($img) ?>"
                                loading="lazy">
                            <span class="foto-nombre"><?= htmlspecialchars($img) ?></span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>
    </main>
</body>

</html>