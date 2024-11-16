<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Objetos Perdidos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
  }

  @media (min-width: 768px) {
      .bd-placeholder-img-lg {
          font-size: 3.5rem;
      }
  }

  .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: var(--primary-color, rgba(0, 0, 0, .1));
      border: solid var(--primary-color, rgba(0, 0, 0, .15));
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em var(--primary-color, rgba(0, 0, 0, .1)), inset 0 .125em .5em var(--primary-color, rgba(0, 0, 0, .15));
  }

  .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
  }

  .bi {
      vertical-align: -.125em;
      fill: var(--primary-color);
  }

  .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
  }

  .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
  }

  .btn-bd-primary {
      --bd-violet-bg: var(--primary-color);
      --bd-violet-rgb: 47, 79, 127;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--secondary-color);
      --bs-btn-bg: var(--primary-color);
      --bs-btn-border-color: var(--primary-color);
      --bs-btn-hover-color: var(--secondary-color);
      --bs-btn-hover-bg: var(--terciary-color);
      --bs-btn-hover-border-color: var(--terciary-color);
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--secondary-color);
      --bs-btn-active-bg: var(--primary-color);
      --bs-btn-active-border-color: var(--primary-color);
  }

  .bd-mode-toggle {
      z-index: 1500;
  }

  .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
  }
</style>


    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="../assets/img/logoOP.png" alt="" style="width: 30px; height: 30px; margin-right: 10px;">
          <span class="font-weight-bold">Objetos Perdidos</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../carousel/Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../carousel/Contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Registros/login.php">Iniciar sesión</a>
            </li>
          </ul>
          <form class="d-flex me-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="perfilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Perfil
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="perfilDropdown">
                <li><a class="dropdown-item" href="/Registros/perfil.php">Ver perfil</a></li>
                <li><a class="dropdown-item" href="/Registros/editar_perfil.php">Configuración</a></li>
                <li><a class="dropdown-item" href="/Registros/ObjPerdido.php">Publicar</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Registros/logout.php">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<hr class="featurette-divider">
<hr class="featurette-divider">
<hr class="featurette-divider">

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Registro de Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form action="procesarregistro.php" method="POST">
                            <div class="mb-3">
                                <label for="tipo_documento" class="form-label">Tipo de Documento:</label>
                                <select name="tipo_documento" id="tipo_documento" class="form-select" required>
                                    <option value="CC">Cédula de Ciudadanía</option>
                                    <option value="TI">Tarjeta de Identidad</option>
                                    <option value="CE">Cédula de Extranjería</option>
                                    <option value="PP">Pasaporte</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="documento" class="form-label">Documento:</label>
                                <input type="text" name="documento" id="documento" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombres:</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos:</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono:</label>
                                <input type="tel" name="telefono" id="telefono" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico:</label>
                                <input type="email" name="correo" id="correo" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña:</label>
                                <input type="password" name="contrasena" id="contrasena" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección:</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                            <p class="text-center mt-3">
                            </p>¿Ya tienes una cuenta? <a href="login.php" class="link-primary">Iniciar Sesión</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end">
      <a href="#">
          <img src="/assets/img/arriba.png" alt="Ir Arriba" style="width: 30px; height: 30px;">
      </a>
  </p>
    <p>&copy;2024 Objetos Perdidos, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
  </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
