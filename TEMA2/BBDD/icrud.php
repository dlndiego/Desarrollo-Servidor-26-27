<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$accion = '';
if (isset($_REQUEST['insertar'])){
    $accion = 'insertar';
}else if(isset($_REQUEST['borrar'])){
    $accion = 'borrar';
} else if (isset($_REQUEST['editar'])){
    $accion = 'edit';
}
switch($accion){
    case 'insertar':
        insertar();
        //redirigimos a Index.php
        header('Location:index.php');
        break;
    case 'borrar':
        borrar($_REQUEST["borrar"]);
        header("Location:index.php");
        break;
    case 'edit':
        editar($_REQUEST['editar']);
       header("Location:index.php");
        break;
    default:
        echo "No se recibieron datos conocidos.";
        break;
}


function insertar(){
    include("db.php");
    if(isset($_REQUEST)){
        $insercion = $pdo->prepare("INSERT INTO videojuego(titulo, genero, precio) VALUES(:titulo, :genero, :precio)");
        $insercion->bindParam(':titulo', $_REQUEST['titulo']);
        $insercion->bindParam(':genero', $_REQUEST['genero']);
        $insercion->bindParam(':precio', $_REQUEST['precio']);
        $insercion->execute();
   
    }
}
function borrar($id){
        include('db.php');  
        try{
            if (isset($_REQUEST)) {
                $sql = "DELETE FROM videojuego WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['id' => $id]);
            }
        }catch(\PDOException $e){
            echo "Error: " . $e->getMessage();
        }
}
function editar($id){
    include('db.php'); 
    var_dump($id);
    var_dump($_REQUEST['titulo2']); 
    try{
        $sql = "UPDATE videojuego SET titulo = :titulo,genero = :genero,precio = :precio WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $_REQUEST['titulo2'],'genero' => $_REQUEST['genero2'], 'precio' => $_REQUEST['precio2'] ,'id' => $id]);

    }catch(\PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>
