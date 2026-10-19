<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apex Dynamics — Iniciar Sesión</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Fuente moderna Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <main class="login-wrapper">
    <div class="login-card">
      
      <!-- Cabecera / Identidad de la Marca -->
      <div class="brand-header">
        <div class="brand-logo">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
            <polyline points="2 17 12 22 22 17"></polyline>
            <polyline points="2 12 12 17 22 12"></polyline>
          </svg>
        </div>
        <h1 class="brand-name">Apex Dynamics</h1>
        <p class="brand-tagline">Portal Corporativo de Acceso Seguro</p>
      </div>

      <!-- Formulario de Acceso -->
      <form class="login-form" action="" method="POST">
        
        <!-- Campo Usuario / Email -->
        <div class="input-group">
          <label for="username">Usuario o Correo Profesional</label>
          <div class="input-field">
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <input type="text" id="username" name="username" placeholder="usuario@apexdynamics.com" required autocomplete="username">
          </div>
        </div>

        <!-- Campo Contraseña -->
        <div class="input-group">
          <div class="label-row">
            <label for="password">Contraseña</label>
            <a href="#" class="forgot-link">¿Olvidaste la clave?</a>
          </div>
          <div class="input-field">
            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <input type="password" id="password" name="password" placeholder="••••••••••••" required autocomplete="current-password">
          </div>
        </div>

        <!-- Opciones secundarias -->
        <div class="form-options">
          <label class="remember-me">
            <input type="checkbox" name="remember" id="remember">
            <span class="custom-checkbox"></span>
            Mantener sesión activa
          </label>
        </div>

        <!-- Botón de Entrar -->
        <button type="submit" class="btn-primary">
          <span>Acceder al Sistema</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>

      </form>

      <!-- Pie de página de la tarjeta -->
      <footer class="card-footer">
        <p>© 2026 Apex Dynamics Inc. Todos los derechos reservados.</p>
      </footer>

    </div>
  </main>

</body>
</html>

<?php
    $fichero = 'txt/usuarios.txt';
    $existe = true;
    $usu = $_POST['username'];
    $contraseña = $_POST['password'];

    if (file_exists($fichero)){
        $filas = file($fichero);
        foreach ($filas as $fila) {
            $datos = explode(":", trim($fila));
            if($datos[0] == $usu && $datos[1] == $contraseña){
                session_start();
                $_SESSION['loginusu'] = $usu;
                header("Location: index.php");
                exit(); 

            }
        }
    }else{
        echo "El fichero no existe";
    }

?>