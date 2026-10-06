<?php
$imagen = $_FILES['imagen'] ?? null;
$tipo = $_FILES['imagen']['type'] ?? null;

if (str_contains($tipo, 'png') or str_contains($tipo, 'jpeg') or str_contains($tipo, 'jpg')) {
    $nombre = $_FILES['imagen']['name'];

    if (move_uploaded_file($imagen['tmp_name'], __DIR__ . "/imgSubidas/" . $nombre)) {
        header("URL=imagenRapido.php");
        $destino = __DIR__ . "/imgSubidas/" . $nombre;
        [$ancho, $alto] = getimagesize($destino);
        header("Refresh: 5; URL=subidaImagen.php");
        echo "<img src='imgSubidas/" . htmlspecialchars($nombre) . "' width='300'>";
        echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
        echo "<p>Ruta: imgSubidas/" . htmlspecialchars($nombre) . "</p>";
        echo "<p>Tamaño: $ancho x $alto px</p>";
        echo "<p>Volviendo al formulario en 5 segundos...</p>";
    } else {
        echo "<p>Error al guardar el archivo.</p>";
    }
} else {
    echo "<p>Error: El archivo subido no es una imagen.</p>";
    header("Refresh: 5; URL=subidaImagen.php");
}

?>
