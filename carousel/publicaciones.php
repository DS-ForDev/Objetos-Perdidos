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


/*publicaciones xd*/


.lost-found-container {
	width: 60%;
	margin: 0 auto;
font-family: 'Arial'
	, sans-serif;

}

/* Limitar el tamaC1o de las imC!genes grandes despuC)s de la descripciC3n */
.found-item-image-large {
	max-width: 500px; /* Ajusta el ancho mC!ximo segC:n sea necesario */
	width: 100%;
height:
	-50px;
	border-radius: 20px;
	margin: 20px 0;
}




/* Contenedor del logo y tC-tulo */
.logo-container {
display:
	flex;
align-items:
	center;
}

.logo {
	width: 60px;
	height: 60px;
	margin-right: 15px;
}
.header {
	width: 100%;
background-color:
	var(--primary-color);
	padding: 10px 0;
color:
	var(--secondary-color);
text-align:
	center;
}

.header img {
	width: 40px;
vertical-align:
	middle;
	margin-right: 10px;
}

.header a {
color:
	var(--secondary-color);
text-decoration:
	none;
	margin: 0 15px;
	font-size: 16px;
}

/* Enlaces de navegaciC3n y C-conos en la cabecera */
.header nav a {
color:
	white;
	margin-left: 20px;
text-decoration:
	none;
	font-size: 18px;
}

nav a img {
	width: 15px;
	height: 15px;
	margin-left: 15px;
}

/* SecciC3n de bC:squeda */
.search-section {
display:
	flex;
justify-content:
	center;
	margin: 20px 0;
}

.search-section input {
	width: 50%;
	padding: 15px;
	font-size: 16px;
	border-radius: 25px;
	border: 1px solid #ccc;
}

.search-section .filter-button {
	padding: 15px 25px;
	font-size: 16px;
background-color:
#2B547E;
color:
	white;
	border-radius: 25px;
cursor:
	pointer;
	margin-left: 10px;
}

/* Botones principales */
.button-section {
display:
	flex;
justify-content:
	space-around;
	margin-top: 20px;
}

.primary-button {
	padding: 15px 25px;
background-color:
#2B547E;
color:
	white;
	border-radius: 25px;
border:
	none;
	font-size: 18px;
cursor:
	pointer;
}

.primary-button:
hover {
background-color:
#1e4170;
}

