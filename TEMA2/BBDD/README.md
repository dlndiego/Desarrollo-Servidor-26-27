# BBDD
> [!warning]
>Este `.md` es informativo, es decir, voy a explicar >los procedimientos que realizo en estos apartados. 

Para crear una **BD** en **PHP** hay que realizar los siguientes pasos:

```PHP
$host = "localhost"; //Host del usuario
$nombreBD = "videojuegos"; //Nombre de la BD
$usuario = "root"; //Name de USU    $password = ""; // PASWRD 
$pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario,$password);
//^ Creamos el PHP
```

Si lo queremos hacer mas seguro tenemos que hacer lo siguiente: 

```php
<?php
$host = "IP_del_Servidor";
$nombreBD = "videojuegos";
$usuario = "root";
$password = "";
try {
$pdo = new PDO(
"mysql:host=$host;dbname=$nombreBD;charset=utf8mb4",
$usuario,
$password
);
// Hace que PDO lance excepciones cuando ocurre un error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión realizada correctamente.";
} catch (PDOException $e) {
echo "Error de conexión: " . $e->getMessage();
}
?>
```

> [!NOTE]
>- PDO::ATTR_ERRMODE indicándole a PHP que queremos un reporte de errores.
>- PDO::ERRMODE_EXCEPTIONcon este atributo obligamos a que lance excepciones, además de
>ser la opción más humana y legible que hay a la hora de controlar errores.
>
>Cualquier error que se lance a través de PDO, el sistema lanzará una **PDOException.**

---

**Ejecutar INSTRUCCIONES**

Debemos usar = `$variable = $BD -> prepare("INSTRUCCION");`
Y ejecutarla con : `$variable -> execute();`

**Parametizar OPERACIONES**

Lo normal es que no hagamos operaciones con todos los datos fijos, sino que parte de la query dependa de ciertos parámetros externos (datos que nos llegan de un formulario, por ejemplo).

- Hay 3 formas de hacerlo: 
    1. Primero creamos las variables con los valores a meter en el insert, luego en el insert poenmos `?` y con **bindParam()** asignamos el valor como muestro aqui:

    ```php
        $titulo="WWII";
        $genero="Bélico";
        $precio=12.2;
        $consulta = "INSERT INTO videojuegos(titulo, genero, precio) VALUES(?, ?,
        ?)";
        $insercion = $pdo->prepare($consulta);
        $insercion->bindParam (1, $titulo);
        $insercion->bindParam (2, $genero);
        $insercion->bindParam (3, $precio);
        $insercion->execute();
    ```
    2. Tenemos otra manera, metiendo en el INTO directamente los nombres que queramos, pero, luego en el **bind**, deberemos poner el *mismo* nombre, es decir:
    ```php
        $sql = "INSERT INTO videojuegos (nombre, genero, precio)
        VALUES (:nombre, :genero, :precio)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':precio', $precio);
        $stmt->execute();
    ```
    3. Tambien tenemos una forma de coger los datos de un ***formulario*** directamente en el **bindParam()** con `$_REQUEST(['deded'])` de esta manera:
    ```php
        $insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio
        ).VALUES(:titulo, :genero, :precio)");
        $insercion->bindParam(':titulo', $_REQUEST['titulo']);
        $insercion->bindParam(':genero', $_REQUEST['genero']);
        $insercion->bindParam(':precio', $_REQUEST['precio']);
        $insercion->execute();
    ```
    **EXTRA.** Podemos meterlo en un array y automaticamente el lo organiza todo de esta manera:
    ```php
        $insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio
        ) VALUES(:titulo, :genero, :precio)");
        $videojuegos = array ( "Done to Zen", "Belica", 23.6);
        $insercion->execute($videojuegos);
    ```