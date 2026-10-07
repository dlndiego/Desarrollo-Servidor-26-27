<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ejcookies.php · Inicio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/web.css">
</head>
<body>

  <!-- CABECERA + NAVEGACIÓN -->
  <header class="site-header">
    <a href="inicio.html" class="brand">ejcookies.php</a>

    <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
      <span></span><span></span><span></span>
    </button>

    <nav id="menu" class="nav" aria-label="Principal">
      <ul class="nav-links">
        <li><a href="#inicio" class="active">Inicio</a></li>
        <li><a href="#articulos">Artículos</a></li>
        <li><a href="#codigo">Código</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>

      <div class="nav-user">
        <span class="user-chip">
          <span class="avatar" id="avatar">?</span>
          <span id="nombre-nav">Invitado</span>
        </span>
        <!-- En PHP: logout.php hace setcookie("user", "", time()-3600) y redirige a login.php -->
        <a href="ejcookies.php" class="btn btn-outline">Cerrar sesión</a>
      </div>
    </nav>
  </header>

  <main>

    <!-- BIENVENIDA -->
    <section id="inicio" class="card hero">
      <div class="hero-text">
        <h1>Hola, <span id="nombre-hero">Invitado</span></h1>
        <p>
          La cookie <code>user</code> guarda tu nombre y se recuerda en la siguiente visita.
          Aquí tienes unos apuntes para entender cómo funcionan las cookies en PHP.
        </p>
        <div class="hero-actions">
          <a href="#articulos" class="btn btn-primary">Leer artículos</a>
          <a href="login.php" class="btn btn-ghost">Volver al login</a>
        </div>
      </div>

      <dl class="cookie-status" aria-label="Estado de la cookie">
        <div>
          <dt>Cookie</dt>
          <dd>user</dd>
        </div>
        <div>
          <dt>Valor</dt>
          <dd id="valor-cookie">sin definir</dd>
        </div>
        <div>
          <dt>Caducidad</dt>
          <dd>1000 s</dd>
        </div>
      </dl>
    </section>

    <!-- ARTÍCULOS -->
    <section id="articulos" class="section">
      <div class="section-head">
        <h2>Artículos</h2>
        <p>Lo básico para trabajar con cookies sin perderte.</p>
      </div>

      <div class="articles">

        <article class="card article featured">
          <span class="tag">Fundamentos</span>
          <h3>Qué es una cookie y para qué sirve</h3>
          <p>
            Una cookie es un pequeño dato que el servidor pide al navegador que guarde.
            En cada petición posterior el navegador lo devuelve, y así la aplicación
            puede recordar quién eres sin pedirte el nombre otra vez.
          </p>
          <div class="meta">
            <span>5 min de lectura</span>
            <span>Hoy</span>
          </div>
          <a href="#" class="read-more">Leer artículo</a>
        </article>

        <article class="card article">
          <span class="tag">PHP</span>
          <h3>Crear una cookie con setcookie()</h3>
          <p>
            Indica nombre, valor y caducidad. Recuerda que debe llamarse antes de enviar
            cualquier salida HTML.
          </p>
          <div class="meta"><span>4 min</span><span>Ayer</span></div>
          <a href="#" class="read-more">Leer artículo</a>
        </article>

        <article class="card article">
          <span class="tag">PHP</span>
          <h3>Leer y comprobar $_COOKIE</h3>
          <p>
            Usa <code>isset()</code> y <code>empty()</code> para saber si la cookie existe
            y tiene datos antes de mostrarla.
          </p>
          <div class="meta"><span>3 min</span><span>Hace 2 días</span></div>
          <a href="#" class="read-more">Leer artículo</a>
        </article>

        <article class="card article">
          <span class="tag">Seguridad</span>
          <h3>HttpOnly, Secure y SameSite</h3>
          <p>
            Tres opciones que evitan que un script ajeno lea tu cookie o que se envíe
            desde otro sitio.
          </p>
          <div class="meta"><span>6 min</span><span>Hace 3 días</span></div>
          <a href="#" class="read-more">Leer artículo</a>
        </article>

        <article class="card article">
          <span class="tag">Sesiones</span>
          <h3>Cookies frente a sesiones</h3>
          <p>
            La cookie vive en el navegador; la sesión vive en el servidor. Cuándo usar cada
            una y por qué no guardar contraseñas en ninguna.
          </p>
          <div class="meta"><span>7 min</span><span>Hace 1 semana</span></div>
          <a href="#" class="read-more">Leer artículo</a>
        </article>

      </div>
    </section>

    <!-- CÓDIGO DE EJEMPLO -->
    <section id="codigo" class="section">
      <div class="section-head">
        <h2>El ejercicio, paso a paso</h2>
        <p>Comprueba la cookie y, si está vacía, créala con una caducidad de 1000 segundos.</p>
      </div>

      <div class="card code-card">
        <div class="code-bar">
          <span class="dot"></span><span class="dot"></span><span class="dot"></span>
          <span class="filename">ejcookies.php</span>
        </div>
<pre><code><span class="c">&lt;?php</span>
<span class="k">if</span> (!<span class="f">empty</span>(<span class="v">$_COOKIE</span>[<span class="s">'user'</span>])) {
    <span class="k">echo</span> <span class="s">"Bienvenido de nuevo, "</span> . <span class="v">$_COOKIE</span>[<span class="s">'user'</span>];
} <span class="k">else</span> {
    <span class="f">setcookie</span>(<span class="s">'user'</span>, <span class="v">$_POST</span>[<span class="s">'usuario'</span>], <span class="f">time</span>() + <span class="n">1000</span>);
    <span class="k">echo</span> <span class="s">"Cookie creada. Recarga la página."</span>;
}
<span class="c">?&gt;</span></code></pre>
      </div>
    </section>

    <!-- CONTACTO -->
    <section id="contacto" class="section">
      <div class="card contact">
        <div>
          <h2>¿Dudas con el ejercicio?</h2>
          <p>Escríbenos y te respondemos en cuanto podamos.</p>
        </div>
        <form class="contact-form" action="#" method="post">
          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="3" placeholder="Cuéntanos qué necesitas" required></textarea>
          <button type="submit" class="btn btn-primary">Enviar mensaje</button>
        </form>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <p>ejcookies.php · Ejercicio de cookies en PHP</p>
    <ul>
      <li><a href="inicio.html">Inicio</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="logout.php">Cerrar sesión</a></li>
    </ul>
  </footer>

  <script>
    // Lee la cookie "user" y muestra el nombre (si usas PHP, puedes sustituirlo por <?= htmlspecialchars($_COOKIE['user'] ?? 'Invitado') ?>)
    (function () {
      var match = document.cookie.match(/(?:^|; )user=([^;]*)/);
      var nombre = match ? decodeURIComponent(match[1]) : '';
      if (nombre) {
        document.getElementById('nombre-nav').textContent = nombre;
        document.getElementById('nombre-hero').textContent = nombre;
        document.getElementById('valor-cookie').textContent = nombre;
        document.getElementById('avatar').textContent = nombre.charAt(0).toUpperCase();
      }

      // Menú móvil
      var toggle = document.querySelector('.nav-toggle');
      var menu = document.getElementById('menu');
      toggle.addEventListener('click', function () {
        var abierto = menu.classList.toggle('open');
        toggle.setAttribute('aria-expanded', abierto);
      });
    })();
  </script>
</body>
</html>