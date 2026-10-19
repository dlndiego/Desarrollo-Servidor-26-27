
<?php
session_start();

if(!isset($_SESSION['loginusu'])){
    header("Location:login.php");
    exit();
}
?>
<link rel="stylesheet" href="css/index.css">
<nav>
    <a href="index.php" class="active">INDEX</a>
    <a href="pag1.php">PAG 1</a>
    <a href="pag2.php">PAG 2</a>
</nav>