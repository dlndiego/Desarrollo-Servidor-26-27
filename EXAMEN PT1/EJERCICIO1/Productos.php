<?php

class Productos
{
    private $datosDeEntrada = [];
    private $clasificacion = "";

    public function __construct($datosDeEntrada)
    {
        if ($datosDeEntrada != null) {
            $this->datosDeEntrada = $datosDeEntrada;
        }
    }

    public function calcularTotal()
    {
        $total  = 0;
        foreach ($this->datosDeEntrada as $name) {
            $total += $name["precio"];
        }
        return $total;
    }
    public function obtenerCategorias()
    {
        $flag = false;
        $categoria = "";
        $categorias = [];
        foreach ($this->datosDeEntrada as $pos => $cat) {
            if ($pos == 1) {
                $categoria = $cat["categoria"];
                $categorias[] = $categoria;
            } else {
                $categoria = $cat["categoria"];

                for ($i = 0; $i < count($categorias); $i++) {
                    if ($categorias[$i] != $categoria) {
                        $categorias[] = $categoria;
                        break;
                    }
                }
            }
        }
        for ($i=0; $i < count($categorias); $i++) { 
            echo $categorias[$i] . "   ";
        }

    }

    public function buscarProductoPorId($id){
        foreach ($this->datosDeEntrada as $pos => $cat) {
            if($cat["id"] == $id){
                echo $cat["id"] ."   " . $cat["nombre"] ." ". $cat["precio"];
            }
        }
    }

    public function obtenerProductos(){
        foreach ($this->datosDeEntrada as $pos => $cat) {
            echo $cat["nombre"] ."  ";
        }

    }

    public function __toString(){
        $estado = "";
        echo "<table>";
        echo "<tr>";
        echo "<td>ID</td><td>NOMBRE</td><td>PRECIO</td><td>STOCK</td><td>CATEGORIA</td><td>ESTADO</td>";
        echo "</tr>";
        foreach ($this->datosDeEntrada as $pos => $cat) {
            if ($cat["stock"] == 0) {
                $estado = "Agotado";
            }else if ($cat["stock"] <= 3){
                $estado = "Stock Bajo";
            }else{
                $estado= "Disponible";
            }
            echo "<tr>";
            echo "<td>".$cat["id"]."</td>"."<td>".$cat["nombre"]."</td>"."<td>".$cat["precio"]."</td>"."<td>".$cat["stock"]."</td>"."<td>".$cat["categoria"]."</td>"."<td>".$estado."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
$array = [["id" => 1, "nombre" => "Portátil Gaming", "precio" => 1199.99, "stock" => 10, "categoria" => "Electrónica"], ["id" => 2, "nombre" => "Ratón Inalámbrico", "precio" => 45.50, "stock" => 3, "categoria" => "Electrónica"], ["id" => 3, "nombre" => "Teclado Mecánico", "precio" => 89.90, "stock" => 0, "categoria" => "Electrónica"], ["id" => 4, "nombre" => "Silla de Oficina", "precio" => 150.00, "stock" => 7, "categoria" => "Muebles"], ["id" => 5, "nombre" => "Cafetera Express", "precio" => 79.95, "stock" => 12, "categoria" => "Electrodomésticos"]];
$producto = new Productos($array);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/total.css">
</head>

<body>
    <HEADER>
        <h2>Panel de Inventario</h2>
    </HEADER>
    <section>
        <article>
        <div>
            <h3>Total Stock</h3>
            <h5><?php echo $producto->calcularTotal(); ?></h5>
        </div>
        </article>
        <article>
            <div>
                <h3>Categorias</h3>
                <h5><?php $producto->obtenerCategorias(); ?></h5>
            </div>
        </article>
        <article>
            <?php
                $producto->__toString();
            ?>
        <article>
    </section>

    

</body>

</html>