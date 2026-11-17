# PHP — Guía práctica de sintaxis y ejemplos

> **Objetivo:** consultar rápidamente **qué escribir, cuándo usarlo y cómo aplicarlo**. Basada en los cinco apuntes proporcionados: PHP básico, funciones, formularios, cookies/sesiones y POO. Los ejemplos son independientes salvo cuando se indican varios archivos.
>
> **Para probarlos:** guarda el código en archivos `.php` y ejecútalos con un servidor PHP (por ejemplo, en la carpeta del proyecto: `php -S localhost:8000`). Abre `http://localhost:8000/archivo.php`. PHP se ejecuta en el servidor, no al abrir el archivo directamente como HTML.

## Índice

1. [PHP básico](#1-php-básico)
2. [Condiciones y bucles](#2-condiciones-y-bucles)
3. [Arrays](#3-arrays)
4. [Errores y excepciones](#4-errores-y-excepciones)
5. [Funciones y archivos](#5-funciones-y-archivos)
6. [Cadenas y fechas](#6-cadenas-y-fechas)
7. [Formularios](#7-formularios)
8. [Cookies y sesiones](#8-cookies-y-sesiones)
9. [POO: clases y objetos](#9-poo-clases-y-objetos)
10. [POO: herencia, métodos mágicos y namespaces](#10-poo-herencia-métodos-mágicos-y-namespaces)
11. [Miniaplicaciones prácticas](#11-miniaplicaciones-prácticas)
12. [Chuleta rápida y errores típicos](#12-chuleta-rápida-y-errores-típicos)

---

## 1. PHP básico

### 1.1 Escribir PHP y mostrar resultados

**Para qué:** generar texto o HTML desde el servidor.

```php
<?php
$nombre = "Ana";
echo "Hola, " . $nombre;  // Hola, Ana
print "¡Bienvenida!";
```

**Mezclar con HTML:**

```php
<?php $precio = 12.5; ?>
<h1>Producto</h1>
<p>Precio: <?= $precio ?> €</p>
```

- `<?php` abre PHP; `?>` lo cierra si necesitas volver a HTML.
- `echo` muestra contenido; `<?= $variable ?>` equivale a `echo`.
- `.` concatena textos; `;` termina instrucciones.
- Comentarios: `// una línea`, `# una línea`, `/* varias líneas */`.

### 1.2 Variables y tipos

```php
$nombre = "Lucía";     // string
$edad = 20;           // int
$altura = 1.72;       // float
$activo = true;       // bool
$sinValor = null;     // null

var_dump($edad);      // int(20): tipo + valor
echo gettype($altura); // double
```

**Conversión de tipos:**

```php
$texto = "25";
$numero = (int) $texto;   // 25
$decimal = (float) "3.5"; // 3.5
$cadena = (string) 10;    // "10"
```

**Variables variables (poco habitual):**

```php
$clave = "ciudad";
$$clave = "Valencia";
echo $ciudad; // Valencia
```

### 1.3 Comprobar variables

```php
$nombre = "";
var_dump(isset($nombre)); // true: existe y no es null
var_dump(empty($nombre)); // true: está vacía
var_dump(is_string($nombre)); // true

unset($nombre); // elimina la variable
```

**Patrón útil para entradas opcionales:**

```php
$nombre = $_GET["nombre"] ?? "Invitado";
```

`??` usa el valor de la derecha si el de la izquierda no existe o es `null`.

### 1.4 Constantes

```php
const IVA = 0.21;
define("APP_NOMBRE", "Mi tienda");

$precio = 100;
echo $precio * (1 + IVA); // 121
```

### 1.5 Operadores esenciales

| Operación | Sintaxis | Ejemplo |
|---|---|---|
| Suma / resta | `+`, `-` | `$a + $b` |
| Multiplicar / dividir | `*`, `/` | `$a * $b` |
| Resto | `%` | `10 % 3` → `1` |
| Potencia | `**` | `2 ** 3` → `8` |
| Incremento | `++` | `$i++` |
| Acumular | `+=`, `-=`, `*=` | `$total += 5` |
| Concatenar | `.` | `"Hola " . $nombre` |
| Añadir texto | `.=` | `$texto .= "!"` |
| Igualdad de valor | `==` | `5 == "5"` → `true` |
| Igualdad estricta | `===` | `5 === "5"` → `false` |
| Distinto estricto | `!==` | `$a !== $b` |
| Mayor / menor | `>`, `<`, `>=`, `<=` | `$edad >= 18` |
| Y / O / NO | `&&`, `||`, `!` | `$edad >= 18 && $activo` |

**Consejo:** prefiere `===` y `!==` para evitar conversiones inesperadas. Usa paréntesis si mezclas operadores.

---

## 2. Condiciones y bucles

### 2.1 `if`, `elseif`, `else`

**Caso:** decidir si un alumno aprueba.

```php
$nota = 7;

if ($nota >= 9) {
    echo "Sobresaliente";
} elseif ($nota >= 5) {
    echo "Aprobado";
} else {
    echo "Suspenso";
}
```

**Ternario para decisiones simples:**

```php
echo $edad >= 18 ? "Mayor de edad" : "Menor";
```

### 2.2 `switch`

**Caso:** mostrar una opción de menú.

```php
$opcion = 2;

switch ($opcion) {
    case 1:
        echo "Crear";
        break;
    case 2:
        echo "Editar";
        break;
    default:
        echo "Opción desconocida";
}
```

`break` evita seguir ejecutando los siguientes `case`.

### 2.3 `for`

**Cuándo:** sabes cuántas repeticiones quieres.

```php
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
// 1 2 3 4 5
```

### 2.4 `while` y `do...while`

**Cuándo:** repites mientras se cumpla una condición.

```php
$intentos = 0;
while ($intentos < 3) {
    echo "Intento $intentos\n";
    $intentos++;
}
```

`do...while` ejecuta el bloque **al menos una vez**:

```php
$i = 10;
do {
    echo $i;
    $i++;
} while ($i < 5);
// Muestra 10 una vez
```

### 2.5 `break` y `continue`

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 3) continue; // salta el 3
    if ($i === 7) break;    // termina el bucle
    echo "$i ";            // 1 2 4 5 6
}
```

### 2.6 Intercalar PHP y HTML

```php
<?php $productos = ["Teclado", "Ratón"]; ?>

<ul>
<?php foreach ($productos as $producto): ?>
    <li><?= htmlspecialchars($producto) ?></li>
<?php endforeach; ?>
</ul>
```

La sintaxis `foreach (...): ... endforeach;` es cómoda dentro de HTML.

---

## 3. Arrays

### 3.1 Array numérico

```php
$colores = ["rojo", "verde", "azul"];

echo $colores[0];      // rojo (empieza en 0)
$colores[] = "amarillo"; // añade al final
$colores[1] = "negro";   // modifica
echo count($colores);    // 4
```

**Recorrerlo:**

```php
foreach ($colores as $color) {
    echo "<p>" . htmlspecialchars($color) . "</p>";
}
```

### 3.2 Array asociativo

**Cuándo:** necesitas campos con nombre.

```php
$alumno = [
    "nombre" => "Sara",
    "edad" => 19,
    "nota" => 8
];

echo $alumno["nombre"]; // Sara
$alumno["nota"] = 9;

foreach ($alumno as $clave => $valor) {
    echo "$clave: $valor<br>";
}
```

### 3.3 Arrays multidimensionales

**Caso:** lista de alumnos.

```php
$alumnos = [
    ["nombre" => "Ana", "nota" => 8],
    ["nombre" => "Luis", "nota" => 4],
    ["nombre" => "Eva", "nota" => 7]
];

echo $alumnos[0]["nombre"]; // Ana

foreach ($alumnos as $alumno) {
    if ($alumno["nota"] >= 5) {
        echo $alumno["nombre"] . " ha aprobado<br>";
    }
}
```

### 3.4 Funciones útiles de arrays

```php
$numeros = [5, 2, 8];

count($numeros);          // 3
array_push($numeros, 10); // añade 10
array_pop($numeros);      // quita el último
in_array(8, $numeros);    // true
sort($numeros);           // orden ascendente
rsort($numeros);          // orden descendente

$persona = ["nombre" => "Ana", "edad" => 20];
array_keys($persona);     // ["nombre", "edad"]
array_values($persona);   // ["Ana", 20]
isset($persona["edad"]);  // true
```

**Ejemplo práctico: calcular la media:**

```php
$notas = [6, 8, 10];
$media = array_sum($notas) / count($notas);
echo "Media: $media"; // 8
```

---

## 4. Errores y excepciones

### 4.1 Detectar errores mientras desarrollas

```php
error_reporting(E_ALL);
ini_set("display_errors", "1"); // SOLO desarrollo
```

Para inspeccionar valores: `var_dump($variable);`. El operador `@` oculta avisos de una expresión, pero **es mejor gestionar el error**.

### 4.2 `try`, `catch`, `throw`, `finally`

**Caso:** no permitir divisiones por cero.

```php
function dividir(float $a, float $b): float {
    if ($b == 0) {
        throw new InvalidArgumentException("Divisor cero");
    }
    return $a / $b;
}

try {
    echo dividir(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo " | Operación finalizada";
}
```

---

## 5. Funciones y archivos

### 5.1 Declarar, llamar y devolver valores

```php
function sumar($a, $b) {
    return $a + $b;
}

$resultado = sumar(3, 4);
echo $resultado; // 7
```

**`echo` vs `return`:** `echo` muestra; `return` entrega un valor para reutilizarlo.

### 5.2 Tipos de parámetros y retorno

```php
function calcularIVA(float $precio, float $iva = 0.21): float {
    return $precio * $iva;
}

echo calcularIVA(100);       // 21
echo calcularIVA(100, 0.10); // 10
```

Los parámetros opcionales van normalmente al final.

### 5.3 Paso por valor y por referencia

```php
function duplicarValor(int $n): void {
    $n *= 2;
}

function duplicarReferencia(int &$n): void {
    $n *= 2;
}

$x = 5;
duplicarValor($x);
echo $x; // 5

duplicarReferencia($x);
echo $x; // 10
```

`&` permite modificar la variable original.

### 5.4 Número variable de argumentos

```php
function sumarTodo(int ...$numeros): int {
    return array_sum($numeros);
}

echo sumarTodo(1, 2, 3, 4); // 10
```

**Alternativa vista en los apuntes:**

```php
function contarArgumentos() {
    return func_num_args();
    // func_get_args() obtiene todos en un array
    // func_get_arg(0) obtiene el primero
}
```

### 5.5 Funciones anónimas

```php
$doble = function ($n) {
    return $n * 2;
};

echo $doble(5); // 10
```

**Uso típico con arrays:**

```php
$numeros = [1, 2, 3];
$dobles = array_map(fn($n) => $n * 2, $numeros);
// [2, 4, 6]
```

### 5.6 Separar código: `include` y `require`

**`funciones.php`:**

```php
<?php
function saludar(string $nombre): string {
    return "Hola, $nombre";
}
```

**`index.php`:**

```php
<?php
require_once "funciones.php";
echo saludar("Marta");
```

| Instrucción | Uso |
|---|---|
| `include "archivo.php"` | Inserta un archivo; si falla, normalmente continúa con aviso |
| `require "archivo.php"` | El archivo es imprescindible |
| `include_once` | Incluye solo una vez |
| `require_once` | Requiere solo una vez; muy útil para funciones y clases |

**Separar lógica y presentación:**

```php
<?php
$mensaje = "Bienvenido";
?>
<h1><?= htmlspecialchars($mensaje) ?></h1>
```

### 5.7 Leer y escribir ficheros

**Caso:** guardar notas en un archivo.

```php
$archivo = __DIR__ . "/notas.txt";

// Añadir una línea sin borrar el contenido previo
file_put_contents($archivo, "Nueva nota\n", FILE_APPEND);

// Leer todo
$contenido = file_get_contents($archivo);
echo nl2br(htmlspecialchars($contenido));
```

**Alternativa con apertura manual:**

```php
$fp = fopen("notas.txt", "a"); // a: añadir; w: sobrescribir; r: leer
fwrite($fp, "Hola\n");
fclose($fp);
```

**Leer línea a línea:**

```php
$fp = fopen("notas.txt", "r");
if ($fp !== false) {
    while (($linea = fgets($fp)) !== false) {
        echo htmlspecialchars($linea) . "<br>";
    }
    fclose($fp);
}
```

---

## 6. Cadenas y fechas

### 6.1 Trabajar con textos

```php
$texto = "  Hola PHP  ";

echo trim($texto);                // "Hola PHP"
echo strlen("Hola");              // 4
echo strtoupper("hola");          // HOLA
echo strtolower("HOLA");          // hola
echo str_replace("PHP", "web", $texto);
echo substr("abcdef", 1, 3);      // bcd
echo strpos("Hola PHP", "PHP");    // 5
```

**Ojo:** `strpos` devuelve `0` si encuentra el texto al principio; por eso se compara con `!== false`:

```php
if (strpos("PHP es útil", "PHP") !== false) {
    echo "Encontrado";
}
```

**Separar y unir:**

```php
$partes = explode(",", "rojo,verde,azul");
echo implode(" - ", $partes); // rojo - verde - azul
```

**Comparar textos:**

```php
strcmp("ana", "ana"); // 0 si son iguales
```

### 6.2 Fechas y horas

```php
date_default_timezone_set("Europe/Madrid");

echo date("d/m/Y");     // día/mes/año actual
echo date("H:i:s");     // hora actual
echo time();            // timestamp actual
echo date("d/m/Y", strtotime("+7 days")); // dentro de 7 días
```

**Caso:** calcular días aproximados entre fechas:

```php
$inicio = new DateTime("2026-11-01");
$fin = new DateTime("2026-11-17");
echo $inicio->diff($fin)->days; // 16
```

---

## 7. Formularios

### 7.1 POST: enviar y recibir datos

**`formulario.html`:**

```html
<form action="procesar.php" method="post">
    <label>Nombre: <input type="text" name="nombre" required></label>
    <button type="submit">Enviar</button>
</form>
```

**`procesar.php`:**

```php
<?php
$nombre = trim($_POST["nombre"] ?? "");

if ($nombre === "") {
    exit("Debes indicar un nombre");
}

echo "Hola, " . htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
```

**Claves:** `method="post"` → `$_POST`; `name="nombre"` → clave del array; `action` → archivo receptor.

### 7.2 GET: parámetros en la URL

URL de ejemplo: `producto.php?id=12`

```php
<?php
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id === false || $id === null) {
    exit("ID no válido");
}
echo "Producto número " . $id;
```

**Generar enlace:**

```html
<a href="producto.php?id=12">Ver producto</a>
```

| GET | POST |
|---|---|
| Parámetros visibles en la URL | Datos enviados en el cuerpo de la petición |
| Útil para filtros, búsquedas, identificadores | Útil para formularios que crean o modifican datos |
| `$_GET["campo"]` | `$_POST["campo"]` |

`$_REQUEST` puede reunir entradas de distintos orígenes, pero **es más claro usar `$_GET` o `$_POST` explícitamente**.

### 7.3 Formulario que se procesa a sí mismo

**`saludo.php`:**

```php
<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"] ?? "");
    $mensaje = $nombre !== "" ? "Hola, $nombre" : "Falta el nombre";
}
?>
<form method="post">
    <input name="nombre" required>
    <button>Saludar</button>
</form>
<p><?= htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8") ?></p>
```

### 7.4 Varios valores: `name="colores[]"`

```html
<form method="post" action="colores.php">
    <select name="colores[]" multiple>
        <option value="rojo">Rojo</option>
        <option value="azul">Azul</option>
        <option value="verde">Verde</option>
    </select>
    <button>Enviar</button>
</form>
```

**`colores.php`:**

```php
<?php
$colores = $_POST["colores"] ?? [];

if (!is_array($colores)) {
    exit("Datos inválidos");
}

foreach ($colores as $color) {
    if (is_string($color)) {
        echo htmlspecialchars($color) . "<br>";
    }
}
```

También sirve para casillas de verificación con el mismo nombre terminado en `[]`.

### 7.5 Validación

**Caso:** comprobar email y edad.

```php
$email = trim($_POST["email"] ?? "");
$edad = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Email incorrecto");
}
if ($edad === false || $edad === null || $edad < 18) {
    exit("Debes ser mayor de edad");
}
echo "Datos válidos";
```

**Regla práctica:** valida siempre en PHP, aunque tengas `required`, `type="email"` o `min` en HTML.

### 7.6 Redirigir

```php
<?php
header("Location: gracias.php");
exit;
```

Debe ejecutarse **antes de imprimir HTML o texto**.

### 7.7 Subir archivos

**Formulario:**

```html
<form action="subir.php" method="post" enctype="multipart/form-data">
    <input type="file" name="documento" required>
    <button>Subir</button>
</form>
```

**`subir.php` (ejemplo limitado a PDF):**

```php
<?php
if (!isset($_FILES["documento"]) ||
    $_FILES["documento"]["error"] !== UPLOAD_ERR_OK) {
    exit("Error al subir");
}

$archivo = $_FILES["documento"];
if ($archivo["size"] > 2 * 1024 * 1024) {
    exit("Máximo 2 MB");
}

$mime = (new finfo(FILEINFO_MIME_TYPE))->file($archivo["tmp_name"]);
if ($mime !== "application/pdf") {
    exit("Solo se admiten PDF");
}

$destino = __DIR__ . "/uploads/" . bin2hex(random_bytes(12)) . ".pdf";
// Crea previamente la carpeta uploads con permisos adecuados.
if (!move_uploaded_file($archivo["tmp_name"], $destino)) {
    exit("No se pudo guardar");
}
echo "Archivo recibido";
```

**Importante:** no confíes en el nombre o la extensión que envía el usuario. En aplicaciones reales, almacena los archivos fuera del directorio público o restringe su acceso.

---

## 8. Cookies y sesiones

**Diferencia rápida:** cookie = dato guardado en el navegador; sesión = datos asociados al usuario en el servidor. PHP normalmente usa una cookie para identificar la sesión.

### 8.1 Crear y leer una cookie

**Caso:** recordar el tema visual durante una hora.

```php
<?php
setcookie("tema", "oscuro", [
    "expires" => time() + 3600,
    "path" => "/",
    "httponly" => true,
    "samesite" => "Lax"
]);
```

En **la siguiente petición**:

```php
$tema = $_COOKIE["tema"] ?? "claro";
echo "Tema: " . htmlspecialchars($tema);
```

`setcookie()` debe ejecutarse antes de enviar HTML. No actualiza automáticamente `$_COOKIE` en la petición actual.

### 8.2 Borrar una cookie

```php
setcookie("tema", "", [
    "expires" => time() - 3600,
    "path" => "/"
]);
```

Para borrarla, usa la misma ruta (y dominio, si se estableció).

### 8.3 Contador de visitas con cookie

```php
<?php
$visitas = (int) ($_COOKIE["visitas"] ?? 0);
$visitas++;

setcookie("visitas", (string) $visitas, time() + 86400);
echo "Visitas registradas en este navegador: $visitas";
```

Es un contador orientativo: el usuario puede borrar o modificar sus cookies.

### 8.4 Iniciar sesión y guardar datos

**`entrar.php`:**

```php
<?php
session_start(); // antes de HTML

// Ejemplo didáctico: suponemos que el usuario YA ha sido validado.
session_regenerate_id(true);
$_SESSION["usuario"] = "Ana";

header("Location: privada.php");
exit;
```

**`privada.php`:**

```php
<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}

echo "Hola, " . htmlspecialchars($_SESSION["usuario"]);
```

**No es un login real:** antes de asignar `$_SESSION["usuario"]`, habría que verificar credenciales de forma segura.

### 8.5 Eliminar datos y cerrar sesión

**`salir.php`:**

```php
<?php
session_start();
$_SESSION = [];
session_destroy();
header("Location: login.php");
exit;
```

Para cerrar sesión completamente también se debe invalidar la cookie de sesión con sus parámetros adecuados.

**Cuándo usar cada una:**
- **Cookie:** preferencias no sensibles, como idioma o tema.
- **Sesión:** usuario autenticado, carrito o datos temporales del servidor.
- Nunca guardes contraseñas en cookies.

---

## 9. POO: clases y objetos

### 9.1 Clase, propiedades, constructor y métodos

**Caso:** representar un producto.

```php
<?php
class Producto {
    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrar(): string {
        return $this->nombre . ": " . $this->precio . " €";
    }
}

$producto = new Producto("Teclado", 29.99);
echo $producto->mostrar();
```

- `class` define la plantilla.
- `new` crea el objeto.
- `__construct()` se ejecuta al crear el objeto.
- `$this->` accede a propiedades/métodos del objeto actual.
- `->` accede a métodos/propiedades desde un objeto.

### 9.2 Visibilidad y encapsulación

| Modificador | Acceso |
|---|---|
| `public` | Desde cualquier parte |
| `protected` | Desde la clase y clases hijas |
| `private` | Solo desde la propia clase |

**Getter y setter:**

```php
class Cuenta {
    private float $saldo = 0;

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function ingresar(float $cantidad): void {
        if ($cantidad <= 0) {
            throw new InvalidArgumentException("Cantidad inválida");
        }
        $this->saldo += $cantidad;
    }
}

$cuenta = new Cuenta();
$cuenta->ingresar(50);
echo $cuenta->getSaldo(); // 50
```

En lugar de permitir `$cuenta->saldo = -100`, se controla el cambio con métodos.

### 9.3 Getters y setters mágicos: `__get` y `__set`

```php
class Alumno {
    private string $nombre = "";

    public function __get(string $propiedad): mixed {
        if ($propiedad === "nombre") return $this->nombre;
        throw new Exception("Propiedad desconocida");
    }

    public function __set(string $propiedad, mixed $valor): void {
        if ($propiedad !== "nombre" || !is_string($valor)) {
            throw new InvalidArgumentException("Dato inválido");
        }
        $this->nombre = $valor;
    }
}

$a = new Alumno();
$a->nombre = "Mar"; // llama a __set
echo $a->nombre;    // llama a __get
```

**Preferencia práctica:** para casos sencillos, suele ser más claro definir `getNombre()` y `setNombre()` explícitos.

---

## 10. POO: herencia, métodos mágicos y namespaces

### 10.1 Herencia con `extends` y `parent`

**Caso:** distintos tipos de empleado.

```php
class Empleado {
    protected string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function descripcion(): string {
        return "Empleado: " . $this->nombre;
    }
}

class Programador extends Empleado {
    private string $lenguaje;

    public function __construct(string $nombre, string $lenguaje) {
        parent::__construct($nombre);
        $this->lenguaje = $lenguaje;
    }

    public function descripcion(): string {
        return parent::descripcion() . " | " . $this->lenguaje;
    }
}

$p = new Programador("Eva", "PHP");
echo $p->descripcion(); // Empleado: Eva | PHP
```

- `extends` hereda.
- `parent::__construct(...)` llama al constructor padre.
- `parent::metodo()` llama a un método del padre.
- Redefinir un método en la hija permite especializar su comportamiento.

### 10.2 Convertir objeto a texto: `__toString`

```php
class Libro {
    public function __construct(private string $titulo) {}

    public function __toString(): string {
        return $this->titulo;
    }
}

echo new Libro("Aprender PHP"); // Aprender PHP
```

### 10.3 Otros métodos mágicos

| Método | Cuándo se ejecuta |
|---|---|
| `__construct()` | Al crear un objeto |
| `__destruct()` | Al destruirse el objeto |
| `__get($nombre)` | Al leer una propiedad inaccesible o inexistente |
| `__set($nombre, $valor)` | Al escribir una propiedad inaccesible o inexistente |
| `__toString()` | Al convertir un objeto a cadena |
| `__call($nombre, $args)` | Al llamar a un método inaccesible o inexistente |

### 10.4 Espacios de nombres (`namespace` y `use`)

**`Modelos/Producto.php`:**

```php
<?php
namespace App\Modelos;

class Producto {
    public function saludar(): string {
        return "Soy un producto";
    }
}
```

**`index.php`:**

```php
<?php
require_once __DIR__ . "/Modelos/Producto.php";

use App\Modelos\Producto;

$p = new Producto();
echo $p->saludar();
```

`namespace` evita conflictos entre clases que se llaman igual. `use` permite referenciarlas con un nombre más corto.

### 10.5 Excepción personalizada

```php
class SaldoInsuficienteException extends Exception {}

function retirar(float $saldo, float $cantidad): float {
    if ($cantidad > $saldo) {
        throw new SaldoInsuficienteException("No hay saldo suficiente");
    }
    return $saldo - $cantidad;
}

try {
    echo retirar(20, 30);
} catch (SaldoInsuficienteException $e) {
    echo $e->getMessage();
}
```

---

## 11. Miniaplicaciones prácticas

### 11.1 Formulario de notas + función + array

**Archivo único `notas.php`:**

```php
<?php
function resultado(float $nota): string {
    return $nota >= 5 ? "Aprobado" : "Suspenso";
}

$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota = filter_input(INPUT_POST, "nota", FILTER_VALIDATE_FLOAT);
    if ($nota === false || $nota === null || $nota < 0 || $nota > 10) {
        $mensaje = "Nota inválida";
    } else {
        $mensaje = "Resultado: " . resultado($nota);
    }
}
?>
<form method="post">
    <label>Nota (0-10):
        <input type="number" name="nota" min="0" max="10" step="0.1" required>
    </label>
    <button>Comprobar</button>
</form>
<p><?= htmlspecialchars($mensaje) ?></p>
```

**Qué practica:** POST, validación, `if`, función con `return`, mezcla de HTML y PHP.

### 11.2 Carrito sencillo con sesiones

**`carrito.php`:**

```php
<?php
session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $producto = trim($_POST["producto"] ?? "");

    if ($producto !== "") {
        $_SESSION["carrito"][] = $producto;
    }

    header("Location: carrito.php"); // evita reenviar POST al recargar
    exit;
}
?>
<h1>Carrito</h1>
<form method="post">
    <input name="producto" placeholder="Nombre del producto" required>
    <button>Añadir</button>
</form>
<ul>
<?php foreach ($_SESSION["carrito"] as $producto): ?>
    <li><?= htmlspecialchars($producto, ENT_QUOTES, "UTF-8") ?></li>
<?php endforeach; ?>
</ul>
```

**Qué practica:** `session_start()`, `$_SESSION`, arrays, formularios, `foreach` y redirección.

### 11.3 Clase + array de objetos

```php
<?php
class Alumno {
    public function __construct(
        private string $nombre,
        private float $nota
    ) {}

    public function estaAprobado(): bool {
        return $this->nota >= 5;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}

$alumnos = [
    new Alumno("Ana", 8),
    new Alumno("Luis", 4),
    new Alumno("Eva", 6)
];

foreach ($alumnos as $alumno) {
    echo htmlspecialchars($alumno->getNombre()) . ": ";
    echo $alumno->estaAprobado() ? "Aprobado" : "Suspenso";
    echo "<br>";
}
```

**Qué practica:** constructor, propiedades privadas, métodos, arrays de objetos y `foreach`.

---

## 12. Chuleta rápida y errores típicos

### Qué usar según el ejercicio

| Si necesitas… | Usa… |
|---|---|
| Mostrar algo | `echo`, `<?= ... ?>` |
| Tomar decisiones | `if / elseif / else`, `switch` |
| Repetir N veces | `for` |
| Repetir mientras se cumpla algo | `while` |
| Recorrer una lista | `foreach` |
| Guardar varios datos | Array `[]` |
| Reutilizar lógica | `function` y `return` |
| Reutilizar código de otro archivo | `require_once` |
| Recibir formulario | `$_POST`, `$_GET` |
| Validar una entrada | `filter_var`, `filter_input`, `isset`, `empty` |
| Enviar a otra página | `header("Location: ..."); exit;` |
| Recordar una preferencia | `setcookie`, `$_COOKIE` |
| Mantener datos entre páginas | `session_start`, `$_SESSION` |
| Modelar entidades con datos y acciones | `class`, `new`, `$this->` |
| Especializar una clase | `extends`, `parent::` |
| Gestionar un fallo controlado | `throw`, `try`, `catch` |
| Guardar/leer texto | `file_put_contents`, `file_get_contents` |

### Errores típicos que debes evitar

1. **Olvidar `$`:** `nombre` no es `$nombre`.
2. **Confundir `=` con `==` o `===`:** asignar no es comparar.
3. **Usar `+` para unir cadenas:** en PHP se usa `.`.
4. **Olvidar `break` en `switch`:** puede entrar en los siguientes casos.
5. **Acceder a una clave inexistente:** usa `$_POST["campo"] ?? ""`.
6. **Confundir `echo` con `return`:** uno muestra y el otro devuelve.
7. **Olvidar `name` en un campo HTML:** sin `name`, no se envía como esperas.
8. **Usar `$_GET` para un formulario POST:** deben coincidir método y superglobal.
9. **Enviar HTML antes de `header()`, `setcookie()` o `session_start()`:** puede producir el error *headers already sent*.
10. **No llamar a `session_start()` en cada script que use `$_SESSION`.**
11. **Acceder directamente a propiedades `private`:** usa métodos públicos.
12. **Imprimir datos del usuario sin escapar:** usa `htmlspecialchars(...)` al insertarlos en HTML.
13. **Confiar solo en validación HTML:** valida también en PHP.
14. **Ocultar errores con `@`:** gestiona los fallos cuando sea posible.

### Plantilla mínima para empezar un ejercicio

```php
<?php
// 1. Recoger / preparar datos
$datos = [2, 4, 6];

// 2. Procesar
function calcularTotal(array $valores): int {
    return array_sum($valores);
}
$total = calcularTotal($datos);

// 3. Mostrar
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio PHP</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>Total: <?= $total ?></p>
</body>
</html>
```

---

**Nota sobre el alcance:** esta guía reorganiza de forma práctica los temas de los cinco PDF. Algunos ejemplos incorporan pequeñas mejoras de robustez y seguridad (como `htmlspecialchars`, validación de entradas, `require_once` y comprobaciones de subida de archivos) para que puedas reutilizarlos con menos errores. No sustituye una referencia completa de PHP.
