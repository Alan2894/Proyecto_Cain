<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container-2">
      <!-- Menú principal -->
      <div id="menu" class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Inicio -->
          <li class="nav-item">
            <a class="nav-link" href="/">Inicio</a>
          </li>
          
          <!-- Categorías -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoriasBtn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorías
            </a>
            <div id="categoriasList" class="dropdown-menu" aria-labelledby="categoriasBtn">
              <ul class="list-unstyled">
                <li><a class="dropdown-item" href="blusas">Blusas</a></li>
                <li><a class="dropdown-item" href="pantalones">Pantalones</a></li>
                <li><a class="dropdown-item" href="sudaderas">Sudaderas</a></li>
                <li><a class="dropdown-item" href="chamarras">Chamarras</a></li>
              </ul>
            </div>
          </li>
          
          <!-- Usuario -->
          <li class="nav-item dropdown ms-lg-auto">
              @if(session()->has('usuario'))
              <a class="nav-link dropdown-toggle" href="#" id="usuarioBtn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bienvenido, {{ session('usuario')['nombre'] ?? 'Usuario' }}
              </a>
              <div id="usuarioList" class="dropdown-menu dropdown-menu-end" aria-labelledby="usuarioBtn">
                <ul class="list-unstyled">
                  <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
                  <li>                     
                      <button type="submit" class="dropdown-item text-danger" onclick="cerrarSesion(event)">Cerrar Sesión</button>
                  </li>
                </ul>
              </div>
              @else
              <a class="nav-link dropdown-toggle" href="#" id="usuarioBtn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bienvenido
              </a>
              <div id="usuarioList" class="dropdown-menu dropdown-menu-end" aria-labelledby="usuarioBtn">
                <ul class="list-unstyled">
                  <li><a class="dropdown-item" href="login">Iniciar Sesión</a></li>
                  <li><a class="dropdown-item" href="registro">Registrarse</a></li>
                </ul>
              </div>
              @endif
          </li>
        </ul>
      </div>
      
      <!-- Botón para móviles -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
