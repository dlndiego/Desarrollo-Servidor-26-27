<link rel="stylesheet" href="css/pags.css">
<header class="app-header">
  <div class="header-container">
    
    <!-- Logotipo y Nombre de la Empresa -->
    <div class="header-brand">
      <div class="brand-logo-small">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
          <polyline points="2 17 12 22 22 17"></polyline>
          <polyline points="2 12 12 17 22 12"></polyline>
        </svg>
      </div>
      <span class="brand-title">Apex Dynamics</span>
    </div>

    <!-- Menú de Navegación -->
    <nav class="header-nav">
      <a href="index.php" class="active">INICIO</a>
      <a href="pag1.php">PAG 1</a>
      <a href="pag2.php">PAG 2</a>
    </nav>

    <!-- Zona de Usuario / Cierre de Sesión -->
    <div class="header-user">
      <a href="logout.php" class="btn-logout" title="Cerrar sesión">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
          <polyline points="16 17 21 12 16 7"></polyline>
          <line x1="21" y1="12" x2="9" y2="12"></line>
        </svg>
        <span>Salir</span>
      </a>
    </div>

  </div>
</header>

<!-- Contenido principal / Mensaje de bienvenida -->
<main class="main-content">
  <div class="welcome-banner">
    <p class="welcome-message">
      ¡Bienvenido de nuevo a la pagina 2, <strong><?php echo htmlspecialchars($_SESSION['loginusu'] ?? 'Usuario'); ?></strong>!
    </p>
  </div>
</main>