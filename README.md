# Desarrollo-Servidor-26-27
Este es el GITHUB de la asignatura de Desarrollo de Servidor 26/27
## TEMA 1
#### `Ejercicio 1`
Para este ejercicio, crea un documento en esta carpeta llamado info_basica.php, similar al del ejemplo anterior, pero mostrando tu nombre y tu año de nacimiento usando variables. Es decir, crearás dos variables para almacenar estos dos datos, y los
mostrarás en una frase que diga “Me llamo XXXX y nací en el año YYYY”.
Prueba la página en un navegador y echa un vistazo al código fuente, intentando detectar qué contenidos HTML se han generado desde PHP.

- Codigo del primer ejercicio: 
```php 
<!DOCTYPE html>
<html lang="es">
<head>
...
</head>
<body>
<h1>Página de prueba en PHP</h1>
<?php
// Variables para almacenar el nombre y el año actual
$nombre = "Diego De Leon";
$anyo = 2007;
?>
<p>El autor de esta página es <?php echo $nombre; ?> y está
realizada en el año <?php echo $anyo; ?>.</p>
```
Y esto quedaria asi: 

![Foto Ejercicio 1]()
![alt text](/TEMA1/img/image.png)