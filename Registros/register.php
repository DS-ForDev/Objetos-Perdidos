<?php
try {
    // Conexión a la base de datos
    $pdo = new PDO('mysql:host=localhost;dbname=ObjetosPerdidos', 'tu_usuario', 'tu_contraseña');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Datos recibidos desde el formulario
    $nombre = $_POST['nombre']; // Nombre de usuario
    $email = $_POST['correo']; // Correo del usuario
    $password = $_POST['contraseña']; // Contraseña en texto plano
    $direccion = $_POST['direccion'] ?? null; // Dirección opcional
    $fechaNacimiento = $_POST['fechanacimiento'] ?? null; // Fecha opcional
    $telefono = $_POST['telefono'] ?? null; // Teléfono opcional

    // Validar datos importantes (por ejemplo, nombre y correo no deben estar vacíos)
    if (empty($nombre) || empty($email) || empty($password)) {
        throw new Exception("Por favor, llena todos los campos obligatorios (Nombre, Email, Contraseña).");
    }

    // Verifica que el rol 'Usuario' exista en la base de datos
    $stmtRol = $pdo->prepare("SELECT ID_rol FROM roles WHERE Nombre_rol = :nombreRol");
    $stmtRol->execute(['nombreRol' => 'Usuario']); // Rol predeterminado para nuevos usuarios
    $idRol = $stmtRol->fetchColumn();

    if (!$idRol) {
        throw new Exception("No se encontró el rol 'Usuario'. Asegúrate de que exista en la tabla roles.");
    }

    // Encriptar la contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta de inserción
    $stmt = $pdo->prepare(
        "INSERT INTO Usuario 
        (ID_rol, Nombre_de_Usuario, Correo, Contraseña, Direccion, Fecha_de_Nacimiento, Telefono) 
        VALUES 
        (:idRol, :nombre, :email, :password, :direccion, :fechaNacimiento, :telefono)"
    );

    // Ejecutar la consulta
    $stmt->execute([
        'idRol' => $idRol, // ID del rol (en este caso, 'Usuario')
        'nombre' => $nombre,
        'email' => $email,
        'password' => $passwordHash,
        'direccion' => $direccion,
        'fechaNacimiento' => $fechaNacimiento,
        'telefono' => $telefono,
    ]);

    echo "Usuario registrado exitosamente.";
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>


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
    <link rel="icon" href="../assets/img/logoOP.png" type="image/x-icon">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

  /*style de registros*/

  :root {
            --primary-color: #2f4f7f;
            --secondary-color: #f7f7f7;
            --terciary-color: #45a0e6;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        .header {
            width: 100%;
            background-color: var(--primary-color);
            padding: 10px 0;
            color: var(--secondary-color);
            text-align: center;
        }

        .header img {
            width: 40px;
            vertical-align: middle;
            margin-right: 10px;
        }

        .header a {
            color: var(--secondary-color);
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        .container {
            width: 400px;
            background-color: var(--terciary-color);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 20px;
        }

        .form-container {
            background-color: var(--secondary-color);
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            color: var(--secondary-color);
            background-color: var(--primary-color);
            padding: 10px;
            border-radius: 25px;
            margin: -40px auto 20px;
            width: 70%;
            font-size: 18px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: var(--primary-color);
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid var(--primary-color);
            border-radius: 5px;
            font-size: 14px;
        }

        .terms {
            display: flex;
            align-items: center;
            justify-content: left;
            font-size: 14px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .terms input {
            margin-right: 5px;
        }

        .submit-btn {
            background-color: var(--terciary-color);
            color: var(--secondary-color);
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: var(--primary-color);
        }

        .footer {
            margin-top: 20px;
            color: var(--primary-color);
            font-size: 14px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .footer a {
            color: var(--primary-color);
            text-decoration: none;
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
              <a class="nav-link active" aria-current="page" href="../carousel/index.php">Inicio</a>
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
    <div class="container">
        <h2>Regístrate</h2>
        <p style="color: var(--secondary-color);">Ingresa tu información para poder ingresar</p>
        <div class="form-container">
            <form method="POST" action="procesarRegistro.php">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre de usuario..." required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo electrónico..." required>

                <label for="birthdate">Fecha de nacimiento:</label>
                <input type="date" id="fechanacimiento" name="fechanacimiento" required>

                <label for="phone">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu número de teléfono..." required>

                <label for="address">Dirección:</label>
                <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección..." required>

                <label for="password">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Escribe una contraseña segura..." required>

                <label for="confirm-password">Confirma la contraseña:</label>
                <input type="password" id="confirmarcontraseña" name="confirm-password" placeholder="Vuelve a escribir la contraseña..." required>

                <div class="terms">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">Acepto los Términos y Condiciones</label>
    </div>

                <button type="submit" class="submit-btn">Registrarse</button>
            </form>
        </div>
    </div>
  </div>
</body>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <div class="footer">
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
