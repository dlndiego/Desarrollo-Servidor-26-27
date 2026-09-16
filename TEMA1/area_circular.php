<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <?php 
        define('PI',3.1416);
        $radio = 3.5;
        $area = PI * (($radio)*2);
    ?>
    <h1>Area del Circulo.</h1>
    <p>El area del Circulo es <span><?php echo ($area) ?></span></p>
</body>
</html>