# Desarrollo-Servidor-26-27
Este es el GITHUB de la asignatura de Desarrollo de Servidor 26/27
## TEMA 1
#### `info_basica.php`
Para este ejercicio, crea un documento en esta carpeta llamado info_basica.php, similar al del ejemplo anterior, pero mostrando tu nombre y tu año de nacimiento usando variables. Es decir, crearás dos variables para almacenar estos dos datos, y los
mostrarás en una frase que diga “Me llamo XXXX y nací en el año YYYY”.
Prueba la página en un navegador y echa un vistazo al código fuente, intentando detectar qué contenidos HTML se han generado desde PHP.

Y esto quedaria asi: 

![EJ1](/TEMA1/img/info.png)

---

#### `curriculum.php` 

Crea una página en la carpeta de ejercicios llamada **curriculum.php** donde, utilizando
variables variables, muestres parte de tu currículum (por ejemplo, un párrafo con tus
estudios y otro con los idiomas que hablas), tanto en español,valencià como en otro
idioma que elijas.

![alt text](/TEMA1/img/curriculum.png)

#### `area_circular.php`

 Crea una página en la carpeta de ejercicios llamada area_circulo.php. En
ella, crea una variable $radio y ponle el valor 3.5. Según esa variable, calcula en otra
variable el área del círculo (PI * 𝑟𝑎𝑑𝑖𝑜2
), deberás definir la constante PI, y muestra por
pantalla el texto “El área del círculo es XX.XX”, donde XX.XX será el resultado de calcular el área.

![alt text](/TEMA1/img/areaCirculo.png)

#### `prediccion.php`

Intenta predecir qué resultado va a sacar por pantalla cada instrucción echo
de este código PHP. Luego podrás comprobar si estabas en lo cierto poniendo el código
en una página y probándolo en un navegador

- Codido a predecir: 
```php
<?php
$num1 = 3;
$num2 = 5;
$num3 = 8;
$num1 *= 4;
echo $num1;//12
echo $num1 <= $num2;//false
echo $num3 > $num1 and $num3 > $num2;//false
echo $num3 > $num1 or $num3 > $num2;//true
echo $num1 > $num2 xor $num1 > $num3;//false, XOR = true + true = false
$num3--;//7
echo $num3;//7
$num3 += $num1;//19
echo $num3;//19
?>
```

Paguina web: 

![alt text](/TEMA1/img/prediccion.png)

#### `prueba_if.php`
Crea una página llamada prueba_if.php en la carpeta de ejercicios del tema. Crea en
ella dos variables llamadas $nota1 y $nota2, y dales el valor de dos notas de examen
cualesquiera (con decimales si quieres). Después, utiliza expresiones if..else para determinar qué nota es la mayor de las dos.

![alt text](/TEMA1/img/prueba_if.png)

#### `prueba_if2.php`

Modifica el ejercicio anterior añadiendo una tercera nota $nota3 , y determinando cuál
de las 3 notas es ahora la mayor. Para ello, deberás ayudarte esta vez de la estructura
if..elseif..else.

![alt text](/TEMA1/img/prueba_if2.png)

#### `contador.php`
Crea una página llamada contador.php en la carpeta de ejercicios del tema. Utiliza una
estructura for para contar los números del 1 al 100 (separados por comas), y luego una
estructura while para contar los números del 10 al 0 (una cuenta atrás, separada por
guiones).
Al final debe quedarte algo como esto:
1,2,3,4,5,6,7,8,9,10,11,12,13,14,15…
10-9-8-7-6-5-4-3-2-1-0

![fALTA IMAGEN](312313.png)