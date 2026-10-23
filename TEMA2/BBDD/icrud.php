<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$accion = '';
if (isset($_REQUEST['insertar'])){
    $accion = 'insertar';
}else if(isset($_REQUEST['borrar'])){
    $accion = 'borrar';
}

switch($accion){
    case 'insertar':
        insertar();
        //redirigimos a Index.php
        header('Location:index.php');
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
?>
