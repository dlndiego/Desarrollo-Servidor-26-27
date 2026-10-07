<?php
// La lógica va ANTES del HTML: header() solo funciona si aún no se ha enviado nada.
$nombre = basename($_GET['img'] ?? '');
$ruta   = __DIR__ . "/imgSubidas/" . $nombre;
$existe = $nombre !== '' && is_file($ruta);

header("Refresh: 5; URL=subidaImagen.php");

if ($existe) {
    [$ancho, $alto] = getimagesize($ruta);
    $nombreSeguro = htmlspecialchars($nombre);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de la imagen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/imagenRapido.css">
</head>
<body>
    <main class="tarjeta">
        <?php if ($existe): ?>
            <h1 class="titulo">Imagen subida</h1>

            <figure class="marco">
                <img src="imgSubidas/<?= $nombreSeguro ?>" alt="<?= $nombreSeguro ?>">
            </figure>

            <table class="tabla">
                <caption>Detalles del archivo</caption>
                <tbody>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?= $nombreSeguro ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ruta</th>
                        <td><code>imgSubidas/<?= $nombreSeguro ?></code></td>
                    </tr>
                    <tr>
                        <th scope="row">Tamaño</th>
                        <td><?= $ancho ?> × <?= $alto ?> px</td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <h1 class="titulo">No se ha encontrado la imagen</h1>
            <p class="aviso">Sube una imagen desde el formulario para verla aquí.</p>
        <?php endif; ?>

        <footer class="pie">
            <div class="barra" aria-hidden="true"><span></span></div>
            <p>Volviendo al formulario en 5 segundos. <a href="subidaImagen.php">Volver ahora</a></p>
        </footer>
    </main>
</body>
</html>