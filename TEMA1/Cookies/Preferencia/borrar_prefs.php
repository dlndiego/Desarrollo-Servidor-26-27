<?php
//borramos las cookies y redirigimos a index.php
setcookie("usuario", time() - 300);
setcookie("color", time() - 300);
header("Location:index.php");
?>