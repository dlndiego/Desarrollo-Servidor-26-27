<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="css/info_basica.css">
</head>
<body>
    <h1>CURRICULUM</h1>
    <?php
        $texto_estudios = "SUPERIOR DE DAW, SUPERIOR DE DAM, SUPERIOR DE ASIR";
        $texto_idiomas = "Ingles, Castellano, Valenciano";
        $eleccion = "";
        $texto = "texto_";
    ?>
    <p>Soy diego y tengo los siguientes estudios: <span><?php $eleccion = "estudios"; $texto = "texto_".$eleccion; echo ${$texto}; ?></span></p>
    <p>Los idiomas que yo hablo son: <span><?php $eleccion = "idiomas"; $texto = "texto_".$eleccion; echo ${$texto}; ?></span></p>
  
   