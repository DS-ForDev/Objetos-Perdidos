<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/dist/css/styles.css">
    
</head>
<body>
  <header class="navbar">
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
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contacto.php">Contacto</a>
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

<main class="content">
  <div class="fondo">
    <div class="container-fluid" style="padding-top: 80px;">
        <div class="card">
            <h2>Sobre Nosotros</h2>
            <p>Fundada en Bogotá en 2017, Dolphin Telecomunicaciones S.A.S nació con el propósito de crear la red de servicios más grande del país. Nos dedicamos a ofrecer soluciones tecnológicas innovadoras que aportan a las distancias y conectan a las personas de manera eficiente y segura.</p>
        </div>

        <div class="card2">
            <h2>Misión</h2>
            <p>Desarrollamos procesos tecnológicos sostenibles que responden a las necesidades específicas de nuestros clientes. Nuestro enfoque es dinámico, innovador y eficiente, siempre gestionando con eficiencia. Trabajamos bajo los más altos estándares de calidad y ponemos énfasis en la atención al cliente.</p>
        </div>

        <div class="card3">
            <h2>Visión</h2>
            <p>Aspiramos a ser reconocidos y acreditados a nivel nacional como líderes en telecomunicaciones para el año 2030. Nuestra meta es ser referentes en soluciones tecnológicas en redes y datos de manera eficiente y segura, destacando por nuestra innovación y compromiso con la excelencia.</p>
        </div>
    </div>
  </div>
</main>

<footer class="text-center text-white py-4" style="background-color: #333;">
    <div class="container">
      <p class="mb-0">&copy; 2024 Dolphin Telecommunication. Todos los derechos reservados.</p>
      <p class="mb-0">Síguenos en:</p>
      <div>
        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
