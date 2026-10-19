<?php
// Iniciar sesión SIEMPRE en la primera línea antes de cualquier etiqueta HTML
session_start();

if (!isset($_SESSION['alumnos'])) {
    $_SESSION['alumnos'] = [];
}

// Procesar el formulario solo cuando se envíe mediante POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    $calcularMedia = ($_POST["mates"] + $_POST["caste"] + $_POST["ingles"] + $_POST["musica"]) / 4;
    $nuevoAlumno = [
        $_POST["nombre"],
        $_POST["mates"],
        $_POST["caste"],
        $_POST["ingles"],
        $_POST["musica"],
        $calcularMedia
    ];
    $cont = 0;
    $_SESSION['alumnos'][] = $nuevoAlumno;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Notas</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="main-container">

        <!-- Formulario -->
        <div class="form-container">
            <h2>Registro de Calificaciones</h2>
            <p class="subtitle">Introduce el nombre del alumno y sus notas correspondientes.</p>

            <form action="calificaciones.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Ana García" required>
                </div>

                <div class="grades-grid">
                    <div class="form-group">
                        <label for="mates">Matemáticas</label>
                        <input type="number" id="mates" name="mates" min="0" max="10" step="0.1" placeholder="0 - 10" required>
                    </div>

                    <div class="form-group">
                        <label for="caste">Castellano</label>
                        <input type="number" id="caste" name="caste" min="0" max="10" step="0.1" placeholder="0 - 10" required>
                    </div>

                    <div class="form-group">
                        <label for="ingles">Inglés</label>
                        <input type="number" id="ingles" name="ingles" min="0" max="10" step="0.1" placeholder="0 - 10" required>
                    </div>

                    <div class="form-group">
                        <label for="musica">Música</label>
                        <input type="number" id="musica" name="musica" min="0" max="10" step="0.1" placeholder="0 - 10" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Guardar Notas</button>
            </form>
        </div>

        <!-- Tabla de Resultados -->
        <div class="form-container table-container">
            <h2>Alumnos Registrados</h2>
            <?php if (!empty($_SESSION['alumnos'])): ?>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Matemáticas</th>
                            <th>Castellano</th>
                            <th>Inglés</th>
                            <th>Música</th>
                            <th>Media</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['alumnos'] as $alumno): ?>
                            <tr>
                                <?php foreach ($alumno as $dato): ?>
                                    <td><?= htmlspecialchars($dato) ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="empty-msg">No hay alumnos registrados todavía.</p>
            <?php endif; ?>
            <form action="calificaciones.php" method="POST">
                <button type="submit" class="btn-borrar" name="borrar">Borrar Sesiones</button>
                <?php
                    if(isset($_POST['borrar'])) {
                        session_destroy();
                    }
                ?>
            </form>
        </div>

    </section>

</body>

</html>