/* Publicaciones */
.post {
display:
	flex;
flex-direction:
	column;
background-color:
#e1e8f0;
	margin-bottom: 20px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.user-info {
display:
	flex;
align-items:
	center;
	margin-bottom: 10px;
}

.user-info img {
	width: 50px;
	height: 50px;
	border-radius: 50%;
	margin-right: 15px;
}

.user-info p {
	font-size: 16px;
}

.status {
background-color:
#5bc0de; /* Celeste predeterminado */
	padding: 5px 10px;
	border-radius: 5px;
font-weight:
	bold;
margin-left:
	auto;
}

.status.encontrado {
background-color:
#28a745; /* Verde para estado encontrado */
color:
	white;
}

/* DescripciC3n de la publicaciC3n */
.description {
	margin-top: 10px;
}

.found-item-image {
	width: 100%;
	border-radius: 10px;
	margin: 20px 0;
}

/* BotC3n de reclamo */
.claim-button {
background-color:
#337ab7;
color:
	white;
	padding: 10px 20px;
	font-size: 16px;
	border-radius: 5px;
	margin-top: 15px;
cursor:
	pointer;
}

.claim-button:
hover {
background-color:
#23527c;
}

/* Pie de pC!gina */
footer {
background-color:
#2f5a9f;
color:
	white;
	padding: 20px;
text-align:
	center;
	font-size: 14px;
}

.social-icons a {
	margin: 0 10px;
}

.social-icons img {
	width: 24px;
	height: 24px;
}
/* Estilo general para todos los botones */
button {
background-color:
#2B547E; /* Azul oscuro */
color:
	white;
	padding: 12px 20px;
border:
	none;
	border-radius: 25px;
	font-size: 16px;
cursor:
	pointer;
transition:
	background-color 0.3s ease; /* TransiciC3n suave al pasar el mouse */
}

/* Botones principales (B?Perdiste un objeto?, B?Encontraste un objeto?) */
.primary-button {
background-color:
#2B547E;
	padding: 15px 25px;
	font-size: 18px;
font-weight:
	bold;
	border-radius: 25px;
}

.primary-button:
hover {
background-color:
#1e4170; /* Color mC!s oscuro al pasar el mouse */
}

/* BotC3n de filtros */
.filter-button {
background-color:
#2B547E;
	padding: 12px 20px;
	font-size: 16px;
	border-radius: 25px;
}

.filter-button:
hover {
background-color:
#1e4170;
}

/* BotC3n "Este es mi objeto" y "Enviar una reseC1a" */
.claim-button {
background-color:
#337ab7; /* Azul oscuro */
color:
	white;
	padding: 10px 20px;
	font-size: 16px;
	border-radius: 25px;
cursor:
	pointer;
transition:
	background-color 0.3s ease;
}

.claim-button:
hover, .review-button:
hover {
background-color:
#23527c; /* Azul mC!s oscuro al pasar el mouse */
}

.review-button {
background-color:
#337ab7; /* Azul oscuro */
color:
	white;
	padding: 10px 20px;
	font-size: 16px;
	border-radius: 25px;
cursor:
	pointer;
transition:
	background-color 0.3s ease;
position:
	relative; /* Necesario para posicionar el icono */
}

.review-button::before {
content: 'b'; /* Estrella amarilla */
color:
	yellow;
	font-size: 20px;
position:
	absolute;
	left: 10px; /* Ajusta segC:n sea necesario */
	top: 50%;
transform:
	translateY(-50%);
}

.review-button:
hover {
background-color:
#23527c; /* Azul mC!s oscuro al pasar el mouse */
}
.footer {
	margin-top: 20px;
color:
	var(--primary-color);
	font-size: 14px;
display:
	flex;
justify-content:
	center;
	gap: 10px;
}

.footer a {
color:
	var(--primary-color);
text-decoration:
	none;
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

    
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Objetos Perdidos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="publicaciones.php">publicaciones</a>
          </li>
          </ul>
          <form class="d-flex me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
          <!-- Menú desplegable de perfil -->
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
        </ul>
        
      </div>
    </div>
  </nav>
</header>

<main>

  <div class="container marketing">


    <!-- START THE FEATURETTES -->

    <div class="lost-found-container">
<!-- SecciC3n de bC:squeda -->
<div class="search-section">
<input type="text" placeholder="Buscar..." />
<button class="filter-button">Filtros</button>
</div>

<!-- Botones principales -->
<div class="button-section">
<button class="primary-button">¿Perdiste un objeto? Publícalo aquí</button>
<button class="primary-button">¿Encontraste un objeto? Publícalo aquí</button>
</div>

<!-- Publicaciones -->

<!-- Publicacion 1 -->
<div class="post">
<div class="user-info">
<img src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_161203595.png" alt="Profile" />
Maria Tereza De Calcuta<br>Hace un día
<span class="status">Estado: No Encontrado</span>
</div>
<div class="description">
Se han encontrado varios objetos en un lugar publico en la biblioteca del "Tunal". Entre los objetos hay:
<ul>
<li>Un monedero negro con textura de cocodrilo.</li>
<li>Dos llaves de auto con llaveros distintos.</li>
<li>Un llavero en forma de anillo con tres llaves mC!s.</li>
</ul>
<img class="found-item-image found-item-image-large" src="https://objetos-perdidos.co/wp-content/uploads/2024/10/elementosperdidos.jpeg" alt="Objetos encontrados" />

</div><button class="claim-button">Este es mi objeto</button>
</div>
<!-- Publicacion 2 -->
<div class="post">
<div class="user-info">
<img src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_160054836.png" alt="Profile" />
Pepito Perez Ramirez<br>Hace 3 dias
<span class="status encontrado">Estado: Encontrado</span>
</div>
<div class="description">
Se encontraron varios objetos. Los objetos incluyen:
<ul>
<li>Un diario antiguo con un lomo de cuero gastado.</li>
<li>Una guitarra electrica con una funda de guitarra.</li>
<li>Una fotografC-a antigua enmarcada en plata.</li>
<li>Una tarjeta de SFTP sin saldo.</li>
</ul>
<img class="found-item-image found-item-image-large" src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_160437076.png" alt="Objetos encontrados" />

</div><button class="claim-button">Escribir reseña</button>
</div>
<!-- Publicacion 3 -->
<div class="post">
  <div class="user-info">
  <img src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_161203595.png" alt="Profile" />
  Ana Paula Menéndez<br>Hace 2 días
    <span class="status">Estado: No Encontrado</span>
  </div>
  <div class="description">
    Se han encontrado varios objetos en un parque infantil en la colonia "Las Rosas". Entre los objetos hay:
    <ul>
      <li>Un llavero en forma de osito con una llave de candado.</li>
      <li>Dos llaves de auto con llaveros de peluche.</li>
      <li>Una pulsera de cuentas azules con un dije de estrella.</li>
    </ul>
    <img class="found-item-image found-item-image-large" src="https://objetos-perdidos.co/wp-content/uploads/2024/10/elementosperdidos.jpeg" alt="Objetos encontrados" />
    </div>
  <button class="claim-button">Este es mi objeto</button>
</div>

<!-- Publicacion 4 -->
<div class="post">
  <div class="user-info">
    <img src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_161203595.png" alt="Profile" />
    Carlos Eduardo López<br>Hace 3 días
    <span class="status encontrado">Estado: Encontrado</span>
  </div>
  <div class="description">
    Se han encontrado varios objetos en un restaurante del centro comercial "Las Palmas". Entre los objetos hay:
    <ul>
      <li>Un llavero en forma de corazón con una llave de casillero.</li>
      <li>Un estuche de lentes de sol negro.</li>
      <li>Una billetera gris con tarjetas de crédito y efectivo.</li>
    </ul> 
    <img class="found-item-image found-item-image-large" src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_160437076.png" alt="Objetos encontrados" />

</div><button class="claim-button">Escribir reseña</button>
</div>

<!-- Publicacion 5 -->
<div class="post">
  <div class="user-info">
    <img src="https://objetos-perdidos.co/wp-content/uploads/2024/10/imagen_2024-10-06_161203595.png" alt="Profile" />
    Lorena Martínez Ramírez<br>Hace 4 días
    <span class="status">Estado: No Encontrado</span>
  </div>
  <div class="description">
    Se han encontrado varios objetos en la cafetería de la universidad "San Marcos". Entre los objetos hay:
    <ul>
      <li>Un llavero de goma con una figura de unicornio.</li>
      <li>Dos llaves de casa con un llavero de cuerda.</li>
      <li>Un pequeño monedero azul con dibujos de flores.</li>
    </ul>
    <img class="found-item-image found-item-image-large" src="https://objetos-perdidos.co/wp-content/uploads/2024/10/objetos_perdidos3.jpeg" alt="Objetos encontrados" />
  </div>
  <button class="claim-button">Este es mi objeto</button>
</div>

</div>

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
