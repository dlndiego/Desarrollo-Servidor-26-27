<?php
// session_start debe ser SIEMPRE lo primero antes de cualquier HTML
session_start();

// 1. Lógica para borrar el carro cuando se presiona el botón
if (isset($_GET["borrar"])) {
    session_unset();
    session_destroy();
    header("Location: carro.php");
    exit();
}

// 2. Inicializar los arrays de la sesión si no existen
if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}
if (!isset($_SESSION["precio"])) {
    $_SESSION["precio"] = [];
}

// 3. Capturar productos de la URL
if (isset($_GET["nombre"]) && isset($_GET["precio"])) {
    $_SESSION["productos"][] = $_GET["nombre"];
    $_SESSION["precio"][] = $_GET["precio"];
    // Redirección para evitar que se añada el mismo producto si el usuario recarga la página
    header("Location: carro.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Store — Carrito</title>
    <link rel="stylesheet" href="css/carro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header class="nike-header">
        <div class="logo">NIKE</div>
        <nav>
            <a href="carro.php">Inicio</a>
            <a href="carro.php">Zapatillas</a>
            <a href="carro.php">Ropa</a>
            <a href="carro.php?borrar=1" class="nav-logout">Cerrar Sesión</a>
        </nav>
    </header>

    <main class="store-container">
        <section class="store-grid">
            
            <!-- Lista de Productos -->
            <article class="card">
                <h3>Catálogo de Productos</h3>
                <ul class="product-list">
                    <li>
                        <span>Zapatillas Nike</span>
                        <a href="carro.php?nombre=Zapatillas+Nike&precio=60" class="btn-add">60 € — Añadir</a>
                    </li>
                    <li>
                        <span>Sudadera Domyos</span>
                        <a href="carro.php?nombre=Sudadera+Domyos&precio=15" class="btn-add">15 € — Añadir</a>
                    </li>
                    <li>
                        <span>Pala de pádel Vairo</span>
                        <a href="carro.php?nombre=Pala+de+p%C3%A1del+Vairo&precio=50" class="btn-add">50 € — Añadir</a>
                    </li>
                    <li>
                        <span>Pelota de baloncesto Molten</span>
                        <a href="carro.php?nombre=Pelota+de+baloncesto+Molten&precio=20" class="btn-add">20 € — Añadir</a>
                    </li>
                </ul>
            </article>

            <!-- Resumen de Compra -->
            <article class="card">
                <h4>Tu Cesta</h4>
                
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th class="text-right">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        for ($i = 0; $i < count($_SESSION["productos"]); $i++) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($_SESSION["productos"][$i]) . "</td>";
                            echo "<td class='text-right'>" . htmlspecialchars($_SESSION["precio"][$i]) . " €</td>";
                            echo "</tr>";
                            $total += (float)$_SESSION["precio"][$i];
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td class="text-right total-price"><strong><?= $total ?> €</strong></td>
                        </tr>
                    </tfoot>
                </table>

                <form action="carro.php" method="GET">
                    <button type="submit" name="borrar" value="1" class="btn-delete">Vaciar Cesta</button>
                </form>
            </article>

        </section>
    </main>
</body>

</html>