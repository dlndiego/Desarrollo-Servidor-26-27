<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_FILES['imagen'])) {
    header("Location: subidaImagen.php");
    exit;
}

$imagen = $_FILES['imagen'];

if ($imagen['error'] !== UPLOAD_ERR_OK) {
    echo "<p>Error en la subida. Código: " . $imagen['error'] . "</p>";
    header("Refresh: 5; URL=subidaImagen.php");
    exit;
}

$tipo = $imagen['type'];

if (str_contains($tipo, 'png') || str_contains($tipo, 'jpeg') || str_contains($tipo, 'jpg')) {
    $nombre  = preg_replace('/[^A-Za-z0-9._-]/', '_', $imagen['name']);
    $destino = __DIR__ . "/imgSubidas/" . $nombre;

    if (move_uploaded_file($imagen['tmp_name'], $destino)) {
        header("Location: imagenRapido.php?img=" . urlencode($nombre));
        exit;
    } else {
        echo "<p>Error al guardar el archivo.</p>";
        header("Refresh: 5; URL=subidaImagen.php");
    }
} else {
    echo "<p>Error: El archivo subido no es una imagen.</p>";
    header("Refresh: 5; URL=subidaImagen.php");
}
